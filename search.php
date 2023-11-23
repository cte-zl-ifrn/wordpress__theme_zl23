<?php get_header(); ?>

<p>Pesquisa por '<span><?php echo esc_html(get_search_query()); ?></span>' </p>
<?php while(have_posts()) {
    the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <p class="text"><?php echo wp_trim_words(get_the_content(), 25); ?></p>
    <a href="<?php the_permalink(); ?>">Leia mais >></a>
    <hr>
<?php } 
the_posts_pagination();
?>

<?php get_footer(); ?>