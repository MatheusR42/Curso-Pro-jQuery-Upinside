<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Seletores de atributos!</title>
<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
	$(function(){
		
		//contem o atributo
		$('a[rel]').css({'display':'block' ,'margin-botton':'10px'});
		
		//valor do atributo é igual
		$('a[href="#up"]').css('font-size','30px');
		
		//contem o valor do atributo
		$('a[href*="#up"]').css('font-size','30px');
		
		//valor do atributo é diferente
		$('a[rel!="up1"]').css('color', "#C8B71A");
		
		$('a[title="UpInside"]').click(function(){
			alert('Estamos estudando so seletores de atributos');	
		});
		
	});
	
</script>

</head>

<body>
	<a href="#" rel="up1">Link 1</a>
	<a href="#" rel="up2">Link 2</a>
	<a href="#up" rel="up3" title="UpInside">Link 3</a>        
</body>
</html>