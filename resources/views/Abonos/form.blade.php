@csrf
<div class="row row-cols-3">
    <div class="col-4">
        <label for="folio">
            Folio
        <input
        class="form-control bg-light shadow-sm"
        type="text"
        name="folio"
        placeholder= "Folio"value="{{ $abono->folio ??  old('folio')}}" >
        {{-- {!!$errors->first('folio', '<span class=error>:message</span>')!!} --}}
    </label>
    </div>
    <div class="col-4">
        <label for="nombre">
            Seleccionar cliente
        <input
        class="form-control bg-light shadow-sm"
        type="text"
        name="nombre"
        placeholder="Seleccionar cliente"
        value="{{old('nombre')}}" >
        {{-- {!!$errors->first('nombre', '<span class=error>:message</span>')!!} --}}
        </label>
    </div>
    <div class="col-4">
        <label for="codigo">
            Codigo del Cliente
        <input class="form-control bg-light shadow-sm"
            type="text"
            name="codigo"
            placeholder="Codigo del cliente"
            value="{{ $abono->nombre ?? old('codigo')}}">
            {{-- {!!$errors->first('codigo', '<span class=error>:message</span>')!!} --}}
        </label>
    </div>
</div>
<div class="row row-cols-3">
    <div class="col-4">
        <label for="ultimo_salado"   >
            Saldo Anterior
            <input
                class="form-control bg-light shadow-sm"
                type="text"
                name="ultimo_saldo"
                placeholder="Saldo Anterior"
                value="{{ old('ultimo_saldo')}}">
                {{-- {!!$errors->first('ultimo_saldo', '<span class=error>:message</span>')!!} --}}
        </label>
    </div>
    <div class="col-4">
        <label for="credito_original"   >
            Crédito Original
            <input
                class="form-control bg-light shadow-sm"
                type="text"
                placeholder="Crédito Original"
                name="credito_original"
                value="{{ old('credito_original')}}">
                {{-- {!!$errors->first('credito_original', '<span class=error>:message</span>')!!} --}}
        </label>
    </div>
    <div class="col-4">
        <label for="ultimo_abono"   >
            Abono de
            <input
            class="form-control bg-light shadow-sm"
            type="text"
            name="ultimo_abono"
            placeholder="$000"
            value="{{ old('ultimo_abono')}}">
            {{-- {!!$errors->first('ultimo_abono', '<span class=error>:message</span>')!!} --}}
        </label>
    </div>
</div>
<div class="row row-cols-2">
    <div class="col-4">
        <label for="estado_activo">
            Activo
            <input
            class="form-control bg-light shadow-sm"
            type="text"
            name="estado_activo"
            placeholder= "NO"
            value="{{  old('estado_activo')}}" >
            {{-- {!!$errors->first('estado_activo', '<span class=error>:message</span>')!!} --}}
        </label>
    </div>
    <div class="col-8">
        <label for="comentarios">
            Comentarios
            <textarea
            class="form-control bg-light shadow-sm "
            type="text"
            name="comentarios"
            placeholder="Cometarios..."
            value="{{  old('comentarios')}}" >
        </textarea>
        {{-- {!!$errors->first('comentarios', '<span class=error>:message</span>')!!} --}}
    </div>

</div>