<nav class="new-nav" id="nav">
    <div class="container__nav nav-space-between">

        <div class="nav__logo nav-space-between">
            <a href="{{ url('/') }}"><div id="nav__logo"></div></a>
            <a href="#" id="icon" class="nav__btn"><i class="icon fas fa-bars"></i></a>
        </div>
        
        <ul id="links" class="nav__list">
        @if (Route::has('login'))
            <li class="nav__button">
                <a href="{{ route('login') }}" class="nav__link">
                    <span class="nav__text">Iniciar Sesion</span>
                </a>
            </li>
        @endif
        @if (Route::has('register'))
            <li class="nav__button">
                <a href="{{ route('register') }}" class="nav__link">
                    <span class="nav__text">Registrarse</span>
                </a>
            </li>
        @endif
        </ul>

    </div>
</nav>