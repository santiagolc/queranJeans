@extends('plantilla')

@section("titulo")

QueranJeans - PERFIL

@endsection

@section("principal")

<<<<<<< HEAD
    <div class="logueate">
        <h2>Para poder agregar productos al carrito debes estar Logueado</h2>
            <a class="logueateLinks" href="edit">Logueate aqui!</a>
        
        <h2>Si aun no tenes cuenta en QueranJeans podes registrarte</h2>
            <a class="logueateLinks" href="edit">Registrate por aca!</a>
    </div>        

=======
    <div class="perfil" style="display: flex; flex-direction: column; align-items: center; margin-top:200px;">
            <h2 style="text-decoration: underline; margin-bottom: 30px;">Para poder agregar al carrito debes estar Logueado.</h2> 
            <h2>Si aun no tenes cuenta en QueranJeans podes registrarte</h2>  
            <br>
            <span>
                <img class="imgAvatarEdit" src='/images/logob&n.png' alt="avatar usuario" style="object-position: center center; background-color: grey; width:200px; height: 200px; border-radius: 250px; border: 1px solid grey;">
            </span>
            <br>
            <a href="edit" style="font-weight: bold; text-transform: uppercase; text-decoration: none; color: purple; border: 1px solid grey; border-radius: 4px; padding: 4px;">Logueate!</a><br>
            <br>
            <a href="edit" style="font-weight: bold; text-transform: uppercase; text-decoration: none; color: purple; border: 1px solid grey; border-radius: 4px; padding: 4px;">Registrate!</a>
        </div>        
    </div>
>>>>>>> 111d03ad944f3457afed643353be3481d2e581b8
@endsection