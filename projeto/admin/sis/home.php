<div class="content home">
    <h1 class="location">Painel Home <span><?php echo date('d/m/Y H:i');?></span></h1><!--/location-->
    
    <div class="left">
    
        <div class="boxleft estatisticas">
            <h3>Estatísticas totais:</h3>
            <div class="content">
            
                <ul class="views">
                    <li class="visitas">12290<small>visitas</small></li><!--/visitas-->
                    <li class="users">890<small>usuários</small></li><!--/visitantes-->
                    <li class="media right">3.4<small>pageviews</small></li><!--/pageviews-->
                </ul><!--/views-->
                
                <ul class="conteudo">
                    <li class="topic">890<small>posts</small></li><!--/artigos-->
                    <li class="comment">1280<small>comentários</small></li><!--/comentários-->
                    <li class="cats">10<small>categorias</small></li><!--/categorias-->
                </ul><!--/views-->
                
            </div><!--/content-->
        </div><!--/estatisticas-->
        
        
        <div class="boxleft trafego">
            <h3>Tráfego por mês: <a href="dashboard.php?exe=sis/trafego">Tráfego</a></h3>
            <div class="content">
                <ul class="relatorio">
                    <li class="title">
                        <span class="date">Mês/Ano</span>
                        <span class="views">Visitas</span>
                        <span class="users">Usuários</span>
                        <span class="pages">PageViews</span>
                    </li>
                    <?php for($i=1;$i<=6;$i++):?>
                    <li<?php if($i%2==0) echo ' class="color"';?>>
                        <span class="date"><strong>04/2013</strong></span>
                        <span class="views">1890</span>
                        <span class="users">1190</span>
                        <span class="pages">2.8</span>
                    </li>
                    <?php endfor;?>
                </ul><!--/relatorio-->
            </div><!--/content-->
        </div><!--/estatisticas-->
    
    </div><!--/left-->
    
    
    <div class="comments boxleft">
        <h3>Comentários: <a title="Comentários" href="dashboard.php?exe=comentarios/home">MODERAR</a></h3>
        <div class="content">
            <ul class="comentarios">
                <?php for($i=1;$i<=3;$i++):?>
                    <li class="pendente">
                        <img src="http://0.gravatar.com/avatar/4161e253b6b48b7bc34e7fbd5cdc232f?s=60&d=monsterid&r=G" />
                        <div class="commentitem">
                            <span>De <strong>Robson V. Leite</strong> sobre <strong>Shael Sonnen e Anderson Silva Spider...</strong>.</span>	
                            <p>In quis odio sit amet lectus porta blandit non at ante. Nam lobortis tempus odio, faucibus venenatis lorem consequat eget.</p>
                        </div><!--/commentitem-->
                    </li>
                <?php endfor;?>
                <?php for($i=1;$i<=2;$i++):?>
                    <li>
                        <img src="http://0.gravatar.com/avatar/4161e253b6b48b7bc34e7fbd5cdc232f?s=60&d=monsterid&r=G" />
                        <div class="commentitem">
                            <span>De <strong>Robson V. Leite</strong> sobre <strong>Shael Sonnen e Anderson Silva Spider...</strong>.</span>	
                            <p>In quis odio sit amet lectus porta blandit non at ante. Nam lobortis tempus odio, faucibus venenatis lorem consequat eget.</p>
                        </div><!--/commentitem-->
                    </li>
                <?php endfor;?>
            </ul><!--/comentários-->
        </div><!--/content-->
    </div><!--/ comments -->

<div class="clear"></div><!-- /clear -->
</div><!-- /content -->