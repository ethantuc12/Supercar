<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
 
    <!-- Custom Css -->
    <link rel="stylesheet" href="../Css/admin accueil.css">
</head>
<body>
<a class="back-button" href="dash.php">< Back</a><br><br><br><br>
<div class="container">
    <h1>Modifier Admin Accueil</h1>
    <div class="profile-form">
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
            $id = $_POST["id_update"];
            $apdn = $_POST["apdn"];
            $apdn1 = $_POST["apdn1"];
 
            // ...

            // Handle file uploads for image1
            if (isset($_FILES["image1"]["name"]) && !empty($_FILES["image1"]["name"])) {
                $targetDirectory = "../Image/";  // Create a directory for storing uploaded images
                $targetFile = $targetDirectory . basename($_FILES["image1"]["name"]);
 
                if (move_uploaded_file($_FILES["image1"]["tmp_name"], $targetFile)) {
                    // File upload successful, update the database with the new image path
                    $image1 = $targetFile;
                } else {
                    // Handle file upload error
                    echo "Error uploading file.";
                }
            } else {
                // No new file uploaded, use the value of the current_image1 field
                $image1 = $_POST["current_image1"];
            }


            if (isset($_FILES["image2"]["name"]) && !empty($_FILES["image2"]["name"])) {
                $targetDirectory = "../Image/";  // Create a directory for storing uploaded images
                $targetFile = $targetDirectory . basename($_FILES["image2"]["name"]);
 
                if (move_uploaded_file($_FILES["image2"]["tmp_name"], $targetFile)) {
                    // File upload successful, update the database with the new image path
                    $image2 = $targetFile;
                } else {
                    // Handle file upload error
                    echo "Error uploading file.";
                }
            } else {
                // No new file uploaded, use the value of the current_image1 field
                $image2 = $_POST["current_image2"];
            }


            if (isset($_FILES["image3"]["name"]) && !empty($_FILES["image3"]["name"])) {
                $targetDirectory = "../Image/";  // Create a directory for storing uploaded images
                $targetFile = $targetDirectory . basename($_FILES["image3"]["name"]);
 
                if (move_uploaded_file($_FILES["image3"]["tmp_name"], $targetFile)) {
                    // File upload successful, update the database with the new image path
                    $image3 = $targetFile;
                } else {
                    // Handle file upload error
                    echo "Error uploading file.";
                }
            } else {
                // No new file uploaded, use the value of the current_image1 field
                $image3 = $_POST["current_image3"];
            }

            if (isset($_FILES["image4"]["name"]) && !empty($_FILES["image4"]["name"])) {
                $targetDirectory = "../Image/";  // Create a directory for storing uploaded images
                $targetFile = $targetDirectory . basename($_FILES["image4"]["name"]);
 
                if (move_uploaded_file($_FILES["image4"]["tmp_name"], $targetFile)) {
                    // File upload successful, update the database with the new image path
                    $image4 = $targetFile;
                } else {
                    // Handle file upload error
                    echo "Error uploading file.";
                }
            } else {
                // No new file uploaded, use the value of the current_image1 field
                $image4 = $_POST["current_image4"];
            }


            if (isset($_FILES["image5"]["name"]) && !empty($_FILES["image5"]["name"])) {
                $targetDirectory = "../Image/";  // Create a directory for storing uploaded images
                $targetFile = $targetDirectory . basename($_FILES["image5"]["name"]);
 
                if (move_uploaded_file($_FILES["image5"]["tmp_name"], $targetFile)) {
                    // File upload successful, update the database with the new image path
                    $image5 = $targetFile;
                } else {
                    // Handle file upload error
                    echo "Error uploading file.";
                }
            } else {
                // No new file uploaded, use the value of the current_image1 field
                $image5 = $_POST["current_image5"];
            }


            if (isset($_FILES["image_apdn"]["name"]) && !empty($_FILES["image_apdn"]["name"])) {
                $targetDirectory = "../Image/";  // Create a directory for storing uploaded images
                $targetFile = $targetDirectory . basename($_FILES["image_apdn"]["name"]);
 
                if (move_uploaded_file($_FILES["image_apdn"]["tmp_name"], $targetFile)) {
                    // File upload successful, update the database with the new image path
                    $image_apdn = $targetFile;
                } else {
                    // Handle file upload error
                    echo "Error uploading file.";
                }
            } else {
                // No new file uploaded, use the value of the current_image1 field
                $image_apdn = $_POST["current_image6"];
            }


            if (isset($_FILES["image_apdn1"]["name"]) && !empty($_FILES["image_apdn1"]["name"])) {
                $targetDirectory = "../Image/";  // Create a directory for storing uploaded images
                $targetFile = $targetDirectory . basename($_FILES["image_apdn1"]["name"]);
 
                if (move_uploaded_file($_FILES["image_apdn1"]["tmp_name"], $targetFile)) {
                    // File upload successful, update the database with the new image path
                    $image_apdn1 = $targetFile;
                } else {
                    // Handle file upload error
                    echo "Error uploading file.";
                }
            } else {
                // No new file uploaded, use the value of the current_image1 field
                $image_apdn1 = $_POST["current_image7"];
            }

            // ...

            // Update the record in the database using prepared statements
            $sql = "UPDATE caroussel SET image1=?, image2=?, image3=?, image4=?, image5=?, apdn=?, apdn1=?, image_apdn=?, image_apdn1=? WHERE id_update=?";
 
            $stmt = mysqli_prepare($conn, $sql);
 
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "ssssssssss", $image1, $image2, $image3, $image4, $image5, $apdn, $apdn1, $image_apdn, $image_apdn1, $id);

 
                // ...
 
                if (mysqli_stmt_execute($stmt)) {
                    header("location: dash.php");
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
            $sql = "SELECT * FROM caroussel WHERE id_update=1";
            $stmt = mysqli_prepare($conn, $sql);
 
            if ($stmt) {
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
 
                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    $image1 = $row["image1"];
                    $image2 = $row["image2"];
                    $image3 = $row["image3"];
                    $image4 = $row["image4"];
                    $image5 = $row["image5"];
                    $apdn = $row["apdn"];
                    $apdn1 = $row["apdn1"];
                    $image_apdn = $row["image_apdn"];
                    $image_apdn1 = $row["image_apdn1"];
                    $id = $row["id_update"];
                    
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
 
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            <input type="hidden" name="id_update" value="<?php echo $id; ?>">
            <!-- Add a hidden field to store the current image path -->
            <input type="hidden" name="current_image1" value="<?php echo $image1; ?>">
            <input type="hidden" name="current_image2" value="<?php echo $image2; ?>">
            <input type="hidden" name="current_image3" value="<?php echo $image3; ?>">
            <input type="hidden" name="current_image4" value="<?php echo $image4; ?>">
            <input type="hidden" name="current_image5" value="<?php echo $image5; ?>">
            <input type="hidden" name="current_image6" value="<?php echo $image_apdn; ?>">
            <input type="hidden" name="current_image7" value="<?php echo $image_apdn1; ?>">




 
 
 
<body>
<div class="container">
    <div class="profile-form">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

            <input type="hidden" name="id_update" value="<?php echo $id; ?>">
            <!-- Add a hidden field to store the current image path -->
            <input type="hidden" name="current_image1" value="<?php echo $image1; ?>">
            <input type="hidden" name="current_image2" value="<?php echo $image2; ?>">
            <input type="hidden" name="current_image3" value="<?php echo $image3; ?>">
            <input type="hidden" name="current_image4" value="<?php echo $image4; ?>">
            <input type="hidden" name="current_image5" value="<?php echo $image5; ?>">
            <input type="hidden" name="current_image6" value="<?php echo $image_apdn; ?>">
            <input type="hidden" name="current_image7" value="<?php echo $image_apdn1; ?>">
            
 
 
            <div class="form-group">
                <label for="image1">Image 1</label><br>
                <!-- Add an input field for file selection -->
                <input type="file" id="image1" name="image1" accept=".jpg, .jpeg, .png" onchange="previewImage1(this);">
                <!-- Add an <img> tag for image preview -->
                <img id="imagePreview1" src="<?php echo $image1; ?>" alt="Image Preview" width="250">
            </div>

            <div class="form-group">
                <label for="image2">Image 2</label><br>
                <input type="file" id="image2" name="image2" accept=".jpg, .jpeg, .png" onchange="previewImage2(this);">
                <img id="imagePreview2" src="<?php echo $image2; ?>" alt="Image Preview" width="250">
            </div>


            <div class="form-group">
                <label for="image3">Image 3</label><br>
                <!-- Add an input field for file selection -->
                <input type="file" id="image3" name="image3" accept=".jpg, .jpeg, .png" onchange="previewImage3(this);">
                <!-- Add an <img> tag for image preview -->
                <img id="imagePreview3" src="<?php echo $image3; ?>" alt="Image Preview" width="250">
            </div>

            <div class="form-group">
                <label for="image4">Image 4</label><br>
                <!-- Add an input field for file selection -->
                <input type="file" id="image4" name="image4" accept=".jpg, .jpeg, .png" onchange="previewImage4(this);">
                <!-- Add an <img> tag for image preview -->
                <img id="imagePreview4" src="<?php echo $image4; ?>" alt="Image Preview" width="250">
            </div>

            <div class="form-group">
                <label for="image5">Image 5</label><br>
                <!-- Add an input field for file selection -->
                <input type="file" id="image5" name="image5" accept=".jpg, .jpeg, .png" onchange="previewImage5(this);">
                <!-- Add an <img> tag for image preview -->
                <img id="imagePreview5" src="<?php echo $image5; ?>" alt="Image Preview" width="250">
            </div>
 
            <div class="form-group">
                <label for="apdn">Premier Texte:</label>
                <textarea id="apdn" name="apdn" required><?php echo $apdn; ?></textarea>
            </div>

            <div class="form-group">
                <label for="apdn1">Deuxieme Texte:</label>
                <textarea id="apdn1" name="apdn1" required><?php echo $apdn1; ?></textarea>
            </div>

            <div class="form-group">
                <label for="image_apdn">Image 7</label><br>
                <!-- Add an input field for file selection -->
                <input type="file" id="image_apdn" name="image_apdn" accept=".jpg, .jpeg, .png" onchange="previewImage6(this);">
                <!-- Add an <img> tag for image preview -->
                <img id="imagePreview6" src="<?php echo $image_apdn; ?>" alt="Image Preview" width="250">
            </div>

            <div class="form-group">
                <label for="image_apdn1">Image 8</label><br>
                <!-- Add an input field for file selection -->
                <input type="file" id="image_apdn1" name="image_apdn1" accept=".jpg, .jpeg, .png" onchange="previewImage7(this);">
                <!-- Add an <img> tag for image preview -->
                <img id="imagePreview7" src="<?php echo $image_apdn1; ?>" alt="Image Preview" width="250">
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
 
     // Pour l'image 1
var imagePreview1 = document.getElementById('imagePreview1');
var currentImage1 = document.getElementsByName('current_image1')[0].value;
imagePreview1.src = currentImage1;

function previewImage1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            imagePreview1.src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}
 


       // Pour l'image 2
var imagePreview2 = document.getElementById('imagePreview2');
var currentImage2 = document.getElementsByName('current_image2')[0].value;
imagePreview2.src = currentImage2;

function previewImage2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            imagePreview2.src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}


