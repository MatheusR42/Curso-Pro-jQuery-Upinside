<?php 
if(function_exists('myAut')):
	myAut();
else:
	header('Location: ../dashboard.php');
	die;
endif;
?>
<div class="content home">
    <h1 class="location">Oppsss. Acesso restrito! <span><?php echo date('d/m/Y H:i');?></span></h1><!--/location-->
    
	<div class="erronotfound">
    	<h2>Oppsss, a tárefa que você está tentando executar não existe. Favor utilize o menu para navegar no sistema!</h2>
        <span><strong>Oppsss. Erro 403</strong>Acesso negado!</span>
    </div><!--404-->

<div class="clear"></div><!-- /clear -->
</div><!-- /content -->