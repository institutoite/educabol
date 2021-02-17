@extends('layouts.page')

@section('content')
    <div class="course-grid">
        <div class="container">
            <div class="title-section text-center">
                <div class="flat-title medium">
                    Mis cursos
                </div>
            </div>
            <div class="flat-courses clearfix isotope-courses">
                @forelse($courses as $course)
                    <div class="course clearfix Popular Certificate">    
                        <div class="flat-course">
                            <div class="featured-post post-media">
                                <div class="entry-image pic">
                                    <img style="width:470px; height:220px;" src="{{ $course->imagePath() }}" alt="images"> 
                                    <div class="hover-effect"></div>
                                    <div class="links">
                                        <a href="{{ route('courses.learn', ['course' => $course]) }}">Ver Contenido</a>
                                    </div>
                                </div>
                            </div>
                            <div class="course-content clearfix">
                                <div class="wrap-course-content">
                                    <h4>
                                        <a href="{{ route('courses.learn', ['course' => $course]) }}">{{ $course->title }}</a>
                                    </h4>
                                    <p>
                                        {{ Str::limit($course->description, 100) }}
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
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                @empty
                    <div class="alert alert-dark">
                        {{ __("No hay ningún curso disponible") }}
                    </div>
                @endforelse
            </div> 
        </div>
    </div>
@endsection
