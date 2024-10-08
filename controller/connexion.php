<?php
session_start();

// Modifiez ces lignes pour utiliser des chemins relatifs corrects
include '../utils/env.php';
include '../utils/functions.php';
include '../model/modelUsers.php';
include '../view/viewConnexion.php';
include '../view/viewHeader.php';
include '../view/viewFooter.php';

//LE CONTROLLER DE LA PAGE DE CONNEXION
function seConnecter()
{
    //1) Vérifier la reception du formulaire
    if (!isset($_POST['submit_connexion'])) {
        return;
    }

    //2) Vérifie les champs vides
    if (!isset($_POST['login']) || empty($_POST['login']) || !isset($_POST['password']) || empty($_POST['password'])) {
        return 'Veuillez remplir tous les champs';
    }

    //3) Vérifier le format de données (pas applicable ici car on reçoit des String sans format particulier)
    //4) Nettoyage des données
    $login = sanitize($_POST['login']);
    $password = sanitize($_POST['password']);
    print_r("nooooooo");

    //5) Se connecter à la BDD
    $bdd = connectBDD($_ENV['hostBDD'], $_ENV['dbnameBDD'], $_ENV['dbLogin'], $_ENV['dbPassword']);
    if ($bdd == true) {
        print_r('Connexion à la BDD réussie');
    } else {
        print_r('Connexion à la BDD échouée');
    }

    //6) Je récupère les infos de l'utilisateur grâce au Login
    try {
        $data = readUserByLogin($bdd, $login);
        // Utilisez $data comme avant
    } catch (UserModelException $e) {
        // Gérez l'erreur, par exemple en l'affichant à l'utilisateur ou en la journalisant
        $errorMessage = "Une erreur s'est produite : " . $e->getMessage();
        // Affichez $errorMessage à l'utilisateur ou journalisez-le
    }

    //7) Je vérifie la réponse de la BDD (si l'utilisateur existe ou pas)
    if (empty($data)) {
        return 'Login et/ou Password';
    }

    //8) Je vérifie la correspondance du mot de passe avec le hash enregistré en BDD
    if (!password_verify($password, $data[0]['psswrd'])) {
        return 'Login et/ou Password incorrect';
    }

    //Id_Users, mail, last_name_users, first_name_users,nickname, day_of_born, psswrd,city, phone, gender

    //9) S'enregistre les infos en $_SESSION
    $mail = $data[0]['mail'];
    $_SESSION['login'] = $mail;
    $nom = $data[0]['last_name_users'];
    $_SESSION['nom'] = $nom;
    $prenom = $data[0]['first_name_users'];
    $_SESSION['prenom'] = $prenom;
    $id = $data[0]['Id_Users'];
    $_SESSION['id'] = $id;
    $pseudo = $data[0]['nickname'];
    $_SESSION['pseudo'] = $pseudo;
    $date_de_naissance = $data[0]['day_of_born'];
    $_SESSION['date_de_naissance'] = $date_de_naissance;
    $adresse = $data[0]['locations'];
    $_SESSION['adresse'] = $adresse;
    $postal_code = $data[0]['postal_code'];
    $_SESSION['postal_code'] = $postal_code;
    $pays = $data[0]['country'];
    $_SESSION['pays'] = $pays;
    $ville = $data[0]['city'];
    $_SESSION['ville'] = $ville;
    $telephone = $data[0]['phone'];
    $_SESSION['telephone'] = $telephone;
    $genre = $data[0]['gender'];
    $_SESSION['genre'] = $genre;
    $date_de_creation_du_compte = $data[0]['account_creation_date'];
    $_SESSION['date_de_creation_du_compte'] = $date_de_creation_du_compte;
    $statut_du_compte = $data[0]['account_status'];
    $_SESSION['statut_du_compte'] = $statut_du_compte;
    $_SESSION['isConnected'] = true;

    // Redirection vers profil.php
    header("Location: ../controller/profil.php");
    return;

}

function sInscrire()
{
    if (!isset($_POST['submit_register'])) {
        return;
    }

    $requiredFields = ['login', 'pseudo', 'telephone', 'password', 'password_confirm'];
    foreach ($requiredFields as $field) {
        if (!isset($_POST[$field]) || empty($_POST[$field])) {
            return "Veuillez remplir tous les champs obligatoires";
        }
    }

    if ($_POST['password'] !== $_POST['password_confirm']) {
        return "Les mots de passe ne correspondent pas";
    }

    $login = sanitize($_POST['login']);
    $nom = sanitize($_POST['nom'] ?? '');
    $prenom = sanitize($_POST['prenom'] ?? '');
    $pseudo = sanitize($_POST['pseudo']);
    $date_naissance = sanitize($_POST['date_de_naissance'] ?? '');
    $adresse = sanitize($_POST['adresse'] ?? '');
    $code_postal = sanitize($_POST['code_postal'] ?? '');
    $pays = sanitize($_POST['pays'] ?? '');
    $ville = sanitize($_POST['ville'] ?? '');
    $telephone = sanitize($_POST['telephone']);
    $genre = sanitize($_POST['genre'] ?? '');
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $bdd = connectBDD($_ENV['hostBDD'], $_ENV['dbnameBDD'], $_ENV['dbLogin'], $_ENV['dbPassword']);

    try {
        $result = addUser($bdd, $nom, $prenom, $login, $password, $pseudo, $date_naissance, $adresse, $code_postal, $pays, $ville, $telephone, $genre);
        if ($result) {
            return "Inscription réussie. Vous pouvez maintenant vous connecter.";
        } else {
            return "Erreur lors de l'inscription. Veuillez réessayer.";
        }
    } catch (UserModelException $e) {
        return "Une erreur s'est produite : " . $e->getMessage();
    }
}

$message = '';
if (isset($_POST['submit_connexion'])) {
    $message = seConnecter();
} elseif (isset($_POST['submit_register'])) {
    $message = sInscrire();
}

echo renderHeader();
echo renderConnexion($message);
echo renderFooter();
?>