@extends('layouts.page')

@section('content')
    <div class="container-fluid p-5">
        <div class="row">
            @include('partials.learning.courses.learn.visor')
            @include('partials.learning.courses.learn.sidebar')
        </div>
    </div>
@endsection
