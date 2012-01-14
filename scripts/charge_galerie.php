<?php

/*
 * Script charge image
 * 
 */
include_once("../Scripts/connect.php");
header('Content-Type: text/xml');
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 10 Jul 1990 05:00:00 GMT');


mysql_select_db($dbname, $conn);
mysql_query("SET NAMES 'utf8'");

$ch_img_rubId = $_REQUEST['categorie'];
$sql = "SELECT * FROM `images` WHERE `ch_img_rubId`='" . $ch_img_rubId . "'";

$xml = '<?xml version="1.0" encoding="utf-8"?>';

$categorie = mysql_query($sql);
if (mysql_num_rows($categorie) != 0) {
    $xml .= '<images>';
    while ($image = mysql_fetch_assoc($categorie)) {
        $xml .= '<ch_img_fichier>' . $image['ch_img_fichier'] . '</ch_img_fichier>';
        $xml .= '<ch_img_id>' . $image['ch_img_id'] . '</ch_img_id>';
        $xml .= '<ch_img_rubId>' . $image['ch_img_rubId'] . '</ch_img_rubId>';
        $xml .= '</image>';
    }
    $xml .= '</images>';
} else {
    $xml .= "<erreur>Il semble qu'il n'y ait pas d'images pour la catégorie " . $ch_img_rubId . ".</erreur>";
}
echo $xml;
?>
