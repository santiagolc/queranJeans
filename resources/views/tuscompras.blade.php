@extends('plantilla')

@section("titulo")

QueranJeans - Checkout

@endsection

@section("principal")

@php
    $total = 0;
@endphp
<div class="cartShow" style="margin-top:200px;">
    <h1>Esta es la compra que realizaste!</h1>
    <ul>
        @forelse($carritosCerrados as $carrito)
            <h2>{{$carrito->id}}</h2> 
            @forelse($productArray as $product)
                @if($carrito->id == $product->cart_id)
                   
                    @forelse($productName as $elQueBusco)
                        @if($elQueBusco->id == $product->product_id)
                            <li>{{$elQueBusco->name}}</li>
                            <li>{{$elQueBusco->price}}</li>
                        @endif
                    @empty
                    @endforelse
                @endif
            @empty
                <h4>no tenes productos</h4>
            @endforelse
        @empty
            <h3>no tenes carritos cerrados</h3>
        @endforelse
    </ul>
</div>


@stop