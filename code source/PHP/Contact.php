<!--doctype html-->
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Shop</title>
<!--link-stylesheet----------->
<link rel = "icon" href = "../Image/icon1.png" 
        type = "image/x-icon">
<link rel="stylesheet" href="../Css/Contact.css"/>
<link rel="stylesheet" href="../Css/Navbar.css">
<link rel="stylesheet" href="../Css/Footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-9X3q2Y1+D/7VkcE+mRjL7Jz2cTfjJbR8Gx9XVGvY04ER0ZJjLs8Wwq0sD4yKjDh1i4/aW0myX29vHkOiy/oZLQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--using-fontAwesome------------>
</head>
<body>

<nav>
                <div class="logo">
                    <a href="../index.php">
                        <img src="../Image/MicrosoftTeams-image.png" alt="Your Logo">
                    </a>
                </div>
                <ul class="menu">
                  <li><a href="../index.php">Accueil</a></li>
                  <li><a href="../PHP/Voiture.php">Voitures</a></li>
                  <li><a href="../PHP/Demande_essai.php">Demande d'essai</a></li>
                  <li><a href="../PHP/evenement.php">Évènements</a></li>
                  <li><a href="../PHP/Contact.php">Contact</a></li>
                </ul>

                <?php
                    session_start();

                    if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
                        $nom = $_SESSION['nom'];
                        $prenom = $_SESSION['prenom'];
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

<?php

echo '<div id="grad1">';
echo '<img src="../Image/desktop-wallpaper-bmw-m3-angel-eyes-black-background-black-dark-bmw-m3-iphone.jpg" height="756px" width="310px">';
echo '<!--contact-form-container------------------->';
echo '<section id="contact">';
echo '';
echo '<!--contact-box------------->';
echo '';
echo '<div class="contact-box">';
echo '<!--heading---------->';
echo '<div class="c-heading">';
echo '<h1>Contactez-Nous</h1>';
echo '<p>Une reponse rapide pour vos attentes</p>';
echo '</div>';
echo '<!--inputs------------------>';
echo '<div class="c-inputs">';
echo '<form method="post" action="contact.php">';
echo '<input type="text" placeholder="Nom Complet" name="nom_complet" id="nom_complet"/>';
echo '<input type="email" placeholder="Exemple@gmail.com" name="email" id="email"/>';
echo '<textarea name="message" placeholder="Ecrire un Message" name="message" id="message"></textarea>';
echo '<!--sumbit-btn----------->';
echo '<center>';
echo '<button class="button-87" type="submit">Envoyer</button>';
echo '</center>';
echo '</form>';
echo '</div>';
echo '';
echo '</div>';
echo '';
echo '<!--map------------------->';
echo '<div class="map">';
echo '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7486.604872986506!2d57.4860461!3d-20.2462881!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217c5b1ef2170f63%3A0xd1a78020fc096491!2sMCCI%20BUSINESS%20SCHOOL%20(Mauritius%20Chamber%20of%20Commerce%20and%20Industry)!5e0!3m2!1sfr!2smu!4v1678964030633!5m2!1sfr!2smu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
echo '</div>';
echo '</section>';
echo '<img align="right" src="../Image/image.jpg" height="756px" width="310px">';
echo '</div>';
echo '</div>';

?>


<?php
// Connexion à la base de données MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "supercar";

$bdd = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion avec la BD
if (!$bdd) {
    die("Connexion échouée:" . mysqli_connect_error());
}

// Récupération des données du formulaire
if (!empty($_POST)) {
$nom_complet = $_POST['nom_complet'];
$email = $_POST['email'];
$message = $_POST['message'];

// Préparation de la requête SQL pour l'insertion des données du formulaire
$sql = "INSERT INTO contact (`nom_complet`, `email`, `message`)
        VALUES ('$nom_complet', '$email', '$message')";

// Exécution de la requête SQL
if (mysqli_query($bdd, $sql)) { // check if the query was successful
    header("Location: Accueil.php"); // redirect to the home page
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($bdd);
  }

}
// Fermeture de la connexion à la base de données
mysqli_close($bdd);

?>

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


</body>
</html>