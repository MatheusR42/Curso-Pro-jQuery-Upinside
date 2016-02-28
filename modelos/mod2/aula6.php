<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Seletores de atributos!</title>
<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
	$(function(){
		
		//elemento que contem conteudo pesquisado
		$('li:contains("Tecnologia")').css('background','#600FAF');
		
		//elemento que contem o elento pesquisado interno
		$('li:has("span")').css('background','#C80D10');
		
		//elementos que não contem conteudo
		$('li:empty').css('background','#399B3B');
		
		//$('li:not(li:empty)').css('border',' 3px  solid pink');
		//ou
		$('li:parent').css('border',' 3px  solid pink');
	});
	
</script>

</head>

<body>
	<li>UpInside Tecnologia</li>
    <li>Portal <span>de</span> interatividade</li>
    <li></li>
    <li>Cursos e <span>video aulas</span> em TI</li> 
    <li></li>
    <li>Tudo que voce precisa em Tecnologia na web</li>     
</body>
</html>