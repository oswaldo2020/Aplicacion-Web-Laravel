{{-- {{ dd(auth()->user()->roles->toArray())}} --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" href="css/select2.min.css">
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="{{ mix ('js/app.js')}}" defer></script>
    <script src="js/select2.min.js" defer></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Mi sitio</title>
</head>
<body>
    <div id="app" class="d-flex flex-column h-screen-auto justify-content-between">
        <header>
            @include('partials.nav')
            @if (session()->has('info'))
                <div class="alert alert-success">{{session('info')}} </div>
            @endif
            @include('partials.session-status')
        </header>
        <main class="py-3">
            <div class="container">
                @yield('contenido')
            </div>
        </main>
        <footer class="bg-white text-center text-black-50 py-3 shadow fixed-bottom">
            {{ config ('app.name')}} | Copyright {{date ('Y')}}
        </footer>
    </div>

</body>
</html>

<script type="text/javascript">
    $(document).ready(funccion(){
        $('#controlBuscador').select2();
    });
</script>



