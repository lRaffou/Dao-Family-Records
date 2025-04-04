<?php
function renderArtiste()
{
    ob_start();
    ?>
    <main class="mainArtist">
        <section class="artistHero">
            <h1>Nos Artistes</h1>
            <p>Découvrez les talents qui font vibrer Dao Family Records</p>
        </section>

        <section class="artistGrid">
            <article class="artistCard" data-artist="red-marshal">
                <div class="artistImage">
                    <img src="/img/Red_Marshal_1.jpg" alt="Red Marshal" />
                    <div class="artistOverlay">
                        <div class="artistInfo">
                            <h2>Red Marshal</h2>
                            <p>DJ - Producteur</p>
                            <span class="artistGenre">Hard Techno</span>
                        </div>
                    </div>
                </div>
            </article>

            <article class="artistCard" data-artist="dj-babe">
                <div class="artistImage">
                    <img src="/img/Sophie-détouré.png" alt="Dj Babe" />
                    <div class="artistOverlay">
                        <div class="artistInfo">
                            <h2>Dj Babe</h2>
                            <p>DJ - Producteur</p>
                            <span class="artistGenre">Tech House</span>
                        </div>
                    </div>
                </div>
            </article>

            <article class="artistCard" data-artist="fernando">
                <div class="artistImage">
                    <img src="/img/Fernando-détouré.png" alt="Fernando Gomez" />
                    <div class="artistOverlay">
                        <div class="artistInfo">
                            <h2>Fernando Gomez</h2>
                            <p>DJ - Producteur</p>
                            <span class="artistGenre">Techno</span>
                        </div>
                    </div>
                </div>
            </article>

            <article class="artistCard" data-artist="dao-brothers">
                <div class="artistImage">
                    <img src="/img/Brothers-détouré.png" alt="Dao Brothers" />
                    <div class="artistOverlay">
                        <div class="artistInfo">
                            <h2>Dao Brothers</h2>
                            <p>DJ - Producteur</p>
                            <span class="artistGenre">Bass House</span>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <!-- Modal pour afficher les détails de l'artiste -->
        <div id="artistModal" class="artistModal">
            <div class="modalContent">
                <span class="closeModal">&times;</span>

                <div id="red-marshal" class="artistDetails">
                    <div class="artistHeader">
                        <div class="artistProfile">
                            <img src="/img/Red_Marshal_1.jpg" alt="Red Marshal" />
                            <div class="artistTitle">
                                <h2>Red Marshal</h2>
                                <p>DJ - Producteur</p>
                                <span class="artistGenre">Hard Techno</span>
                            </div>
                        </div>
                    </div>

                    <div class="artistBio">
                        <h3>Biographie</h3>
                        <p>
                            Thao Dao est français d'origine vietnamienne. Ses parents sont arrivés en France avant sa
                            naissance,
                            quittant leur pays pour offrir à leurs enfants une vie meilleure. Pour honorer le choix de ses
                            parents,
                            Thao vit sa vie à 100 km/heure. Très vite, il décide de se consacrer à sa véritable passion,
                            celle qui
                            l'a toujours animé et rendu heureux : la musique.
                        </p>
                        <p>
                            Comme beaucoup de gens de sa génération, Thao est tombé amoureux de la musique électronique avec
                            Daft
                            Punk. Dès lors, il n'a eu de cesse de parfaire sa culture musicale avec The Prodigy, Justice,
                            GESAFFELSTEIN, Laurent Garnier, Jeff Mills, Paul Kalkbrenner, Vitalic Official, REZZ. Il a une
                            véritable passion pour la musique. C'est donc tout naturellement qu'il a commencé à composer en
                            2010.
                        </p>
                        <p>
                            Pour parfaire ses sets, il s'est formé pendant deux ans à la production musicale avec Hugo
                            Lemercier du
                            groupe Sociopark. Son style s'affirme, ses sets se précisent et le projet prend forme : Red
                            Marshal est
                            né. Red Marshal produit une techno sombre et puissante, rehaussée par l'esthétique de ses clips
                            (réalisés par son frère Yo Production). La cohérence de son univers, ses productions hypnotiques
                            et son
                            aisance en live font de lui la nouvelle figure techno toulousaine.
                        </p>
                    </div>

                    <div class="artistMusic">
                        <h3>Écouter</h3>
                        <iframe style="border-radius:12px"
                            src="https://open.spotify.com/embed/artist/3zpewQ11GYG2ev9Ngdsvi9?utm_source=generator"
                            width="100%" height="152" frameBorder="0"
                            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                            loading="lazy"></iframe>
                    </div>

                    <div class="artistGallery">
                        <h3>Galerie</h3>
                        <div class="galleryGrid">
                            <div class="galleryItem">
                                <img src="/img/Red_Marshal_5.jpg" alt="Red Marshal" />
                            </div>
                            <div class="galleryItem">
                                <img src="/img/Red_Marshal_2.jpg" alt="Red Marshal" />
                            </div>
                            <div class="galleryItem">
                                <img src="/img/Red_Marshal_7.jpg" alt="Red Marshal" />
                            </div>
                            <div class="galleryItem">
                                <img src="/img/Red_Marshal_9.jpg" alt="Red Marshal" />
                            </div>
                        </div>
                    </div>
                </div>

                <div id="dj-babe" class="artistDetails">
                    <div class="artistHeader">
                        <div class="artistProfile">
                            <img src="/img/Sophie-détouré.png" alt="Dj Babe" />
                            <div class="artistTitle">
                                <h2>Dj Babe</h2>
                                <p>DJ - Producteur</p>
                                <span class="artistGenre">Tech House</span>
                            </div>
                        </div>
                    </div>

                    <div class="artistBio">
                        <h3>Biographie</h3>
                        <p>
                            Sophie est une artiste française d'origine vietnamienne, dont le parcours musical a été initié
                            par l'influence de ses frères, eux-mêmes actifs dans les scènes bass house (Dao Brothers) et
                            hard techno
                            (Red Marshal). C'est dans cet environnement familial et musical qu'elle a forgé ses premières
                            inspirations et aspirations artistiques.
                        </p>
                        <p>
                            Forte de ses connaissances et des multiples influences qui l'entourent, Sophie a développé au
                            fil des années un
                            univers musical qui lui est propre. Forte de son expérience et de sa créativité, elle s'est
                            lancée
                            dans la création d'un album ambitieux, dont la sortie est prévue en 2024.
                        </p>
                        <p>
                            Cet album, composé de 10 titres soigneusement élaborés, reflète parfaitement son style unique et
                            son évolution en tant
                            qu'artiste. Puissance et groove sont au cœur de cet opus, où chaque titre offre une expérience
                            sonore
                            captivante et immersive. De la fusion de la bass house énergique et des sons hard techno à ses
                            propres expérimentations musicales, Sophie propose un voyage auditif dynamique et enivrant dans
                            son
                            univers musical.
                        </p>
                    </div>

                    <div class="artistMusic">
                        <h3>Écouter</h3>
                        <iframe style="border-radius: 12px"
                            src="https://open.spotify.com/embed/artist/7o0ucOb1npEkb3qhGFIY3U?utm_source=generator"
                            width="100%" height="152" frameborder="0"
                            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                            loading="lazy"></iframe>
                    </div>

                    <div class="artistGallery">
                        <h3>Galerie</h3>
                        <div class="galleryGrid">
                            <div class="galleryItem">
                                <img src="/img/Sophie-détouré.png" alt="Dj Babe" />
                            </div>
                            <div class="galleryItem">
                                <img src="/img/Japanese_temple.png" alt="Dj Babe" />
                            </div>
                            <div class="galleryItem">
                                <img src="/img/DJ_BABE_Event_2.png" alt="Dj Babe" />
                            </div>
                            <div class="galleryItem">
                                <img src="/img/Sophie-détouré.png" alt="Dj Babe" />
                            </div>
                        </div>
                    </div>
                </div>

                <div id="fernando" class="artistDetails">
                    <div class="artistHeader">
                        <div class="artistProfile">
                            <img src="/img/Fernando-détouré.png" alt="Fernando Gomez" />
                            <div class="artistTitle">
                                <h2>Fernando Gomez</h2>
                                <p>DJ - Producteur</p>
                                <span class="artistGenre">Techno</span>
                            </div>
                        </div>
                    </div>

                    <div class="artistBio">
                        <h3>Biographie</h3>
                        <p>
                            Fernando d'origine espagnol est passionné de musique et de show lumière (Jean-Michel Jarre)
                            depuis son
                            plus jeune âge, il est un fervent amateur de piano et de guitare. À l'adolescence, il décide de
                            se
                            concentrer sur ses styles musicaux de prédilection : le métal et le hard métal.
                        </p>
                        <p>
                            Durant ses études dans le Nord de la France, ses goûts musicaux évoluent petit à petit vers le
                            hardcore,
                            la hard techno et le hardstyle. À la fin de sa formation, il déménage à Toulouse pour travailler
                            et
                            découvrir le monde de la nuit. Il devient alors technicien son et lumière pour différentes
                            boîtes de
                            nuit de la ville rose.
                        </p>
                        <p>
                            Lorsque le Covid arrive, il y voit une opportunité pour se mettre au mix. Pour mixer de la
                            techno, il
                            s'inspire de Space 92, Jeff Mills, Carl Cox, Charlotte Witte ...
                        </p>
                    </div>

                    <div class="artistMusic">
                        <h3>Écouter</h3>
                        <iframe style="border-radius: 12px"
                            src="https://open.spotify.com/embed/artist/51UZk9XPK15uZgwQEWE3MK?utm_source=generator"
                            width="100%" height="152" frameborder="0"
                            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                            loading="lazy"></iframe>
                    </div>

                    <div class="artistGallery">
                        <h3>Galerie</h3>
                        <div class="galleryGrid">
                            <div class="galleryItem">
                                <img src="/img/Fernando-détouré.png" alt="Fernando Gomez" />
                            </div>
                            <div class="galleryItem">
                                <img src="/img/Darkness_fernando.png" alt="Fernando Gomez" />
                            </div>
                            <div class="galleryItem">
                                <img src="/img/Imagination_Fernando.png" alt="Fernando Gomez" />
                            </div>
                            <div class="galleryItem">
                                <img src="/img/Fernando-détouré.png" alt="Fernando Gomez" />
                            </div>
                        </div>
                    </div>
                </div>

                <div id="dao-brothers" class="artistDetails">
                    <div class="artistHeader">
                        <div class="artistProfile">
                            <img src="/img/Brothers-détouré.png" alt="Dao Brothers" />
                            <div class="artistTitle">
                                <h2>Dao Brothers</h2>
                                <p>DJ - Producteur</p>
                                <span class="artistGenre">Bass House</span>
                            </div>
                        </div>
                    </div>

                    <div class="artistBio">
                        <h3>Biographie</h3>
                        <p>
                            Les frères Dao sont des artistes qui produisent de la Bass House, une musique émergente propagée
                            par
                            les artistes français « Malaa " et " DJ SNAKE ». Composé des frères Thao et Yo (nés en 1991 et
                            1990),
                            le duo français d'origine vietnamienne se produit à Toulouse.
                        </p>
                        <p>
                            Dans leur enfance, ils se passionnent pour la musique et le cinéma. Ils se sont rapidement
                            formés et spécialisés dans ces deux domaines. Le style musical de Thao est très sombre avec des
                            basses puissantes, tandis que celui de Yo est groovy et rythmé. Ces différences forment un
                            mélange de
                            sons innovant.
                        </p>
                    </div>

                    <div class="artistMusic">
                        <h3>Écouter</h3>
                        <iframe style="border-radius: 12px"
                            src="https://open.spotify.com/embed/artist/4FP9ILC4hO3YvOb2R0NIzj?utm_source=generator"
                            width="100%" height="152" frameborder="0"
                            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                            loading="lazy"></iframe>
                    </div>

                    <div class="artistGallery">
                        <h3>Galerie</h3>
                        <div class="galleryGrid">
                            <div class="galleryItem">
                                <img src="/img/Photo_dao_yo.jpg" alt="Dao Brothers" />
                            </div>
                            <div class="galleryItem">
                                <img src="/img/Photo_dao_ yo_thao.jpg" alt="Dao Brothers" />
                            </div>
                            <div class="galleryItem">
                                <img src="/img/meilleur.jpg" alt="Dao Brothers" />
                            </div>
                            <div class="galleryItem">
                                <img src="/img/Photo_dao_thao.jpg" alt="Dao Brothers" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const artistCards = document.querySelectorAll('.artistCard');
                const modal = document.getElementById('artistModal');
                const closeModal = document.querySelector('.closeModal');
                const artistDetails = document.querySelectorAll('.artistDetails');

                // Cacher tous les détails d'artiste au chargement
                artistDetails.forEach(detail => {
                    detail.style.display = 'none';
                });

                // Ajouter un événement de clic à chaque carte d'artiste
                artistCards.forEach(card => {
                    card.addEventListener('click', function () {
                        const artistId = this.getAttribute('data-artist');

                        // Cacher tous les détails d'artiste
                        artistDetails.forEach(detail => {
                            detail.style.display = 'none';
                        });

                        // Afficher les détails de l'artiste sélectionné
                        document.getElementById(artistId).style.display = 'block';

                        // Afficher la modale
                        modal.style.display = 'block';
                    });
                });

                // Fermer la modale lorsque l'utilisateur clique sur le bouton de fermeture
                closeModal.addEventListener('click', function () {
                    modal.style.display = 'none';
                });

                // Fermer la modale lorsque l'utilisateur clique en dehors de la modale
                window.addEventListener('click', function (event) {
                    if (event.target === modal) {
                        modal.style.display = 'none';
                    }
                });
            });
        </script>
    </main>
    <?php
    return ob_get_clean();
}
?>