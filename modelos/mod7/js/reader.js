var opts = {
// all the rest of the extensions from the source file here...
flv: ['flv','mp4','mov']
};

Shadowbox.init(opts);

$(function(){1

  var modal = $('.modal');
  var lista = $('.lista');
  var menu = $('.menu li a');
  var loader = $('.loading');

  lista.hide();
  loader.hide();
  modal.hide();

  var local = window.location.hash;
  local = local.replace('#','');

  if(!local)
    local = 'tudo';

  menu.click(function(){
    var local = $(this).attr('href');
    local = local.replace('#','');
    if(local != 'cadastro'){
      lerdados(local);
    }else{
      modal.fadeIn('slow');
      return false;
    }

  });

  $('.closemodal').click(function(){
    var local = window.location.hash;
    local = local.replace('#','');
    lerdados(local);
    modal.delay(300).fadeOut('slow');
    return false;
  });


  function lerdados(local){

    $.ajax({
      url: 'php/controller.php',
      data: 'acao=ler&tipo='+local,
      type: 'POST',
      error: function(){
        alert('Erro ao ler dados');
      },
      beforeSend: function(){
        loader.fadeIn('fast');
      },
      success: function(resposta){
        lista.fadeTo(300,0.2,function(){
          $(this).html(resposta).fadeTo(100, 1);
        });
      },
      complete: function(){
        loader.fadeOut('slow');
      }

    });
  }

  lerdados(local);


  lista.on('click', '.actionedit', function(){
    alert('Editar este' + $(this).attr('href'));
    return false;
  });


  lista.on('click', '.actiondelete', function(){
    var id = $(this).attr('href');
    var li = lista.find('li[class*="j_'+id+'"]');

    $.ajax({
      url: 'php/controller.php',
      data: 'acao=deletar&deleteid='+id,
      type: 'POST',
      error: function(){
        alert('Erro ao executar');
      },
      beforeSend: function(){
        li.css('background', '#CF4949');
      },
      success: function(resposta){
        li.fadeOut('slow', function(){
          var local = window.location.hash;
          local = local.replace('#','');
          window.setTimeout(function(){
            lerdados(local);
          },500);
        });
      },
      complete: function(){

      }

    });
    return false;
  });

  lista.on('click', 'a[rel*="shadowbox"]', function(){
    Shadowbox.open(this);
    return false;
  });


});
