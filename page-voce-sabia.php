<?php get_header();?>

<h1><?php the_title() ?></h1>

<?php

$web_stories = getWebStories(9, 'voce-sabia');
if ($web_stories->have_posts()) :
    while ($web_stories->have_posts()) : $web_stories->the_post(); ?>
    <div class="story">
      <a href="<?php the_permalink() ?>">
        <?php echo the_title() ?>
        <?php the_post_thumbnail() ?>
      </a>
    </div>
    <?php endwhile;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

    <div class="pagination">
    <?php echo paginate_links(array(
        'total' => $web_stories->max_num_pages,
        'current' => max(1, $paged),
    )); ?>
    </div>

<?php else :
    echo 'Nenhuma Web Story encontrado.';
endif;

wp_reset_postdata();

get_footer();
?>