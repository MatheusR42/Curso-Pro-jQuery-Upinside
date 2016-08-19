<?php require_once('../dts/configs.php');?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Painel de Controle | Curso Pro jQuery - Criando Interfaces</title>
<meta name="robots" content="noindex, nofollow" />

<link rel="stylesheet" type="text/css" href="css/painel.css" />
<link rel="stylesheet" type="text/css" href="css/pages.css" />
<link rel="stylesheet" type="text/css" href="../tpl/js/shadowbox/shadowbox.css" />
<link rel="stylesheet" type="text/css" href="../tpl/css/shadowcustom.css" />

<link href='http://fonts.googleapis.com/css?family=Dosis:200;400,600,800' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="../tpl/images/upico.png"/>

<script type="text/javascript" src="../jsc/jquery.js"></script>
<script type="text/javascript" src="../tpl/js/shadowbox/shadowbox.js"></script>
<script type="text/javascript" src="jsc/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="jsc/tiny_mce/plugins/tinybrowser/tb_tinymce.js.php"></script>

<script type="text/javascript" src="jsc/jquery.mask.js"></script>
<script type="text/javascript" src="jsc/estilo.js"></script>

</head>
<body>

<?php require_once('inc/modais.php');?>

<!-- HEADER -->
<div id="header">
	<div class="content">
    	<div class="logo"><img src="img/logopanel.png" alt="Painel de Controle" title="Painel de Controle" /></div><!--/logo-->
        
        <?php $acturl = explode('/',$_GET['exe']);?>
        
        
        <ul class="controle">
        	<li class="li"><a title="Painel Home" href="dashboard.php?exe=sis/home" class="home <?php if(in_array('home',$acturl)) echo 'active';?>">Home</a></li><!--/-->
            <li class="li"><a title="Posts" href="dashboard.php?exe=posts/index" class="post <?php if(in_array('posts',$acturl)) echo 'active';?>">Posts</a>
            	<ul class="submenu">
                	<li><a title="Gerenciar Posts" href="dashboard.php?exe=posts/index" class="ger <?php if(in_array('posts',$acturl)) echo 'active';?>">Gerenciar Posts</a></li>
                    <li><a title="Adicionar Novo" href="dashboard.php?exe=posts/novo" class="add j_addpost <?php if(in_array('posts',$acturl)) echo 'active';?>">Adicionar Novo</a></li>
                </ul><!--/submenu-->
            </li><!--/-->
            <li class="li"><a title="Categorias" href="dashboard.php?exe=categorias/index" class="cats <?php if(in_array('categorias',$acturl)) echo 'active';?>">Categorias</a>
            	<ul class="submenu">
                	<li><a title="Categorias" href="dashboard.php?exe=categorias/index" class="ger <?php if(in_array('categorias',$acturl)) echo 'active';?>">Gerenciar Categorias</a></li>
                    <li><a title="Adicionar Nova" href="dashboard.php?exe=categorias/nova" class="add j_addcat <?php if(in_array('categorias',$acturl)) echo 'active';?>">Adicionar Nova</a></li>
                </ul><!--/submenu-->
            </li><!--/-->
            <li class="li"><a title="Comentários" href="dashboard.php?exe=comentarios/index" class="coms <?php if(in_array('comentarios',$acturl)) echo 'active';?>">Comentários</a></li><!--/-->
            <li class="li"><a title="Categorias" href="dashboard.php?exe=usuarios/index" class="user <?php if(in_array('usuarios',$acturl)) echo 'active';?>">Usuários</a></li><!--/-->
            <li class="li"><a title="Categorias" href="dashboard.php?exe=sis/configuracoes" class="conf <?php if(in_array('configuracoes',$acturl)) echo 'active';?>">Configurar</a></li><!--/-->
            <li class="li"><a title="Categorias" href="dashboard.php?exe=exit" class="exit">Sair</a></li><!--/-->
        </ul><!--/controle-->
    
    <div class="clear"></div><!-- /clear -->
    </div><!-- /content -->
</div><!--/header-->