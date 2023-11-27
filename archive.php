<?php get_header(); ?>
<section id="archive">
  <ul>
      <li>
          <a href="<?php echo site_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
      </li>
      <?php echo getBreadcrumbs(); ?>
  </ul>
  <h1 class="first-title">
    <?php if(is_category()) {
      single_cat_title();
    } elseif (is_tag()) {
      single_tag_title();
    } elseif (is_author()) {
      the_post();
      echo 'Autor: ' . get_the_author();
      rewind_posts();
    } elseif (is_day()) {
      echo 'Arquivo: ' . get_the_date();
    } elseif (is_month()) {
      echo 'Arquivo: ' . get_the_date('F Y');;
    } elseif (is_year()) {
      echo 'Arquivo: ' . get_the_date('Y');
    } else {
      echo 'Arquivos: ';
    }?>
  </h1>
  <?php  
  while(have_posts()) {
    the_post(); ?>
    <div class="archive-card">
      <h2 class="third-title"><?php the_title(); ?></h3>
      <span><?php the_time('d \d\e F \d\e Y'); ?></span>
      <p class="text"><?php echo wp_trim_words(get_the_content(), 25); ?></p>
      <a href="<?php the_permalink(); ?>">Leia Mais >></a>
    </div>
  <?php } 
    // Paginação
    the_posts_pagination();
  ?>
</section>

<?php get_footer(); ?>