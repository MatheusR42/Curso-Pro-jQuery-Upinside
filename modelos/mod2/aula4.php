<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Seletores hierárquicos!</title>
<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
	$(function(){
		$('form')
			.hide()
			.css({
					padding: 		'10px',
					backgroud:		'#fbfbfb',
					width:			'500px',
					height:			'500px',
					position:		'fixed',
					left:			'50%',
					'margin-left':	'-250px',
				})
			.fadeIn(2000)
			
		$('label').css({
				display:			'block',
				'margin-bottom': 	'10px'
		})
		
		$('.tt').css({
			display : 			'block',
			'margin-botton': 	'3px',
			'font-family':		'Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif'
		})
		
		$('form :text, form :password').css({
			display : 			'block',
			width: '490px',
   		 	'border-radius': '4px'	
		})
		
		$('form :disabled').val("Campo desabilitado!");
		
		$('form :reset').click(function(){
			$('form').slideUp(2000);	
		});
	});
	
</script>

</head>

<body>
	<form name="teste" action="" method="post">
    	<label>
            <span class="tt">Campo de Texto:</span>
            <input type="text" name="texto" disabled="disable"/>
        </label>
        
        <label>
            <span class="tt">Campo de Password:</span>
            <input type="password" name="texto" />
        </label>
        
        <label for="checkbox">
            <input type="checkbox" checked="checked" value="1" /> Checked 1
            <input type="checkbox"  value="2" /> Checked 2
        </label>
        
        <label for="radio">
            <input type="radio" name="radio" checked="checked" value="1" /> Radio 1
            <input type="radio" name="radio"  value="2" /> Radio 2
        </label>
        
        <label>
        	<input type="file" name="arquivo"/>
        </label>
        
        <label>
        	<input type="submit" value="enviar">
            <input type="reset" value="limpar">
        </label>
        <label>
        	<select name="teste" class="select">
             	<option value="1">Select</option>
            </select>
       	</label>
        
        <label>
        	<input type="image" src="http://www.aulife.com.br/aulife.com.br_arquivos/btn-enviar-form.jpg "/>
        </label>
    </form>
    
    
</body>
</html>