<?php
//DEFINE BANCO DEDADOS
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBSA','projquery');

//BASE DO SITE
define('BASE','http://localhost/cursos/projquery/projeto');
define('SITENAME','MyContent - Home | Pro jQuery - Criando Intercafex');
define('SITEDESC','Confira o projeto final desenvolvido no curso Pro jQuery - Crinado interfaces da UpInside. Veja mais em www.upinside.com.br/campus');
define('SITETAGS','Curso jQuery, jQuery, jQuery co PHP, jQuery com Mysql');
define('IMAGEW','700px');

//DEFINE O SERVIDOR DE E-MAIL
define('MAILUSER','');
define('MAILPASS','');
define('MAILPORT','');
define('MAILHOST','');

//MEUS DADOS
define('ENDERECO','');
define('TELEFONE','');


//CONECTA NO BANCO
$conn = mysql_connect(HOST, USER, PASS) or die ('Erro ao conectar: '.mysql_error());
$dbsa = mysql_select_db(DBSA) or die ('Erro ao selecionar banco: '.mysql_error());


//INCLUI FUNÇÕES DO PRO PHP
require_once('functions.php');