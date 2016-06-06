<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery User Interface</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.ui.datepicker-pt-BR.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/estudos.js"></script>

<link rel="stylesheet" type="text/css" href="css/jquery-ui-style.css" />
<link rel="stylesheet" type="text/css" href="css/estudos.css" />
<link rel="stylesheet" type="text/css" href="css/normalize.css" />

</head>

<body>

<!-- MENU DE NAVEGAÇÃO -->
<div class="menu">
	<ul class="nav">
    	<li><a href="#accordion">Sanfona</a></li>
        <li><a href="#autocomplete">Auto Completar</a></li>
        <li><a href="#button">Botões</a></li>
        <li><a href="#datepicker">Selecionar a data</a></li>
        <li><a href="#modais">Modais e Callbacks</a></li>
        <li><a href="#menus">Menus e barras de progresso</a></li>
        <li><a href="#sliders">Sliders</a></li>
        <li><a href="#spinners">Spinners</a></li>
        <li><a href="#tabs">Tabs e Tooltips</a></li>
    </ul>
</div>






<!-- ACCORDION -->
<div class="box bloco" id="accordion">
	<h2>jQuery UI - Accordion</h2>
    <div class="accordion">
        <h3>Sobre o Curso</h3>
        <div>
            <p>O curso Pro jQuery é baseado em desenvolver aplicações web com mais interatividade. O foco do curso são validações, real time,
            interações dinâmicas  com PHP  e banco de dados.</p>

            <p>Aprenderemos a trabalhar com diversos tipos de plugins essenciais para o desenvolvimento web como por exemplo: mascara,
            slide, carrossel, janela modal, sistemas login, sistema de passo a passo,  slide web e vários outros.</p>

            <p>Veremos como trabalhar com o jQuery e entenderemos sua sintaxe para que possamos executar trabalhos com essa maravilhosa ferramenta.</p>
        </div>

        <h3>jQuery User Interface</h3>
        <div>
            <p>Veremos neste módulo todos os detalhes de utilização deste framework que vem para facilitar ainda mais nosso trabalho com
            desenvolvimento de sites e interfaces dinâmicas.</p>
        </div>

        <h3>Bem Vindo!</h3>
        <div>
            <p>Bem vindos ao curso Pro JQuery. Desenvolvendo interfaces, aprenda a criar aplicações interativas e dinâmicas
            com jQuery, PHP e Mysql!</p>
        </div>
    </div><!-- /accordion -->
</div><!-- /box -->






<!-- AUTOCOMPLETE -->
<div class="box bloco" id="autocomplete">
	<form name="autocomplete" action="" method="post">
		<h2>jQuery UI - Auto complete</h2>
    <input type="text" class="j_autocomplete" name="search" />
		<input type="image"  src="img/search.png" class="j_btn_autocomplete"  />
    <ul class="resultados">
    	<li>Robson Vidaletti Leite - <strong>54 3381.2185</strong></li>
    </ul>
	</form>

</div><!-- /box -->






<!-- BUTTON'S -->
<div class="box bloco" id="button">
	<h2>jQuery UI - Button's</h2>
        <input type="submit" class="submit" value="INPUT SUBMIT" />
        <input type="button" value="INPUT BUTTON" />

        <button>BUTTON</button>
        <button>BUTTON</button>

        <p style="padding:20px; background:#fbfbfb;">Ok meus queridos, <a title="Link">jQuery User Interface</a> é um framework do jQuery que veio para facilitar ainda mais nossa vida</p>

        <div class="gchecks" style="margin-bottom:8px;">
        	Check Boxs:
            <input type="checkbox" id="check1" /><label for="check1">Pro Tableless</label>
            <input type="checkbox" id="check2" /><label for="check2">Pro PHP</label>
            <input type="checkbox" id="check3" /><label for="check3">Pro jQuery</label>
        </div>


        <div class="gradios">
        	Radio Buttons:
            <input type="radio" name="radio" id="radio1" /><label for="radio1">Pro Tableless</label>
            <input type="radio" name="radio" id="radio2" /><label for="radio2">Pro PHP</label>
            <input type="radio" name="radio" id="radio3" /><label for="radio3">Pro jQuery</label>
        </div>
</div><!-- /box -->






<!-- DATEPICKER -->
<div class="box bloco" id="datepicker">
	<h2>jQuery UI - Datepicker</h2>

    <div style="float:left; width:400px;">
        <div style="float:left; padding:20px; background:rgba(255,255,255,0.5); margin-bottom:20px; width:360px;">
            <h3 style="margin:0 0 10px;">Data Normal:</h3>
            <input type="text" name="data" class="j_datepicker" />
        </div>

        <div style="float:left; padding:20px; background:rgba(255,255,255,0.5); width:360px;">
            <h3 style="margin:0 0 10px;">Data Outros:</h3>
            <input type="text" name="data" class="j_datepickerout" style="margin-bottom:5px;" />
            <input type="text" class="alternate" />
        </div>
    </div>

    <div style="float:right;">
    	<h3 style="margin:0 0 10px;">Data Inline:</h3>
    	<div class="j_datepickerin"></div>
    </div>

