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
                        <img src="/img/albums/album1.jpg" alt="Album Red Rave">
                    </div>
                    <div class="albumInfo">
                        <h2>Red Rave</h2>
                        <p>Artiste: Dao Brothers</p>
                        <p>Date de sortie: 01/01/2023</p>
                        <a href="#" class="btnEcouter">Écouter</a>
                    </div>
                </article>

                <article class="albumCard">
                    <div class="albumImage">
                        <img src="/img/albums/album2.jpg" alt="Album Imagination">
                    </div>
                    <div class="albumInfo">
                        <h2>Imagination</h2>
                        <p>Artiste: Fernando</p>
                        <p>Date de sortie: 15/03/2023</p>
                        <a href="#" class="btnEcouter">Écouter</a>
                    </div>
                </article>

                <article class="albumCard">
                    <div class="albumImage">
                        <img src="/img/albums/album3.jpg" alt="Album DJ BABE Event">
                    </div>
                    <div class="albumInfo">
                        <h2>DJ BABE Event</h2>
                        <p>Artiste: DJ BABE</p>
                        <p>Date de sortie: 30/06/2023</p>
                        <a href="#" class="btnEcouter">Écouter</a>
                    </div>
                </article>

                <article class="albumCard">
                    <div class="albumImage">
                        <img src="/img/albums/album4.jpg" alt="Album Feel Good">
                    </div>
                    <div class="albumInfo">
                        <h2>Feel Good</h2>
                        <p>Artiste: DJ BABE</p>
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