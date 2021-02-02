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
                    <h4 class="font-20">Categorias</h4>

                    <div class="d-flex flex-wrap">
                        <!-- Button -->
                        <button type="button" onclick="window.location.href='{{ route('admin.categories.create') }}'" class="btn style--two orange">Crear Unidad</button>
                        <!-- Button -->
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Invoice List Table -->
                <table class="table-striped" id="usuarios">
                    <thead>
                        <tr>
                            <th>{{ __("Id") }}</th>
                            <th>{{ __("Nombre") }}</th>
                            <th>{{ __("Descripcion") }}</th>
                            <th>{{ __("Foto") }}</th>
                            <th>{{ __("Alta") }}</th>
                            <th>{{ __("Edición") }}</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td><img src="{{ $category->imagePath() }}" alt="images"></td>
                                <td>{{ $category->created_at->format("d/m/Y") }}</td>
                                <td>{{ $category->updated_at->format("d/m/Y") }}</td>
                                <td>
                                <a href="{{ route('admin.categories.edit', ['category' => $category]) }}"><img src="../../assets/img/svg/c-edit.svg" alt="" class="svg"></a>
                                <a href="{{ route('admin.categories.destroy', ['category' => $category]) }}"><img src="../../assets/img/svg/table-colse.svg" alt="" class="svg"></a>
                                </td>
                                
                            </tr>
                        @empty
                        <div class="container">
                            <div class="empty-results">
                                {!! __("No tienes ningún unidad todavía: :link", ["link" => "<a href='".route('admin.categories.create')."'>Crear mi primera unidad</a>"]) !!}
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
        });
        
    </script>
@endpush