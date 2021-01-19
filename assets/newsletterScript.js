// div resultat caché
$('#emailNewsletter_verif').hide();

// email newsletter
$("#email").on('click keyup', function(){
    var nom_user_inscription =  $("#email").val();
    var reg_inscription = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
    if (reg_inscription.test($(this).val())) {
        $.ajax({
            url: "../assets/api/verifEmailNewsletter.php",
            type: "GET",
            data : "email=" + nom_user_inscription,
            dataType: "html",
            minLength: 1,
            success : function(code_html, statut){
                if (code_html == '0'){
                    $("#email").css("border-bottom", "1px solid green");
                    $("#email").css("color", "green");
                    $('#emailNewsletter_verif').hide();
                    $(".emailNewsletter").css("color", "green");
                    $(".emailNewsletter_pas_ok").show();
                    $('.emailNewsletter_ko').hide();
                    
                }else{
                    $("#email").css("border-bottom", "1px solid #a81b18");
                    $("#email").css("color", "#a81b18");
                    $('#emailNewsletter_verif').show();
                    $(".emailNewsletter").css("color", "#a81b18");
                    $(".emailNewsletter_pas_ok").hide();
                    $('.emailNewsletter_ko').hide();
                }
            }
        });
    } else {
        if( $("#email").val() != ''){
            $("#email").css("border-bottom", "1px solid #a81b18");
            $("#email").css("color", "#a81b18");
        }else{
            $("#email").css("border-bottom", "1px solid #ced4da");
            $("#email").css("color", "#495057");
        }
    }
});
    


// resultat
$("#form").on('submit', function(e){
    e.preventDefault();
    const email = $("#email").val();   
        $.ajax
        ({
            url: "../assets/api/addEmailNewsletter.php",
            type: "POST",
            data : "email=" + email,
            dataType: "html",
            minLength: 1,
            success: function(code_html, status) {
                if(code_html == '1' ){
                    $('#emailNewsletter_verif').show();
                    $(".emailNewsletter_ok").show();
                    $(".emailNewsletter_pas_ok").hide();
                    $(".emailNewsletter").css("color", "green");   
                }
                else {
                    $('#emailNewsletter_verif').show();
                    $(".emailNewsletter_ok").hide();
                    $(".emailNewsletter_pas_ok").show();
                    $(".emailNewsletter").css("color", "#a81b18");
                }
            }
        })
});
