<!DOCTYPE html>
<html>
<head>
	<title><?php print $cabecalho_title; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href=css/estilos.css>
	<link rel="stylesheet" href="css/reset.css">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script">
	<?php print @$cabecalho_css; ?>
</head>

<body>

	<header class="container">
		<h1><img src="img/logo-mirro-fashion.png" alt="Logo da Mirror Fashion"></h1>

		<p class="sacola">
			Nenhum item na sacola de compras
		</p>

		<nav class="menu-opcoes">
			<ul>
				<li><a href="#">Sua Conta</a></li>
				<li><a href="#">Lista de desejos</a></li>
				<li><a href="#">Cartão Fidelidade</a></li>
				<li><a href="Sobre.php">Sobre</a></li>
				<li><a href="#">Ajuda</a></li>
			</ul>
		</nav>
	</header>
</html>