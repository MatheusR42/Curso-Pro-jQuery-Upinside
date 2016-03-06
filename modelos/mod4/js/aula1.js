$(function(){
	var ex = $('.exemplo');



	$('.J_hide').click(function(){

		ex.hide('slow');
	});

	$('.J_show').click(function(){
		ex.show('slow');
	});
	
	$('.J_toggle').click(function(){

		ex.toggle('slow');
	});
});