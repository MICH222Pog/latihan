@extends('layout.app')

@section('content')
    <h1>Ini writer Page</h1>
    @if($Data->isEmpty()){
    <h1>NO Data</h1>
    }
    @else
    @foreach ($Data as $data)
    <a href="{{route('viewwriter', ['id' => $data->id])}}">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $data->name }}</h5>
            <p class="card-text">{{ $data->specialities}}</p>
        </div>
    </div>
</a>
    @endforeach
    @endif
@endsection