<?php
get_header();
?>

    <main id="primary" class="site-main">
        <section class="hero">
            <div class="banner fade-in-down">
                <video class="banner-video" autoplay loop muted playsinline>
                    <source src="<?= get_stylesheet_directory_uri() . '/assets/video/koukaki-video.mp4'; ?>" type="video/mp4">
                </video>
            </div>
            <img class="main-logo fade-in-up" src="<?= get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="story" class="story">
            <article class="story__article fade-in title-reveal-scope">
                <h2 id="story-anchor" class="title-reveal-container"><span class="word">L'</span><span class="word">histoire</span></h2>
                <p><?= get_theme_mod('story'); ?></p>
            </article>
            <?php get_template_part('template-parts/characters'); ?>
            <article id="place" class="place fade-in title-reveal-scope">
                <div>
                    <h3 class="title-reveal-container"><span class="word">Le</span> <span class="word">Lieu</span></h3>
                    <p><?= get_theme_mod('place'); ?></p>
                </div>
                <div class="clouds">
                    <img class="big-cloud" src="<?= get_stylesheet_directory_uri() . '/assets/img/big_cloud.png'; ?>" alt="Big cloud">
                    <img class="little-cloud" src="<?= get_stylesheet_directory_uri() . '/assets/img/little_cloud.png'; ?>" alt="Big cloud">
                </div>
            </article>
        </section>
        <section id="studio" class="studio fade-in title-reveal-scope">
            <h2 class="title-reveal-container"><span class="word">Studio</span> <span class="word">Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
        <?php get_template_part('template-parts/oscars'); ?>
    </main><!-- #main -->

    
<?php
get_footer();
