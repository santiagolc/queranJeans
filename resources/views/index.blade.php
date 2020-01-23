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
            @foreach ($products as $product)
              
                <article class="oferta">
                <img src='{{$product->image}}' alt='{{$product->name}}'>
                <div class="datos">
                    <span>{{$product->name}}</span>
                    <span>${{$product->price}}</span>
                    
                    <form class="botonCarrito" action="/agregar" method='POST'>
                    @csrf
                    <input type="hidden" name="product_id" value='{{$product->id}}'>
                    <button type='submit'>Agregar</button>
                    </form>
                   
                </div>
                <div class="descuento">
                    <span>{{$product->sale}}%</span>
                </div>
                </article>

            @endforeach
            </div>

            <div class="jeans">
                <article class="jean">
                <img src='/images/jean1.jpg' alt='jeans hombre'>
                <div class="datos2">
                    <span>Jeans Hombre</span>
                    <a href='hombre'>ver</a>
                </div>
                </article> 
                <article class="jean">
                <img src='/images/jean2.jpg' alt='jeans mujer'>
                <div class="datos2">
                    <span>Jeans Mujer</span>
                    <a href='mujer'>ver</a>
                </div>
                </article> 
            </div>

            <div class="remeras">
                <article class="remera">
                <img src="/images/remera1.jpg" alt="remeras hombre">
                <div class="datos2">
                    <span>Remeras Hombre</span>
                    <a href="hombre">ver</a>
                </div>
                </article>
                <article class="remera">
                <img src="/images/remera2.jpg" alt="remeras mujer">
                <div class="datos2">
                    <span>Remeras Mujer</span>
                    <a href="mujer">ver</a>
                </div>
                </article>
            </div>

        </section>
     
    @stop
