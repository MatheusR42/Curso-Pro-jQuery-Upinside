<?php 
if(function_exists('myAut')):
	myAut('1');
else:
	header('Location: ../dashboard.php');
	die;
endif;
?>
<div class="content home">
    <h1 class="location">Gerenciar Usuários<span><a href="#novousuario" class="j_adduser" title="voltar">Novo usuário</a></span></h1><!--/location-->
    
    <div class="usuarios">
    
    	<ul class="users">
        	<?php for($e=1;$e<=3;$e++):?>
        	<li>
                <?php
                    $atts = array(
                        'class' => 'avatar',
                        'title' => 'Robson Leite',
                        'alt' => 'Robson Leite'
                    ); 
                    echo get_gravatar('campus@upinside.com.br', $s = 180, $d = 'mm', $r = 'g', $img = true, $atts);
                ?>
                <span class="nome">Robson Vidaletti Leite</span>
                <span class="nivel">Super Admin</span>
                <span class="data">Cadastrado em: 16/05/2013</span>
                <div class="manage">
                	<a class="edit" href="#editar">Editar</a>
                    <a class="dell" href="#excluir">Excluir</a>
                </div><!--/manage-->
            </li>
            <?php endfor;?> 
        </ul><!--/users-->
        
    </div><!--/usuarios -->

<div class="clear"></div><!-- /clear -->
</div><!-- /content -->