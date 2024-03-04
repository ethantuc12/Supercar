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

// Check if id_eve parameter is set
if (isset($_GET['id_eve'])) {
    $id_eve = $_GET['id_eve'];

    // Prepare a DELETE statement
    $sql = "DELETE FROM evenement WHERE id_eve = $id_eve";

    if (mysqli_query($conn, $sql)) {
        echo "Evenement effacé avec succès.";
    } else {
        echo "Error deleting contact: " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);

// Redirect back to the page where you display the table
header("Location: evenement.php"); // Change 'admin.php' to your actual page name
?>
