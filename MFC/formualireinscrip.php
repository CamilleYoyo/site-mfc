<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $NomS = $_POST['NomS'];
    $PrenomS = $_POST['PrenomS'];
    $TelS = $_POST['TelS'];
    $AdresseS = $_POST['AdresseS'];
    $MailS = $_POST['MailS'];
    $EntrepriseS = $_POST['EntrepriseS'];

    // Se connecter à la base de données (remplacez les informations de connexion par les vôtres)
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'mfc';

    $connexion = mysqli_connect($host, $user, $password, $db);

    // Vérifier la connexion à la base de données
    if (!$connexion) {
        die("La connexion a échoué : " . mysqli_connect_error());
    }

    // Échapper les données pour éviter les injections SQL
    $NomS = mysqli_real_escape_string($connexion, $NomS);
    $PrenomS = mysqli_real_escape_string($connexion, $PrenomS);
    $TelS = mysqli_real_escape_string($connexion, $TelS);
    $AdresseS = mysqli_real_escape_string($connexion, $AdresseS);
    $MailS = mysqli_real_escape_string($connexion, $MailS);
    $EntrepriseS = mysqli_real_escape_string($connexion, $EntrepriseS);

    // Vérification des champs
    if (!empty($NomS) && !empty($PrenomS) && !empty($TelS) &&
        !empty($AdresseS) && !empty($MailS) && !empty($EntrepriseS)) {

        // Enregistrement des données dans la base de données
        $requete = "INSERT INTO Stagiaires (IdS , NomS, PrenomS, TelS, AdresseS, MailS, EntrepriseS) VALUES (NULL ,'$NomS', '$PrenomS', '$TelS', '$AdresseS', '$MailS', '$EntrepriseS')";

        if (mysqli_query($connexion, $requete)) {
            echo "Les données ont bien été enregistrées.";
        } else {
            echo "Erreur: " . $requete . "<br>" . mysqli_error($connexion);
        }
    } else {
        echo "Veuillez remplir tous les champs du formulaire.";
    }

    // Fermer la connexion à la base de données
    mysqli_close($connexion);
}
?>
