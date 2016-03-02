<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Aula pratica de utilização!</title>
<link rel="stylesheet" type="text/css" href="css/aula5.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/aula5.js"></script>

</head>

<body>
	<div class="carregando">
		<img src="img/load.gif" alt="Carregando" title="Carregando"/> Aguarde carregando..
	</div>

	<div class="form">
		<?php
				if(!empty($_POST)){
					echo "<pre>";
							print_r($_POST);
					echo "</pre>";

				}
		 ?>
		<form action="" method="post">
				<label>
					<div class="fild">E-mail:</div>
					<input type="text" name="email"/>
					<span class="erro email">Erro email</span>
				</label>
				<label>
					<div class="fild">Senha</div>
					<input type="password" name="senha"/>
					<span class="erro senha">Erro senha</span>
				</label>

				<input type="submit" value="Logar-se" class="J_btn"/>
		</form>
	</div>

<img src="http://www.ferramentasblog.com/wordpress/wp-content/uploads/2011/01/gato.jpg" style="display:none"/>
</body>
</html>
