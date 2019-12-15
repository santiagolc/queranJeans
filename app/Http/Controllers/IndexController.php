<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

include "productos.php";

class IndexController extends Controller
{
    public function verOfertas($productos){
        foreach($productos as $producto) {
    ?>
        <article class="oferta">
            <img src="<?=$producto["imagen"];?>" alt="<?=$producto["titulo"];?>">
            <div class="datos">
                <span><?=$producto["titulo"];?></span>
                <span>$<?= oferta($producto["valor"], $producto["descuento"]);?></span>
                <a href="#">COMPRAR</a>
            </div>
            <div class="descuento">
                <span><?=$producto["descuento"]?>%</span>
            </div>
        </article>
    <?php
        }
    }
}
