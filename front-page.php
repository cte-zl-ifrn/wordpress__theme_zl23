<?php get_header(); ?>

<!-- Slides -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
<?php foreach((array) getSlideMenu() as $menu_item): ?>
      <div class="carousel-item active" data-bs-interval="10000" style="background-image: url('<?php echo get_the_post_thumbnail_url($menu_item->ID, 'full'); ?>')">
        <a href="<?php echo $menu_item->post_excerpt ?>">
          <p><?php echo $menu_item->post_title ?></p>
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
<section id = "noticias">
<h2>Notícias</h2>
<div class = "noticias-grid">
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
      <div class="card">
        <a href="<?php the_permalink(); ?>">
          <?php if (has_post_thumbnail() && $count < 2) { 
            $thumbnail_alt = esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true));?>
            <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" class="card-img-top" alt="<?php echo $thumbnail_alt; ?>">
          <?php }
          $count++;
          ?>
          <div class="card-body">
            <span><?php the_time('d \d\e F \d\e Y'); ?></span>
            <p class="card-text"><?php the_title(); ?></p>
          </div>
        </a>
      </div>  
  <?php }; 
  wp_reset_postdata();
  ?>
</div>
</section>

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