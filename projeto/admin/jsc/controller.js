$(window).ready(function(){
	$('.loadsistem').fadeOut('slow',function(){
		$('.dialog').fadeOut('fast');
	});
});

$(function(){
	var link = 'swith/painel.php';

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

    $('.closemodal').click(function(){
        $(this).parent().fadeOut('fast',function(){
            $('.dialog').fadeOut('fast');
        });
    });

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
					console.table($(this).parent().children().eq(2).fadeIn('fast'));
					$(this).parent().children().eq(2).fadeIn('fast');
				});
			},
			complete: function(){
				$('fieldset .main .load').fadeOut('fast');
			},
			error: function(){
				alert('error');
			}
		})
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
		})
	});
});