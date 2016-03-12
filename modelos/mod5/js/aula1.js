$(function(){
	var exemplo = $('.exemplo');

	$(':button:eq(0)').click(function(){
		exemplo.addClass('adicionar');
	});
	$(':button:eq(1)').click(function(){
		exemplo.removeClass('adicionar');
	});

	$(':button:eq(2)').click(function(){
		exemplo.toggleClass('adicionar');
	});

	$(':button').click(function(){
		if(exemplo.hasClass('adicionar')){
			exemplo.text("A classe existe!");
		}else{
			exemplo.text("As classes que existem são: " + exemplo.attr('class'));
		}
	});
	$(':button:eq(3)').click(function(){
		exemplo.clone().appendTo('.clones').css('border','none');
	});
});
