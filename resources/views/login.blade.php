@extends('plantilla')

@section("titulo")

QueranJeans - Login

@endsection

@section("principal")
    <!--<main class="formulario">
        <div class="titulo">
            <h1 class="titulo formulario" style="font-size: 60px;">Login</h1>
        </div>-->
        <form class="campos" action="" method="post">
            <div class="formulario email">
                <label class="labelblock" for="mail">Email:</label>
                <input id="mail" type="email" name="mail" value="" required /><br>
            </div>
            <div class="formulario password">
                <label class="labelblock" for="password">Contraseña:</label>
                <input id="password" type="password" name="password" value="" required /><br>
            </div>
            <div class="formulario recordarme">
                <label for="recordame">Recordame</label>
                <input id = recordame type="hidden" name="recordame" value="no" checked="checked"> 
                <input id="recordame" type="checkbox" name="recordame" value="si" /recordame </div>
            <div class="formulario">
                <button class="boton1" type="submit" name="ingresar">Ingresar</button>
            </div>
        </form>
        <div class="formulario">
                <a href="recuperarcontraseñapaso1.php">¿Olvido su contraseña?</a>
        </div>
    <!--</main>-->
@endsection