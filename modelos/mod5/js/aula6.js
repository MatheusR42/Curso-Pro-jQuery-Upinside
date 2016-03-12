$(function(){
    $('.scroll').click(function(){
        var ex = $('.J_result');
        var offset = $(this).offset();
        var position = $(this).position();
        ex.html(
            'OFFSET: '+offset.left+' px left '+ offset.top+ ' px top <br>'+
            'POSITION: '+position.left+' px left '+ position.top+ ' px top')
    });
    
    var ex = $('.scroll');
	var documento = $(document).height();
	var winjanela = $(window).height();
	var maxscroll = documento - winjanela;
	
	ex.text("Scroll: " + maxscroll);
    
    $(document).scroll(function(){
            var meuscroll = $(document).scrollTop();
            var janela = maxscroll - meuscroll;

            if(janela == 0){
                    ex.html("Scroll: " + janela + " | <span class='back'>Voltar ao topo</span>");
            }else{
                    ex.text("Scroll: " + janela);
            }
    });
        
    
    $('body').on('click','.back', function(){
		$('body, html').animate({scrollTop: 0}, 1000);
	});
        
    
});