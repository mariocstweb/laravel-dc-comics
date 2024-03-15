@extends('layouts.main')

@section('main-content')
<div class="container p-4">
  <form action="{{route('comics.update', $comic->id)}}" method="POST">
    @csrf
    @method('PUT')
    @if($errors->any())
    <div class="alert alert-danger">
      <h1>Campi non validi:</h1>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <div class="row text-white">
      <div class="col-6">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Title</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insert title" name="title" value="{{old('title', $comic->title)}}">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Thumb</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="HTTP/..." name="thumb"
          value="{{old('thumb', $comic->thumb)}}">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Price</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insert Price" name="price"
          value="{{old('price', $comic->price)}}">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Series</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insert Series" name="series"
          value="{{old('series', $comic->series)}}">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Date</label>
          <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Data" name="sale_date"
          value="{{old('sale_date', $comic->sale_date)}}">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Type</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insert Type" name="type"
          value="{{old('type', $comic->type)}}">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Artists</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Artisti" name="artists"
          value="{{old('artists', $comic->artists)}}">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Writers</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insert Writers" name="writers"
          value="{{old('writers', $comic->writers)}}">
        </div>
      </div>
      <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Insert description">{{old('description', $comic->description)}}</textarea>
      </div>
    </div>
    <div class="d-flex justify-content-center p-3">
      <button type="submit" class="btn btn-primary me-3">Aggiungi</button>
      <button type="reset" class="btn btn-outline-light">Reset</button>
    </div>
  </form>
</div>
@endsection