@extends('layouts.dashmin')

@section("content")
{{ Form::model($unit, $options) }}
    @isset($update)
        @method("PUT")
    @endisset
    <div class="row">
        <div class="col-lg-6">
            <!-- Base Control -->
            <div class="form-element with-icons mb-30">
                <h4 class="font-20 mb-4">Nueva Unidad</h4>
                @include("partials.form_errors")

                    <!-- Form Group -->
                    <div class="form-group mb-4">
                        <label for="addonEmail2" class="mb-2 font-14 bold">Titulo</label>

                        <div class="input-group addon">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <img src="../../../assets/img/svg/c-edit.svg" alt="" class="svg">
                            </div>
                            </div>
                            {!! Form::text('title', null, ['class'=>'form-control','minlength'=>'1','maxlength'=>'500','placeholder'=>'Ingrese el titulo de la unidad','required']) !!}
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="course_id" class="mb-2 font-14 bold">Seleccione el curso</label>
                        {!! Form::select('course_id', $courses->pluck("title", "id"), null, ["class" => "form-control"]) !!}
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="free" class="mb-2 font-14 bold">¿Unidad gratuita?</label>
                        {!! Form::select('free', [
                                0 => __("No"),
                                1 => __("Sí"),
                            ], null, ["class" => "form-control"])
                        !!}
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="unit_type" class="mb-2 font-14 bold">Tipo de unidad</label>
                        {!! Form::select('unit_type', [
                                    \App\Models\Unit::VIDEO => __("Vídeo"),
                                    \App\Models\Unit::ZIP => __("Archivo comprimido"),
                                    \App\Models\Unit::SECTION => __("Sección")
                                ], null, ["class" => "form-control"])
                            !!}
                    </div>
                    <!-- End Form Group -->
                    
                    <!-- Button Group -->
                    <div class="button-group pt-1">
                        {!! Form::submit($textButton, ['class' => 'btn long']); !!}
                        <button onclick="window.location.href='{{ route('teacher.units') }}'" type="reset" class="link-btn bg-transparent ml-3 soft-pink">Cancelar</button>
                    </div>
                    <!-- End Button Group -->
                
            </div>
            <!-- End Base Control -->

        </div>

        <div class="col-lg-6">
            <!-- Base Control -->
            <div class="form-element with-icons mb-30">
                <h4 class="font-20 mb-4">LLenar en caso de Video</h4>
                @include("partials.form_errors")
                <!-- Form -->

                    <!-- Form Group -->
                    <div class="form-group mb-4">
                        <label for="addonEmail2" class="mb-2 font-14 bold">Duración del video</label>

                        <div class="input-group addon">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <img src="../../../assets/img/svg/watch.svg" alt="" class="svg">
                            </div>
                            </div>
                            {!! Form::number('unit_time', null, ['class' => 'form-control', 'placeholder' => __("Ingrese la duración del vídeo"), 'title'=>'Solo se permite numeros']) !!}
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group mb-4">
                        <label for="addonEmail2" class="mb-2 font-14 bold">Añadir iframe del video</label>

                        <div class="input-group addon">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <img src="../../../assets/img/svg/video-call.svg" alt="" class="svg">
                            </div>
                            </div>
                            {!! Form::text('content', old('content') ?? $unit->content, ['class' => 'form-control', 'placeholder' => __("Ingrese el iframe del vídeo")]) !!}
                        </div>
                    </div>
                    <!-- End Form Group -->
                
                <!-- End Form -->
            </div>
            <!-- End Base Control -->

            <!-- Base Control -->
            <div class="form-element with-icons mb-30">
                <h4 class="font-20 mb-4">LLenar en caso de archivo comprimido</h4>
                @include("partials.form_errors")
                <!-- Form -->

                    <!-- Form Group -->
                    <div class="custom-file">
                        {!! Form::file('file', ['class' => 'custom-file-input', 'id' => 'file']) !!}
                        {!! Form::label('file', __("Escoge un archivo"), ['class' => 'custom-file-label']) !!}
                    </div>
                    <!-- End Form Group -->
                
                <!-- End Form -->
            </div>
            <!-- End Base Control -->

        </div>
    </div>
{{ Form::close() }}
@endsection