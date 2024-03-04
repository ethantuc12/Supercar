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
if (isset($_GET['ID_demande'])) {
    $ID_demande = $_GET['ID_demande'];

    // Prepare a DELETE statement
    $sql = "DELETE FROM demande WHERE ID_demande = $ID_demande";

    if (mysqli_query($conn, $sql)) {
        echo "Demande supprimé avec succès.";
    } else {
        echo "Erreur dans la suppression de la demande: " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);

// Redirect back to the page where you display the table
header("Location: admin_demande.php"); // Change 'admin.php' to your actual page name
?>
