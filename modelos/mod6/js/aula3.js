$(function(){
    debuga = $('.resposta');
    enviar = $('form[name="cadastro"]');
    action = 'php/php3.php';
    
    
    /*
    enviar.submit(function(){
        $.ajax({
            type: 'POST',
            url: action,
            data: $(this).serialize(),
            success: resposta,
            error:  resposta('erro ao enviar')
        });
        return false;
    });
    */
    
    
    function sucesso(datas){
        debuga.empty().html('<pre>'+datas+'</pre>');
    }
    
    function carregando(datas){
        debuga.empty().html('<img src="img/load.gif" width="20px"> Carregando...');
    }
    
    function erroSend(datas){
        debuga.empty().html('Erro ao enviar');
    }
    
    function completo(datas){
        window.setTimeout(function(){debuga.empty().html('Sucesso ao enviar!')},2000);
    }
    
    /*
    enviar.submit(function(){
        $.ajax({
            type:           'POST',
            url:            action,
            data:           $(this).serialize(),
            beforeSend:     carregando,
            error:          erroSend,
            success:        sucesso,
            complete:       completo
        });
        return false;
    });
    */
   
    /*
    $.ajaxSetup({
        type:           'POST',
        url:            action,
        beforeSend:     carregando,
        error:          erroSend,
        success:        sucesso,
        complete:       completo
    });
    
    enviar.submit(function(){
        $.ajax({data: $(this).serialize()});
        return false;
    });
    */
   
   enviar.submit(function(){
       //var dados = $(this).serialize();
       var dados = $(this).serializeArray();
       var parametros = $.param(dados);
       debuga.html(parametros);
       $.post(action,parametros,function(data){alert(data)});
       return false;
   });
});

