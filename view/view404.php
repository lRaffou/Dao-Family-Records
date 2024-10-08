<?php
function render404(){
    ob_start();
?>

<main>
    <h1>404 NOT FOUND</h1>
    <p>Tu t'es perdu dans l'espace et le temps.</p>
    <a href="/controller/acceuil.php">Retour à l'accueil</a>
    <a href="/controller/connexion.php">Retour à la page de connexion</a>
    <a href="/controller/profil.php">Retour à la page du profil</a>
    
</main>

<?php
    return ob_get_clean();
}
?>