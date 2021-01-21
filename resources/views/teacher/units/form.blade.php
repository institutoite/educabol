@push('css')
    <link
        href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css"
        rel="stylesheet"
    />
@endpush
<!-- units section -->

<div class="col-lg-12">
    <div class="form-element py-30 multiple-column">
        <h4 class="font-20 mb-20">{{ $title }}</h4>
        @include("partials.form_errors")
        {{ Form::model($unit, $options) }}
            @isset($update)
                @method("PUT")
            @endisset

            <div class="row">
                <div class="col-lg-6">
                    <!-- Form Group -->
                    <div class="form-group">
                        {!! Form::label('title', __("Título")) !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
                    <!-- End Form Group -->
                    
                    <!-- Form Group -->
                    <div class="form-group">
                        {!! Form::label('course_id', __("Selecciona el curso")) !!}
                        {!! Form::select('course_id', $courses->pluck("title", "id"), null, ["class" => "form-control"]) !!}
                    </div>
                    <!-- End Form Group -->
                    
                    <!-- Form Group -->
                    <div class="custom-file">
                        {!! Form::file('file', ['class' => 'custom-file-input', 'id' => 'file']) !!}
                        {!! Form::label('file', __("Escoge un archivo"), ['class' => 'custom-file-label']) !!}
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
                    <div class="form-group">
                        {!! Form::label('unit_type', __("Tipo de unidad")) !!}
                        {!! Form::select('unit_type', [
                                \App\Models\Unit::VIDEO => __("Vídeo"),
                                \App\Models\Unit::ZIP => __("Archivo comprimido"),
                                \App\Models\Unit::SECTION => __("Sección")
                            ], null, ["class" => "form-control"])
                        !!}
                    </div>
                    <!-- Form Group -->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            {!! Form::number('unit_time', null, ['class' => 'form-control', 'placeholder' => __("Duración de la unidad si es vídeo")]) !!}
                        </div>
                    </div>
                    <!-- End Form Group -->
                </div>

                <div class="col-lg-12">
                    <!-- Form Group -->
                    <div class="form-group">
                        {!! Form::label('content', __("Añade el contenido, por ejemplo, el iframe de Vimeo")) !!}
                        {!! Form::textarea('content', old('content') ?? $unit->content, ['id' => 'summernote']) !!}
                    </div>
                    <!-- End Form Group -->
                </div>

                

            </div>
            

            
             <!-- Form Row -->
             <div class="form-row">
                    <div class="col-12 text-right">
                        {!! Form::submit($textButton, ['class' => 'btn long']); !!}
                    </div>
                </div>
                <!-- End Form Row -->

        {{ Form::close() }}
    </div>
</div>
<!-- units end section -->

@push('js')
    <script
        src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"
    ></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,
            });
        });
    </script>
@endpush