@extends('plantilla')

@section("titulo")

QueranJeans - Checkout

@endsection

@section("principal")


<div class="contenedorTusCompras">
    <h1 class="tituloCompras">Estas son las compras que realizaste en queranJeans:</h1>
        <ul>
                @forelse($closedCartObject as $cartId => $array)
                <div class="laCompra">
                    <li class="infoCompra">
                        <span>ID Compra: #{{$cartId}}</span><br>
                        <span>Fecha de Compra: {{$array[0]->date}}</span>
                    </li>
                        @php
                            $total = 0;
                        @endphp
                        @forelse($array as $index => $product)
                    <li class="paraBloquear">
                        <div class="productoComprado">
                            <img src="{{$product->image}}" alt="">
                            <span><a href="/{{$product->category}}">{{$product->name}} {{$product->category}} </a></span>
                            <span>${{$product->price}}</span>
                            
                            <!-- <span>Cantidad de Productos en el carrito: {{count($array)}}</span><br> -->
                            <span class="cantProductosComprados">{{$product->quantity}}</span>
                        </div>
                    </li>
                            @php
                                $total += $product->price * $product->quantity;
                            @endphp
                        @empty
                        @endforelse
                        @if(isset($closedCartObject))
                        <li style="text-align: center;"> <span>Precio Total: ${{$total}}</span><br></li>
                        @endif 
                        </div>     
                    @empty
                    <li style="text-align: center;"><span>Aun no tienes compras!</span></li>
                </div> 
                @endforelse  
            
        </ul>  
</div>

@stop