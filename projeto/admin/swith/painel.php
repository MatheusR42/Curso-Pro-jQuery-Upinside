<?php
ob_start();
session_start();
require_once('../../dts/configs.php');

$acao = mysqli_real_escape_string($conn, $_POST['acao']);

switch($acao){
    case '':
       
    break;
    default:
        echo 'error';
}

ob_end_flush();