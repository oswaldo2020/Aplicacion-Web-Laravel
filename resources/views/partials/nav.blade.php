<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home')}}">
        {{ config('app.name')}}
        </a>
        <button class="navbar-toggler" type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active nav-link">
                    <a class= "{{ activeMenu ('/') }}" href="{{ route ('home')}}">Inicio</a>
                </li>
                <li class="nav-item active nav-link">
                    <a class= "{{ activeMenu ('saludo/*') }}" href="{{ route ('saludos', 'Oswaldo')}}">Quienes somos</a>
                </li>
                <li class="nav-item active nav-link">
                    <a class= "{{ activeMenu ('mensajes/create') }}" href="{{ route('mensajes.create')}}">Contactanos</a>
                </li>
                <li class=" nav-item active nav-link">
                    <a class="{{ activeMenu ('abonos*') }}" href="{{ route('abonos.index')}}">Abonos</a>
                </li>
                <li class=" nav-item active nav-link ">
                    <a class="{{ activeMenu ('clientes*') }}" href="{{ route('clientes.index')}}">Clientes</a>
                </li>
                @if (auth()->check() )
                    <li class=" nav-item active nav-link ">
                        <a class="{{ activeMenu ('mensajes/*') }}"
                        href="{{ route('mensajes.index')}}">Mensajes</a>
                    </li>
                    @if (auth()->user()->hasRoles( ['admin']) )
                        <li class=" nav-item active nav-link ">
                            <a class= "{{ activeMenu ('usuarios*') }}"
                            href="{{ route('usuarios.index')}}">Usuarios</a>
                        </li>
                    @endif
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (auth()->guest())
                    <li class="{{ activeMenu('login') }}">
                        <a  href="{{ route('login') }}">Login</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name}}</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownId">
                            <li><a class="dropdown-item" href="/usuarios/{{ auth()->id() }}/edit">Mi cuenta</a></li>
                            <li><a class="dropdown-item" href="/logout">Cerrar sesión</a></li>

                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>