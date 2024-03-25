@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
<div class="container">
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
    
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" title="title" />
    
        <label for="descrizione" class="form-label">Descrizione</label>
        <input type="text" class="form-control" id="descrizione" name="descrizione" />
    
        <label for="img" class="form-label">Link all'immagine</label>
        <input type="url" class="form-control" id="img" name="img">
    
        <label for="price" class="form-label">Prezzo</label>
        <input
            type="number"
            class="form-control"
            id="price"
            name="price"
        />
    
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series" />
    
        <label for="date" class="form-label">Data pubblicazione</label>
        <input type="date" class="form-control" id="date" name="date">
    
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>

@endsection