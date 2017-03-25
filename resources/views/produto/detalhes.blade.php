@extends('layout.principal')

@section('conteudo')
	<h1>Detalhes do Produto {{ $p->nome }}</h1>
	<ul>
		<li>Valor:  {{ $p->valor }} </li>
		<li>Descrição:  {{ $p->descricao }} </li>
		<li>Quantidade em estoque:  {{ $p->quantidade }} </li>
	</ul>
@stop