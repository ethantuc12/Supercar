<?php

session_start(); // Start a PHP session

$host = "localhost";
$username = "root";
$password = "";
$database = "supercar";

// Etablir une connexion avec la base de données
$connexion = mysqli_connect($host, $username, $password, $database);

if (!$connexion) {
  die("Connexion à la base de données a échoué: " . mysqli_connect_error());
}

if (isset($_POST['email'], $_POST['mot_de_passe'])) {
  $email = $_POST["email"];
  $mot_de_passe = $_POST["mot_de_passe"];

  // extraction du nom de la base de données
  $query = "SELECT nom, prenom, idinscription, email,mot_de_passe, numero_de_telephone, civilite FROM inscription WHERE email='$email' AND mot_de_passe='$mot_de_passe'";
  $curseur = mysqli_query($connexion, $query);
  $num = mysqli_num_rows($curseur);

  // Vérifier si le nom ou le mot de passe existe
  if($num == 1){
    $row = mysqli_fetch_assoc($curseur);
    $_SESSION['nom'] = $row['nom'];
    $_SESSION['prenom'] = $row['prenom'];
    $_SESSION['idinscription'] = $row['idinscription'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['mot_de_passe'] = $row['mot_de_passe'];
    $_SESSION['numero_de_telephone'] = $row['numero_de_telephone'];
    $_SESSION['civilite'] = $row['civilite'];
    header("Location:../index.php");
    exit(); // Stop further execution
  } else {
    echo '<script>alert("Le mot de passe est incorrect.")</script>';
    header("Location:Inscription.php");
    exit();
  }

  // libérer la mémoire
  mysqli_free_result($curseur);
  mysqli_close($connexion);
}
?>
