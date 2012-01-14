/*Fonctions perso jquery */

(function($){
    /* Verifie le formulaire au chargement de la page */
    submitOff = function() {
        $('input[type=submit]').attr('disabled', 'disabled');
        $('textarea').attr('readonly', 'readonly');
    };
    submitOn = function() {
        $('input[type=submit]').removeAttr('disabled');
        $('textarea').removeAttr('readonly');
    };

    
})(jQuery)
/* Appel de la fonction chargement au chagement de la page */

$(window).load(function() {
    submitOff()
});

/* Reset du formulaire */

$(":reset").click(function() {
   
    $("input#raison_sociale").removeClass("valide");
    $("input#prenom").removeClass("valide");
    $("input#nom").removeClass("valide");
    $("input#tel").removeClass("valide");
    $("input#mail").removeClass("valide");
    $("input#tel").removeClass("invalide");
    $("input#mail").removeClass("invalide");
    $("textarea#champ").removeClass("valide");
    $('input[type=tel]').removeAttr('disabled');
    $('input[type=email]').removeAttr('disabled');
    $('input[type=text]').removeAttr('readonly');
    $('textarea').removeAttr('readonly');
    submitOff();
})

/*vérification formulaire raison_sociale*/

$(document).ready(function() {

    $("#raison_sociale").keyup(function() {
        var value = $("input#raison_sociale").val();
        if (value !='' ) $("input#raison_sociale").addClass("valide");
    });
});

/*vérification formulaire prenom*/

$(document).ready(function() {

    $("#prenom").keyup(function() {
        var value = $("input#prenom").val();
        if (value !='' ) $("input#prenom").addClass("valide");
    });
});

/*vérification formulaire nom*/

$(document).ready(function() {

    $("#nom").keyup(function() {
        var value = $("input#nom").val();
        if (value !='' ) $("input#nom").addClass("valide");
    });
});

/*vérification formulaire téléphone*/

$(document).ready(function() {

    $("#tel").bind("keyup mouseover",function() {
        var value = $("input#tel").val();
        var donnee = {
            tel : value
        };
        $.ajax({
            url : 'scripts/controleformulaire.php',
            data : donnee,
            complete : function(xhr, result) {
                if(result != "success")
                    alert('error');
                var result = xhr.responseText;
                $("input#tel").removeClass("valide");
                $("input#tel").removeClass("invalide");
                $("input#tel").addClass(result);
                if($("input#tel").hasClass("invalide")|| value =='') {
                    submitOff();
                } else submitOn();
                
            }
        })
        
    });
});

/*vérification formulaire mail*/

$(document).ready(function() {

    $("#mail").bind("keyup mouseover",function() {
        var value = $("input#mail").val();
        var donnee = {
            mail : value
        };
        $.ajax({
            url : 'scripts/controleformulaire.php',
            data : donnee,
            complete : function(xhr, result) {
                if(result != "success")
                    alert('error');
                var result = xhr.responseText;
                $("input#mail").removeClass("valide");
                $("input#mail").removeClass("invalide");
                $("input#mail").addClass(result);
                if($("input#mail").hasClass("invalide") || value =='') {
                    submitOff();
                } else submitOn();
            }
        })
      
    });
});

/*vérification formulaire zone de texte*/

$(document).ready(function() {

    $("textarea#champ").keyup(function() {
        var value = $("textarea#champ").val();
//        if (value !='' ) submitOn();
    });
});


/* Fonction pour l'envoie des mails */

$(document).ready(function() {

    $("#formulaire").submit(function(e) {
        e.preventDefault();
        var message = $("textarea#champ").val();
        var phone = $("input#tel").val();
        var email =$("input#mail").val();
        var rs = $("input#raison_sociale").val();
        var nomd = $("input#nom").val();
        var prenomd = $("input#prenom").val();
        var donnee = {
            message : message,
            phone   : phone,
            mail    : email,
            societe : rs,
            nom     : nomd,
            prenom  : prenomd
        };
        $.ajax({
            url : 'scripts/mail.php',
            data : donnee,
            complete : function(xhr, result) {
                if(result != "success")
                    alert('error');
                var result = xhr.responseText;
                $("#reponse").css({
                    "display" : "block"
                });
                $("#reponse").click(function(){
                    $(this).css({
                        "display" : "none"
                    })
                });
                $("#reponse").prepend(result);
                $('input[type=submit]').attr('disabled', 'disabled');
                $('input[type=tel]').attr('disabled', 'disabled');
                $('input[type=email]').attr('disabled', 'disabled');
                $('input[type=text]').attr('readonly', 'readonly');
                $('textarea').attr('readonly', 'readonly');
            }
        })
    });
});

