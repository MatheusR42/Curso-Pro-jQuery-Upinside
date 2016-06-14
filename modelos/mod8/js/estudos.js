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

	//buttons
	$('#button input:submit').button();
	$('#button input:button').button().click(function(){alert('botão')});

	$('#button button:first').button({
		icons:{
			primary: 'ui-icon-gear',
			secondary: 'ui-icon-triangle-1-s'
		},
		text: true
	});

	$('#button button:last').button({
		icons:{
			primary: 'ui-icon-locked'
		},
		text: false
	});

	$('#button a').button({
		icons: {
			primary: 'ui-icon-signal-diag'
		}
	});

	$('#button .gchecks').buttonset();
	$('#button .gradios').buttonset();

	//datepicker

	//EX1
	//$('.j_datepicker').datepicker();

	$('.j_datepicker').datepicker({
		showAnim: 'explode',
		showOtherMonths: true,
		selectOtherMonths: false,
		showButtonPanel: true,
		changeMonth: false,
		changeYear:false,
		numberOfMonths: 1,
		dateFormat: 'dd/mm/yy'
	});

	//EX2
	$('.j_datepickerout').datepicker({
		showAnim: 'fadeIn',
		showOtherMonths: true,
		selectOtherMonths: true,
		showButtonPanel: true,
		changeMonth: true,
		changeYear:true,
		numberOfMonths: 1,
		dateFormat: 'dd/mm/y',
		showOn: 'button',
		buttonImage: 'img/calendar.png',
		buttonImageOnly: true,
		altField: '.alternate',
		altFormat: 'DD/D MM/yy',
		minDate: '-30',
		maxDate: '30'
	});

	$('.ui-datepicker-trigger').css({padding: '8px', 'padding-bottom':  '9px', background: 'white', float: 'left', cursor: 'pointer'});

	$('.ui-datepicker-trigger').mouseover(function(){
		$(this).animate({backgroundColor: 'red'},500);
	}).mouseleave(function(){
		$(this).animate({backgroundColor: 'white'},500);
	});

	$('.j_datepickerout').css({float: 'left', width: '162px'});

	//EX3

	//$('.j_datepickerin').datepicker();

	$('.j_datepickerin').datepicker({
			onSelect: function(event, ui){
				//console.log(ui);
				var dia = ui.selectedDay;
				var mes = ui.selectedMonth + 1;
				var ano = ui.selectedYear;
				console.log('Você selecionou: '+dia+ '/'+ mes+ '/'+ ano);
			}
	});


	//MODAIS E CALLBACKS
	$('#modais button').button();
	//$('#modais p:first').dialog();
	$('#modais p:first').hide();

	//EX1
	$('.nav li a').click(function(){
		if($(this).attr('href') == '#modais'){
			var retorno = $('#modais p:first').html();
			$('#modais').prepend('<p>'+retorno+'</p>');
			$('#modais p:first').hide();
			window.setTimeout(function(){$('#modais p:first').dialog().hide().fadeIn('slow');}, 1100);
		}
	});

	//EX2
	$('.dial').dialog({
		autoOpen: false,
		buttons: {
			'Ok': function(){
				$(this).dialog('close');
			}
		}
	});

	$('#modais .abrir').click(function(){
		$('.dial').dialog('open');
	});

	//EX3
	var atack = $('#modais .deletar');

	atack.dialog({
		modal: true,
		autoOpen: false,
		show: 'bouce',
		hide: 'explode',
		buttons: {
			'Sim': function() {
				alert('apagado');
				$(this).dialog('close');
			},
			'Não': function(){
				$(this).dialog('close');
			}
		}

	});

	$('#modais .confirmar').click(function(){
		atack.dialog('open');
	});

	//EX4

	var erro = $('.errocaixa');

	erro.dialog({
		modal: true,
		autoOpen: false,
		show: 'bouce',
		hide: 'explode',
		buttons: {
			'Ok': function(){
				$(this).dialog('close');

			}
		}
	});

	$('#modais .erro').click(function(){
		erro.dialog('open');
	});


	//Menus e barras de progresso

	//$('.menuui').menu();

	$('.menuui').menu({
		icons: {submenu: 'ui-icon-circle-triangle-e'},
		position: {my: 'left+2 top', at: 'right top'}
	});

	$('.progresso').progressbar({
		value: 50
	});

	$('.progresso2').progressbar({
		value: 75
	});
});
