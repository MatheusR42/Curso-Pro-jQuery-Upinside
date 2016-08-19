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
    
    
    <!-- NEW POST -->
    <div class="modal newpost">
    	<h2>NOVO POST:</h2>
        <div class="content">
            <form name="cadnewpost" action="" method="post">
                <label>
                    <span>Selecione a categoria:</span>
                    <select name="categoria">
                        <option value="1" disabled>ARTIGOS</option>
                        <option value="2">&raquo; MMA</option>
                        <option value="2">&raquo; Jiu-Jitsu</option>
                        <option value="2">&raquo; UFC</option>
                        <option value="1" disabled>VÍDEOS</option>
                        <option value="2">&raquo; MMA</option>
                        <option value="2">&raquo; Jiu-Jitsu</option>
                        <option value="2">&raquo; UFC</option>
                    </select>
                </label>
                <label>
                    <span>Titulo do post:</span>
                    <input type="text" name="titulo" />
                </label>
                
                <input type="submit" value="Cadastrar" class="btn" />
                <img src="img/loader.gif" class="load" alt="Carregando..." title="Carregando..." />
            </form>
            
        </div><!--/content-->
        <a href="#" class="closemodal">X FECHAR</a>
    </div><!--/newpost-->
    
    
    <!-- NEW CAT -->
    <div class="modal newcat">
    	<h2>NOVA CATEGORIA:</h2>
        <div class="content">
            <form name="cadnewcat" action="" method="post">
                <label>
                    <span>Sessão:</span>
                    <select name="categoria">
                    	<option value=""></option>
                        <option value="1">ARTIGOS</option>
                        <option value="2" disabled="disabled">&raquo; MMA</option>
                        <option value="2" disabled="disabled">&raquo; Jiu-Jitsu</option>
                        <option value="2" disabled="disabled">&raquo; UFC</option>
                        <option value="1">VÍDEOS</option>
                        <option value="2" disabled="disabled">&raquo; MMA</option>
                        <option value="2" disabled="disabled">&raquo; Jiu-Jitsu</option>
                        <option value="2" disabled="disabled">&raquo; UFC</option>
                    </select>
                </label>
                <label>
                    <span>Categoria:</span>
                    <input type="text" name="categoria" />
                </label>
                
                <input type="submit" value="Cadastrar" class="btn" />
                <img src="img/loader.gif" class="load" alt="Carregando..." title="Carregando..." />
            </form>
            
        </div><!--/content-->
        <a href="#" class="closemodal">X FECHAR</a>
    </div><!--/newcat-->
    
    
    <!-- NEW USER -->
    <div class="modal newuser">
    	<h2>CADASTAR USUÁRIO:</h2>
        <div class="content">
            <form name="cadnewuser" action="" method="post">
                <label>
                    <span>Nível:</span>
                    <select name="nivel">
                    	<option value="1">Admin</option>
                        <option value="2">Super Admin</option>
                    </select>
                </label>
                <label>
                    <span>Nome:</span>
                    <input type="text" name="nome" />
                </label>
                
                <label>
                    <span>E-mail:</span>
                    <input type="text" name="email" />
                </label>
                
                <label>
                    <span>Login:</span>
                    <input type="text" name="user" />
                </label>
                
                <label>
                    <span>Senha:</span>
                    <input type="password" name="pass" />
                </label>
                
                <input type="submit" value="Cadastrar" class="btn" />
                <img src="img/loader.gif" class="load" alt="Carregando..." title="Carregando..." />
            </form>
            
        </div><!--/content-->
        <a href="#" class="closemodal">X FECHAR</a>
    </div><!--/newuser-->
</div><!-- /dialog -->