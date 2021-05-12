@extends('layout')

@section('contenido')

@auth
<h1>{{auth()->user()->name}}</h1>

@endauth

<div class="container">
    <div class="row ">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Credito y Cobranza</h1>
            <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Odio tenetur rerum aspernatur nulla nemo dicta,
                iure ipsa non, libero quod, nobis modi deserunt.
                Molestias, tenetur temporibus. Aliquid non tenetur illum.</p>
                <a class="btn btn-link btn-lg"
                href="{{ route('mensajes.create')}}">Contáctanos</a>
        </div>

        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/home1.svg" alt="">
        </div>
    </div>
</div>

@stop