<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    /*Relacionamento 'Uma Categoria contém vários Produtos'*/
    public function produtos() {
    	return $this->hasMany('App\Produto');
    }
}
