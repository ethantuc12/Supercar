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
$sql = "SELECT * FROM contact";
$result = mysqli_query($conn, $sql);

// Output the table
echo "<h1>Gestion de Contact</h1><div class='container'>";
echo "<table>";
echo "<thead><tr><th>ID</th><th>Nom Complet</th><th>Email</th><th>Message</th><th width='150px'>Action</th></tr><thead>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tbody><tr>";
    echo "<td>" . $row["idcontact"] . "</td>";
    echo "<td>" . $row["nom_complet"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["message"] . "</td>";
    echo "<td><a href='edit_contact.php?idcontact=" . $row["idcontact"] . "'><img src='../image/edit.png' width='20px'></a> | <a href='delete_contact.php?idcontact=" . $row["idcontact"] . "'><img src='../image/delete.png' width='20px' onclick='return confirm(\"Are you sure you want to delete this contact?\");'></a></td>";
    echo "</tr></tbody>";
}
echo "</table>";
echo "</div>";

// Close connection
mysqli_close($conn);
?>
    </body>
</html>
