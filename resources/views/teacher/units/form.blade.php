@extends('layouts.dashmin')

@section("content")
{{ Form::model($unit, $options) }}
    @isset($update)
        @method("PUT")
    @endisset
    <div class="row">
        <div class="col-lg-12">
            <div class="form-element py-30 multiple-column">
                <h4 class="font-20 mb-4">{{ $title }}</h4>
                @include("partials.form_errors")
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Form Group -->
                        <div class="form-group">
                            {!! Form::label('title', __("Título")) !!}
                            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => __("Ingresa el titulo de la unidad")]) !!}
                        </div>
                        <!-- End Form Group -->
                        
                        <!-- Form Group -->
                        <div class="form-group">
                            {!! Form::label('course_id', __("Selecciona el curso")) !!}
                            {!! Form::select('course_id', $courses->pluck("title", "id"), null, ["class" => "form-control"]) !!}
                        </div>
                        <!-- End Form Group -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Form Group -->
                        <div class="form-group">
                            {!! Form::label('free', __("¿Unidad gratuita?")) !!}
                            {!! Form::select('free', [
                                    0 => __("No"),
                                    1 => __("Sí"),
                                ], null, ["class" => "form-control"])
                            !!}
                        </div>
                        <!-- End Form Group -->
                        
                        <!-- Form Group -->

                        <!-- Form Group -->
                        <div class="custom-file">
                            {!! Form::label('file', __("Selecciona un archivo")) !!}
                            <input type="file" class="form-control" name="file">
                        </div>
                        <!-- End Form Group -->
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 text-right">
                        {!! Form::submit($textButton, ['class' => 'btn long']); !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
{{ Form::close() }}
@endsection