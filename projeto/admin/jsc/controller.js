

jQuery(function($) { 
	var link = 'swith/painel.php';
	
	$('.dialog').on('click', '.closedial', function(){
		$(this).parent().fadeOut('fast',function(){
			$('.dialog').fadeOut('fast');
		});
		return false;
	});

	//CUSTOM
	$('.controle .li').mouseenter(function(){
		$(this).find('.submenu').slideDown("fast", stop());
	}).mouseleave(function(){
		$(this).find('.submenu').slideUp("fast", stop());
	});

    function stop(){
        $('.submenu').stop(true, true);
    }

	$('.j_addpost').click(function(){
		$('.dialog').fadeIn("fast", function(){
			$('.newpost').fadeIn('fast');
		});		
		return false;	
	});

	/*$('form').submit(function(){
		myModal( 'accept', 'Teste de modal');
		return false;
	});*/

	function myModal(tipo, content){
		var title = (tipo == 'accept' ? 'Sucesso: ': (tipo == 'error' ? 'Ops: ': (tipo == 'alert' ? 'Atenção: ': 'null')));
		if(title == 'null'){
			alert('Tipo invalido');
		}else{
			$('.dialog').fadeIn('fast', function(){
				$('.ajaxmsg').attr('class', 'ajaxmsg msg');
				$('.ajaxmsg').addClass(tipo).html(
					'<strong class="tt">'+title+'</strong>'+
        			'<p>'+content+'</p>'+
    				'<a href="#" class="closedial">X FECHAR</a>'
				).fadeIn('fast');
			});
		}
	}

	$('.configs .abas_config li a').click(function(){
		$('.configs .abas_config li a').removeClass('active');
		$(this).addClass('active');
		
		var formGo = $(this).attr('href');
		
		$('.configs form[name!="'+formGo+'"]').fadeOut('fast', function(){
			$('.configs form[name="'+formGo+'"]').fadeIn('fast');
		});
		return false;
	});

	//MANUTENÇÃO
	$('form[name="config_manutencao"]').submit(function(){
		return false;
	});

	$('.j_config_manutencao_no').click(function(){
		$.ajax({
			url: link,
			type: 'POST',
			data:'acao=manutencaoDesativa',
			beforeSend: function(){
				$('fieldset .main .load').fadeIn('fast');
			},
			success:function(resposta){
				$('.j_config_manutencao_no').parent().fadeOut('fast', function(){
					$(this).parent().children().eq(2).fadeIn('fast');
				});
			},
			complete: function(){
				$('fieldset .main .load').fadeOut('fast');
			},
			error: function(){
				alert('error');
			}
		});
	});

	$('.j_config_manutencao_yes').click(function(){
		$.ajax({
			url: link,
			type: 'POST',
			data:'acao=manutencaoAtiva',
			beforeSend: function(){
				$('fieldset .main .load').fadeIn('fast');
			},
			success:function(resposta){
				$('.j_config_manutencao_yes').parent().fadeOut('fast', function(){
					console.table($(this).parent().children().eq(1).fadeIn('fast'));
					$(this).parent().children().eq(1).fadeIn('fast');
				});
			},
			complete: function(){
				$('fieldset .main .load').fadeOut('fast');
			},
			error: function(){
				alert('error');
			}
		});
	});

	//SERVIDOR DE EMAIL 
	$('form[name=config_email]').submit(function(){
		var forma = $(this);
		var dados = 'acao=mailserver_atualiza&' + $(this).serialize();
		$.ajax({
			url: link,
			data: dados,
			type: 'POST',
			beforeSend: function(){
				forma.find('.load').fadeIn('fast');
			},
			success: function(resposta){
				if(resposta == 1){
					myModal('accept', 'Servidor atualizado');
				}else if(resposta == 2){
					myModal('alert', 'E-mail invalido!');
				}else{
					myModal('alert', 'Preencha todos os campos!');
				}
			},
			complete: function(){
				forma.find('.load').fadeOut('fast');
			},
			error: function(){
				alert('Error');
			}
		});
		return false;
	});


	//Testa EMAIL
	$('.j_config_email_teste').click(function(){
		var forma = $('form[name=config_email]');
		var dados = 'acao=mailserver_teste&' + forma.serialize();
		$.ajax({
			url: link,
			data: dados,
			type: 'POST',
			beforeSend: function(){
				forma.find('.load').fadeIn('fast');
			},
			success: function(resposta){
				if(resposta.indexOf('error') == -1){
					myModal('accept', 'Email enviado com sucesso!');
				}else{
					myModal('error', 'Algo errado aconteceu!');
				}
			},
			complete: function(){
				forma.find('.load').fadeOut('fast');
			},
			error: function(){
				alert('Error');
			}
		});
	});

	//SEO/SOCIAL
	$('form[name="config_seo"]').submit(function(){
		var forma = $(this);
		var dados = 'acao=seo_atualiza&' + $(this).serialize();
		$.ajax({
			url: link,
			data: dados,
			type: 'POST',
			beforeSend: function(){
				forma.find('.load').fadeIn('fast');
			},
			success: function(resposta){
				if(resposta == 1){
					myModal('accept', 'Dadoos atualizados!');
				}else if(resposta == 0){
					myModal('alert', 'Preencha todos os campos!');
				}else{
					myModal('error', 'Algo muito errado aconteceu!');
				}
			},
			complete: function(){
				forma.find('.load').fadeOut('fast');
			},
			error: function(){
				alert('Error');
			}
		});
		return false;
	});

	$('form[name="config_dados"]').submit(function(){
		var forma = $(this);
		var dados = 'acao=atualizaEndtel&' + $(this).serialize();
		$.ajax({
			url: link,
			data: dados,
			type: 'POST',
			beforeSend: function(){
				forma.find('.load').fadeIn('fast');
			},
			success: function(resposta){
				if(resposta == 1){
					myModal('accept', 'Dadoos atualizados!');
				}else if(resposta == 0){
					myModal('alert', 'Preencha todos os campos!');
				}else{
					myModal('error', 'Algo muito errado aconteceu!');
				}
			},
			complete: function(){
				forma.find('.load').fadeOut('fast');
			},
			error: function(){
				alert('Error');
			}
		});
		return false;
	});
});

$( window ).load(function() {
	$('.loadsistem').fadeOut('slow',function(){
		$('.dialog').fadeOut('fast');
	});
});