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
                    <span>${{$oferta->precio}}></span>
                    <a href="#">COMPRAR</a>
                </div>
                <div class="descuento">
                    <span>{{$oferta->descuento}}%</span>
                </div>
                </article>

            @endforeach
            </div>

            <div class="jeans">
            @foreach($jeans as $jean)
           
                <article class="jean">
                <img src='{{$jean->imagen}}' alt='{{$jean->titulo}}'>
                <div class="datos2">
                    <span>{{$jean->nombre}} {{$jean->sexo->sexo}}</span>
                    <a href=''>VER</a>
                </div>
                </article> 

             @endforeach  
            </div>

            <div class="remeras">
           
            </div>

        </section>
     
    @stop
