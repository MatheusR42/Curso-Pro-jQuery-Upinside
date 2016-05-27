<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>A ferramenta e os métodos!</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript" src="js/aula1.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilo.css" />

</head>

<body>

<div class="resposta"><strong>ENVIE SEUS DADOS:</strong></div>

<form name="enviardados" action="" method="post" enctype="multipart/form-data">
	<label>
    	<span class="campo">Titulo:</span>
    	<input type="text" name="titulo" />
    </label>
    
    <label>
    	<span class="campo">Descrição:</span>
    	<textarea name="descricao" role="3"></textarea>
    </label>
    
    <input type="submit" value="Enviar Dados" class="btn" />	
</form>

</body>
</html>