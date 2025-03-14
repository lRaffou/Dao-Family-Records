<?php



function renderProfil($nom, $prenom, $login, $pseudo, $date_de_naissance, $adresse, $postal_code, $pays, $ville, $telephone, $genre, $date_de_creation_du_compte, $message)
{
    ob_start();
    ?>
    <main>
        <section class="profilContainer">
            <h1>Profil</h1>
            <p><?php
            echo 'Bienvenue ' . $nom . ' ' . $prenom;
            ?></p>
            <p>Nom : <?php echo $nom ?></p>
            <p>Prénom : <?php echo $prenom ?></p>
            <p>Login : <?php echo $login ?></p>
            <p>Pseudo : <?php echo $pseudo ?></p>
            <p>Date de naissance : <?php echo $date_de_naissance ?></p>
            <p>Adresse : <?php echo $adresse ?></p>
            <p>Code postal : <?php echo $postal_code ?></p>
            <p>Ville : <?php echo $ville ?></p>
            <p>Pays : <?php echo $pays ?></p>
            <p>Téléphone :
                <?php if (isset($telephone) && !empty($telephone)): ?>
                    <a href="tel:<?php echo htmlspecialchars($telephone); ?>" style="color: #0066cc; text-decoration: none;">
                        <?php echo htmlspecialchars($telephone); ?>
                    </a>
                <?php else: ?>
                    Non renseigné
                <?php endif; ?>
            </p>
            <p>Genre : <?php echo $genre ?></p>
            <p>Date de création du compte : <?php echo $date_de_creation_du_compte ?></p>
            <a class="formButton" href="/controller/deconnexion.php">Se Déconnecter</a>
            <p><?php echo $message ?></p>
            <form action="" method="post"
                onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer votre compte ? Cette action est irréversible.');">
                <input type="hidden" name="action" value="delete_account">
                <button type="submit" class="formButton">Supprimer mon compte</button>
            </form>
        </section>
    </main>
    <?php
    return ob_get_clean();
}

?>