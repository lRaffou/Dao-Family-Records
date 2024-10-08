<?php
function renderEvenement()
{
    ob_start();
    ?>
    <main>
        <section class="EventsPage">
            <article class="mainEventPage">
                <h1>🔴 The Red Night - Festival 🔴</h1>
                <a href="https://www.instagram.com/p/C8sNSlaIXOZ/" target="_blank" rel="noopener noreferrer"><img
                        src="/img/Festival_septembre.png" alt="The Red Night - Open Air" /></a>
                <h2>🎶 Bass House 🎶 Techno 🎶 Hard Techno 🎶</h2>
                <p>
                    Préparez-vous pour une expérience inoubliable le
                    <strong>samedi 8 septembre 2024</strong> ! Nous lançons
                    notre tout premier
                    <strong>festival sur deux scènes</strong>, niché dans un
                    cadre exceptionnel : un corps de ferme réaménagé pour
                    l'occasion.
                </p>
                <p>
                    Rejoignez-nous pour une fête où règnent les good vibes
                    et la découverte de nouveaux talents. Cette cinquième
                    édition promet d'être spectaculaire. Nous avons réuni
                    une sélection d'artistes confirmés et émergents, chacun
                    apportant sa touche unique et sa créativité débordante.
                    Parmi eux, des producteurs de musique talentueux, dont
                    la notoriété ne cesse de croître, seront présents pour
                    vous offrir un voyage au cœur de leurs univers sonores.
                </p>
                <p>
                    Venez profiter de la musique, de la nourriture, et de
                    l'amour dans une ambiance chill 🌞
                </p>
            </article>
            <article class="pastEventsPage">
                <h2>- Evènements passés -</h2>
                <a href="https://www.instagram.com/p/C9C2SH5oDPu/" target="_blank">
                    <img src="/img/The_Red_Night_-_Open_Air.jpg" alt="The Red Night - Open Air" /></a>
                <a href="https://www.instagram.com/p/Cy2z4sLo6Lh/" target="_blank">
                    <img src="/img/Sans titre-gsd1.png" alt="Red Rave de Red Marshal" /></a>
                <a href="https://www.instagram.com/p/CyX3byPoxY5/" target="_blank">
                    <img src="/img/Sans titre-2.png" alt="Red Rave de Red Marshal" /></a>
            </article>
        </section>
    </main>
    <?php
    return ob_get_clean();
}
?>