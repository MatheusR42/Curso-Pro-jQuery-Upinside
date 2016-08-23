<?php
ob_start();
session_start();
require_once('../../dts/configs.php');

$acao = mysqli_real_escape_string($conn, $_POST['acao']);

switch($acao){
    case 'login':
        $login = mysqli_real_escape_string($conn, $_POST['login']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        if(!trim($login) || !$pass){
            echo '0';
        }else{
            $readUser = read('usuarios', "WHERE login = '$login' AND senha = '$pass' ");
            if($readUser):
                foreach($readUser as $userLogin);
                $_SESSION['userlogin'] = $userLogin;
                echo '1';
            else:
                echo '2';
            endif;
        }
    break;
    default:
        echo 'error';
}

ob_end_flush();