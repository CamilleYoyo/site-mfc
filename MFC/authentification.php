<?php
// Récupere les valeurs saisies dans le formulaire connexion
$mail_user = $_POST['email'];
$mdp_user = $_POST['mdp'];



//  /require_once 'config.php

// Se connceter à la base de données

$user = 'root';
$password = '';
$db = 'mfc';
$host = 'localhost';
$port = 3306;


// $port = 3307;



$connexion = mysqli_connect($host, $user, $password, $db, $port);


// Vérifier les informations d'identification saisies dans le formulaire de connexion 

$requete = "SELECT * FROM user WHERE mail_user = '$mail_user' AND mdp_user = '$mdp_user'";

$resultat = mysqli_query($connexion, $requete);




if (!$resultat) {
    die("La requête a écheoué : " . mysqli_error($connexion));
}


// Si la requête renvoie un resultat, cela signifie que les informations d'identifications sont valides




if (mysqli_num_rows($resultat) > 0) {

    // Autoriser l'utilisation à votre application 

    echo "Connexion réussie. Vous allez être redirigé vers le site de l'accueil dans 5 secondes...";


    // Stocker les informations de l'utilisateur dans la session
    // Stocker l'e-mail de l'utilisateur dans la session
    session_start();
    $_SESSION['email'] = $mail_user;




    // Rediriger vers la page personnalisée
    header("Location: page_personnalisee.php");






    











    // Calcul des initiales (par exemple, prenez la première lettre de l'adresse e-mail)
    $initiales = strtoupper(substr($mail_user, 0, 1));

    // Déterminez le message de salutation en fonction de l'heure
    $heure = date('G'); // Récupère l'heure actuelle au format 24 heures

    if ($heure >= 5 && $heure < 12) {
        $message = "Bonjour";
    } elseif ($heure >= 12 && $heure < 18) {
        $message = "Bonne après-midi";
    } else {
        $message = "Bonne soirée";
    }

    header("refresh:5;page_personnalisee.php");
    exit();
} else {
    // Sinon, afficher un message d'erreur indiquant que les informations d'identification sont invalides

    echo "Les informations d'identification saisies sont invalides. ";

    header("Location: Espaceclient.php"); // Redirigez vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}



// Fermer la connexion à la base de données
mysqli_close($connexion)
?>