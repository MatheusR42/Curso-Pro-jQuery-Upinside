$(document).ready(function(){
	var sender = $('form[name="enviardados"]');
	var loader = $('.resposta');

	var imageFile = $('.selectfile');
	var inputFile =  $('input:file');
	var campoFile = $('.filebar');


	var bar = $('.carregando');
	var per = $('.progress');



	function msieversion()
	{
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0) // If Internet Explorer, return version number
    {
        //alert(parseInt(ua.substring(msie + 5, ua.indexOf(".", msie))));
				return true;
    }
    else  // If another browser, return 0
    {
        return false;
    }

    return false;
	}

	bar.css('display', 'none');
	if(!msieversion()){
		inputFile.css('display', 'none');
	}else {
		campoFile.css('display', 'none');
		imageFile.css('display', 'none');
	}




	imageFile.click(function(){
		inputFile.one('click',function(){
			$(this).click();
		})
		.change(function(){
			campoFile.text($(this).val());
		});
	});


	$("form input[type=submit]").click(function() {
    $("input[type=submit]", $(this).parents("form")).removeAttr("clicked");
    $(this).attr("clicked", "true");
	});

	sender.submit(function(){
		var dados = 'cadastro';
		var val = $("input[type=submit][clicked=true]").val();
		var idUpdate = $('input[type=hidden]').val();
		//alert(val);
		if(val == 'Atualizar Dados'){
			dados = 'editar';
		}
		
		$(this).ajaxSubmit({
			url: 'php/controller.php',
			data: {acao: dados},
			beforeSubmit: function(){
				loader.empty().css('background','#09F').html('<img src="img/load.gif" alt="carregando..." title="carregando...">Aguarde, enviando requisição</img>');
			},
			error: function(){
				loader.empty().text("Desculpe, erro ao enviar requisição");
			},
			uploadProgress: function(event, posicao, total, completo){
				//loader.empty().text(event + ' - '+ posicao+ ' - '+ total+' - '+completo);
				bar.fadeIn('slow');
				var porcentagem = completo+ '%';
				per.width(porcentagem);
				loader.empty().text("Enviando: "+ porcentagem);
			},
			success: function( resposta ){
				per.width("100%").text("100%");
				if(resposta == 1){
					loader.empty().text('Arquivo enviado com sucesso!').css('background','#33BD45');

					//$(this).find('input:text, textarea').val('');

					sender.find('input:text').val('');
					sender.find('textarea').val('');
					campoFile.empty();
					bar.fadeOut('fast');

					window.setTimeout(function(){
						loader.empty().text('ENVIE SEU ARQUIVO: ').css('background','#09F');
					},600);
				}else{
					loader.text(resposta).css("background","#C22C2C").delay(1500).css('background','#D52B2B');
					bar.fadeOut('slow');
				}


			},
			complete: function(){
				//LER
			},




		});
		return false;
	});

});
