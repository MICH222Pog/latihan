@extends('layout.app')

@section('content')
    <h1>Ini Popular Page</h1>
    @if($courseData->isEmpty()){
    <h1>NO Data</h1>
    }
    @else
    @foreach ($courseData as $course)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $course->name }}</h5>
            <p class="card-text">{{ $course->content}}</p>
            <a href="#">Read more...</a>
        </div>
    </div>
    @endforeach
    @endif
@endsection