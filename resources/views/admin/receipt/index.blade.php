@extends('layouts.admin')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('stylesheet/style.css') }}">
@endpush
@section('content')
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <div class="hidden md:block mx-auto text-gray-600">Comprobantes pendientes</div>
            
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <div class="table-responsive">
                <!-- Invoice List Table -->
                <table class="table table-report -mt-2" id="usuarios">
                    <thead>
                        <tr>
                            <th>Orden</th>
                            <th>Estudiante</th>
                            <th>Fecha</th>
                            <th>Monto Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($orders as $order)
                            <tr>
                                <td>{{ $order->order_number }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->created_at->format("d/m/Y H:i") }}</td>
                                <td>Bs. {{ $order->total_amount }}</td>
                                <td><a href="{{ route('admin.receipt.process', ['order' => $order]) }}" class="table table-report -mt-2">{{ __("Ver Comprobante") }} <i class="icofont-arrow-right"></i></a></td>
                            </tr>
                        @empty
                            <div class="container">
                                <div class="empty-results">
                                    {{ __("No tiene comprobantes pendiente de aprobacion") }}
                                </div>
                            </div>
                        @endforelse
                    </tbody>
                    
                </table>
                <!-- End Invoice List Table -->
            </div>
        </div>
        <!-- END: Data List -->
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