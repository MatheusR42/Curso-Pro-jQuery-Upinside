$(function(){
	var sender = $('form[name="enviardados"]');
	var loader = $('.resposta');


	/*
	sender.submit(function(){

			$.ajax({
				data: $(this).serialize(),
				type: 'POST',
				url: 'php/controller.php',
				success: function(resposta){
						loader.empty().html('<pre>'+resposta+'</pre>');
				}
			});
			return false;
	});
	*/

	/*
	sender.submit(function(){
		$(this).ajaxSubmit({
			url: "php/controller.php",
			target: loader
		});
		return false;
	});
	*/


	sender.submit(function(){

		$(this).ajaxSubmit({
			url: "php/controller.php",
			dataType: null,//json, XAML, script
			target: loader,
			data: {acao: 'cadastra', envia: true},
			beforeSerialize: function(){
				loader.empty().text("Obtendo dados");
			},
			beforeSend: function(){
				loader.empty().text("Carregando...");
			},
			error: function(){
				loader.empty().text("Erro ao enviar.");
			},
			//clearForm: true
			resetForm: true,

			//forceSync: false,

			success: function( resposta ){
				loader.empty().html("<pre>"+resposta+"</pre>");
			},
			complete: function(){
				loader.append("Completo");
			},
			uploadProgress: function(event, posicao, total, porcentoCompleto){
				loader.html(porcentoCompleto)
			}


		});
		return false;
	});

});
