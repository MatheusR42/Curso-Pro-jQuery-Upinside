$(function(){
	//slide
	$('.slidequery img').hide();
	$('.slidequery').cycle({ 
		fx:      'fade', 
		speed:    1000, 
		timeout:  3000 ,
		pager:  '.slidequerynav'
	});
	
	//navegacao
	$('.navtopo li a').click(function(){
		var goto = $(this).attr("href");
		
		//CONTATO MODIFY
		if(goto != '#contato'){
			var gooo = $(goto).offset().top;
			$('html, body').animate({scrollTop:gooo},1000);
			
		}else{
			$('.navtopo li a').removeClass('active');
			$('.navtopo li a[href="#contato"]').addClass('active');
			$('.contato').animate({width: 'toggle'});
		}		
		return false;
	});	
	
	//marcando atual
	var menuid = $('.navtopo li');
	var menuit = menuid.find('a');
	
	var navit = menuit.map(function(){
		var cadait = $($(this).attr("href"));
		if(cadait.length) { return cadait; }
	});
	
	$('.navtopo li a:first').addClass('active');
	$(window).scroll(function(){
		var menuh = menuid.height();
		var dotopo = $(this).scrollTop()+menuh;
		
		var atual = navit.map(function(){
			var posicao = $(this).position().top;
			if(posicao < dotopo){
				return this;	
			}
		});
		
		atual = atual[atual.length-1];
		var este = atual && atual.length ? atual[0].id : "";
		
		if(menuid != este){
			menuid.find('a').removeClass('active');
			menuid.find('a[href="#'+este+'"]').addClass('active');	
		}
		
		//ACRESENTA HOVER FOOTER
		if(este != 'home'){
			$('#footer').slideDown("slow");	
		}else{
			$('#footer').slideUp("slow");	
		}
	});
});

$(window).ready(function(){
	$('.slidequery li').each(function(){
		var img = $(this).find('img').attr("src");
		var pix = $(window).width();
		<!-- Alterações TIM MCE	-->	
		$(this).find('img').attr("src",'tim.php?src='+img+'&w='+pix+'&h=350&a=c');
		$('.slidequery img').fadeIn();
	});
});