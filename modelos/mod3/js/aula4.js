$(function(){
	var contar = 0;
	var ex = $('.exemplo');


	function teste(){
		contar++;
		ex.text($(this).val() + ' - ('+contar+')');
	}

	$('.J_input').bind({
		keyup: teste,
		focus: function(){
			ex.text("Focus");
		},
		blur: function(){
			ex.text('Blur');
		}
	});

	/*
	$('.J_input').focus(function(){
		contar++;
		ex.text($(this).val() + ' - ('+contar+')');

	}).keyup(function(){

		contar++;
		ex.text($(this).val() + ' - ('+contar+')');
	}).mouseover(function(){

		contar++;
		ex.text($(this).val() + ' - ('+contar+')');
	});
	

	
	//bind permite usar varias funções ao mesmo tempo
	$('.J_input').bind('focus keyup mouseover', function(){
		contar++;
		ex.text($(this).val() + ' - ('+contar+')');
	});
	

	
	
	//$('.J_input').keyup(teste);

	$('.J_input').bind('focus keyup mouseover', teste);

	$('.J_input').bind('focus keyup mouseover', function(){
		
		$(this).after(contar+'<br>')
		if(contar>=10){
			//unbind desasocia
			//$(this).unbind();
			//$(this).unbind('focus  mouseover');
			$(this).unbind('focus  mouseover',teste);
		}
	});
	*/
});

