@extends('layout.principal')

@section('conteudo')

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $erro)
		<li>{{$erro}}</li>
	@endforeach	
	</ul>
</div>



<h1>Login</h1>
<form action="/login/" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	{!! csrf_field() !!}
	<div class="form-group">
		<label for="email">E-mail:</label>
		<input type="text" name="email" id="email" class="form-control" placeholder="Endereço de E-mail " />
	</div>
	<div class="form-group">
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" class="form-control" placeholder="Senha" />
	</div>

	<button type="submint" class="btn btn-primary">Login</button>
</form>	

@stop