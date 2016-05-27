$(document).ready(function(){
	var sender = $('form[name="enviardados"]');
	var loader = $('.resposta');

	var imageFile = $('.selectfile');
	var inputFile =  $('input:file');
	var campoFile = $('.filebar');


	var bar = $('.carregando');
	var per = $('.progress');

	inputFile.css('display', 'none');
	bar.css('display', 'none');

	imageFile.click(function(){


		inputFile.one('click', function(){
				$(this).click();
		}).change(function(){
			campoFile.text($(this).val());
		});
	});


	sender.submit(function(){
		$(this).ajaxSubmit({
			url: 'php/controller.php',
			data: {acao: 'cadastro'},
			beforeSubmit: function(){
				loader.empty().html('<img src="img/load.gif" alt="carregando..." title="carregando...">Aguarde, enviando requisição</img>');
			},
			error: function(){
				loader.empty().text("Desculpe, erro ao enviar requisição");
			},
			uploadProgress: function(event, posicao, total, completo){
				//loader.empty().text(event + ' - '+ posicao+ ' - '+ total+' - '+completo);
				bar.fadeIn('fast');
				var porcentagem = completo+ '%';
				per.width(porcentagem).text(porcentagem);
			},
			success: function( resposta ){
				campoFile.empty();
				loader.empty().html('<pre>'+resposta+'</pre>');

			},
			complete: function(){
				//ler
			},
			resetForm: true
		});
		return false;
	});

});
