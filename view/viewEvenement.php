<?php
function renderEvenement()
{
    ob_start();
    ?>
    <main class="mainEvent">
        <section class="eventHero">
            <h1>Nos Événements</h1>
            <p>Découvrez nos prochains événements et revivez nos moments forts</p>
        </section>

        <section class="featuredEvent">
            <h2>Prochain Événement</h2>
            <div class="eventContainer">
                <article class="eventCard featured">
                    <div class="eventImage">
                        <img src="/img/Festival_septembre.png" alt="The Red Night - Festival">
                        <div class="eventDate">
                            <span class="day">08</span>
                            <span class="month">SEPT</span>
                        </div>
                    </div>
                    <div class="eventInfo">
                        <h3>🔴 The Red Night - Festival 🔴</h3>
                        <div class="eventTags">
                            <span class="tag">🎶 Bass House</span>
                            <span class="tag">🎶 Techno</span>
                            <span class="tag">🎶 Hard Techno</span>
                        </div>
                        <p class="eventDescription">
                            Préparez-vous pour une expérience inoubliable ! Nous lançons notre tout premier festival sur
                            deux scènes, niché dans un cadre exceptionnel : un corps de ferme réaménagé pour l'occasion.
                        </p>
                        <p class="eventDetails">
                            Rejoignez-nous pour une fête où règnent les good vibes et la découverte de nouveaux talents.
                            Cette cinquième édition promet d'être spectaculaire avec une sélection d'artistes confirmés et
                            émergents.
                        </p>
                        <div class="eventActions">
                            <a href="https://www.instagram.com/p/C8sNSlaIXOZ/" target="_blank" class="btnEvent">Plus
                                d'infos</a>
                            <a href="https://www.facebook.com/events/973739001112068" target="_blank"
                                class="btnEvent btnPrimary">Réserver</a>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="pastEvents">
            <h2>Événements Passés</h2>
            <div class="eventGrid">
                <article class="eventCard">
                    <div class="eventImage">
                        <img src="/img/The_Red_Night_-_Open_Air.jpg" alt="The Red Night - Open Air">
                    </div>
                    <div class="eventInfo">
                        <h3>The Red Night - Open Air</h3>
                        <p>Une soirée mémorable sous les étoiles</p>
                        <a href="https://www.instagram.com/p/C9C2SH5oDPu/" target="_blank" class="btnEvent">Voir les
                            photos</a>
                    </div>
                </article>

                <article class="eventCard">
                    <div class="eventImage">
                        <img src="/img/Sans titre-gsd1.png" alt="Red Rave de Red Marshal">
                    </div>
                    <div class="eventInfo">
                        <h3>Red Rave by Red Marshal</h3>
                        <p>Une nuit de techno intense</p>
                        <a href="https://www.instagram.com/p/Cy2z4sLo6Lh/" target="_blank" class="btnEvent">Voir les
                            photos</a>
                    </div>
                </article>

                <article class="eventCard">
                    <div class="eventImage">
                        <img src="/img/Sans titre-2.png" alt="Red Rave de Red Marshal">
                    </div>
                    <div class="eventInfo">
                        <h3>Red Rave Special Edition</h3>
                        <p>Une édition spéciale inoubliable</p>
                        <a href="https://www.instagram.com/p/CyX3byPoxY5/" target="_blank" class="btnEvent">Voir les
                            photos</a>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <?php
    return ob_get_clean();
}
?>