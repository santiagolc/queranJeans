@extends('plantilla')

@section("titulo")

QueranJeans - Checkout

@endsection

@section("principal")


<div class="cartShow" style="margin-top:200px;">
    <h1 style="text-align: center; text-decoration: underline;">Estas son las compras que realizaste en queranJeans:</h1>
    
    <ul>
        @forelse($closedCartObject as $cartId => $array)

        <div style="border: 2px solid black; margin-top: 30px; margin-left: 5%; margin-right:5%;border-radius: 10px; background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);">        
            <li style="list-style: none; margin: 10px; padding: 10px; text-decoration: underline;">
                <span>Compra: #{{$cartId}}</span><br>
                <span>Cantidad de Productos en el carrito: {{count($array)}}</span><br>
                <span>Fecha de Compra: {{$array[0]->date}}</span>
            </li>
                @php
                    $total = 0;
                @endphp
                @forelse($array as $index => $product)
            <li style="list-style: none; padding: 10px; background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);">
                <div class="productoEnCarro">
                    <img src="{{$product->image}}" alt="" style="width:100px; height:100px; border: 2px solid black; border-radius: 5px;">
                    <span><a href="/{{$product->category}}">{{$product->name}} {{$product->category}} </a></span>
                    <span>${{$product->price}}</span>
                    <span style="background-color: white; color: red; padding: 5px; border-radius: 10px;">Cantidad: {{$product->quantity}}</span>
                </div>
            </li>
                    @php
                        $total += $product->price * $product->quantity;
                    @endphp
                @empty
                @endforelse
                @if(isset($closedCartObject))
                <li style="text-align: right; margin-right: 5%; list-style: none; padding: 2%;"> <span>Precio Total: ${{$total}}</span><br></li>
                @endif 
                </div>     
            @empty
            <li style="text-align: center; list-style: none; padding: 10px;"><span>Aun no tienes compras!</span></li>
            <img src="/images/logob&n.png" style="width: 200px; height: 200px; align:center;" alt="">
            </div>
        @endforelse  
    </ul>   
    </div>
@stop