// div pseudo caché
$('#pseudo_verif').hide();

// pseudo 
$("#myTextFocusPseudo").on('click keyup', function(){
    var pseudo_user_inscription =  $("#myTextFocusPseudo").val();
    if ($(this).val()) {
        $.ajax({
            url: "../assets/api/verifPseudo.php",
            type: "GET",
            data : "pseudo=" + pseudo_user_inscription,
            dataType: "html",
            minLength: 1,
            success : function(code_html, statut){
                if (code_html == '0'){
                    $("#myTextFocusPseudo").css("border-bottom", "1px solid green");
                    $("#myTextFocusPseudo").css("color", "green");
                    $('#pseudo_verif').hide();
                    $(".pseudo").css("color", "green");
                    $(".pseudo_exist").hide();
                    $(".pseudo_not_exist").show();
                    
                }else{
                    $("#myTextFocusPseudo").css("border-bottom", "1px solid #a81b18");
                    $("#myTextFocusPseudo").css("color", "#a81b18");
                    $('#pseudo_verif').show();
                    $(".pseudo").css("color", "#a81b18");
                    $(".pseudo_exist").show();
                    $(".pseudo_not_exist").hide();
                }
            }
        });
    } else {
        if( $("#myTextFocusPseudo").val() != ''){
            $("#myTextFocusPseudo").css("border-bottom", "1px solid #a81b18");
            $("#myTextFocusPseudo").css("color", "#a81b18");
        }else{
            $("#myTextFocusPseudo").css("border-bottom", "1px solid #ced4da");
            $("#myTextFocusPseudo").css("color", "#495057");
        }
    }
});

// div email caché
$('#email_verif').hide();

// email
$("#email_inscription").on('click keyup', function(){
    var nom_user_inscription =  $("#email_inscription").val();
    var reg_inscription = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
    if (reg_inscription.test($(this).val())) {
        $.ajax({
            url: "../assets/api/verifEmail.php",
            type: "GET",
            data : "email=" + nom_user_inscription,
            dataType: "html",
            minLength: 1,
            success : function(code_html, statut){
                if (code_html == '0'){
                    $("#email_inscription").css("border-bottom", "1px solid green");
                    $("#email_inscription").css("color", "green");
                    $('#email_verif').hide();
                    $(".email").css("color", "green");
                    $(".email_exist").hide();
                    $(".email_not_exist").show();
                    
                }else{
                    $("#email_inscription").css("border-bottom", "1px solid #a81b18");
                    $("#email_inscription").css("color", "#a81b18");
                    $('#email_verif').show();
                    $(".email").css("color", "#a81b18");
                    $(".email_exist").show();
                    $(".email_not_exist").hide();
                }
            }
        });
    } else {
        if( $("#email_inscription").val() != ''){
            $("#email_inscription").css("border-bottom", "1px solid #a81b18");
            $("#email_inscription").css("color", "#a81b18");
        }else{
            $("#email_inscription").css("border-bottom", "1px solid #ced4da");
            $("#email_inscription").css("color", "#495057");
        }
    }
});

// div jumbo caché
$('#jumbo').hide();

// div jumbo montré
$('#password_inscription').click(function(){
    $('#jumbo').show();
})

// mot de passe
$("#password_inscription").on('keyup', function(){
    var exp1 = /[0-9]{1,}/g; //contient au moins 1 chiffre 
    var exp2 = /[A-Z]{1,}/g; //contient au moins 1 majuscule

    if( $(this).val().length < 8){
        $(".caracteres").css("color", "#a81b18");
        $(".caracteres_ok").hide();
        $(".caracteres_pas_ok").show();
    }else{
        $(".caracteres").css("color", "green");
        $(".caracteres_ok").show();
        $(".caracteres_pas_ok").hide();
    }
    if(!exp1.test($(this).val())){
        $(".chiffre").css("color", "#a81b18");
        $(".chiffre_ok").hide();
        $(".chiffre_pas_ok").show();
    }else{
        $(".chiffre").css("color", "green");
        $(".chiffre_ok").show();
        $(".chiffre_pas_ok").hide();
    }
    if(!exp2.test($(this).val())){
        $(".majuscule").css("color", "#a81b18");
        $(".majuscule_ok").hide();
        $(".majuscule_pas_ok").show();
    }else{
        $(".majuscule").css("color", "green");
        $(".majuscule_ok").show();
        $(".majuscule_pas_ok").hide();
    }

    if( $(this).val() == ''){
        $(this).css("border-bottom", "1px solid #ced4da");
        $(this).css("color", "#495057");
        $(".caracteres").css("color", "#495057");
        $(".chiffre").css("color", "#495057");
        $(".majuscule").css("color", "#495057");
        $(".caracteres_ok").hide();
        $(".caracteres_pas_ok").hide();
        $(".majuscule_ok").hide();
        $(".majuscule_pas_ok").hide();
        $(".chiffre_ok").hide();
        $(".chiffre_pas_ok").hide();
    }else{
        var regPassword = new RegExp(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/);
        if (regPassword.test($(this).val())) {
            $(this).css("border-bottom", "1px solid green");
            $(this).css("color", "green");
        } else {
            $(this).css("border-bottom", "1px solid #a81b18");
            $(this).css("color", "#a81b18");
        }
    }

});

// confirmation mot de passe 
$("#confirm_password_inscription").on('keyup', function(){
    if($("#confirm_password_inscription").val() != $("#password_inscription").val()){
        $(".identique_ok").hide();
        $(".identique_pas_ok").show();
        $(".identique_pas_ok").css("color", "#a81b18");
        $(".identique").css("color", "#a81b18");
    } else {
        $(".identique_pas_ok").hide();
        $(".identique_ok").show();
        $(".identique_ok").css("color", "green");
        $(".identique").css("color", "green");
    }
});
