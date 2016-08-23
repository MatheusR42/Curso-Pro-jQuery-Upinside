<?php 
if(function_exists(myAut)):
	myAut();
else:
	header('Location: ../dashboard.php');
	die;
endif;
?>

<!-- FOOTER -->
<div id="footer">
	<div class="content">
    	MyConTent Admin. Desenvolvido no curso <a href="http://upinside.com.br/campus/curso/curso-pro-jquery" target="_blank" title="Curso Pro jQuery">Pro jQuery</a> da UpInside.
    </div><!-- /content -->
</div><!-- /footer -->

</body>
</html>