<nav class="navbar navbar-expand-lg navbar-light bg-danger sticky-top " 
    style="border-bottom: 10px solid white; padding: 15px; border-image: url({{ asset('storage/img/floor-tile.png') }}) 20 round;">
    <div class="container-fluid ">
        <a class="navbar-brand" style="color: white;" href="{{ route('presentation.index') }}">Photo Wiz</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" style="color: white;" href="{{ route('photos.index') }}">Fotografie</a>
                <a class="nav-link" style="color: white;" href="{{ route('photographers.index') }}">Fotografowie</a>
                <a class="nav-link" style="color: white;" href="{{ route('presentation.about') }}">O nas</a>
                @if (Auth::check()) 
                <a class="nav-link position-absolute" style="right: 0; color: white;" href="{{ route('logout') }}"> {{ Auth::user()->name }}, wyloguj się... </a>
                @else 
                <a class="nav-link position-absolute" style="right: 0; color: white;" href="{{ route('login') }}">Zaloguj się...</a>
                @endif 
            </div>
            
        </div>
    </div>
</nav>