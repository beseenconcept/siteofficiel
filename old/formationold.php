<?php
include("../scripts/error_log.php");
include_once('../scripts/connect.php');
mysql_select_db($dbname, $conn);
//mysql_query("SET NAMES 'utf8'");
$sql = "SELECT * FROM `rubriques` ";
$rubs = mysql_query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Formations</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet"  href="../styles/styles.css"/>
        <link rel="stylesheet"  href="../styles/formation.css"/>
        <link href='http://fonts.googleapis.com/css?family=Dr+Sugiyama|Salsa|Satisfy|Rochester|Dancing+Script:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
        <!--[if IE]><link rel="stylesheet" href="../styles/ie.css"><![endif]-->
        <!--[if IE 8]> <html class="ie8 oldie" lang="fr"> <![endif]-->
        <!--[if lte IE 7]> <html class="ie7 oldie" lang="fr"> <![endif]-->
        <!--[if gt IE 8]> <html lang="fr"> <![endif]-->
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body>
        <header>
            <canvas id="canvas" width="160" height="100"></canvas>
            <a><img src="../media/images/twitter_ban.png" alt="logo twitter"></a>
            <a><img src="../media/images/facebook_banniere.png" alt="logo Facebook"></a>	
            <a target="_blank" href="http://www.blog.beseenconcept.fr">
                <img src="../media/images/wordpress_banniere.png" alt="logo worpress" title="Visitez notre blog">
            </a>
            <h1>Formations</h1>
        </header>
        <nav>
            <ul>
                <li><a href="../index.php#contenu1" id="presentation">Présentation</a></li>
                <li><a href="../index.php#contenu2" id="formation">Formations</a></li>
                <li><a href="../index.php#contenu3" id="conception">Conception web</a>   
                    <ul>
                        <li><a href="web.html#site">Site original</a></li>
                        <li><a href="web.html#cms">CMS</a></li>
                        <li><a href="web.html#atelier">Atelier</a></li>
                        <li><a href="web.html#reference">Référencement</a></li>
                    </ul>   
                <li><a href="../index.php#contenu4" id="dev">Solutions sur mesure</a>
                    <ul>
                        <li><a id="bleu" href="dev.html">Exemple</a></li>
                    </ul>
                </li>
                <li><a href="../index.php#contenu5" id="tarifs">Contact & devis</a></li>
            </ul>
        </nav>
        <section id="contenu">
            <div id="contenu2">
                <section class="left">
                    <aside>
                        <form>
                            <select>
                                <option> Formations par thèmes : </option>
                                <?php
                                while ($rub = mysql_fetch_assoc($rubs)) {
                                    echo "<option value='" . $rub['ch_rub_folder'] . "'>" . $rub['ch_rub_label'] . "</option>";
                                }
                                ?>
                            </select>
                            <label for="input_search">Recherche par mot clé : </label>
                            <input name="saisie_search" type="text" id="saisie_search" onKeyUp="autocompleted(this.value)"/>
                            <input type="submit" value="Envoi" onclick="send_search()" />
                            <hr>
                            <!--<img id="loader" src="styles/loader.gif" style="display:inline" alt="loader" />-->
                            <div id="input_search">
                                <!-- TODO verifier la pertinence de cette balise div-->
                                <div id="suggest">
                                </div>
                            </div>
                        </form>
                    </aside>
                    <div id="maincontent">
                        <div id="planche-contact">

                        </div>
                    </div>
                </section>
                <div class="right"></div>

            </div>
        </section>
        <footer>
            <nav>
                <div id="racweb">
                    <article><a href="web.html">Conception web</a></article>
                </div>
                <div id="racdev">
                    <article><a href="dev.html">Développement</a></article>
                </div>
                <div id="raccontact">
                    <article><a href="../index.php#contenu5">Contact & devis</a></article>
                </div>
            </nav>
            <span>&copy; - 2011 BeSeen-Concept</span>
        </footer>
        <script type="application/x-javascript" src="../scripts/script.js"></script>
        <script src="../jquery/jquery-1.6.3.js"></script>
        <!--[if IE]><script src="../jquery/jquery.textshadow.js"></script>
        <script src="../scripts/ie.js"></script><![endif]-->
    </body>
</html>
