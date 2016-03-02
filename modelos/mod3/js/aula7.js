$(function(){
	var contar = 	0;

	/*

	$('p').click(function(){
	contar ++;
	$('body').append('<p>Clique aqui novamente:'+contar+' </p>')
	})
	*/
	// ON E OFF
	$('body').on({
			click: function(){
				contar ++;
				$('body').append('<p>Clique aqui novamente:'+contar+' </p>');
				if(contar >= 3){
					$('body').off('click','p');
				}
			}
	},'p');

		//ONE
		$('p').one('click',function(){
			alert("clcicou!");
		});

});
