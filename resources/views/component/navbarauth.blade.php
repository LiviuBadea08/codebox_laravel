<nav class="new-nav" id="nav">
    <div class="container__nav nav-space-between" style="flex-direction: column;">

        <div class="nav__logo nav-space-between">

            <a href="{{ url('/') }}"><div id="nav__logo"></div></a>

            <a href="#" id="icon" class="nav__btn-auth">
                <span class="auth__container auth__text">{{ Auth::user()->name }}</span>
                <i class="fas fa-user-circle auth__container"></i>
            </a>

        </div>
        
        <ul id="links" class="nav__list nav__list-auth">
            <li class="nav__button-auth">
                <a href="{{ route('profile') }}" class="nav__link nav__link-auth">
                    <span class="nav__text">Perfil</span>
                </a>
            </li>
            <li class="nav__button-auth">
                <a href="{{ route('info') }}" class="nav__link nav__link-auth">
                    <span class="nav__text">Quiénes somos</span>
                </a>
            </li>
            <li class="nav__button-auth">
                <a href="{{ route('logout') }}" class="nav__link nav__link-auth" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <span class="nav__text">{{ __('Cerrar sesión') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>

    </div>
</nav>