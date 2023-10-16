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
}

add_action('wp_enqueue_scripts', 'importar_arquivos');
add_action('after_setup_theme', 'theme_setup');