<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
/**
* 
*/
class ProdutoController extends Controller{
	
	public function lista (){

		$produtos = DB::select('select * from produtos');

		return view('produto.listagem')->with('produtos', $produtos);
	}

	public function mostra(){
		$id = Request::route('id');
		$produto = DB::select('select * from produtos where id=?', [$id]);
		return view('produto.detalhes')->with('p', $produto[0]);
	}

	public function novo(){
		return view('produto.formulario');
	}

	public function adiciona(){
		$nome = Request::input('nome');
		$valor = Request::input('valor');
		$descricao = Request::input('descricao');
		$quantidade = Request::input('quantidade');

		DB::insert('insert into produtos (nome, quantidade, valor, descricao)values(?,?,?,?)', array($nome, $quantidade, $valor, $descricao));
		/* O withInput mantém por padrão todos os parametros mas e possível configurar quais parametros devo manter o paramtro Request:: ex:"redirect('/produtos')->withInput(Request::only('parametro-desejado-manter'))"*/
		return redirect('/produtos')->withInput();
	}
}