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

    if(!$titulo || !$descricao){

      echo 'preencha todos os campos';

    }else{

      $pasta = '../uploads/';
      if(!file_exists($pasta)) mkdir($pasta,0755);

      if($arquivo['tmp_name']){
        $extencao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
        $filename = md5(time()).'.'.$extencao;

        $imagem = array('jpg','jpeg', 'gif','png');
        $video = array('mp4', 'avi', '3gp', 'flv', 'wmv', 'mov');

        if(in_array($extencao,$imagem)):
          $pasta = $pasta.'images/';
          $tipo = 'image';
        elseif(in_array($extencao, $video)):
          $pasta = $pasta.'videos/';
          $tipo = 'video';
        else:
          $pasta = $pasta.'arquivos/';
          $tipo = 'arquivo';
        endif;

        if(!file_exists($pasta)) mkdir($pasta,0755);

        if(move_uploaded_file($arquivo['tmp_name'], $pasta.$filename)){
          $imagem = $tipo.'s/'.$filename;
          date_default_timezone_set("America/Sao_Paulo");
          $data = date('Y-m-d H:i:s');
          $qr = "INSERT INTO mod7_imagens (titulo, descricao, tipo, imagem, data_cadastro)";
          $qr.= "VALUES('$titulo','$descricao','$tipo','$imagem', '$data')";

          $ex = mysqli_query($link, $qr) or die(mysqli_error($link));
          echo '1';

        }else{
          echo 'Erro ao enviar arquivo';
        }

      }else{
        echo 'Selecione um arquivo';
      }
    }
  break;

  default:
    echo "Erro, arquivo muito grande ou não compativel";

}
