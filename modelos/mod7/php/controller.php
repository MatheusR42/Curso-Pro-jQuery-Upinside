<?php

//$up = get_meta_tags('http://www.upinside.com.br');
//print_r($up);


//print_r($_POST);
//print_r($_FILES);

require_once 'conexao.php';

switch($_POST['acao']){

  case 'cadastro':
    //print_r($_POST);
    //print_r($_FILES);
    $titulo =  mysqli_real_escape_string( $link,  $_POST['titulo']);
    $descricao = mysqli_real_escape_string( $link,  $_POST['descricao']);
    $arquivo = $_FILES['arquivo'];
    $pasta = '../uploads/';
    if(!file_exists($pasta)) mkdir($pasta,0755);

    if($arquivo['tmp_name']){
      $extencao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
      $filename = md5(time()).'.'.$extencao;

      if(move_uploaded_file($arquivo['tmp_name'], $pasta.$filename)){
        echo 'Arquivo enviado com sucesso!';
      }else{
        echo '1';
      }

    }else{
      echo '2';
    }
  break;

  default:
    echo "Erro ao enviar";

}
