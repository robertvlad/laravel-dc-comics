<header>
    <div class="blue_top">
        <div class="container">
            <div class="top_bar d-flex justify-content-end">
                <span>DC POWER VISA</span>
                <a href="#">ADDITIONAL DC SITES</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <a href="{{ Route::currentRouteName() }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC"></a>                
            </div>
            <div class="col-8 d-flex align-items-center">
                <ul class="d-flex gap-4">
                    <li>
                        <a href="{{ route('characters') }}" class="{{ Route::currentRouteName() == 'characters' ? 'active' : '' }}">
                            CHARACTERS
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('comics') }}" class="{{ Route::currentRouteName() == 'comics' ? 'active' : '' }}">
                            COMICS
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('movies') }}" class="{{ Route::currentRouteName() == 'movies' ? 'active' : '' }}">
                            MOVIES
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tv') }}" class="{{ Route::currentRouteName() == 'tv' ? 'active' : '' }}">
                            TV
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('games') }}" class="{{ Route::currentRouteName() == 'games' ? 'active' : '' }}">
                            GAMES
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('collectibles') }}" class="{{ Route::currentRouteName() == 'collectibles' ? 'active' : '' }}">
                            COLLECTIBLES
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('videos') }}" class="{{ Route::currentRouteName() == 'videos' ? 'active' : '' }}">
                            VIDEOS
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('fans') }}" class="{{ Route::currentRouteName() == 'fans' ? 'active' : '' }}">
                            FANS
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}" class="{{ Route::currentRouteName() == 'news' ? 'active' : '' }}">
                            NEWS
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}" class="{{ Route::currentRouteName() == 'shop' ? 'active' : '' }}">
                            SHOP
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-2 d-flex align-items-center">
                <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                </div>           
            </div>
        </div>
    </div>
    <div class="titan_bg">

    </div>
</header>