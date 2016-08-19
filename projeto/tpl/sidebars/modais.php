<div class="dialog">

	<div class="msg accept">
    	<strong class="tt">Sucesso:</strong>
        <p>Parabéns. Seus dados foram enviados com sucesso. Estaremos respondendo em breve.</p><p><strong>Obrigado!</strong></p>
    	<a href="#" class="closedial">X FECHAR</a>
    </div><!-- msg -->
    

	<div class="msg alert">
    	<strong class="tt">Aviso:</strong>
        <p>Opsss. Para enviar é preciso preencher todos os campos!</p>
    	<a href="#" class="closedial">X FECHAR</a>
    </div><!-- msg -->


	<div class="msg error">
    	<strong class="tt">Erro:</strong>
        <p>Opsss. Não foi possível processar sua requisição</p>
    	<a href="#" class="closedial">X FECHAR</a>
    </div><!-- msg -->
    
</div><!-- /dialog -->

<div class="contato">
    <h2>Fale Conosco:</h2>
    <p>Preencha e envie o formulário abaixo, teremos o prazer em responder o mais breve!</p>
    <form name="contato" action="" method="post">
        <label>
            <span>Nome:</span>
            <input type="text" name="nome" />
        </label>
        <label>
            <span>E-mail:</span>
            <input type="text" name="mail" />
        </label>
        <label>
            <span>Telefone:</span>
            <input type="text" name="fone" />
        </label>
        <label>
            <span>Mensagem:</span>
            <textarea name="mens" rows="3"></textarea>
        </label>
        <input type="submit" value="Enviar Contato" class="btn" />
        <img class="imgload" src="<?php setHome();?>/tpl/images/loader2.gif" alt="Carregando..." title="Carregando...">
        
    <div class="clear"></div>
    </form>
            
<a href="#" class="closecontato">FECHAR</a>
</div><!-- /contato -->


<div class="body"></div><!--False BG -->