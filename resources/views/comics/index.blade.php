@extends('layouts.app')

@section('content')

<div>

  <div class="container">
  <div class="row">
      <div class="col-auto ms-auto py-4">
        <a class="btn btn-primary" href="{{ route('comics.create') }}">
          Aggiungi Fumetto
        </a>
      </div>
    </div>
  </div>
  <div class="container">
      
    <table class="table">

      <thead>
        <tr>
          <th>thumb</th>
          <th>titolo</th>
          <th>descrizione</th>
          <th>serie</th>
          <th>prezzo</th>
          <th>id</th>
          <th>funzionalità</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($comics as $comic)

          <tr>
            <td>
              <img src="{{ $comic->thumb }}" alt="" style="width: 50px;">
            </td>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->description }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->id }}</td>
            <td class="d-flex gap-3">
              <a class="btn btn-primary btn-sm" href="{{ route('comics.edit', $comic) }}">
                Modifica Fumetto
              </a>
              <a class="btn btn-danger btn-sm" href="{{ route('comics.delete', $comic) }}">
                Elimina Fumetto
              </a>
            </td>
          </tr>

        @endforeach
      </tbody>

    </table>
  </div>
</div>

@endsection

@section('page-title','Fumetti')