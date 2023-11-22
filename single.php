<?php get_header(); 

while(have_posts()) {
    the_post(); ?>
    <section id = "post">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <span><?php the_time('d \d\e F \d\e Y'); ?></span>
        <p><?php the_content(); ?></p>
        <div class="share-post">
            <span>Compartilhe</span>
            <div class="share-grid">
                <div>
                    <i class="fa-brands fa-whatsapp" alt="Whatsapp "></i>
                </div>
                <div>
                    <i class="fa-brands fa-instagram" alt="Instagram"></i>
                </div>
                <div>
                    <i class="fa-brands fa-facebook" alt="Facebook "></i>
                </div>
                <div>
                    <i class="fa-brands fa-twitter" alt="Twitter"></i>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?php get_footer(); ?>