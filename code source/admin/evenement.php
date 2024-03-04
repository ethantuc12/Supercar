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
$sql = "SELECT * FROM evenement";
$result = mysqli_query($conn, $sql);

// Output the table
echo "<h1>Gestion des évènements</h1><div class='container'>";
echo "<div style='text-align: right; margin-bottom: 10px;'><a href='add_eve.php' class='btn btn-primary'>Ajouter évènement</a></div>"; // Add the button here

echo "<table>";
echo "<thead><tr><th>ID</th><th>Vidéo</th><th>Image</th><th>Petit Texte</th><th>Petit Titre</th><th>Texte</th><th>Titre</th><th width='150px'>Action</th></tr><thead>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tbody><tr>";
    echo "<td>" . $row["id_eve"] . "</td>";
    echo "<td><video width='140' height='110' autoplay muted loop>

        <source src='" . $row["Video"] . "' type='video/mp4'>

        Your browser does not support the video tag.

    </video></td>";
    echo "<td><img src='" . $row["Image"] . "' width='140'></td>";
    echo "<td>" . substr($row["Petit_txt"], 0, 40); // Obtenez les 40 premiers caractères
    if (strlen($row["Petit_txt"]) > 40) {
        echo "..."; // Ajoutez des points de suspension si le texte est plus long
    }
    echo "</td>";
    echo "<td>" . substr($row["Petit_titre"], 0, 40); // Obtenez les 40 premiers caractères
    if (strlen($row["Petit_titre"]) > 40) {
        echo "..."; // Ajoutez des points de suspension si le texte est plus long
    }
    echo "<td>" . substr($row["Texte"], 0, 40); // Obtenez les 40 premiers caractères
    if (strlen($row["Texte"]) > 40) {
        echo "..."; // Ajoutez des points de suspension si le texte est plus long
    }
    echo "</td>";
    echo "<td>" . substr($row["Titre"], 0, 40); // Obtenez les 40 premiers caractères
    if (strlen($row["Titre"]) > 40) {
        echo "..."; // Ajoutez des points de suspension si le texte est plus long
    }
    echo "<td><a href='edit_eve.php?id_eve=" . $row["id_eve"] . "'><img src='../image/edit.png' width='20px'></a> | <a href='delete_eve.php?id_eve=" . $row["id_eve"] . "'><img src='../image/delete.png' width='20px' onclick='return confirm(\"Etes-vous sure de vouloir effacer cet évènement?\");'></a></td>";
    echo "</tr></tbody>";
}
echo "</table>";
echo "</div>";

// Close connection
mysqli_close($conn);
?>
    </body>
</html>
