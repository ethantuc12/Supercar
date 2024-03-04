<?php
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

// Check if Id_demande parameter is set
if (isset($_GET['Id_Voiture'])) {
    $Id_Voiture = $_GET['Id_Voiture'];

    // Prepare a DELETE statement
    $sql = "DELETE FROM voiture WHERE Id_Voiture = $Id_Voiture";

    if (mysqli_query($conn, $sql)) {
        echo "Voiture supprimé avec succès.";
    } else {
        echo "Erreur dans la suppression de la voiture: " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);

// Redirect back to the page where you display the table
header("Location: admin_voiture.php"); // Change 'admin.php' to your actual page name
?>
