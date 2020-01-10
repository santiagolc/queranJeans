@extends('plantilla')

@section("titulo")

QueranJeans - MUJERES

@endsection

@section("principal")

<div class='contenedor'>

<!-- LISTA DE CATEGORIAS -->
<aside class="lateralizq">
            <div class="lista">
                <ul>CATEGORIAS
                    <li>JEANS
                        <ul>
                            <li class="cat">
                                <a href="hombre">HOMBRE</a>
                            </li>
                            <li class="cat">
                                <a href="mujer">MUJER</a>
                            </li>
                        </ul>
                    </li>
                    <li>REMERAS
                        <ul>
                            <li class="cat">
                                <a href="hombre">HOMBRE</a>
                            </li>
                            <li class="cat">
                                <a href="mujer">MUJER</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        
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
                    <button type='submit'>Comprar</button>
                    </form>
                    
                </div>
                </article>

                @endforeach

                </div>
            </section>
        </main>
        </div>
@stop