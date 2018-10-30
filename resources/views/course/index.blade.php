@extends('layouts.main')

@section('title', 'Courses')


@section('content')

    <!--==========================
      Courses Section
    ============================-->
    <section id="courses">
        <!-- Modal -->
        <div class="modal fade" id="addCourseModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Add New Course</h3>
                    </div>

                    <div class="modal-body">
                        <div class="form">
                            <div id="sendmessage">

                            </div>
                            <div id="errormessage">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div><br />
                                @endif
                            </div>




                            <form action="{{route('course.store')}}" id="addCourseForm" enctype="multipart/form-data" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        {{csrf_field()}}
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Course Name" required/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="code" class="form-control" id="code" placeholder="Course Code" required/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control icp icp-auto" value="fas fa-anchor" id="icon" name="icon" placeholder="Course Icon" required/>
                                    </div>

                                </div>
                                <div class="form-group">

                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-default btn-file">
                                                Upload Cover...<input type="file" name="cover" id="cover" required>
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                    <div class="img-preview">
                                        <img id='img-upload'/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" id="description" name="description" rows="5" placeholder="Description" required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit">Save</button>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="modal-footer">

                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            <header class="section-header">
                <h3>Courses</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a class="cta-btn" data-toggle="modal" href="#addCourseModal">Add New Course</a>


            </header>


            <div class="row courses-cols">

                @foreach($courses as $i=>$course)
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="{{($i>0)? (($i)*0.1)."s" : ""}}">
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
                @endforeach

            </div>

        </div>
    </section><!-- #courses -->

@stop


@section('custom-style')



    <link rel="stylesheet" href="/css/course.css">
@stop

@section('custom-script')


    <script src="/js/course.js"></script>
@stop
