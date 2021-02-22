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
                                <li class="col  current">
                                    <a href="{{ url('/payment') }}">
                                        <span class="step-item" data-text="Metodos de pago">
                                            <span>2</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col">
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
    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
    
                    <h2 class="pre-label font-size-base">Metodos de Pago</h2>

                    
                    <div class="accordion br-sm" id="accordionPaymentExample">
                        <div class="card card-fill mb-3 shadow-sm rounded">
                            {!! Form::open(['route' => 'orders.store', 'method' => 'post', 'files' => true]) !!}
                            @csrf
                                <div class="card-header py-4 p-3 p-md-5">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <div class="flat-benefit-style2 clearfix">
                                                <div class="iconbox-benefit iconbox-width50">
                                                    <div class="iconbox iconbox-one">
                                                        <div class="iconbox-icon">
                                                            <img src="{{ asset('images/metodos-pago/tigomoney.png') }}" alt="images">
                                                        </div>
                                                        <div class="iconbox-content">
                                                            <h3>Tigo Money</h3>
                                                            <p>Tranferencia al +591 71039910.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="iconbox-benefit iconbox-width50">
                                                    <div class="iconbox iconbox-two">
                                                        <div class="iconbox-icon">
                                                            <img src="{{ asset('images/metodos-pago/bnb.png') }}" alt="images">
                                                        </div>
                                                        <div class="iconbox-content">
                                                            <h3>BNB</h3>
                                                            <p>Deposito o tranferencia al numero de cuenta: -------.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="iconbox-benefit iconbox-width50">
                                                    <div class="iconbox iconbox-three">
                                                        <div class="iconbox-icon">
                                                            <img src="{{ asset('images/metodos-pago/paypal.png') }}" alt="images">
                                                        </div>
                                                        <div class="iconbox-content">
                                                            <h3>Paypal</h3>
                                                            <p>-----------.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="iconbox-benefit iconbox-width50">
                                                    <div class="iconbox iconbox-four">
                                                        <div class="iconbox-icon">
                                                            <img src="{{ asset('images/metodos-pago/westernunion.png') }}" alt="images">
                                                        </div>
                                                        <div class="iconbox-content">
                                                            <h3>Western Union</h3>
                                                            <p>----------.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <br><br>
                                                    <input type="file" class="form-control" name="file" id="file">
                                                    <input type="submit" class="btn btn-sm btn-block btn-danger" value="Subir Comprobante">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        @include("partials.form_errors")
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    
    
                    <!--Buttons-->
    
                    <div class="py-3">
                        <div class="row align-items-center no-gutters">
                            <div class="col-6">
                                <a href="<?php echo url('/cart')?>" class="btn btn-dark btn-primary btn-rounded px-lg-5">Volver</a>
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