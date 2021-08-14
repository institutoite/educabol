@extends('layouts.admin')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('stylesheet/style.css') }}">
@endpush
@section("content")
        <!-- BEGIN: Invoice -->
        <div class="intro-y box overflow-hidden mt-5">
        {!! Form::open(['route'=>['admin.course.status', $course],'method'=>'PUT']) !!}
            <div class="border-b border-gray-200 dark:border-dark-5 text-center sm:text-left">
                <div class="px-5 py-10 sm:px-20 sm:py-20">
                    <div class="text-theme-1 dark:text-theme-10 font-semibold text-3xl">Informacion del Curso</div>
                    <div class="mt-2"> <span class="font-medium">{{ $course->title }}</span> </div>
                    <div class="mt-1">{{ $course->description }}</div>
                </div>
                <div class="flex flex-col lg:flex-row px-5 sm:px-20 pt-10 pb-10 sm:pb-20">
                    <div>
                        <div class="text-base text-gray-600">Detalle del curso</div>
                        <div class="mt-1">{{ $course->created_at->format("d/m/Y H:i") }}</div>
                        <div class="mt-1">@include('partials.courses.status')</div>
                    </div>
                    <div class="lg:text-right mt-10 lg:mt-0 lg:ml-auto">
                        <div class="text-base text-gray-600">Precio</div>
                        <div class="mt-1">Bs. {{ $course->price }}</div>
                    </div>
                </div>
            </div>
            <div class="px-5 sm:px-16 py-10 sm:py-20">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>{{ __("Nombre") }}</th>
                            <th>{{ __("Tipo") }}</th>
                            <th>{{ __("Contenido") }}</th>
                            </tr>
                        </thead>

                        <tbody class="card_color-bg">
                            @forelse($course->units as $unit)
                                <tr>
                                    <td>{{ $unit->title }}</td>
                                    <td>{{ $unit->unit_type }}</td>
                                    <td>
                                        <iframe
                                            src="{{ $unit->url }}"
                                            allowfullscreen
                                            allow="autoplay"
                                        ></iframe>
                                    </td>
                                </tr>
                                @empty
                                <div class="container">
                                    <div class="empty-results">
                                        {!! __("Este curso no tiene ninguna unidad todavía") !!}
                                    </div>
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
                <div class="text-center sm:text-left mt-10 sm:mt-0">
                    {!! Form::submit( 'Rechazar Curso', ['class' => 'btn btn-default', 'name' => 'submitbutton', 'value' => '1'])!!}
                </div>
                <div class="text-center sm:text-right sm:ml-auto">
                {!! Form::submit( 'Aceptar Curso', ['class' => 'btn btn-default', 'name' => 'submitbutton', 'value' => '3']) !!}
                </div>
            </div>
        {!! Form::close() !!}
        </div>
        <!-- END: Invoice -->
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

