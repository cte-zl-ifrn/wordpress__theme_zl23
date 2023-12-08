<?php get_header(); 

while(have_posts()) {
    the_post(); ?>

    <ul>
        <li>
            <a href="<?php echo site_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
        </li>
        <?php echo getBreadcrumbs(); ?>
    </ul>

    <section id="page" class="pageTemplate">
        <h1 class="first-title"><?php the_title(); ?></h1>
        <p class="text"><?php the_content(); ?></p>
    </section>

<?php } ?>

<?php get_footer(); ?>