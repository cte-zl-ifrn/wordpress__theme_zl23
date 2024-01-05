<?php get_header(); ?>
<section id="processos-seletivos">
  <ul>
      <li>
          <a href="<?php echo site_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
      </li>
      <?php echo getBreadcrumbs(); ?>
  </ul>
  <h1 class="first-title">
    <?php single_cat_title() ?>
  </h1>
  
  <?php echo do_shortcode('[processos_seletivos]') ?>

  <h2 class="second-title">Notícias relacionadas</h2>
  <?php  
  while(have_posts()) {
    the_post(); ?>
    <div class="archive-card">
      <?php $tags = get_the_tags();
      if ($tags) {
          foreach ($tags as $tag) {
            if ($tag->name == 'aluno' || $tag->name == 'colaborador') {
                echo '<span class="post-tag">' . esc_html($tag->name) . '</span>';
                break;
            }
          }
      } ?>
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