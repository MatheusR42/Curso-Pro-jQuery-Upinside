$(function(){
    var estilo = {
        border: '3px solid #ccc',
        display: 'block',
        padding: '5px',
        color: '#fff',
        //margin: '0 0 5px 0',
        'margin-bottom': '5px',
        'text-aling': 'center'
    };
    
    $('span').css(estilo);
    
    $('span').click(function(){
        var bg = $(this).css('background-color');
        
        if($(this).hasClass('ativo')){
            $(this).removeClass('ativo');
            $('.J_result').css('background', '#CCC');
        }else{
            $('span').removeClass('ativo');
            $(this).addClass('ativo');
            $('.J_result').css('background', bg).text(bg);
        }
       // $('.J_result').css('background', bg).text(bg);
    })

    $(':button').click(function(){
        var ex = $('.J_result');
        var span = $('span:first');
        
        var spanwidth = span.width();
        var spaninner = span.innerWidth();
        var spanouter = span.outerWidth();
        
        ex.html(
            'width: '+spanwidth+'<br>'+
            'innerWidth: '+spaninner+'<br>'+
            'outerWidth: '+spanouter+'<br>');
    });
});
