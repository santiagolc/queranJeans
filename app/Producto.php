<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = "productos";
    public $id = "id";

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
