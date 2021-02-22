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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Template stylesheets -->
@endpush

@section('content')

<section class="pt-0">
    
    <!-- Checkout steps -->
    
    <div class="pt-3 pt-lg-4 pb-5 pb-lg-6 mb-2 mb-lg-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="steps steps-sm">
                        <ul class="row">
                            <li class="col  active">
                                <a href="{{ url('/cart') }}">
                                    <span class="step-item" data-text="Carrito">
                                        <span>1</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col active">
                                <a href="{{ url('/payment') }}">
                                    <span class="step-item" data-text="Metodos de pago">
                                        <span>2</span>
                                    </span>
                                </a>
                            </li>
                            <li class="col current">
                                <a href="{{ url('/receipt') }}">
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

    <!-- Receipt -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">

                <div class="alert alert-primary shadow-sm rounded alert-dismissible fade show p-3 p-lg-4 mb-5 p-md-5" role="alert">
                    <h2 class="h6 mb-0">Tu orden se esta procesando!, te enviaremos un mensaje de confirmacion a tu correo </h2>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- Receipt shipping info -->

                <h2 class="pre-label font-size-base">Datos del comprador</h2>

                <div class="bg-white shadow-sm rounded mb-3 p-3 p-md-5">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Nombre completo</small>
                                <p>{{auth()->user()->name}}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Email</small>
                                <p>{{auth()->user()->email}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Receipt Order details -->

                <h2 class="pre-label font-size-base">Detalles de la orden</h2>

                <div class="bg-white shadow-sm rounded mb-3 p-3 p-md-5">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Order no.</small>
                                <p>{{$order->order_number}}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Fecha de orden</small>
                                <p>{{ $order->created_at->format("d/m/Y H:i") }}</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Receipt Payment details -->

                <h2 class="pre-label font-size-base">Detalles del pago</h2>

                <div class="bg-white shadow-sm rounded mb-3 p-3 p-md-5">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Total de cursos</small>
                                <p>{{$order->item_count}}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <small class="pre-label">Monto Total</small>
                                <p>Bs. {{$order->total_amount}}</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Buttons -->

                <div class="py-3">
                    <div class="row align-items-center no-gutters">
                        <div class="col-6">
                            <a href="profile-orders.html" class="btn btn-dark btn-primary btn-rounded px-lg-5">Order history</a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="profile-whishlist.html" class="btn btn-primary btn-rounded px-lg-5">My whishlist</a>
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