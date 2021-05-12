@extends('layout')

@section('contenido')
<div class="container">
    <div class="row aling-items-start justify-content-between ">
        <h1 class="display-5">Todos los Registros</h1>

        @auth
        <a class="btn btn-link btn-md pull-right my-auto" href="{{ route('abonos.create')}}"><h5>Ingresar nuevo abono</h5></a>

        @endauth
    </div>
    <table class="table">
        <thead>
            <tr>
                {{-- <th>ID</th> --}}
                <th>Folio</th>
                <th>Nombre</th>
                <th>Codigo del cliente</th>
                <th>Ultimo saldo</th>
                <th>Credito Original</th>
                <th>Abono de</th>
                <th>Activo</th>
                <th>Comentarios</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($abonos as $abono)
                <tr>
                    {{-- <td>{{ $abono->id}}</td> --}}
                    <td>{{ $abono->folio }}</td>
                    <td>{{ $abono->nombre }}</td>
                    <td>{{ $abono->codigo }}</td>
                    <td>{{ $abono->ultimo_saldo }}</td>
                    <td>{{ $abono->credito_original }}</td>
                    <td>{{ $abono->ultimo_abono }}</td>
                    <td>{{ $abono->estado_activo }}</td>
                    <td>{{ $abono->comentarios }}</td>
                    <td>
                        <a class="btn btn-info btn-xs" href="{{ route('abonos.edit', $abono->id)}}">Editar</a>
                        <form style="display:inline" method="POST" action="{{ route('abonos.destroy', $abono->id)}}">
                            {!! method_field('DELETE') !!}
                            {!! csrf_field() !!}


                            <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>

</div>
@stop