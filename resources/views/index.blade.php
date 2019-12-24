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
        <section class="productos">
            <hr><h2 class="titulo">PRODUCTOS DESTACADOS</h2><hr>
            
            <div class="ofertas">
            @foreach ($ofertas as $oferta)
              
                <article class="oferta">
                <img src='{{$oferta->imagen}}' alt='{{$oferta->titulo}}'>
                <div class="datos">
                    <span>{{$oferta->titulo}}</span>
                    <span>${{$oferta->precio}}</span>
                    <a href="#">COMPRAR</a>
                </div>
                <div class="descuento">
                    <span>{{$oferta->descuento}}%</span>
                </div>
                </article>

            @endforeach
            </div>

            <div class="jeans">
                <article class="jean">
                <img src='/images/jean1.jpg' alt='jeans hombre'>
                <div class="datos2">
                    <span>JEANS HOMBRE</span>
                    <a href=''>VER</a>
                </div>
                </article> 
                <article class="jean">
                <img src='/images/jean2.jpg' alt='jeans mujer'>
                <div class="datos2">
                    <span>JEANS MUJER</span>
                    <a href=''>VER</a>
                </div>
                </article> 
            </div>

            <div class="remeras">
                <article class="remera">
                <img src="/images/remera1.jpg" alt="remeras hombre">
                <div class="datos2">
                    <span>REMERAS HOMBRE</span>
                    <a href="#">VER</a>
                </div>
                </article>
                <article class="remera">
                <img src="/images/remera2.jpg" alt="remeras mujer">
                <div class="datos2">
                    <span>REMERAS MUJER</span>
                    <a href="#">VER</a>
                </div>
                </article>
            </div>

        </section>
     
    @stop
