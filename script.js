//! CFG 
let response;

$(document).ready(function(){
	$('#BoutonBurgermenuTab').click(function(){
        $('.menuTab').toggleClass('isOpen');
		$('#BoutonBurgermenuTab .barre1').toggleClass('isClick');
        $('#BoutonBurgermenuTab .barre2').toggleClass('isClick');  
	});
});

$('#filter').on('change', function(e) {
	const filterSelected = $('#filter :selected');
	let url = filterSelected ? 'controleurTopic.php?filter=' + filterSelected : 'controleurTopic.php?action=showAllTopic';
	doGetJson(url, true);
});

$('#SearchBar').on('input', function(e) {
	var value = $(this).val().toLowerCase();
	
	$("tbody tr").filter(function() {
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	});
});

function doGetJson(url, selected) {
	const deferred = $.Deferred();
	$.getJSON(url, function(data) {
		response = data;
		$('tbody').empty();

		$.each(data, function(cle, valeur) {
			if (selected) {
				console.log('test');
			}

			$('<tr>').append(
				$('<td>')).html(valeur.titre),
				$('<td>').html(valeur.auteur),
				$('<td>').html(valeur.date),
				$('<td>').html(valeur.commentaires).appendTo($('tbody')
			);
		});
		deferred.resolve(response);
	});
	return deferred.promise();
}


// Afficher le formulaire en cliquant sur le bouton ajouter - Destination
$('#ajoutDestination').click(function(e){
	const display=$('#formAjoutDestination');
	
	if(display.css("display","none")){
		$('#formAjoutDestination').slideDown();
		display.css("display","block");
		
	}else if(display.css("display","block")){
		$('#formAjoutDestination').slideUp();
		display.css("display","none");
	}
	console.log(e)
	
})
$('#ModifDestination').click(function(e){
	const display=$('#formModifDestination');
	
	if(display.css("display","none")){
		$('#formModifDestination').slideDown();
		display.css("display","block");
		
	}else if(display.css("display","block")){
		$('#formModifDestination').slideUp();
		display.css("display","none");
	}
	console.log(e)
	
})



