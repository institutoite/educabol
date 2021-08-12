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
<div class="row">
    <div class="col-12">
        <div class="form-element with-icons mb-30">
            @include('partials.form_errors')

            <!-- Invoice Top -->
            @isset($update)
            <div class="invoice-pd c2-bg" data-bg-img="../../../assets/img/media/invoice-pattern.png">
                <div class="row">
                    <div class="col-md-6">
                            <!-- Invoice Left -->
                            <div class="invoice-left">
                                @if($course->picture)
                                    <div class="logo mb-3"><img alt="{{ $title }}" class="img-fluid" width="150" src="{{ $course->imagePath() }}" /></div>
                                @endif
                            </div>
                            <!-- End Invoice Left -->
                    </div>

                    <div class="col-md-6">
                        <!-- Invoice Right -->
                        <div class="invoice-right mt-5 mt-md-0">
                            <h3 class="white font-20 mb-3">Informacion del Curso</h3>

                            <ul class="status-list">
                            <li><span class="key font-14">Subido:</span> <span class="white bold font-17">{{ $course->created_at->format("d/m/Y H:i") }}</span></li>
                            
                            <li><span class="key font-14">Estado:</span>@include('partials.courses.status')</li>
                            </ul>
                        </div>
                        <!-- End Invoice Right -->
                    </div>
                    
                </div>
            </div>
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
                                {!! __("No tienes ninguna unidad todavía: :link", ["link" => "<a href='".route('teacher.units.create')."'>Añade nuevas unidades para tu curso</a>"]) !!}
                            </div>
                        @endforelse
                    </ul>
                </div>
                @endisset
                <div class="form-group">
                    {!! Form::label('description', __("Descripcion del curso")) !!}
                    {!! Form::text('description', old('description') ?? $course->description, ['class' => 'form-control']) !!}
                </div>

                <div class="custom-file">
                    {!! Form::file('picture', ['class' => 'custom-file-input', 'id' => 'picture']) !!}
                    {!! Form::label('picture', __("Selecciona la imagen de tu curso"), ['class' => 'custom-file-label']) !!}
                </div>

                <div class="proceed-to-checkout invoice-edit d-flex align-items-center justify-content-end mr-20 mt-4">
                    <a href="{{ route('teacher.courses') }}" class="btn preview">{{ __("Volver al listado de cursos") }}</a>
                    {!! Form::submit($textButton, ['class' => 'btn']); !!}
                </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

@push("js")
    <script src="/js/drag-arrange.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        jQuery(document).ready(function () {
            $('#summernote').summernote({
                height: 300,
            });

            $('li').arrangeable({dragSelector: '.drag-area'});
            $('.drag-list').on('drag.end.arrangeable', function () {
                let orderedUnits = [];
                const listItems = $(".drag-list li");
                let order = 1;
                for (let li of listItems) {
                    const id = $(li).data("id");
                    orderedUnits.push({
                        id,
                        order
                    });
                    order++;
                }
                $("input[name=orderedUnits]").val(JSON.stringify(orderedUnits));
            });
        });
    </script>
@endpush
