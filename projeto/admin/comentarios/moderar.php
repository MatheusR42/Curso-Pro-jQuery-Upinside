<div class="content home">
    <h1 class="location">Moderar Comentário<span><a href="#back" title="voltar">Voltar</a></span></h1><!--/location-->
    
    <div class="commentmanage">
		<div class="principal">
        
        	<div class="info">
            	<img class="avatar" src="http://0.gravatar.com/avatar/4161e253b6b48b7bc34e7fbd5cdc232f?s=60&d=monsterid&r=G" />
                <img class="load" src="img/loader.gif" alt="Carregando..." title="Carregando..." />
             	<span class="infor">De <strong>Robson V. Leite</strong> sobre <strong><a href="#">Shael Sonnen e Anderson Silva Spider...</a></strong>.</span>
            </div><!--/info-->
            
               	<textarea name="mensagem" id="IDDOCOMMENT" rows="5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
            	<span class="data">Enviada dia 16/05/2013 às 08:37</span>
                
        </div><!--principal-->
        
        <ul class="respostas">
		<?php for($e=1;$e<=2;$e++):?>
            <li class="li admin">
                <div class="info">
                    <img class="avatar" src="http://0.gravatar.com/avatar/4161e253b6b48b7bc34e7fbd5cdc232f?s=60&d=monsterid&r=G" />
                    <img class="load" src="img/loader.gif" alt="Carregando..." title="Carregando..." />
                    <span class="infor">Você respondeu em: <strong>16/05/2013 </strong>às <strong>08:37</strong>.</span>
                </div><!--/info-->
                
                    <textarea name="mensagem" id="IDDOCOMMENT" rows="5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>

            </li>
            <li class="li">
                <div class="info">
                    <img class="avatar" src="http://0.gravatar.com/avatar/4161e253b6b48b7bc34e7fbd5cdc232f?s=60&d=monsterid&r=G" />
                    <img class="load" src="img/loader.gif" alt="Carregando..." title="Carregando..." />
                    <span class="infor">Nova resposta de  <strong>Robson V. Leite</strong> Enviada dia <strong>16/05/2013 </strong>às <strong>08:37</strong>.</span>
                </div><!--/info-->
                
                    <textarea name="mensagem" id="IDDOCOMMENT" rows="5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
           
            </li>
        <?php endfor;?>        
        </ul><!--/respostas-->
        
        <form name="addresposta" action="" method="post">
        	<h3>Adicionar Resposta:</h3>
            <textarea name="mensagem" rows="5"></textarea>
            <input type="submit" value="Adicionar" class="btn" />
        	<img class="load" src="img/loader.gif" alt="Carregando..." title="Carregando..." />
        </form>
	
            
    </div><!--/ commentmanage -->

<div class="clear"></div><!-- /clear -->
</div><!-- /content -->