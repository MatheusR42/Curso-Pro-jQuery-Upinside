<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Estudo de caso 1: Leitor em abas</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript" src="js/shadowbox/shadowbox.js"></script>

<script type="text/javascript" src="js/reader.js"></script>
<script type="text/javascript" src="js/controller.js"></script>

<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<link rel="stylesheet" type="text/css" href="js/shadowbox/shadowbox.css">

<style type="text/css">
	*{margin:0; padding:0; font-family:Verdana, Geneva, sans-serif;}
</style>



</head>

<body class="readerbody">

<div id="reader">

	<img src="img/logohub.png" alt="Sistema de arquivos" title="Sistema de arquivos" />

    <div class="modal">
			<a href="#" class="closemodal">X FECHAR</a>
    	<div class="resposta">ENVIE SEU ARQUIVO:</div>

        <div class="carregando">

            <div class="progress"></div>

        </div>

        <form name="enviardados" action="" method="post" enctype="multipart/form-data">
            <label>
                <span class="campo">Arquivo:</span>
                <input type="file" name="arquivo"/>

                <span class="filebar"></span>
                <img class="selectfile" src="img/upload.png" />
            </label>

            <label>
                <span class="campo">Titulo:</span>
                <input type="text" name="titulo" />
            </label>

            <label>
                <span class="campo">Descrição:</span>
                <textarea name="descricao" role="3"></textarea>
            </label>
						<input type="hidden" value="0" name="id"/>
            <input type="submit" value="Enviar Dados" class="btn btn_cadastra" />
						<input type="submit" value="Atualizar Dados" class="btn btn_edit" />
        </form>


    </div>

    <ul class="menu">
				<li><a class="nav" href="#cadastro">Cadastrar Mais</a></li>
        <li><a class="nav" href="#tudo">Ver Tudo</a></li>
        <li><a class="nav" href="#arquivos">Ver Arquivos</a></li>
        <li><a class="nav" href="#imagens">Ver Imagens</a></li>
        <li><a class="nav" href="#videos">Ver Vídeos</a></li>
    </ul>

    <div class="loading"><img src="img/load.gif" alt="Carregando..." title="Carregando..." /> Aguarde, carregando informações!</div>

    <ul class="lista">
    <?php for($i=1;$i<=3;$i++):?>
        <li class="file">
        	<img src="img/filethumb.jpg" alt="Baixar arquivo" title="Baixar Arquivo" width="273" height="120" />
            <h2>Meu arquivo está aqui</h2>
            <p class="desc">descrição do meu arquivo pode ser vista aqui, para melhorar o entendimento!</p>
            <p class="data">Enviado em: 22/03/2013 às 14:30h</p>
            <a href="baixar">Baixar arquivo!</a>
            <div class="manage">
            	<a class="actionedit" href="editar"><img src="img/edit.png" alt="" title="" /></a>
              <a class="actiondelete" href="deletar"><img src="img/delete.png" alt="" title="" /></a>
            </div>
        </li>

        <li class="file">
        	<img src="tim.php?src=uploads/images/9479f1e02ce8a5bb66ef2fa71ba21846.jpg&w=273&h=120" alt="Ver imagem" title="Ver Imagem" width="273" height="120" />
            <h2>Minha imagem está aqui</h2>
            <p class="desc">descrição do meu arquivo pode ser vista aqui, para melhorar o entendimento!</p>
            <p class="data">Enviado em: 22/03/2013 às 14:30h</p>
            <a href="ver">Ver Imagem!</a>
        </li>

        <li class="file right">
        	<img src="img/videothumb.jpg" alt="Assistir vídeo" title="Assistir vídeo" width="273" height="120" />
            <h2>Meu Vídeo está aqui</h2>
            <p class="desc">descrição do meu arquivo pode ser vista aqui, para melhorar o entendimento!</p>
            <p class="data">Enviado em: 22/03/2013 às 14:30h</p>
            <a href="assistir">Assistir Vídeo!</a>
        </li>
    <?php endfor;?>
    </ul>

<div style="clear:both"></div>
</div>

</body>
</html>
