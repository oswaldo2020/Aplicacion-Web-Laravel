{!! csrf_field() !!}
    <div class="row row-cols-3">
        <div class="col-4">
            <label for="nombre">Nombre</label>
                <input class="form-control bg-light shadow-sm" type="text" name="nombre" value="{{ old('nombre', $cliente->nombre) }}">
        </div>
        <div class="col-4">
            <label for="apellido_paterno">Apellido Paterno</label>
                <input class="form-control" type="text" name="apellido_paterno" value="{{ old('apellido_paterno', $cliente->apellido_paterno)}}">

        </div>
        <div class="col-4">
            <label for="apellido_materno">Apellido Materno</label>
                <input class="form-control" type="text" name="apellido_materno" value="{{  old('apellido_materno', $cliente->apellido_materno)}}">

        </div>
    </div>

    <div class="row row-cols-3">
        <div class="col-4">
            <label for="edad">
                Fecha de nacimiento
                <input class="form-control bg-light shadow-sm" type="text" name="edad" placeholder="DD/MM/AAAA" value="{{ old('edad', $cliente->edad)}}" >

            </label>
        </div>
        <div class="col-4">
            <label for="sexo">
            Sexo
                <select class="form-control bg-light shadow-sm" type="text" name="sexo" value="{{ old('sexo', $cliente->sexo)}}">
                    <option value="hombre"> Hombre </option>
                    <option value="mujer">Mujer</option>
                </select>

            </label>
        </div>
        <div class="col-4">
            <label for="rireccion">
            Dirección
                <textarea class="form-control  bg-light shadow-sm" name="direccion" id="" cols="30" rows="2">{{ old('direccion', $cliente->direccion)}}</textarea>
                {{-- <input class="form-control  bg-light shadow-sm" type="text" name="direccion" value="{{$cliente->direccion ?? old('direccion')}}"> --}}

            </label></p>

        </div>
    </div>

    <div class="row row-cols-3">
        <div class= "col">
            <label for="estado">
                Estado
                    <select class="form-control" type="text" name="estado" value="{{ old('estado', $cliente->estado) }}">
                        <option value="no">Seleccione uno...</option>
                      <option value="Aguascalientes">Aguascalientes</option>
                      <option value="Baja California">Baja California</option>
                      <option value="Baja California Sur">Baja California Sur</option>
                      <option value="Campeche">Campeche</option>
                      <option value="Chiapas">Chiapas</option>
                      <option value="Chihuahua">Chihuahua</option>
                      <option value="CDMX">Ciudad de México</option>
                      <option value="Coahuila">Coahuila</option>
                      <option value="Colima">Colima</option>
                      <option value="Durango">Durango</option>
                      <option value="Estado de México">Estado de México</option>
                      <option value="Guanajuato">Guanajuato</option>
                      <option value="Guerrero">Guerrero</option>
                      <option value="Hidalgo">Hidalgo</option>
                      <option value="Jalisco">Jalisco</option>
                      <option value="Michoacán">Michoacán</option>
                      <option value="Morelos">Morelos</option>
                      <option value="Nayarit">Nayarit</option>
                      <option value="Nuevo León">Nuevo León</option>
                      <option value="Oaxaca">Oaxaca</option>
                      <option value="Puebla">Puebla</option>
                      <option value="Querétaro">Querétaro</option>
                      <option value="Quintana Roo">Quintana Roo</option>
                      <option value="San Luis Potosí">San Luis Potosí</option>
                      <option value="Sinaloa">Sinaloa</option>
                      <option value="Sonora">Sonora</option>
                      <option value="Tabasco">Tabasco</option>
                      <option value="Tamaulipas">Tamaulipas</option>
                      <option value="Tlaxcala">Tlaxcala</option>
                      <option value="Veracruz">Veracruz</option>
                      <option value="Yucatán">Yucatán</option>
                      <option value="Zacatecas">Zacatecas</option>
                    </select>

                </label></p>
        </div>
        <div class= "col">
            <p><label for="estado_nacimiento">
                Estado Nacimeinto
                    <select class="form-control" type="text" name="estado_nacimiento" value="{{ old('estado_nacimiento', $cliente->estado_nacimiento)}}">
                        <option value="no">Seleccione uno...</option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="CDMX">Ciudad de México</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Durango">Durango</option>
                        <option value="Estado de México">Estado de México</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Michoacán">Michoacán</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo León">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Querétaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosí">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatán">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>
                    </select>

                </label>
        </div>
        <div class= "col">
            <p><label for="altura">
                Altura
                    <input class="form-control" type="text" name="altura" placeholder="Centimetros" value="{{ old('altura', $cliente->altura )}}">

                </label></p>
        </div>
    </div>

    <div class="row row-cols-3">
        <div class= "col">
            <p><label for="peso">
                Peso
                    <input class="form-control" type="text" name="peso" placeholder="Kilos" value="{{   old('peso', $cliente->peso)}}">

                </label></p>
        </div>
        <div class= "col">
            <p><label for="categoria">
                Categoria
                    <input class="form-control" type="text" name="categoria" value="{{ old('categoria', $cliente->categoria)}}">

                </label></p>
        </div>
        <div class= "col">
            <p><label for="codigo_cliente">
                Codigo del cliente
                    <input class="form-control" type="text" name="codigo_cliente" value="{{  old('codigo_cliente', $cliente->codigo_cliente )}}">

                </label></p>
        </div>
    </div>

    <div class="row row-cols-3">
        <div class= "col">
            <p><label for="email">
                Correo Electronico
                    <input class="form-control" type="email" name="email" placeholder="ejemplo@gmail.com" value="{{   old('email', $cliente->email)}}">

                </label></p>
        </div>

    </div>


<input class="btn btn-primary" type="submit" value="{{ $btnText ?? 'Guardar'}}">


