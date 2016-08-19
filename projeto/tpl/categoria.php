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
  
<!-- BLOCO SITE GERAL HOME -->
<div id="site">
<div class="home">

<!-- BLOCO UM - h1. h2. Img Topo -->
<div class="bloco_um">

    <h1>Categoria!</h1>
    <h2>Veja aqui artigos relacionados a categoria listada neste. Conteúdo de primeira você encontra aqui no <?php SITENAME;?></h2>

    <div class="capa">
       	<img src="<?php setHome();?>/tpl/_tmp/categoria.png" />
    </div><!-- /capa -->
        
</div><!-- /BLOCO UM -->
<div class="clear"></div><!-- /clear -->

<div class="categorias">
    
    <ul>
		<?php for($i=1;$i<=12;$i++):?>
        <li<?php if($i%4==0) echo ' style="float:right; margin-right:0"';?>>
            <img src="<?php setHome();?>/tpl/_tmp/04.png" width="220" />
            <div class="licontent">
                <a href="<?php setHome();?>/ver">SHAEL SONNEN X SPIDDER, QUEM LEVA?</a>
            </div><!-- /content -->
        </li>
        <?php endfor;?>    
    </ul>
    
    <div class="clear"></div><!-- /clear -->
    
    <div class="paginator">
        <a href="#">Primeira</a>
        <span class="atv">1</span>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">Última</a>
    </div><!-- /paginator -->
    
</div><!--/categorias-->

<div class="clear"></div><!--/clear-->
</div><!-- /HOME GERAL -->  
</div><!-- #SITE -->   
  
<!-- FOOTER -->    
<div class="footer">
    <div class="content">
        <?php setArq('tpl/sidebars/pgmenu');?>                       
    </div><!-- /content -->
</div><!-- /#FOOTER -->