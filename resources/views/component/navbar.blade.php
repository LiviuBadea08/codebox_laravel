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
                    <span class="nav__text">Iniciar Sesión</span>
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
        <li class="nav__button">
                <a href="{{ route('info') }}" class="nav__link nav__link">
                    <span class="nav__text">Quiénes somos</span>
                </a>
            </li>
        </ul>
    </div>
</nav>