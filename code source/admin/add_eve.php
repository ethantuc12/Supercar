<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Evenement</title>
    <link rel="stylesheet" href="../Css/edit_eve.css">
</head>
<body>
    <div class="container">
        <h1>Ajouter un nouvel évènement</h1>
        <div class="profile-form">
            <form method="post" action="process_add_evenement.php" enctype="multipart/form-data">
                <!-- Add event details fields here -->
                <div class="form-group">
                    <label for="Video">Vidéo</label><br>
                    <input type="file" id="Video" name="Video" accept=".mp4, .avi, .mov" onchange="previewVideo(this);">
                    <!-- Add video preview element here -->
                    <video id="videoPreview" muted autoplay loop width="250">
                        <source src="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="form-group">
                    <label for="Image">Image</label><br>
                    <input type="file" id="Image" name="Image" accept=".jpg, .jpeg, .png" onchange="previewImage(this);">
                    <!-- Add image preview element here -->
                    <img id="imagePreview" src="" alt="Image Preview" width="250">
                </div>

                <div class="form-group">
                    <label for="Petit_txt">Petit Texte:</label>
                    <textarea id="Petit_txt" name="Petit_txt" required></textarea>
                </div>

                <div class="form-group">
                    <label for="Petit_titre">Petit Titre:</label>
                    <textarea id="Petit_titre" name="Petit_titre" required></textarea>
                </div>

                <div class="form-group">
                    <label for="Texte">Texte:</label>
                    <textarea id="Texte" name="Texte" required></textarea>
                </div>

                <div class="form-group">
                    <label for="Titre">Titre:</label>
                    <textarea id="Titre" name="Titre" required></textarea>
                </div>

                <!-- Add any other fields you need for the event details -->

                <div class="button-group">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <button type="button" class="btn btn-secondary" onclick="cancelAdd()">Annuler</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Initialize the image preview with a placeholder
        var imagePreview = document.getElementById('imagePreview');
        imagePreview.src = 'placeholder.jpg'; // Provide a placeholder image URL

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

        // Initialize the video preview with a placeholder
        var videoPreview = document.getElementById('videoPreview');
        videoPreview.src = 'placeholder.mp4'; // Provide a placeholder video URL

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

        // Function to cancel adding and return to the previous page
        function cancelAdd() {
            // Redirect to the previous page or wherever you want
            window.location.href = 'evenement.php';
        }
    </script>
</body>
</html>
