<?php
// Ajoutez cette ligne au début du fichier pour activer le rapport d'erreurs strict
declare(strict_types=1);

// Définissez une classe d'exception personnalisée
class UserModelException extends Exception
{
    // Vous pouvez ajouter des méthodes ou propriétés spécifiques ici si nécessaire
}

function readUsersAll($bdd)
{
    try {
        //2) Prepare la requête SELECT
        $req = $bdd->prepare('SELECT id_Users, mail, last_name_users, first_name_users, nickname FROM users');

        //3) Executer la requête
        $req->execute();

        //4) Récupérer la réponse de la BDD
        return $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $error) {
        // Lancez une exception personnalisée avec plus de détails
        throw new UserModelException("Erreur lors de la lecture de tous les utilisateurs : " . $error->getMessage(), $error->getCode(), $error);
    }
}

function readUserByLogin($bdd, $login)
{
    try {
        //7) Vérifier que le login est dispo
        $req = $bdd->prepare('SELECT Id_Users, mail, last_name_users, first_name_users, nickname, day_of_born, psswrd, account_creation_date, locations, postal_code, country, city, phone, gender FROM users WHERE mail = ?');

        $req->bindParam(1, $login, PDO::PARAM_STR);

        $req->execute();

        $result = $req->fetchAll(PDO::FETCH_ASSOC);

        if (empty($result)) {
            throw new UserModelException("Aucun utilisateur trouvé avec ce login.");
        }

        return $result;

    } catch (PDOException $error) {
        throw new UserModelException("Erreur lors de la lecture de l'utilisateur par login : " . $error->getMessage(), $error->getCode(), $error);
    }
}

function addUser($bdd, $nom, $prenom, $login, $password, $pseudo, $date_naissance, $adresse, $code_postal, $pays, $ville, $telephone, $genre)
{
    try {
        $bdd->beginTransaction();

        // Insérer dans la table Accounts
        $reqAccount = $bdd->prepare('INSERT INTO Accounts() VALUES ()');
        $reqAccount->execute();

        // Récupérer l'ID du compte nouvellement créé
        $accountId = $bdd->lastInsertId();

        // Insérer dans la table users
        $reqUser = $bdd->prepare('INSERT INTO users (Id_Accounts, last_name_users, first_name_users, mail, psswrd, nickname, day_of_born, locations, postal_code, country, city, phone, gender, account_creation_date) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,NOW())');

        $reqUser->execute([$accountId, $nom, $prenom, $login, $password, $pseudo, $date_naissance, $adresse, $code_postal, $pays, $ville, $telephone, $genre]);

        $bdd->commit();

        return "Inscription réussie. Vous pouvez maintenant vous connecter.";
    } catch (PDOException $error) {
        $bdd->rollBack();
        $errorCode = is_int($error->getCode()) ? $error->getCode() : 0;
        throw new UserModelException("Erreur lors de l'ajout de l'utilisateur : " . $error->getMessage(), $errorCode, $error);
    }
}

function deleteUser($bdd, $userId)
{
    try {
        $bdd->beginTransaction();

        // Récupérez d'abord l'Id_Accounts associé à cet utilisateur
        $reqGetAccountId = $bdd->prepare('SELECT Id_Accounts FROM users WHERE Id_Users = ?');
        $reqGetAccountId->execute([$userId]);
        $accountId = $reqGetAccountId->fetchColumn();

        if (!$accountId) {
            throw new UserModelException("Aucun compte associé trouvé pour cet utilisateur.");
        }

        // Supprimez d'abord les enregistrements liés dans la table users
        $reqUser = $bdd->prepare('DELETE FROM users WHERE Id_Users = ?');
        $reqUser->execute([$userId]);

        // Ensuite, supprimez l'enregistrement correspondant dans la table Accounts
        $reqAccount = $bdd->prepare('DELETE FROM Accounts WHERE Id_Accounts = ?');
        $reqAccount->execute([$accountId]);

        $bdd->commit();
        return true;
    } catch (PDOException $error) {
        $bdd->rollBack();
        throw new UserModelException("Erreur lors de la suppression de l'utilisateur : " . $error->getMessage(), $error->getCode(), $error);
    }
}
?>