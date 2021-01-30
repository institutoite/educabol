@extends('layouts.page')


@section('content')
    <div class="course-grid">
        <div class="container">
            <div class="title-section text-center">
                <div class="flat-title medium">
                    {{ __("Cursos de $category->name") }}
                </div>
            </div>
            <div class="flat-courses clearfix isotope-courses">
                @forelse($courses as $course)
                    <div class="course clearfix Marketing Certificate Popular">    
                        <div class="flat-course">
                            <div class="featured-post post-media">
                                <div class="entry-image pic">
                                    <img style="width:470px; height:220px;" src="{{ $course->imagePath() }}" alt="images">
                                    <div class="hover-effect"></div>
                                    <div class="links">
                                        <a href="{{ route('courses.show', ['course' => $course]) }}">Ver curso</a>
                                    </div>
                                </div>
                            </div>
                            <div class="course-content clearfix">
                                <div class="wrap-course-content">
                                    <h4>
                                        <a href="{{ route('courses.show', ['course' => $course]) }}">{{ $course->title }}</a>
                                    </h4>
                                    <p>
                                        {{ __(":count Estudiantes", ['count' => $course->students_count]) }}
                                    </p>
                                    <div class="author-info">
                                        <div class="author-name">
                                            {{ $course->teacher->name }}
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-rating-price">
                                    <div class="meta-rate">
                                        <div class="rating">
                                            @include('partials.learning.courses.rating', ['rating' => $course->rating])
                                        </div>
                                        <div class="price">
                                            <span class="price-now">Bs.{{ $course->price }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <div class="empty-results">
                            {!! __("No hay ningún curso para mostrar") !!}
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
    </div><!-- course-grid -->
@endsection
