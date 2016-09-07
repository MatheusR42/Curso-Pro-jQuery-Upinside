<?php
/*****************************
FUNÇÃO DO PRO PHP
FAZ A NAVEGAÇÃO AMIGÁVEL
*****************************/
function getHome(){
	$url = $_GET['url'];
	$url = explode('/', $url);
	$url[0] = ($url[0] == NULL ? 'index' : $url[0]);
	
		if(file_exists('tpl/'.$url[0].'.php')){
			 require_once('tpl/'.$url[0].'.php');
		}elseif(file_exists('tpl/'.$url[0].'/'.$url[1].'.php')){
			 require_once('tpl/'.$url[0].'/'.$url[1].'.php');
		}else{
			 require_once('tpl/404.php');
		}
}
/*****************************
FUNÇÃO DO PRO PHP
SETA URL DA HOME
*****************************/
function setHome(){
	echo BASE;	
}
/*****************************
FUNÇÃO DO PRO PHP
INCLUE ARQUIVOS
*****************************/
function setArq($nomeArquivo){
	if(file_exists($nomeArquivo.'.php')){
		include($nomeArquivo.'.php');
	}else{
		echo 'Erro ao incluir <strong>'.$nomeArquivo.'.php</strong>, arquivo ou caminho não conferem!';	
	}
}
/*****************************
FUNÇÃO DO PRO PHP
GERA RESUMOS
*****************************/
function lmWord($string, $words = '100'){
	$string 	= strip_tags($string);
	$count		= strlen($string);
	
	if($count <= $words){
		return $string;	
	}else{
		$strpos = strrpos(substr($string,0,$words),' ');
		return substr($string,0,$strpos).'...';
	}
	
}
/*****************************
FUNÇÃO DO PRO PHP
TRANFORMA STRING EM URL
*****************************/
function setUri($string){
	$a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
	$b = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';	
	$string = utf8_decode($string);
	$string = strtr($string, utf8_decode($a), $b);
	$string = strip_tags(trim($string));
	$string = str_replace(" ","-",$string);
	$string = str_replace(array("-----","----","---","--"),"-",$string);
	return strtolower(utf8_encode($string));
}
/*****************************
FUNÇÃO DO PRO PHP
SOMA VISITAS
*****************************/	
function setViews($topicoId){
	$topicoId = mysql_real_escape_string($topicoId);
	$readArtigo = read('up_posts',"WHERE id = '$topicoId'");
	
	foreach($readArtigo as $artigo);
		$views = $artigo['visitas'];
		$views = $views +1;
		$dataViews = array(
			'visitas' => $views
		);
		update('up_posts',$dataViews,"id = '$topicoId'");
}
/*****************************
FUNÇÃO DO PRO PHP
FUNÇÃO DE CADASTRO NO BANCO
*****************************/
function create($tabela, array $datas){
	$fields = implode(", ",array_keys($datas));
	$values = "'".implode("', '",array_values($datas))."'";			
	$qrCreate = "INSERT INTO {$tabela} ($fields) VALUES ($values)";
	$stCreate = mysql_query($qrCreate) or die ('Erro ao cadastrar em '.$tabela.' '.mysql_error());
	
	if($stCreate){
		return true;
	}
}	
/*****************************
FUNÇÃO DO PRO PHP
FUNÇÃO DE LEITURA NO BANCO
*****************************/
/*function read($tabela, $cond = NULL){		
	$qrRead = "SELECT * FROM {$tabela} {$cond}";
	$stRead = mysql_query($qrRead) or die ('Erro ao ler em '.$tabela.' '.mysql_error());
	$cField = mysql_num_fields($stRead);
	for($y = 0; $y < $cField; $y++){
		$names[$y] = mysql_field_name($stRead,$y);
	}
	for($x = 0; $res = mysql_fetch_assoc($stRead); $x++){
		for($i = 0; $i < $cField; $i++){
			$resultado[$x][$names[$i]] = $res[$names[$i]];
		}
	}
	return $resultado;
}*/

function read($tabela, $cond = NULL){
	global $conn;
	$qrRead = "SELECT * FROM {$tabela} {$cond}";
	$stRead = mysqli_query($conn, $qrRead) or die ('Erro ao ler em '.$tabela.' '.mysqli_error());
	$cField = mysqli_num_fields($stRead);
	$i = 0;
	while ($property = mysqli_fetch_field($stRead)) {
		$names[$i] = $property->name;
		$i++;
	}
	for($x = 0; $res = mysqli_fetch_assoc($stRead); $x++){
		for($i = 0; $i < $cField; $i++){
			$resultado[$x][$names[$i]] = $res[$names[$i]];
		}
	}
	return $resultado;
}

/*****************************
FUNÇÃO DO PRO PHP
FUNÇÃO DE EDIÇÃO NO BANCO
*****************************/	
/*function update($tabela, array $datas, $where){
	foreach($datas as $fields => $values){
		$campos[] = "$fields = '$values'";
	}
	
	$campos = implode(", ",$campos);
	$qrUpdate = "UPDATE {$tabela} SET $campos WHERE {$where}";
	$stUpdate = mysql_query($qrUpdate) or die ('Erro ao atualizar em '.$tabela.' '.mysql_error());

	if($stUpdate){
		return true;	
	}
	
}	*/

function update($tabela, array $datas, $where){
	global $conn;
	foreach($datas as $fields => $values){
		$campos[] = "$fields = '$values'";
	}
	
	$campos = implode(", ",$campos);
	$qrUpdate = "UPDATE {$tabela} SET $campos WHERE {$where}";
	$stUpdate = mysqli_query($conn, $qrUpdate) or die ('Erro ao atualizar em '.$tabela.' '.mysqli_error());

	if($stUpdate){
		return true;	
	}
	
}

