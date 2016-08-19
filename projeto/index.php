<?php
ob_start(); session_start();
require_once('dts/configs.php');
//viewManager('600');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="<?php setHome();?>/tpl/js/shadowbox/shadowbox.css" type="text/css" rel="stylesheet" />

<link href="<?php setHome();?>/tpl/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php setHome();?>/tpl/css/pages.css" rel="stylesheet" type="text/css" />
<link href="<?php setHome();?>/tpl/css/shadowcustom.css" rel="stylesheet" type="text/css" />

<link href='http://fonts.googleapis.com/css?family=Dosis:200;400,600,800' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="<?php setHome();?>/tpl/images/upico.png"/>

<script type="text/javascript" src="<?php setHome();?>/jsc/jquery.js"></script>
<script type="text/javascript" src="<?php setHome();?>/jsc/jquery-cycle.js"></script>
<script type="text/javascript" src="<?php setHome();?>/tpl/js/shadowbox/shadowbox.js"></script>
<script type="text/javascript" src="<?php setHome();?>/tpl/js/estilos.js"></script>

<?php
getHome();
?>

</body>
</html>