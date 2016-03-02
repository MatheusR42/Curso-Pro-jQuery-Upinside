$(function(){
	$('.J_quatro').css("background","#24E9C7");
	
	$('.J_nove').css({background:"#E3BE25",height:"60px"});
	var ex = $('.exemplo');
	$('.J_um').click(function(){
		
		$(this).css('background','#ccc');
		ex.text("Você clicou!");
	});
	
	$('.J_dois').dblclick(function(){
		$(this).css('background','#ccc');
		ex.text("Você deu dois click's!");
	});
	
	$('.J_tres').focusin(function() {
        ex.text("você deu foco");
    }).focusout(function() {
        ex.text("você tirou o foco");
    });
	
	$('.J_quatro').hover(function(){
		$(this).css("background","red");
		ex.text("você passou o mouse!"); 	
	}).mouseleave(function(){
		$(this).css("background","#24E9C7");
		ex.text("você passou o mouse!"); 
	});
	
	$('.J_cinco').mousedown(function(){
		$(this).css("background","red");
		ex.text("Você clicou");	
	}).mouseup(function(){
		$(this).css("background","#000");
		ex.text("Você soltou o mouse!");
	});
	
	var a = 0;
	$('.J_seis').mouseenter(function(){
		a += 1;
		ex.text("Mouse ENTER: " + a);	
	}).mouseout(function(){
		//mouseout avisa que saiu se passar por um elemento filho
		ex.text("Mouse OUT");	
	});
	
	
	var b = 0;
	$('.J_sete').mouseover(function(){
		//mouse over é ativado se passar po um elemento filho
		b += 1;
		ex.text("Mouse OVER: " + b);	
	}).mouseleave(function(){
		//mouseleave só avisa se sair do elemento por completo
		ex.text("Mouse LEAVE");	
	});
	
	$('.J_oito').mousemove(function(move){
				var localx = move.pageX;
				var localy = move.pageY;
				ex.text("EixoX: "+ localx+"EixoY: "+localy);
		
	});
	
	var c = 0;
	$('.J_nove').mouseenter(function(){
		c += 1;
		ex.text("Mouse Entrou(correto!)" + c);
	}).mouseleave(function(){
		ex.text("Mouse saiu(correto!)" + c);	
	});
});