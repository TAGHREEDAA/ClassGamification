@extends('layouts.main')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')


    <!--==========================
      Courses Section
    ============================-->
    <section id="courses">
        <div class="container">

            <header class="section-header">
                <h3>Courses</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </header>

            <div class="row courses-cols">

                @foreach($courses as $i=>$course)
                <div class="col-md-4 wow fadeInUp" data-wow-delay="{{($i>0)? (($i)*0.1)."s" : ""}}">
                    <div class="courses-col">
                        <div class="img">
                            <img src="{{$course->cover}}" alt="" class="img-fluid">
                            <div class="icon">
                                <i class="{{$course->icon}}"></i>
                            </div>
                        </div>
                        <h2 class="title"><a href="#">{{$course->name}}</a></h2>
                        <p>

                            {{$course->description}}
                        </p>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- #courses -->



@stop
