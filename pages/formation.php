<?php
include("../scripts/error_log.php");
include_once('../scripts/connect.php');
mysql_select_db($dbname, $conn);
mysql_query("SET NAMES 'utf8'");
$sql = "SELECT * FROM `rubriques` ";
$rubs = mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Formations</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet"  href="../styles/styles.css"/>
        <link rel="stylesheet"  href="../styles/formation.css"/>
        <link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
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
                <li><a href="../index.php#presentation_activite" id="presentation">Présentation</a></li>
                <li><a href="../index.php#activite_formation" id="formation">Formations</a></li>
                <li><a href="../index.php#activite_conception_web" id="conception">Conception web</a>   
                    <ul>
                        <li><a href="nos_sites_vitrine.html">Site vitrine</a></li>
                        <li><a href="nos_sites_bases_cms.html">Site communiquant</a></li>
                        <!--<li><a href="nos_ateliers_de_formation.html">Atelier</a></li>-->
                        <li><a href="offre_referencement.html">Référencement</a></li>
                    </ul>   
                <li><a href="../index.php#activite_developpement" id="dev">Solutions sur mesure</a>
                    <ul>
                        <li><a id="bleu" href="developpement.html">Exemple</a></li>
                    </ul>
                </li>
                <li><a href="../index.php#contact_et_devis" id="tarifs">Contact & devis</a></li>
            </ul>
        </nav>
        <section id="contenu">
            <div id="activite_formation">
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
            &copy; - 2011 BeSeen-Concept
        </footer>
        <!--[if IE]><script src="../scripts/roundies.js"></script><![endif]-->
        <script src="../scripts/script.js"></script>
        <script src="../jquery/jquery-1.6.3.js"></script>
        <script src="../scripts/formations.js" type="text/javascript"></script>
        <!--[if IE]><script src="../jquery/jquery.textshadow.js"></script>
        <script src="../scripts/ie.js"></script><![endif]-->
        <!--[if lte IE 8]><script src="../scripts/excanvas.js"></script>
        <script src="../scripts/ie8canvas.js"</script><![endif]-->
    </body>
</html>
