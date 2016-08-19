<div class="content home">
    <h1 class="location"><strong>Editar Post:</strong> Shael Sonnen e Anderson Silva Spider se enfrentam no UFC.</h1><!--/location-->
    
	<div class="posts">
    	<form name="editpost" class="formfull" action="" method="post">
        
        	<label class="label">
            	<span class="field">Titulo do post:</span>
        		<input type="text" name="titulo" value="" />
            </label>
                      
            <label class="label">
                    <span class="field">Selecione a categoria:</span>
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
            	<span class="field">Vídeo:</span>
        		<input type="text" name="video" value="" />
            </label>
                          
             <label class="label tinymce">
             	<span class="field">Conteúdo:</span>
             	<textarea class="timeditor" name="conteudo" rows="10"></textarea>
             </label>
             
             <label class="label">
            	<span class="field">Data:</span>
        		<input type="text" class="formDate" name="data" value="<?php echo date('d/m/Y H:i:s');?>" />
            </label>
            
            <div class="galerry">           	
                
                <label class="label" style="margin:0;">
                	<span class="field">Galeria:</span>
                    <input type="file" class="j_gallery" multiple="multiple" accept="image/*" />
                    <div class="progress j_gprogress" style="width:320px; margin:0 0 10px 0;"><div class="bar" style="max-width:304px; width:22%; padding:8px;">22%</div></div>
                    <img src="img/upload.png" class="j_gsend" alt="Enviar Capa" title="Enviar Capa" style="margin-right:0;" />                              
             	</label>
                
            	<ul>
                	<?php for($i=1;$i<10;$i++):?>
                	<li>
                    	<a href="../tpl/_gbt/0.jpg" rel="shadowbox[gb22]" title="Ver Imagem"><img src="tim.php?src=../tpl/_gbt/0.jpg&w=148&h=90" /></a>
                        <a href="#delete" class="galerrydel" title="Excluir">X</a>
                    </li>
                    <?php endfor;?>
                </ul>
                
            </div><!--/gallery-->
            
            <input type="submit" value="Atualizar post" class="btn" />  
            <label class="check"><input type="checkbox" value="1" />Publicar Isto</label><!-- /check -->     
            
        </form>
	</div><!--/posts -->

<div class="clear"></div><!-- /clear -->
</div><!-- /content -->