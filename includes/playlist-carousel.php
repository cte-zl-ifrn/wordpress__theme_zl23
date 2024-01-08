<?php $attributes = get_query_var('attributes');?>

<section class="splide slidePlaylist" aria-label="Splide Basic HTML Example">
  <div class="splide__track">
		<ul class="splide__list">
      <?php $count =   $attributes['quantidade'];
      for ($i = 1; $i <= $count; $i++ ) {  ?>
        <li class="splide__slide">
          <iframe src="https://youtube.com/embed?<?php echo $attributes['url'] . '&index=' . $i?>" frameborder="0"></iframe>
        </li>
      <?php }; ?>
        <li class="splide__slide last-slide">
          <a href="https://www.youtube.com/playlist?<?php echo $attributes['url'] ?>" target="_blank">
            <div class="coluna-1">
              <i class="fa-brands fa-youtube"></i>
              <p>Acessar playlist completa</p>
            </div>
            <div class="coluna-2">
              <span>+200</span>
              <img src="<?php echo get_template_directory_uri() . '/assets/svg/playlist.svg' ?>" alt="">
            </div>
          </a>
        </li>
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