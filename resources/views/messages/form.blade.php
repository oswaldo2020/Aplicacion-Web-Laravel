@csrf
@if($showFields)
    <div class="form-group">
        <label for="nombre">
            Nombre
            <input class="form-control bg-light shadow-sm"
            id="nombre"
            type="text"
            name="nombre"
            placeholder="Ejem. Juan Pérez"
            value="{{ $message->nombre ?? old('nombre')}}">
            {!!$errors->first('nombre','<span class=error>:message</span>')!!}
            {{-- @error('nombre')
                <span class="invalid-feedback" role"alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror --}}
        </label>
    </div>
    <div class="form-group">
        <label for="email">
            Email
            <input class="form-control bg-light shadow-sm"
            type="text"
            name="email"
            placeholder="Ejem. juantio123@email.com"
            value="{{$message->email ?? old('email')}}">
            {!!$errors->first('email','<span class=error>:message</span>')!!}
        </label>
    </div>
@endif
    <div class="form-group">
        <label for="mensaje">Mensaje</label>
            <textarea
            class="form-control"
            name="mensaje">
            {{ $message->mensaje ?? old('mensaje')}} </textarea>
            {!!$errors->first('mensaje','<span class=error>:message</span>')!!}
    </div>

        <button class="btn btn-primary btn-lg" type="submit" value="Enviar">{{ $btnText ?? 'Enviar'}}
        </button>