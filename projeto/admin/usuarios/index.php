<?php 
if(function_exists('myAut')):
	myAut('1');
else:
	header('Location: ../dashboard.php');
	die;
endif;
?>
<div class="content home">
    <h1 class="location">Gerenciar Usuários<span><a href="#" class="j_adduser" title="voltar">Novo usuário</a></span></h1><!--/location-->
    
    <div class="usuarios">
    
    	<ul class="users">
        	<?php 
                $readUser = read('usuarios', 'ORDER BY nome ASC');
                foreach ($readUser as $user):
                    echo '<li id="'.$user['id'].'">';
                        $atts = array('class' => 'avatar','title' => $user['nome'], 'alt' =>  $user['nome']); 
                        echo get_gravatar($user['email'], $s = 180, $d = 'mm', $r = 'g', $img = true, $atts);
                        echo '<span class="nome">'.$user['nome'].'</span>';
                        echo '<span class="nivel">';
                            echo ($user["nivel"] == 1) ? "Super admin" : "Admin"; 
                        echo '</span>';
                        echo '<span class="data">Cadastro: '.date('d/m/Y', strtotime($user['cadastro'])).'</span>';
                        echo '<div class="manage">';
                            echo '<a class="edit j_userEdit" href="#editar">Editar</a>';
                            echo '<a class="dell j_userDelete" href="#excluir">Excluir</a>';
                        echo '</div>';
                    echo '</li>';
                endforeach;
            ?>
        </ul><!--/users-->
        
    </div><!--/usuarios -->

<div class="clear"></div><!-- /clear -->
</div><!-- /content -->