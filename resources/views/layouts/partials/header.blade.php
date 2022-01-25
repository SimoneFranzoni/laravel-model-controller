<header class="container">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" {{ (Route::currentRouteName() === 'home') ? 'active' : ''}} href="{{ route('home')}}">
                Home
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" {{ (Route::currentRouteName() === 'about') ? 'active' : ''}} aria-current="page" href="{{ route('about')}}">
                Chi siamo
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" {{ (Route::currentRouteName() === 'movies') ? 'active' : ''}} aria-current="page" href="{{ route('movies')}}">
                Film
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" {{ (Route::currentRouteName() === 'contacts') ? 'active' : ''}} aria-current="page" href="{{ route('contacts')}}">
                Contatti
            </a>
        </li>
    </ul>

</header>