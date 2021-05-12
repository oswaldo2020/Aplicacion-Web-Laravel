@extends('layout')


@section('contenido')
<h1>Editar Cliente</h1>

@include('partials.validation-errors')


<form method="POST" action="{{ route('clientes.update', $cliente->id)}}">
    {!! method_field('PATCH')!!}
    @include('clientes.form', [
        'btnText' =>'Actualizar'])

</form>
@stop