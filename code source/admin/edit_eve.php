<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="../Css/edit_eve.css">


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



// ... (your existing code for database connection)

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $id = $_POST["id_eve"];
    
    $Petit_txt = $_POST["Petit_txt"];
    $Petit_titre = $_POST["Petit_titre"];
    $Texte = $_POST["Texte"];
    $Titre = $_POST["Titre"];

   // Handle video upload
// Handle video upload

if (isset($_FILES["Video"]["name"])&& !empty($_FILES["Video"]["name"])) {

    $targetDirectory = "../Video/";  // Create a directory for storing uploaded videos

    $targetFile = $targetDirectory . basename($_FILES["Video"]["name"]);



    if (move_uploaded_file($_FILES["Video"]["tmp_name"], $targetFile)) {

        // Video upload successful, update the database with the new video path

        $Video = $targetFile;

    } else {

        // Handle video upload error

        echo "Error uploading video.";

    }
} else {
    // No new video uploaded, use the value of the current_video field
    $Video = $_POST["current_video"];
}

    // Handle file upload
    if (isset($_FILES["Image"]["name"])&& !empty($_FILES["Image"]["name"])) {
        $targetDirectory = "../Image/";  // Create a directory for storing uploaded images
        $targetFile = $targetDirectory . basename($_FILES["Image"]["name"]);

        if (move_uploaded_file($_FILES["Image"]["tmp_name"], $targetFile)) {
            // File upload successful, update the database with the new image path
            $Image = $targetFile;
        } else {
            // Handle file upload error
            echo "Error uploading file.";
        }
    } else {
        // No new file uploaded, use the value of the current_image field
        $Image = $_POST["current_image"];
    }

    // Update the record in the database using prepared statements
    $sql = "UPDATE evenement SET Video=?, Image=?, Petit_txt=?, Petit_titre=?, Texte=?, Titre=? WHERE id_eve=?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssssi", $Video, $Image, $Petit_txt, $Petit_titre, $Texte, $Titre, $id);

        if (mysqli_stmt_execute($stmt)) {
            header("location: evenement.php");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
} else {
    // Retrieve the record to be edited
    $id = $_GET["id_eve"];
    $sql = "SELECT * FROM evenement WHERE id_eve=?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $Video = $row["Video"];
            $Image = $row["Image"];
            $Petit_txt = $row["Petit_txt"];
            $Petit_titre = $row["Petit_titre"];
            $Texte = $row["Texte"];
            $Titre = $row["Titre"];
        } else {
            echo "Record not found";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);
?>



<body>
<div class="container">
    <h1>Modifier les évènements</h1>
    <div class="profile-form">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            <input type="hidden" name="id_eve" value="<?php echo $id; ?>">
            <!-- Add a hidden field to store the current image path -->
            <input type="hidden" name="current_image" value="<?php echo $Image; ?>">
            <input type="hidden" name="current_video" value="<?php echo $Video; ?>">



            <div class="form-group">
                <label for="Video">Vidéo</label><br>
                <input type="file" id="Video" name="Video" accept=".mp4, .avi, .mov" onchange="previewVideo(this);">
                <video id="videoPreview" muted autoplay loop width="250">
                    <source src="<?php echo $Video; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>


            <div class="form-group">
                <label for="Image">Image</label><br>
                <!-- Add an input field for file selection -->
                <input type="file" id="Image" name="Image" accept=".jpg, .jpeg, .png" onchange="previewImage(this);">
                <!-- Add an <img> tag for image preview -->
                <img id="imagePreview" src="<?php echo $Image; ?>" alt="Image Preview" width="250">
            </div>

            <div class="form-group">
    <label for="Petit_txt">Petit Texte:</label>
    <textarea id="Petit_txt" name="Petit_txt" required><?php echo $Petit_txt; ?></textarea>
</div>

<div class="form-group">
    <label for="Petit_titre">Petit Titre:</label>
    <textarea id="Petit_titre" name="Petit_titre" required><?php echo $Petit_titre; ?></textarea>
</div>

<div class="form-group">
    <label for="Texte">Texte:</label>
    <textarea id="Texte" name="Texte" required><?php echo $Texte; ?></textarea>
</div>

<div class="form-group">
    <label for="Titre">Titre:</label>
    <textarea id="Titre" name="Titre" required><?php echo $Titre; ?></textarea>
</div>

            <!-- Ajoutez d'autres champs au besoin -->

            <div class="button-group">
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                <button type="button" class="btn btn-secondary" onclick="cancelEdit()">Annuler</button>
            </div>
        </form>
    </div>
</div>



    <script>

      // Initialize the image preview with the existing image path
    var imagePreview = document.getElementById('imagePreview');
    var currentImage = document.getElementsByName('current_image')[0].value;
    imagePreview.src = currentImage;

    // Function to update the image preview
    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                imagePreview.src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    // Initialize the video preview with the existing video URL
    var videoPreview = document.getElementById('videoPreview');
    var currentVideo = document.getElementsByName('current_video')[0].value;
    videoPreview.src = currentVideo;

    // Function to update the video preview
    function previewVideo(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                videoPreview.src = URL.createObjectURL(input.files[0]);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }



                function cancelEdit() {
        // Redirect back to the profile page without the edit parameter
        window.location.href = 'evenement.php';
    }


    </script>
</body>
</html>
