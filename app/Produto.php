<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	protected $table = 'produtos';
    public $timestamps = false; //este objeto não precisa registrar data de criação
    protected $fillable = array('nome','quantidade','valor','descricao','tamanho');//Delemitar campos aceitos para preenchimento em massa para acessar a base.
}
