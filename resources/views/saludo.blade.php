@extends('layout')

@section('contenido')

    <h1>Saludos a {{$nombre}}</h1>
    <ul>
        @forelse ($consolas as $consola)
            <li>{{ $consola}}</li>

        @empty
        <p>No hay consolas</p>

        @endforelse
{{--
        @if (count($consolas) === 1)
        <p>Solo tienes una consola</p>
        @elseif(count($consolas) > 1)
        <p>Tienes varias consolas</p>
        @else
            <p>No tienes ninguna consola</p>
        @endif --}}
    </ul>


@stop