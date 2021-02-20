@extends('layouts.page')

@push('css')
   <!---- checkout ---->
    <!-- Vendor stylesheets -->

    <link rel="stylesheet" media="all" href="{{ asset('checkout/css/style.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('checkout/css/vendor/animate.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('checkout/css/vendor/font-awesome.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('checkout/css/vendor/linear-icons.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('checkout/css/vendor/owl.carousel.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('checkout/css/vendor/jquery.lavalamp.css') }}" />

    <!-- Template stylesheets -->
@endpush

@section('content')
    <section class="pt-0">
        <div class="pt-3 pt-lg-4 pb-5 pb-lg-6 mb-2 mb-lg-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="steps steps-sm">
                            <ul class="row">
                                <li class="col  current">
                                    <a href="<?php echo url('/cart')?>">
                                        <span class="step-item" data-text="Carrito">
                                            <span>1</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col">
                                    <a href="<?php echo url('/payment')?>">
                                        <span class="step-item" data-text="Metodos de Pago">
                                            <span>2</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col">
                                    <a href="<?php echo url('/receipt')?>">
                                        <span class="step-item" data-text="Detalle de la Compra">
                                            <span>3</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
    
                    <h2 class="pre-label font-size-base">Detalle del Carrito</h2>
    
                    @foreach ($cartItems as $item)
                    <div class="bg-white shadow-sm rounded mb-3 p-3 alert alert-dismissible" role="alert">
                        <button onclick="location.href='{{ route('cart.destroy', $item->id ) }}'" type="button" class="close" data-dismiss="alert" aria-label="Close" data-toggle="tooltip" data-placement="top" title="Eliminar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="row align-items-center no-gutters p-md-2">
                            <div class="col-lg-2">
                                <img src="assets/images//demo/product-1.png" alt="" class="img-fluid" />
                            </div>
                            <div class="col-lg-5 pl-lg-3 mb-2 mb-lg-0">
                                <h2 class="h5 mb-0">{{ $item->name }}</h2>
                            </div>
                            <div class="col-6 col-lg-3 text-right">
                                <div class="h5 mb-0">Bs. {{Cart::session(auth()->id())->get($item['id'])->getPriceSum()}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
    
                    <!-- Total price -->
    
                    <div class="bg-white shadow-sm rounded mb-2 p-3">
                        <div class="p-md-4">
                            <div class="row no-gutters">
                                <div class="col-6">
                                    <div class="h4 mb-0">Total</div>
                                </div>
                                <div class="col-6 text-right">
                                    <div class="h4 mb-0">Bs. {{\Cart::session(auth()->id())->getTotal()}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Buttons -->
    
                    <div class="py-3">
                        <div class="row align-items-center no-gutters">
                            <div class="col-6">
                                <a href="<?php echo url('/')?>" class="btn btn-dark btn-primary btn-rounded px-lg-5">Seguir Comprando</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="<?php echo url('/payment')?>" class="btn btn-primary btn-rounded px-lg-5">Siguiente paso</a>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
        
    </section>
@endsection

@push("js")
    <!---- checkout ---->
    <!-- Vendor Scripts -->

    <script src="{{ asset('checkout/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('checkout/js/vendor/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('checkout/js/vendor/in-view.min.js') }}"></script>
    <script src="{{ asset('checkout/js/vendor/jquery.lavalamp.js') }}"></script>
    <script src="{{ asset('checkout/js/vendor/owl.carousel.js') }}"></script>
    <script src="{{ asset('checkout/js/vendor/rellax.js') }}"></script>
    <script src="{{ asset('checkout/js/vendor/wow.js') }}"></script>
    <script src="{{ asset('checkout/js/vendor/tabzy.js') }}"></script>
    <script src="{{ asset('checkout/js/vendor/isotope.pkgd.js') }}"></script>

    <!-- Template Scripts -->

    <script src="{{ asset('checkout/js/main.js') }}"></script>
    <script src="{{ asset('checkout/js/custom.js') }}"></script>
    <!---- checkout ---->

@endpush