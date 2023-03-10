@extends('layouts.app')

@section('content')


<div class="black-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <a class="current" href="#">CURRENT SERIES</a>
                </div>
                <div>
                    <a href="{{ route('comics.create') }}" class="my-3 btn btn-primary">Aggiungi un nuovo Comic</a>
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
                                <td>
                                    @if (!empty ($comic['thumb']) )
                                        <img src="{{ $comic['thumb'] }}" class="img-fluid">
                                    @else
                                        <h4>Immagine non disponibile</h4>
                                    @endif
                                </td>
                                <td>{{ $comic['title'] }}</td>
                                <td>{{ $comic['price'] }}</td>
                                <td>{{ $comic['description'] }}</td>
                                <td>{{ $comic['series'] }}</td>
                                <td>{{ $comic['type'] }}</td>
                                <td>{{ $comic['sale_date'] }}</td>
                                <td class="text-center">
                                    <a href="{{ route('comics.show', ['comic' => $comic['id']]) }}" class="m-1 btn btn-primary">
                                        Dettagli
                                    </a>
                                    <a href="{{ route('comics.edit', ['comic' => $comic['id']]) }}" class="m-1 btn btn-primary">
                                        Edit
                                    </a>
                                    <form action="{{ route('comics.destroy', ['comic' => $comic['id']]) }}" class="d-inline-block" method="POST">
                                        @csrf 
                                        @method('DELETE')
                                        <button type="button" class="btn btn-sm btn-square btn-danger delete-comic-btn" data-title={{ $comic->title }} data-toggle="modal" data-target="#delete-comic-modall">
                                            Delete
                                        </button>
                                    </form>
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
@include('partials.modal_delete')

    
@endsection