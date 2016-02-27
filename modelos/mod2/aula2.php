<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Logica de desenvolvimento com JQuery</title>
<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
	$(function(){
		/*
		$('h1').css("color","#069");
		$('h1').hide();
		$('h1').delay('1000');
		$('h1').fadeIn('slow');
		$('h1').text('UPINSIDE');	
		*/
		
		/*
		$('h1').css('color',"#7D22D5").hide().delay("1000").fadeIn('slow').text('Bela');	
		*/
		
		/*		
		$('h1')
			.css('color',"#7D22D5")
			.hide()
			.delay("1000")
			.fadeIn('slow')
			.text('Bela');	
		*/
		
		$('h1')
			.css('color',"#7D22D5")
			.hide()
			.delay("1000")
			.fadeIn('slow')
			.text('Bela')
			.click(function(){
				$('body').css("background","#27D04A");
			});
			
		$('.2').css('color',"#EF2ECA");
		$('h1, #3').css("border-bottom","solid 3px red");
	});
</script>

</head>

<body>
	<h1>Estudando JQuery</h1>
    <a href="#">Link 1</a>
    <a href="#" class="2">Link 1</a>
    <a href="#" id="3">Link 1</a>
	
</body>
</html>