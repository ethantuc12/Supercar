
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel = "icon" href = "../Image/icon1.png" 
        type = "image/x-icon">
    <link rel="stylesheet" href="../Css/Demande d'essai.css">
    <link rel="stylesheet" href="../Css/Navbar.css">
    <link rel="stylesheet" href="../Css/Footer1.css">
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
                    echo "<script>
                            window.onload = function() {
                                alert('Veuillez vous connecter');
                                window.location.href = 'inscription.php';
                            }
                          </script>";
                        }
                        
                ?>
                
        </nav>
                <?php
    session_start();

    if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
        $nom = $_SESSION['nom'];
        $prenom = $_SESSION['prenom'];
        echo "<div class='dropdown'>
                <a>$nom $prenom</a>
                <div class='dropdown-content'>
                    <a href='deconnexion.php'>Déconnexion</a>
                </div>
              </div>";
    } else {
        echo "<div class='login'>
                <a href='inscription.php'>Connexion</a>
              </div>";
        echo "<script>
                window.onload = function() {
                    alert('Veuiilez vous connecter.');
                    window.location.href = 'inscription.php';
                }
              </script>";
    }
?>

                
        
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // étape 1 : Connexion à la base de données
    $servername = "localhost";
    $username ="root";
    $password = "";
    $dbname = "supercar";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

     // étape 2 : Récupération des données du formulaire en utilisant la méthode POST
    $details = $_POST['details'];
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $heure1 = $_POST['heure1'];
    $heure2 = $_POST['heure2'];

    // étape 3 : Validation et nettoyage des données
    $details = mysqli_real_escape_string($conn, $details);
    $date1 = mysqli_real_escape_string($conn, $date1);
    $date2 = mysqli_real_escape_string($conn, $date2);
    $heure1 = mysqli_real_escape_string($conn, $heure1);
    $heure2 = mysqli_real_escape_string($conn, $heure2);

    // étape 4 : Insertion des données dans la base de données
    $sql = "INSERT INTO demande (idinscription, nom, prenom, email, details, date1, date2, heure1, heure2, Status1)
    VALUES ('$idinscription','$nom', '$prenom', '$email', '$details', '$date1', '$date2', '$heure1', '$heure2', 'En cours')";

    if ($conn->query($sql) === TRUE) {
        // étape 5 : Redirection vers une page de confirmation
        header('Location: Accueil.php');
        exit;
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    // étape 6 : Fermer la connexion à la base de données
    $conn->close();
}
?>

<section class="section1">
        <div class="reservation">
            <h1>Demande d'essai</h1>
            <div class="choice">
                <label for="modele" style="color:rgb(146, 142, 142)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Modèle :</label>
                <a href="../PHP/Voiture.php">
                    <button class= "choix" value="choice" required>Choisissez un modèle</button>
                </a>
        
            </div>
            <form method="post">
            
            <div class="insertion">
                <input type="text" name="details" required>
                <span></span>
                <label>Détails</label>
            </div>
            <div class="andro">
                <input type="date" name="date1" required>
                <span></span>
                <label>Date de début</label>                
            </div> 
            <div class="andro">
                <input type="date" name="date2" required>
                <span></span>
                <label>Date de fin</label>                
            </div> 
            <div class="ora">
                <input type="time" name="heure1" required>
                <span></span>
                <label>Heure de début</label>                
            </div>
            <div class="ora">
                <input type="time" name="heure2" required>
                <span></span>
                <label>Heure de fin</label>                
            </div>
            <input type="submit" name="valider" value="Valider">
        </form>
    </div>
<br/><br/><br/><br/><br/>
    
    <div class="footer-basic1">
        <div class="down">
        <footer>
                <div class="social">
                  
                    <table align="center">
                        <tr>
                            <td width="50" align="center">
                                <a href="https://www.instagram.com/"><img src="../Image/instagram.png" width="25px"></a>
                            </td>
                            <td width="50" align="center">
                                <a href="https://www.facebook.com/"><img src="../Image/facebook.png" width="30px"></a>
                            </td>
                            <td width="50" align="center">
                                <a href="https://www.twitter.com/"><img src="../Image/twitter.png" width="30px"></a>
                            </td>
                        </tr>
                    </table><br><br>
                    <ul class="list-inline">
                     
                    
                          <li class="list-inline-item"><a href="../PHP/Privacy.php">Politique de Confidentialité</a></li>
                          <li class="list-inline-item"><a href="../PHP/Contact.php">Mention légale</a></li>
                 
                    </ul>
                <p class="copyright">SuperCar © 2023</p>
            </footer>
            </div>
        </div>
        
        
        <script src="Java/Accueil.js"></script>
</body>
</html>

        