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
                </div>
            </div>
            <div>
                <div class="my-2">
                    <h2>Inserisci un nuovo Comic</h2>
                </div>
            </div>
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="control-label">Titolo</label>
                    <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Immagine</label>
                    <input type="text" name="thumb" class="form-control" placeholder="Inserisci l'URL dell'immagine">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Prezzo</label>
                    <input type="text" name="price" class="form-control" placeholder="Inserisci il prezzo">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Inserisci la descrizione"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Serie</label>
                    <input type="text" name="series" class="form-control" placeholder="Inserisci la serie">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Tipo</label>
                    <input type="text" name="type" class="form-control" placeholder="Inserisci il tipo">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Data rilascio</label>
                    <input type="text" name="sale_date" class="form-control" placeholder="Inserisci la data di rilascio">
                </div>
                <div class="form-group mb-3">
                    <button type="sibmit" class="btn btn-success">Salva il nuovo Comic</button>
                </div>
            </form>         
        </div>
    </div>
</div>

@endsection