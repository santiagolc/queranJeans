@extends('plantilla')

@section("titulo")

QueranJeans - EDITAR PERFIL

@endsection

@section("principal")
<form class="formEditar" action="/edit" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="_token" value="{{csrf_token() }}">

    <h2 style="margin-bottom: 10px;" >Edita tus datos:</h2>

    <label for="name">Nombre</label><br>
    <input type="text" name="name" id="" style="text-align: center;" value="{{$user->name}}"> 
    <span style="color:red; font-size:12px;">{{$errors->first('name')}}</span> <br>

    <label for="name">Apellido</label><br>
    <input type="text" name="surname" id="" style="text-align: center;" value="{{$user->surname}}">
    <span style="color:red; font-size:12px;">{{$errors->first('surname')}}</span> <br>

    <a href="{{ route('password.request') }}">Haz click aqui para cambiar tu contraseña</a><br><br>
            
    <label for="provincia">En que provincia vivis?</label><br>
    <select id="locality-dropdown" name="locality" style="text-align-last: center; text-align: center;">
        <option disabled selected value>-- Elije tu provincia --</option>
    </select> <br><br>  

    <label for="avatar">Modifica tu Avatar</label><br>
    <input id="avatar" type="file" class="form-control form-control-sm" name="avatar"><br>

    <input class="boton1" type="submit" name="" id="" class="btn-sm btn-primary">
</form>
<script src="/js/api.js"></script>  
@endsection
