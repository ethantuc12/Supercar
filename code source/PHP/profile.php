<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="../Css/profile.css">
    <link rel="stylesheet" href="../Css/Navbar.css">
    <link rel="stylesheet" href="../Css/Footer.css">

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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

                    if(isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['idinscription']) && isset($_SESSION['email']) && isset($_SESSION['mot_de_passe']) && isset($_SESSION['numero_de_telephone']) && isset($_SESSION['civilite'])) {
                        $nom = $_SESSION['nom'];
                        $prenom = $_SESSION['prenom'];
                        $idinscription = $_SESSION['idinscription'];
                        $email = $_SESSION['email'];
                        $mot_de_passe = $_SESSION['mot_de_passe'];
                        $numero_de_telephone = $_SESSION['numero_de_telephone'];
                        $civilite = $_SESSION['civilite'];
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
                            // Initialize edit mode variable
                            $editMode = false;

                            // Check if the edit parameter is present in the URL
                            if (isset($_GET['edit']) && $_GET['edit'] === 'true') {
                                $editMode = true;
                            }

                            // Rest of your existing PHP code
                            // ...
                            ?>

                        
          
                
    </nav>
    <!-- Main -->
    
    <div class="container">
        <h1>Modifier votre profil</h1>
        <div class="profile-form">
            <?php if ($editMode) { ?>
                <!-- Edit Form -->
                <form method="post" action="update_profile.php">
                    <div class="form-group">
                        <label for="newPrenom">Prénom:</label>
                        <input type="text" id="newPrenom" name="newPrenom" value="<?php echo $prenom; ?>">
                    </div>

                    <div class="form-group">
                        <label for="newNom">Nom:</label>
                        <input type="text" id="newNom" name="newNom" value="<?php echo $nom; ?>">
                    </div>

                    <div class="form-group">
                        <label for="newEmail">Adresse Mail:</label>
                        <input type="email" id="newEmail" name="newEmail" value="<?php echo $email; ?>">
                    </div>

                    <div class="form-group">
                        <label for="newPassword">Mot de passe:</label>
                        <input type="password" id="newPassword" name="newPassword" value="<?php echo $mot_de_passe; ?>">
                    </div>

                    <div class="form-group">
                        <label for="newPhone">Numéro de téléphone:</label>
                        <input type="text" id="newPhone" name="newPhone" value="<?php echo $numero_de_telephone; ?>">
                    </div>

                    <div class="form-group">
                        <label for="newCivilite">Civilité:</label>
                        <input type="text" id="newCivilite" name="newCivilite" value="<?php echo $civilite; ?>">
                    </div>

                    <!-- Add more fields as needed -->

                    <div class="button-group">
                        <button type="submit" class="btn btn-primary">Mettre a jour</button>
                        <button type="button" class="btn btn-secondary" onclick="cancelEdit()">Annuler</button>
                    </div>
                </form>
            <?php } else { ?>
                <!-- Display user information -->
                
                <form method="post" action="update_profile.php">
                    <div class="form-group1">
                        <label for="newPrenom">Prénom:</label>
                        <p> <?php echo $prenom; ?></p>
                    </div>

                    <div class="form-group1">
                        <label for="newNom">Nom:</label>
                        <p><?php echo $nom; ?></p>
                    </div>

                    <div class="form-group1">
                        <label for="newEmail">Adresse Mail:</label>
                        <p><?php echo $email; ?></p>
                        
                    </div>

                    <div class="form-group1">
                        <label for="newPassword">Mot de passe:</label>
                        <input type="password" id="passwordField" value="<?php echo $mot_de_passe; ?>" disabled>
                        <button type="button" onclick="togglePasswordVisibility()">Montrer/Cacher</button>
                    </div>

                    <div class="form-group1">
                        <label for="newPhone">Numéro de téléphone:</label>
                        <p><?php echo $numero_de_telephone; ?></p>
                       
                    </div>

                    <div class="form-group1">
                        <label for="newCivilite">Civilité:</label>
                        <p><?php echo $civilite; ?></p>
                        
                    </div>

                
                <!-- Display other fields as needed -->
                <a href="profile.php?edit=true" class="btn btn-primary">Modifier</a>
            <?php } ?>
        </div>
    </div>


                
               
            </div>
        </div>
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

    <script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById("passwordField");
        if (passwordField.type === "password") {
            passwordField.type = "text"; // Change the input type to text to show the password
        } else {
            passwordField.type = "password"; // Change it back to password to hide the password
        }
    }

        
    function cancelEdit() {
        // Redirect back to the profile page without the edit parameter
        window.location.href = 'profile.php';
    }


    </script>

    
    <!-- End -->
</body>
</html>