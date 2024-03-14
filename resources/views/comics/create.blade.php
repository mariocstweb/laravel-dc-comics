@extends('layouts.main')

{{-- @section('title', 'COMICS') --}}

@section('main-content')
<div class="container p-4">
  <form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div class="row text-white">
      <div class="col-6">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Title</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insert title" name="title">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Thumb</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="HTTP/..." name="thumb">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Price</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insert Price" name="price">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Series</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insert Series" name="series">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Date</label>
          <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Data" name="sale_date">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Type</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insert Type" name="type">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Artists</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Artisti" name="artists">
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Writers</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insert Writers" name="writers">
        </div>
      </div>
      <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Insert description"></textarea>
      </div>
    </div>
    <div class="d-flex justify-content-center p-3">
      <button type="submit" class="btn btn-primary me-3">Aggiungi</button>
      <button type="reset" class="btn btn-outline-light">Reset</button>
    </div>
  </form>
</div>
@endsection