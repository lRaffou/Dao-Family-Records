<?php
session_start();

include '../view/viewProfil.php';
include '../view/viewHeader.php';
include '../view/viewFooter.php';
include '../utils/env.php';
include '../utils/functions.php';
include '../model/modelUsers.php';

function supprimerCompte()
{
    if (!isset($_SESSION['isConnected']) || $_SESSION['isConnected'] !== true) {
        header("Location: connexion.php");
        exit();
    }

    $bdd = connectBDD($_ENV['hostBDD'], $_ENV['dbnameBDD'], $_ENV['dbLogin'], $_ENV['dbPassword']);

    try {
        $result = deleteUser($bdd, $_SESSION['id']);
        if ($result) {
            // Déconnectez l'utilisateur et détruisez la session
            session_unset();
            session_destroy();
            header("Location: ../index.php");
            exit();
        } else {
            return "Erreur lors de la suppression du compte. Veuillez réessayer.";
        }
    } catch (UserModelException $e) {
        return "Une erreur s'est produite : " . $e->getMessage();
    }
}

//Récupérer les données de Session
function afficherCompte()
{
    //1) Vérifier que l'utilisateur est connecté
    if (!isset($_SESSION['isConnected']) || $_SESSION['isConnected'] !== true) {
        header("Location: connexion.php");
        exit();
    }

    //2) Je transmets à la vue les données du compte
    return ["message" => "", "nom" => $_SESSION['nom'], "prenom" => $_SESSION['prenom'], 'login' => $_SESSION['login'], 'pseudo' => $_SESSION['pseudo'], 'date_de_naissance' => $_SESSION['date_de_naissance'], 'adresse' => $_SESSION['adresse'], 'ville' => $_SESSION['ville'], 'telephone' => $_SESSION['telephone'], 'genre' => $_SESSION['genre'], 'date_de_creation_du_compte' => $_SESSION['date_de_creation_du_compte'], 'postal_code' => $_SESSION['postal_code'], 'pays' => $_SESSION['pays']];
}

$message = '';
if (isset($_POST['action']) && $_POST['action'] === 'delete_account') {
    $message = supprimerCompte();
}

echo renderHeader();
echo renderProfil(afficherCompte()['nom'], afficherCompte()['prenom'], afficherCompte()['login'], afficherCompte()['pseudo'], afficherCompte()['date_de_naissance'], afficherCompte()['adresse'], afficherCompte()['postal_code'], afficherCompte()['pays'], afficherCompte()['ville'], afficherCompte()['telephone'], afficherCompte()['genre'], afficherCompte()['date_de_creation_du_compte'], $message);
echo renderFooter();
?>