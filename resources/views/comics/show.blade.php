@extends('layouts.main')

@section('main-content')
<section id="comics-books">
  <div class="comics-container">
    <div class="info">
      <h1>{{$comic->title}}</h1>
      <div class="price">
        <div class="price-left">
          <span>U.S. PRICE {{$comic->price}}</span>
          <span>AVAILABLE</span>
        </div>
        <div class="price-right">
          <span>Check Availability</span>
        </div>
      </div>
      <p>{{$comic->description}}</p>
    </div>
    <div class="banner">
      <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
    </div>
  </div>
</section>
<section id="comics-info">
  <div class="comics-container">
    <div class="talent">
      <h4>Talent</h4>
      <div class="art">
        <div class="text">
          <p>Art by:</p>
        </div>
        <div class="list">
           <p>{{$comic->artists}}</p>
        </div>
      </div>
      <div class="art">
        <div class="text">
          <p>Written by:</p>
        </div>
        <div class="list">
          <p>{{$comic->writers}}</p>
        </div>
      </div>
      <div>

      </div>
    </div>
    <div class="specs">
      <h4>Specs</h4>
      <div class="art">
        <div class="text">
          <p>Series:</p>
        </div>
        <div class="list">
          <p>{{$comic->series}}</p>
        </div>
      </div>
      <div class="art">
        <div class="text">
          <p>U.S Price:</p>
        </div>
        <div class="list">
          <p> {{$comic->price}}</p>
        </div>
      </div>
      <div class="art">
        <div class="text">
          <p>On Sale Date:</p>
        </div>
        <div class="list">
          <p>{{$comic->sale_date}}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center p-2 gap-3">
    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">Modifica</a>
    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Elimina</button>
    </form>
  </div>
</section>
@endsection