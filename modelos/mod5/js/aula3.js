$(function(){
	var este = $('strong');
        
        este.click(function(){
            $(this).toggleClass('off');
        });
        
        $(':button:first').click(function(){
            este.prependTo('.exemplo');
        });
        $(':button[value="Detach"]').click(function(){
            este.detach();
        });
        $(':button:eq(2)').click(function(){
            este.remove();
        });
	
        $(':button:last').click(function(){
            este.empty();
        });
});
