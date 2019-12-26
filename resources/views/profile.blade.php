@extends('plantilla')

@section("titulo")

QueranJeans - Perfil

@endsection

@section("principal")

    <div class="perfil" style="display: flex; flex-direction: column; align-items: center; margin-top:200px;>
            <h2 style="text-decoration: underline; margin-bottom: 30px;">ESTE ES EL PERFIL DE: {{$user->name}}</h2> 
            <h2>Nombre Completo:{{$user->name}} {{$user->surname}}</h2>
            <h2>Email:{{$user->email}}</h2>
            <h2>Es parte de QueranJeans desde: {{$user->created_at}}</h2>
            <img class="imgAvatarEdit" src='{{$user->avatar}}' alt="avatar usuario" style="width:300px; height: 300px;">
            
            <a href="edit" style="font-weight: bold; text-transform: uppercase; text-decoration: none; color: slategrey;">Hace Click aca para editar tus datos!</a>
        </div>        
    </div>
@endsection
