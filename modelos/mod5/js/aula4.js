$(function(){
	var este = $('.exemplo');
        
        $('input').change(function(){
            var acheck = $(this).attr("checked")+" - "+ $(this).attr('name');
            var pcheck = $(this).prop("checked")+" - "+ $(this).prop('name');
            var icheck = $(this).is(":checked")+" - "+ $(this).is('name');
            
            este.html("ATTR = "+acheck+"<br>PROP= "+pcheck+"<br>IS = "+icheck);
            
        });
        $('.remove').click(function(){
            $(':checkbox').removeAttr("checked");
            //$(':checkbox').removeProp("checked");
            
            $('input').trigger("change");
        });
        
        $('.edit').click(function(){
            //$('input').attr('name','Via attr');
            $('input').prop('name','Via prop');
            $('input').trigger("change");
        });
        $('input').trigger("change");
});
