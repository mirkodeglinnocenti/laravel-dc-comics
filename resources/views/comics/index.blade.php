<div>
  <div class="container">
      <div class="row">
          @foreach ($comics as $comic)
              <div class="col-4">
                <a href="{{ route('comics.show',$comic->id) }}">
                  <img src="{{ $comic->thumb }}" alt="">
                  <h3>{{ $comic->title }}</h3>
                </a>
              </div>   
          @endforeach
      </div>
  </div>
</div>