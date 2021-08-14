@extends('layouts.admin')

@section("content")
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Vertical Form -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                        {{ $title }}
                    </h2>
                </div>
                @include("partials.form_errors")
                {{ Form::model($unit, $options) }}
                    @isset($update)
                        @method("PUT")
                    @endisset
                    <div id="vertical-form" class="p-5">
                        <div class="preview">
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
                        <div class="form-row">
                        <div class="col-12 text-right">
                            {!! Form::submit($textButton, ['class' => 'btn btn-primary shadow-md mr-2']); !!}
                        </div>
                </div>
                    </div>
                {{ Form::close() }}
            </div>
            <!-- END: Vertical Form -->
            
        </div>
    </div>
@endsection