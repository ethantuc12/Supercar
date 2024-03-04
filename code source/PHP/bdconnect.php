<?php

 //définir vos paramètres dec connexion

 // nom du serveur
 $host="localhost";
 // nom utilisateur
 $login="root";
 // mot de passe
 $pass="";
 // nom de la base de données
 $dbname="supercar";


 // créer la connexion avec la base de données
 $bdd = mysqli_connect($host, $login, $pass, $dbname);


 // vérification de la connexion avec la BD
 if ($bdd)
 {
 echo "Connexion reussie à MySQL";
 }
 else
 {
 echo "Connexion non-reussie à MySQL";
 }


 // changer le jeu de caractères à utf8
 mysqli_set_charset($bdd,"utf8");

 ?>