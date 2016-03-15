$(function(){
    debuga = $('.resposta');
    enviar = $('form[name="cadastro"]');
    action = 'php/php2.php';
    
    function resposta(datas){
        debuga.empty().html('<pre>'+datas+'</pre>');
    }
    
    /*
    enviar.submit(function(){
        var dados = $(this).serialize();
        var enviar = $.get(action,dados);
        
        enviar.then(resposta, function(){resposta('erro ao enviar')},
                    resposta('<img src="img/load.gif" width="20px">Carregando...') );
        return false;
    });
    */
   

    /*enviar.submit(function(){
        var dados = $(this).serialize();
        $.get(action,dados,function(datas){
            debuga.empty().html(
                    "Nome: "+ datas.nome+'<br>'+
                    "Email: "+ datas.email);
        },'json');
        return false;
    });*/
    
    enviar.submit(function(){
        var dados = $(this).serialize();
        $.getJSON(action,dados,function(datas){
            /*debuga.empty().html(
                    "Nome: "+ datas.nome+'<br>'+
                    "Email: "+ datas.email);*/
            
            debuga.empty().html('<ul></ul>');
            $.each(datas,function(key,value){
                $('ul').append('<li>'+key+': '+value+'</li>');
            });
        });
        return false;
    });
    
    debuga.click(function(){
        $(this).empty().load('../mod5/aula2.php');
    });
    
});

