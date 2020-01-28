@extends('plantilla')

@section("titulo")

QueranJeans - PERFIL

@endsection

@section("principal")

    <div class="perfil">
            <h2 style="margin-bottom: 30px;">TU PERFIL</h2> 
            <h2>Nombre Completo: {{$user->name}} {{$user->surname}}</h2>
            <h2>Email: {{$user->email}}</h2>
            @if($user->province!=null)
                @forelse($array as $index => $province)
                    @if($user->province == $index)
                        <h2>Tu provincia es: {{$array[$index]}}</h2><br>
                    @endif
                @empty
                @endforelse
            @endif
            @if(count($cart)>0)
                <a href="/tuscompras">TUS COMPRAS</a>
            @else 
                <h2 class="siNoHayCompras">Aun no tienes Compras Realizadas</h2>
            @endif
            <br>
            <img class="imgAvatarEdit" src='{{$user->avatar}}' alt="avatar usuario">
            <br>
            <a class="linkEditar" href="edit">Hace Click aca para editar tus datos!</a>
        </div>     
    </div>
@endsection
