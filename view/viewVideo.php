<?php
function renderVideo()
{
    ob_start();
    ?>
    <main class="mainVideo">
        <section class="videoHero">
            <h1>Nos Vidéos</h1>
            <p>Découvrez nos dernières créations musicales et performances live</p>
        </section>

        <section class="featuredVideo">
            <h2>Vidéo à la Une</h2>
            <div class="videoContainer">
                <article class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/EFj2f6M1IYA?si=fkwpugxswrhElOw6"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </article>
                <div class="videoInfo">
                    <h3>Red Marshal - Into The Club</h3>
                    <p>Une performance live capturée lors de notre dernier événement</p>
                </div>
            </div>
        </section>

        <section class="videoGallery">
            <h2>Notre Collection</h2>
            <div class="videoGrid">
                <article class="videoCard">
                    <div class="videoThumbnail">
                        <img src="https://img.youtube.com/vi/TvbCJdJN5R4/maxresdefault.jpg" alt="Red Marshal - Follow Me">
                        <div class="playButton">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="videoDetails">
                        <h3>Red Marshal - Follow Me</h3>
                        <p>Clip officiel</p>
                    </div>
                </article>

                <article class="videoCard">
                    <div class="videoThumbnail">
                        <img src="https://img.youtube.com/vi/MkWbtJhjOVU/maxresdefault.jpg"
                            alt="Red Marshal - The Darkest Night">
                        <div class="playButton">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="videoDetails">
                        <h3>Red Marshal - The Darkest Night</h3>
                        <p>Clip officiel</p>
                    </div>
                </article>

                <article class="videoCard">
                    <div class="videoThumbnail">
                        <img src="https://img.youtube.com/vi/H4wUMWz1wyg/maxresdefault.jpg" alt="Red Marshal - Warning">
                        <div class="playButton">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="videoDetails">
                        <h3>Red Marshal - Warning</h3>
                        <p>Clip officiel</p>
                    </div>
                </article>

                <article class="videoCard">
                    <div class="videoThumbnail">
                        <img src="https://img.youtube.com/vi/iOs7LpGDoew/maxresdefault.jpg"
                            alt="Red Marshal - Tokyo Techno">
                        <div class="playButton">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="videoDetails">
                        <h3>Red Marshal - Tokyo Techno</h3>
                        <p>Clip officiel</p>
                    </div>
                </article>

                <article class="videoCard">
                    <div class="videoThumbnail">
                        <img src="https://img.youtube.com/vi/GdM9Vg8rWgs/maxresdefault.jpg" alt="Red Marshal - Backstreet">
                        <div class="playButton">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="videoDetails">
                        <h3>Red Marshal - Backstreet</h3>
                        <p>Clip officiel</p>
                    </div>
                </article>

                <article class="videoCard">
                    <div class="videoThumbnail">
                        <img src="https://img.youtube.com/vi/vD7fkc8rpRw/maxresdefault.jpg" alt="Red Marshal - Happiness">
                        <div class="playButton">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="videoDetails">
                        <h3>Red Marshal - Happiness</h3>
                        <p>Clip officiel</p>
                    </div>
                </article>

                <article class="videoCard">
                    <div class="videoThumbnail">
                        <img src="https://img.youtube.com/vi/9M9b8pPfQxw/maxresdefault.jpg" alt="Red marshal - Seven Dark">
                        <div class="playButton">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="videoDetails">
                        <h3>Red marshal - Seven Dark</h3>
                        <p>Clip officiel</p>
                    </div>
                </article>

                <article class="videoCard">
                    <div class="videoThumbnail">
                        <img src="https://img.youtube.com/vi/9_wwx_cSg8w/maxresdefault.jpg" alt="Red Marshal - Earth">
                        <div class="playButton">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="videoDetails">
                        <h3>Red Marshal - Earth</h3>
                        <p>Clip officiel</p>
                    </div>
                </article>

                <article class="videoCard">
                    <div class="videoThumbnail">
                        <img src="https://img.youtube.com/vi/kBEVORZtE7g/maxresdefault.jpg" alt="Red Marshal - Lost">
                        <div class="playButton">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="videoDetails">
                        <h3>Red Marshal - Lost</h3>
                        <p>Clip officiel</p>
                    </div>
                </article>
            </div>
        </section>

        <div id="videoModal" class="modal">
            <div class="modalContent">
                <span class="closeModal">&times;</span>
                <div class="videoContainer">
                    <article class="video">
                        <iframe id="modalVideo" width="560" height="315" src="" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </article>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const videoCards = document.querySelectorAll('.videoCard');
            const modal = document.getElementById('videoModal');
            const modalVideo = document.getElementById('modalVideo');
            const closeModal = document.querySelector('.closeModal');

            // YouTube video IDs
            const videoIds = {
                'TvbCJdJN5R4': 'Red Marshal - Follow Me',
                'MkWbtJhjOVU': 'Red Marshal - The Darkest Night',
                'H4wUMWz1wyg': 'Red Marshal - Warning',
                'iOs7LpGDoew': 'Red Marshal - Tokyo Techno',
                'GdM9Vg8rWgs': 'Red Marshal - Backstreet',
                'vD7fkc8rpRw': 'Red Marshal - Happiness',
                '9M9b8pPfQxw': 'Red marshal - Seven Dark',
                '9_wwx_cSg8w': 'Red Marshal - Earth',
                'kBEVORZtE7g': 'Red Marshal - Lost'
            };

            // Add click event to each video card
            videoCards.forEach(card => {
                card.addEventListener('click', function () {
                    const imgSrc = this.querySelector('img').src;
                    const videoId = imgSrc.split('/')[4];

                    if (videoIds[videoId]) {
                        modalVideo.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
                        modal.style.display = 'block';
                    }
                });
            });

            // Close modal when clicking on the close button
            closeModal.addEventListener('click', function () {
                modal.style.display = 'none';
                modalVideo.src = '';
            });

            // Close modal when clicking outside the video
            window.addEventListener('click', function (event) {
                if (event.target === modal) {
                    modal.style.display = 'none';
                    modalVideo.src = '';
                }
            });
        });
    </script>
    <?php
    return ob_get_clean();
}
?>