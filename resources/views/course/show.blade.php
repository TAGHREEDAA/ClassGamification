@extends('layouts.main')

@section('title', 'Courses')


@section('content')
    <section id="courses">
    <div class="container">
    <div class="offset-md-1 col-md-10 wow fadeInUp" data-wow-delay="0.1s">
        <div class="courses-col">
            <div class="img">
                <img src="{{'/imgs/'.$course->cover}}" alt="" class="img-fluid">
                <div class="icon">
                    <i class="{{$course->icon}}"></i>
                </div>
            </div>
            <h2 class="title"><a href="{{route('course.show', $course->id)}}">{{$course->name}}</a></h2>
            <p>

                {{$course->description}}
            </p>
        </div>
    </div>
        </div>
    </section>


@stop


@section('custom-style')
    <link rel="stylesheet" href="/css/course.css">
@stop

@section('custom-script')
    <script src="/js/course.js"></script>
@stop
