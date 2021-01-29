@extends('layouts.page')

@section('css')
    <style type="text/css">
        .imagencurso{
        width:770px;
        height:450px;
        }
    </style>
@endsection

@section('content')
    <div class="courses-single-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content-page-wrap clearfix">
                        <div class="course-single">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <div class="videobox">
                                        <a class="fancybox" data-type="iframe" href="https://www.youtube.com/embed/A-BL8Ir7puE">
                                            <img class="imagencurso" src="{{ $course->imagePath() }}" alt="images">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="#">{{ $course->title }}</a>
                                </div>
                                <p>
                                    {{ $course->description }}
                                </p>
                                <div class="author-price">
                                    <div class="author">
                                        <div class="info">
                                            <div class="name">
                                                <a href="#">{{ $course->teacher->name }}</a>
                                            </div>
                                            @include('partials.learning.courses.rating', ['rating' => $course->rating])
                                        </div>
                                    </div>
                                    <div class="price-wrap price-course-single">
                                        <div class="price">
                                            <span class="price-now">Bs. {{ $course->price }}</span>
                                        </div>
                                        <div class="btn-buynow">
                                            <a href="#">Inscribite</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flat-tabs">
                            <ul class="tab-title type1 clearfix"> 
                                <li class="item-title curriculum">
                                    <span class="inner">Contenido</span>
                                </li>
                                <li class="item-title review">
                                    <span class="inner">Valoraciones</span>
                                </li>
                            </ul>
                            <div class="tab-content-wrap">
                                <div class="tab-content">
                                    <div class="item-content">
                                        @include("partials.learning.courses.curriculum.index")
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="item-content">
                                        @include('partials.learning.courses.reviews_list')
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-right">
                        <div class="widget widget-features">
                            <div class="widget-title">
                                Características del curso
                            </div>
                            <div class="content">
                                <ul class="features">
                                    <li>
                                        <a href="#">Publicado</a>
                                        <span>{{ $course->created_at->format("d/m/Y") }}</span>
                                    </li>
                                    <li>
                                        <a href="#">Archivos</a>
                                        <span>{{ $course->totalFileUnits() }}</span>
                                    </li>
                                    <li>
                                        <a href="#">Videos</a>
                                        <span>{{ $course->totalVideoUnits() }}</span>
                                    </li>
                                    <li>
                                        <a href="#">Duracion</a>
                                        <span>{{ $course->totalTime() }}h</span>
                                    </li>
                                    <li>
                                        <a href="#">Certificado</a>
                                        <span>Si</span>
                                    </li>
                                    <li>
                                        <a href="#">Estudiantes</a>
                                        <span>{{ $course->students_count }}</span>
                                    </li>
                                </ul>
                                <div class="share-via">
                                    <div class="title">
                                        Compartir
                                    </div>
                                    <ul class="social-media">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- courses-single -->
    
@endsection
