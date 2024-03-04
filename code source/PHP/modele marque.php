<?php

// Fetching the ID of the car from the URL parameter
$idVoiture = $_GET['Id_Voiture'];


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "SELECT Marque, Modele FROM voiture WHERE Id_Voiture = $idVoiture";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $modeleFromDB = $row["Modele"];
    $marqueFromDB = $row["Marque"];
} else {
    $modeleFromDB = "Unknown"; // Default value if no matching car found
    $marqueFromDB = "Unknown";
}

$conn->close();

?>