<?php
function renderAcceuil()
{
    ob_start();
    ?>
    <main>
        <section class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/EFj2f6M1IYA?si=fkwpugxswrhElOw6"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>
        <section class="containerWrapper">
            <section class="wrapper">
                <i id="left" class="fa-solid fa-angle-left"></i>
                <article class="carousel">
                    <img src="/img/DJ_BABE_Event.png" alt="img event" draggable="false" />
                    <img src="/img/Album_Red_Rave.png" alt="img event" draggable="false" />
                    <img src="/img/Imagination_Fernando.png" alt="img event" draggable="false" />
                    <img src="/img/DJ_BABE_Event_2.png" alt="img event" draggable="false" />
                    <img src="/img/FeelGood_DJBabe.png" alt="img event" draggable="false" />
                    <img src="/img/Burning_DaoBrothers.png" alt="img event" draggable="false" />
                </article>
                <i id="right" class="fa-solid fa-angle-right"></i>
            </section>
        </section>
        <section class="wrapperMin">
            <article class="containerMin">
                <input class="radio" type="radio" name="slide" id="cardWrapper1" />
                <label for="cardWrapper1" class="cardWrapper">
                    <div class="titleCardWrapper">
                        <div class="iconCardWrapper">1</div>
                        <div class="descriptionCardWrapper">
                            <!-- <h2>Red Marshal</h2>
                                    <p>Album "Red Rave"</p> -->
                        </div>
                    </div>
                </label>
                <input class="radio" type="radio" name="slide" id="cardWrapper2" />
                <label for="cardWrapper2" class="cardWrapper">
                    <div class="titleCardWrapper">
                        <div class="iconCardWrapper">1</div>
                        <div class="descriptionCardWrapper">
                            <!-- <h2>Fernando Gomez</h2>
                                    <p>Single "Imagination"</p> -->
                        </div>
                    </div>
                </label>
                <input class="radio" type="radio" name="slide" id="cardWrapper3" checked />
                <label for="cardWrapper3" class="cardWrapper">
                    <div class="titleCardWrapper">
                        <div class="iconCardWrapper">1</div>
                        <div class="descriptionCardWrapper">
                            <!-- <h2>Fernando Gomez</h2>
                                    <p>Single "Imagination"</p> -->
                        </div>
                    </div>
                </label>
                <input class="radio" type="radio" name="slide" id="cardWrapper4" />
                <label for="cardWrapper4" class="cardWrapper">
                    <div class="titleCardWrapper">
                        <div class="iconCardWrapper">1</div>
                        <div class="descriptionCardWrapper">
                            <!-- <h2>Red Marshal</h2>
                                    <p>Album "Red Rave"</p> -->
                        </div>
                    </div>
                </label>
                <input class="radio" type="radio" name="slide" id="cardWrapper5" />
                <label for="cardWrapper5" class="cardWrapper">
                    <div class="titleCardWrapper">
                        <div class="iconCardWrapper">1</div>
                        <div class="descriptionCardWrapper">
                            <!-- <h2>Red Marshal</h2>
                                    <p>Album "Red Rave"</p> -->
                        </div>
                    </div>
                </label>
            </article>
        </section>
        <section class="containerReleases">
            <h2>- Releases -</h2>
            <article class="articleReleases">
                <a href="https://open.spotify.com/intl-fr/album/3qFHJrWeitkjPo1OWmRBHa?si=gbOsN0foRNasBZlm8qax1w"
                    target="_blank">
                    <img src="img/Album_Red_Rave.png" alt="Red Rave de Red Marshal" /></a>
                <a href="https://open.spotify.com/intl-fr/album/0IvMcp0vjpPsioa70rJ0rB?si=Kwt4rhCDTJGwqkLX8lmUCw"
                    target="_blank">
                    <img src="img/Into_the_club_DaoBrothers.png" alt="Burning de DaoBrothers" /></a>
                <a href="https://open.spotify.com/intl-fr/track/0Jc3ODaHZsJBSvSwQx4Qwm?si=ca7ef0f1885c43dd" target="_blank">
                    <img src="img/FeelGood_DJBabe.png" alt="Feel Good de DJBabe" /></a>
                <a href="https://open.spotify.com/intl-fr/track/0GvGAPCMYmjJVEOZquBC7U?si=ea5a8b94b1d04c8d" target="_blank">
                    <img src="img/Japanese_temple.png" alt="Darkness de Fernando" /></a>
                <a href="https://open.spotify.com/intl-fr/track/0GvGAPCMYmjJVEOZquBC7U?si=ea5a8b94b1d04c8d" target="_blank">
                    <img src="img/Imagination_Fernando.png" alt="Darkness de Fernando" /></a>
                <a href="https://open.spotify.com/intl-fr/track/0GvGAPCMYmjJVEOZquBC7U?si=ea5a8b94b1d04c8d" target="_blank">
                    <img src="img/Darkness_fernando.png" alt="Darkness de Fernando" /></a>
            </article>
        </section>
        <section class="containerEvents">
            <h2>- Events -</h2>
            <article class="articleEvents">
                <a href="https://www.instagram.com/p/C8sNSlaIXOZ/" target="_blank" rel="noopener noreferrer"><img
                        src="img/Festival_septembre.png" alt="The Red Night - Open Air" /></a>
                <h3>🔴 The Red Night - Festival 🔴</h3>
                <h4>🎶 Bass House 🎶 Techno 🎶 Hard Techno 🎶</h4>
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
        </section>
        <section class="containerEventsMin">
            <article class="eventPrincipalMin">
                <h2>- Events -</h2>
                <article class="articleEventsMin">
                    <article class="eventDescriptionMin">
                        <h3>🔴 The Red Night - Festival 🔴</h3>
                        <h4>🎶 Bass House 🎶 Techno 🎶 Hard Techno 🎶</h4>
                        <p>
                            Préparez-vous pour une expérience inoubliable le
                            <strong>samedi 8 septembre 2024</strong> ! Nous
                            lançons notre tout premier
                            <strong>festival sur deux scènes</strong>, niché
                            dans un cadre exceptionnel : un corps de ferme
                            réaménagé pour l'occasion.
                        </p>
                        <p>
                            Rejoignez-nous pour une fête où règnent les good
                            vibes et la découverte de nouveaux talents.
                            Cette cinquième édition promet d'être
                            spectaculaire. Nous avons réuni une sélection
                            d'artistes confirmés et émergents, chacun
                            apportant sa touche unique et sa créativité
                            débordante. Parmi eux, des producteurs de
                            musique talentueux, dont la notoriété ne cesse
                            de croître, seront présents pour vous offrir un
                            voyage au cœur de leurs univers sonores.
                        </p>
                        <p>
                            Venez profiter de la musique, de la nourriture,
                            et de l'amour dans une ambiance chill 🌞
                        </p>
                    </article>
                    <a href="https://www.facebook.com/events/973739001112068?acontext=%7B%22event_action_history%22%3A[]%7D"
                        target="_blank" rel="noopener noreferrer"><img src="img/Festival_septembre.png"
                            alt="The Red Night - Festival" /></a>
                </article>
            </article>
            <article class="pastEvents">
                <a href="https://www.instagram.com/p/C9C2SH5oDPu/" target="_blank">
                    <img src="img/The_Red_Night_-_Open_Air.jpg" alt="The Red Night - Open Air" /></a>
                <a href="https://www.instagram.com/p/Cy2z4sLo6Lh/" target="_blank">
                    <img src="img/Sans titre-gsd1.png" alt="Red Rave de Red Marshal" /></a>
                <a href="https://www.instagram.com/p/CyX3byPoxY5/" target="_blank">
                    <img src="img/Sans titre-2.png" alt="Red Rave de Red Marshal" /></a>
            </article>
        </section>
        <section>
            <article class="spotify">
                <iframe style="border-radius: 12px"
                    src="https://open.spotify.com/embed/album/3qFHJrWeitkjPo1OWmRBHa?utm_source=generator&theme=0"
                    width="90%" height="500" frameborder="0"
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
            </article>
        </section>
        <section class="containerArtist">
            <h2>- Artists -</h2>
            <article class="articleArtist">
                <a href="https://open.spotify.com/intl-fr/artist/3zpewQ11GYG2ev9Ngdsvi9?si=d-lW4IqXQP2DNiHcLs6Pwg"
                    target="_blank" rel="noopener noreferrer"><img src="img/Thao-détouré.png" alt="Dao Brothers" /></a>
                <h3>Red Marshal</h3>
            </article>
            <article class="articleArtist">
                <a href="https://open.spotify.com/intl-fr/artist/7o0ucOb1npEkb3qhGFIY3U?si=9p_fAhplRuqondoW4gJi8w"
                    target="_blank" rel="noopener noreferrer"><img src="img/Sophie-détouré.png" alt="Dao Brothers" /></a>
                <h3>DJ Babe</h3>
            </article>
            <article class="articleArtist">
                <a href="https://open.spotify.com/intl-fr/artist/51UZk9XPK15uZgwQEWE3MK?si=_VcDxr3cQLSqwRS_iVA0BQ"
                    target="_blank" rel="noopener noreferrer"><img src="img/Fernando-détouré.png" alt="Dao Brothers" /></a>
                <h3>Fernando Gomez</h3>
            </article>
            <article class="articleArtist">
                <a href="https://open.spotify.com/intl-fr/artist/4FP9ILC4hO3YvOb2R0NIzj?si=C2vKsVNPQKu7Ep7c_k-eFw"
                    target="_blank" rel="noopener noreferrer"><img src="img/Brothers-détouré.png" alt="Dao Brothers" /></a>
                <h3>Dao Brothers</h3>
            </article>
        </section>
        <section class="containerArtistMin">
            <h2>- Artists -</h2>
            <article class="artistsMin">
                <article class="artist12">
                    <article class="articleArtistMin">
                        <a href="https://open.spotify.com/intl-fr/artist/3zpewQ11GYG2ev9Ngdsvi9?si=d-lW4IqXQP2DNiHcLs6Pwg"
                            target="_blank" rel="noopener noreferrer"><img src="img/Thao-détouré.png"
                                alt="Dao Brothers" /></a>
                        <h3>Red Marshal</h3>
                    </article>
                    <article class="articleArtistMin">
                        <a href="https://open.spotify.com/intl-fr/artist/7o0ucOb1npEkb3qhGFIY3U?si=9p_fAhplRuqondoW4gJi8w"
                            target="_blank" rel="noopener noreferrer"><img src="img/Sophie-détouré.png"
                                alt="Dao Brothers" /></a>
                        <h3>DJ Babe</h3>
                    </article>
                </article>
                <article class="artist34">
                    <article class="articleArtistMin">
                        <a href="https://open.spotify.com/intl-fr/artist/51UZk9XPK15uZgwQEWE3MK?si=_VcDxr3cQLSqwRS_iVA0BQ"
                            target="_blank" rel="noopener noreferrer"><img src="img/Fernando-détouré.png"
                                alt="Dao Brothers" /></a>
                        <h3>Fernando Gomez</h3>
                    </article>
                    <article class="articleArtistMin">
                        <a href="https://open.spotify.com/intl-fr/artist/4FP9ILC4hO3YvOb2R0NIzj?si=C2vKsVNPQKu7Ep7c_k-eFw"
                            target="_blank" rel="noopener noreferrer"><img src="img/Brothers-détouré.png"
                                alt="Dao Brothers" /></a>
                        <h3>Dao Brothers</h3>
                    </article>
                </article>
            </article>
        </section>
    </main>
    <?php
    return ob_get_clean();
}
?>