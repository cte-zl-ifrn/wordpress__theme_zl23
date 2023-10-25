<?php get_header(); ?>

<?php showSlideMenu(); ?>

<!-- Atalhos -->
<div>
<?php foreach ((array) getshotcutMenu()as $menu_item ): ?>  
    <a href='<?php echo $menu_item->url ?>'>
      <div>
        <?php echo formatShotcutMenu($menu_item->post_title) ?>
      </div>
    </a>
<?php endforeach ?>
</div>

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

<?php  
  $web_stories = getWebStories();
  if ($web_stories->have_posts()) :
    while ($web_stories->have_posts()) : $web_stories->the_post(); ?>
      <div>
        <a href="<?php the_permalink() ?>">
          <?php the_post_thumbnail() ?>
        </a>
      </div>
    <?php endwhile;
    wp_reset_postdata();
  else :
    echo 'Nenhuma história encontrada.';
  endif; 
?>

<div id="featuredMenu">
<h2>Destaques</h2>
<div class="content">
  <?php foreach ((array) getFeaturedMenu() as $menu_item ): ?>  
    <a href='<?php echo $menu_item->post_excerpt ?>' target='<?php echo $menu_item->target ?>'>
        <?php echo $menu_item->post_thumbnail ?>
        <h3>
          <?php echo $menu_item->post_title ?>
        </h3>
    </a>
    <?php endforeach ?>
  </div>
</div>

<?php get_footer(); ?>