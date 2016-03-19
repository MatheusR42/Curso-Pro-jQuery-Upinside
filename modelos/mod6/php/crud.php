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
        
        if(in_array(empty($c),$c)){
            echo '1';
        }else{
            $c['senha'] = md5($c['code']);
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
    
    default :
        echo '2';
}
