$(function(){
	//placeholder com focusIn e focusOut
	$('.J_place').each(function(){
		var place = $(this).attr('title');
		var input = $(this);
		
		input
			.val(place)
			.css('color','#ccc')
			.focusin(function(){
				input.css('color','#000');
				if(input.val() == place){
					input.val('');	
				}
				
				
			}).focusout(function(){
				
					if(input.val()  == ''){
						input.css("color","#ccc");
						input.val(place);
					}
				
				});
	});
	

	var ex = $('.exemplo');


	/* --------EVENTOS DO TECLADO----


	//keypress é desparado por algumas teclas
	$('.J_texto').keypress(function(){
				ex.text($(this).val());
	});
	*/

	/*
	
	//keydown é ativado por todas as teclas
	$('.J_texto').keydown(function(){
				ex.text($(this).val());
	});
	*/

	/*
	
	$('.J_texto').keyup(function(){
				ex.text($(this).val());
	});
	*/

	/* --- EVENTOS DE FORMULARIO ---
	$('.J_um').focus(function(){
		ex.text($(this).attr('title'));
	}).keyup(function(){

		if($(this).val() == 'UpInside'){
			$('.J_dois').focus();
		}
	});
	
	$('.J_um').blur(function(){

		ex.text("Você saiu do campo "+$(this).attr('name'));

	});
	*/


	//somente ativa o evento se alterar o valor do campo
	$('.J_um').change(function(){
		ex.text('Você alterou o valor do campo ' + $(this).val());
	});

	$(':button').click(function(){
		$('form').submit();
		$('.J_texto').select();
	});

	$('form').submit(function(){
		return false; //bloquea o envio
	});
});

