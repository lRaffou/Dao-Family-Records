<?php
function renderFooter()
{
    ob_start();
    ?>
    <footer>
        <section class="containerFooter">
            <img class="logoFooter" src="/img/1logo_dfr_blanc_complet.png" alt="logo DFR" />
            <article class="followFooter">
                <a href="https://www.youtube.com/@DaoFamilyRecords" target="_blank" rel="noopener noreferrer"><img
                        src="/img/icons8-youtube-logo-250.png" alt="logo youtube" /></a>
                <a href="https://open.spotify.com/intl-fr/artist/3zpewQ11GYG2ev9Ngdsvi9?si=e9_8b3i3RhqHm2_LtLTInw"
                    target="_blank" rel="noopener noreferrer"><img src="/img/icons8-spotify-250.png"
                        alt="logo spotify" /></a>
                <a href="https://www.instagram.com/dao_family_records/" target="_blank" rel="noopener noreferrer"><img
                        src="/img/icons8-logo-instagram-250.png" alt="logo instagram" /></a>
                <a href="https://www.facebook.com/redmarshalofficial" target="_blank" rel="noopener noreferrer"><img
                        src="/img/icons8-facebook-250.png" alt="logo facebook" /></a>
                <a href="https://www.linkedin.com/company/dao-family-record/" target="_blank" rel="noopener noreferrer"><img
                        src="/img/icons8-linkedin-250.png" alt="logo youtube" /></a>
            </article>
            <h6>
                Copyright &copy; - <span id="year"></span> Tous droits
                réservés Mentions légales
            </h6>
        </section>
    </footer>
    <?php
    return ob_get_clean();
}
?>