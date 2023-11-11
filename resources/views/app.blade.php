<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Título de la Página</title>
    <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

 <header >
<h1></h1>
</header>

  <div class="container">

    <div class="logotipo">
    <img src="./Imagenes/logo.jpg" alt="">
</div>

    <div class="tel">
        <img src="./Imagenes/Tel.jpg" class="img1" alt="">
        <p>320 8533325</p>
    </div>

    <div class="ubicacion">
        <img src="./Imagenes/ubicacion.png" class="img2" alt="ubicacion">
        <p>Calle 15 # 56 - 54 local 2 <br>Barrio Puente Aranda</p>
    </div>

    <div>
        <a href="http://127.0.0.1:8000/banner"> <img src="./Imagenes/home.jpg" class="img3" alt="home"></a>
    </div>

    </div>

    <nav id="menu">
        <ul>
            <li><a href="http://127.0.0.1:8000/banner">Inicio</a></li>
            <li><a href="http://127.0.0.1:8000/nosotros">Nosotros</a></li>
            <li><a href="http://127.0.0.1:8000/productos">Productos</a></li>
            <li><a href="http://127.0.0.1:8000/cotizar">Cotizar</a></li>
            <li><a href="http://127.0.0.1:8000/empleado">Crud</a></li>
            @auth
                <li style="padding:7px">
                <form method="POST" action="{{ route('logout') }}" style="all: initial; margin:0; padding:0;">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Cerrar sesion') }}
                    </x-responsive-nav-link>
                </form>
            @else
                <li><a href="http://127.0.0.1:8000/login">Iniciar sesion</a></li>
                <li><a href="http://127.0.0.1:8000/register">Registrarse</a></li>
            @endauth



</li>

        </ul>
    </nav>
    <main>
        @yield('content')

    </main>

    <footer class="text-center">
    <h4>Siguenos en </h4>
    <div class="redes">
        <a href="https://www.facebook.com/profile.php?id=1068595142&mibextid=ZbWKwL" class="facebook" target="_blank">
    <img src="./Imagenes/facebook 1.png" alt="Facebook">
</a>
<a href="https://twitter.com/@servitransmiSAS" class="twitter" target="_blank">
    <img src="./Imagenes/gorjeo.png" alt="Twitter">
</a>
<a href="https://web.whatsapp.com/" class="whatsapp" target="_blank">
    <img src="./Imagenes/whatsapp.png" alt="WhatsApp">
</a>
    </div>
    <div class="container-fluid">
         <div class="row p-5 pb-2 bg-dark text-white">

            <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="h3 mb-4">Servitrasmi S.A.S</p>
                <p class="text-secondary"> Nos dedicamos a la fabricación y comercialización de mangueras caucho –metal, racorreria en bronce - plástico, acoples y tuberías hechas en aluminio, bronce y metálicas para vehículos semipesados, pesados e industrial. Brindamos la mejor calidad y precios competitivos.</p>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="h4 mb-4">Confie en nosotros y obtendra</p>
                <p class="text-secondary">Ahorro de tiempo</p>
                <p class="text-secondary" >Ahorro de dinero</p>
                <p class="text-secondary">Calidad</p>
                <p class="text-secondary">Variedad de productos</p>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="h4 mb-4">Te ofrecemos</p>
                <p class="text-secondary" >Atencion personalizada</p>
                <p class="text-secondary">Entrega puerta a puerta</p>
                <p class="text-secondary">Entregas a tiempo</p>
                <p class="text-secondary">Diseño y fabricacion por muestra</p>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="h4 mb-4">Direccion</p>
                <p class="text-secondary">Calle 15 # 56 - 54 local 2 <br>Barrio Puente Aranda</p>
            </div>
            <div class="col-xs-12 pt-6">
                <p class="text-white text-center">Copyright - All rights reserved &copy; {{ date('Y') }}</p>
             </div>

         </div>

    </div>
    <p>Para volver al inicio haga click</p> <a href="http://127.0.0.1:8000/banner">aqui</a>
</footer>


    <script src="{{ asset('js/script.js') }}"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
