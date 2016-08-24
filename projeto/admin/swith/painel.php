<?php
ob_start();
session_start();
require_once('../../dts/configs.php');

$acao = mysqli_real_escape_string($conn, $_POST['acao']);

switch($acao){
    case 'manutencaoDesativa':
       $dados =array('manutencao' => '0');
       update('config_manutencao', $dados, "manutencao= '1'");
    break;
    case 'manutencaoAtiva':
       $dados =array('manutencao' => '1');
       update('config_manutencao', $dados, "manutencao= '0'");
    break;
    default:
        echo 'error';
}

ob_end_flush();