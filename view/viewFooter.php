<?php
function renderFooter()
{
    ob_start();
    ?>
    <footer class="mainFooter">
        <div class="footerContent">
            <div class="footerSection">
                <img class="footerLogo" src="/img/1logo_dfr_blanc_complet.png" alt="Dao Family Records" />
                <p class="footerDescription">Dao Family Records est un label de musique électronique basé à Toulouse,
                    spécialisé dans la techno et la house.</p>
            </div>

            <div class="footerSection">
                <h3>Navigation</h3>
                <ul class="footerLinks">
                    <li><a href="/index.php">Accueil</a></li>
                    <li><a href="/controller/evenement.php">Événements</a></li>
                    <li><a href="/controller/artiste.php">Artistes</a></li>
                    <li><a href="/controller/video.php">Vidéos</a></li>
                    <li><a href="/controller/album.php">Albums</a></li>
                </ul>
            </div>

            <div class="footerSection">
                <h3>Suivez-nous</h3>
                <div class="socialLinks">
                    <a href="https://www.youtube.com/@DaoFamilyRecords" target="_blank" rel="noopener noreferrer"
                        class="socialLink">
                        <i class="fab fa-youtube"></i>
                        <span>YouTube</span>
                    </a>
                    <a href="https://open.spotify.com/intl-fr/artist/3zpewQ11GYG2ev9Ngdsvi9?si=e9_8b3i3RhqHm2_LtLTInw"
                        target="_blank" rel="noopener noreferrer" class="socialLink">
                        <i class="fab fa-spotify"></i>
                        <span>Spotify</span>
                    </a>
                    <a href="https://www.instagram.com/dao_family_records/" target="_blank" rel="noopener noreferrer"
                        class="socialLink">
                        <i class="fab fa-instagram"></i>
                        <span>Instagram</span>
                    </a>
                    <a href="https://www.facebook.com/redmarshalofficial" target="_blank" rel="noopener noreferrer"
                        class="socialLink">
                        <i class="fab fa-facebook"></i>
                        <span>Facebook</span>
                    </a>
                    <a href="https://www.linkedin.com/company/dao-family-record/" target="_blank" rel="noopener noreferrer"
                        class="socialLink">
                        <i class="fab fa-linkedin"></i>
                        <span>LinkedIn</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="footerBottom">
            <p class="copyright">
                Copyright &copy; <span id="year"></span> Dao Family Records. Tous droits réservés.
                <a href="/mentions-legales" class="legalLink">Mentions légales</a>
            </p>
        </div>
    </footer>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
    <?php
    return ob_get_clean();
}
?>