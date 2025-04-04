<?php

function renderAlbum()
{
    ob_start();
    ?>
    <main class="mainAlbum">
        <section class="sectionAlbum">
            <h1>Nos Albums</h1>
            <div class="containerAlbum">
                <article class="albumCard">
                    <div class="albumImage">
                        <img src="/img/albums/album1.jpg" alt="Album 1">
                    </div>
                    <div class="albumInfo">
                        <h2>Titre de l'Album 1</h2>
                        <p>Artiste: Nom de l'artiste</p>
                        <p>Date de sortie: 01/01/2023</p>
                        <a href="#" class="btnEcouter">Écouter</a>
                    </div>
                </article>

                <article class="albumCard">
                    <div class="albumImage">
                        <img src="/img/albums/album2.jpg" alt="Album 2">
                    </div>
                    <div class="albumInfo">
                        <h2>Titre de l'Album 2</h2>
                        <p>Artiste: Nom de l'artiste</p>
                        <p>Date de sortie: 15/03/2023</p>
                        <a href="#" class="btnEcouter">Écouter</a>
                    </div>
                </article>

                <article class="albumCard">
                    <div class="albumImage">
                        <img src="/img/albums/album3.jpg" alt="Album 3">
                    </div>
                    <div class="albumInfo">
                        <h2>Titre de l'Album 3</h2>
                        <p>Artiste: Nom de l'artiste</p>
                        <p>Date de sortie: 30/06/2023</p>
                        <a href="#" class="btnEcouter">Écouter</a>
                    </div>
                </article>

                <article class="albumCard">
                    <div class="albumImage">
                        <img src="/img/albums/album4.jpg" alt="Album 4">
                    </div>
                    <div class="albumInfo">
                        <h2>Titre de l'Album 4</h2>
                        <p>Artiste: Nom de l'artiste</p>
                        <p>Date de sortie: 10/09/2023</p>
                        <a href="#" class="btnEcouter">Écouter</a>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Dao Family Records. Tous droits réservés.</p>
    </footer>
    <?php
    return ob_get_clean();
}
?>