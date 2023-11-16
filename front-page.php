<?php get_header(); ?>

<!-- Slides -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
<?php foreach((array) getSlideMenu() as $menu_item): ?>
      <div class="carousel-item active bg-black" data-bs-interval="10000">
        <a href="<?php echo $menu_item->post_excerpt ?>">
          <p><?php echo $menu_item->post_title ?></p>
          <img src="<?php echo get_the_post_thumbnail_url($menu_item->ID, 'full'); ?>" class="d-block w-100" alt="...">
        </a>
      </div>
<?php endforeach ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!-- Atalhos -->
<div>
<?php foreach ((array) getshotcutMenu() as $menu_item ): ?>  
    <a href='<?php echo $menu_item->url ?>'>
      <div>
        <?php echo formatShotcutMenu($menu_item->post_title) ?>
      </div>
    </a>
<?php endforeach ?>
</div>

<!-- Notícias -->
<h2>Notícias</h2>
<?php
$args = array(
  'category_name' => 'Notícias',
  'posts_per_page' => 10,
);
$noticias = new WP_Query($args);

$count = 0;
while($noticias->have_posts()) {
  $noticias->the_post(); 
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
<?php }; 
wp_reset_postdata();
?>

<h2>Web Stories</h2>
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