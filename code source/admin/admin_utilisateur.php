<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">

        <title>Admin</title>

        <link rel="stylesheet" href="../Css/utilisateur.css">

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

$sql = "SELECT * FROM inscription";

$result = mysqli_query($conn, $sql);

 

// Output the table
echo "<h1>Gestion des voitures</h1>";

echo "<div class='container'>";

echo "<table>";

echo "<thead><tr><th>ID</th><th>Prenom</th><th>Nom</th><th>Email</th><th>Mot de Passe</th><th>Numero de Telephone</th><th>Nationalité</th><th width='150px'>Action</th></tr><thead>";

while ($row = mysqli_fetch_assoc($result)) {

    echo "<tbody><tr>";

    echo "<td>" . $row["idinscription"] . "</td>";

    echo "<td>" . $row["prenom"] . "</td>";

    echo "<td>" . $row["nom"] . "</td>";

    echo "<td>" . $row["email"] . "</td>";

    echo "<td>" . $row["mot_de_passe"] . "</td>";

    echo "<td>" . $row["numero_de_telephone"] . "</td>";

    echo "<td>" . $row["civilite"] . "</td>";

    echo "<td><a href='edit_utilisateur.php?idinscription=" . $row["idinscription"] . "'><img src='../image/edit.png' width='20px'></a> | <a href='delete_util.php?idinscription=" . $row["idinscription"] . "'><img src='../image/delete.png' width='20px'></a></td>";

    echo "</tr></tbody>";

}

echo "</table>";

echo "</div>";

 

// Close connection

mysqli_close($conn);

?>

    </body>

</html>