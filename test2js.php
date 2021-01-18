<head>
<?php 
include_once('templates/header.php');
?>
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<form>
  <p>Entrer une adresse e-mail:</p>
  <input id='email'>
  <input type='button' id='valider' value='Valider' />
  <p>Entrer un pseudo</p>
  <input id='pseudo'>
  <input type='button' id='valider' value='Valider' />
  <p>Entrer une mot de passe</p>
  <input id='password_inscription_apprenant'>
  <input type='button' id='valider' value='Valider' />
</form>
<div id="resultat"></div>
<div class="row">
    <div class="col-12">
        <div id="jumbo" class="jumbotron">Le mot de passe doit comporter au moins 
            <div class="col-12">
                <span class="caracteres">
                    <span class="caracteres_ok"><i class="fas fa-check-circle"></i></span>
                    <span class="caracteres_pas_ok"><i class="fas fa-times-circle"></i></span><b>8 caractères</b>
                </span>
            </div>
            <div class="col-12">
                <span class="chiffre">
                    <span class="chiffre_ok"><i class="fas fa-check-circle"></i></span>
                    <span class="chiffre_pas_ok"><i class="fas fa-times-circle"></i></span><b>1 chiffres</b>
                </span>
            </div>
            <div class="col-12">
                <span class="majuscule">
                    <span class="majuscule_ok"><i class="fas fa-check-circle"></i></span>
                    <span class="majuscule_pas_ok"><i class="fas fa-times-circle"></i></span><b>1 majuscule</b>
                </span>
            </div>
        </div>
    </div>
</div>
<script>
function validerEmail(email) {
        var re = new RegExp(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/);
        return re.test(email);
}

function valider() {
  $("#resultat").text("");
  var email = $("#email").val();

  if (validerEmail(email)) {
    $("#resultat").text(email + " est valide.");
    $("#resultat").css("color", "green");
  } else {
    $("#resultat").text(email + " n'est pas valide.");
    $("#resultat").css("color", "red");
  }
 
}
$("#valider").bind("click", valider);

