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
	doGetJson(url, true);
});

function doGetJson(url, isSelected) {
	$.getJSON(url, function(data) {
		response = data;
		
		console.log(data);

		$("tbody").empty();

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
	});
}


// Afficher le formulaire d'ajout ou de modification, selon le bouton - Destination
$('div button').click(function(e) {
	let id = e.target.id;
	var displayForm = $("#form"+id);
	console.log("#form"+id);

	if(displayForm.css("display")==="none") {
		displayForm.attr("style","display:block");
		console.log("coucou");
	} else if(displayForm.css("display","block")) {
		displayForm.css("display","none");
	}
});

//dynamiser l'affichage des destinations 

var map= document.querySelector('#map')
var paths = map.querySelectorAll('.map__image a')
var links= map.querySelectorAll('.map__list a')

paths.forEach(function(path){
    // path.addEventListener('click', function(e){
	// 	var id= this.id.replace('region-', '')
	// 	console.log("coucou");
	// 	console.log(e.a);
    //     map.querySelectorAll('.is-active').forEach(function(item){
    //         item.classList.remove('is-active')
    //     })
    //     document.querySelector('#list-'+ id ).classList.add('is-active') //permet de dire quel lien est actif --> peut l'utiliser pour afficher 

    // })
})


function transmissionRegion(){
 	console.log('coucou');
}


$('.map').ready(function(){
	$('.map a').click(function(e){
		console.log(e.currentTarget.id);
		let region = e.currentTarget.id;
		let url	= 'controllerDestination.php?region='+region
		$.get(url, transmissionRegion(region)).done(function(data) {
        	
		})
		.fail(function(){
			alert("error");
		})
		.always(function(){
			//alert ("finished");
		})
		
	})
})
function doGetJson2(url){
    $.getJSON(url,  function(){  //fonction raccourcis de l'appel AJAX
    
    console.log("coucou");
    
    })
}	

