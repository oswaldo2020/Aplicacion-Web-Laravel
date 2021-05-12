@extends('layout')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/about.svg" alt="Tu mejor opción">
        </div>
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Tu mejor opción</h1>
            <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Odio tenetur rerum aspernatur nulla nemo dicta,
                iure ipsa non, libero quod, nobis modi deserunt.
                Molestias, tenetur temporibus. Aliquid non tenetur illum.</p>
                <a class="btn btn-link btn-lg"
                href="{{ route('mensajes.create')}}">Contáctanos</a>
        </div>


    </div>
</div>

@stop