<?php

// função para importar arquivos de mídia (css, js)
function importar_arquivos() {
    // CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2', 'all');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2', 'all');
    wp_enqueue_style('open-sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap', array(), null);
    wp_enqueue_style('estilos', get_template_directory_uri() . '/assets/css/all.css', array(), null, 'all');

    //JS
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.2', true);
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array(), '2.11.8', true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js', array('popper'), '5.3.2', true);
    wp_enqueue_script('main_script', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), null, true);
    
}

function theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
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

function getBreadcrumbs() {
    $crumbs = '';
    $current_page_id = get_the_ID();
    $theParent = wp_get_post_parent_id($current_page_id);
    $count = 0;

    if(is_singular('post')) {
        $categories = get_the_category();
        if (isset($categories)) {
            $category = $categories[0];
            $category_permalink = get_category_link($category->term_id);
            $crumbs = '<li><a href="' . esc_url($category_permalink) . '">' . esc_html($category->name) . '</a></li>' . $crumbs;
        }
    }
      
    if(!$theParent) {
        if(is_category()) {
            return '<li>' . single_cat_title('', false) . '</li>';
        }
        if(is_search()) {
            return '<li>Você pesquisou por "'. esc_html(get_search_query()) .'"</li>';
        }
    }

    while($theParent) {
      $count ++;
      $crumbs = '<li><a href="' . get_permalink($theParent) . '">' . get_the_title($theParent) .  '</a> </li>' . $crumbs;
      $theParent = wp_get_post_parent_id($theParent);
    }
    return $crumbs . '<li>' . get_the_title( $current_page_id ) . '</li>';
}


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

function getSlideMenu() {
	$locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ "slideMenu" ] );

    if ( !$menu || is_wp_error( $menu ) ) {
		return false;
	}

    $result = [];
    foreach ((array) wp_get_nav_menu_items( $menu->term_id, ['update_post_term_cache' => true, 'orderby'=>'menu_order'] ) as $menu_item ) {
        if ( ($menu_item->object != 'slideMenu') && (!has_post_thumbnail($menu_item->object_id)) ) {
            continue;
        }
        $parts = explode('|', $menu_item->post_title);
        $post = get_post($menu_item->object_id);
        $post->post_thumbnail = get_the_post_thumbnail($menu_item->object_id);
        // echo "<pre>";var_dump($post);die();
        array_push($result, $post);
    }

    return $result;
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

    $parts = explode(' ', $string);
    $palavras = preg_split('/\s+(?=\S+$)/', $string, 2);
    
    if (count($palavras) >= 2) {
        return '<span>' . $palavras[0] . '</span><span>' . strtoupper($palavras[1]) . '</span>';
    } else {
        return '<span>&nbsp</span><span>' . strtoupper($palavras[0]) . '</span>';
    }
    return false;
}

function getWebStories($story_per_page, $slug = false) {
    // Consulta personalizada para recuperar histórias do Web Stories
    $args = array(
        'post_type' => 'web-story', // Post type do Web Stories
        'posts_per_page' => $story_per_page, // Número de histórias para exibir
        'tax_query' => $slug ? array(
            array(
                'taxonomy' => 'web_story_category',
                'field' => 'slug',
                'terms' => $slug,
            ),
        ) : false,
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
    register_post_type('courses',
        array(
            'labels'      => array(
                'name'          => __( 'Cursos', 'textdomain' ),
                'singular_name' => __( 'Curso', 'textdomain' ),
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
            'rewrite'     => array( 'slug' => 'courses' ), // my custom slug
        )
    );
}
add_action('init', 'wporg_custom_post_type');
