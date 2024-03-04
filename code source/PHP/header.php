<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../Css/Navbar.css">
</head>
<body bgcolor="black">
    <nav>
        <div class="logo">
            <a href="../PHP/Accueil.php">
                <img src="../Image/MicrosoftTeams-image.png" alt="Your Logo">
            </a>
        </div>
        <a id="menu-icon" class="menu-icon" onclick="onMenuClick()">
            <i class="fa fa-bars"></i>
        </a>

        <ul class="menu">
            <a href="../PHP/Accueil.php">Accueil</a>
            <a href="../PHP/Voiture.php">Voitures</a>
            <a href="../PHP/Demande_essai.php">Demande d'essai</a>
            <a href="../PHP/evenement.php">Évènements</a>
            <a href="../PHP/Contact.php">Contact</a>
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

    <script>
        function onMenuClick() {
            var navbar = document.querySelector(".menu");
            var responsive_class_name = "responsive";
            navbar.classList.toggle(responsive_class_name);
        }
    </script>
</body>
</html>
