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