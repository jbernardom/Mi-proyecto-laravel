@extends('app')

@section('content')
<section class="contenedor">
    <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.787025051442!2d-74.11203502416366!3d4.632048942247083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9be3784f3ad9%3A0x95c91910f482d5c0!2sCl.%2015%20%2356-54%20local%202%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1682647071399!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="formulario">
        <div class="form-header">
            <h2>Contacto</h2>
        </div>

        <form method="POST" action="{{url('usuario')}}">
            @csrf

            <label for="nombre">Nombre:</label>
            <input type="text"  name="nombre" placeholder="Nombre">


            <label for="apellido">Apellido:</label>
            <input type="text"  name="apellido" placeholder="Apellido">

            <label for="telefono">Teléfono:</label>
            <input type="numeric"  name="telefono" placeholder="Teléfono">


            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Email">

            <label for="consulta">Consulta:</label>
            <textarea name="consulta" placeholder="Escribe aquí tu consulta" rows="4"></textarea>



            <button type="submit">Enviar</button>
        </form>
    </div>
</section>
@endsection
