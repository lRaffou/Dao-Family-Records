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
        <script src="/js/script.js" defer></script>
        <script src="/js/scriptArtist.js" defer></script>
        <title>Dao Family Records</title>
    </head>

    <body>
        <header>
            <nav class="navMax1000">
                <section class="navTop">
                    <article class="connexionNavTop">
                        <!-- <a href="/index.php"><img class="connexionImg" src="/img/icons8-male-user-96.png"
                        alt="Connexion DFR" /></a>dgtersdg -->
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
                            <a href="/controller/evenement.php"><img src="/img/icons8-two-tickets-50.png"
                                    alt="df" />Events</a>
                        </li>
                        <li>
                            <a href="/controller/artiste.php"><img src="/img/icons8-artiste-48.png" alt="df" />Artistes</a>
                        </li>
                        <li>
                            <a href="/controller/video.php"><img src="/img/icons8-lecture-de-youtube-48.png"
                                    alt="df" />Vidéos</a>
                        </li>
                        <li>
                            <a href="/controller/album.php">
                                <img src="/img/icons8-album-48.png" alt="df" />
                                Albums
                            </a>
                        </li>
                    </ul>
                </section>
            </nav>
            <nav class="navMin1000">
                <div class="navbarContainer">
                    <div class="navbarLogo">
                        <a href="/index.php">
                            <img class="logoNavMin" src="/img/1logo_simple_dfr_blanc.png" alt="Logo DFR" />
                            <span>Dao Family Records</span>
                        </a>
                    </div>
                    <div class="navbarMenu">
                        <ul>
                            <li><a href="/index.php" class="navLink"><i class="fas fa-home"></i> Accueil</a></li>
                            <li><a href="/controller/evenement.php" class="navLink"><i class="fas fa-calendar-alt"></i>
                                    Événements</a></li>
                            <li><a href="/controller/artiste.php" class="navLink"><i class="fas fa-music"></i> Artistes</a>
                            </li>
                            <li><a href="/controller/video.php" class="navLink"><i class="fas fa-video"></i> Vidéos</a></li>
                            <li><a href="/controller/album.php" class="navLink"><i class="fas fa-compact-disc"></i>
                                    Albums</a></li>
                        </ul>
                    </div>
                    <div class="navbarSocial">
                        <a href="#" class="socialLink"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="socialLink"><i class="fab fa-spotify"></i></a>
                        <a href="#" class="socialLink"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </nav>
        </header>
        <?php
        return ob_get_clean();
}
?>