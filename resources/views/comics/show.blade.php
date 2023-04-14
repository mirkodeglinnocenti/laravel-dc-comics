<div class="container">
  <h1>{{ $comic->title }}</h1>
</div>

<div class="container">
  <img src="{{ $comic->thumb }}" alt="">
  <p>{!! $comic->description !!}</p>
</div>

<div class="container">
  <ul class="list-group">
    <li class="list-group-item">Serie: {{ $comic->series }}</li>
    <li class="list-group-item">Tipologia: {{ $comic->type }}</li>
    <li class="list-group-item">Prezzo: {{ $comic->price }}</li>
  </ul>
</div>