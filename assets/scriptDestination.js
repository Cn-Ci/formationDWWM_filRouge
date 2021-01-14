// Afficher le formulaire d'ajout ou de modification, selon le bouton - Destination
$('div button').click(function(e) {
    let id = e.target.id;
    var displayForm = $("#form" + id);
    console.log("#form" + id);

    if (displayForm.css("display") === "none") {
        displayForm.attr("style", "display:block");
    } else if (displayForm.css("display", "block")) {
        displayForm.css("display", "none");
    }
});

//dynamiser l'affichage des destinations 

var map = document.querySelector('#map')
var paths = map.querySelectorAll('.map__image a')
var links = map.querySelectorAll('.map__list a')

function transmissionRegion() {
    console.log('coucou');
}


$(document).ready(function() {
    $('.')
    $('.map a').click(function(e) {
        console.log(e.currentTarget.id);
        let region = e.currentTarget.id;
        let url = 'controllerDestination.php?region=' + region
        $.get(url, transmissionRegion(region)).done(function(data) {

            })
            .fail(function() {
                alert("error");
            })
            .always(function() {
                //alert ("finished");
            })

    })
})

function doGetJson2(url) {
    $.getJSON(url, function() { //fonction raccourcis de l'appel AJAX

        console.log("coucou");

    })
}

append to div class = "principale"