<?php
require('conexao.php');

$search = mysqli_real_escape_string($link, $_GET['term']);
$qr = "SELECT * FROM mod6_clientes WHERE nome LIKE '%$search%' ORDER BY nome ASC";
$ex = mysqli_query($link, $qr) or die(mysqli_error($link));


/* PROFESSOR METHOD
$resJson = '[';
$first = true;
//["Upinside", "Campus", "Curso", "PRO"]
while($res = mysqli_fetch_assoc($ex)):

	if(!$first):
		$resJson .= ', ';
	else:
		$first = false;
	endif;

	$resJson .= json_encode($res['nome']);

endwhile;

$resJson .= ']';

echo $resJson;
*/

//MY METHOD
$aux = 0;
$data = array();
while($res = mysqli_fetch_assoc($ex)){
  $data[$aux] = $res['nome'];
}
echo json_encode($data);
 ?>
