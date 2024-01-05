<?php get_header(); ?>

<div id="search">
    
    <ul>
        <li>
            <a href="<?php echo site_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
        </li>
        <?php echo getBreadcrumbs(); ?>
    </ul>


    <p class="search-feedback">Pesquisa por '<span><?php echo esc_html(get_search_query()); ?></span>' </p>

    <?php if(have_posts()) {
    while(have_posts()) {
        the_post(); ?>
        <div class="card-item">
            <?php if(has_post_thumbnail()): ?>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
            <?php else: echo "";
            endif;
            ?>
            <div class="card-text">
                <h1 class="third-title"><?php the_title(); ?></h1>
                <p class="text"><?php echo wp_trim_words(get_the_content(), 25); ?></p>
                <a href="<?php the_permalink(); ?>">Leia mais >></a>
            </div>
        </div>
    <?php }
    the_posts_pagination();
    } else {
        echo "<h1>Nenhum resultado encontrado</h1>";
    };
    ?>
</div>

<?php get_footer(); ?>