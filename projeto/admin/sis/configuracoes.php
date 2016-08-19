<div class="content home">
    <h1 class="location">Configurações<span><?php echo date('d/m/Y H:i');?></span></h1><!--/location-->
    
    <div class="configs">
    	<form name="configuration" action="" method="post">
        
        <fieldset>
        	<legend>Acesso ao site:</legend>
        	<span class="field">Modo Manutenão:</span>
            <div class="radio">
            	<label class="red"><input type="radio" name="manutencao" value="0" /> Inativo</label>
                <label><input type="radio" name="manutencao" value="1" /> Ativo</label>
            </div><!--/radio-->
        </fieldset>
        
        <fieldset>
        	<legend>Email de envio:</legend>
            	<label class="label">
        			<span class="field">E-mail:</span>
                    <input type="text" name="email" />                    
                </label>
                
                <label class="label">
        			<span class="field">Senha:</span>
                    <input type="password" name="senha" />                    
                </label>
                
                <label class="label">
        			<span class="field">Porta:</span>
                    <input type="text" name="porta" />                    
                </label>
                
                <label class="label">
        			<span class="field">Server:</span>
                    <input type="text" name="server" />                    
                </label>            
        </fieldset>
        
        <fieldset>
        	<legend>SEO/SOCIAL: <small>Dados da página inicial</small></legend>
            	<label class="label">
        			<span class="field">Titulo:</span>
                    <input type="text" name="title" />                    
                </label>
                
                <label class="label">
        			<span class="field">Descrição:</span>
                    <input type="text" name="description" />                    
                </label>
                
                <label class="label">
        			<span class="field">Facebook:</span>
                    <input type="text" name="facebook" />                    
                </label>
                
                <label class="label">
        			<span class="field">Twitter:</span>
                    <input type="text" name="twitter" />                    
                </label>            
        </fieldset>
        
        <input type="submit" value="Atualizar Configurações do Site" class="btn" /> 
        <img src="img/loader.gif" class="load" alt="Carregando..." title="Carregando..." />
               
        </form>
        
    </div><!--/configs -->

<div class="clear"></div><!-- /clear -->
</div><!-- /content -->