<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\Produto;
/**
* 
*/
class ProdutoController extends Controller{
	
	public function lista (){

		$produtos = Produto::all();//DB::select('select * from produtos');

		return view('produto.listagem')->with('produtos', $produtos);
	}

	public function mostra($id){//acrescentando parametro $id Laravel pega automaticamente pela url
		//$id = Request::route('id');
		$produto = Produto::find($id); //DB::select('select * from produtos where id=?', [$id]);
		return view('produto.detalhes')->with('p', $produto);//$produtos[0]
	}

	public function remove($id){//acrescentando parametro $id Laravel pega automaticamente pela url
		//$id = Request::route('id');
		$produto = Produto::find($id);
		$nomeProdutoRemovido = $produto->nome;
		$produto->delete();
		return redirect('/produtos');
		//return view('produto.listagem')->with('nomeProdutoRemovido', $nomeProdutoRemovido);
	}

	public function novo(){
		return view('produto.formulario');
	}

	public function adiciona(){

	/*  $produto = new Produto();
		$produto->nome = Request::input('nome');
		$produto->valor = Request::input('valor');
		$produto->descricao = Request::input('descricao');
		$produto->quantidade = Request::input('quantidade');
		$produto->save();
		*/

	/*	$params = Request::all(); //pegando todos os parametros vindos do form
		$produto = new Produto($params);//setando parametros em todos os atributos do objeto Produto
		$produto->save();*/

		/**Utilizando solução Method Factory**/
		Produto::create(Request::all());		
		/*Antes de usar recursos do eloquent
		//DB::insert('insert into produtos (nome, quantidade, valor, descricao)values(?,?,?,?)', array($nome, $quantidade, $valor, $descricao));*/
		/* O withInput mantém por padrão todos os parametros mas e possível configurar quais parametros devo manter o paramtro Request:: ex:"redirect('/produtos')->withInput(Request::only('parametro-desejado-manter'))"*/
		return redirect('/produtos')->withInput();
	}
}