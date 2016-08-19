<?php
//IMAGEM
$metaImage = ($metaImage != '' ? BASE.'/uploads/'.$metaImage : BASE.'/tpl/images/siteavatar.png');

//SEO
$metaInfo = array(
	'title' 		=> SITENAME.' | Oppsss 404, não encontramos o que procura!',
	'description' 	=> SITEDESC,
	'url' 			=> BASE.'/404',
	'image'			 => $metaImage
);

//NORMAL PAGE
echo '<title>'.lmWord($metaInfo['title'],'70').'</title> ';
echo '<meta name="description" content="'.lmWord($metaInfo['description'],'160').'"/>';

//FACEBOOK
echo '<meta property="og:title" content="'.$metaInfo['title'].'" />';
echo '<meta property="og:url" content="'.$metaInfo['url'].'" />';
echo '<meta property="og:image" content="'.$metaInfo['image'].'" />';
echo '<meta property="og:site_name" content="'.SITENAME.'" />';
echo '<meta property="og:description" content="'.$metaInfo['description'].'" />';
echo '<meta property="og:locale" content="pt_BR" />';

//ITEM GROUP (TWITTER)
echo '<meta itemprop="name" content="'.$metaInfo['title'].'">';
echo '<meta itemprop="description" content="'.$metaInfo['description'].'">';
echo '<meta itemprop="url" content="'.$metaInfo['url'].'">';

//ROBOS AND FALLOW
echo '<meta name="robots" content="index, follow" />';
echo '<link rel="canonical" href="'.$metaInfo['url'].'">';
?>
</head>

<!--body -->
<body>

<?php 
	setArq('tpl/sidebars/modais');
	setArq('tpl/sidebars/pgheader');	
?> 

<div class="commentbox">
	<h3>Deixe seu comentário:</h3>
    <form name="addcomment" action="" method="post">
    	<label>
        	<span class="field">Nome:</span>
            <input type="text" name="nome">
        </label>
        <label>
        	<span class="field">E-mail:</span>
            <input type="text" name="email">
        </label>
        <label>
        	<span class="field">Diga:</span>
            <textarea name="comentario" rows="3"></textarea>
        </label>
        <input type="submit" value="Enviar Comentário" class="btn">
        <img class="imgload" src="<?php setHome();?>/tpl/images/loader2.gif" alt="Carregando..." title="Carregando...">
        <a href="#closecomment" class="closecomment" title="Fechar">X Fechar</a>
    </form>
</div><!-- /commentbox -->
  
<!-- BLOCO SITE GERAL HOME -->
<div id="site">
<div class="home single">

	<ul class="sidebar">
    
     	<li>
        	<h3>COMPARTILHE:</h3>
            <div class="content">           
                <ul class="social">
                    <li class="radius">
                        <div class="fb-like" 
                            data-href="http://www.upinside.com.br" 
                            data-send="false" 
                            data-layout="box_count"
                            data-show-faces="true">
                        </div>
                    </li>
                    
                    <li class="radius">
                        <a href="http://twitter.com/share" 
                        class="twitter-share-button" 
                        data-url="http://www.upinside.com.br" 
                        data-count="vertical" 
                        data-via="Conectese">Tweet</a>
                    </li>
                    
                    <li class="radius">
                        <g:plusone size="tall" href="http://www.upinside.com.br"></g:plusone>
                    </li>
                </ul><!-- /redes -->   
            </div><!-- /content -->
        </li>
        <li>
        	<h3>RELACIONADOS:</h3>
            <div class="content">
            	<ul class="related">
                <?php for($i=1;$i<=5;$i++):?>
                	<li <?php if($i%2==0) echo 'style="float:right;"';?>>
                        <img src="<?php setHome();?>/tim.php?src=/tpl/_gbt/<?php echo $i.'.jpg';?>&w=240&h=80&a=t" />
                        <a href="#">SHAEL SONNEN X SPIDDER, QUEM LEVA?</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque est in nunc tristique in varius enim ultricies.</p>
                    </li>
                 <?php endfor;?>
                </ul><!--/related -->
            </div><!-- /content -->
        </li>
        <li>
        	<h3>FACEBOOK:</h3>
            <div class="content" style="padding-bottom:30px;">
                    <div style="height:373px; width:232px; margin:0 4px; padding-bottom:6px; overflow:hidden;" class="fb-like-box" data-href="http://www.facebook.com/upinside" data-width="234" data-height="388" data-show-faces="true" data-border-color="white" data-stream="false" data-header="false"></div>            
            </div><!-- /content -->
        </li>
             
    </ul><!-- /sidebar -->
    
