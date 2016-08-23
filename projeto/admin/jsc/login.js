$(function(){
	//CONTROLA O LOGIN
	$('form').submit(function(){
		var login = $(this).serialize();
		$.ajax({
			url: 'swith/login.php',
			data: login + '&acao=login',
			type: 'POST',
			beforeSend: function(){
				$('.loginbox h1 img').fadeIn('fast');
			},
			success: function(resposta){
				if(resposta === '1'){
					$('.msg').empty().html('<p class="sucesso">Login efetuado, aguarde...</p>').fadeIn('fast');
					window.setTimeout(function(){
						$(location).attr('href','dashboard.php');
					}, 1000);
				}else if(resposta === '2'){
					$('.msg').empty().html('<p class="erro">Erro ao logar! Dados não conferem!</p>').fadeIn('fast');
				}else if(resposta === '0'){
					$('.msg').empty().html('<p class="aviso">Informe seu usuário e senha</p>').fadeIn('fast');
				}else{
					alert('bugou tudo');
				}
			},
			complete: function(){
				$('.loginbox h1 img').fadeOut('slow');
			},
			error: function(){
				alert('Erro no sistema!');
			}
		})
		return false;
		
	});
});