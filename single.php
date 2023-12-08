<?php get_header(); 

while(have_posts()) {
    the_post(); ?>
    <ul>
        <li>
            <a href="<?php echo site_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
        </li>
        <?php echo getBreadcrumbs(); ?>
    </ul>
    <section id = "post" class="singleTemplate">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <span class="postDate"><?php the_time('d \d\e F \d\e Y'); ?></span>
    <div class="share-post">
        <span>Compartilhe</span>
        <div class="share-grid">
            <div>
                <a target="_blank" href="https://api.whatsapp.com/send?text=<?php echo esc_url(the_permalink()); ?>">
                    <i class="fa-brands fa-whatsapp" alt="Whatsapp "></i>
                </a>
            </div>
            <div>
                <a target="_blank" href="https://www.linkedin.com/shareArticle?url=<?php echo esc_url(the_permalink()); ?>">
                    <i class="fa-brands fa-linkedin" alt="Linkedin"></i>
                </a>
            </div>
            <div>
                <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo esc_url(the_permalink()); ?>">
                    <i class="fa-brands fa-facebook" alt="Facebook "></i>
                </a>
            </div>
            <div>
                <a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo esc_url(the_permalink()) ?>&text=<?php echo esc_html(the_title()); ?>">
                    <i class="fa-brands fa-x-twitter" alt="Twitter"></i>
                </a>
            </div>

        </div>
    </div>
        <p><?php the_content(); ?></p>
    </section>
<?php } ?>

<?php get_footer(); ?>