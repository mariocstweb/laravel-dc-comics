@extends('layouts.main')

@section('title', 'COMICS')

@section('main-content')

<div class="card-container">
  @foreach($comics as $index => $comics)
  <div class="series-card">
    <a href="{{ route('comics.show', $comics )}}">
      <img src="{{$comics->thumb}}" alt="">
      <p>{{$comics->series}}</p>
    </a>
  </div>
  @endforeach
</div>
<div class="d-flex justify-content-center p-3 gap-3">
  <a href="{{route('comics.create')}}" class="btn btn-primary">Aggiungi fumetto</a>
  <a href="{{route('comics.trash')}}" class="btn btn-primary">Vedi Eliminati</a>
</div>
@endsection

