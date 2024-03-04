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

// Check if idcontact parameter is set
if (isset($_GET['idcontact'])) {
    $idcontact = $_GET['idcontact'];

    // Prepare a DELETE statement
    $sql = "DELETE FROM contact WHERE idcontact = $idcontact";

    if (mysqli_query($conn, $sql)) {
        echo "Contact deleted successfully.";
    } else {
        echo "Error deleting contact: " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);

// Redirect back to the page where you display the table
header("Location: contact.php"); // Change 'admin.php' to your actual page name
?>
