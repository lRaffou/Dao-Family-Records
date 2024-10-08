<?php
function renderVideo()
{
    ob_start();
    ?>
    <main>
        <article class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/EFj2f6M1IYA?si=fkwpugxswrhElOw6"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </article>
        <section class="videoList">
            <section class="singleVideo">
                <article class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/TvbCJdJN5R4?si=KDQlWEnhGl_8rl64"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </article>
                <h2>Red Marshal - Follow Me</h2>
            </section>
            <section class="singleVideo">
                <article class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/MkWbtJhjOVU?si=XNr82_3ErLJ__W5w"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </article>
                <h2>Red Marshal - The Darkest Night</h2>
            </section>
            <section class="singleVideo">
                <article class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/H4wUMWz1wyg?si=kY64E44ahc7D8BBL"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </article>
                <h2>Red Marshal - Warning</h2>
            </section>
            <section class="singleVideo">
                <article class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/iOs7LpGDoew?si=0iDww-ypbyGPIcO7"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </article>
                <h2>Red Marshal - Tokyo Techno</h2>
            </section>
            <section class="singleVideo">
                <article class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/GdM9Vg8rWgs?si=cvseNcqbp5bzzJNV"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </article>
                <h2>Red Marshal - Backstreet</h2>
            </section>
            <section class="singleVideo">
                <article class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/vD7fkc8rpRw?si=T4eWQcw0E5R2WYkw"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </article>
                <h2>Red Marshal - Happiness</h2>
            </section>
            <section class="singleVideo">
                <article class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/9M9b8pPfQxw?si=xvm1xou2LcmihWsd"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </article>
                <h2>Red marshal - Seven Dark</h2>
            </section>
            <section class="singleVideo">
                <article class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/9_wwx_cSg8w?si=QQ9aPYOyCaT5WCJz"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </article>
                <h2>Red Marshal - Earth</h2>
            </section>
            <section class="singleVideo">
                <article class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/kBEVORZtE7g?si=WS0ffwWYoqVmMmId"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </article>
                <h2>Red Marshal - Lost</h2>
            </section>
        </section>
    </main>
    <?php
    return ob_get_clean();
}
?>