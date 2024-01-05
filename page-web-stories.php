<?php get_header();?>

<h1 class="first-title"><?php the_title() ?></h1>

<?php 
$categoryActivated = false;
if (isset($_GET['categoria'])) {
  $categoryActivated = $_GET['categoria'];
}
$web_stories = getWebStories(9, $categoryActivated);

if ($web_stories->have_posts()) : ?>
  <div>
    <h3 class="third-title">Categorias</h3>
    <?php $categories = get_categories(getCategoriesWebStories());

    if (!empty($categories)) { ?>
      <ul>
        <li><a href="<?php echo home_url('/web-stories')?>">Ver todas</a></li>
      <?php foreach ($categories as $category) { ?>
        <li class="post-tag"><a href="<?php echo home_url('/web-stories/?categoria=' . $category->slug) ?>"> <?php echo esc_html($category->name) ?></a></li>
      <?php } ?>
      </ul>
    <?php } ?>
  </div>

    <?php while ($web_stories->have_posts()) : $web_stories->the_post();?>
      <div class="story">
        <a href="<?php the_permalink() ?>">
          <?php echo the_title() ?>
          <?php the_post_thumbnail() ?>
        </a>
      </div>
    <?php endwhile;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
    <div class="pagination">
    <?php echo paginate_links(array(
        'total' => $web_stories->max_num_pages,
        'current' => max(1, $paged),
    )); ?>
    </div>

<?php else :
    echo 'Nenhuma Web Story encontrado.';
endif;

wp_reset_postdata();

get_footer();
?>