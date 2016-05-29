<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBSA','projquery');

$conexao = mysql_connect(HOST,USER,PASS);
$banco = mysql_select_db(DBSA);