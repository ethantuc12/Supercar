<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have a database connection established
    $dbHost = 'localhost';
    $dbName = 'supercar';
    $dbUser = 'root';
    $dbPass = '';
    
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    
 
  // Update user's First Name
  if (isset($_POST['newPrenom'])) {
      $newPrenom = $_POST['newPrenom'];
      $userId = $_SESSION['idinscription'];
      
      $updatePrenomStmt = $db->prepare("UPDATE inscription SET prenom = :newPrenom WHERE idinscription = :userId");
      $updatePrenomStmt->bindParam(':newPrenom', $newPrenom);
      $updatePrenomStmt->bindParam(':userId', $userId);
      $updatePrenomStmt->execute();
      
      // Update the session variable
      $_SESSION['prenom'] = $newPrenom;
  }

  // Update user's First Name
  if (isset($_POST['newNom'])) {
    $newNom = $_POST['newNom'];
    $userId = $_SESSION['idinscription'];
    
    $updateNomStmt = $db->prepare("UPDATE inscription SET nom = :newNom WHERE idinscription = :userId");
    $updateNomStmt->bindParam(':newNom', $newNom);
    $updateNomStmt->bindParam(':userId', $userId);
    $updateNomStmt->execute();
    
    // Update the session variable
    $_SESSION['Nom'] = $newNom;
}

// Update user's First Name
if (isset($_POST['newEmail'])) {
  $newEmail = $_POST['newEmail'];
  $userId = $_SESSION['idinscription'];
  
  $updateEmailStmt = $db->prepare("UPDATE inscription SET email = :newEmail WHERE idinscription = :userId");
  $updateEmailStmt->bindParam(':newEmail', $newEmail);
  $updateEmailStmt->bindParam(':userId', $userId);
  $updateEmailStmt->execute();
  
  // Update the session variable
  $_SESSION['email'] = $newEmail;
}

// Update user's First Name
if (isset($_POST['newPassword'])) {
  $newPassword = $_POST['newPassword'];
  $userId = $_SESSION['idinscription'];
  
  $updatePasswordStmt = $db->prepare("UPDATE inscription SET mot_de_passe = :newPassword WHERE idinscription = :userId");
  $updatePasswordStmt->bindParam(':newPassword', $newPassword);
  $updatePasswordStmt->bindParam(':userId', $userId);
  $updatePasswordStmt->execute();
  
  // Update the session variable
  $_SESSION['mot_de_passe'] = $newPassword;
}

// Update user's First Name
if (isset($_POST['newPhone'])) {
  $newPhone = $_POST['newPhone'];
  $userId = $_SESSION['idinscription'];
  
  $updatePhoneStmt = $db->prepare("UPDATE inscription SET numero_de_telephone = :newPhone WHERE idinscription = :userId");
  $updatePhoneStmt->bindParam(':newPhone', $newPhone);
  $updatePhoneStmt->bindParam(':userId', $userId);
  $updatePhoneStmt->execute();
  
  // Update the session variable
  $_SESSION['numero_de_telephone'] = $newPhone;
}

  // Repeat the above steps for other fields like Last Name, Password, Phone Number, and Civilité.
 
  // Regenerate the session ID for security
  session_regenerate_id(true);
 
  // Redirect back to the profile page after updating
  header('Location: profile.php');
  exit;
}
?>
