@extends('plantilla')

@section("titulo")

QueranJeans - EDITAR PERFIL

@endsection

@section("principal")
<form action="/edit" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="_token" value="{{csrf_token() }}">

    <label for="">Edita tus datos:</label><br><br>

    <label for="name">Nombre</label><br>
    <input type="text" name="name" id="" value="{{$user->name}}"><br><br>

    <label for="name">Apellido</label><br>
    <input type="text" name="surname" id="" value="{{$user->surname}}"><br><br>

    <label for="avatar">Avatar</label><br>
    <input id="avatar" type="file" class="form-control form-control-sm" name="avatar"><br>
  
    <input type="submit" name="" id="" class="btn-sm btn-primary">
</form>
@endsection
