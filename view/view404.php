<?php
function render404()
{
    ob_start();
    ?>

    <main>
        <h1>404 NOT FOUND</h1>
        <p>Tu t'es perdu dans l'espace et le temps.</p>
        <a href="/index.php">Retour à l'accueil</a>

    </main>

    <?php
    return ob_get_clean();
}
?>