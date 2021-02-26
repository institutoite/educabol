@extends('layouts.dashmin')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('stylesheet/style.css') }}">
@endpush
@section("content")
<div class="row">
    <div class="col-12">
    
        <div class="form-element with-icons mb-30">
            
            <div class="container-fluid">
                <div class="card mb-30">
                    <div class="p-30 pb-4">
                        <h4 class="font-20">Comprobante de pago</h4>
                    </div>

                    <!-- Swiper -->
                    <div class="swiper-container swiper-default">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset("storage/receipts/$order->picture" )}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Invois Wrapper -->
            <div class="card_color-bg invoice-pd">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <!-- Invoice Payment Details -->
                        <div class="invoice payment-details mt-5 mt-xl-0">
                            <div class="invoice-title c4 bold font-14 mb-3">Detalles de la orden:</div>

                            <ul class="status-list">
                            <li><span class="key"># de orden:</span> <span class="font-17 bold">{{ $order->order_number }}</span></li>
                            <li><span class="key">Estudidante:</span> <span>{{ $order->user->name }}</span></li>
                            <li><span class="key">Fecha: </span> <span>{{ $order->created_at->format("d/m/Y H:i") }}</span></li>
                            <li><span class="key">Monto total:</span> <span>Bs. {{ $order->total_amount }}</span></li>
                            </ul>
                        </div>
                        <!-- End Invoice Payment Details -->
                    </div>
                </div>
            </div>
            <!-- End Invois Wrapper -->

            <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <!-- Touchspin -->
                            <div class="form-element touchspin mb-30">
                                <!-- Form -->
                                {!! Form::open(['route'=>['admin.receipt.status', $order],'method'=>'PUT']) !!}

                                    <!-- Form Group -->
                                    <div class="form-group mb-4">
                                        <h4 class="font-20 mb-3">Mensaje</h4>

                                        <textarea id="textarea1" name="textarea1" class="theme-input-style style--seven" placeholder="Mensaje de admision o rechazo al curso"></textarea>

                                    </div>
                                    <!-- End Form Group -->

                                    <div class="proceed-to-checkout invoice-edit d-flex align-items-center justify-content-end mr-20 mt-4">
                                        {!! Form::submit( 'Rechazar Inscripcion', ['class' => 'btn', 'name' => 'submitbutton', 'value' => '1'])!!}
                                        {!! Form::submit( 'Aceptar Inscripcion', ['class' => 'btn', 'name' => 'submitbutton', 'value' => '3']) !!}
                                    </div>

                                {!! Form::close() !!}
                                <!-- End Form -->
                            </div>
                            <!-- End Touchspin -->
                        </div>
                    </div>
                </div>  
        </div>
    </div>
    
</div>
@endsection
@push("js")
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#usuarios').DataTable({
            responsive: true,
            autoWidth: false,
            language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
        });
        
    </script>
@endpush