/*****************************
FUNÇÃO DO PRO PHP
FUNÇÃO DE DELETAR NO BANCO
*****************************/
function delete($tabela, $where){
	$qrDelete = "DELETE FROM {$tabela} WHERE {$where}";
	$stDelete = mysql_query($qrDelete) or die ('Erro ao deletar em '.$tabela.' '.mysql_error());
}
/*****************************
FUNÇÃO DO PRO PHP
ENVIA O EMAIL
*****************************/	
function sendMail($assunto,$mensagem,$remetente,$nomeRemetente,$destino,$nomeDestino, $reply = NULL, $replyNome = NULL){
	
	require_once('mail/class.phpmailer.php'); //Include pasta/classe do PHPMailer
	
	$mail = new PHPMailer(); //INICIA A CLASSE
	$mail->IsSMTP(); //Habilita envio SMPT
	$mail->SMTPAuth = true; //Ativa email autenticado
	$mail->IsHTML(true);
	
	$mail->Host = MAILHOST; //Servidor de envio
	$mail->Port = MAILPORT; //Porta de envio
	$mail->Username = MAILUSER; //email para smtp autenticado
	$mail->Password = MAILPASS; //seleciona a porta de envio
	
	$mail->From = utf8_decode($remetente); //remtente
	$mail->FromName = utf8_decode($nomeRemetente); //remtetene nome
	
	if($reply != NULL){
		$mail->AddReplyTo(utf8_decode($reply),utf8_decode($replyNome));	
	}
	
	$mail->Subject = utf8_decode($assunto); //assunto
	$mail->Body = utf8_decode($mensagem); //mensagem
	$mail->AddAddress(utf8_decode($destino),utf8_decode($nomeDestino)); //email e nome do destino
	
	if($mail->Send()){
		return true;
	}else{
		return false;
	}
}
/*****************************
FUNÇÃO DO PRO PHP
Paginação de resultados
*****************************/
function readPaginator($tabela, $cond, $maximos, $link, $pag, $width = NULL, $maxlinks = 4){
	$readPaginator = read("$tabela","$cond");
	$total = count($readPaginator);
	if($total > $maximos){
		$paginas = ceil($total/$maximos);
		if($width){
			echo '<div class="paginator" style="width:'.$width.'">';
		}else{
			echo '<div class="paginator">';
		}
		echo '<a href="'.$link.'1">Primeira Página</a>';
		for($i = $pag - $maxlinks; $i <= $pag - 1; $i++){
			if($i >= 1){
				echo '<a href="'.$link.$i.'">'.$i.'</a>';
			}
		}
		echo '<span class="atv">'.$pag.'</span>';
		for($i = $pag + 1; $i <= $pag + $maxlinks; $i++){
			if($i <= $paginas){
				echo '<a href="'.$link.$i.'">'.$i.'</a>';
			}
		}
		echo '<a href="'.$link.$paginas.'">Última Página</a>';
		echo '</div><!-- /paginator -->';
	}
}
/*****************************
FUNÇÃO DO PRO PHP
IMAGE UPLOAD
*****************************/
function uploadImage($tmp, $nome, $width, $pasta){
	$ext = substr($nome,-3);
	
	switch($ext){
		case 'jpg': $img = imagecreatefromjpeg($tmp); break;
		case 'png': $img = imagecreatefrompng($tmp); break;
		case 'gif': $img = imagecreatefromgif($tmp); break;	
	}		
	$x = imagesx($img);
	$y = imagesy($img);
	$height = ($width*$y) / $x;
	$nova   = imagecreatetruecolor($width, $height);
	
	imagealphablending($nova,false);
	imagesavealpha($nova,true);
	imagecopyresampled($nova, $img, 0, 0, 0, 0, $width, $height, $x, $y);

	switch($ext){
		case 'jpg': imagejpeg($nova, $pasta.$nome, 100); break;
		case 'png': imagepng($nova, $pasta.$nome); break;
		case 'gif': imagegif($nova, $pasta.$nome); break;	
	}
	imagedestroy($img);
	imagedestroy($nova);
}
/*****************************
FUNÇÃO DO PRO PHP
FORMATA DATA EM TIMESTAMP
*****************************/	
function formDate($data){
	$timestamp = explode(" ",$data);
	$getData = $timestamp[0];
	$getTime = $timestamp[1];
	
		$setData = explode('/',$getData);
		$dia = $setData[0];
		$mes = $setData[1];
		$ano = $setData[2];
		
	if(!$getTime):
		$getTime = date('H:i:s');
	endif;
		
	$resultado = $ano.'-'.$mes.'-'.$dia.' '.$getTime;
	
	return $resultado;
	
}
/*****************************
FUNÇÃO DO PRO PHP
VALIDA O EMAIL
*****************************/	
function isMail($email){
	if(preg_match('/[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/',$email)){
		return true;
	}else{
		return false;
	}
}

/*****************************
FUNÇÃO DO GRAVATAR
VALIDA O EMAIL
*****************************/	
/**
 * Get either a Gravatar URL or complete image tag for a specified email address.
 *
 * @param string $email The email address
 * @param string $s Size in pixels, defaults to 80px [ 1 - 2048 ]
 * @param string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
 * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
 * @param boole $img True to return a complete IMG tag False for just the URL
 * @param array $atts Optional, additional key/value attributes to include in the IMG tag
 * @return String containing either just a URL or a complete image tag
 * @source https://gravatar.com/site/implement/images/php/
 */
function get_gravatar( $email, $s = 180, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
    $url = 'https://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $email ) ) );
    $url .= "?s=$s&d=$d&r=$r";
    if ( $img ) {
        $url = '<img src="' . $url . '"';
        foreach ( $atts as $key => $val )
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }
    return $url;
}