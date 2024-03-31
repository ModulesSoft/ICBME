<header id="header" @if (Route::current()->getName() != 'home') class="header-fixed" @endif>
    <div>
        <div id="logo">
            <h1>
                <div class="btn-group">
                    <a type="button" class="btn btn-transparent shadow-none" href="{{ route('home') }}">
                        <img src="{{ $settings['logo'] }}" alt="logo">
                        {{ env('APP_NAME', 'ICBME').' '.(session('appyear')?:config('services.conference.last_year')) }}
                    </a>
                    <button type="button" class="btn btn-link dropdown-toggle dropdown-toggle-split" style="color:#f82249" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu bg-dark">
                        <form method="POST" action="{{ route('year.change') }}">
                            @csrf
                            @for ($year = config('services.conference.last_year'); $year >= config('services.conference.first_year'); $year--)
                            <button type="submit" class="dropdown-item border-secondary bg-dark text-light" name="year" value="{{ $year }}" style="cursor:pointer">{{ $year }}</button>
                            @endfor
                        </form>
                    </div>

                </div>
            </h1>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li style="{{ __('global.dir') === 'rtl' ? 'float: right;' : '' }}">
                    <a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#speakers">{{__('cruds.speaker.title')}}</a>
                </li>
                <li style="{{ __('global.dir') === 'rtl' ? 'float: right;' : '' }}">
                    <a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#venue">{{__('cruds.venue.title_singular')}}</a>
                </li>
                <li style="{{ __('global.dir') === 'rtl' ? 'float: right;' : '' }}">
                    <a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#thesis-festival">{{__('cruds.thesis.title_singular')}}</a>
                </li>
                <li style="{{ __('global.dir') === 'rtl' ? 'float: right;' : '' }}" class="{{ Route::current()->getName() == 'poster' ? 'menu-active' : '' }}">
                    <a href="{{ Route::current()->getName() != 'poster' ? route('poster') : '' }}">{{__('cruds.poster.title_singular')}}</a>
                </li>
                <li style="{{ __('global.dir') === 'rtl' ? 'float: right;' : '' }}" class="{{ Route::current()->getName() == 'committees' ? 'menu-active' : '' }}">
                    <a href="{{ Route::current()->getName() != 'committees' ? route('committees') : '' }}">{{__('cruds.committee.title')}}</a>
                </li>
                <li style="{{ __('global.dir') === 'rtl' ? 'float: right;' : '' }}" class="{{ Route::current()->getName() == 'news' ? 'menu-active' : '' }}">
                    <a href="{{ Route::current()->getName() != 'news' ? route('news') : '' }}">{{__('cruds.news.title')}}</a>
                </li>
                <li style="{{ __('global.dir') === 'rtl' ? 'float: right;' : '' }}" class="{{ Route::current()->getName() == 'galleries' ? 'menu-active' : '' }}">
                    <a href="{{ Route::current()->getName() != 'gallery' ? route('galleries') : '' }}">{{__('cruds.gallery.title_singular')}}</a>
                </li>
                <li style="{{ __('global.dir') === 'rtl' ? 'float: right;' : '' }}" class="{{ Route::current()->getName() == 'sponsors' ? 'menu-active' : '' }}">
                    <a href="{{ Route::current()->getName() != 'sponsors' ? route('sponsors') : '' }}">{{__('cruds.sponsor.title')}}</a>
                </li>
                <li style="{{ __('global.dir') === 'rtl' ? 'float: right;' : '' }}" class="{{ Route::current()->getName() == 'workshops' ? 'menu-active' : '' }}">
                    <a href="{{ Route::current()->getName() != 'workshops' ? route('workshops') : '' }}">{{__('cruds.workshop.title')}}</a>
                </li>
                <li style="{{ __('global.dir') === 'rtl' ? 'float: right;' : '' }}" class="{{ Route::current()->getName() == 'author' ? 'menu-active' : '' }}">
                    <a class="dropdown-toggle {{ Route::current()->getName() == 'author' ? '' : '' }}" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{ Route::current()->getName() != 'authors' ? route('authors') : '' }}">
                        {{__('cruds.author.title')}}
                    </a>
                    <div class="dropdown-menu bg-dark border-dark" aria-labelledby="dropdownMenuLink">
                        @foreach (App\Author::all() as $fa)
                        <a class="bg-dark border-rounded border-0 py-2" href="{{ route('author', $fa->id) }}" style="display: block; {{ __('global.dir') === 'rtl' ? 'text-align:right;' : '' }}">
                            {{ $fa->name }}
                        </a>
                        @endforeach
                    </div>
                </li>
                <li style="{{ __('global.dir') === 'rtl' ? 'float: right;' : '' }}" class="language-switch">
                    <a href="{{ route("locale.toggle") }}" hreflang="LOCALE PREFIX">
                        <i class="fa fa-globe" style="color: white;" aria-hidden="true"></i>
                        <span>
                            @if(app()->getLocale() == 'en')
                            فارسی
                            @else
                            English
                            @endif
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