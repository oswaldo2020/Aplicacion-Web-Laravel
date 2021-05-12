@extends('layout')

@section('contenido')

{{-- <h1>Contactos</h1> --}}

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto" >
            <form class="bg-white shadow rounded py-3 px-4"
            method="POST"
            action="{{ route('mensajes.store') }}">

                <h2 class="display-5">Escribenos</h2>
                <hr>
                    @include('messages.form',
                     ['message' => new App\Models\Message,
                     'showFields' => auth()->guest()
                     ])

                     {{-- <input class="btn btn-primary" type="submit" value="Guardar"> --}}
            </form>
        </div>
    </div>
</div>
<hr>
@stop