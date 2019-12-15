<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $table = "categorias";
    public $id = "id";

    public function sexo(){
        return $this->belongsTo(Sexo::class);
    }
}
