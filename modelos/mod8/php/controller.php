<?php
require('conexao.php');

$acao = ($_POST['acao'] ? $_POST['acao'] : $_GET['acao']);
$acao = mysqli_real_escape_string($link, $acao);

switch ($acao) {
  case 'completar':
    $search = mysqli_real_escape_string($link, $_GET['term']);
    $qr = "SELECT * FROM mod6_clientes WHERE nome LIKE '%$search%' GROUP BY nome ORDER BY nome ASC";
    $ex = mysqli_query($link, $qr) or die(mysqli_error($link));

    $aux = 0;
    $data = array();
    while($res = mysqli_fetch_assoc($ex)){
      $data[$aux] = $res['nome'];
    }
    echo json_encode($data);
  break;

  case 'pesquisar':
    $pesquisa = mysqli_real_escape_string($link, $_GET['valor']);
    $qr = "SELECT * FROM mod6_clientes WHERE nome LIKE '%$pesquisa%' ORDER BY nome ASC, sobrenome ASC";
    $ex = mysqli_query($link, $qr) or die(mysqli_error($link));
    if(mysqli_num_rows($ex) > 0){
      while($res = mysqli_fetch_assoc($ex)):
        echo '<li>';
          echo $res['nome']. ' '. $res['sobrenome'].' - <strong>'.$res['telefone'].'</strong>';
        echo '</li>';
      endwhile;
    }else{
      echo '<li style="color:#900">Nada encontrado</li>';
    }
  break;
  default:
    echo 'selecione uma acao';


}