// Pour l'image 3
var imagePreview3 = document.getElementById('imagePreview3');
var currentImage3 = document.getElementsByName('current_image3')[0].value;
imagePreview3.src = currentImage3;

function previewImage3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            imagePreview3.src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}
 


      // Initialize the image preview with the existing image path
      var imagePreview4 = document.getElementById('imagePreview4');
    var currentImage4 = document.getElementsByName('current_image4')[0].value;
    imagePreview4.src = currentImage4;
 
    // Function to update the image preview
    function previewImage4(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                imagePreview4.src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    // Initialize the image preview with the existing image path
    var imagePreview5 = document.getElementById('imagePreview5');
    var currentImage5 = document.getElementsByName('current_image5')[0].value;
    imagePreview5.src = currentImage5;
 
    // Function to update the image preview
    function previewImage5(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                imagePreview5.src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    // Initialize the image preview with the existing image path
    var imagePreview6 = document.getElementById('imagePreview6');
    var currentImage6 = document.getElementsByName('current_image6')[0].value;
    imagePreview6.src = currentImage6;
 
    // Function to update the image preview
    function previewImage6(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                imagePreview6.src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    // Initialize the image preview with the existing image path
    var imagePreview7 = document.getElementById('imagePreview7');
    var currentImage7 = document.getElementsByName('current_image7')[0].value;
    imagePreview7.src = currentImage7;
 
    // Function to update the image preview
    function previewImage7(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                imagePreview7.src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
 
 
 
 
                function cancelEdit() {
        // Redirect back to the profile page without the edit parameter
        window.location.href = 'dash.php';
    }
 
 
    </script>
</body>
</html>
 

