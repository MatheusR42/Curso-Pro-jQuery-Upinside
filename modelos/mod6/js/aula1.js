$(function(){
    debuga = $('.resposta');
    enviar = $('form[name="cadastro"]');
    action = 'php/php1.php';
    
//    enviar.submit(function(){
//        var nome = $('input[name="nome"]').val();
//        var mail = $('input[name="email"]').val();
//        
//        $.post(action,{nome: nome, email: mail},function(valores){
//            alert(valores);
//        });
//        return false;
//    });
    
    function resposta(datas){
        debuga.empty().html('<pre>'+datas+'</pre>');
    } 
    
//    enviar.submit(function(){
//        $.post(action,$(this).serialize(),resposta);
//        return false;
//    });

//    enviar.submit(function(){
//        var postar = $.post(action,$(this).serialize());
//        postar.done(resposta);
//        postar.fail(resposta('erro ao receber!'));
//        return false;
//    });
    
    enviar.submit(function(){
        var postar = $.post(action,$(this).serialize());
        postar.progress(resposta('<img src="img/load.gif" width="20px">Carregando...'));
        postar.done(resposta);
        postar.fail(function(){
            resposta('erro ao receber!')
        });
        return false;
    });
});

