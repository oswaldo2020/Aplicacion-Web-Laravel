@extends('layout')

@section('contenido')
<h1>Crear Usuario</h1>

<form method="POST" action="{{ route('usuarios.store')}}" id="formajax">

    @include('users.form',['user' => new App\Models\User])

    <input class="btn btn-primary" type="submit" value="Guardar" id="btnguardar" >

</form>

<script type="text/javascript">
    $(document).ready(function(){
        $('#btnguardar').click(function(){
            var datos=$('#formajax').serialize();
            $.ajax({
                type:'POST',
                url:'usuarios.guardar',//?
                data:datos,
                success:function(r){

                }
            });
        });
    });



</script>

type:'POST',
        url:'/postData',
        data:{ _token : '{{csrf_token()}}'  , datos: data_string, urgente:radioValue , estatus:1, targets: targets },
        success:function(data) {
          console.log(data)

@stop