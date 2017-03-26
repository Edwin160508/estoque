<!DOCTYPE html>
<html>
<head>
	<title>Controle de estoque</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/estilo.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/produtos">Estoque Laravel</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/produtos">Listagem</a></li>
					<li><a href="/produtos/novo/">Novo Produto</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				  @if (Auth::guest())
				    <li><a href="/auth/login">Login</a></li>
				    <li><a href="/auth/register">Register</a></li>
				  @else
				    <li><p class="paragrafo-menu">Bem vindo {{ Auth::user()->name }} </p></li>
				    <li><a href="/auth/logout">Logout</a></li>
				  @endif
				</ul>

			</div>
		</nav>
		@yield('conteudo')
		<footer class="footer">
      		<p class="text-center">Estoque Laravel 5.1 © 2017 Copyright. All Rights Reserved.</p>
  		</footer>	
	</div>
</body>
</html>