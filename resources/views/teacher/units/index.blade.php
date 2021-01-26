@extends('layouts.dashmin')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('stylesheet/style.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-30">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h4 class="font-20">Unidades que imparto</h4>

                    <div class="d-flex flex-wrap">
                        <!-- Button -->
                        <button type="button" onclick="window.location.href='{{ route('teacher.units.create') }}'" class="btn style--two orange">Crear Unidad</button>
                        <!-- Button -->
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Invoice List Table -->
                <table class="table-striped" id="usuarios">
                    <thead>
                        <tr>
                            <th>{{ __("Orden") }}</th>
                            <th>{{ __("Título") }}</th>
                            <th>{{ __("Curso") }}</th>
                            <th>{{ __("Tipo") }}</th>
                            <th>{{ __("Duración") }}</th>
                            <th>{{ __("Alta") }}</th>
                            <th>{{ __("Edición") }}</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($units as $unit)
                            <tr>
                                <td>{{ $unit->order }}</td>
                                <td>{{ $unit->title }}</td>
                                <td>{{ $unit->course->title }}</td>
                                <td>{{ $unit->unit_type }}</td>
                                <td>{{ $unit->unit_time ?? "N/A" }}</td>
                                <td>{{ $unit->created_at->format("d/m/Y H:i") }}</td>
                                <td>{{ $unit->updated_at->format("d/m/Y") }}</td>
                                <td>
                                <a href="{{ route('teacher.units.edit', ['unit' => $unit]) }}"><img src="../../assets/img/svg/c-edit.svg" alt="" class="svg"></a>
                                <a href="{{ route('teacher.units.destroy', ['unit' => $unit]) }}"><img src="../../assets/img/svg/table-colse.svg" alt="" class="svg"></a>
                                </td>
                                
                            </tr>
                        @empty
                        <div class="container">
                            <div class="empty-results">
                                {!! __("No tienes ningún unidad todavía: :link", ["link" => "<a href='".route('teacher.units.create')."'>Crear mi primera unidad</a>"]) !!}
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
@section('js')
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
@endsection