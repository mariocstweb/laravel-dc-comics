@extends('layouts.main')

@section('title', 'MOVIES')

@section('main-content')
<div class="card-container">
  @foreach($movies as $index => $movie)
  <div class="series-card">
    <a href="{{ route('comics.show', $movie )}}">
      <img src="{{$movie->thumb}}" alt="">
      <p>{{$movie->series}}</p>
    </a>
  </div>
  @endforeach
</div>
@endsection