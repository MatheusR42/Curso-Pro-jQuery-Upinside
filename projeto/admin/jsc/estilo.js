$(function(){	
	<!-- TinyMCE -->
	<!-- EXTENSÂO DE YOUTUBE EM \tiny_mce\plugins\media\js MEDIA.js -->
	tinyMCE.init({
		// General options
		mode : "specific_textareas",
        editor_selector : "timeditor",
		language : "pt",
		theme : "advanced",
		elements : 'abshosturls',
		relative_urls : false,
		remove_script_host : false,
		skin : "o2k7",
		skin_variant : "silver",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",
		theme_advanced_blockformats : "p,address,pre,h2,h3,h4",

		// Theme options
		theme_advanced_buttons1 :"fullscreen,code,undo,redo,pastetext,removeformat,cleanup,|,fontsizeselect,formatselect,bold,italic,underline,strikethrough,forecolor,backcolor,bullist,numlist,justifyleft,justifycenter,justifyright,justifyfull,|,link,unlink,anchor,image,media,blockquote,hr,outdent,indent,|,insertdate,inserttime,search,charmap",
		theme_advanced_buttons2 : "",
		theme_advanced_buttons3 : "",
		theme_advanced_buttons4 : "",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "center",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",
		file_browser_callback : "tinyBrowser",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "UPINSIDE TECNOLOGIA",
			staffid : "991234"
		}
	});

	Shadowbox.init();	
	
	
	$(".formDate").mask("99/99/9999 99:99:99",{placeholder:" "});
	

	//CUSTOM
	$('.controle .li').mouseenter(function(){
		$(this).find('.submenu').slideDown("fast");
	}).mouseleave(function(){
		$(this).find('.submenu').slideUp("fast");
	});
	
	$('.dialog').hide();
	$('.dialog .msg').hide();
	$('.dialog .modal').hide();
	
	$('.closemodal, .closedial').click(function(){
		$('.dialog').find('div').fadeOut("slow",function(){
			$('.dialog').fadeOut("slow");	
		});
		
		return false;	
	});
	
		
	$('.posts .content .li span').hide();
	$('.posts .content .li').each(function(){
		$(this).mouseover(function(){
			$(this).find('span').fadeIn("fast");	
		}).mouseleave(function(){
			$(this).find('span').fadeOut("fast");
		});	
	});
	
	$('.j_addpost').click(function(){
		$('.dialog').fadeIn("fast", function(){
			$('.newpost').find('div').fadeIn("fast").find('img').hide(0,function(){
				$('.newpost').fadeIn("fast");
			});	
		});		
		return false;	
	});
	
	$('form[name="cadnewpost"]').submit(function(){
		$('.newpost').find('img').fadeIn('fast',function(){
			var id = '22';
			window.setTimeout( function(){
				$(location).attr('href','dashboard.php?exe=posts/edit&id=' + id );
			} , 2000);
		});	
		return false;
	});
	
	$('.j_send').click(function(){
		$('.j_capa').one('click',function(){
			$(this).click();
		}).change(function(){
			$('.viewcapa').fadeOut("slow",function(){
				$('.j_false').text($('.j_capa').val().replace('C:\\fakepath\\', ""));
			});			
		});
	});
	
	$('.j_gsend').click(function(){
		$('.j_gallery').one('click',function(){
			$(this).click();
		}).change(function(){
			$('.j_gprogress').animate({width:'880px'},500,function(){
				$(this).find('.bar').text('100%').css('max-width','864px').animate({width:'100%'},3500);
			});			
		});
	});
	
	$('.formfull .check').click(function(){
		if($(this).find('input').is(':checked')){
			$(this).css('background','#0C0');
		}else{
			$(this).css('background','#999');
		};
	});
	if($('.formfull .check input').is(':checked')){
		$('.formfull .check').css('background','#0C0');
	}else{
		$('.formfull .check').css('background','#999');
	};	
	
	
	$('.j_addcat').click(function(){
		$('.dialog').fadeIn("fast", function(){
			$('.newcat').find('div').fadeIn("fast").find('img').hide(0,function(){
				$('.newcat').fadeIn("fast");
			});	
		});
		
		return false;	
	});
	
	$('form[name="cadnewcat"]').submit(function(){
		$('.newcat').find('img').fadeIn('fast',function(){
			var id = '18';
			window.setTimeout( function(){
				$(location).attr('href','dashboard.php?exe=categorias/edit&id=' + id );
			} , 2000);
		});	
		return false;
	});
	
	$('.comentarios .listcom .li .commentitem .actions').hide();
	$('.comentarios .listcom .li').each(function(){
		$(this).mouseover(function(){
			$(this).find('.actions').fadeIn("fast");	
		}).mouseleave(function(){
			$(this).find('.actions').fadeOut("fast");
		});	
	});	
	
	//BACK
	$('a[href="#back"]').each(function(){
		$(this).click(function(){
			window.history.back();	
		});	
	});
	
	
	$('.j_adduser').click(function(){
		$('.dialog').fadeIn("fast", function(){
			$('.newuser').find('div').fadeIn("fast").find('img').hide(0,function(){
				$('.newuser').fadeIn("fast");
			});	
		});		
		return false;	
	});
	
	$('form[name="cadnewuser"]').submit(function(){
		$('.newuser').find('img').fadeIn('fast',function(){
			
		});	
		return false;
	});
});