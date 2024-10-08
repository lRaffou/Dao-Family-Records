<?php


function renderHeader()
{
    ob_start();
    ?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="./js/script.js" defer></script>
        <script src="/js/scriptArtist.js" defer></script>
        <script src="/js/scriptProfil.js" defer></script>
        <title>Document</title>
    </head>

    <body>
        <header>
            <nav class="navMax1000">
                <section class="navTop">
                    <article class="connexionNavTop">
                        <!-- <a href="/index.php"><img class="connexionImg" src="/img/icons8-male-user-96.png"
                        alt="Connexion DFR" /></a> -->
                    </article>
                    <article class="logoNav">
                        <a href="/index.php"><img class="logoImg" src="/img/1logo_simple_dfr_blanc.png"
                                alt="Logo DFR" /></a>
                    </article>
                    <article class="nameDfrNav">
                        <p>Dao Family Records</p>
                    </article>
                </section>
                <section class="menuNav">
                    <ul>
                        <li>
                            <a href="/index.php"><img src="/img/icons8-accueil-48.png" alt="df" />Accueil</a>
                        </li>
                        <li>
                            <a href="/controller/evenement.php"><img src="/img/icons8-two-tickets-50.png" alt="df" />Events</a>
                        </li>
                        <li>
                            <a href="/controller/artiste.php"><img src="/img/icons8-artiste-48.png" alt="df" />Artistes</a>
                        </li>
                        <li>
                            <a href="/controller/video.php"><img src="/img/icons8-lecture-de-youtube-48.png" alt="df" />Vidéos</a>
                        </li>
                        <li>
                            <a href="<?php echo isset($_SESSION['isConnected']) && $_SESSION['isConnected'] ? '/controller/profil.php' : '/controller/connexion.php'; ?>">
                                <img src="/img/icons8-male-user-48.png" alt="df" />
                                <?php echo isset($_SESSION['isConnected']) && $_SESSION['isConnected'] ? 'Profil' : 'Connexion'; ?>
                            </a>
                        </li>
                    </ul>
                </section>
            </nav>
            <nav class="navMin1000">
                <div class="menuNavMin">
                    <ul>
                        <li><a href="/index.php">Accueil</a></li>
                        <li><a href="/controller/evenement.php">Evènements</a></li>
                        <li><a href="/controller/artiste.php">Artistes</a></li>
                        <li><a href="/controller/video.php">Vidéos</a></li>
                    </ul>
                </div>
                <div class="divLogoNavMin">
                    <a href="/index.php"><img class="logoNavMin" src="/img/1logo_simple_dfr_blanc.png" alt="Logo DFR" /></a>
                </div>
                <div class="nameNavMin">
                    <div class="nameDfrNavMin">
                        <p>Dao Family Records</p>
                    </div>
                    <div class="iconCoMin">
                        <a href="<?php echo isset($_SESSION['isConnected']) && $_SESSION['isConnected'] ? '/controller/profil.php' : '/controller/connexion.php'; ?>">
                            <img src="/img/icons8-male-user-48.png" alt="icon de connexion" />
                        </a>
                    </div>
                </div>
            </nav>
        </header>
        <?php
        return ob_get_clean();
}
?>