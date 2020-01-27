<?php

namespace App\Http\Controllers;

use App\Cart_Product;
use App\Cart;
use App\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function mostrarCarrito(){
        //tomo todos los carritos activos con el Id del usuario logueado.
        $carrito = Cart::where("user_id",\Auth::user()->id)->where('status','=','1')->get();
       
        //si hay un carrito activo en la pocision [0] lo guardo en la variable $carritoActivo sino instancio un objeto de tipo carrito y lo guardo en la misma variable.
        if(isset($carrito[0])){
            $carritoActivo = $carrito[0];
        } else {
            $carritoActivo = new Cart;
        }


        
        //busco todos los productos en la tabla cart_product cuyo cart_id sea el mismo que el id del $carritoActivo y lo guardo en $products (plural).
        $products = Cart_Product::where("cart_id", $carritoActivo->id)->get();
        

        //creo la variable $productIds que es un array vacio.
        $productIds = [];

        //recorro todos los $products, tomo de cada uno su product_id y lo guardo en el array $productIds
        foreach($products as $item){
            $productIds[] = $item->product_id;
        }
        //Ahora en productIds tengo una coleccion de product_id's que son todos los product_id de todos los productos que hay en un carrito, incluso los repetidos.
        
        
        //al utilizar la funcion array_unique sobre el array $productUniqueIds elimino las repeticiones, solo quedan aquellos proudc_id's que existen en el array, pero una sola vez, si habia repeticiones las elimino. Luego guarda eso en $productUniqueIds
        $productUniqueIds = array_unique($productIds);
       
        //utilizando el concepto de "cast" creo un objeto de tipo array y lo guardo en una variable llamada $countByIds.
        $countByIds = (object)[];

        //recorro $productUniqueIds y tomo cada Id
        foreach($productUniqueIds as $id){
            //genero un contador
            $count = 0;
            //recorro todos $products que es un array con todos los objetos de tipo cart_product con cart_id == al id del carrito activo, es decir $products tiene todos los productos que hay en el carrito activo.
            foreach($products as $product) {
               //en cada objeto de tipo cart_product me fijo si su product_id coincide con el id del array $cartUniqueIds, si matchea entonces agrega uno al contador, basicamente lo que estoy haciendo es contar cuantas veces aparece cada product_id en el array de objetos de tipo cart_product/.
                if($id==$product->product_id) {
                    $count++;
                }
            }
            //dentro del primer foreach (es decir que esto va a ocurrir tantas veces como product_id tenga en $cartUniqueIds) voy a guardar en el atributo "id" del objeto $countByIds, el contador.
            $countByIds->{$id} = $count;
        }
        //Al salir del foreach tengo un objeto guardado en la variable $countByIds que tiene tantos atributos "id's" como product_id habia en $cartUniqueIds, es decir si habias comprado 3 productos diferentes (sigue abajo) 
        //(sigo del renglon de arriba) 1 unidad del primero, 1 unidad del segundo y dos unidades del tercero tendrias {"id-1":1; "id-2": 1; "id-3": 2}.
       
        //Creo la variable $result que es un array.
        $result = [];

        //Recorro el objeto $countByIds y tomo de cada "id" su cantidad.
        foreach($countByIds as $id => $quantity){
            //Una vez mas recorro todos $products que es un array con todos los objetos de tipo cart_product con cart_id == al id del carrito activo, es decir te dice cuantos prodcutos hay en el carrito..
              foreach($products as $product) {
                //Esto es lo mas dificil de entender: Aca si el product_id de alguno de los objetos tipo cart_product es igual al "id" del obejeto $countByIds, entro al if.
                if($product->product_id==$id) {
                    //En la variable $productSelected guardo un objeto de tipo producto cuyo id sea el product_id del objeto de tipo cart_product en cuestion, recomiendo hacer dd($productSelected) despues de cada linea dentro de este if().
                    $productSelected = Product::where('id', $product->product_id)->get()[0];
                    //Agrego al objeto de tipo producto una propiedad/atributo nuevo: el atributo "quantity" que NO es una columna que este en la BBDD de los products, solo la tiene un obejto de tipo producto en este contexto.
                    $productSelected->quantity = $quantity;
                    //En el array $result guardo todos los objetos de tipo product que incluyen el atributo "quantity".
                    $result[] = $productSelected;
                    break;
                }
              }
        }
        //En la variable $total guardo la cantidad de productos que hay en el carrito.
        $total = count($products);

        $allCarts = Cart::all();
        if (!$allCarts->isEmpty()){ 
            $lastCartId =  $allCarts->last();
            $cartId = $lastCartId->id + 1;
        } else {
            $cartId = 1;
        }
       
        //Comparto $result y $total a la vista de "carrito"/
        return view('carrito', compact('result', 'total', 'cartId'));
    }

    public function fechaCastellano ($fecha) {
        $fecha = substr($fecha, 0, 10);
        $numeroDia = date('d', strtotime($fecha));
        $dia = date('l', strtotime($fecha));
        $mes = date('F', strtotime($fecha));
        $anio = date('Y', strtotime($fecha));
        $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
        $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
        $nombredia = str_replace($dias_EN, $dias_ES, $dia);
        $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
        return $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;
      }


    public function finalizarCompra(Request $request) {
        $cartToClose = Cart::where("user_id",\Auth::user()->id)->where('status','=','1')->get();
        $cartToClose = $cartToClose[0];
        $cartToClose->status = 0;
        $cartToClose->save();
        $productsInLastClosedCart = Cart_Product::where("cart_id", $cartToClose->id)->get();
        $closedCartProductIds = [];
        foreach($productsInLastClosedCart as $closedProduct){
            $closedCartProductIds[] = $closedProduct->product_id;
        }
        $closedCartUniqueProductIds = array_unique($closedCartProductIds);
        $closedCartProductObject = (object)[];
        foreach($closedCartUniqueProductIds as $newId) {
            $closedCartCount = 0;
            foreach($productsInLastClosedCart as $productInLastClosedCart) {
                if($productInLastClosedCart->product_id==$newId) {
                    $closedCartCount ++;
                }
            }
            $closedCartProductObject->{$newId} = $closedCartCount;
        }
        $closedCartsObjectArray = [];

        $fecha = $cartToClose->updated_at->toDateTimeString();
        $dateTime = $this->fechaCastellano($fecha); 
        foreach($closedCartProductObject as $oneId => $amount)
            foreach($productsInLastClosedCart as $productInLastClosedCart) {
                if($productInLastClosedCart->product_id==$oneId) {
                    $closedProductSelected = Product::where('id', $productInLastClosedCart->product_id)->get()[0];
                    $closedProductSelected->quantity = $amount;
                    $closedProductSelected->cart_id = $cartToClose->id;
                    $closedProductSelected->date = $dateTime;
                    $closedCartsObjectArray[] = $closedProductSelected;
                break;
                }
            }
       return view("finalizarcompra", compact('closedCartsObjectArray'));
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

   
     public function mostrarComprasCerradas() {
        $carritosInactivos = Cart::where("user_id",\Auth::user()->id)->where('status','=','0')->get();
        $carritosInactivos = $carritosInactivos->reverse();
        $closedCartObject = (object)[];
        foreach($carritosInactivos as $carritoInactivo) {
            $inactivProducts = Cart_Product::where("cart_id", $carritoInactivo->id)->get();
            $inactivProductIds = [];
            foreach($inactivProducts as $inactivProduct) {
                $inactivProductIds[] = $inactivProduct->product_id;
            }
            $inactivProductsUniqueIds = array_unique($inactivProductIds);

            $inactivProductIdCount = (object)[];

            foreach($inactivProductsUniqueIds as $id) {
                $inactivCount = 0;
                foreach($inactivProducts as $inactivProduct) {
                    if($inactivProduct->product_id==$id) {
                        $inactivCount ++;
                    }
                }
                $inactivProductIdCount->{$id} = $inactivCount;
            }

            $fecha = $carritoInactivo->updated_at->toDateTimeString();
            
            $dateTime = $this->fechaCastellano($fecha); 
            $objectArray = [];
            foreach($inactivProductIdCount as $id =>$inactivQuantity) {
                 foreach($inactivProducts as $inactivProduct){
                     if($inactivProduct->product_id == $id){
                        if($inactivProduct->product_id == $id){
                            if(!isset(Product::where('id', $inactivProduct->product_id)->get()[0])) {
                               continue; 
                            }
                        $selectedInactivProduct = Product::where('id', $inactivProduct->product_id)->get()[0];
                        $selectedInactivProduct->quantity = $inactivQuantity;
                        $selectedInactivProduct->date = $dateTime;
                        $objectArray[] = $selectedInactivProduct;
                     break;
                     }
                 }
            }
            $closedCartObject->{$carritoInactivo->id} = $objectArray;
        } 

        $vac = compact('closedCartObject');
        
        return view('tuscompras', $vac); 
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
