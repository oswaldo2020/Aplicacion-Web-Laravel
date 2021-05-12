@extends('layout')

@section('contenido')
<h1>Crear Cliente</h1>

@include('partials.validation-errors')


<div class="container">
            <form method="POST" action="{{ route('clientes.store')}}" class="bg-white shadow rounded py-3 px-4" >

                @include('clientes.form',['cliente' => new App\Models\Cliente])

            </form>
</div>


@stop