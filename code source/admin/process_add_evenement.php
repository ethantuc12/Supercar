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

mysqli_set_charset($conn, "utf8");

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $Petit_txt = $_POST["Petit_txt"];
    $Petit_titre = $_POST["Petit_titre"];
    $Texte = $_POST["Texte"];
    $Titre = $_POST["Titre"];

    // Handle video upload
    if (isset($_FILES["Video"]["name"]) && !empty($_FILES["Video"]["name"])) {
        $targetDirectory = "../Video/";  // Create a directory for storing uploaded videos
        $targetFile = $targetDirectory . basename($_FILES["Video"]["name"]);

        if (move_uploaded_file($_FILES["Video"]["tmp_name"], $targetFile)) {
            // Video upload successful
            $Video = $targetFile;
        } else {
            // Handle video upload error
            echo "Error uploading video.";
            exit();
        }
    } else {
        // No video uploaded
        $Video = "";
    }

    // Handle image upload
    if (isset($_FILES["Image"]["name"]) && !empty($_FILES["Image"]["name"])) {
        $targetDirectory = "../Image/";  // Create a directory for storing uploaded images
        $targetFile = $targetDirectory . basename($_FILES["Image"]["name"]);

        if (move_uploaded_file($_FILES["Image"]["tmp_name"], $targetFile)) {
            // Image upload successful
            $Image = $targetFile;
        } else {
            // Handle image upload error
            echo "Error uploading image.";
            exit();
        }
    } else {
        // No image uploaded
        $Image = "";
    }

    // Insert the new event into the database using prepared statements
    $sql = "INSERT INTO evenement (Video, Image, Petit_txt, Petit_titre, Texte, Titre) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssss", $Video, $Image, $Petit_txt, $Petit_titre, $Texte, $Titre);

        if (mysqli_stmt_execute($stmt)) {
            // Event insertion successful
            header("location: evenement.php"); // Redirect to the events page
            exit();
        } else {
            echo "Error inserting record: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
} else {
    echo "Form not submitted.";
}

// Close connection
mysqli_close($conn);
?>
