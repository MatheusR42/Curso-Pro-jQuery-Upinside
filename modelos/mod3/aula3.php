<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eventos de teclado e formularios!</title>
<link rel="stylesheet" type="text/css" href="css/aula3.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/aula3.js"></script>

</head>

<body>
	<div class="exemplo">Aguardando ação</div>
   	<form action="" method="post">
    	<label>
        	<input type="text" name="nome" class="J_place J_um" title="informe seu nome">
        </label>
        
        <label>
        	<input type="text" name="idade" class="J_place J_dois" title="Informe sua idade"/>
        </label>
        
        <label>
        	<textarea rows="3" name="texto" class="J_place J_texto" title="Informe um texto"/></textarea>
        </label>
        	<input type="button" value="Botão">
            <input type="submit" value="Enviar">
        </form>
</body>
</html>