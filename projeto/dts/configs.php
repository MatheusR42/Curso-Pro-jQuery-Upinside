<?php
//DEFINE BANCO DEDADOS
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBSA','projquery');

//BASE DO SITE
define('BASE','http://localhost/Curso-Pro-jQuery-Upinside/projeto');
//define('SITETAGS','Curso jQuery, jQuery, jQuery co PHP, jQuery com Mysql'); O GOOGLE NAO ACEITA MAIS AS TAGS
define('IMAGEW','700px');

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

//DEFINE O SEO SOCIAL
$config_readSocial = read('config_sensorial');
if($config_readSocial){
    foreach($config_readSocial as $config_social);
    define('SITENAME', $config_social['titulo']);
    define('SITEDESC', $config_social['descricao']);
    define('FACEBOOK', $config_social['facebook']);
    define('TWITTER',  $config_social['twitter']);
}else{ 
    define('SITENAME','MyContent - Home | Pro jQuery - Criando Intercafex');
    define('SITEDESC','Confira o projeto final desenvolvido no curso Pro jQuery - Crinado interfaces da UpInside. Veja mais em www.upinside.com.br/campus');
    define('FACEBOOK','upinside');
    define('TWITTER','MyContent - Home | Pro jQuery - Criando Intercafex');
}

//MEUS DADOS
$config_readEndtel = read('config_endtel');
if($config_readEndtel){
    foreach($config_readEndtel as $config_endtel);
    define('ENDERECO', $config_endtel['endereco']);
    define('TELEFONE', $config_endtel['telefone']);
}else{ 
    define('ENDERECO','');
    define('TELEFONE','');
}

$timezones = array(
'AC' => 'America/Rio_branco',   'AL' => 'America/Maceio',
'AP' => 'America/Belem',        'AM' => 'America/Manaus',
'BA' => 'America/Bahia',        'CE' => 'America/Fortaleza',
'DF' => 'America/Sao_Paulo',    'ES' => 'America/Sao_Paulo',
'GO' => 'America/Sao_Paulo',    'MA' => 'America/Fortaleza',
'MT' => 'America/Cuiaba',       'MS' => 'America/Campo_Grande',
'MG' => 'America/Sao_Paulo',    'PR' => 'America/Sao_Paulo',
'PB' => 'America/Fortaleza',    'PA' => 'America/Belem',
'PE' => 'America/Recife',       'PI' => 'America/Fortaleza',
'RJ' => 'America/Sao_Paulo',    'RN' => 'America/Fortaleza',
'RS' => 'America/Sao_Paulo',    'RO' => 'America/Porto_Velho',
'RR' => 'America/Boa_Vista',    'SC' => 'America/Sao_Paulo',
'SE' => 'America/Maceio',       'SP' => 'America/Sao_Paulo',
'TO' => 'America/Araguaia',     
);

date_default_timezone_set('America/Sao_Paulo');