$(function(){
	var este = $('.exemplo');
	/*
	$('#start').click(function(){
		este.animate({bottom: "300px"},2000,function(){
			$(this).css("background","red");	
		});
	});
	*/

	$('#start').click(function(){
		este.animate({bottom: "300px"},2000);	
		este.queue(function(){
			$(this).css("background","red").dequeue();
		});
		este.animate({top: "35px"},2000);
		
		este.queue(function(){
			este.css("background","#09F").dequeue();	
		});
		este.fadeOut(1000);	
		este.queue(function(){
			location.reload();
		});
		

	$("#stop").click(function(){
		//este.clearQueue();
		//este.stop();
		este.finish();
	});
	

	//$.fx.interval = 40;
	//$.fx.off = true;
	});
});
	