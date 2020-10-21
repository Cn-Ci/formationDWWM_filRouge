$(document).ready(function(){
	$('#BoutonBurgermenuTab').click(function(){
        $('.menuTab').toggleClass('isOpen');
		$('#BoutonBurgermenuTab .barre1').toggleClass('isClick');
        $('#BoutonBurgermenuTab .barre2').toggleClass('isClick');  
	});
});