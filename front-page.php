<?php get_header(); ?>

<?php showSlideMenu(); ?>

<!-- Atalhos -->
<div>
<?php foreach ((array) getshotcutMenu()as $menu_item ): ?>  
    <a href='<?php echo $menu_item->url ?>'>
      <div>
        <?php echo $menu_item->post_title ?>
      </div>
    </a>;
<?php endforeach ?>
</div>

<!-- Notícias -->
<?php
$count = 0;
while(have_posts()) {
  the_post(); 
  if(has_term('noticias', 'category')) {
  ?>
    <div class="post-item">
      <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail() && $count < 2) { ?>
          <div>
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>
        <?php }
        $count++;
        ?>
        <p><?php the_time('d \d\e F \d\e Y'); ?></p>
        <h2><?php the_title(); ?></h2>
      </a>
    </div>  
    <hr>
<?php }} ?>

<h2>Destaques</h2>
<div id="featuredMenu">
<?php foreach ((array) getFeaturedMenu() as $menu_item ): ?>  
    <a href='<?php echo $menu_item->post_content ?>' target='<?php echo $menu_item->target ?>'>
      <div>
        <img src='<?php echo $menu_item->post_content ?>' title='<?php echo $menu_item->attr_title ?>' alt='<?php echo $menu_item->attr_title ?>' /><?php echo $menu_item->post_title ?>
      </div>
    </a>;
<?php endforeach ?>
</div>

<?php get_footer(); ?>