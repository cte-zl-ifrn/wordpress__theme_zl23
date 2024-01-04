<?php get_header(); ?>
<ul>
  <li>
      <a href="<?php echo site_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
  </li>
  <?php echo getBreadcrumbs(); ?>
</ul>

<section id="page-cursos">
 
  <h1 class="first-title">Cursos</h1>
  <p class="text">O Campus Avançado Natal - Zona Leste do IFRN oferece uma ampla gama de cursos para todos os níveis de educação, incluindo ProITEC para autodesenvolvimento, cursos técnicos para alunos do Ensino Médio, opções de graduação para diplomados, diversas pós-graduações, além de cursos de curta duração abertos a todos os interessados.</p>

  <form action="<?php echo home_url('/cursos'); ?>">
    <input 
    type="text" 
    name="search-cursos" 
    placeholder="Pesquisar cursos" 
    class="form-control"
    value="<?php echo isset($_GET['search-cursos']) ? $_GET['search-cursos'] : '' ?>"
    >

    <fieldset>  
      <legend>Categoria</legend>      
      <input type="checkbox" id="fic" name="categoria[]" value="fic" <?php echo isset($_GET['categoria']) && in_array('fic', $_GET['categoria']) ? 'checked' : ''; ?>>
      <label for="fic">FIC</label><br>    
      <input type="checkbox" name="categoria[]" value="curso-aberto" <?php echo isset($_GET['categoria']) && in_array('curso-aberto', $_GET['categoria']) ? 'checked' : ''; ?>>
      <label for="curso-aberto">Curso Aberto</label><br>     
      <input type="checkbox" name="categoria[]" value="vermelho" <?php echo isset($_GET['categoria']) && in_array('vermelho', $_GET['categoria']) ? 'checked' : ''; ?>>  
      <label for="vermelho">Vermelho</label><br>  
      <br>      
      <input type="submit" value="Aplicar" />      
    </fieldset>

    <fieldset>
      <legend>Modalidade</legend>
      <input type="radio" name="modalidade" value="presencial" <?php echo isset($_GET['modalidade']) && $_GET['modalidade'] == 'presencial' ? 'checked' : '' ?>>
      <label for="presencial">Presencial</label>
      <input type="radio" name="modalidade" value="ead" <?php echo isset($_GET['modalidade']) && $_GET['modalidade'] == 'ead' ? 'checked' : '' ?>>
      <label for="ead">EaD</label>
    </fieldset>

    <button type="submit">Pesquisar</button>
  </form>

  <?php

  $args = array(
    'post_type' => 'courses',
    'posts_per_page' => 9,
    'orderby' => 'title',
    'order' => 'ASC',
    'meta_query' => array(
      'relation' => 'AND',
    )
  );

  if (isset($_GET['search-cursos']) && !empty($_GET['search-cursos']) ) {
    $args['s'] = sanitize_text_field( $_GET['search-cursos'] );
  }

  if (isset($_GET['categoria'])) {
    $args['meta_query'][] = array(
      'key' => isset($_GET['categoria']) ? 'categoria' : '',
      'value' => isset($_GET['categoria']) ? $_GET['categoria'] : '',
    );
  }

  if (isset($_GET['modalidade'])) {
    $args['meta_query'][] = array(
      'key' => isset($_GET['modalidade']) ? 'modalidade' : '',
      'value' => isset($_GET['modalidade']) ? $_GET['modalidade'] : '',
    );
  }

  $courses = new WP_Query($args);

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

  <?php else : ?>
    <div>
      <h2 class="second-title">Desculpe, não encontramos resultados para '<?php echo $_GET['search-cursos'] ?>'</h2>
      <h3 class="third-title">Recomendamos ajustar sua busca. Aqui estão algumas sugestões:</h3>
      <ul>
        <li>Verifique se todas as palavras estão escritas corretamente</li>
        <li>Tente usar termos de pesquisa diferentes com o mesmo significado</li>
        <li>Tente usar termos de pesquisa mais genéricos</li>
      </ul>
    </div>
  <?php endif;

  wp_reset_postdata();?>

</section>

<?php get_footer(); ?>