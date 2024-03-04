<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accueil</title>
        <link rel="stylesheet" href="Css/Accueil.css">
        <link rel="stylesheet" href="Css/Navbar.css">
        <link rel="stylesheet" href="Css/Footer.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        


    </head>
    <body bgcolor="black">

    <nav>
                <div class="logo">
                    <a href="index.php">
                        <img src="Image/MicrosoftTeams-image.png" alt="Your Logo">
                    </a>
                </div>
                <ul class="menu">
                  <li><a href="index.php">Accueil</a></li>
                  <li><a href="PHP/Voiture.php">Voitures</a></li>
                  <li><a href="PHP/Demande_essai.php">Demande d'essai</a></li>
                  <li><a href="PHP/evenement.php">Évènements</a></li>
                  <li><a href="PHP/Contact.php">Contact</a></li>
                </ul>

                <?php
                    session_start();

                    if(isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['idinscription']) && isset($_SESSION['email'])) {
                        $nom = $_SESSION['nom'];
                        $prenom = $_SESSION['prenom'];
                        $idinscription = $_SESSION['idinscription'];
                        $email = $_SESSION['email'];
                        echo "<div  class='dropdown'>
                              <a>$nom $prenom</a>
                            <div class='dropdown-content'>
                            <a href='profile.php'>Profil</a>
                            <a href='deconnexion.php'>Déconnexion</a>
                            </div>
                            
                            </div>";
                        } else {
                            echo "<div class='login'>
                            <a href='inscription.php'>Connexion</a>
                          </div>";
                        }
                        
                ?>
                
        </nav>

    <div class="overlay">
    <div class="popup">
        <h2>Termes et conditions</h2>
        <div class="scroll-container">
            
            <p><table>
            <tr>
                <td>
                    <p style="text-align: center;"><strong>POLITIQUE DE CONFIDENTIALITÉ</strong></p>
                    <p style="text-align: center;"><strong>DU SITE&nbsp;: </strong></p>
                    <p style="text-align: center;"><strong><span id="span_id_nom_du_site"  >SuperCar</span> </strong></p>
                    <p><br /><br /></p>
                    <p style="text-align: center;"><strong>ARTICLE 1&nbsp;: PRÉAMBULE<br /><br /></strong></p>
                    <p>Cette politique de confidentialité s'applique au site&nbsp;: <span id="span_id_nom_du_site"  >SuperCar</span>. <br /><br /></p>
                    <p>La présente politique de confidentialité a pour but d'exposer aux utilisateurs du site&nbsp;:</p>
                    <ul>
                    <li>La manière dont sont collectées et traitées leurs données à caractère personnel. Doivent être considérées comme données personnelles toutes les données étant susceptibles d'identifier un utilisateur. Il s'agit notamment du prénom et du nom, de l'âge, de l'adresse postale, l'adresse mail, la localisation de l'utilisateur ou encore son adresse IP&nbsp;;</li>
                    </ul>
                    <ul>
                    <li>Quels sont les droits des utilisateurs concernant ces données&nbsp;;</li>
                    </ul>
                    <ul>
                    <li>Qui est responsable du traitement des données à caractère personnel collectées et traitées&nbsp;;</li>
                    </ul>
                    <ul>
                    <li>A qui ces données sont transmises&nbsp;;</li>
                    </ul>
                    <ul>
                    <li>Eventuellement, la politique du site en matière de fichiers "cookies".</li>
                    </ul>
                    <p><br />Cette politique de confidentialité complète les mentions légales et les Conditions Générales d'Utilisation que les utilisateurs peuvent consulter à l'adresse ci-après&nbsp;:</p>
                    <p style="padding-left: 30px;"><span id="span_id_url_cgu"  >Supercar/Privacy.com</span></p>
                    <p style="text-align: center;"><span style="font-weight: bold; font-size: 14.56px;"><br /></span><strong>ARTICLE 2&nbsp;: PRINCIPES GÉNÉRAUX EN MATIÈRE DE COLLECTE ET DE TRAITEMENT DE DONNÉES</strong><br /><br /></p>
                    <p>Conformément aux dispositions de l'article 5 du Règlement européen 2016/679, la collecte et le traitement des données des utilisateurs du site respectent les principes suivants&nbsp;:</p>
                    <ul>
                    <li>Licéité, loyauté et transparence&nbsp;: les données ne peuvent être collectées et traitées qu'avec le consentement de l'utilisateur propriétaire des données. A chaque fois que des données à caractère personnel seront collectées, il sera indiqué à l'utilisateur que ses données sont collectées, et pour quelles raisons ses données sont collectées&nbsp;;</li>
                    </ul>
                    <ul>
                    <li>Finalités limitées&nbsp;: la collecte et le traitement des données sont exécutés pour répondre à un ou plusieurs objectifs déterminés dans les présentes conditions générales d'utilisation&nbsp;;</li>
                    </ul>
                    <ul>
                    <li>Minimisation de la collecte et du traitement des données&nbsp;: seules les données nécessaires à la bonne exécution des objectifs poursuivis par le site sont collectées&nbsp;;</li>
                    </ul>
                    <ul>
                    <li>Conservation des données réduites dans le temps&nbsp;: les données sont conservées pour une durée limitée, dont l'utilisateur est informé. Lorsque cette information ne peut pas être communiquée, l'utilisateur est informé des critères utilisés pour déterminer la durée de conservation&nbsp;;</li>
                    </ul>
                    <ul>
                    <li>Intégrité et confidentialité des données collectées et traitées&nbsp;: le responsable du traitement des données s'engage à garantir l'intégrité et la confidentialité des données collectées.<br /><br /></li>
                    </ul>
                    <p>Afin d'être licites, et ce conformément aux exigences de l'article 6 du règlement européen 2016/679, la collecte et le traitement des données à caractère personnel ne pourront intervenir que s'ils respectent au moins l'une des conditions ci-après énumérées&nbsp;:</p>
                    <ul>
                    <li>L'utilisateur a expressément consenti au traitement&nbsp;;</li>
                    </ul>
                    <ul>
                    <li>Le traitement est nécessaire à la bonne exécution d'un contrat&nbsp;;</li>
                    </ul>
                    <ul>
                    <li>Le traitement répond à une obligation légale&nbsp;;</li>
                    </ul>
                    <ul>
                    <li>Le traitement s'explique par une nécessité liée à la sauvegarde des intérêts vitaux de la personne concernée ou d'une autre personne physique&nbsp;;</li>
                    </ul>
                    <ul>
                    <li>Le traitement peut s'expliquer par une nécessité liée à l'exécution d'une mission d'intérêt public ou qui relève de l'exercice de l'autorité publique&nbsp;;</li>
                    </ul>
                    <ul>
                    <li>Le traitement et la collecte des données à caractère personnel sont nécessaires aux fins des intérêts légitimes et privés poursuivis par le responsable du traitement ou par un tiers.</li>
                    </ul>
                    <p style="text-align: center;"><br /><strong>ARTICLE 3&nbsp;: DONNÉES À CARACTÈRE PERSONNEL COLLECTÉES ET TRAITÉES DANS LE CADRE DE LA NAVIGATION SUR LE SITE<br /><br /></strong></p>
                    <p style="padding-left: 30px;"><strong>A. </strong>DONNÉES COLLECTÉES ET TRAITÉES ET MODE DE COLLECTE</p>
                    <p>Les données à caractère personnel collectées sur le site <span id="span_id_nom_du_site_internet"  >SuperCar.com</span> sont les suivantes&nbsp;:</p>
                    <p style="padding-left: 30px;"><span id="span_id_liste_donnees_collectees"  >Prenoms;<br />Nom;<br />Genre;<br />Adresses;<br />Civilité;<br />Email;<br />Numero de telephone.</span></p>
                    <p>Ces données sont collectées lorsque l'utilisateur effectue l'une des opérations suivantes sur le site&nbsp;:</p>
                    <p style="padding-left: 30px;"><span id="span_id_operations_collectes_donnees"  >- Lorsque l'Utilisateur ce connecte;<br />- Lorsque l'Utilisateur utilise le formulaire de<br />contact pour envoyer une demande.</span> </p>
                    <p>Par ailleurs, lors d'un paiement sur le site, il sera conservé dans les systèmes informatiques de l'éditeur du site une preuve de la transaction comprenant le bon de commande et la facture. </p>
                    <p>Le responsable du traitement conservera dans ses systèmes informatiques du site et dans des conditions raisonnables de sécurité l'ensemble des données collectées pour une durée de&nbsp;: <span id="span_id_duree_conservation_donnees"  >- Données comptables&nbsp;: 10 ans;<br />- Candidatures&nbsp;: 2 ans;<br />- Documents contractuels, commerciaux&nbsp;: 3 ans;<br />- Cookie d'analyse des visites&nbsp;: 13 mois.</p>
                    <p>La collecte et le traitement des données répondent aux finalités suivantes&nbsp;:</p>
                    <p style="padding-left: 30px;"><span id="span_id_finalite_traitement_donnees"  >- Traitement des demandes, expédition des<br />vehicules;<br />- Réponse aux demandes envoyées par le biais<br />du formulaire de contact.</span></p>
                    <p>Les traitements de données effectués sont fondés sur les bases légales suivantes&nbsp;:</p>
                    <p style="padding-left: 30px;"><span id="span_id_bases_legales"  >- Exécution du contrat;<br />- Consentement de l'utilisateur;<br />- Obligation légale.</span></p>

                    <p style="padding-left: 30px;"><strong>B.</strong> TRANSMISSION DES DONNÉES A DES TIERS</p>
                    <p>Les données peuvent être transmises au(x) tiers ci-après énuméré(s)&nbsp;:</p>
                    <p style="padding-left: 30px;"><span id="span_id_transmission_donnees_tiers"  >Certaines données collectées sont transférées au proprietaire des vehicules, lorsque l'utilisateur réalise une demande par le biais de la plateforme de demande du site.</span> <br /><br /></p>
                    <p style="padding-left: 30px;"><strong>C. </strong>HÉBERGEMENT DES DONNÉES</p>
                    <p>Le site <span id="span_id_nom_du_site_internet"  >SuperCar.com</span> est hébergé par&nbsp;: <span id="span_id_denomination_sociale_de_l_hebergeur"  >Supercar Ltd</span>, dont le siège est situé à l'adresse ci-après&nbsp;:</p>
                    <p style="padding-left: 30px;"><span id="span_id_siege_social_de_l_hebergeur"  >MEF-MCCI Building, Ebène CyberCity, Ebène, Quatre Bornes</span></p>
                    <p>L'hébergeur peut être contacté au numéro de téléphone suivant&nbsp;: <span id="span_id_telephone_de_l_hebergeur"  >+230 58426274</span>. </p>
                    <p>Les données collectées et traitées par le site sont transférées vers le(s) pays suivant(s)&nbsp;: <span id="span_id_pays_transfert_donnees"  >Ile Maurice</span>. Ce transfert de données à caractère personnel en dehors de l'Union européenne se justifie par les raisons ci-après&nbsp;:</p>
                    <p style="padding-left: 30px;"><span id="span_id_pourquoi_donnees_envoyees_hors_ue"  >Les données sont hébergées a l'Ile Maurice car le siége social de la société s'y situe.</span> </p>
                    <p style="text-align: center;"><br /><strong>ARTICLE 4&nbsp;: RESPONSABLE DU TRAITEMENT DES DONNÉES </strong><span style="text-align: start;"><strong>ET DÉLÉGUÉ À LA PROTECTION DES DONNÉES</strong> </span></p>

                    <p style="padding-left: 30px;"><strong>A. </strong>LE RESPONSABLE DU TRAITEMENT DES DONNÉES</p>
                    <p>Le responsable du traitement des données à caractère personnel est&nbsp;: <span id="span_id_prenom_nom_responsable"  >Babatoundé Olatounji</span>. Il peut être contacté de la manière suivante&nbsp;:</p>
                    <p style="padding-left: 30px;"><span id="span_id_methode_contact_rtd"  >Le responsable du traitement des données<br />peut étre contacté par téléphone au<br />+230 5846 5874, de 8h a 19h, du lundi au<br />vendredi.</span></p>
                    <p>Le responsable du traitement des données est chargé de déterminer les finalités et les moyens mis au service du traitement des données à caractère personnel. <br /><br /></p>
                    <p style="padding-left: 30px;"><strong>B. </strong>OBLIGATIONS DU RESPONSABLE DU TRAITEMENT DES DONNÉES</p>
                    <p>Le responsable du traitement s'engage à protéger les données à caractère personnel collectées, à ne pas les transmettre à des tiers sans que l'utilisateur n'en ait été informé et à respecter les finalités pour lesquelles ces données ont été collectées.</p>

                    <p>De plus, le responsable du traitement des données s'engage à notifier l'utilisateur en cas de rectification ou de suppression des données, à moins que cela n'entraîne pour lui des formalités, coûts et démarches disproportionnés.</p>
                    <p>Dans le cas où l'intégrité, la confidentialité ou la sécurité des données à caractère personnel de l'utilisateur est compromise, le responsable du traitement s'engage à informer l'utilisateur par tout moyen. <br /><br /></p>
                    <p style="padding-left: 30px;"><strong>C. </strong>LE DÉLÉGUÉ À LA PROTECTION DES DONNÉES</p>
                    <p>Par ailleurs, l'utilisateur est informé qu'un Délégué à la Protection des Données a été nommé&nbsp;: <span id="span_id_nom_delegue_protection_donnees"  >Jean Valjean, DPO</span>.</p>
                    <p>Le rôle du Délégué à la Protection des Données et de s'assurer la bonne mise en oeuvre des dispositions nationales et supranationales relatives à la collecte et au traitement des données à caractère personnel. Il est parfois appelé DPO (pour Data Protection Officer).</p>
                    <p>Le délégué à la protection des données peut être joint de la manière suivante&nbsp;:</p>
                    <p style="padding-left: 30px;"><span id="span_id_coordonnees_dpo"  >Par téléphone&nbsp;:<br />au +230 5842 6274,<br />du lundi au vendredi de 9h a 17h&nbsp;;<br />Par mail&nbsp;: tuckmansing2004@gmail.com.</span><br /><br /></p>
                    <p style="text-align: center;"><strong>ARTICLE 5&nbsp;: DROITS DE L'UTILISATEUR </strong><br /><br /></p>
                    <p>Conformément à la réglementation concernant le traitement des données à caractère personnel, l'utilisateur possède les droits ci-après énumérés.</p>
                    <p>Afin que le responsable du traitement des données fasse droit à sa demande, l'utilisateur est tenu de lui communiquer&nbsp;: ses prénom et nom ainsi que son adresse e-mail, et si cela est pertinent, son numéro de compte ou d'espace personnel ou d'abonné.</p>
                    <p>Le responsable du traitement des données est tenu de répondre à l'utilisateur dans un délai de 30 (trente) jours maximum.<br /><br /></p>
                    <p style="padding-left: 30px;"><strong>A.</strong> PRÉSENTATION DES DROITS DE L'UTILISATEUR EN MATIÈRE DE COLLECTE ET TRAITEMENT DE DONNÉES</p>
                    <p><em><br />a. Droit d'accès, de rectification et droit à l'effacement</em></p>
                    <p>L'utilisateur peut prendre connaissance, mettre à jour, modifier ou demander la suppression des données le concernant, en respectant la procédure ci-après énoncée&nbsp;:</p>
                    <p style="padding-left: 30px;"><span id="span_id_procedure_acces_donnees"  >L'utilisateur doit envoyer un e-mail au<br />responsable du traitement des données<br />personnelles, en précisant l'objet de sa<br />demande, a l'adresse e-mail de contact.</span> </p>
                    <p>S'il en possède un, l'utilisateur a le droit de demander la suppression de son espace personnel en suivant la procédure suivante&nbsp;:</p>
                    <p style="padding-left: 30px;"><span id="span_id_procedure_suppression_compte"  >L'utilisateur doit envoyer un e-mail au<br />responsable du traitement en précisant son<br />numero d'espace personnel. La demande sera<br />raitée dans un délai de 10 jours ouvrés.</span><br /><br /></p>
                    <p><em>b. Droit à la portabilité des données</em></p>
                    <p>L'utilisateur a le droit de demander la portabilité de ses données personnelles, détenues par le site, vers un autre site, en se conformant à la procédure ci-après&nbsp;:</p>
                    <p style="padding-left: 30px;"><span id="span_id_procedure_portabilite_donnees_personnelles"  >L'utilisateur doit faire une demande de<br />portabilité de ses données personnelles auprés<br />du responsable du traitement des données, en<br />envoyant un e-mail a l'adresse prévue ci-dessus.</span></p>
                    <p><br /><em>c. Droit à la limitation et à l'opposition du traitement des données</em></p>
                    <p>L'utilisateur a le droit de demander la limitation ou de s'opposer au traitement de ses données par le site, sans que le site ne puisse refuser, sauf à démontrer l'existence de motifs légitimes et impérieux, pouvant prévaloir sur les intérêts et les droits et libertés de l'utilisateur.</p>
                    <p>Afin de demander la limitation du traitement de ses données ou de formuler une opposition au traitement de ses données, l'utilisateur doit suivre la procédure suivante&nbsp;:</p>
                    <p style="padding-left: 30px;"><span id="span_id_procedure_limitation_traitement"  >L'utilisateur doit faire une demande de<br />limitation au traitement de ses données<br />personnelles par e-mail aupres du responsable<br />du traitement des données.</span><br /><br /></p>
                    <p><em>d. Droit de ne pas faire l'objet d'une décision fondée exclusivement sur un procédé automatisé</em></p>
                    <p>Conformément aux dispositions du règlement 2016/679, l'utilisateur a le droit de ne pas faire l'objet d'une décision fondée exclusivement sur un procédé automatisé si la décision produit des effets juridiques le concernant, ou l'affecte de manière significative de façon similaire.</p>
                    <p><br /><em>e. Droit de déterminer le sort des données après la mort</em></p>
                    <p>Il est rappelé à l'utilisateur qu'il peut organiser quel doit être le devenir de ses données collectées et traitées s'il décède, conformément à la loi n°2016-1321 du 7 octobre 2016.</p>
                    <p><br /><em>f. Droit de saisir l'autorité de contrôle compétente</em></p>
                    <p>Dans le cas où le responsable du traitement des données décide de ne pas répondre à la demande de l'utilisateur, et que l'utilisateur souhaite contester cette décision, ou, s'il pense qu'il est porté atteinte à l'un des droits énumérés ci-dessus, il est en droit de saisir la CNIL (Commission Nationale de l'Informatique et des Libertés, https://www.cnil.fr) ou tout juge compétent. <br /><br /></p>
                    <p style="padding-left: 30px;"><span style="font-weight: bold; font-size: 14.56px;">B. </span>DONNÉES PERSONNELLES DES PERSONNES MINEURES</p>
                    <p>Conformément aux dispositions de l'article 8 du règlement européen 2016/679 et à la loi Informatique et Libertés, seuls les mineurs âgés de 15 ans ou plus peuvent consentir au traitement de leurs données personnelles.</p>
                    <p>Si l'utilisateur est un mineur de moins de 15 ans, l'accord d'un représentant légal sera requis afin que des données à caractère personnel puissent être collectées et traitées.</p>
                    <p>L'éditeur du site se réserve le droit de vérifier par tout moyen que l'utilisateur est âgé de plus de 15 ans, ou qu'il aura obtenu l'accord d'un représentant légal avant de naviguer sur le site.<br /><br /></p>
                    <p style="text-align: center;"><strong>ARTICLE 6&nbsp;: CONDITIONS DE MODIFICATION DE LA POLITIQUE DE CONFIDENTIALITÉ<br /><br /></strong></p>
                    <p>La présente politique de confidentialité peut être consultée à tout moment à l'adresse ci-après indiquée&nbsp;:</p>
                    <p style="padding-left: 30px;"><span id="span_id_adresse_politique_confidentialite"  >SuperCar/Privacy.com</span></p>
                    <p>L'éditeur du site se réserve le droit de la modifier afin de garantir sa conformité avec le droit en vigueur.</p>
                    <p>Par conséquent, l'utilisateur est invité à venir consulter régulièrement cette politique de confidentialité afin de se tenir informé des derniers changements qui lui seront apportés.</p>
                    <p>Toutefois, en cas de modification substantielle de cette politique, l'utilisateur en sera informé de la manière suivante&nbsp;:</p>
                    <p style="padding-left: 30px;"><span id="span_id_modification_substantielle_moyen_information"  >Par e-mail a l'adresse communiquée par<br />l'utilisateur.</span></p>

                    <p>Il est porté à la connaissance de l'utilisateur que la dernière mise à jour de la présente politique de confidentialité est intervenue le&nbsp;: <span id="span_id_date_derniere_maj"  class="encours"  >21/03/2023</span>.</p>
                </td>
            </tr>
        </table></p>
            <!-- Ajoutez ici le contenu de texte long que vous souhaitez inclure -->
        </div>
        
        <button class="accept">Accepter</button>
        <button class="reject">Refuser</button>
    </div>
