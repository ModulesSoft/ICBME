<header id="header" @if (Route::current()->getName() != 'home') class="header-fixed" @endif>
    <div>
        <div id="logo" class="pull-left">
            <h1>
                <div class="btn-group">
                    <a type="button" class="btn btn-transparent shadow-none" href="{{ route('home') }}">
                        <img src="{{ $settings['logo'] }}" alt="logo">
                        {{ env('APP_NAME', 'ICBME2023') }}
                    </a>
                    <button type="button" class="btn btn-link dropdown-toggle dropdown-toggle-split" style="color:#f82249" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu bg-secondary">
                        <a class="dropdown-item border-secondary bg-secondary" href="/2020/en">2020</a>
                        <a class="dropdown-item border-secondary bg-secondary" href="/2021/en">2021</a>
                        <a class="dropdown-item border-secondary bg-secondary" href="/2022/en">2022</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item border-secondary" href="/">2023</a>
                    </div>
                </div>
            </h1>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li>
                    <a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#speakers">Speakers</a>
                </li>
                <li>
                    <a style="font-size:0.7rem" href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#venue">Visa,Hotels<br>&amp;
                        Venue</a>
                </li>
                <li>
                    <a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#thesis-festival">Thesis Festival</a>
                </li>
                <li class="{{ Route::current()->getName() == 'poster' ? 'menu-active' : '' }}">
                    <a href="{{ Route::current()->getName() != 'poster' ? route('poster') : '' }}">Poster</a>
                </li>
                <li class="{{ Route::current()->getName() == 'committees' ? 'menu-active' : '' }}">
                    <a href="{{ Route::current()->getName() != 'committees' ? route('committees') : '' }}">Committees</a>
                </li>
                <li class="{{ Route::current()->getName() == 'news' ? 'menu-active' : '' }}">
                    <a href="{{ Route::current()->getName() != 'news' ? route('news') : '' }}">News</a>
                </li>
                <li class="{{ Route::current()->getName() == 'gallery' ? 'menu-active' : '' }}">
                    <a href="{{ Route::current()->getName() != 'gallery' ? route('galleries') : '' }}">Gallery</a>
                </li>
                <li class="{{ Route::current()->getName() == 'sponsors' ? 'menu-active' : '' }}">
                    <a href="{{ Route::current()->getName() != 'sponsors' ? route('sponsors') : '' }}">Sponsors</a>
                </li>
                <li class="{{ Route::current()->getName() == 'workshops' ? 'menu-active' : '' }}">
                    <a href="{{ Route::current()->getName() != 'workshops' ? route('workshops') : '' }}">Program
                        schedule</a>
                </li>
                <li class="{{ Route::current()->getName() == 'author' ? 'menu-active' : 'buy-tickets' }}">
                    <a class="dropdown-toggle {{ Route::current()->getName() == 'author' ? '' : 'btn btn-secondary ' }}" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{ Route::current()->getName() != 'authors' ? route('authors') : '' }}">For
                        Authors
                    </a>
                    <div class="dropdown-menu bg-transparent border-0" aria-labelledby="dropdownMenuLink">
                        @foreach (App\Author::all() as $fa)
                        <a class="dropdown-item bg-secondary border-secondary" style="display: block;" href="{{ route('author', $fa->id) }}">
                            {{ $fa->name }}
                        </a>
                        @endforeach
                    </div>
                </li>
                <li class="language-switch">
                    <a href="" hreflang="LOCALE PREFIX">
                        <i class="fa fa-globe" style="color: white;" aria-hidden="true"></i>
                        <span>
                            فارسی
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<style>
    @media (max-width: 1200px) {
        .dropdown-menu {
            /* background-color:transparent;
            border: none; */
            transform: translate3d(0, 36px, 0) !important;
            width: 100vw !important;
        }
    }
</style>
<?php
// function getLocaleChangerURL($locale)
// {
//     $uri = $_SERVER['REQUEST_URI'];
//     $uri = explode('/', $uri);
//     if (count($uri) > 3) {
//         return '/' . $locale;
//     } //to prevent complex pages
//     unset($uri[0]);
//     unset($uri[1]);
//     $url = url($locale);
//     foreach ($uri as $u) {
//         $url .= '/' . $u;
//     }
//     return $url;
// }
?>