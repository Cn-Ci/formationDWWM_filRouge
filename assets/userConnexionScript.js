// div email caché
$('#email_verif').hide();


// email
$("#myTextFocusEmail").on('click keyup', function(){
    var nom_user_inscription =  $("#myTextFocusEmail").val();
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
                    $("#myTextFocusEmail").css("border-bottom", "1px solid #a81b18");
                    $("#myTextFocusEmail").css("color", "#a81b18");
                    $('#email_verif').show();
                    $(".email").css("color", "#a81b18");
                    $(".email_exist").hide();
                    $(".email_not_exist").show();                    
                }else{
                    $("#myTextFocusEmail").css("border-bottom", "1px solid green");
                    $("#myTextFocusEmail").css("color", "green");
                    $('#email_verif').hide();
                    $(".email").css("color", "green");
                    $(".email_exist").show();
                    $(".email_not_exist").hide();
                }
            }
        });
    } else {
        if( $("#myTextFocusEmail").val() != ''){
            $("#myTextFocusEmail").css("border-bottom", "1px solid #a81b18");
            $("#myTextFocusEmail").css("color", "#a81b18");
        }else{
            $("#myTextFocusEmail").css("border-bottom", "1px solid #ced4da");
            $("#myTextFocusEmail").css("color", "#495057");
        }
    }
});