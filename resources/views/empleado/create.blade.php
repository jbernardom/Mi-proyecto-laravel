

<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('empleado.form', ['modo'=>'Crear']);

</form>

 <hr>
    <hr><br>

    <form action="{{ route('crear.token') }}" method="post">
    @csrf
    <input type="text" name="token_name" id="token_name">
    <input type="submit" value="Actualizar">
    </form>
