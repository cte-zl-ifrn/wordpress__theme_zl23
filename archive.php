<?php get_header(); ?>
  <h1>
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
    <h3><?php the_title(); ?></h3>
    <span><?php the_time('d \d\e F \d\e Y'); ?></span>
    <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
    <a href="<?php the_permalink(); ?>">Leia Mais >></a>
    <hr>
  <?php } 
    // Paginação
    the_posts_pagination();
  ?>

<?php get_footer(); ?>