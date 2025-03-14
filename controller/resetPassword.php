<?php
session_start();

include '../utils/env.php';
include '../utils/functions.php';
include '../model/modelUsers.php';
include '../view/viewResetPassword.php';
include '../view/viewHeader.php';
include '../view/viewFooter.php';

function generateResetToken()
{
    return bin2hex(random_bytes(32));
}

function handleResetRequest()
{
    if (!isset($_POST['submit_reset'])) {
        return '';
    }

    if (!isset($_POST['email']) || empty($_POST['email'])) {
        return 'Veuillez entrer votre email';
    }

    $email = sanitize($_POST['email']);
    $bdd = connectBDD($_ENV['hostBDD'], $_ENV['dbnameBDD'], $_ENV['dbLogin'], $_ENV['dbPassword']);

    try {
        // Vérifier si l'email existe
        $user = readUserByLogin($bdd, $email);
        if (empty($user)) {
            return 'Aucun compte associé à cet email';
        }

        // Générer un token unique
        $token = generateResetToken();
        $expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));

        // Sauvegarder le token dans la base de données
        saveResetToken($bdd, $email, $token, $expiry);

        // Construire le lien de réinitialisation
        $resetLink = "http://" . $_SERVER['HTTP_HOST'] . "/controller/resetPassword.php?token=" . $token;

        // Envoyer l'email
        $to = $email;
        $subject = "Réinitialisation de votre mot de passe";
        $message = "Bonjour,\n\nPour réinitialiser votre mot de passe, cliquez sur le lien suivant :\n" . $resetLink . "\n\nCe lien est valable pendant 1 heure.\n\nSi vous n'avez pas demandé cette réinitialisation, ignorez cet email.";
        $headers = "From: " . $_ENV['emailFrom'] . "\r\n";

        if (mail($to, $subject, $message, $headers)) {
            return "Un email de réinitialisation a été envoyé à votre adresse email.";
        } else {
            return "Erreur lors de l'envoi de l'email. Veuillez réessayer plus tard.";
        }

    } catch (Exception $e) {
        return "Une erreur s'est produite. Veuillez réessayer plus tard.";
    }
}

function handlePasswordReset()
{
    if (!isset($_POST['submit_new_password'])) {
        return '';
    }

    if (
        !isset($_POST['token']) || empty($_POST['token']) ||
        !isset($_POST['new_password']) || empty($_POST['new_password']) ||
        !isset($_POST['confirm_password']) || empty($_POST['confirm_password'])
    ) {
        return 'Tous les champs sont requis';
    }

    if ($_POST['new_password'] !== $_POST['confirm_password']) {
        return 'Les mots de passe ne correspondent pas';
    }

    $token = sanitize($_POST['token']);
    $password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
    $bdd = connectBDD($_ENV['hostBDD'], $_ENV['dbnameBDD'], $_ENV['dbLogin'], $_ENV['dbPassword']);

    try {
        if (updatePasswordWithToken($bdd, $token, $password)) {
            header("Location: connexion.php?message=Mot de passe mis à jour avec succès");
            exit();
        } else {
            return "Lien de réinitialisation invalide ou expiré";
        }
    } catch (Exception $e) {
        return "Une erreur s'est produite. Veuillez réessayer plus tard.";
    }
}

$message = '';

// Si un token est présent dans l'URL, afficher le formulaire de nouveau mot de passe
if (isset($_GET['token'])) {
    $token = sanitize($_GET['token']);
    $message = handlePasswordReset();
    echo renderHeader();
    echo renderResetPasswordFormWithToken($token, $message);
    echo renderFooter();
} else {
    // Sinon, afficher le formulaire de demande de réinitialisation
    $message = handleResetRequest();
    echo renderHeader();
    echo renderResetPasswordForm($message);
    echo renderFooter();
}
?>