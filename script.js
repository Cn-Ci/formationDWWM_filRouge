$(document).ready(function(){
	$('#BoutonBurgermenuTab').click(function(){
        $('.menuTab').toggleClass('isOpen');
		$('#BoutonBurgermenuTab .barre1').toggleClass('isClick');
        $('#BoutonBurgermenuTab .barre2').toggleClass('isClick');  
	});
});

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
	

