@extends('layouts.app')

@section('content')

<main>
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


    {{-- <div class="black-main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <a class="current" href="#">CURRENT SERIES</a>
                    </div>
                    <div>
                        <a href="#" class="my-3 btn btn-primary">Aggiungi un nuovo Comic</a>
                    </div>
                    <div>
                        <table class="table bg-light">
                            <thead>
                                <th>ID</th>
                                <th>Immagine</th>
                                <th>Titolo</th>
                                <th>Prezzo</th>
                                <th>Descrizione</th>
                                <th>Serie</th>
                                <th>Tipo</th>
                                <th>Data rilascio</th>
                                <th>Azioni</th>
                            </thead>
                            <tbody>
                                @foreach ($comics as $comic)
                                <tr>
                                    <td>{{ $comic['id'] }}</td>
                                    <td><img src="{{ $comic['thumb'] }}" class="img-fluid"></td>
                                    <td>{{ $comic['title'] }}</td>
                                    <td>{{ $comic['price'] }}</td>
                                    <td>{{ $comic['description'] }}</td>
                                    <td>{{ $comic['series'] }}</td>
                                    <td>{{ $comic['type'] }}</td>
                                    <td>{{ $comic['sale_date'] }}</td>
                                    <td class="text-center">
                                        <a href="#" class="m-1 btn btn-primary">
                                            Dettagli
                                        </a>
                                        <a href="#" class="m-1 btn btn-primary">
                                            Edit
                                        </a>
                                    </td>
                                </tr>                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="load" href="#">LOAD MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-blue">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blue-section">
                        <ul class="d-flex justify-content-between align-items-center">
                            <li><a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Digital"><span>DIGITAL COMICS</span></a></li>
                            <li><a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="Merchandise"><span>DC MERCHANDISE</span></a></li>
                            <li><a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Subscriptions"><span>SUBSCRIPTIONS</span></a></li>
                            <li><a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="Shop"><span>COMIC SHOP LOCATOR</span></a></li>
                            <li><a href="#"><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="Visa"><span>DC POWER VISA</span></a></li>                                
                        </ul>
                    </div>               
                </div>
            </div>
        </div>
    </div>
</main> --}}
    
@endsection