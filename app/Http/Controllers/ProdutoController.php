<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\Produto;
use Validator;
use App\Http\Requests\ProdutoRequest;
use App\Categoria;
/**
* 
*/
class ProdutoController extends Controller{

	/*Defidindo a middleware apenas no controlador ProdutoController*/
	public function __construct(){
		$this->middleware('autorizador');
	}
	
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
		//return redirect('/produtos');//Tentar gerar mensagem quando remover o produto."{{nomeDoPorduto}} removido do estoque."
		return redirect()->action('ProdutoController@lista');
	}

	public function novo(){
		return view('produto.formulario')->with('categorias', Categoria::all());
	}

	/*O parâmetro deste método é necessário, para validar seus campos, pelo fato do form de produto conter muitos parâmetros.*/
	public function adiciona(ProdutoRequest $request){

	/*  $produto = new Produto();
		$produto->nome = Request::input('nome');
		$produto->valor = Request::input('valor');
		$produto->descricao = Request::input('descricao');
		$produto->quantidade = Request::input('quantidade');
		  
		antes do Eloquent
		DB::insert('insert into produtos (nome, quantidade, valor, descricao)values(?,?,?,?)', array($nome, $quantidade, $valor, $descricao));
		Com Eloquent
		$produto->save();
		*/

	/*	$params = Request::all(); //pegando todos os parametros vindos do form
		$produto = new Produto($params);//setando parametros em todos os atributos do objeto Produto
		$produto->save();*/


		/*Mapeamento de regra de validação para formulários pequenos 'Poucos campos para validar'*/
		/*$validator = Validator::make(
			['nome' => Request::input('nome')],
			['nome' => 'required|min:3'] //mapeando como obrigatório aceitar no mínimo com 3 caracters
		);

		if($validator->fails()) {//caso encontre alguma excessão pelo mapeamento acima, iremos impedir o insert e volte para o form
			$msg = $validator->messages();
			dd($msg);
			return redirect('/produtos/novo');
		}
		Produto::create(Request::all()); */

		/**Utilizando solução Method Factory**/
		Produto::create($request->all());		
	
		/* O withInput mantém por padrão todos os parametros mas e possível configurar quais parametros devo manter Ex:"return redirect('/produtos')->withInput(Request::only('parametro-desejado-manter'))"*/
		return redirect('/produtos')->withInput();
	}
}