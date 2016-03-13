<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Leitura de dados via Ajax!</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/crud.js"></script>
<link rel="stylesheet" type="text/css" href="css/aula5.css" />

</head>

<body>

<ul class="usuarios">
	<?php for($i=1;$i<=5;$i++):?>
	<li>
    	<h3>Robson V. Leite</h3>
        <div class="contatos">
            <div class="email"><a href="mailto:falecom@upinside.com.br">falecom@upinside.com.br</a></div>
            <div class="telefone">54 3381.2185</div>
        </div><!-- /contatos -->
        
        <div class="manage">
        	<div class="btnaction edit j_edit"><img src="img/edit.png" alt="Editar" title="Editar" /></div>
            <div class="btnaction delete j_delete"><img src="img/delete.png" alt="Excluir" title="Excluir" /></div>
       	</div><!-- /manage -->        
    </li>
    <?php endfor;?>
</ul>

<div class="mais j_read">Carregar Mais</div>

<div class="lendoartigos">
	<img src="img/load.gif" alt="Carregando" title="Carregando" /> Aguarde, obtendo usuários!
</div>

<div class="editar">
	<form name="editar" action="" method="post">
        <label>
            <span class="campo">Nome:</span>
            <input type="text" name="nome" />
        </label>
        
        <label>
            <span class="campo">Sobrenome:</span>
            <input type="text" name="sobrenome" />
        </label>
        
        <label>
            <span class="campo">E-mail:</span>
            <input type="text" name="email" />
        </label>
        
        <label>
            <span class="campo">Telefone:</span>
            <input type="text" name="telefone" />
        </label>
        
        <label>
            <span class="campo">Senha:</span>
            <input type="text" name="code" />
        </label>
        
        <input type="hidden" name="id" />
        
        <img src="img/load.gif" width="20" style="margin:8px 0 0 10px; display:none;" class="j_loadboxedit" />
        <input type="submit" value="Atualizar" class="btnedit j_buttom_edit" />	
        <input type="reset" value="Fechar" class="btnclose j_buttom_close" />
    </form>
</div>

</body>
</html>