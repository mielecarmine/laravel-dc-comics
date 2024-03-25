@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <div class="container">
        <strong>Nome: </strong> {{ $comic->title }} <br />
        <strong>Descrizione: </strong> {{ $comic->description }} <br />
        <strong>Prezzo: </strong> {{ $comic->price }}$ <br />
        <strong>Serie: </strong> {{ $comic->series }} <br />
        <strong>Data vendita: </strong> {{ $comic->sale_date }} <br />
        </div>
@endsection