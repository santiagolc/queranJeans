<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;
use App\Categoria;
use App\Sexo;


class IndexController extends Controller
{

    public function oferta($precio, $descuento){
        $resultado1 = $precio * $descuento / 100;
        $resultado2 = $precio - $resultado1;
        return $resultado2;
    }
    
    public function mostrarOfertasYCategorias(){
        $ofertas = Producto::where("oferta", "=", "1")->get();
        $jeans = Categoria::all();
        //$remeras = Categoria::take(2)->skip(2)->get();

        return view("index", compact("ofertas", "jeans"));
    }

   
}
