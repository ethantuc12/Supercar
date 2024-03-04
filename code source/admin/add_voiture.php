-<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Voiture</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="../Css/edit_voiture.css">

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

    // Initialize variables for form fields
    $marque = $modele = $idcategorie = $annee = $specification = $prix = $Image = "";

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the form data
        $marque = $_POST["Marque"];
        $modele = $_POST["Modele"];
        $idcategorie = $_POST["idcategorie"];
        $annee = $_POST["Annee"];
        $specification = $_POST["Specification"];
        $prix = $_POST["Prix"];

        // Handle file upload
        if (isset($_FILES["Image"]["name"]) && !empty($_FILES["Image"]["name"])) {
            $targetDirectory = "../Image/";  // Create a directory for storing uploaded images
            $targetFile = $targetDirectory . basename($_FILES["Image"]["name"]);

            if (move_uploaded_file($_FILES["Image"]["tmp_name"], $targetFile)) {
                // File upload successful, store the image path
                $Image = $targetFile;
            } else {
                // Handle file upload error
                echo "Error uploading file.";
            }
        }

        // Insert the new record into the database using prepared statements
        $sql = "INSERT INTO voiture (Marque, Modele, idcategorie, Annee, Specification, Prix, Image) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssssss", $marque, $modele, $idcategorie, $annee, $specification, $prix, $Image);

            if (mysqli_stmt_execute($stmt)) {
                header("location: admin_voiture.php");
                exit();
            } else {
                echo "Error inserting record: " . mysqli_error($conn);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing statement: " . mysqli_error($conn);
        }
    }

    // Close connection
    mysqli_close($conn);
    ?>

</head>
<body>
<div class="container">
    <h1>Ajouter une voiture</h1>
    <div class="profile-form">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            <!-- Add fields for input -->
            <div class="form-group">
                <label for="Marque">Marque:</label>
                <input type="text" id="Marque" name="Marque" value="<?php echo $marque; ?>" required>
            </div>

            <div class="form-group">
                <label for="Modele">Modèle:</label>
                <input type="text" id="Modele" name="Modele" value="<?php echo $modele; ?>" required>
            </div>

            <div class="form-group">
                <label for="idcategorie">Catégorie:</label>
                <select id="idcategorie" name="idcategorie" required>
                    <option value="4x4" <?php if ($idcategorie == "4x4") echo 'selected'; ?>>4x4</option>
                    <option value="SUV" <?php if ($idcategorie == "SUV") echo 'selected'; ?>>SUV</option>
                    <option value="Berline" <?php if ($idcategorie == "Berline") echo 'selected'; ?>>Berline</option>
                    <option value="Sport" <?php if ($idcategorie == "Sport") echo 'selected'; ?>>Sport</option>
                    <option value="Hatchback" <?php if ($idcategorie == "Hatchback") echo 'selected'; ?>>Hatchback</option>
                </select>
            </div>

            <div class="form-group">
                <label for="Annee">Année:</label>
                <select id="Annee" name="Annee" required style="width: 150px; overflow-y: scroll; border-radius: 7px;">
                    <?php
                    // Generate options for years from 2000 to 2024
                    for ($year = 2000; $year <= 2024; $year++) {
                        echo '<option value="' . $year . '"';
                        if ($year == $annee) {
                            echo ' selected';
                        }
                        echo '>' . $year . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="Specification">Spécification:</label>
                <textarea id="Specification" name="Specification" required><?php echo $specification; ?></textarea>
            </div>

            <div class="form-group">
                <label for="Prix">Prix:</label>
                <input type="text" id="Prix" name="Prix" value="<?php echo $prix; ?>" required>
            </div>

            <div class="form-group">
                <label for="Image">Image:</label><br>
                <!-- Add an input field for file selection -->
                <input type="file" id="Image" name="Image" accept=".jpg, .jpeg, .png" onchange="previewImage(this);">
                <!-- Add an <img> tag for image preview -->
                <img id="imagePreview" src="<?php echo $Image; ?>" alt="Image Preview" width="250">
            </div>

            <!-- Add other fields as needed -->

            <div class="button-group">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <button type="button" class="btn btn-secondary" onclick="cancelAdd()">Annuler</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Function to update the image preview
    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var imagePreview = document.getElementById('imagePreview');
            reader.onload = function (e) {
                imagePreview.src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function cancelAdd() {
        // Redirect back to the voiture page without making any changes
        window.location.href = 'admin_voiture.php';
    }
</script>
</body>
</html>