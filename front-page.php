<?php get_header(); ?>

<?php showSlideMenu(); ?>

<!-- Notícias -->
<?php
$count = 0;
while(have_posts()) {
  the_post(); 
  if(has_term('noticias', 'category')) {
  ?>
    <div class="post-item">
      <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail() && $count < 2) { ?>
          <div>
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>
        <?php }
        $count++;
        ?>
        <p><?php the_time('d \d\e F \d\e Y'); ?></p>
        <h2><?php the_title(); ?></h2>
      </a>
    </div>  
    <hr>
<?php }} ?>

<h2>Destaques</h2>
<?php
showFeaturedMenu();
?>
<?php get_footer(); ?>