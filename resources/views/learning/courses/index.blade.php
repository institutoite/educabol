@extends('layouts.home')


@section('content')
    <div class="container">
        <div class="title-section text-center">
            <div class="flat-title medium">
                Listado de Cursos.
            </div>
        </div>
        <div class="online-courses-wrap">
            <div class="row">
                @forelse($courses as $course)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="imagebox-courses-type1">
                            <div class="featured-post">
                                <img src="{{ $course->imagePath() }}" alt="images">
                            </div>
                            <div class="author-info">
                                <div class="name">
                                    <a href="{{ route('courses.show', ['course' => $course]) }}">{{ $course->title }}</a> 
                                </div>
                                <div class="border-bt">
                                    <div class="category">
                                        {{ __(":count Estudiantes", ['count' => $course->students_count]) }}
                                    </div>
                                </div>
                                <div class="evaluate">
                                    <div class="price">
                                        <span class="price-now">Bs. {{ $course->price }}</span>
                                    </div>
                                    <div class="review">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>(4)</span>
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
            <div class="row justify-content-center mt-2">
                @if(count($courses))
                    {{ $courses->links() }}
                @endif
            </div>
        </div>
    </div>
@endsection