</div>



    <script>
        // Vérifier si l'utilisateur a déjà accepté ou refusé les termes et conditions
        const termsAccepted = localStorage.getItem('termsAccepted');

        if (!termsAccepted) {
            // Afficher la superposition si les termes n'ont pas encore été acceptés ou refusés
            document.querySelector('.overlay').style.display = 'flex';
        }

        const overlay = document.querySelector('.overlay');
        const acceptButton = document.querySelector('.accept');
        const rejectButton = document.querySelector('.reject');

        acceptButton.addEventListener('click', () => {
            overlay.style.display = 'none';
            // Enregistrer le choix de l'utilisateur dans le stockage local
            localStorage.setItem('termsAccepted', true);
            // Ajoutez ici le code pour donner accès à la page
        });

        rejectButton.addEventListener('click', () => {
            overlay.style.display = 'none';
            // Enregistrer le choix de l'utilisateur dans le stockage local
            localStorage.setItem('termsAccepted', false);
            // Ajoutez ici le code pour empêcher l'accès à la page ou rediriger vers une autre page
        });
        
    </script>
    <?php
        // Connect to the database
        $servername="localhost";
        $username="root";
        $password="";
        $database_name="supercar";

        $conn = new mysqli($servername, $username, $password, $database_name);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve cars from database
        $sql = "SELECT * FROM caroussel ORDER BY id_update DESC LIMIT 1";
        $result = $conn->query($sql);
        $acc = mysqli_fetch_assoc($result);
    ?>




    <div class="slideshow-container ">
            <img class="mySlides img1" src="<?php echo $acc['image1'] ?>">
            <img class="mySlides img1" src="<?php echo $acc['image2'] ?>">
            <img class="mySlides img1" src="<?php echo $acc['image3'] ?>">
            <img class="mySlides img1" src="<?php echo $acc['image4'] ?>">
            <img class="mySlides img1" src="<?php echo $acc['image5'] ?>">
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div><br><br><br>
        <blockquote>
            <font color="white">
                <table>

                <tr>
                    <th colspan="2" align="left">A propos de nous</th>
                </tr>
                <tr >
                    <td width="200px">
                        <img src="Image/white lign.png" width="200px" height="4px">
                    </td>
                    <td>

                    </td>
                </tr>

                <tr  height="375">
                    <td class="td1" align="justify" width="700px">
                        <p>
                        <?php echo $acc['apdn'] ?>
                        </p>
                    </td>
                    <td width="500" align="center">
                        <img class="img1" src="<?php echo $acc['image_apdn'] ?>" width="375">
                    </td>
                </tr>
                <tr  height="375">
                    <td>
                        <img class="img1" src="<?php echo $acc['image_apdn1'] ?>" width="550">
                    </td>
                    <td class="td1" align="justify">
                        <p>
                        <?php echo $acc['apdn1'] ?>
                        </p>
                    </td>
                </tr>
                </table>
            </font>
        </blockquote>

        <div class="footer-basic">

            <footer>

                <div class="line">

                <ul class="social_icon">

                   

                    <li><a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a></li>

                    <li><a href="https://www.twitter.com"><ion-icon name="logo-twitter"></ion-icon></a></li>

                    <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>

                    <li><a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a></li>

                </ul>

                <UL class="menus">

                    <li><a href="Privacy.html">Politique de Confidentialité</a></li>

                    <li><a href="mentionlegale.html">Mention légale</a></li>

                </UL>

                <p> ©2023 SuperCar | Le meilleur pour vous</p>

            </footer>

            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

       

        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <script src="Java/Accueil.js"></script>
        <script src="Java/disconnect.js"></script>
    </body>
</html>

