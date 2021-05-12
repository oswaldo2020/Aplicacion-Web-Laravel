@extends('layout')

@section('title', $cliente->nombre)

@section('contenido')
@auth
<h1><a href="{{ route ('clientes.edit', $cliente)}}">Editar Cliente</a></h1>

<form method="POST" action="{{ route('clientes.destroy', $cliente)}}">
    @csrf @method('DELETE')
    <button>Eliminar</button>
</form>
@endauth

@include('partials.validation-errors')

<p>Nombre: {{ $cliente->nombre }} {{ $cliente->apellido_paterno }} {{$cliente->apellido_materno}}</p>
<p> Correo electronico: {{ $cliente->email }}</p>
<p> Edad: {{ $cliente->edad }}</p>
<p> Sexo: {{ $cliente->sexo }}</p>
<p> Dirección: {{ $cliente->direccion }}</p>
<p> Estado: {{ $cliente->estado }}</p>
<p> Estado de nacimiento: {{ $cliente->estado_nacimiento }}</p>
<p> Altura: {{ $cliente->altura }}</p>
<p> Peso: {{ $cliente->peso }}</p>
<p> Categoria: {{ $cliente->categoria }}</p>
<p> Codigo del cliente: {{ $cliente->codigo_cliente }}</p>
<p> Creado: {{ $cliente->created_at->diffForHumans() }}</p>
@stop