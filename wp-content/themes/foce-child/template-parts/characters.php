<?php
$args = array(
    'post_type' => 'characters',
    'posts_per_page' => -1,
    'meta_key'  => '_main_char_field',
    'orderby'   => 'meta_value_num',
);

$characters_query = new WP_Query($args);
?>

<article id="my-characters" class="my-characters fade-in title-reveal-scope">
    <h3 class="title-reveal-container"><span class="word">Les</span> <span class="word">personnages</span></h3>
    <div class="swiper">
        <div class="swiper-wrapper">
            <?php while ($characters_query->have_posts()) : $characters_query->the_post(); ?>
                <div class="swiper-slide">
                    <figure class="characters-slide">
                        <?php the_post_thumbnail('full'); ?>
                        <figcaption class="characters-title"><?php the_title(); ?></figcaption>
                    </figure>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</article>