<?php get_header(); ?>

<!-- Slides -->
<div id="slideCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
<?php $firstslide = true;
  foreach((array) getSlideMenu() as $menu_item): ?>
    <div class="carousel-item <?php echo $firstslide ? "active" : "" ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($menu_item->ID, 'full'); ?>')">
      <a href="<?php echo $menu_item->post_excerpt ?>">
        <p><?php echo $menu_item->post_title ?></p>
      </a>
    </div>
<?php $firstslide = false;
  endforeach ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#slideCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#slideCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Atalhos -->
<div id="atalhosCarousel" class="carousel carousel-dark slide" data-bs-ride="true">
  <div class="carousel-indicators">
  <?php $count = 0;
  $firstslide = true;
  if(getshotcutMenu()):
    foreach (getshotcutMenu() as $menu_item):  ?>
      <button type="button" data-bs-target="#atalhosCarousel" data-bs-slide-to="<?php echo $count ?>" class="<?php echo $firstslide ? "active" : "" ?>" aria-current="true" aria-label="Slide 1"></button>
    <?php $count ++;
    $firstslide = false; 
    endforeach;
  endif ?>
  </div>

  <div class="carousel-inner">
<?php $firstslide = true;
  if(getshotcutMenu()):
    foreach((array) getshotcutMenu() as $menu_item): ?>
      <div class="carousel-item <?php echo $firstslide ? "active" : "" ?>">
        <a href="<?php echo $menu_item->url ?>">
          <div class="carousel-caption">
            <div class="cardCaption">
              <?php echo formatShotcutMenu($menu_item->post_title) ?>
            </div>
          </div>
        </a>
      </div>
      <?php $firstslide = false;
    endforeach;
  endif ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#atalhosCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#atalhosCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- Notícias -->
<section id = "noticias">
<div class="header-section">
  <h1>Notícias</h1>
  <a href="<?php echo site_url('/categoria/noticias') ?>">Ver todas ></a>
</div>
<div class = "noticias-grid">
  <?php
  $args = array(
    'category_name' => 'Notícias',
    'posts_per_page' => 6,
  );
  $noticias = new WP_Query($args);

  $count = 0;
  while($noticias->have_posts()) {
    $noticias->the_post(); 
    ?>
      <div class="card">
        <a href="<?php the_permalink(); ?>">
          <?php if (has_post_thumbnail() && $count < 3) { 
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


<!-- Web Stories -->
<section class="splide section-web-stories" aria-label="Splide Basic HTML Example">
<div class="header-section">
    <h1>Web Stories</h1>
    <a href="<?php echo site_url('/web-stories') ?>">Ver todas ></a>
  </div>
  <div class="splide__track">
		<ul class="splide__list">
    <?php  
      $web_stories = getWebStories(4);
      if ($web_stories->have_posts()) :
        while ($web_stories->have_posts()) : $web_stories->the_post(); ?>
          <li class="splide__slide" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'">
            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
          </li>
        <?php endwhile;
      else :
        echo 'Nenhuma story encontrada.';
      endif; 
      wp_reset_postdata();
      ?> 
		</ul>
  </div>
  <div class="splide__arrows">
    <button class="splide__arrow splide__arrow--prev">
      <i class="fa-solid fa-chevron-left"></i>
		</button>
		<button class="splide__arrow splide__arrow--next">
      <i class="fa-solid fa-chevron-right"></i>
		</button>
  </div>
</section>

<?php get_footer(); ?>