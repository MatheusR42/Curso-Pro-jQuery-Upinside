Shadowbox.init();

$(function(){1

  var modal = $('.modal');
  var lista = $('.lista');
  var menu = $('.menu li a');
  var loader = $('.loading');

  //lista.hide();
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
      //LER BANCO
    }else{
      modal.fadeIn('slow');
      return false;
    }

  });

  $('.closemodal').click(function(){
    var local = window.location.hash;
    local = local.replace('#','');
    //LER BANCO
    modal.delay(300).fadeOut('slow');
    return false;
  });

  lista.on('click', '.actionedit', function(){
    alert('Editar este');
    return false;
  });


  lista.on('click', '.actiondelete', function(){
    alert('Deletar este');
    return false;
  });
});
