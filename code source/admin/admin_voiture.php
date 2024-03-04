<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
        <link rel="stylesheet" href="../Css/admin/voiture.css">
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
$sql = "SELECT * FROM voiture";
$result = mysqli_query($conn, $sql);

// Output the table
echo "<h1>Gestion des voitures</h1>";


echo "<div class='container'>";
echo "<div style='text-align: right; margin-bottom: 10px;'><a href='add_voiture.php' class='btn btn-primary'>Ajouter voiture</a></div>"; // Add the button here

echo "<div class='table-container'>";
echo "<table class='table-content'>";


// Output the table header
echo "<thead><tr class='fixed-header'><th>ID</th><th>Marque</th><th>Modèle</th><th>Catégorie</th><th>Année</th><th>Spécification</th><th>Prix</th><th>Image</th><th>Action</th></tr></thead>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tbody><tr>";
    echo "<td>" . $row["Id_Voiture"] . "</td>"; // Replace "ID" with the appropriate column name from your database
    echo "<td>" . $row["Marque"] . "</td>";
    echo "<td>" . $row["Modele"] . "</td>";
    echo "<td>" . $row["idcategorie"] . "</td>";
    echo "<td>" . $row["Annee"] . "</td>";
    echo "<td>" . substr($row["Specification"], 0, 40); // Obtenez les 40 premiers caractères
    if (strlen($row["Specification"]) > 40) {
        echo "..."; // Ajoutez des points de suspension si le texte est plus long
    }
    echo "<td>" . $row["Prix"] . "</td>";
    echo "<td>" . $row["Image"] . "</td>";
    echo "<td><a href='edit_voiture.php?Id_Voiture=" . $row["Id_Voiture"] . "'><img src='../image/edit.png' width='15px'></a> | <a href='delete_voiture.php?Id_Voiture=" . $row["Id_Voiture"] . "'><img src='../image/delete.png' width='17px' onclick='return confirm(\"Etes vous sûre de vouloir supprimer la voiture?\");'></a></td>";
    echo "</tr></tbody>";
}
echo "</table>";
echo "</div>"; // Close .table-container
echo "</div>"; // Close .container
// Close connection
mysqli_close($conn);
?>
    </body>
</html>
