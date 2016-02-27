<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inicializando o JQuery</title>
<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
	//apos carregar os documento DOM do documento a funçãp sera executada
	$(document).ready(function(){
		alert('O DOM carregou!');
	});
	//todos os elementeos devem ser carregados antes da função ser executada
	$(window).load(function(){
		alert('elementos carregados!');	
	});
</script>
</head>

<body>
	<img src="http://hypescience.com/wp-content/uploads/2015/03/melhores-imagens-hubble-25.jpg">
</body>
</html>