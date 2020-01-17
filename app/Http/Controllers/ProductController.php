<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use Image;


class ProductController extends Controller
{
    public function calcularDescuento($precio, $descuento){
        $resultado1 = $precio * $descuento / 100;
        $resultado2 = $precio - $resultado1;
        
        return $resultado2;
    }
    
    public function ofertas(){
        $products = Product::where("offer", "=", "1")->take(4)->get();

        return view("index", compact("products"));
    }

    public function todos(){
        $products = Product::all();

        return view("index", compact("products"));
    }

    public function mostrarProductosHombre(){
        $products = Product::where('category', '=', 'hombre')->get();

        return view('categoria_hombre', compact('products'));
    }

    public function mostrarProductosMujer(){
        $products = Product::where('category', '=', 'mujer')->get();

        return view('categoria_mujer', compact('products'));
    }

    public function create(Request $request){

        return view('productos');

    }

    public function store(Request $request){
       
        $request->validate([
           
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'sale' => 'required',
        ]);
        

        $newProduct = new Product ([
            // dd($newProduct);
                'name' => $request->get('name'),
                'price' => $request->get('price'),
                'offer' => $request->get('offer'),
                'category' => $request->get('category'),
                'sale' => $request->get('sale')
            ]);
           
            $newProduct->save();
    
            return redirect ('productos');
      
    }


}
