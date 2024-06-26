<?php
// Détruit la session et redirige vers la page de connexion
session_start();
session_destroy();
header("Location: Espaceclient.php");
exit();
?>
