@extends('layouts.app')

@section('content')

<div class="container">
  <div class="d-flex flex-column justify-content-center align-items-center py-4">

    <h1 class="pb-3">Eliminazione fumetto</h1>

    <form action="{{ route('comics.destroy', $comic) }}" method="POST">
        @csrf

        @method('DELETE')

        <input type="submit" value="cancella" class="btn btn-danger">
    </form>

  </div>
</div>

@endsection

@section('page-title','Eliminazione fumetti')
