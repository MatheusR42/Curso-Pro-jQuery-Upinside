$(function(){
	var input = $(':button');
	var ex =$('span');
	/*
	input.click(function(){

		$('.J_um').fadeOut();
	}).dblclick(function(){
		$('.J_um').fadeIn();
	});
	*/

	/*
	input.click(function(){
		ex.fadeTo('slow',0.5);
	});
	*/
	/*
	input.click(function(){
		ex.fadeToggle();
	});
	*/


	input.click(function(){
		ex.fadeTo('slow',0.3,function(){
			ex.fadeTo('slow',1);
		});
	})
});