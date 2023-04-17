@extends('layouts.app')

@section('content')

<div class="container">
  <div class="d-flex flex-column justify-content-center align-items-center py-4">

    <h1 class="pb-3">Modifica fumetto</h1>

  </div>
</div>

<div class="container">
  <form action="{{ route('comics.update', $comic) }}" method="POST">
    @csrf

    @method('PUT')

    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <textarea name="description" id="description" cols="30" rows="2">
          {{ $comic->description }}
      </textarea>
    </div>

    <div class="mb-3">
      <label for="thumb" class="form-label">Immagine</label>
      <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Prezzo</label>
      <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $comic->price }}">
    </div>

    <div class="mb-3">
      <label for="series" class="form-label">Serie</label>
      <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
    </div>

    <div class="mb-3">
      <label for="sale-date" class="form-label">Data ingresso a mercato</label>
      <input type="date" class="form-control" id="sale-date" name="sale_date" value="{{ $comic->sale_date }}">
    </div>

    <div class="mb-3">
      <label for="type" class="form-label">Tipo</label>
      <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
    </div>

    <button type="submit">Aggiorna fumetto</button>

  </form>
</div>

@endsection

@section('page-title','Modifica fumetti')
