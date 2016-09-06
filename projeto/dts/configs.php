<?php
//DEFINE BANCO DEDADOS
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBSA','projquery');

//BASE DO SITE
define('BASE','http://localhost/Curso-Pro-jQuery-Upinside/projeto');
define('SITENAME','MyContent - Home | Pro jQuery - Criando Intercafex');
define('SITEDESC','Confira o projeto final desenvolvido no curso Pro jQuery - Crinado interfaces da UpInside. Veja mais em www.upinside.com.br/campus');
define('SITETAGS','Curso jQuery, jQuery, jQuery co PHP, jQuery com Mysql');
define('IMAGEW','700px');



//MEUS DADOS
define('ENDERECO','');
define('TELEFONE','');


//CONECTA NO BANCO
//$conn = mysqli_connect(HOST, USER, PASS) or die ('Erro ao conectar: '.mysql_error());
//$dbsa = mysql_select_db(DBSA) or die ('Erro ao selecionar banco: '.mysql_error());

$conn = mysqli_connect(HOST, USER, PASS, DBSA) or die ('Erro ao conectar: '.mysql_error());
//INCLUI FUNÇÕES DO PRO PHP
require_once('functions.php');

 //DEFINE O SERVIDOR DE E-MAIL
$config_readMailServer = read('config_mailserver');
if($config_readMailServer){
    foreach($config_readMailServer as $config_mailserver);
    define('MAILUSER', $config_mailserver['email']);
    define('MAILPASS', $config_mailserver['senha']);
    define('MAILPORT', $config_mailserver['porta']);
    define('MAILHOST', $config_mailserver['server']);
}else{ 
    define('MAILUSER','null');
    define('MAILPASS','null');
    define('MAILPORT','null');
    define('MAILHOST','null');
}
