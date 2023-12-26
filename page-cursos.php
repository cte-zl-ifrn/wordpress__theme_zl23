<?php get_header(); ?>
<ul>
  <li>
      <a href="<?php echo site_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
  </li>
  <?php echo getBreadcrumbs(); ?>
</ul>

<h1>Cursos</h1>
<p>O Campus Avançado Natal - Zona Leste do IFRN oferece uma ampla gama de cursos para todos os níveis de educação, incluindo ProITEC para autodesenvolvimento, cursos técnicos para alunos do Ensino Médio, opções de graduação para diplomados, diversas pós-graduações, além de cursos de curta duração abertos a todos os interessados.</p>

<form action="<?php echo home_url('/cursos'); ?>">
  <input 
  type="text" 
  name="search-cursos" 
  placeholder="Pesquisar cursos" 
  class="form-control"
  value="<?php echo isset($_GET['search-cursos']) ? $_GET['search-cursos'] : '' ?>"
  >
  <button type="submit">Pesquisar</button>
</form>

<?php

$courses = new WP_Query(
  $args = array(
    'post_type' => 'courses',
    'posts_per_page' => 9,
    'orderby' => 'title',
    'order' => 'ASC',
    'meta-query' => [
      'relation' => 'AND',
    ],
    's' => isset($_GET['search-cursos']) ? sanitize_text_field($_GET['search-cursos']) : false,
  )
);
if ($courses->have_posts()) :
  while ($courses->have_posts()) : $courses->the_post(); ?>
  <div>
    <a href="<?php the_permalink() ?>">
      <?php echo the_title() ?>
      <?php the_post_thumbnail() ?>
    </a>
  </div>
  <?php endwhile;
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
  <div class="pagination">
    <?php echo paginate_links(array(
        'total' => $courses->max_num_pages,
        'current' => max(1, $paged),
    )); ?>
  </div>

<?php else :
    echo 'Nenhum curso encontrado.';
endif;

wp_reset_postdata();

get_footer(); ?>