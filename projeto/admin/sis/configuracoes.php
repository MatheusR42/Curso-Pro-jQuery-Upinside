<div class="content home">
    <h1 class="location">Configurações<span><?php echo date('d/m/Y H:i');?></span></h1><!--/location-->
    
    <div class="configs">
    
        <ul class="abas_config">
            <li><a href="config_manutencao" class="active" title="Módulo de Manutenção">Módulo de Manutenção</a></li>
            <li><a href="config_email" title="E-mail de envio">Servidor de e-mail</a></li>
            <li><a href="config_seo" title="Otimizar Home">Otimizar Home</a></li>
        </ul><!--/navega-->
    
    
    	<!-- //FORM CONFIG MANUTENÇÃO -->
    	<form name="config_manutencao" class="first" action="" method="post">        
            <fieldset>
                <legend>Acesso ao site:</legend>
                <label>
                    <span class="field">Modo Manutenão: <strong style="color:red">ATIVO</strong></span>
                    <input type="submit" value="DESATIVAR MANUTENÇÃO" class="btn j_config_manutencao_no" /> 
                    <img src="img/loader.gif" class="load" alt="Carregando..." title="Carregando..." />
                </label>
                
                <label style="display:none;">
                    <span>Modo Manutenão: <strong style="color:green">INATIVO</strong></span>
                    <input type="submit" value="ATIVAR MANUTENÇÃO" class="btn j_config_manutencao_yes" /> 
                    <img src="img/loader.gif" class="load" alt="Carregando..." title="Carregando..." />
                </label>
            </fieldset>
        </form>
        
        
        
        <!-- //FORM SERVER MAIL -->
        <form name="config_email" action="" method="post">        
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
                    
                    <input type="submit" value="Testar Envio" class="btn teste j_config_email_teste" />
                    <input type="submit" value="Atualizar Dados" class="btn" /> 
                    <img src="img/loader.gif" class="load" alt="Carregando..." title="Carregando..." />           
            </fieldset>               
        </form>
        
        
        <!-- //FORM CONFIG SEO -->
        <form name="config_seo" action="" method="post">        
        <fieldset>
        	<legend>SEO/Social:</legend>
            	<label class="label">
        			<span class="field">Titulo:</span>
                    <input type="text" name="title" />                    
                </label>
                
                <label class="label">
        			<span class="field">Descrição:</span>
                    <textarea name="descricao" rows="5"></textarea>                 
                </label>
                
                <label class="label">
        			<span class="field">Facebook:</span>
                    <input type="text" name="facebook" />                    
                </label>
                
                <label class="label">
        			<span class="field">Twitter:</span>
                    <input type="text" name="twitter" />                    
                </label>  
                
                <input type="submit" value="Otimizar Site" class="btn" /> 
                <img src="img/loader.gif" class="load" alt="Carregando..." title="Carregando..." />          
        </fieldset>     
        </form>       
        
    </div><!--/configs -->

<div class="clear"></div><!-- /clear -->
</div><!-- /content -->