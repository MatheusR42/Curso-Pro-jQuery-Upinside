<div class="content home">
    <h1 class="location">Gerenciar Categorias <span><?php echo date('d/m/Y H:i');?></span></h1><!--/location-->
    
	<div class="posts">
    	<div class="paginator">
        	<img src="img/loader.gif" alt="Carregando..." title="Carregando..." />
        	<form name="searchpost" action="" method="post">
            	<input type="text" name="sposts" value="Pesquisar Categorias:" />
                <input type="submit" value="Buscar" class="btn" />
            </form>
        	<a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <span class="atv">4</span>
            <a href="#">5</a>
            <a href="#">6</a>
        </div><!-- /paginator -->
        
        
        <ul class="content catli">
        	<?php for($i=1;$i<=2;$i++):?>
        	<li class="li">
            	<img src="../tim.php?src=tpl/_gbt/1.jpg&w=120&h=120" />
                <div class="info" style="width:636px;">
               		<p class="title">Vídeos</p>
                	<p class="resumo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque est in nunc tristique in varius enim ultricies.</p>
           			<p class="categoria">04-05-2013 16:28</p>
                	<span>
                        <a title="Excluir" class="delete" href="#excluir">Excluir</a> 
                        <a title="Editar" class="edit" href="#edit">Editar</a>  
                        <a title="Ver" class="ver" href="#excluir">Ver</a>                    
                    </span>
            	</div><!--/info-->
                <ul class="sub">
                	<li><strong>1280</strong> artigos</li>
                    <li><strong>4</strong> subcategorias</li>
                </ul>
            </li>
            	<?php for($o=1;$o<=5;$o++):?>
                    <li class="li subli">
                        <img src="../tim.php?src=tpl/_gbt/1.jpg&w=120&h=120" />
                        <div class="info" style="width:636px;">
                            <p class="title">VÍDEOS &raquo; MMA</p>
                            <p class="resumo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque est in nunc tristique in varius enim ultricies.</p>
                            <p class="categoria">04-05-2013 16:28</p>
                            <span>
                                <a title="Excluir" class="delete" href="#excluir">Excluir</a> 
                                <a title="Editar" class="edit" href="#edit">Editar</a>  
                                <a title="Ver" class="ver" href="#excluir">Ver</a>                    
                            </span>
                        </div><!--/info-->
                        <ul class="sub">
                            <li><strong>1280</strong> artigos</li>
                            <li><strong>4</strong> subcategorias</li>
                        </ul>
                    </li>
                <?php endfor;?>
            <?php endfor;?>
        </ul><!--/content-->
        
        
        <div class="paginator">
            <img src="img/loader.gif" alt="Carregando..." title="Carregando..." />
            <form name="searchpost" action="" method="post">
            	<input type="text" name="sposts" value="Pesquisar Categoria:" />
                <input type="submit" value="Buscar" class="btn" />
            </form>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <span class="atv">4</span>
            <a href="#">5</a>
            <a href="#">6</a>
        </div><!-- /paginator -->
	</div><!--/posts -->

<div class="clear"></div><!-- /clear -->
</div><!-- /content -->