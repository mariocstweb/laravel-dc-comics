@extends('layouts.main')

@section('title', 'COMICS')

@section('main-content')
<h2 class="text-center text-white p-3">Fumetti eliminati</h2>

<div class="card-container">
  @foreach($comics as $index => $comic)
  <div class="series-card">
    <a href="{{ route('comics.show', $comic->id)}}">
      <img src="{{$comic->thumb}}" alt="">
      <p>{{$comic->series}}</p>
    </a>
    <div class="d-flex gap-2">
      <form action="{{route('comics.restore', $comic->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <button type="submit" class="btn btn-primary">Ripristina</button>
      </form>
      <form action="{{route('comics.drop', $comic->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Elimina</button>
      </form>
    </div>
  </div>
  @endforeach
</div>
<div class="d-flex justify-content-center p-3">
  <a href="{{route('comics.create')}}" class="btn btn-primary">Aggiungi fumetto</a>
</div>
@endsection