<?php
	ob_start();
	session_start();
	print_r($_SESSION['userlogin']);
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
			header('Location: dashboard.php?exe=sis/home');
		endif;
		
	echo '</div><!-- /site -->';
	require_once('inc/footer.php');
	ob_end_flush();
?>