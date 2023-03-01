@extends('layouts.app')

@section('content')

<main>
    <div class="blue-line">
        <div class="container-small">
            <img class="img-detail" src="{{ $comic['thumb'] }}">
        </div>
    </div>

    <div class="container-small">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-8">
                    <h1 class="py-2">{{ $comic['title'] }}</h1>
                    <div class="container">
                        <div class="row">
                            <div class="col-8 green">
                                <div class="d-flex justify-content-between">
                                    <span>U.S. Price :{{ $comic['price'] }}</span>
                                    <span>AVAILABLE</span>
                                </div>
                            </div>
                            <div class="col-4 green">
                                <span>Check Availability</span>                                
                            </div>
                        </div>
                    </div>
                    <p class="py-2">{{ $comic['description'] }}</p>
                </div>
                <div class="col-4">
                    <span class="text-end">ADVERTISEMENT</span>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="ADV">
                </div>
            </div>
        </div>                
    </div>

    <div class="footer-grey">
        <div class="container-small py-5">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h2 class="py-2">Talent</h2>
                        <hr>
                        <div class="d-flex justify-content-between py-2">
                            <span>Art by: </span>
                            <span>{{ $comic['artists'] }}</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between py-2">
                            <span>Written by: </span>
                            <span>{{ $comic['writers'] }}</span>
                        </div> 
                        <hr>                    
                    </div>
                    <div class="col-6">
                        <h2 class="py-2">Specs</h2>
                        <hr>
                        <div class="d-flex justify-content-between py-2">
                            <span>Series:</span>
                            <span>{{ $comic['series'] }}</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between py-2">
                            <span> U.S. Price:</span>
                            <span>{{ $comic['price'] }}</span>
                        </div> 
                        <hr> 
                        <div class="d-flex justify-content-between py-2">
                            <span> On Sale Date:</span>
                            <span>{{ $comic['sale_date'] }}</span>
                        </div> 
                        <hr>                        
                    </div>
                </div>
            </div>            
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blue-section d-flex justify-content-between align-items-center">
                        <div class="square-footer">
                            <span>DIGITAL COMICS</span>
                            <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Digital"></a>
                        </div>
                        <div class="square-footer">
                            <span>DC MERCHANDISE</span>
                            <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="Merchandise"></a>
                        </div>
                        <div class="square-footer">
                            <span>SUBSCRIPTIONS</span>
                            <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Subscriptions"></a>
                        </div>
                        <div class="square-footer">
                            <span>COMIC SHOP LOCATOR</span>
                            <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="Shop"></a>
                        </div>
                        <div class="square-footer">
                            <span>DC POWER VISA</span>
                            <a href="#"><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="Visa"></a>
                        </div>
                    </div>               
                </div>
            </div>
        </div>
    </div>
   
</main>
    
@endsection