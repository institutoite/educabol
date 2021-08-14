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
            <button class="btn btn-primary shadow-md mr-2" type="button" onclick="window.location.href='{{ route('teacher.units.create') }}'" class="btn style--two orange">Crear Unidad</button>
            <div class="hidden md:block mx-auto text-gray-600">Listado de Unidades</div>
            
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2" id="usuarios">
                <thead>
                    <tr>
                        <th>{{ __("Id") }}</th>
                        <th>{{ __("Título") }}</th>
                        <th>{{ __("Curso") }}</th>
                        <th>{{ __("Subido") }}</th>
                        <th>{{ __("Tipo") }}</th>
                        <th>{{ __("Contenido") }}</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($units as $unit)
                        <tr>
                            <td>{{ $unit->id }}</td>
                            <td>{{ $unit->title }}</td>
                            <td>{{ $unit->course->title }}</td>
                            <td>{{ $unit->created_at->format("d/m/Y H:i") }}</td>
                            <td>{{ $unit->unit_type }}</td>
                            <td>
                                <iframe
                                    src="{{ $unit->url }}"
                                    allowfullscreen
                                    allow="autoplay"
                                ></iframe>
                            </td>
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