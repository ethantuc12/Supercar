
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Login an Registration Page with Video Backgroud</title>
    <link rel="stylesheet" href="../Css/Inscription.css">
    <link rel="stylesheet" href="../Css/Navbar.css">
    <link rel="stylesheet" href="../Css/Footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-9X3q2Y1+D/7VkcE+mRjL7Jz2cTfjJbR8Gx9XVGvY04ER0ZJjLs8Wwq0sD4yKjDh1i4/aW0myX29vHkOiy/oZLQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                <div class="login">
                  <a href="../PHP/login.php">Connexion</a>
                </div>
        </nav>

<?php
echo '<div class="accoutn_main">';
echo '<div class=""></div>';
echo '<video muted loop autoplay class="video">';
echo '<source src="../video/lambo.webm" type="video/mp4">';
echo '</video>';
echo '<center>';
echo '<div class="form_area">';
echo '<div class="main_con">';
echo '<div class="headline">';
echo '</div>';
echo '</div>';
echo '<div class="window">';
echo '<div class="form_con">';
echo '<div class="log_form">';


echo '<h1>Connexion</h1>';
echo '<form method="post" action="login.php">';
echo '<div class="input-box">';
echo '<input type="text" name="email" name="email" id="email" required>';
echo '<label>Email</label>';
echo '</div>';
echo '<div class="input-box">';
echo '<input type="password" name="mot_de_passe"name="" id="mot_de_passe" required>';
echo '<label>Mot De Passe</label>';
echo '</div>';
echo '<div class="button">';
echo '<button type="submit">Se Connecter</button>';
echo '</div>';
echo '</form>';
echo '</div>';
echo '';
echo '';
echo '';
echo '';




echo '<!-- Registration form -->';
echo '<div class="reg_form hidden">';
echo '<h2>Inscription</h2>';
echo '<form method="post" action="inscription.php">' ;
echo '<div class="input-box">';
echo '<input type="text" name="prenom" id="prenom" required>';
echo '<label>Prénom</label>';
echo '</div>';
echo '<div class="input-box">';
echo '<input type="text" name="nom" id="nom" required>';
echo '<label>Nom</label>';
echo '</div>';
echo '<div class="input-box">';
echo '<input type="text" name="email" id="email" required>';
echo '<label>Email</label>';
echo '</div>';
echo '<div class="input-box">';
echo '<input type="password" name="mot_de_passe" id="mot_de_passe" required>';
echo '<label>Mot De Passe</label>';
echo '</div>';
echo '<div class="input-box">';
echo '<input type="text" name="numero_de_telephone" id="numero_de_telephone" required>';
echo '<label>Numéro de Téléphone</label>';
echo '</div>';
echo '<div class="input-box">';
echo '<input type="text" name="civilite" id="civilite" required>';
echo '<label>Civilité</label>';
echo '</div>';
echo '<div class="button">';
echo '<button type="submit">S\'inscrire</button>';

echo '</div>';
echo '</form>';
echo '</div>';
echo '<div class="text-center">';
echo '<span id="action">Changer de mode</span>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
?>


</center>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $("#action").click(function(){
            $(".log_form, .reg_form").toggle(1200);
        });
    </script>

    




<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "supercar";

// Etablir une connexion avec la base de données
$connexion = mysqli_connect($host, $username, $password, $database);

if (!$connexion) {
  die("Connexion à la base de données a échoué: " . mysqli_connect_error());
}

// Vérifier si le formulaire a été soumis
if (isset($_POST['prenom'], $_POST['nom'], $_POST['email'], $_POST['mot_de_passe'], $_POST['numero_de_telephone'], $_POST['civilite'])) {
  // Les données ont été soumises
  $prenom = mysqli_real_escape_string($connexion, $_POST['prenom']);
  $nom = mysqli_real_escape_string($connexion, $_POST['nom']);
  $email = mysqli_real_escape_string($connexion, $_POST['email']);
  $mot_de_passe = mysqli_real_escape_string($connexion, $_POST['mot_de_passe']);
  $numero_de_telephone = mysqli_real_escape_string($connexion, $_POST['numero_de_telephone']);
  $civilite = mysqli_real_escape_string($connexion, $_POST['civilite']);

  // Insérer les données dans la base de données
  $query = "INSERT INTO inscription (prenom, nom, email, mot_de_passe, numero_de_telephone, civilite)
            VALUES ('$prenom', '$nom', '$email', '$mot_de_passe', '$numero_de_telephone', '$civilite')";
  if(mysqli_query($connexion, $query)){
    // Rediriger l'utilisateur vers une autre page en cas d'inscription réussie
    header("Location:Accueil.php");
    exit();
  } else{
    echo "Erreur d'insertion de données: " . mysqli_error($connexion);
  }
}

?>




</body>
</html>

