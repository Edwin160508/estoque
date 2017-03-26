@extends('layout.principal')

@section('conteudo')

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $erro)
		<li>{{$erro}}</li>
	@endforeach	
	</ul>
</div>



<h1>Cadastro de Produtos</h1>
<form action="/produtos/adiciona/" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="form-group">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do produto" />
	</div>
	<div class="form-group">
		<label for="valor">Valor:</label>
		<input type="text" name="valor" id="valor" class="form-control" placeholder="Valor" />
	</div>
	<div class="form-group">
		<label for="quantidade">Quantidade:</label>
		<input type="text" name="quantidade" id="quantidade" class="form-control" placeholder="Quantidade" />
	</div>
	<div class="form-group">
		<label for="tamanho">Tamanho:</label>
		<input type="text" name="tamanho" id="tamanho" class="form-control" placeholder="Tamanho" />
	</div>
	<div class="form-group">
		<label for="categoria_id">Categoria:</label>
		<select class="form-control" name="categoria_id">
			@foreach($categorias as $c)
				<option value="{{$c->id}}">{{$c->nome}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="descricao">Descrição:</label>
		<textarea class="form-control" name="descricao" placeholder="Descrição"></textarea>
	</div>
	<button type="submint" class="btn btn-primary">Adicionar</button>
</form>	

@stop