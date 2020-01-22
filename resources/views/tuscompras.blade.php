@extends('plantilla')

@section("titulo")

QueranJeans - Checkout

@endsection

@section("principal")


<div class="cartShow" style="margin-top:200px;">
    <h1 style="text-align: center; text-decoration: underline;">Estas son las compras que realizaste:</h1>
    
    <ul>
           
                @forelse($closedCartObject as $cartId => $array)

                <div style="border: 2px solid black; margin-top: 30px; margin-left: 5%; margin-right:5%;border-radius: 10px;">        
                    <li style="list-style: none; margin: 10px;">
                        <span>Compra: #{{$cartId}}</span><br>
                        <span>Cantidad de Productos en el carrito: {{count($array)}}</span><br>
                        <span>Fecha de Compra: {{$array[0]->date}}</span>
                    </li>
                        @php
                            $total = 0;
                        @endphp
                        @forelse($array as $index => $product)
                    <li style="list-style: none;">
                        <div class="productoEnCarro">
                            <img src="{{$product->image}}" alt="" style="width:100px; height:100px;">
                            <span><a href="/{{$product->category}}">{{$product->name}} {{$product->category}} </a></span>
                            <span>${{$product->price}}</span>
                            <span style="background-color: white; color: red; padding: 5px;">Cantidad: {{$product->quantity}}</span>
                        </div>
                    </li>
                            @php
                                $total += $product->price * $product->quantity;
                            @endphp
                        @empty
                        @endforelse
                        @if(isset($closedCartObject))
                        <li style="text-align: right; margin-right: 5%; list-style: none;"> <span>Precio Total: ${{$total}}</span><br></li>
                        @endif 
                        </div>     
                    @empty
                    <li>   <span>Aun no tienes compras!</span></li>
                 </div>
                @endforelse  
            </ul>   
    </div>
@stop