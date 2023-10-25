<?php

// função para importar arquivos de mídia (css, js)
function importar_arquivos() {
    // CSS
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2', 'all');
    wp_enqueue_style('open-sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Roboto:wght@100;500;700&display=swap', array(), '1.0.0', 'all');
    wp_enqueue_style('estilos', get_template_directory_uri() . '/assets/css/all.css', array(), '1.0.0', 'all');

    //JS
    wp_enqueue_script('main_script', get_template_directory_uri() . '/assets/js/index.js', array('jquery'),'1.0', true);
    
}

function theme_setup() {
    add_theme_support('post-thumbnails');
    //add_theme_supoort('html5', array ('search-form'));
    register_nav_menus(
        [
            'mainMenu' => 'Principal',
            'govMenu' => 'Governo federal',
            'slideMenu' => 'Slide',
            'shotcutMenu' => 'Atalho',
            'featuredMenu' => 'Destaque',
        ]
    );
}

add_action('wp_enqueue_scripts', 'importar_arquivos');
add_action('after_setup_theme', 'theme_setup');

function getMainMenu() {
	$locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ "mainMenu" ] );

    if ( !$menu || is_wp_error( $menu ) ) {
		return false;
	}

    return wp_get_nav_menu_items( $menu->term_id, ['update_post_term_cache' => false, 'orderby'=>'menu_order'] );
    
    //echo "<pre>";var_dump($menu_items);die();

}

function getGovMenu() {
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ "govMenu" ] );

    if ( !$menu || is_wp_error( $menu ) ) {
		return false;
	}

    return wp_get_nav_menu_items( $menu->term_id, ['update_post_term_cache' => false, 'orderby'=>'menu_order'] );
}

function showSlideMenu() {
	$locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ "slideMenu" ] );

    if ( !$menu || is_wp_error( $menu ) ) {
		return false;
	}

    $menu_items = wp_get_nav_menu_items( $menu->term_id, ['update_post_term_cache' => false, 'orderby'=>'menu_order'] );

    echo '<section id="slideMenu" class="carousel" aria-label="Gallery">';

        echo '<ol class="carousel__viewport">';
        foreach ( (array) $menu_items as $menu_item ) {
            echo "<li id='carousel__slide1'
                        tabindex='0'
                        class='carousel__slide'>
                        <img src='$menu_item->post_content'>
                    <span>$menu_item->attr_title</span>
                    <div class='carousel__snapper'>
                        <a href='#carousel__slide4'
                        class='carousel__prev'>Go to last slide</a>
                        <a href='#carousel__slide2'
                        class='carousel__next'>Go to next slide</a>
                    </div>
                    </li>
                    ";
        }
        echo "</ol>";

        echo '<aside class="carousel__navigation">';
            echo '<ol class="carousel__navigation-list">';
                foreach ( (array) $menu_items as $menu_item ) {
                    echo '<li class="carousel__navigation-item">
                    <a href="#carousel__slide1"
                    class="carousel__navigation-button">Go to slide 1</a>
                </li>';
                }
            echo "</ol>";
        echo "</aside>";

    echo "</section>"; 
}

function getShotcutMenu() {
	$locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ "shotcutMenu" ] );

    if ( !$menu || is_wp_error( $menu ) ) {
		return false;
	}

    return wp_get_nav_menu_items( $menu->term_id, ['update_post_term_cache' => false, 'orderby'=>'menu_order'] );
    
    //echo "<pre>";var_dump($menu_items);die();
}

function formatShotcutMenu($string) {
    $parts = explode('|', $string);
    $parts = array_map('trim', $parts);
    return '<span>' . $parts[0] . '</span><span>' . $parts[1] . '</span>';
}

function getWebStories() {
    // Consulta personalizada para recuperar histórias do Web Stories
    $args = array(
        'post_type' => 'web-story', // Post type do Web Stories
        'posts_per_page' => 5, // Número de histórias para exibir
    );
    
    return new WP_Query($args);
}


function getFeaturedMenu() {
	$locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ "featuredMenu" ] );

    if ( !$menu || is_wp_error( $menu ) ) {
		return false;
	}

    $result = [];
    foreach ((array) wp_get_nav_menu_items( $menu->term_id, ['update_post_term_cache' => true, 'orderby'=>'menu_order'] ) as $menu_item ) {
        if ( ($menu_item->object != 'featured-menu') && (!has_post_thumbnail($menu_item->object_id)) ) {
            continue;
        }
        $parts = explode('|', $menu_item->post_title);
        $post = get_post($menu_item->object_id);
        $post->post_thumbnail = get_the_post_thumbnail($menu_item->object_id);
        // echo "<pre>";var_dump($post);die();
        array_push($result, $post);
    }

    return $result;
    
    //echo "<pre>";var_dump($menu_items);die();
}

function wporg_custom_post_type() {
	register_post_type('featured-menu',
		array(
			'labels'      => array(
				'name'          => __( 'Destaques', 'textdomain' ),
				'singular_name' => __( 'Destaque', 'textdomain' ),
			),
			'public'      => true,
			'has_archive' => true,
            'exclude_from_search' => true,
            'publicly_queryable' => false,
            'show_ui' => true,
            'supports' => [
                'title',
                'excerpt',
                'thumbnail',
                // 'editor',
                // 'revisions',
                // 'trackbacks',
                // 'author',
                // 'page-attributes',
                // 'custom-fields', 
                // 'post-formats'
            ],
			'rewrite'     => array( 'slug' => 'featured-menu' ), // my custom slug
		)
	);
}
add_action('init', 'wporg_custom_post_type');
