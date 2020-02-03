@extends('plantilla')

@section("titulo")

QueranJeans - HOME

@endsection

@section("principal")

 <!-- BANNER -->
    <div class="banner">
        <img src="images/547128-banner.jpg" alt="banner">
    </div>
       
        <!-- SECTION -->
        <section class="destacados">
            <hr><h2 class="titulo"><i class="large material-icons">stars</i>Productos Destacados<i class="large material-icons">stars</i></h2><hr>

            
            <div class="ofertas">
            @forelse($products as $product)
                <article class="oferta">
                <img src='{{$product->image}}' alt='{{$product->name}}'>
                <div class="datos">
                    <span>{{$product->name}}</span>
                    <span>${{$product->price}}</span>
                    
                    <form class="botonCarrito" action="/agregar" method='POST'>
                    @csrf
                    <input type="hidden" name="product_id" value='{{$product->id}}'>
                    <button class="boton1" type='submit'>Agregar</button>
                    </form>
                   
                </div>
                <div class="descuento">
                    <span>{{$product->sale}}%</span>
                </div>
                </article>
            @empty
                <h2 style="text-align:center; color: red;">Descargar los productos de la BBDD en public->SQL->"queranje_.sql"</h2>
            @endforelse
            </div>

            <div class="jeans">
                <article class="jean">
                <img src='/images/jean1.jpg' alt='jeans hombre'>
                <div class="datos2">
                    <span>Hombre</span>
                    <a href='hombre'>ver</a>
                </div>
                </article> 
                <article class="jean">
                <img src='/images/jean2.jpg' alt='jeans mujer'>
                <div class="datos2">
                    <span>Mujer</span>
                    <a href='mujer'>ver</a>
                </div>
                </article> 
            </div>

        </section>
     
@stop
