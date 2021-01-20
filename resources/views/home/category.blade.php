@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="title-section text-center">
            <div class="flat-title medium">
                Nuestras Categorias
            </div>
        </div>
        <div class="online-courses-wrap">
            <div class="row">
            @forelse($categories as $category)
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="imagebox-courses-type1">
                        <div class="featured-post">
                            <img src="{{ $category->imagePath() }}" alt="images">
                        </div>
                        <div class="author-info">
                            <div class="category">
                                <span>{{ $category->name }}</span>
                            </div>
                            <div class="name">
                                <a href="#">{{ __(":total cursos", ['total' => $category->courses_count]) }}</a> 
                            </div>
                            <div class="border-bt">
                                <div class="category">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="container">
                    <div class="empty-results">
                        {{ __("Actualmente no tenemos nada, pero estamos trabajando duro para añadir nuevo contenido") }}
                    </div>
                </div>
            @endforelse
            </div>
        </div>
    </div>
@endsection
