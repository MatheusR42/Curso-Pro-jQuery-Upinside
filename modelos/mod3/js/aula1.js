$(function(){

	
	/* Error Event
	$('img').error(function(){
		var imagem = $(this).attr("src");
		alert("A imgagem "+imagem+" não existe!");
		$(this).attr("src","img/erro.gif");
	});
	*/
	
	//$('body').css({overflow: 'hidden',margin: '0'});
	//$('img').width($(window).width()).height($(window).height());
	/*
	$(window).resize(function(){
		$('img').width($(window).width()).height($(window).height());
	});
	*/
	/*
	$(window).scroll(function(){
		$('body').css("background","red");	
		$('img').fadeOut(1000);
	});
	*/
	
	$(window).scroll(function(){
		var topo = $(window).scrollTop();
		if(topo>300){
			$('body').css("background","red");	
			$('img').fadeOut(1000);		
		}else{
			$('body').css("background","#ffff");	
			$('img').fadeIn(1000);	
		}
	});
});