@extends('layouts.admin')
@push('css')
    <link
        href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css"
        rel="stylesheet"
    />

    <style>
        .drag-list {
            width: 100%;
            margin: 0 auto;
        }

        .drag-list > li {
            list-style: none;
            background: rgb(255, 255, 255);
            border: 1px solid rgb(196, 196, 196);
            margin: 5px 0;
            font-size: 14px;
        }

        .drag-list .title {
            display: inline-block;
            width: 90%;
            padding: 6px 6px 6px 12px;
            vertical-align: top;
            color:#000;
        }

        .drag-list .drag-area {
            display: inline-block;
            background: rgb(158, 211, 179);
            width: 8%;
            height: 34px;
            vertical-align: center;
            float: right;
            cursor: move;
            text-align: center;
            padding-top: 5px;
        }
        .drag-list .VIDEO {
            background: #b21f2d;
        }
        .drag-list .SECTION {
            background: #9e9e9e;
        }
        .drag-list .ZIP {
            background: #1d1d1d;
        }
    </style>
@endpush
@section("content")
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Vertical Form -->
            <div class="row">
    <div class="col-12">
        <div class="form-element with-icons mb-30">
            @include('partials.form_errors')

            <!-- Invoice Top -->
            @isset($update)
            
            @endisset
            <!-- End Invoice Top -->

            {!! Form::model($course, $options) !!}
                @isset($update)
                    @method("PUT")
                @endisset
                

                <input type="hidden" name="orderedUnits" />

                <div class="form-group">
                    {!! Form::label('title', __("Título")) !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description', __("Descripcion del curso")) !!}
                    {!! Form::text('description', old('description') ?? $course->description, ['class' => 'form-control']) !!}
                </div>

                <div class="custom-file">
                    {!! Form::file('picture', ['class' => 'custom-file-input', 'id' => 'picture']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('price', __("Escoge un precio para tu curso")) !!}
                    {!! Form::select('price', \App\Models\Course::prices, null, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('categories[]', __("Selecciona las categorías")) !!}
                    {!! Form::select('categories[]', \App\Models\Category::pluck("name", "id"), null, ["class" => "form-control", "multiple" => true]) !!}
                </div>
                
                @isset($update)
                <div class="form-group">
                    <h3 class="text-muted text-center mb-2">
                        {{ __("Organiza las unidades de tu curso") }}
                    </h3>
                    <ul class="drag-list">
                        @forelse($course->units as $unit)
                            <li data-id="{{ $unit->id }}">
                                <span class="title">
                                    {{ $unit->title }}
                                    @if($unit->free)
                                        <span class="badge badge-success float-right">
                                            {{ __("Gratis") }}
                                        </span>
                                    @endif
                                </span>
                                <span class="drag-area {{ $unit->unit_type }}">
                                    @switch($unit->unit_type)
                                        @case(\App\Models\Unit::VIDEO)
                                            <i class="fa fa-file-video-o text-white"></i>
                                        @break
                                        @case(\App\Models\Unit::SECTION)
                                            <i class="fa fa-list-alt text-white"></i>
                                        @break
                                        @case(\App\Models\Unit::ZIP)
                                            <i class="fa fa-file-zip-o text-white"></i>
                                        @break
                                    @endswitch
                                </span>
                            </li>
                        @empty
                            <div class="empty-results">
                                {!! __("No tienes ninguna unidad todavía: :link", ["link" => "<a href='".route('teacher.units.create')."'></a>"]) !!}
                                <a href="{{ route('teacher.units.create', ['course' => $course]) }}" class="btn btn-primary btn-sm">{{ __("Añadir Unidad") }} <i class="icofont-arrow-right"></i></a>
                            </div>
                        @endforelse
                    </ul>
                </div>
                @endisset
                

                <div class="proceed-to-checkout invoice-edit d-flex align-items-center justify-content-end mr-20 mt-4">
                    <a href="{{ route('teacher.courses') }}" class="btn btn-primary shadow-md mr-2">{{ __("Volver al listado de cursos") }}</a>
                    {!! Form::submit($textButton, ['class' => 'btn']); !!}
                </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
            <!-- END: Vertical Form -->
            
        </div>
    </div>
@endsection