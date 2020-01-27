@extends('plantilla')

@section("titulo")

QueranJeans - HOMBRES

@endsection

@section("principal")

<div class='contenedorCategorias'>

    <!-- LISTA DE CATEGORIAS WEB Y TABLET-->
    <aside class="lateralizq">
        <div class="lista">
            <ul>CATEGORIAS
                <li class="cat">
                    <a href="hombre">HOMBRE</a>
                </li>
                <li class="cat">
                    <a href="mujer">MUJER</a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- NAV DE CATEGORIAS MOBILE-->
    <nav class="navCategorias">
        <div>CATEGORIAS
            <span class="cat">
                <a href="hombre">HOMBRE</a>
            </span>
            <span class="cat">
                <a href="mujer">MUJER</a>
            </span>
        </div>    
    </nav>
        
    <!-- PRODUCTOS POR CATEGORIA -->
    <main class="categoria">
        <section>
            <div class="productos">

            @foreach ($products as $product)

            <article class="producto">
                <img src='{{$product->image}}' alt='{{$product->name}}'>        
            <div class="datos">
                <span>{{$product->name}}</span>
                <span>${{$product->price}}</span>
                
                <form class="botonCarrito" action="/agregar" method='POST'>
                    @csrf
                    <input type="hidden" name="product_id" value='{{$product->id}}'>
                    <button class="agregarMobile" type='submit'><i class="large material-icons">add_circle</i></button>
                    <button class="agregarWeb" type='submit'>Agregar</button>
                </form>
            </div>
            </article>

            @endforeach

            {{ $products->links() }}

            </div>
        </section>
    </main>
</div>
@stop