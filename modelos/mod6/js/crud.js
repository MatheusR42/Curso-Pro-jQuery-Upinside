$(function(){
    
    //GERAIS 
    var errMsg = $('.msg');
    var forms = $('form');
    var urlPost = 'php/crud.php';
    var botao = $('.j_buttom');
    
    
    botao.attr('type','submit');
    
    forms.submit(function(){
        return false;
    });
    
    function carregando(){
            errMsg.empty().html('<p class="load"><img src="img/load.gif" alt="Carregando..."> Aguarde, enviando requisição!</p>').fadeIn("fast");
    }
    
    function erroSend(){
        errMsg.empty().html('<p class="erro"><strong>Erro inesperado: </strong>Favor contate o admin</p>').fadeIn('fast');
    }
    
    
    //GENERICAS
    function errDados( menssagem ){
        errMsg.empty().html('<p class="erro">'+menssagem+'</p>').fadeIn('fast');
    }
    
    function sucesso( menssagem ){
        errMsg.empty().html('<p class="accept">'+menssagem+'</p>').fadeIn('fast');
    }
    
    $.ajaxSetup({
        url:            urlPost,
        beforeSend:     carregando,
        type:           'POST',
        
        error:          erroSend
    });
    
    
    //CADASTRA
    var cadastro = $('form[name="cadastro"]');
    
    cadastro.submit(function(){
        var dados = $(this).serialize();
        var acao = "&acao=cadastro";
        var sender = dados+acao;
        
        $.ajax({
            data: sender,
            success: function( resposta ){
                sucesso( resposta );
            }
        });
    });
});

