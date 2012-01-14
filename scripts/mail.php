<?php

/*
 * Sends mail from form
 * 
 */

$txt = "Mail de : \n" . $_REQUEST['societe'] . " " . $_REQUEST['prenom'] . " " . $_REQUEST['nom'] . "\n";
$txt .= "Message : \n" . $_REQUEST['message'] . "\n";
$txt .= "Téléphone : " . $_REQUEST['phone'] . "\n";
$txt .= " ". $_REQUEST['mail'] . "";
$txt = utf8_encode($txt);

$destinataire = "sbodrero@beseenconcept.fr";
$sujet = "Formulaire site beseenconcept";

if(mail($destinataire, $sujet, $txt)) {
   $texte = "<p>Votre méssage a été envoyé avec succès ! </br>
       Nous vous contacterons rapidement. Merci.</p>";
   echo $texte;
} else {
   $texte = "<p>Erreur lors de l'envoie de votre méssage veuillez 
       recommencer ou joindre botre équipe par mail ou téléphone svp !</p>";
   echo $texte;
}
?>