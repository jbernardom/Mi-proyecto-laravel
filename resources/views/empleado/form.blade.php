
<h1>{{ $modo }} Empleado</h1>
<br>

<label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : '' }}" id="Nombre">
    <br>

    <label for="Apellido">Apellido</label>
    <input type="text" name="Apellido" value="{{ isset($empleado->Apellido) ? $empleado->Apellido : '' }}" id="Apellido">
    <br>

    <label for="Cedula">Cedula</label>
    <input type="text" name="Cedula" value="{{ isset($empleado->Cedula) ? $empleado->Cedula : '' }}" id="Cedula">
    <br>

    <label for="Telefono">Telefono</label>
    <input type="text" name="Telefono" value="{{ isset($empleado->Telefono) ? $empleado->Telefono : '' }}" id="Telefono">
    <br>

    <label for="Correo">Correo</label>
    <input type="text" name="Correo" value="{{ isset($empleado->Correo) ? $empleado->Correo : '' }}" id="Correo">
    <br>

    <input type="submit" value="{{ $modo }} Datos">

    <a href="{{ url('empleado')}}">Regresar</a>
