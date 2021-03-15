@extends('layout')

@section('contenido')

<h1>Login</h1>
<form class="form-inline" method="POST" action="/login">
    @csrf
<input class="form-control" type="email" name="email" placeholder="Email">
<input class="form-control" type="password" name="password" placeholder="Pasword">
<input class="btn btn-primary" type="submit" valor="Entrar">
</form>

<br>

@stop
