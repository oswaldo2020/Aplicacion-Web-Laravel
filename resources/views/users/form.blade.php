{!! csrf_field() !!}
<p><label for="nombre">
    Nombre
    <input class="form-control" type="text" name="name" value="{{ $user->name ?? old('name')}}">

    {!!$errors->first('name', '<span class=error>:message</span>')!!}
</label></p>
<p></p><label for="email">
    Email
    <input class="form-control" type="text" name="email" value="{{ $user->email ?? old('email')}}">
    {!!$errors->first('email','<span class=error>:message</span>')!!}
</label></p>

@unless ($user->id)
<p><label for="password">
    Password
    <input class="form-control" type="password" name="password" >
    {!!$errors->first('password', '<span class=error>:message</span>')!!}
</label></p>
<p><label for="password_confirmation">
    Password Confirm
    <input class="form-control" type="password" name="password_confirmation" >

    {!!$errors->first('password_confirmation', '<span class=error>:message</span>')!!}
</label></p>

@endunless

<div class="form-check">
@foreach ($roles as $id =>$name)
<label class="form-check-label">
    <input
    type="checkbox"
    class="form-check-input"
    value="{{$id}}"
    {{ $user->roles->pluck('id')->contains($id) ? 'checked' : ''}}
    id=""
    name="roles[]">
    {{ $name}}
</label>
@endforeach
</div>
{!!$errors->first('roles', '<span class=error>:message</span>')!!}
<hr>