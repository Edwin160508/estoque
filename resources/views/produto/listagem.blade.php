@extends('layout.principal')

@section('conteudo')

@if(empty($produtos))
<div class="alert alert-danger">
	Voce nao tem nenhum produto cadastrado.
</div>

@else
<h1>Listagem de Produtos com Laravel.</h1>
<!--<table class="table table-striped">
	<th>Nome</th>
	<th>Valor</th>
	<th>Descrição</th>
	<th>Quantidade</th>
</table>-->
<table class="table table-striped">
	@foreach ($produtos as $p)
		<tr class="{{ $p->quantidade <=1 ? 'danger' : '' }}"><!--Logica do blade para adcionar classe danger do bootstrap-->
			<td>{{ $p->nome }}</td>
			<td>{{ $p->valor }}</td>
			<td>{{ $p->descricao }}</td>
			<td>{{ $p->quantidade }}</td>
			<td>{{ $p->tamanho }}</td>
			<td>{{ $p->categoria->nome }}</td>
			<td>
				<a href="/produtos/mostra/{{$p->id}}">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</a>
			</td>
			<td>
				<a href="/produtos/remove/{{$p->id}}">
					<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				</a>
			</td>
		</tr>
	@endforeach
</table>
@endif

@if(old('nome'))
	<div class="alert alert-success">
		<p>Produto {{old('nome')}} adicionado com sucesso!</p>
	</div>
@endif



@stop