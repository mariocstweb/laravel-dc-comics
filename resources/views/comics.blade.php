@extends('layouts.main')

@section('main-content')
<section id="comics-books">
  <div class="comics-container">
    <div class="info">
      <h1>{{$movie['title']}}</h1>
      <div class="price">
        <div class="price-left">
          <span>U.S. PRICE {{$movie['price']}}</span>
          <span>AVAILABLE</span>
        </div>
        <div class="price-right">
          <span>Check Availability</span>
        </div>
      </div>
      <p>{{$movie['description']}}</p>
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
          <ul>
            @foreach($movie['artists'] as $movie['artist'])
            <li>{{$movie['artist']}},</li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="art">
        <div class="text">
          <p>Written by:</p>
        </div>
        <div class="list">
          <ul>
            @foreach($movie['writers'] as $movie['writer'])
            <li>{{$movie['writer']}},</li>
            @endforeach
          </ul>
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
          <p>{{$movie['series']}}</p>
        </div>
      </div>
      <div class="art">
        <div class="text">
          <p>U.S Price:</p>
        </div>
        <div class="list">
          <p> {{$movie['price']}}</p>
        </div>
      </div>
      <div class="art">
        <div class="text">
          <p>On Sale Date:</p>
        </div>
        <div class="list">
          <p>{{$movie['sale_date']}}</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection