@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      @foreach ($comics as $comic)
      <div class="row">
        @foreach ($comics as $comic)
            <div class="col-2">
                <img class="img-fluid poster" src="{{ $comic['url'] }}" alt="">
                <h2>{{ $comic['series'] }}</h2>
                <a href="{{ route('comics.show', $comic) }}"> Dettaglio </a>
            </div>
        @endforeach
    </div>
      @endforeach
      <a href="{{ route('comics.create') }}"> Inserisci nuovo fumetto </a>
    </div>
  </section>
@endsection