@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 py-3">
            <div class="d-flex my-1 justify-content-center">
                <a href="{{ route('comics.index') }}" class="btn btn-primary">
                    Torna all'elenco
                </a>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h1>Visualizzazione Comic {{ $comic['title'] }}</h1>
            </div>
        </div>
        @if (!empty ($comic['thumb']) )
            <img src="{{ $comic['thumb'] }}" class="img-fluid w-25">
        @else
            <h4>Immagine non disponibile</h4>
        @endif
        <table class="table py-3">
            <tbody>
                <tr>
                    <th>Titolo</th>
                    <td>{{ $comic['price']}}</td>
                </tr>
                <tr>
                    <th>Descrizione</th>
                    <td>{{ $comic['description']}}</td>
                </tr>
                <tr>
                    <th>Serie</th>
                    <td>{{ $comic['series']}}</td>
                </tr>
                <tr>
                    <th>Tipo</th>
                    <td>{{ $comic['type']}}</td>
                </tr>
                <tr>
                    <th>Data rilascio</th>
                    <td>{{ $comic['sale_date']}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    
@endsection