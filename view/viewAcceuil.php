<?php
function renderAcceuil()
{
    ob_start();
    ?>
    <main class="mainHome">
        <!-- Hero Section -->
        <section class="heroSection">
            <div class="heroContent">
                <h1>Dao Family Records</h1>
                <p>Découvrez l'énergie unique de la musique électronique à travers nos artistes et événements.</p>
                <div class="heroButtons">
                    <a href="/controller/evenement.php" class="btnPrimary">Voir les événements</a>
                    <a href="/controller/artiste.php" class="btnSecondary">Découvrir les artistes</a>
                </div>
            </div>
            <div class="heroVideo">
                <iframe src="https://www.youtube.com/embed/EFj2f6M1IYA?si=fkwpugxswrhElOw6" title="Dao Family Records"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </section>

        <!-- Featured Releases Section -->
        <section class="featuredReleases">
            <h2>Dernières Sorties</h2>
            <div class="releasesGrid">
                <div class="releaseCard">
                    <div class="releaseImage">
                        <img src="/img/Album_Red_Rave.png" alt="Red Rave - Red Marshal">
                        <div class="releaseOverlay">
                            <a href="https://open.spotify.com/intl-fr/album/3qFHJrWeitkjPo1OWmRBHa" class="btnListen">
                                <i class="fab fa-spotify"></i>
                                Écouter sur Spotify
                            </a>
                        </div>
                    </div>
                    <div class="releaseInfo">
                        <h3>Red Rave</h3>
                        <p>Red Marshal</p>
                    </div>
                </div>
                <div class="releaseCard">
                    <div class="releaseImage">
                        <img src="/img/Into_the_club_DaoBrothers.png" alt="Into the Club - Dao Brothers">
                        <div class="releaseOverlay">
                            <a href="https://open.spotify.com/intl-fr/album/0IvMcp0vjpPsioa70rJ0rB" class="btnListen">
                                <i class="fab fa-spotify"></i>
                                Écouter sur Spotify
                            </a>
                        </div>
                    </div>
                    <div class="releaseInfo">
                        <h3>Into the Club</h3>
                        <p>Dao Brothers</p>
                    </div>
                </div>
                <div class="releaseCard">
                    <div class="releaseImage">
                        <img src="/img/FeelGood_DJBabe.png" alt="Feel Good - DJ Babe">
                        <div class="releaseOverlay">
                            <a href="https://open.spotify.com/intl-fr/track/0Jc3ODaHZsJBSvSwQx4Qwm" class="btnListen">
                                <i class="fab fa-spotify"></i>
                                Écouter sur Spotify
                            </a>
                        </div>
                    </div>
                    <div class="releaseInfo">
                        <h3>Feel Good</h3>
                        <p>DJ Babe</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Next Event Section -->
        <section class="nextEvent">
            <h2>Prochain Événement</h2>
            <div class="eventContent">
                <div class="eventCard">
                    <div class="eventImage">
                        <img src="/img/Festival_septembre.png" alt="The Red Night - Festival">
                        <div class="eventDate">
                            <span class="day">08</span>
                            <span class="month">SEPT</span>
                        </div>
                    </div>
                    <div class="eventInfo">
                        <h3>The Red Night - Festival</h3>
                        <div class="eventTags">
                            <span class="tag">Bass House</span>
                            <span class="tag">Techno</span>
                            <span class="tag">Hard Techno</span>
                        </div>
                        <p>Une nuit explosive de musique électronique avec les meilleurs artistes de la scène.</p>
                        <a href="https://www.facebook.com/events/973739001112068" class="btnEvent">Réserver maintenant</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Artists Section -->
        <section class="featuredArtists">
            <h2>Nos Artistes</h2>
            <div class="artistsGrid">
                <div class="artistCard">
                    <div class="artistImage">
                        <img src="/img/Thao-détouré.png" alt="Red Marshal">
                    </div>
                    <div class="artistOverlay">
                        <div class="artistInfo">
                            <h3>Red Marshal</h3>
                            <p>Hard Techno</p>
                        </div>
                    </div>
                </div>
                <div class="artistCard">
                    <div class="artistImage">
                        <img src="/img/Sophie-détouré.png" alt="DJ Babe">
                    </div>
                    <div class="artistOverlay">
                        <div class="artistInfo">
                            <h3>DJ Babe</h3>
                            <p>Tech House</p>
                        </div>
                    </div>
                </div>
                <div class="artistCard">
                    <div class="artistImage">
                        <img src="/img/Fernando-détouré.png" alt="Fernando Gomez">
                    </div>
                    <div class="artistOverlay">
                        <div class="artistInfo">
                            <h3>Fernando Gomez</h3>
                            <p>Techno</p>
                        </div>
                    </div>
                </div>
                <div class="artistCard">
                    <div class="artistImage">
                        <img src="/img/Brothers-détouré.png" alt="Dao Brothers">
                    </div>
                    <div class="artistOverlay">
                        <div class="artistInfo">
                            <h3>Dao Brothers</h3>
                            <p>Bass House</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Spotify Section -->
        <section class="spotifySection">
            <h2>Écoutez nos artistes</h2>
            <div class="spotifyPlayer">
                <iframe src="https://open.spotify.com/embed/album/3qFHJrWeitkjPo1OWmRBHa?utm_source=generator&theme=0"
                    width="100%" height="380" frameBorder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
            </div>
        </section>
    </main>
    <?php
    return ob_get_clean();
}
?>