@extends('plantilla')

@section("titulo")

QueranJeans - PERFIL

@endsection

@section("principal")

    <div class="perfil">
            <h2 style="text-decoration: underline; margin-bottom: 30px;">Tu perfil:</h2> 
            <h2>Nombre Completo: {{$user->name}} {{$user->surname}}</h2>
            <h2>Email: {{$user->email}}</h2><br>
            @if($user->province!=null)
                @forelse($array as $index => $province)
                    @if($user->province == $index)
                        <h2>Tu provincia es: {{$array[$index]}}</h2>
                    @endif
                @empty
                @endforelse
            @endif
            @if(count($cart)>0)
                <a href="/tuscompras">Tus compras</a>
            @else 
                <h2 style="color: grey;">Aun no tienes Compras Realizadas</h2>
            @endif
            <br>
            <img class="imgAvatarEdit" src='{{$user->avatar}}' alt="avatar usuario" style="width:300px; height: 300px; border-radius: 150px; border: 1px solid grey;">
            <br>
            <a class="linkEditar" href="edit">Hace Click aca para editar tus datos!</a>
        </div>     
    </div>
@endsection
