<!DOCTYPE html>
<html>
<head>
	<title>Controle de estoque</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
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
			</div>
		</nav>
		@yield('conteudo')
		<footer class="footer">
      		<p class="text-center">Estoque Laravel 5.1 © 2017 Copyright. All Rights Reserved.</p>
  		</footer>	
	</div>
</body>
</html>