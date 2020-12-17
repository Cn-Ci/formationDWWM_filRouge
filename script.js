//! CFG 
let response;
const p = doGetJson("db_voitures.php", false);

$(document).ready(function(){
	$('#BoutonBurgermenuTab').click(function(){
        $('.menuTab').toggleClass('isOpen');
		$('#BoutonBurgermenuTab .barre1').toggleClass('isClick');
        $('#BoutonBurgermenuTab .barre2').toggleClass('isClick');  
	});
});

p.done(function(maReponse) {
    console.log("3", maReponse);
    console.log("4");
    console.log("5");
});

$('#filter').on('change', function(e) {
	const filterSelected = $('#filter :selected');
	let url = filterSelected ? 'URL ?filter=' + filterSelected : ' URL WITHOUT FILTER';
	doGetJson(url, true);
});

function doGetJson(url, selected) {
	const deferred = $.Deferred();
	$.getJson(url, function(data) {
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
				$('<td>').html(valeur.commentaires).appendTo($('tobdy')
			);
		});
		deferred.resolve(response);
	});
	return deferred.promise();
}