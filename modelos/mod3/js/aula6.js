$(function(){
	var ex = $('.exemplo');

	$(':text').click(function(){
		var texto = $(this).val();
		ex.text(texto);
	});


	$('.J_disparar').click(function(){
		$(':text').trigger('click');
		$('form[name="campos_dinamicos"]').submit();
	});


	//$('.campos').append('Teste');

	$('.J_add').click(function(){
		$('.campos').append('<input type="text" name="texto[]"/>');
	});

	$('.J_anexo').click(function(){
			$(this).unbind('click').fadeOut('slow');
			$('.campos').prepend('<input type="file" class="file" name="img[]" multiple="multiple" />');

	});

	$('.J_clear').click(function(){
		$('pre').fadeOut();
	});

});
