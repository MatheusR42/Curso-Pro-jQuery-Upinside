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
function read($tabela, $cond = NULL){		
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
}	
/*****************************
FUNÇÃO DO PRO PHP
FUNÇÃO DE EDIÇÃO NO BANCO
*****************************/	
function update($tabela, array $datas, $where){
	foreach($datas as $fields => $values){
		$campos[] = "$fields = '$values'";
	}
	
	$campos = implode(", ",$campos);
	$qrUpdate = "UPDATE {$tabela} SET $campos WHERE {$where}";
	$stUpdate = mysql_query($qrUpdate) or die ('Erro ao atualizar em '.$tabela.' '.mysql_error());

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
SETA URL DA HOME
*****************************/
function setHome(){
	echo BASE;	
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