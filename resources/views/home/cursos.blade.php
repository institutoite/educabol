@extends('home')

@section('cursos')
    @foreach ($cursos as $curso)
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="imagebox-courses-type1">
            <div class="featured-post">
                <img src="images/home1/05.png" alt="images">
            </div>
            <div class="author-info">
                <div class="avatar">
                    <img src="images/home1/11.png" alt="images">
                </div>
                <div class="category">
                    {{ $curso->category->name }}
                </div>
                <div class="name">
                    <a href="{{ route('courses.detail', $curso->slug) }}">{{ str_limit($curso->name, 20) }}</a> 
                </div>
                <div class="border-bt">
                    
                </div>
                <div class="evaluate">
                    <div class="price">
                        <span class="price-now">Bs50</span>
                    </div>
                    @include('partials.courses.rating', ['rating' => $curso->custom_rating])
                    
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection