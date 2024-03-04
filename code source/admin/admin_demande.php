<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
        <link rel="stylesheet" href="../Css/admin/demande.css">
    </head>
    <body>
    <a class="back-button" href="dash.php">< Back</a>

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

// Query the database
$sql = "SELECT * FROM demande";
$result = mysqli_query($conn, $sql);

// Output the table
echo "<h1>Gestion des demandes</h1><div class='container'>";
echo "<table>";
echo "<thead><tr><th>ID</th><th>Idinscription</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Idvoiture</th><th>Marque</th><th>Modèle</th><th>Détails</th><th>Date Début</th><th>Date Fin</th><th>Heure Début</th><th>Heure de Fin</th><th>Status1</th><th>Action</th></tr><thead>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tbody><tr>";
    echo "<td>" . $row["ID_demande"] . "</td>"; // Replace "ID" with the appropriate column name from your database
    echo "<td>" . $row["idinscription"] . "</td>";
    echo "<td>" . $row["nom"] . "</td>";
    echo "<td>" . $row["prenom"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["Id_Voiture"] . "</td>";
    echo "<td>" . $row["marque"] . "</td>";
    echo "<td>" . $row["modele"] . "</td>";
    echo "<td>" . $row["details"] . "</td>";
    echo "<td>" . $row["date1"] . "</td>";
    echo "<td>" . $row["date2"] . "</td>";
    echo "<td>" . $row["heure1"] . "</td>";
    echo "<td>" . $row["heure2"] . "</td>";
    echo "<td>" . $row["Status1"] . "</td>";
    echo "<td><a href='edit_demande.php?ID_demande=" . $row["ID_demande"] . "'><img src='../image/edit.png' width='15px'></a> | <a href='delete_demande.php?ID_demande=" . $row["ID_demande"] . "'><img src='../image/delete.png' width='17px' onclick='return confirm(\"Etes vous sûre de vouloir supprimer la demande?\");'></a></td>";
    echo "</tr></tbody>";
}
echo "</table>";
echo "</div>";

// Close connection
mysqli_close($conn);
?>
    </body>
</html>
