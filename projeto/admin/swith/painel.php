<?php
ob_start();
session_start();
require_once('../../dts/configs.php');

$acao = mysqli_real_escape_string($conn, $_POST['acao']);

switch($acao){
    case 'categoria_cadastro':
        $c['categoria'] = mysqli_real_escape_string($conn, $_POST['categoria']);
        if(!$c['categoria']){
            echo '0';
        }else{
            $readIsset = read('categorias', "WHERE categoria = '$c[categoria]'");
            if($readIsset){
                echo 'errIsset';
            }else{
                if($_POST['sessao']){
                    $c['sessao'] = mysqli_real_escape_string($conn, $_POST['sessao']);
                }
                $c['cadastro'] = date('Y-m-d H:i:s');
                create('categorias', $c);
                echo mysqli_insert_id($conn);
            }
        }
    break;

    case 'user_read':
        $userId = mysqli_real_escape_string($conn, $_POST['userId']);
        $readUser = read('usuarios', "WHERE id = '$userId'");
        echo json_encode( $readUser );
    break;

    case 'user_update':
        $u['id'] = mysqli_real_escape_string($conn, $_POST['id']);
        $u['nivel'] = mysqli_real_escape_string($conn, $_POST['nivel']);
        $u['nome'] = mysqli_real_escape_string($conn, $_POST['nome']);
        $u['login'] = mysqli_real_escape_string($conn, $_POST['login']);
        $u['email'] = mysqli_real_escape_string($conn, $_POST['email']);
        $u['senha'] = mysqli_real_escape_string($conn, $_POST['senha']);
        $u['cod'] = md5($u['senha']);

        if(in_array('',array_map('trim', $u))){
            echo '0';
        }else if(!isMail($u['email'])){
            echo '1';
        }else if(read('usuarios', "WHERE id != '$u[id]' AND email= '$u[email]'")){
            echo '2';
        }else if(read('usuarios', "WHERE id != '$u[id]' AND login = '$u[login]'")){
            echo '3';
        }else{
            if(update('usuarios', $u,"id = $u[id]")){
                echo $u['login'];
            }else{
                echo '4';
            }
        }   
    break;

    case 'user_create':
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
    break;

    case 'user_delete':
        $u['deleteId'] = mysqli_real_escape_string($conn, $_POST['deleteId']);
        $u['idAtual'] = mysqli_real_escape_string($conn, $_POST['idAtual']);
        $readUser = read('usuarios', "WHERE id= $u[deleteId]");
        foreach($readUser as $readUser);
        if($readUser['nivel'] != '1'){
            delete('usuarios', "id=$u[deleteId]");
            echo '1';
        }else{
            $readSuper = read('usuarios', "WHERE nivel='1'");
            if($u['deleteId'] == $u['idAtual']) {
                echo 'autoDelete';
            }else{
                delete('usuarios', "id=$u[deleteId]");
                echo '1';
            }
        }               
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