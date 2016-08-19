<div class="content home">
    <h1 class="location"><strong>Editar Categoria:</strong> MMA.</span></h1><!--/location-->
    
	<div class="posts">
    	<form name="editcat" class="formfull" action="" method="post">

            <label class="label">
                <span class="field" style="font-size:30px; color:#ccc;">Sessão: VÍDEOS</span>
            </label>
        
        	<label class="label">
            	<span class="field">Categoria:</span>
        		<input type="text" name="titulo" value="" />
            </label>
            
            <label class="label">
             	<span class="field">Descrição:</span>
             	<textarea name="resumo" rows="2" style="resize:none"></textarea>
            </label>                     
             
             <label class="label">
             	<span class="field">Imagem de capa:</span>
                    <input type="file" class="j_capa" accept="image/*" />
                    <div class="j_false"></div>
                    <img src="img/upload.png" class="j_send" alt="Enviar Capa" title="Enviar Capa" />
                   
                    <div class="viewcapa">
                        <img src="tim.php?src=../tpl/_gbt/0.jpg&h=42" alt="Capa" title="Capa" />  
                        <a href="../tpl/_gbt/0.jpg" rel="shadowbox" title="Ver Capa">Ver Capa</a>
                    </div><!--viewcapa-->                                
             </label>
             
             <div class="progress"><div class="bar">22%</div></div>
                          
             <label class="label">
            	<span class="field">Data:</span>
        		<input type="text" class="formDate" name="data" value="<?php echo date('d/m/Y H:i:s');?>" />
            </label>
            
            
            <input type="submit" value="Atualizar Categoria" class="btn" />     
            
        </form>
	</div><!--/posts -->

<div class="clear"></div><!-- /clear -->
</div><!-- /content -->