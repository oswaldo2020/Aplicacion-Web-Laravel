@extends('layout')

@section('contenido')

@include('partials.validation-errors')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-10 mx-auto" >
            <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('abonos.store')}}">
                <h1 class="display-6">Ingresar abono</h1>

                @include('abonos.form',['abono' => new App\Models\Abono])

                <input class="btn btn-primary" type="submit" value="{{ $btnText ?? 'Guardar'}}">
                <a class= "btn btn-secondary btn block"
                href="{{ route('abonos.index')}}">
                Cancelar
                </a>
            </form>
        </div>
    </div>
</div>

@stop