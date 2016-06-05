$(function(){
	//$('.j_date').datepicker();

	//ESTRUTURAS E ESTILOS
	//height da box
	console.log({}+[] );
	$('.bloco').each(function(){
		var altura = $(window).height();
		altura -= 110;
		$(this).css('min-height', altura);
	});

	$('a').click(function(){


		return false;
	});

	$('.nav li a').click(function(){
		$('.nav li a').removeClass('active');
		$(this).addClass('active');

		var goto = $(this).attr('href');
		var gooo = $(goto).position().top;
		console.log(gooo);
		$('html, body').animate({
			scrollTop: gooo
		}, 1200);
		return false;
	});

	var menuid = $('.nav li');
	var menuit = menuid.find('a');

	var navit = menuit.map(function(){
		var cadait = $($(this).attr('href'));
		if(cadait.length){
			return cadait;
		}
	});

	$(window).scroll(function(){
		var menuHeight = menuid.height();
		var dotopo = $(this).scrollTop() + menuHeight;

		var atual = navit.map(function(){
			var posicao = $(this).position().top;
			if(posicao < dotopo){
				return this;
			}
		});
		atual = atual[atual.length-1];
		var este = atual && atual.length ? atual[0].id : "";

		console.log(este);

		if(menuid != este){
			menuid.find('a').removeClass('active');
			menuid.find('a[href="#'+este+'"]').addClass('active');
		}
	});


	//WIDGETS

	//Accordion
	//$('.accordion').accordion();

	$('.accordion').accordion({
		active: 1,
		collapsible: true,
		animate: {easing: 'easeInOutElastic', duration: 1500},
		heightStyle: 'fill',
		icons:{ header: 'ui-icon-circle-triangle-e', activeHeader:'ui-icon-circle-triangle-s'},
		event: 'dblclick'
		//event: 'mouseover'
		//heightStyle: 'content'
		//header: 'p'
		//disabled: true

	});

	//autocomplete

	var resultados = ["UpInside", "Campus", "Cursos", "PRO"];
	var apresenta	= $('.resultados');
	apresenta.hide();
	apresenta.html('<li style="color:green"> Aguarde, Carregando...</li>');

	$('.j_autocomplete').autocomplete({
		//source: resultados
		//source: 'php/completar.php'
		source: 'php/controller.php?acao=completar',
		select: function(event, ui){

			/*
			$.ajax({
				url: 'php/controller.php',
				data: 'acao=pesquisar&valor='+pegar,
				success: function(resposta){
					apresenta.fadeTo(500,0.5,function(){
						$(this).html(resposta).fadeTo(500,1);
					})
				}
			});
			*/

			var pegar = ui.item.value;
			pegarDados(pegar);
		},
		//change: function( dados ){pegarDados($(this).val());}
	});
	var autocomplete = $('form[name="autocomplete"]');

	autocomplete.submit(function(){
		pegarDados($('.j_autocomplete').val());
		return false;
	});


	function pegarDados(dados){
		$.ajax({
			url: 'php/controller.php',
			data: 'acao=pesquisar&valor='+dados,
			success: function(resposta){
				apresenta.fadeTo(500,0.5,function(){
					$(this).html(resposta).fadeTo(500,1);
				})
			}
		});
	}
});
