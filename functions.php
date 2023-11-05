<?php

// Loads stylesheet
function load_stylesheets() {

    $stylesheet_url = get_template_directory_uri() . '/style.css';
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

// Loads Bootstrap 5.1.3 from CDN
function load_bootstrap() {

    $bootstrap_url = 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css';
    wp_enqueue_style('bootstrap', $bootstrap_url);

    $jquery_url = 'https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js';
    wp_enqueue_script('jquery', $jquery_url);

    $bootstrap_js_url = 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js';
    wp_enqueue_script('bootstrap', $bootstrap_js_url);
}

add_action('wp_enqueue_scripts', 'load_bootstrap');

add_theme_support( 'post-thumbnails', array( 'page' ) );

// Adds custom excerpt to child pages
function custom_excerpt($excerpt) {
    if (is_page()) {
        // Get the current page's content
        $content = get_the_content();

        // Find the position of the word "Resumo"
        $resumo_position = stripos($content, 'Resumo');

        if ($resumo_position !== false) {
            // Extract the content after the word "Resumo"
            $excerpt = substr($content, $resumo_position + strlen('Resumo'));

            // Limit the excerpt to 200 characters
            $excerpt = substr($excerpt, 0, 200);

            // Sanitize the excerpt to remove any HTML tags
            $excerpt = wp_strip_all_tags($excerpt);

            // Add "..." and a line break
            $excerpt .= "..." . '<br>';

            // Add "Saiba mais -->"
            $excerpt .= "Saiba mais -->";
        }
    }

    return $excerpt;
}

// Hook the custom function to modify the excerpt
add_filter('get_the_excerpt', 'custom_excerpt');

?>
