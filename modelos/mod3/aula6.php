<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Funções e campos dinamicos!</title>
<link rel="stylesheet" type="text/css" href="css/aula6.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/aula6.js"></script>

</head>

<body>
	<span class="exemplo">DEBUUG AQUI</span>

	<?php
	if(!empty($_POST)){
			echo "<pre>";
				print_r($_POST);
			echo "</pre>";
	}
	 ?>
	<form action="" method="post" name="campos_dinamicos">
		<input type="text" name="texto[]"/>&laquo;
		<div class="campos"></div>
		<div class="acao">
				<input type="button" class="J_disparar" value="disparar"/>
				<input type="button" class="J_add" value="+"/>
				<input type="button" class="J_anexo" value="$"/>
				<input type="button" class="J_clear" value="x"/>
		</div>
</body>
</html>
