<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="../Css/Admin/edit_demande.css">


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

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $id = $_POST["Id_demande"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $marque = $_POST["marque"];
    $modele = $_POST["modele"];
    $details = mysqli_real_escape_string($conn, $_POST["details"]);
    $date1 = $_POST["date1"];
    $date2 = $_POST["date2"];
    $heure1 = $_POST["heure1"];
    $heure2 = $_POST["heure2"];
    $Status1 = $_POST["Status1"];

   

    // Update the record in the database
    $sql = "UPDATE demande SET nom='$nom', prenom='$prenom', email='$email', marque='$marque', modele='$modele', details='$details', date1='$date1', date2='$date2', heure1='$heure1', heure2='$heure1', Status1='$Status1' WHERE ID_demande='$id'";
    if (mysqli_query($conn, $sql)) {
        header("location: admin_demande.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    // Retrieve the record to be edited
    $id = $_GET["ID_demande"];
    $sql = "SELECT * FROM demande WHERE ID_demande='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $nom = $row["nom"];
        $prenom = $row["prenom"];
        $email = $row["email"];
        $marque = $row["marque"];
        $modele = $row["modele"];
        $details = $row["details"];
        $date1 = $row["date1"];
        $date2 = $row["date2"];
        $heure1 = $row["heure1"];
        $heure2 = $row["heure2"];
        $Status1 = $row["Status1"];
    } else {
        echo "Record not found";
    }
}

// Close connection
mysqli_close($conn);
?>


<body>
<div class="container">
    <h1>Modifier les contacts</h1>
    <div class="profile-form">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="Id_demande" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <td>
                        <!-- Nom -->
                        <div class="form-group">
                            <label for="nom">Nom</label><br>
                            <input type="text" id="nom" name="nom" value="<?php echo $nom; ?>" readonly><br><br>
                        </div>
                    </td>
                    <td>
                        <!-- Prénom -->
                        <div class="form-group">
                            <label for="prenom">Prénom</label><br>
                            <input type="text" id="prenom" name="prenom" value="<?php echo $prenom; ?>"readonly><br><br>
                        </div>
                    </td>
                    <td>
                        <!-- Adresse Mail -->
                        <div class="form-group">
                            <label for="email">Adresse Mail</label><br>
                            <input type="email" id="email" name="email" value="<?php echo $email; ?>"readonly><br><br>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- Marque -->
                        <div class="form-group">
                            <label for="marque">Marque</label><br>
                            <input type="text" id="marque" name="marque" value="<?php echo $marque; ?>"readonly><br><br>
                        </div>
                    </td>
                    <td>
                        <!-- Modèle -->
                        <div class="form-group">
                            <label for="modele">Modèle</label><br>
                            <input type="text" id="modele" name="modele" value="<?php echo $modele; ?>"readonly><br><br>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <!-- Détails -->
                        <div class="form-group">
                            <label for="details">Détails</label><br>
                            <textarea id="details" name="details"readonly><?php echo $details; ?></textarea><br><br>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- Date 1 -->
                        <div class="form-group">
                            <label>Date 1</label>
                            <input type="date" name="date1" value="<?php echo $date1; ?>"readonly><br><br>
                        </div>
                    </td>
                    <td>
                        <!-- Date 2 -->
                        <div class="form-group">
                            <label>Date 2</label>
                            <input type="date" name="date2" value="<?php echo $date2; ?>"readonly><br><br>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- Heure 1 -->
                        <div class="form-group">
                            <label for="heure1">Heure 1</label><br>
                            <input type="time" id="heure1" name="heure1" value="<?php echo $heure1; ?>"readonly><br><br>
                        </div>
                    </td>
                    <td>
                        <!-- Heure 2 -->
                        <div class="form-group">
                            <label for="heure2">Heure 2</label><br>
                            <input type="time" id="heure2" name="heure2" value="<?php echo $heure2; ?>"readonly><br><br>
                        </div>
                    </td>
                </tr>
            </table>
            <!-- Statut -->
            <div class="form-group">
                <label for="Status1">Statut</label><br>
                <select id="Status1" name="Status1">
                    <option value="En cours" <?php if ($Status1 === "En cours") echo "selected"; ?>>En cours</option>
                    <option value="Confirmé" <?php if ($Status1 === "Confirmé") echo "selected"; ?>>Confirmé</option>
                    <option value="Terminé" <?php if ($Status1 === "Terminé") echo "selected"; ?>>Terminé</option>
                </select><br><br>
            </div>
            <div class="button-group">
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                <button type="button" class="btn btn-secondary" onclick="cancelEdit()">Annuler</button>
            </div>
        </form>
    </div>
</div>
    <script>
                function cancelEdit() {
        // Redirect back to the profile page without the edit parameter
        window.location.href = 'admin_demande.php';
    }


    </script>
</body>
</html>
