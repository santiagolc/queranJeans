@extends('plantilla')

@section("titulo")

QueranJeans - Checkout

@endsection

@section("principal")

@php
    $total = 0;
@endphp

    <div class="contenedorFinalizada">
        <h1>Gracias por Comprar en Queran jeans!</h1>
        <ul>
            <div class="laCompra">
                <li class="datosCompra">
                    <span>ID compra: #{{$closedCartsObjectArray[0]->cart_id}}</span><br>
                    <span>Fecha de Compra: {{$closedCartsObjectArray[0]->date}}</span>
                </li>
                
                @forelse($closedCartsObjectArray as $product)        
                    @php
                        $parcial = 0;
                        $toal = 0;
                    @endphp

                    <li class="productosComprados">
                        <div class="productoComprado">
                            <img src="{{$product->image}}" alt="">
                            <span><a href="/{{$product->category}}">{{$product->name}} {{$product->category}} </a></span>
                            <span>${{$product->price}}</span>
                            <span class="cantProductosComprados" style="background-color: white;">{{$product->quantity}}</span>
                        </div>
                    </li>

                    @php
                        $parcial += $product->price * $product->quantity;
                        $total += $parcial;
                    @endphp
                    @empty
                        <span class="spanTotal">Aun no tienes compras!</span>
                    @endforelse 

                @if(isset($closedCartsObjectArray))
                    <ul>
                        <li style="text-align: right; padding: 10px; margin-right:10%; list-style: none;">
                            <span style="text-align: center;">Precio Total: ${{$total}}</span>
                        </li>
                    </ul>
                @endif 

            </div>   
        </ul>
        
        <a class="linkVolverHome" href="/">VOLVER AL INICIO</a>

    </div>
@stop