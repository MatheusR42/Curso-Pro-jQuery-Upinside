<?php
	ob_start();
	session_start();
	require_once('../dts/configs.php');

	function myAut($nivel = null){
		if($_SESSION['userlogin']){
			$id = $_SESSION['userlogin']['id'];
			$login = $_SESSION['userlogin']['login'];
			$pass = $_SESSION['userlogin']['senha'];
			$readUser = read('usuarios', "WHERE id = '$id' AND login = '$login' AND senha = '$pass'");
			if(!$readUser):
				unset($_SESSION['userlogin']);
				header('Location: index.php?restrito=true');	
			else:
				if($nivel && $nivel != $_SESSION['userlogin']['nivel']):
					header('Location: http://localhost/Curso-Pro-jQuery-Upinside/projeto/admin/dashboard.php?exe=sis/403');
				endif;
			endif;
		}else{
			header('Location: index.php?restrito=true');
		}
	}

	myAut();
	
	require_once('inc/header.php');
	echo '<div id="site">';
	
		$exe = strip_tags(trim(($_GET['exe'])));
		if(!empty($exe)):
			if($exe == 'exit'):
				header('Location: index.php?sair=true');
			elseif(file_exists($exe.'.php')):
				require($exe.'.php');
			else:
		   		require('sis/404.php');	
			endif;
		else:
			header('Location: http://localhost/Curso-Pro-jQuery-Upinside/projeto/admin/dashboard.php?exe=sis/home');
		endif;
		
	echo '</div><!-- /site -->';
	require_once('inc/footer.php');
	ob_end_flush();
?>