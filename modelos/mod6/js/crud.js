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
    function erroDados( menssagem ){
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
                if(resposta == '1'){
                     erroDados('<strong>Erro ao cadastrar: </strong> Existem campos em branco');
                }else if(resposta == '2'){
                    erroSend();
                }else{
                    sucesso('Parabéns <strong>'+ resposta +'</strong>, seu cadastro foi realizado!');
                }
            },
            complete: function(){
                location.href='#';
                cadastro.find('input:text').val('');
            }
        });
    });

    //READ
    var loadLer = $('.lendoartigos');
    var listler = $('.usuarios');
    var loadmore = $('.j_read');

    listler.empty();
    loadmore.hide();

    function carregarUsuario( instrucoes ){ 
        $.ajax({
            data:           instrucoes,
            beforeSend:     '',
            error:          '',
            success:        function( leitura ){
                if(leitura != '3'){
                    listler.append(leitura);
                    loadLer.delay(300).fadeOut('slow');
                    loadmore.delay(1000).fadeIn('fast');
                }else{
                    loadmore.delay(1000).fadeIn('fast');
                    loadmore.text('Não existem mais usuários. Recarregar a página')
                    .click(function(){
                        location.reload();
                    });
                    loadLer.delay(300).fadeOut('slow');
                }
            }
        });
    }
    carregarUsuario("acao=ler&offset=0&limit=4");

    var offset = 4;


    loadmore.click(function(){
        $(this).fadeOut(100);
        loadLer.fadeIn('fast');
        carregarUsuario("acao=ler&offset="+offset+"&limit=4");
        offset+=4;
    });

    //DELETE

    listler.on('click', '.j_delete', function(){
        var delid = $(this).attr('id');
        var deldata = "acao=deletar&del="+delid;
        var liaction = $('li[class="J_'+delid+'"]');
        
        liaction.css("background", "red");
        carregarUsuario("acao=ler&offset="+offset+"&limit=1");
        
        $.ajax({
            data:           deldata,
            beforeSend:     '',
            error:          '',
            success:        function(){
                liaction.fadeOut('slow');
            }
        });
    });

    //CONSULTAR

    var closemodal = $('.j_buttom_close');
    var formmodal = $('form[name="editar"]');

    listler.on('click', '.j_edit', function(){
        var idedit =$(this).attr("id");
        var consult = "acao=consulta&editid="+idedit;
        var liaction = $('li[class="J_'+idedit+'"]');

        liaction.css("background", "#09F");

        $.ajax({
            data:           consult,
            dataType:       'json',
            beforeSend:     function(){
                $('.editar').fadeIn('slow');
            },
            error: '',
            success: function(resposta){
                $.each(resposta, function(key, value){
                    formmodal.find('input[name="'+key+'"]').val(value);
                });
                
            },
            complete: function(){
                formmodal.fadeIn('fast');
            }
        });

        closemodal.click(function(){
            formmodal.fadeOut('fast',function(){
                $('.editar').fadeOut('slow');
                liaction.css("background", "#FFF");
            });
        });
    });

    //EDITAR

    formmodal.submit(function(){
        var dados = "acao=editar&"+$(this).serialize();
        var editid = $(this).find('input[name="id"]').val();
        var listme = $('li[class="J_'+editid+'"]');

        listme.css('background','#090');

        $.ajax({
            data: dados,
            dataType: 'json',
            beforeSend: function(){
                $('.j_loadboxedit').fadeIn("fast");
            },
            error: '',
            success: function( atualizacao ){
              $('.j_loadboxedit').fadeOut('slow');  
              listme.find('h3').text(atualizacao.nome+" "+atualizacao.sobrenome);
              listme.find('.email').html('<a href="mailto:'+atualizacao.email+'">'+atualizacao.email+'</a>');
              listme.find('.telefone').text(atualizacao.telefone);
            }
        });

    });
});

