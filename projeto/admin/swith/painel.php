<?php
ob_start();
session_start();
require_once('../../dts/configs.php');

$acao = mysqli_real_escape_string($conn, $_POST['acao']);

switch($acao){
    case 'usuarios_cadastro':
        $u['nivel'] = mysqli_real_escape_string($conn, $_POST['nivel']);
        $u['nome'] = mysqli_real_escape_string($conn, $_POST['nome']);
        $u['login'] = mysqli_real_escape_string($conn, $_POST['login']);
        $u['email'] = mysqli_real_escape_string($conn, $_POST['email']);
        $u['senha'] = mysqli_real_escape_string($conn, $_POST['senha']);
        $u['cod'] = md5($u['senha']);
        $u['cadastro'] = date('Y-m-d:H:i:s');

         if(in_array('',array_map('trim', $u))){
            echo '0';
        }else if(!isMail($u['email'])){
            echo '1';
        }else if(read('usuarios', 'WHERE email="'.$u['email'].'"')){
            echo '2';
        }else if(read('usuarios', 'WHERE login="'.$u['login'].'"')){
            echo '3';
        }else{
            if(create('usuarios', $u)){
                echo $u['login'];
            }else{
                echo '4';
            }
        }   
        /*else if(){

        }else{
            update('config_mailserver', $f, "id = '1'");
            echo '1';
        }*/

        //print_r($u);
    break;
    case 'manutencaoDesativa':
       $dados =array('manutencao' => '0');
       update('config_manutencao', $dados, "manutencao= '1'");
    break;
    case 'manutencaoAtiva':
       $dados =array('manutencao' => '1');
       update('config_manutencao', $dados, "manutencao= '0'");
    break;
    case 'mailserver_atualiza':
        $f['email'] = mysqli_real_escape_string($conn, $_POST['email']);
        $f['senha'] = mysqli_real_escape_string($conn, $_POST['senha']);
        $f['porta']= mysqli_real_escape_string($conn, $_POST['porta']);
        $f['server'] = mysqli_real_escape_string($conn, $_POST['server']);
        
        if(in_array('',array_map('trim', $f))){
            echo '0';
        }else if(!isMail($f['email'])){
            echo '2';
        }else{
            update('config_mailserver', $f, "id = '1'");
            echo '1';
        }
    break;
    case 'mailserver_teste':
        $readEmailServer = read('config_mailserver');
        foreach($readEmailServer as $mail);
        $assunto = 'Teste Email';
        $mensagem = 'Seu servidor de e-mails foi configurado com sucesso. Parabéns.<br/><br/>Enviado em: '.date('d/m/Y H:i:s');
        $sendMail = sendMail($assunto,$mensagem,MAILUSER, SITENAME, MAILUSER, SITENAME);
        if($sendMail){
            echo $mail['email'];
        }else{
            echo 'error';
        }
    break;
    case 'seo_atualiza':
        $f['titulo'] = mysqli_real_escape_string($conn, $_POST['titulo']);
        $f['descricao'] = mysqli_real_escape_string($conn, $_POST['descricao']);
        $f['twitter'] = mysqli_real_escape_string($conn, $_POST['twitter']);
        $f['facebook'] = mysqli_real_escape_string($conn, $_POST['facebook']);
       
        if(in_array('',array_map('trim', $f))){
            echo '0';
        }else{
            update('config_sensorial', $f, "id = '1'");
            echo '1';
        }
    break;
    case 'atualizaEndtel':
        $f['endereco'] = mysqli_real_escape_string($conn, $_POST['endereco']);
        $f['telefone'] = mysqli_real_escape_string($conn, $_POST['telefone']);
       
        if(in_array('',array_map('trim', $f))){
            echo '0';
        }else{
            update('config_endtel', $f, "id = '1'");
            echo '1';
        }
    break;
    default:
        echo 'error';
}

ob_end_flush();