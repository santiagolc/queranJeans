<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilosheader.css">
    <link rel="stylesheet" href="css/estilosindex.css">
    <link rel="stylesheet" href="css/estilosfaq.css">
    <link rel="stylesheet" href="css/estilosregistro.css">
    <link rel="stylesheet" href="css/estiloslogin.css">
    <link rel="stylesheet" href="css/estilosfooter.css">
    
    <title>

    @yield("titulo")

    </title>
    
</head>
<body>
<header>
    <nav>
        <span class="logo">
            <a href="/index" class="logo"><img src="images/logob&n.png" alt="logo QueranJeans"></a>
        </span>
        <ul>
            <li><a href="/login">LOGIN</a></li>
            <li><a href="/register">REGISTRARSE</a></li>
        </ul>
    </nav>
</header>

 @yield("principal")

<footer>
        <div class="contacto">
            <h3>CONTACTO</h3>
            <a href="tel:5254-5658">5254-5658</a><br>
            <a href="mailto:nuestrositio@gmail.com">nuestrositio@gmail.com</a>
        </div>
        <a class="faq" href="/faq">PREGUNTAS FRECUENTES</a>
        <ul class="redes">
            <li><a href="https://facebook.com" target="_blank"><img src="images/facebook.png" alt=""> FACEBOOK</a></li>
            <li><a href="https://instagram.com" target="_blank"><img src="images/instagram.png" alt=""> INSTAGRAM</a></li>
            <li><a href="https://twitter.com" target="_blank"><img src="images/twitter.png" alt=""> TWITTER</a></li>
        </ul>
</footer>
</body>
</html>