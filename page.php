<?php get_header(); 

while(have_posts()) {
    the_post(); ?>
    <section id="page">
        <h1 class="first-title"><?php the_title(); ?></h1>
        <p class="text"><?php the_content(); ?></p>
    </section>

<?php } ?>

<?php get_footer(); ?>