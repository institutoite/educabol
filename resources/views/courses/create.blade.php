@extends('layouts.dashmin')
@section('content')
    <div class="col-lg-12">
        <!-- Base Horizontal Form With Icons -->
        <div class="form-element py-30 multiple-column">
            <h4 class="font-20 mb-20">Nuevo Curso</h4>

            <!-- Form -->
            <form action="#" method="POST">
            <form method="POST" action="{{ ! $course->id ? route('course.store') : route('course.update', ['slug' => $course->slug])}}" novalidate enctype="multipart/form-data">
            
            @if($course->id)
                @method('PUT')
            @endif

            @csrf

                <div class="row">
                    <div class="col-lg-6">
                        <!-- Form Group -->
                        <div class="form-group">
                            <label class="font-14 bold mb-2">Nombre del curso</label>
                            
                            <input name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') ?: $course->name }}" placeholder="Ingresa el nombre del curso" required autofocus/>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif

                        </div>
                        <!-- End Form Group -->
                        
                        <!-- Form Group -->
                        <div class="form-group">
                            <label class="font-14 bold mb-2">Nivel del curso</label>
                            <select name="level_id" id="level_id" class="form-control">
                                @foreach(\App\Models\Level::pluck('name', 'id') as $id => $level)
                                    <option {{ (int) old('level_id') === $id || $course->level_id === $id ? 'selected' : '' }} value="{{ $id }}">
                                        {{ $level }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <!-- End Form Group -->
                        
                    </div>

                    <div class="col-lg-6">
                        <!-- Form Group -->
                        <div class="form-group">
                            <label class="font-14 bold mb-2">Descripcion del curso</label>
                            <textarea
                                id="description"
                                class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                name="description"
                                required
                                rows="8"
                            >{{ old('description') ?: $course->description }}</textarea>

                            @if ($errors->has('description'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                        <!-- End Form Group -->
                        
                        <!-- Form Group -->
                        <div class="form-group">
                            <label class="font-14 bold mb-2">Categoria del curso</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach(\App\Models\Category::pluck('name', 'id') as $id => $category)
                                    <option {{ (int) old('category_id') === $id || $course->category_id === $id ? 'selected' : '' }} value="{{ $id }}">
                                        {{ $category }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <!-- End Form Group -->
                    </div>

                    <div class="col-lg-12">
                        <!-- Form Group -->
                        <div class="form-group">
                            <label class="font-14 bold mb-2">Foto</label>
                            <input
                                    type="file"
                                    class="custom-file-input{{ $errors->has('picture') ? ' is-invalid' : ''}}"
                                    id="picture"
                                    name="picture"
                                />
                                <label
                                    class="custom-file-label" for="picture"
                                >
                                    {{ __("Escoge una imagen para tu curso") }}
                                </label>
                        </div>
                        
                        <!-- End Form Group -->
                    </div>

                    
                    
                </div>

                <!-- Form Row -->
                <!-- End Form Row -->

                <!-- Form Row -->
                <div class="form-row">
                    <div class="col-12 text-right">
                        <button type="submit" class="btn long">Submit</button>
                    </div>
                </div>
                <!-- End Form Row -->
            </form>
            <!-- End Form -->
        </div>
        <!-- End Horizontal Form With Icons -->
    </div>
@endsection