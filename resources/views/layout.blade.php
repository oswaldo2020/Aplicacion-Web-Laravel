{{-- {{ dd(auth()->user()->roles->toArray())}} --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"href="/css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Mi sitio</title>
</head>
<body>
<header>
        <?php function activeMenu($url){

            return request()->is($url)? 'active' : '';
        } ?>
<nav class="navbar navbar-expand-sm navbar-light bg-light">

    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active nav-link {{ activeMenu('/') }}">
                <a  href="{{ route ('home')}}">Inicio</a>
            </li>
            <li class=" nav-item active nav-link {{ activeMenu('saludo/*') }}" >
                <a href="{{ route ('saludos', 'Oswaldo')}}">Saludo</a>
            </li>
            <li class=" nav-item active nav-link {{ activeMenu('mensajes/create') }}">
                <a href="{{ route('mensajes.create')}}">Contactos</a>
            </li>
            @if (auth()->check() )
                <li class=" nav-item active nav-link {{ activeMenu('mensajes*') }}">
                    <a href="{{ route('mensajes.index')}}">Mensajes</a>
                </li>
                @if (auth()->user()->hasRoles( ['admin']) )
                    <li class=" nav-item active nav-link {{ activeMenu('usuarios*') }}">
                        <a href="{{ route('usuarios.index')}}">Usuarios</a>
                    </li>
                @endif
            @endif
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if (auth()->guest())
                <li class="{{ activeMenu('login') }}">
                    <a  href="/login">Login</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name}}</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownId">
                        <li><a class="dropdown-item" href="/usuarios/{{ auth()->id() }}/edit">Mi cuenta</a></li>
                        <li><a class="dropdown-item" href="/logout">Cerrar sesión</a></li>
                        {{-- <a class="dropdown-item" href="#">Action 2</a> --}}
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</nav>

</header>
    <div class="container">

        @yield('contenido')
        <footer>Copyright {{date ('Y')}}</footer>

    </div>
</body>

<script src="/js/all.js"></script>
</html>

