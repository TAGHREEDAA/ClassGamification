@extends('layouts.main')

@section('content')
    @foreach($projects as $project)

        <h1>
            <a href="{{URL::to('project/'.$project->id)}}">{{$project->name}}</a>
        </h1>
    @endforeach
@endsection
