$(function(){
	var disparar = $(':button[value="Disparar"]');
	var verificar = $(':button[value="Verificar"]');
	var ex = $('span');

	disparar.click(function(){

		ex.slideUp();
	});
	

	verificar.click(function(){
		ex.slideToggle();
	});
});