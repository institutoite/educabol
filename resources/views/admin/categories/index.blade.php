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
            <button class="btn btn-primary shadow-md mr-2" type="button" onclick="window.location.href='{{ route('admin.categories.create') }}'" class="btn style--two orange">Crear Categoria</button>
            <div class="hidden md:block mx-auto text-gray-600">Listado de Categorias</div>
            
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                    <table class="table" id="usuarios">
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
                                    <td><img width="100" src="{{ asset("storage/categories/$category->picture" )}}" alt="" /></td>
                                    <td>{{ $category->created_at->format("d/m/Y") }}</td>
                                    <td>{{ $category->updated_at->format("d/m/Y") }}</td>
                                    <td>
                                    <a href="{{ route('admin.categories.edit', ['category' => $category]) }}"><img src="{{ asset('../../assets/img/svg/c-edit.svg') }}" alt="" class="svg"></a>
                                    </td>
                                    
                                </tr>
                            @empty
                            <div class="container">
                                <div class="empty-results">
                                    {!! __("No tienes ningún categoria todavía: :link", ["link" => "<a href='".route('admin.categories.create')."'>Crear mi primera categoria</a>"]) !!}
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