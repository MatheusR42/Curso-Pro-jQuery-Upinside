$(function(){
	Shadowbox.init();
	
	//Esconde o Footer
	$('#footer').hide();
	
	//height da box
	$('.bloco').each(function(){
		var altura = $(window).height();
		altura = altura - 110;
		$(this).css('min-height',altura);
	});
	
	//Navegacao Geral
	$('.pagecontato').click(function(){
		$('.navtopo li a').removeClass('active');
		$('.navtopo li a[href="#contato"]').addClass('active');
		$('.contato').animate({width: 'toggle'});		
		return false;
	});	
	
	
	//CONTROLA A MODAL
	$('.contato').hide();
	
	$('.closecontato').click(function(){
		$('.contato').animate({width: 'toggle'});
		$('.navtopo li a').removeClass('active');
		return false;	
	});
	
	//CONTROLA O DIAL
	$('.dialog').hide();
	
	$('body').on('click','.closedial',function(){
		$(this).parent().fadeOut("slow",function(){
			$('.dialog').fadeOut("slow");
		});	
		return false;	
	});
	
	function myDial(clase,content){
		var strong = (clase == 'alert' ? 'Opsss:' : (clase == 'accept' ? 'Sucesso:' : (clase == 'error' ? 'Erro:' : 'Olá')));
		$('.dialog').fadeIn("slow",function(){
			$('.dialog').html('<div class="msg '+ clase +'"><strong class="tt">'+ strong +'</strong>'+ content +'<a href="#" class="closedial">X FECHAR</a></div>');	
		});
	}
	
	$('form[name="contato"]').submit(function(){
		myDial('alert','<p>Opss, não foi possivel enviar sua requisição. Entre em contato com o administrador.</p> <p><strong>Obrigado!</strong></p>');
		return false;	
	});
	
	//LIMPA TAMANHO DE ELEMENTOS NA SINGLE CONTENT
	$('.artigo .content img').each(function(){
		$(this).removeAttr('width').removeAttr('height');
	});
	
	$('.artigo .content iframe').each(function(){	
		var url = $(this).attr("src");
		var char = "?";
		if(url.indexOf("?") != -1){
			var char = "&";
		}
		
		var iw = $(this).width();
		var ih = $(this).height();
		var width = '660';
		var height = (width*ih) / iw;		
		$(this).attr({'width':'660px','height':height+'px','src':url+char+'wmode=transparent'});
	});
	
	//CONTROLA A BOX DE COMENTÁRIOS
	$('.commentbox, .commentbox form, .commentbox h3').hide();
	
	$('.opencomment').click(function(){
		$('.commentbox').fadeIn("slow",function(){
			$('.commentbox form, .commentbox h3').fadeIn("slow");
		});
		return false;
	});
	
	$('.closecomment').click(function(){
		$('.commentbox form, .commentbox h3').fadeOut('slow',function(){
			$('.commentbox').fadeOut("slow");	
		});	
		return false;
	});
	
	$('form[name="addcomment"]').submit(function(){
		varname = ($(this).find('input[name="nome"]').val() ? $(this).find('input[name="nome"]').val() : 'Robson V. Leite');
		myDial('accept','<p>Olá <strong>' + varname + '</strong>. Seu comentário foi enviado para o moderador. Assim que aprovado você será informado.</p><p><strong>Obrigado pela interatividade.</strong></p>');
		return false;	
	});
});