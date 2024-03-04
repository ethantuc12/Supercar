<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin</title>

 

    <!-- Custom Css -->

    <link rel="stylesheet" href="../Css/edit_utilisateur.css">

</head>

<body>

<div class="container">

    <h1>Modifier les Utilisateurs</h1>

    <div class="profile-form">

 

    <?php

    // Change these variables to match your database configuration

    $servername = "localhost";

    $username = "root";

    $password = "";

    $dbname = "supercar";

 

    // Create connection

    $conn = mysqli_connect($servername, $username, $password, $dbname);

 

    // Check connection

    if (!$conn) {

        die("Connection failed: " . mysqli_connect_error());

    }

 

    $id = "";

    $prenom = "";

    $nom = "";

    $email = "";

    $mot_de_passe = "";

    $numero_de_telephone = "";

    $civilite = "";

 

    // Check if the form has been submitted

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Retrieve the form data

        $id = $_POST["idinscription"];

        $prenom = $_POST["prenom"];

        $nom = $_POST["nom"];

        $email = $_POST["email"];

        $mot_de_passe = $_POST["mot_de_passe"];

        $numero_de_telephone = $_POST["numero_de_telephone"];

        $civilite = $_POST["civilite"];

 

        // Update the record in the database

        $sql = "UPDATE inscription SET prenom='$prenom',nom='$nom', email='$email', mot_de_passe='$mot_de_passe',numero_de_telephone='$numero_de_telephone',civilite='$civilite' WHERE idinscription='$id'";

        if (mysqli_query($conn, $sql)) {

            header("location: utilisateur.php");

            exit();

        } else {

            echo "Error updating record: " . mysqli_error($conn);

        }

    } else {

        // Check if the idinscription parameter is set

        if (isset($_GET["idinscription"])) {

            $id = $_GET["idinscription"];

            $sql = "SELECT * FROM inscription WHERE idinscription='$id'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) == 1) {

                $row = mysqli_fetch_assoc($result);

                $prenom = $row["prenom"];

                $nom = $row["nom"];

                $email = $row["email"];

                $mot_de_passe = $row["mot_de_passe"];

                $numero_de_telephone = $row["numero_de_telephone"];

                $civilite = $row["civilite"];

            } else {

                echo "Record not found";

            }

        } else {

            echo "idinscription parameter is missing.";

        }

    }

 

    // Close connection

    mysqli_close($conn);

    ?>

 

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <input type="hidden" name="idinscription" value="<?php echo $id; ?>">

 

        <div class="form-group">

            <label for="prenom">Prenom</label><br>

            <input type="text" id="prenom" name="prenom" readonly value=" <?php echo $prenom; ?>"><br><br>

        </div>

 

        <div class="form-group">

            <label for="nom">Nom</label><br>

            <input type="text" id="nom" name="nom" readonly value="<?php echo $nom; ?>"><br><br>

        </div>

 

        <div class="form-group">

            <label for="email">Adresse Mail:</label>

            <input type="email" id="email" name="email" readonly value="<?php echo $email; ?>"><br><br>

        </div>

 

        <div class="form-group">

            <label for="mot_de_passe">Mot De Passe:</label>

            <input type="password" id="mot_de_passe" name="mot_de_passe" readonly value="<?php echo $mot_de_passe; ?>"><br><br>

        </div>

 

        <div class="form-group">

            <label for="numero_de_telephone">Numero De Telephone:</label>

            <input type="tel" id="numero_de_telephone" name="numero_de_telephone" readonly value="<?php echo $numero_de_telephone; ?>"><br><br>

        </div>

 

        <div class="form-group">

            <label for="civilite">Civilite:</label>

            <input type="text" id="civilite" name="civilite" readonly value="<?php echo $civilite; ?>"><br><br>

        </div>

 

        <!-- Add other form fields here -->

 

        <div class="button-group">

            

            <button type="button" class="btn btn-secondary" onclick="cancelEdit()">Annuler</button>

        </div>

    </form>

    </div>

</div>

 

<script>

    function cancelEdit() {

        // Redirect back to the profile page without the edit parameter

        window.location.href = 'admin_utilisateur.php';

    }

</script>

</body>

</html>