<div style="clear:both"></div>
</div><!-- /box -->






<!-- MODAIS E CALLBACKS -->
<div class="box bloco" id="modais">
	<h2>jQuery UI - Modais e Callbacks</h2>

    <p>Está é uma caixa modal jQuery UI</p>

    <p class="deletar" title="Confirmar ação:">Você está tentando deletar o usuário <strong>ROBSON V. LEITE</strong> do sistema. Todos os dados serão perdidos.<br /><br />Deseja continuar?</p>

    <p class="dial">Opaaa</p>

    <div class="errocaixa" title="Erro ao processar requisição!">
        <p>
            <span class="ui-icon ui-icon-circle-close" style="float:left; margin:0 7px 50px 0"></span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Fusce et eleifend augue.</strong> Nam augue metus, pellentesque eu amet.
        </p>
    </div>

    <button class="abrir">Abrir</button>
    <button class="confirmar">Confirmar</button>
    <button class="erro">Ver erro</button>


</div><!-- /box -->






<!-- MENUS E PROGRESSBAR -->
<div class="box bloco" id="menus">
	<h2>jQuery UI - Menus  progress bar</h2>

    <ul class="menuui">
        <li><a href="#">Home</a></li>
        <li><a href="#">Projetos</a></li>
        <li><a href="#">Cursos</a>
            <ul>
                <li><a href="#">Pro Tableless</a></li>
                <li><a href="#">Pro PHP</a></li>
                <li><a href="#">Pro jQuery</a></li>
            </ul>
        </li>
        <li><a href="#">Vídeo Aulas</a>
            <ul>
                <li><a href="#">Desenvolvimento</a>
                    <ul>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">Tableless</a></li>
                    </ul>
                </li>
                <li><a href="#">Designer</a>
                    <ul>
                        <li><a href="#">Fireworks</a></li>
                        <li><a href="#">Photoshop</a>
                        	<ul>
                            	<li><a href="#">Para Web</a></li>
                       			<li><a href="#">Para Fotos</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#">Contato</a></li>
    </ul>

    <br />

    <div class="progresso"></div>
    <div class="progresso2"></div>

</div><!-- /box -->






<!-- SLIDERS -->
<div class="box bloco" id="sliders">
	<h2>jQuery UI - Sliders</h2>

    <div class="simples"></div>
    <br />

    <div class="range">
        <p>Range: <span></span></p>
        <div class="rangeslide"></div>
    </div>
    <br />

    <div class="fixed">
        <p class="valfix">Min: <strong></strong> | Max: <strong></strong></p>
        <div class="maxslide"></div>
        <br />
        <div class="minslide"></div>
    </div>
    <br />

	<div class="volume"></div>
	<div class="vertical"></div>


</div><!-- /box -->






<!-- SPINNERS -->
<div class="box bloco" id="spinners">
	<h2>jQuery UI - Spinners</h2>

    <div class="spisimples">
    	<input type="text" value="1" />
    </div>

    <br /><br />

    <div class="spiopcoes">
        <p>Value = <strong>1</strong></p>
        <input type="text" class="numerico" value="1" />
        <button>Toogle Action</button>
    </div>

    <br /><br />

    <div class="spidecimal">
        <input type="text" class="decimal" disabled="disabled" value="10"/>
        <p class="estevalor" style="font-size:20px;">R$ 10,00</p>
    </div>

</div><!-- /box -->






<!-- TABS E TOOLTIPS -->
<div class="box bloco" id="tabs">
	<h2>jQuery UI - Tabs e Tooltips</h2>

    <div class="tabs">
        <ul class="menutab">
                <li><a href="#cursos">Cursos</a></li>
                <li><a href="#videos">Víde Aulas</a></li>
                <li><a href="#artigos">Artigos</a></li>
                <li><a href="img/pegar.php">Via Ajax</a>
        </ul>

        <div id="cursos">
            <h2>Cursos Online!</h2>
            <p>O que vamos fazer aqui é instanciar os widgets e ver sua recuperação ok? Vamos conhecer então o site e como ele funciona para que com mais
            tempo depois você venha e <a href="#" title="Confira novidades e os melhores cursos da internet!">confira</a> os itens com mais detalhes.</p>
        </div>

        <div id="videos">
            <h2>Vídeo Aulas!</h2>
            <!--<iframe src="http://player.vimeo.com/video/62933136?title=0&amp;byline=0&amp;portrait=0" width="820" height="460" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>-->
            <p>O que vamos fazer aqui é instanciar os <a href="#" title="Com vários Widgets para Você!">widgets e ver sua recuperação ok?</a>
            Vamos conhecer então o site e como ele funciona para que com mais tempo depois você venha e confira os itens com mais detalhes.</p>
        </div>

        <div id="artigos">
            <h2>Artigos e tutoriais!</h2>
            <p>O que vamos <strong title="Texto destacado!">fazer aqui é instanciar</strong> os widgets e ver sua recuperação ok? Vamos conhecer então o
            site e como ele funciona para que com mais tempo depois você venha e confira os itens com mais detalhes.</p>
        </div>
    </div>
</div><!-- /box -->

</body>
</html>