<div class="artigo">

    <h1>Shael Sonnen e Anderson Silva Spider se enfrentam no UFC.</h1>
	<img src="<?php setHome();?>/tim.php?src=/tpl/_tmp/08.png&w=<?php echo IMAGEW;?>">
    
    <div class="content">
        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque est in nunc tristique in varius enim ultricies.</h2>
        <p>In quis odio sit amet lectus porta blandit non at ante. Nam lobortis tempus odio, faucibus venenatis lorem consequat eget. <strong>Pellentesque mollis mi vitae neque scelerisque et posuere urna condimentum</strong>.  Vivamus pretium congue sapien, eget sodales nibh faucibus at. Sed viverra malesuada volutpat. Suspendisse potenti. Aliquam accumsan auctor urna et facilisis. Etiam consectetur purus in sapien condimentum sit amet fringilla elit ultricies.</p>
        <p>Vestibulum at arcu in lectus eleifend suscipit.<strong> Curabitur ornare, tortor eget facilisis luctus</strong>, erat nisi ultricies ipsum, vel interdum urna augue id nibh. Ut tincidunt suscipit dapibus. Aenean cursus, nisi interdum rhoncus suscipit, tellus velit vehicula risus, eget pulvinar erat eros vitae mi.</p>
		<h3>Phasellus bibendum, augue id euismod aliquam, turpis augue vulputate enim</h3>
        <p>Pellentesque mollis mi vitae neque scelerisque et posuere urna condimentum.  <a href="#">Vivamus pretium congue sapien</a>, eget sodales nibh faucibus at. Sed viverra malesuada volutpat. Suspendisse potenti. Aliquam accumsan auctor urna et facilisis. Etiam consectetur purus in sapien condimentum sit amet fringilla elit ultricies.</p>
       	<ul>
        	<li>Phasellus bibendum</li>
            <li>Nam lobortis tempus odio</li>
            <li>Vivamus pretium congue</li>
        </ul>
        <p>Vestibulum at arcu in lectus eleifend suscipit.<strong> Curabitur ornare, tortor eget facilisis luctus</strong>, erat nisi ultricies ipsum, vel interdum urna augue id nibh. Ut tincidunt suscipit dapibus. Aenean cursus, nisi interdum rhoncus suscipit, tellus velit vehicula risus, eget pulvinar erat eros vitae mi.</p>
		<img src="<?php setHome();?>/tim.php?src=/tpl/_tmp/07.png&w=700" width="800" height="300">
        <ol>
        	<li>Phasellus bibendum</li>
            <li>Nam lobortis tempus odio</li>
            <li>Vivamus pretium congue</li>
        </ol>
        <p>Vestibulum at arcu in lectus eleifend suscipit.<strong> Curabitur ornare, tortor eget facilisis luctus</strong>, erat nisi ultricies ipsum, vel interdum urna augue id nibh. Ut tincidunt suscipit dapibus. Aenean cursus, nisi interdum rhoncus suscipit, tellus velit vehicula risus, eget pulvinar erat eros vitae mi.</p>
        <iframe width="1280" height="720" src="http://www.youtube.com/embed/aQJdRBQfdbc?list=PL5BLgKKnpG2VWyfe99d9U3WGi-7_CNSnc" frameborder="0" allowfullscreen></iframe>
        <p>Vestibulum at arcu in lectus eleifend suscipit.<strong> Curabitur ornare, tortor eget facilisis luctus</strong>, erat nisi ultricies ipsum, vel interdum urna augue id nibh. Ut tincidunt suscipit dapibus. Aenean cursus, nisi interdum rhoncus suscipit, tellus velit vehicula risus, eget pulvinar erat eros vitae mi.</p>
       	
        <ul class="gallery">
        	<?php
            for($i=0;$i<=9;$i++):
				if($i%5==0): 	$w = '300'; $h = '320';
				else: 			$w = '150'; $h = '150';		endif;
				if($i%10==0):	$class = ''; else: $class = 'right'; endif;		
						
				echo '<li class="'.$class.'"><a href="'.BASE.'/tpl/_gbt/'.$i.'.jpg" rel="shadowbox[postId]" title=""><img src="'.BASE.'/tim.php?src=/tpl/_gbt/'.$i.'.jpg&w='.$w.'&h='.$h.'" alt="" title="Galeria de Shael Sonnen e Anderson Silva Spider se enfrentam no UFC"></a></li>';
			endfor;
			?>       	
        </ul><!--/gallery-->
        <div class="clear"></div><!-- /clear -->
        
        
    </div><!-- /content -->
    
    <div class="comments">
    	<h3>Comente isso!   <a class="radius opencomment" href="#comment">Comentar</a></h3>
        <ul class="commentlist">
        	<?php for($i=1;$i<=2;$i++):?>
        	<li class="li">
            	<div class="user">
            		<img class="radius" src="http://0.gravatar.com/avatar/4161e253b6b48b7bc34e7fbd5cdc232f?s=60&d=monsterid&r=G" title="">
                	<div class="info"><strong>por</strong> <span>ROBSON VIDALETTI LEITE</span> <strong>em</strong> <span>27/04/2013</span></div><!-- info -->
                </div><!--/user -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque est in nunc tristique in varius enim ultricies.</p>
                <p>In quis odio sit amet lectus porta blandit non at ante. Nam lobortis tempus odio, faucibus venenatis lorem consequat eget.  Vivamus pretium congue sapien, eget sodales nibh faucibus at. Sed viverra malesuada volutpat. Suspendisse potenti. Aliquam accumsan auctor urna et facilisis. Etiam consectetur purus in sapien condimentum sit amet fringilla elit ultricies.</p>
            </li><!--/li-->
            <?php endfor;?>
            
            
            <li class="li">
            	<div class="user">
            		<img class="radius" src="http://0.gravatar.com/avatar/4161e253b6b48b7bc34e7fbd5cdc232f?s=60&d=monsterid&r=G" title="">
                	<div class="info"><strong>por</strong> <span>ROBSON VIDALETTI LEITE</span> <strong>em</strong> <span>27/04/2013</span></div><!-- info -->
                </div><!--/user -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque est in nunc tristique in varius enim ultricies.</p>
                <p>In quis odio sit amet lectus porta blandit non at ante. Nam lobortis tempus odio, faucibus venenatis lorem consequat eget.  Vivamus pretium congue sapien, eget sodales nibh faucibus at. Sed viverra malesuada volutpat. Suspendisse potenti. Aliquam accumsan auctor urna et facilisis. Etiam consectetur purus in sapien condimentum sit amet fringilla elit ultricies.</p>
            	<div class="resposta">
                    <div class="user">
                        <img class="radius" src="http://0.gravatar.com/avatar/4161e253b6b48b7bc34e7fbd5cdc232f?s=40&d=monsterid&r=G" title="">
                        <div class="info"><strong>resposta de</strong> <span>ROBSON VIDALETTI LEITE</span> <strong>em</strong> <span>27/04/2013</span></div><!-- info -->
                    </div><!--/user -->
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque est in nunc tristique in varius enim ultricies.</p>
               			 <p>In quis odio sit amet lectus porta blandit non at ante. Nam lobortis tempus odio, faucibus venenatis lorem consequat eget.  Vivamus pretium congue sapien, eget sodales nibh faucibus at. Sed viverra malesuada volutpat. Suspendisse potenti. Aliquam accumsan auctor urna et facilisis. Etiam consectetur purus in sapien condimentum sit amet fringilla elit ultricies.</p>
            	</div><!--/resposta-->
            </li><!--/li-->
            
            
            <?php for($i=1;$i<=2;$i++):?>
        	<li class="li">
            	<div class="user">
            		<img class="radius" src="http://0.gravatar.com/avatar/4161e253b6b48b7bc34e7fbd5cdc232f?s=60&d=monsterid&r=G" title="">
                	<div class="info"><strong>por</strong> <span>ROBSON VIDALETTI LEITE</span> <strong>em</strong> <span>27/04/2013</span></div><!-- info -->
                </div><!--/user -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque est in nunc tristique in varius enim ultricies.</p>
                <p>In quis odio sit amet lectus porta blandit non at ante. Nam lobortis tempus odio, faucibus venenatis lorem consequat eget.  Vivamus pretium congue sapien, eget sodales nibh faucibus at. Sed viverra malesuada volutpat. Suspendisse potenti. Aliquam accumsan auctor urna et facilisis. Etiam consectetur purus in sapien condimentum sit amet fringilla elit ultricies.</p>
            </li><!--/li-->
            <?php endfor;?>
        </ul><!--/commentlist-->
    </div><!--/comments-->
        
</div><!-- /artigo -->
<div class="clear"></div><!-- /clear -->


</div><!-- /HOME GERAL -->  
</div><!-- #SITE -->   
  
<!-- FOOTER -->    
<div class="footer">
    <div class="content">
        <?php setArq('tpl/sidebars/pgmenu');?>                       
    </div><!-- /content -->
</div><!-- /#FOOTER -->

<script type="text/javascript" src="<?php setHome();?>/tpl/js/facebook.js"></script>
<script type="text/javascript" src="<?php setHome();?>/tpl/js/twitter.js"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">{lang: 'pt-BR'}</script>