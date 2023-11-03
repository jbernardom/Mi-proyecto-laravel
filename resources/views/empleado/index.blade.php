

@if(Session::has('mensaje'))
{{ Session::get('mensaje')}}

@endif

<a href="{{ url('empleado/create')}}">Registrar nuevo empleado</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->Apellido }}</td>
            <td>{{ $empleado->Cedula }}</td>
            <td>{{ $empleado->Telefono }}</td>
            <td>{{ $empleado->Correo }}</td>
            <td>

                <a href="{{ url('/empleado/'.$empleado->id.'/edit')}}">Editar</a>

                <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" onclick="return confirm('¿Estas seguro que quieres eliminar?')" value="Eliminar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
 <div>
        <a href="http://127.0.0.1:8000/banner"> <img src="./Imagenes/home.jpg" class="img3" alt="home"></a>
