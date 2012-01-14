<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>BeSeen-Concept</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="styles/styles.css"/>
        <link rel="stylesheet" href="styles/index.css"/>
        <link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
        <!--[if IE 8]> <html class="ie8 oldie" lang="fr"> <![endif]-->
        <!--[if lte IE 7]> <html class="ie7 oldie" lang="fr"> <![endif]-->
        <!--[if gt IE 8]> <html lang="fr"> <![endif]--> 
        <!--[if IE]><link rel="stylesheet" href="styles/ie.css"><![endif]-->
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    </head>
    <body>
        <!--[if lte IE 7]>
            <div class="alert-ie">
            <p><strong>Attention ! </strong> Votre navigateur (Internet Explorer 6 ou 7) est obsolète.
            <br>Ce site ne s'affichera pas de manière optimale.
            Navigateur compatible : (<a href="http://www.browserforthebetter.com/download.html" style="color: #fff;">Internet Explorer 8+</a>, <a href="http://www.mozilla-europe.org/fr/firefox/" style="color: #fff;">Firefox</a>, <a href="http://www.google.com/chrome?hl=fr" style="color: #fff;">Chrome</a>, <a href="http://www.apple.com/fr/safari/download/" style="color: #fff;">Safari</a>,...)</p>
            </div>
        <![endif]-->

        <header>
            <canvas id="canvas" width="160" height="100"></canvas>
            <a><img src="media/images/twitter_ban.png" alt="logo twitter"></a>
            <a><img src="media/images/facebook_banniere.png" alt="logo Facebook"></a>	
            <a target="_blank" href="http://www.blog.beseenconcept.fr">
                <img src="media/images/wordpress_banniere.png" alt="logo worpress" title="Visitez notre blog">
            </a>
            <h1>BeSeen<span id="ts">-Concept</span></h1>
        </header>
        <nav>
            <ul>
                <li><a href="#presentation_activite" id="presentation">Présentation</a></li>
                <li><a href="#activite_formation" id="formation">Formations</a>
                    <ul>
                        <li><a id="orange" href="pages/formation.php">Catalogue</a></li>
                    </ul>
                </li>
                <li><a href="#activite_conception_web" id="conception">Conception web</a>   
                    <ul>
                        <li><a href="pages/nos_sites_vitrine.html">Site vitrine</a></li>
                        <li><a href="pages/nos_sites_bases_cms.html">Site communiquant</a></li>
                        <!--<li><a href="pages/nos_ateliers_de_formation.html">Ateliers</a></li>-->
                        <li><a href="pages/offre_referencement.html">Référencement</a></li>
                    </ul>   
                <li><a href="#activite_developpement" id="dev">Solutions sur mesure</a>
                    <ul>
                        <li><a id="bleu" href="pages/developpement.html">Exemple</a></li>
                    </ul>
                </li>
                <li><a href="#contact_et_devis" id="tarifs">Contact & devis</a></li>
            </ul>
        </nav>
        <section id="contenu">
            <div id="presentation_activite">
                <article class="left">
                    <img class="lettrine" src="media/images/beseen.png" alt="Logo page principale"><h2>Formations, conceptions web et developpements d'applications sur mesure.</h2>
                    <p>
                        Jeune entrepreneur, je vous apporte au quotidien mon expertise et mon expérience 
                        en basant mes actions sur trois points essentiels :
                    <ul>
                        <li>Votre productivité et celle de vos collaborateurs</li>
                        <li>Votre présence et votre visibilité sur Internet</li>
                        <li>La création et l'optimisation de vos outils internes</li>
                    </ul>
                    </P>
                    <p>
                        Je propose en ce sens, pour vous et vos équipiers : 
                    <ul>
                        <li><a href="#activite_formation">Des formations de qualité dispensées par des formateurs certifiés</a></li>
                        <li><a href="#activite_conception_web">La création de sites web basés sur les standarts les plus récents</a></li>
                        <li><a href="#activite_developpement">Le développement de solutions logicielles sur mesure</a></li>
                        <li><a href="pages/referencement.html">La refonte et le référencement de vos sites web actuels.</a></li>
                    </ul>
                    </p>
                    <div id="signature">Sébastien Bodrero</div>
                    <p id="qualification">
                        <a href="https://www.mcpvirtualbusinesscard.com/VBCServer/beseenconcept.fr/profile" target="_blank" title="Détails des certifications">Formateur, développeur certifiée "Microsoft"<img src="media/images/mcp.png" alt="Logo certifications Microsoft"></a>
                    </p>
                </article>
                <div class="right">PRESENTATION</div>
            </div>
            <!-- fin contenu 1 -->
            <div id="activite_formation">
                <article class="left">
                    <img class="lettrine" src="media/images/formation_ban.png" alr="Logo service formation"><h2>Se former pour maintenir ou améliorer sa productivité et sa competitivité...</h2>
                    <p>
                        La concurrence, votre productivité ou encore les éxigences de vos clients imposent une mise à niveau constante et croissante des
                        compétences de vos collaborateurs.
                    </p>
                    <p>
                        Beseen-Concept vous acompagne au quotidien sur le terrain de la formation en proposant des programmes à la carte garanties 
                        par des formateurs performants et certifiés sur les dernières techniques et technologies.
                    </p>
                    <p>
                        Nous proposons une large gamme de thèmes parmis : 
                    </p>
                    <ul>
                        <li>La bureautiques</li>
                        <li>Le développement</li>
                        <li>Les bases de données</li>
                        <li>Les outils du web</li>
                        <li>Le web Design</li>
                        <li>Les outils de manipulation de l'image</li>
                    </ul>
                    <p>
                        Vous disposez de la garantie d'un <a href="pages/agrement.html" title="Centre éligible au DIF">centre de formation agrée
                            par les organismes paritaires de formation proféssionnelles pour adultes</a>.
                    </p>
                    <!-- TODO afficher le numéro d'agrément au survol de centre de formation agée-->
                    <p>
                        Que ce soit pour vos besoins techniques ou bureautiques vous trouverez surement votre formule 
                        parmis nos prestations en la matière en parcourant <a href="pages/formation.php" title="Catalogue de nos formations">notre catalogue de formations.</a>
                    </p>
                </article>
                <div class="right">FORMATIONS</div>
            </div>
            <!-- fin contenu 2 -->
            <div id="activite_conception_web">
                <article class="left">
                    <img class="lettrine" src="media/images/web-ban2.png" alt="Logo conception web"><h2>Se mettre à nu pour être choisi...Un concept prometteur.</h2>
                    <p>
                        La visibilité de votre entreprise ne se limite pas à la luminosité de votre enseigne et à la décoration de votre vitrine.
                    </p>
                    <p>
                        Aujourd'hui de plus en plus de transactions commerciales et professionnelles s'effectuent sur la "toîle" par le biais des réseaux sociaux et de bloggeurs influents
                        qui scrutent le net.
                    </p>
                    <p>
                        Plus que jamais, votre présence sur le web s'avère nécessaire pour assurer la perenité de votre affaire.
                    </p>
                    <p>
                        BeSeen-Concept propose des sites web basés sur les standarts les plus récents conçus par notre équipe de
                        développeurs qui vous accompagne à chaque phase de votre "naissance" sur l'Internet :
                    </p>
                    <ul>
                        <li><a target="_blank" href="pages/objectif_de_votre_site.html" title="Quel est l'objectif de votre site ? quelle est votre cible ? Site vitrine, communiquant ?">Rédaction de votre cahier des charges</a></li>
                        <li>Réalisation de votre site</li>
                        <li>Déclaration de votre nom de domaine</li>
                        <li>Hébergement et administration de votre site</li>
                        <li><a href="pages/offre_referencement.html" title="Notre offre de référencement">Réferencement et positionnement de votre site</a></li>
                        <!--<li>Contrat avec des Bloggeurs influents</li>--><!--TODO recruter des bloggeurs-->
                    </ul>
                    <p>
                        En ce sens, nous proposons 2 formules : <a href="pages/nos_sites_originaux.html" title="Site vitrine présentant votre activité">les sites originaux</a>,
                        <a href="pages/nos_sites_bases_cms" title="Site partagé par plusieurs collaborateurs dont le contenu est dynamique">Les sites basés sur un CMS</a>. 
                    </p>
                </article>
                <div class="right">CONCEPTION WEB</div>
            </div>
            <!-- fin contenu 3 -->
            <div id="activite_developpement">
                <article class="left">
                    <img class="lettrine" src="media/images/dev_bang.png" alt="Logo developpement">
                    <h2>Perdu dans la jungle des offres logicielles ? </h2></br>
                    <p>Vous êtes comme de nombreux entrepreneurs ?<p> 
                    <ul>
                        <li>Vous naviguer d'un logiciel à l'autre pour effectuer vos taches quotidiennes</li>
                        <li>Votre fichier client est éparpillé sur plusieurs pc et difficile à mettre à jour</li>
                        <li>Vous faites des imports puis des exports entre tous vos outils incapables de s'entendre</li>
                        <li>Vous passez un temps fou à sauvegarder de multiples et redondantes bases de données</li>
                    </ul>
                    <p>En bref ! Vous perdez du temps, de l'argent et surtout des clients ! <p>
                    <p>Vous étes à la recherche d'une solutions logiciels simple qui ne fait que son travail
                        mais qui le fait bien et les offres du marché ne vous conviennent guère.</p>
                    <p>Nous pouvons surement vous aidez ! </p>
                    <p>Nous développons sur demande, dans le cadre de projets proféssionnels spécifiques, des solutions 
                        et des outils capables de satisfaire vos besoins. Nous proposons des solutions personalisées ouvertes, evolutives et
                        capables de vous accompagner tout au long de votre réussite.</p>
                    <p id="exemple">Regardez notre exemple...
                        <a href="pages/dev.html" title="Exemple">
                            <img src ="media/images/engrenage.png" alt="engrenage"> 
                        </a>
                    </p>
                </article>
                <div class="right">SOLUTIONS SUR MESURE</div>
            </div>
            <!-- fin contenu 4 -->
            <div id="contact_et_devis">
                <article class="left">
                    <h2>Une idée, un projet ?</h2>
                    <p>Vous souhaitez des informations complémentaires sur nos prestations, un tarif, un devis.
                        Remplissez ce formulaire et nous vous contacterons dans les plus brefs délais.</p>
                    <fieldset>
                        <legend>Merci de saisir vos coordonnées</legend>
                        <form id="formulaire" methode="post" action="index.php#contenu5">
                            <label for="raison_sociale">Raison social</label>
                            <input type="text" name ="raison_sociale" id="raison_sociale" value="" autofocus>
                            <span></span>
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom">
                            <span></span>
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" id="prenom">
                            <span></span>
                            <label for="tel">N° de téléphone</label>
                            <input type="tel" name="tel" id="tel">
                            <span></span>
                            <label for="mail">Email</label>
                            <input type="email" name="mail" id="mail">
                            <span></span>
                            <div id="details">
                                <fieldset>
                                    <legend>Merci de détailler votre demande</legend>
                                    <textarea name="champ" id="champ">
                                    </textarea>
                                    <span></span>
                                </fieldset>
                            </div>
                            <input type="reset" name="reset" value="Effacer">
                            <input type="submit" name="envoyer" value="Envoyer">
                        </form>
                    </fieldset>
                    <p>Nous contacter : </p>
                    <div class="vcard">
                        <span><a class="url fn" href="http://beseenconcept.fr">Sébastien Bodrero</a></span>
                        <span class="org">Organisation : <span><span class="value">Beseen-Concept</span></br>
                                <span>Courriel : <a class="email" href="mailto:sbodero@beseenconcept.fr">sbodero@beseenconcept.f</a><span></br>
                                        <span class="adr">
                                            <span>Adresse :</span>
                                            <span class="street-address">11, chemin Labriart</span>
                                            <span class="postal-code">64000</span> 
                                            <span class="locality">Pau</span> 
                                            <span class="country-name">France</span></br>
                                            <span class="tel">Téléphone : <span class="value">06 49 67 63 33</span>
                                                </div>
                                                </article>
                                                <div class="right">CONTACT & DEVIS</div>
                                                </div>
                                                <!-- fin contenu 5 -->
                                                <div id="reponse"></div>
                                                </section>
                                                <!-- fin contenu-->
                                                <footer>
                                                    &copy; 2011 BeSeen-Concept . <a href="pages/agrement.html">Mentions légales</a>
                                                </footer>               
                                                <!--[if IE]><script src="scripts/roundies.js"></script><![endif]-->
                                                <script type="application/x-javascript" src="scripts/script.js"></script>
                                                <script src="jquery/jquery-1.6.3.js"></script>
                                                <!--[if IE]><script src="jquery/jquery.textshadow.js"></script>
                                                <script src="scripts/ie.js"></script><![endif]-->
                                                <!--[if lte IE 8]><script src="scripts/excanvas.js"></script>
                                                <script src="scripts/ie8canvas.js"</script><![endif]-->
                                                <script src="scripts/ajax.js"></script>
                                                </body>
                                                </html>
