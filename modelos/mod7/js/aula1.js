$(document).ready(function(){
     var sender = $('form[name="enviardados"]');
     var load = $('.resposta');

     /*
     sender.ajaxForm(function(){
       alert('ajax fr form');
     });
     */


     sender.submit(function(){
       $(this).ajaxSubmit({
          sucess: alert('ajax form')
       });

       return false;
     });
});
