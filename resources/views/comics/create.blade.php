@extends('layouts.app')

@section('content')

<div class="conatiner">
    <h1>Nuovo Fumetto</h1>
  </div>

  <div class="container">
    <form action="{{ route('comics.store') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea name="description" id="description" cols="30" rows="2"></textarea>
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series">
      </div>

      <div class="mb-3">
        <label for="sale-date" class="form-label">Data ingresso a mercato</label>
        <input type="date" class="form-control" id="sale-date" name="sale_date">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control" id="type" name="type">
      </div>

      <button type="submit">Salva fumetto</button>

    </form>
  </div>
</div>

@endsection

@section('page-title','Aggiunta fumetti')
