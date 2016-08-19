<div class="content home">
    <h1 class="location">Comentários <span><?php echo date('d/m/Y H:i');?></span></h1><!--/location-->
    
    <div class="comentarios">

            <ul class="listcom">
                <?php for($i=1;$i<=3;$i++):?>
                    <li class="li pendente">
                        <img src="http://0.gravatar.com/avatar/4161e253b6b48b7bc34e7fbd5cdc232f?s=60&d=monsterid&r=G" />
                        <div class="commentitem">
                            <span class="infor">De <strong>Robson V. Leite</strong> sobre <strong><a href="#">Shael Sonnen e Anderson Silva Spider...</a></strong>.</span>	
                            <p>In quis odio sit amet lectus porta blandit non at ante. Nam lobortis tempus odio, faucibus venenatis lorem consequat eget.</p>
                        	<div class="actions">
                                <a href="dashboard.php?exe=comentarios/moderar&commnet=129" class="edit">Modarar comnetários</a>
                            </div><!-- /actions -->
                        </div><!--/commentitem-->
                        <div class="estats">
                        	<strong>12</strong> respostas
                        </div><!--/estatis-->
                    </li>
                <?php endfor;?>
                <?php for($e=1;$e<=7;$e++):?>
                    <li class="li">
                        <img src="http://0.gravatar.com/avatar/4161e253b6b48b7bc34e7fbd5cdc232f?s=60&d=monsterid&r=G" />
                        <div class="commentitem">
                            <span class="infor">De <strong>Robson V. Leite</strong> sobre <strong><a href="#">Shael Sonnen e Anderson Silva Spider...</a></strong>.</span>	
                            <p>In quis odio sit amet lectus porta blandit non at ante. Nam lobortis tempus odio, faucibus venenatis lorem consequat eget.</p>
                        	<div class="actions">
                                <a href="dashboard.php?exe=comentarios/moderar&commnet=129" class="edit">Modarar comnetários</a>
                            </div><!-- /actions -->
                        </div><!--/commentitem-->
                        <div class="estats">
                        	<strong>3</strong> respostas
                        </div><!--/estatis-->
                    </li>
                <?php endfor;?>
            </ul><!--/comentários-->

    </div><!--/ comentarios -->

<div class="clear"></div><!-- /clear -->
</div><!-- /content -->