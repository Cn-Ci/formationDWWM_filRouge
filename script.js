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
	const filterSelected = $('#filter :selected').val();
	let url = filterSelected ? 'controleurTopic.php?filter=' + filterSelected : 'controleurTopic.php?action=showAllTopic';
	console.log
	doGetJson(url, true);
});

$('#SearchBar').on('input', function(e) {
	var value = $(this).val().toLowerCase();
	
	$("tbody tr").filter(function() {
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	});
});

function doGetJson(url, isSelected) {
	const deferred = $.Deferred();
	$.getJSON(url, function(data) {
		console.log('test');
		response = data;
		
		$.each(data, function(cle, valeur) {
			if (isSelected) {
				console.log('is selected');
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


// Afficher le formulaire d'ajout ou de modification, selon le bouton - Destination
$('div button').click(function(e){
	let id=e.target.id;
	var displayForm= $("#form"+id);
	console.log("#form"+id);

	if(displayForm.css("display")==="none"){
		
		displayForm.attr("style","display:block");
		console.log("coucou");
		
	 } else if(displayForm.css("display","block")){
		
		displayForm.css("display","none");
	}
});




