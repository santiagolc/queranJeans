<?php

namespace App\Http\Controllers;

use App\Cart_Product;
use App\Cart;
use App\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{

    public function mostrarCarrito(){

        $carrito = Cart::where("user_id",\Auth::user()->id)->where('status','=','1')->get();
        $carritoActivo = $carrito[0];
       // dd($carritoActivo->products);
        return view('carrito', compact('carritoActivo'));
    }

    public function finalizarCompra() {
        $carrito = Cart::where("user_id",\Auth::user()->id)->where('status','=','1')->get();
        $carritoActivo = $carrito[0];
        $carritoActivo->status = 0;
        $carritoActivo->save();
        return redirect('checkout');
    }

    public function eliminarProducto(Request $request) {
        $carrito = Cart::where("user_id",\Auth::user()->id)->where('status','=','1')->get();
        $carritoActivo = $carrito[0];
        $productId = $request->product_id;
        $cartId = $carritoActivo->id;

        $relacion = Cart_Product::where("cart_id", "=", $cartId)->where("product_id", "=", $productId);
        $relacion->first()->delete();
        return redirect("/carrito");
        
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
