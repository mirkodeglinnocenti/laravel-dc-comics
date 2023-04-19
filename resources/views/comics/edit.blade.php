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
      <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}">
    </div>

    <div class="mb-3">
      <label for="thumb" class="form-label">Immagine</label>
      <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Prezzo</label>
      <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $comic->price) }}">
    </div>

    <div class="mb-3">
      <label for="series" class="form-label">Serie</label>
      <input type="text" class="form-control" id="series" name="series" value="{{ old('serie', $comic->series) }}">
    </div>

    <div class="mb-3">
      <label for="sale-date" class="form-label">Data ingresso a mercato</label>
      <input type="date" class="form-control" id="sale-date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
    </div>

    <div class="mb-3">
      <label for="type" class="form-label">Tipo</label>
      <input type="text" class="form-control" id="type" name="type" value="{{ old('type', $comic->type) }}">
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <textarea name="description" id="description" cols="30" rows="2">
          {{ old('description', $comic->description) }}
      </textarea>
    </div>

    <button type="submit">Aggiorna fumetto</button>

  </form>

  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
</div>

@endsection

@section('page-title','Modifica fumetti')
