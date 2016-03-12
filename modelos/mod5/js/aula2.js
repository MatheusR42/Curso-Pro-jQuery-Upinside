$(function(){
	var exemplo = $('.exemplo');
	var cloneIndex = 0;
	$('textarea').width($(window).width()-20);

	$(window).resize(function(){
		$('textarea').width($(window).width()-20);
	});


	$(':button[value="Prepend"]').click(function(){
		exemplo.prepend('Antes Usando Prepend<br>');
	});

	$(':button[value="Append"]').click(function(){
		exemplo.append('<br>Antes Usando Append');
	});

	
	$(':button[value="PrependTo"]').click(function(){
		$("p[id = pre]").clone().attr("id", "PrependClone" +  cloneIndex).prependTo(exemplo);
		cloneIndex = cloneIndex + 1 ;
	});
	
	$(':button[value="AppendTo"]').click(function(){
		$("p[id = app]").clone().attr("id", "AppendClone" +  cloneIndex).appendTo(exemplo);
	});

	$('textarea').keyup(function(){
		exemplo.html($(this).val());
	});
});
