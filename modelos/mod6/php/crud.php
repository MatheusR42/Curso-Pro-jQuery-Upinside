<?php
require_once 'conexao.php';

sleep(1);
switch ($_POST['acao']){
    case 'cadastro':
        //print_r($_POST);
        
        
        $c['nome'] =            mysqli_real_escape_string( $link,  $_POST['nome']);
        $c['sobrenome'] =       mysqli_real_escape_string( $link,  $_POST['sobrenome']);
        $c['email'] =           mysqli_real_escape_string( $link,  $_POST['email']);
        $c['telefone'] =        mysqli_real_escape_string( $link,  $_POST['telefone']);
        $c['code'] =            mysqli_real_escape_string( $link,  $_POST['senha']);
        
        if(in_array("",$c)){
            echo '1';
        }else{
            $c['senha'] = md5($c['code']);
            date_default_timezone_set("America/Sao_Paulo");
            $c['data_cadastro'] = date('Y-m-d H:i:s');
            
            $campos = implode(', ', array_keys($c));
            $values =  "'".implode("', '", array_values($c))."'";
            
            //print_r($c);
            //echo $values.'<br>'.$campos;
            
            $qr = "INSERT INTO mod6_clientes(".$campos.") VALUES(".$values.")";
            
            $st = mysqli_query($link, $qr) or die ('2');
            if(!empty($st)){
                echo $c['nome'].' '.$c['sobrenome'];
            }else{
                echo '2';
            }
        }
        
    break;
    
    case 'ler':
        $offset = $_POST['offset'];
        $limit = $_POST['limit'];

        $qr = "SELECT * FROM mod6_clientes ORDER BY nome ASC LIMIT $offset,$limit";
        $ex = mysqli_query($link, $qr) or die (mysqli_error());
        if(mysqli_num_rows($ex) >= 1){
            
            while($res = mysqli_fetch_assoc($ex)):
                echo '<li class="J_'.$res['id'].'">';
                    echo '<h3>'.$res['nome'].' '.$res['sobrenome'].'</h3>';
                    echo '<div class="contatos">';
                        echo '<div class="email"><a href="mailto:'.$res['email'].'">'.$res['email'].'</a></div>';
                        echo '<div class="telefone">'.$res['telefone'].'</div>';
                    echo '</div><!-- /contatos -->';
                    echo '<div class="manage">';
                        echo '<div class="btnaction edit j_edit"><img src="img/edit.png" alt="Editar" title="Editar" /></div>';
                        echo '<div id="'.$res['id'].'" class="btnaction delete j_delete"><img src="img/delete.png" alt="Excluir" title="Excluir" /></div>';
                    echo '</div><!-- /manage -->';
                echo '</li>';
            endwhile;
        }else{
            echo "3";
        }
    break;

    case 'deletar':
        $delid = $_POST['del'];
        $qr = "DELETE FROM mod6_clientes WHERE id = $delid";
        $ex = mysqli_query($link, $qr);

        # code...
        break;
    default :
        echo '2';
}
