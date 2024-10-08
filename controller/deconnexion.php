<?php
session_start();

function deco(){
    // Détruire toutes les variables de session
    $_SESSION = array();

    // Détruire la session
    session_destroy();

    // Rediriger vers l'Accueil
    header('Location: /index.php');
    exit;
}

if (isset($_SESSION['isConnected']) && $_SESSION['isConnected'] === true) {
    deco();
} else {
    header('Location: /index.php');
    exit;
}
?>