@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">  
            <div class="d-flex justify-content-between align-items-center">
                <div class=" my-2 d-flex my-1 justify-content-center">
                    <a href="{{ route('comics.index') }}" class="btn btn-primary">
                        Torna all'elenco
                    </a>
                    <a href="{{ route('comics.show', ['comic' => $comic['id']]) }}" class="m-1 btn btn-primary">
                        Anulla modifiche
                    </a>
                </div>
            </div>
            <div>
                <div class="my-2">
                    <h2>Modifica Comic</h2>
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
            </div>
            <form action="{{ route('comics.update', ['comic' => $comic['id']]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label class="control-label">Titolo</label>
                    <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo" value="{{ old('title') ?? $comic['title'] }}">
                    @error('title')
                        <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Immagine</label>
                    <input type="text" name="thumb" class="form-control" placeholder="Inserisci l'URL dell'immagine" value="{{ old('thumb') ?? $comic['thumb'] }}">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Prezzo</label>
                    <input type="text" name="price" class="form-control" placeholder="Inserisci il prezzo" value="{{ old('price') ?? $comic['price'] }}">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Inserisci la descrizione">
                        {{ old('description') ?? $comic['description'] }}
                    </textarea>
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Serie</label>
                    <input type="text" name="series" class="form-control" placeholder="Inserisci la serie" value="{{ old('series') ?? $comic['series'] }}">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Tipo</label>
                    <input type="text" name="type" class="form-control" placeholder="Inserisci il tipo" value="{{ old('type') ?? $comic['type'] }}">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Data rilascio</label>
                    <input type="text" name="sale_date" class="form-control" placeholder="Inserisci la data di rilascio" value="{{ old('sale_date') ?? $comic['sale_date'] }}">
                </div>
                <div class="form-group mb-3">
                    <button type="sibmit" class="btn btn-success">Salva il nuovo Comic</button>
                </div>
            </form>         
        </div>
    </div>
</div>

@endsection