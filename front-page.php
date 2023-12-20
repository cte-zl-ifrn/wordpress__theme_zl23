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
  foreach (getshotcutMenu() as $menu_item):  ?>
    <button type="button" data-bs-target="#atalhosCarousel" data-bs-slide-to="<?php echo $count ?>" class="<?php echo $firstslide ? "active" : "" ?>" aria-current="true" aria-label="Slide 1"></button>
  <?php $count ++;
  $firstslide = false; 
  endforeach ?>
  </div>

  <div class="carousel-inner">
<?php $firstslide = true;
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
  endforeach ?>
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
<section class="section-web-stories">
  <div class="header-section">
    <h1>Web Stories</h1>
    <a href="<?php echo site_url('/web-stories') ?>">Ver todas ></a>
  </div>

  <div id="webstory-carousel-container">
    <div class="webstory-carousel" id="webstory-carousel">

      <?php  
        $web_stories = getWebStories(4);
        if ($web_stories->have_posts()) :
          while ($web_stories->have_posts()) : $web_stories->the_post(); ?>
            <div class="webstory-item">
              <?php the_post_thumbnail() ?>
              <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            </div>
          <?php endwhile;
          wp_reset_postdata();
        else :
          echo 'Nenhuma story encontrada.';
        endif; 
      ?>
    </div>
    <button id="webstory-prev" onclick="webstoryPrevSlide()">❮</button>
    <button id="webstory-next" onclick="webstoryNextSlide()">❯</button>
  </div>

</section>

<div id="webstory-carousel-container">
  <div id="webStoriesTittle">
    <h1>Web Stories</h1>
    <span>VER TODAS</span>
  </div>
  <div class="webstory-carousel" id="webstory-carousel">

    <div class="webstory-item">
        <img src="https://ead.ifrn.edu.br/portal/wp-content/uploads/2023/12/cropped-huma-h-yardim-5LvC-QX0OOc-unsplash-scaled-1.jpg" alt="">
        <a href="">
          O que é o Decreto 9.057/2017 e por que ele é importante para a educação a distância?
        </a>
    </div>

    <div class="webstory-item">
      <img src="https://ead.ifrn.edu.br/portal/wp-content/uploads/2023/11/cropped-image-31.png" alt="">
      <a href="">
        O que é o Decreto 9.057/2017 e por que ele é importante para a educação a distância?
      </a>
    </div>

    <div class="webstory-item">
      <img src="https://ead.ifrn.edu.br/portal/wp-content/uploads/2023/11/cropped-image-28.png" alt="">
      <a href="">
        O quse é o Decreto 9.057/2017 e por que ele é importante para a educação a distância?
      </a>
    </div>

    <div class="webstory-item">
      <img src="https://ead.ifrn.edu.br/portal/wp-content/uploads/2023/10/cropped-seyi-ariyo-UG5NpfjQevY-unsplash-scaled-1.jpg" alt="">
      <a href="">
        O que é o Decreto 9.057/2017 e por que ele é importante para a educação a distância?
      </a>
    </div>

  </div>    
  <button id="webstory-prev" onclick="webstoryPrevSlide()">❮</button>
  <button id="webstory-next" onclick="webstoryNextSlide()">❯</button>
</div>

<script>
  let webstoryCurrentIndex = 0;
  let webstoryStartX;

  const webstoryTotalItems = document.querySelectorAll('.webstory-item').length;
  const webstoryCarousel = document.getElementById('webstory-carousel');

  function updateWebstoryCarousel() {
    const newPosition = -webstoryCurrentIndex * 70 + '%';
    webstoryCarousel.style.transform = 'translateX(' + newPosition + ')';
  }

  function webstoryNextSlide() {
    if (webstoryCurrentIndex < webstoryTotalItems - 1) {
      webstoryCurrentIndex++;
    } else {
      webstoryCurrentIndex = 0;
    }
    updateWebstoryCarousel();
  }

  function webstoryPrevSlide() {
    if (webstoryCurrentIndex > 0) {
      webstoryCurrentIndex--;
    } else {
      webstoryCurrentIndex = webstoryTotalItems - 1;
    }
    updateWebstoryCarousel();
  }

  webstoryCarousel.addEventListener('touchstart', webstoryTouchStart);
  webstoryCarousel.addEventListener('touchmove', webstoryTouchMove);

  function webstoryTouchStart(e) {
    webstoryStartX = e.touches[0].clientX;
  }

  function webstoryTouchMove(e) {
    const diffX = webstoryStartX - e.touches[0].clientX;
    if (diffX > 30) {
      webstoryNextSlide();
    } else if (diffX < -30) {
      webstoryPrevSlide();
    }
  }
</script>

<?php get_footer(); ?>