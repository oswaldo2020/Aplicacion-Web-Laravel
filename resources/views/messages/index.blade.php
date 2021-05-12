@extends('layout')

@section('contenido')
<h1>Todos los mensajes</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Mensaje</th>
            <th>Notas</th>
            <th>Etiquetas</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($messages as $message)
            <tr>
                <td>{{ $message->id}}</td>
                @if ($message->user_id)
                    <td>
                        <a href="{{ route('usuarios.show', $message->user_id) }}">
                            {{ $message->present()->userName() }}
                        </a>
                    </td>
                    <td>{{ $message->present()->userEmail() }}</td>
                @else
                    <td>{{ $message->nombre}}</td>
                    <td>{{ $message->email}}</td>
                @endif
                <td>
                    <a href="{{route('mensajes.show', $message->id)}}">{{ $message->mensaje}}</a>
                    {{-- {{ $message->present()->link() }} --}}
                </td>

                <td>{{ $message->note ? $message->note->body : ''}}</td>
                <td>{{ $message->tags->pluck('name')->implode(' - ') }}</td>
                <td>
                    <a class="btn btn-info btn-xs" href="{{ route('mensajes.edit', $message->id)}}">Editar</a>
                    <form style="display:inline" method="POST" action="{{ route('mensajes.destroy', $message->id)}}">
                        {!! method_field('DELETE') !!}
                        {!! csrf_field() !!}


                        <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
                    </form>
                </td>

            </tr>
        @endforeach

{!! $messages->fragment('hash')->appends(request()->query())->links('pagination::simple-bootstrap-4')!!}
    </tbody>

</table>

@stop
