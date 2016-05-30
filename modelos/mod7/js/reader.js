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
  var sender = $('form[name="enviardados"]');

  var btnEditar = $('.btn_edit');
  var btnCadastra = $('.btn_cadastra');

  btnEditar.hide();
  btnCadastra.hide();
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
      btnCadastra.show();
      btnEditar.hide();
      modal.fadeIn('slow');
      return false;
    }

  });

  $('.closemodal').click(function(){
    var local = window.location.hash;
    local = local.replace('#','');
    lerdados(local);
    sender.find('input:text').val('');
    sender.find('textarea').val('');
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
    btnEditar.show();
    btnCadastra.hide();
    modal.fadeIn('slow');
    $('input[type=hidden]').val($(this).attr('href'));
    //alert($('input[type=hidden]').val());
    //alert('Editar este' + $(this).attr('href'));

    var id = $(this).attr('href');


    $.ajax({
      url: 'php/controller.php',
      data: 'acao=consultar&consultaId='+id,
      type: 'POST',
      dataType: 'JSON',
      error: function(){
        alert('Erro ao executar');
      },
      beforeSend: function(){

      },
      success: function(resposta){
        sender.find('input:text').val(resposta[1]);
        sender.find('textarea').val(resposta[2]);
      },
      complete: function(){

      }

    });


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
