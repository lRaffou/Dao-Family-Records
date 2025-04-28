<?php
function renderAcceuil()
{
    ob_start();
    ?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/css/style.css" />
        <title>racreations.fr</title>
    </head>

    <body>
        <main>
            <a href="https://daofamilyrecords.fr/">
                <img src="img/1logo_simple_dfr_blanc.png" alt="Logo DAO Family Records">
            </a>
            <h1>Drop into</h1>
            <a href="https://daofamilyrecords.fr/" class="link-button">Dao Family Records</a>
        </main>
    </body>

    <?php
    return ob_get_clean();
}
?>