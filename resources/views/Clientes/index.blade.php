@extends('layout')

@section('css')

{{-- <link rel="stylesheet" href="{{asset('vendor/jquery-ui/jquery-ui.min.css')}}"> --}}

@section('contenido')
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-3">
                <h1>Clientes</h1>
            </div>
            <div class="col-3">
                @auth
                <a class="btn btn-light border-2 border-light shadow mb-3 my-auto" href="{{ route('clientes.create')}}">Crear nuevo cliente</a>
                @endauth
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID
                        <select class="form-control bg-white" name="buscador" id="controlBuscador">
                            @foreach ($clientes as $cliente)
                            <option value="{{$cliente->id}}">
                                {{$cliente->id}}
                            </option>
                            @endforeach
                        </select>
                    </th>
                    </th>
                    <th>Nombre
                        <select class="form-control bg-white" name="buscador" id="controlBuscador">
                            @foreach ($clientes as $cliente)
                            <option value="{{$cliente->nombre}} {{$cliente->apellido_paterno}}">
                                {{$cliente->nombre}} {{$cliente->apellido_paterno}}
                            </option>
                            @endforeach
                        </select>
                    </th>
                    <th>Correo electronico
                        <select class="form-control bg-white" name="buscador" id="controlBuscador">
                            @foreach ($clientes as $cliente)
                            <option value="{{$cliente->email}}">
                                {{$cliente->email}}
                            </option>
                            @endforeach
                        </select>
                    </th>
                    <th>Edad
                        <select class="form-control bg-white" name="buscador" id="controlBuscador">
                            @foreach ($clientes as $cliente)
                            <option value="{{$cliente->edad}}">
                                {{$cliente->edad}}
                            </option>
                            @endforeach
                        </select>
                    </th>
                    <th>Sexo
                        <select class="form-control bg-white" name="buscador" id="controlBuscador">
                            @foreach ($clientes as $cliente)
                            <option value="{{$cliente->sexo}}">
                                {{$cliente->sexo}}
                            </option>
                            @endforeach
                        </select>
                    </th>
                    <th>Dirección
                        <select class="form-control bg-white" name="buscador" id="controlBuscador">
                            @foreach ($clientes as $cliente)
                            <option value="{{$cliente->direccion}}">
                                {{$cliente->direccion}}
                            </option>
                            @endforeach
                        </select>
                    </th>
                    <th>Estado
                        <select class="form-control bg-white" name="buscador" id="controlBuscador">
                            @foreach ($clientes as $cliente)
                            <option value="{{$cliente->estado}}">
                                {{$cliente->estado}}
                            </option>
                            @endforeach
                        </select>
                    </th>
                    <th>Estado Nacimiento
                        <select class="form-control bg-white" name="buscador" id="controlBuscador">
                            @foreach ($clientes as $cliente)
                            <option value="{{$cliente->estado_nacimiento}}">
                                {{$cliente->estado_nacimiento}}
                            </option>
                            @endforeach
                        </select>
                    </th>
                    <th>Altura
                        <select class="form-control bg-white" name="buscador" id="controlBuscador">
                            @foreach ($clientes as $cliente)
                            <option value="{{$cliente->altura}}">
                                {{$cliente->altura}}
                            </option>
                            @endforeach
                        </select>
                    </th>
                    <th>Peso
                        <select class="form-control bg-white" name="buscador" id="controlBuscador">
                            @foreach ($clientes as $cliente)
                            <option value="{{$cliente->peso}}">
                                {{$cliente->peso}}
                            </option>
                            @endforeach
                        </select>
                    </th>
                    <th>Categoria
                        <select class="form-control bg-white" name="buscador" id="controlBuscador">
                            @foreach ($clientes as $cliente)
                            <option value="{{$cliente->categoria}}">
                                {{$cliente->categoria}}
                            </option>
                            @endforeach
                        </select>
                    </th>
                    <th>Codigo_cliente
                        <select class="form-control bg-white" name="buscador" id="controlBuscador">
                            @foreach ($clientes as $cliente)
                            <option value="{{$cliente->codigo_cliente}}">
                                {{$cliente->codigo_cliente}}
                            </option>
                            @endforeach
                        </select>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td><a href="{{ route('clientes.show', $cliente)}}">{{ $cliente->nombre}} {{$cliente->apellido_paterno}} {{$cliente->apellido_materno }} </a></td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->edad }}</td>
                        <td>{{ $cliente->sexo }}</td>
                        <td>{{ $cliente->direccion }}</td>
                        <td>{{ $cliente->estado }}</td>
                        <td>{{ $cliente->estado_nacimiento }}</td>
                        <td>{{ $cliente->altura }}</td>
                        <td>{{ $cliente->peso }}</td>
                        <td>{{ $cliente->categoria }}</td>
                        <td>{{ $cliente->codigo_cliente }}</td>
                            @auth
                            <td>
                            <a class="btn btn-info btn-xs"
                                href="{{ route('clientes.edit', $cliente->id)}}">Editar</a>
                            <form
                                style="display:inline"
                                method="POST"
                                action="{{ route('clientes.destroy', $cliente->id)}}">
                                {!! method_field('DELETE') !!}
                                {!! csrf_field() !!}
                                <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
                            </form>
                        </td>
                            @endauth

                    </tr>

                @endforeach
            </tbody>
        </table>

    </div>
@endsection
<body>

    {{-- @section('js')
        <script>
                // var cursos = ['html', 'css', 'javascript', 'php', 'laravel'];
                // dd(cursos);
            $('#search').autocomplete({
                // source: cursos
                source: function(request, response){
                    $.ajax({
                        url:"{{route('search.clientes')}}",
                        dataType: 'json',
                        data:{
                            term:request.term
                        },
                        success: function(data){
                            response(data)
                        }
                    });
                }
            });

    </script> --}}

    <script type="text/javascript">
        $(document).ready(funccion(){
            $('#controlBuscador').select2();
        });
    </script>

</body>
