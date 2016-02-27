<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Seletores hierárquicos!</title>
<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
	$(function(){
		$('h2').css('margin',"0");
		$('p').css({'margin':'0',color:'blue'});	
		$('.exemplo').css({'margin-bottom':'20px', background:'#ccc'});
		
		//todas as filhas
		$('.exemplo span').hide().delay(1000).fadeIn('1000').css('color','red');
		
		//somente filhas diretas
		$('.exemplo > span').hide().delay(1000).fadeIn('1000').css('color','green');
		
		//primeiro elemento após o selecionado
		$('.irmao1 + p').css('font-size','25px');
		
		//todos depois do selecionado
		$('.irmao1 ~p').css('color','black');
			
	});
</script>

</head>

<body>
	<div class="exemplo">
    	<h2>Dentro do h2</h2>
        <p>dentro do explemplo<span>SPAN dentro p</span></p>
        <span>dentro do exelpo</span>
    </div>
    
    <h2>Fora do exemplo</h2>
    <p class="irmao1">P1 fora do exemplo</p>
    <p class="irmao2">P2 fora do exemplo</p>
    <p class="irmao3">P3 fora do exemplo</p>
	
</body>
</html>