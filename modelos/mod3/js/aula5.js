$(function(){

	var regular = /[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/;


	$('.form').css('display','none');
	$('.erro').css('display','none');

	//click
	$('.J_btn').click(function(){
		var email = $('input[name=email]').val();
		var senha = $('input[name=senha]').val();
		$('.erro').fadeOut('fast');
		if(email == ''){
			$('.email').fadeIn("fast").text("Informe seu e-mail");
		}else if(!regular.test(email)){
			$('.email').fadeIn("fast").text("Informe um e-mail valido!");
		}else if(senha == ''){
			$('.senha').fadeIn("fast").text("Informe sua senha!");
		}else if(senha.length < 6 || senha.length > 12){
			$('.senha').fadeIn('fast').text("Senha deve ter entre 6 e 12 caracteres");
		}else {
			$('input[name=email]').css('background','#0C6');
			$('input[name=senha]').css('background','#0C6');
		}
		return false;
	});


	//BLUR
	$('input[name=email]').blur(function(){
		var email = $($(this)).val();
		$('.erro').fadeOut('fast');
		if(email == ''){
			$('.email').fadeIn("fast").text("Informe seu e-mail");
		}else if(!regular.test(email)){
			$('.email').fadeIn("fast").text("Informe um e-mail valido!");
		}else{
				$($(this)).css('background','#0C6');
		}
	});

	$('input[name=senha]').blur(function(){
		var senha = $($(this)).val();
		$('.erro').fadeOut('fast');
		if(senha == ''){
			$('.senha').fadeIn("fast").text("Informe sua senha!");
		}else if(senha.length < 6 || senha.length > 12){
			$('.senha').fadeIn('fast').text("Senha deve ter entre 6 e 12 caracteres");
		}else{
				$($(this)).css('background','#0C6');
		}
	});
});


	$(window).load(function(){
		$('.carregando').fadeOut('slow',function(){
				$('.form').fadeIn('slow');
		});

	});
