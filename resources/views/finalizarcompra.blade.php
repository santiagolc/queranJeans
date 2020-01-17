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
        @forelse($carrito->products as $product) 
        <li>
            <span>{{$product->name}}</span>
            <span>${{$product->price}}</span>
            <img src="{{$product->image}}" alt="" style="width:100px; height:100px;">
        </li>
        @php
            $total += $product->price;
        @endphp
        @empty
        <span>Carrito Vacio</span>
        @endforelse
       
        <h1>Total: ${{$total}}</h1>
        <form action="/pagar" method="post">
            @csrf
           <button type="submit">Pagar</button>
        </form>
    </ul>
</div>


@stop