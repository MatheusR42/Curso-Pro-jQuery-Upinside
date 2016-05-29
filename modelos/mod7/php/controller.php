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

      echo 'Preencha todos os campos';

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

  case 'ler':
    $tipo = mysqli_real_escape_string($link, $_POST['tipo']);
    $tipo = ($tipo == 'arquivos' ? 'arquivo' :
        ($tipo == 'imagens' ? 'image' :
        ($tipo == 'videos' ? 'video' : '')));

    if($tipo): $where = "WHERE tipo = '$tipo'"; endif;

    $qr = "SELECT * FROM mod7_imagens {$where} ORDER BY data_cadastro DESC";
    $ex = mysqli_query($link, $qr) or die (mysqli_error($link));

    while($res = mysqli_fetch_assoc($ex)):
      $conta++;
      $imagem = ($res['tipo'] == 'image' ? 'tim.php?src=uploads/'.$res['imagem'].'&w=273&h=120&a=t' :
            ($res['tipo'] == 'arquivo' ? 'img/filethumb.jpg' : 'img/videothumb.jpg'));

      echo '<li class="file j_'.$res['id']; if($conta%3==0) echo ' right'; echo '">';
        echo '<img src="'.$imagem.'" alt="Baixar arquivo" title="Baixar Arquivo" width="273" height="120" />';
        echo '<h2>'.$res['titulo'].'</h2>';
        echo '<p class="desc">'.$res['descricao'].'</p>';
        echo '<p class="data">Enviado em: '.date('d/m/Y',strtotime($res['data_cadastro'])).' às '.date('H:i',strtotime($res['data_cadastro'])).'h</p>';

        echo '<a href="uploads/'.$res['imagem'].'"';

          if($res['tipo'] == 'video'){
            $extencao = pathinfo($res['imagem'], PATHINFO_EXTENSION);
            if($extencao != 'mov'){
              echo 'rel="shadowbox;player=flv;width=853;height=480"';
              echo '>ABRIR</a>';
            }else{
              //echo 'rel="shadowbox;player=iframe;width=853;height=480"  target="_blank" download';
              echo ' target="_blank"  download';
              echo '>DOWNLOAD</a>';
            }
          }else{
            if($res['tipo'] == 'image') echo 'rel="shadowbox"';
            echo '>ABRIR</a>';
          }


        echo '<div class="manage">';
          echo '<a class="actionedit" href="'.$res['id'].'"><img src="img/edit.png" alt="" title="" /></a>';
          echo '<a class="actiondelete" href="'.$res['id'].'"><img src="img/delete.png" alt="" title="" /></a>';
        echo '</div>';
      echo '</li>';
    endwhile;



  break;

  case 'deletar':
    $delid =  $_POST['deleteid'];

    $qr = "SELECT * FROM mod7_imagens WHERE id = '$delid'";

    $ex = mysqli_query($link, $qr) or die (mysqli_error($link));
    $st = mysqli_fetch_assoc($ex);

    $basepach = '../uploads/';
    if(file_exists($basepach.$st['imagem']) && !is_dir($basepach.$st['imagem'])){
      unlink($basepach.$st['imagem']);
    }


    $qr = "DELETE FROM mod7_imagens WHERE id = '$delid'";
    $ex = mysqli_query($link, $qr) or die (mysqli_error($link));



  break;
  default:
    echo "Erro, arquivo muito grande ou não compativel";

}
