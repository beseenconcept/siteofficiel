<?php
if (isset($_REQUEST['tel'])) {
	if (preg_match("/^0[0-9]([ .-]?[0-9]{2}){4}$/", $_REQUEST['tel']) || $_REQUEST['tel'] =='') {
		echo("valide");
	} else {

		echo("invalide");
	}

}

if (isset($_REQUEST['mail'])) {
	if (preg_match("/^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$/", $_REQUEST['mail']) || $_REQUEST['mail'] =='') {
		echo("valide");
	} else {

		echo("invalide");
	}

}

if (isset($_REQUEST['champ'])) {
	if ($_REQUEST['champ'] !='') {
		echo("valide");
	} else {

		echo("invalide");
	}

}
?>