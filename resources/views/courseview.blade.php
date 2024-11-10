@extends('layout.app')

@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $data->name }}</h5>
            <p class="card-text">{{ $data->content}}</p>
            <a href="{{route('course', ['id' => $data->category_id])}}">Back...</a>
        </div>
    </div>
@endsection