@extends('layouts.dashmin')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('stylesheet/style.css') }}">
@endpush
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-30">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h4 class="font-20">Cursos pendientes</h4>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Invoice List Table -->
                <table class="table-striped" id="usuarios">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Subido</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($courses as $course)
                            <tr>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->price }}</td>
                                <td>{{ $course->created_at->format("d/m/Y H:i") }}</td>
                                <td>@include('partials.courses.status')</td>
                                <td><a href="{{ route('admin.pending.show', ['course' => $course]) }}" class="details-btn">{{ __("Detalles del Curso") }} <i class="icofont-arrow-right"></i></a></td>
                            </tr>
                        @empty
                            <div class="container">
                                <div class="empty-results">
                                    {{ __("No tienes ningún curso pendiente de aprobacion") }}
                                </div>
                            </div>
                        @endforelse
                    </tbody>
                    
                </table>
                <!-- End Invoice List Table -->
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
            
            "order": [[ 2, 'desc' ]]
        });
        
    </script>
@endpush