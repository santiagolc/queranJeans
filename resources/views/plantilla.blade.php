<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">   
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilosindex.css">
    <link rel="stylesheet" href="/css/estilosheader.css">
    <link rel="stylesheet" href="/css/estilosfaq.css">
    <link rel="stylesheet" href="/css/estilosregistro.css">
    <link rel="stylesheet" href="/css/estiloslogin.css">
    <link rel="stylesheet" href="/css/estiloscategorias.css">
    <link rel="stylesheet" href="/css/estiloscarrito.css">
    <link rel="stylesheet" href="/css/estilosfooter.css">
    <link rel="stylesheet" href="/css/estilosEditarPerfil.css">
    <link rel="stylesheet" href="/css/estilosperfil.css">
    <link rel="stylesheet" href="/css/estilostuscompras.css">
    <link rel="stylesheet" href="/css/estiloseditarproductos.css">
    <link rel="stylesheet" href="/css/estiloscomprafinalizada.css">
    <link rel="stylesheet" href="/css/estiloscontraseñalogueate.css">






    
    <title>

    @yield("titulo")

    </title>
    
</head>
<body>
<header>
    <nav>
        <span class="logo">
            <a href="/" class="logo"><img src="/images/logob&n.png" alt="logo QueranJeans"></a>
        </span>
        @guest
        <ul>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Registrarse</a></li>
        </ul>
        @endguest
        @auth
        <ul>
            <li>
                @php
                    $productQuantity = count($carritoActivo->products);
                @endphp
                <a href="/carrito">
                <i class="large material-icons">shopping_cart</i>
                <span>Carrito</span> 
                @if($productQuantity>0)
                    <span>({{$productQuantity}})</span></a>
                @endif
            </li>   

            @php
                if(Auth::user()->admin==1){
                    echo '<li class="esconderMobile"><a href="/productos"><i class="large material-icons">add_circle</i>Administrar Productos</a></li>';  
                } 
            @endphp

            <li><a href="/profile"><span>{{ Auth::user()->name }}</span></a></li>
            
            <li class="avatarHeader"><img src="/{{ Auth::user()->avatar }}" alt=""></li>
           
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Salir</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
            </li>
            
        </ul>
        @endauth
    </nav>
</header>

 @yield("principal")

<footer>
        <div class="contacto">
            <h3>Contacto</h3>
            <a href="tel:5254-5658">5254-5658</a><br>
            <a href="mailto:nuestrositio@gmail.com">nuestrositio@gmail.com</a>
        </div>
        <a class="faq" href="/faq">Preguntas Frecuentes</a>
        <ul class="redes">
            <li><a href="https://facebook.com" target="_blank"><img src="/images/facebook.png" alt=""> Facebook</a></li>
            <li><a href="https://instagram.com" target="_blank"><img src="/images/instagram.png" alt=""> Instagram</a></li>
            <li><a href="https://twitter.com" target="_blank"><img src="/images/twitter.png" alt=""> Twitter</a></li>
        </ul>
</footer>
</body>
</html>