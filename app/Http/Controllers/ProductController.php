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
        return view('productos', compact('products'));
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

        return view('productoNuevo');
    }

    public function store(Request $request){

        if($request->hasFile('avatar')) {
            $productImage = $request->file('avatar');
            $productName = $request->get('name');
            $productImageSaveAsName = $productName . "." . $productImage->getClientOriginalExtension();
            $upload_path = 'images/';
            $product_image_url = $upload_path . $productImageSaveAsName;
            $success = $productImage->move($upload_path, $productImageSaveAsName);

            $request->validate([
                'name' => 'required',
                'price' => 'required',
                'category' => 'required',
                'sale' => 'required',
            ]);

            $newProduct = new Product ([
                'name' => $request->get('name'),
                'price' => $request->get('price'),
                'offer' => $request->get('offer'),
                'category' => $request->get('category'),
                'sale' => $request->get('sale'),
                'image' => 'images/'.$productImageSaveAsName
            ]);
                $newProduct->save();
                return redirect ('productos');
        }
       
        
    }

    public function edit($id){
        $product = Product::find($id);
        return view('producto', compact('product'));
    }

    public function update(Request $request, $id){

        $name = $request->name;
        $price = $request->price;
        $offer = $request->offer;
        $sale = $request->sale;
        $category =  $request->category;

        $product = Product::find($id);

        if($request->hasFile('avatar')) {
            $productImage = $request->file('avatar');
            $productName = $request->get('name');
            $productImageSaveAsName = $productName . "." . $productImage->getClientOriginalExtension();
            $upload_path = 'images/';
            $image = 'images/'.$productImageSaveAsName;
            $product_image_url = $upload_path . $productImageSaveAsName;
            $success = $productImage->move($upload_path, $productImageSaveAsName);
        }else{
            $image = $product->image;
        }
              
                $product->name =  $name;
                $product->price = $price;
                $product->offer = $offer;
                $product->category = $category;
                $product->sale = $sale;
                $product->image = $image;
                $product->save();
               
                return redirect ('productos');
    }

    public function delete($id){
        $product = Product::find($id);
        $product->delete();

        return redirect('productos');

    }
}
