<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	protected $table = 'produtos';
    public $timestamps = false; //este objeto não precisa registrar data de criação
    protected $fillable = array('nome','quantidade','valor','descricao','tamanho', 'categoria_id');//Delemitar campos aceitos para preenchimento em massa para acessar a base.


    /*Relacionamento chave estrangeira categoria*/
    public function categoria() {
    	return $this->belongsTo('App\Categoria');
    }
}
