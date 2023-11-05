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
function custom_child_excerpt($excerpt) {
    // Check if we are on a Page and if it has child pages
    if (is_page() && has_children()) {
        // Get the ID of the current page
        $post_id = get_the_ID();

        // Get the content of the current page (parent page)
        $parent_content = get_post_field('post_content', $post_id);

        // Extract the first 100 characters of the parent page content
        $parent_excerpt = substr($parent_content, 0, 100);

        // Get the child pages of the current page
        $child_pages = get_children(array(
            'post_parent' => $post_id
        ));

        // Initialize an empty string to hold child page excerpts
        $child_excerpts = '';

        // Loop through child pages
        foreach ($child_pages as $child) {
            // Get the content of each child page
            $child_content = get_post_field('post_content', $child->ID);

            // Extract the excerpt of each child page using wp_trim_words
            $child_excerpt = wp_trim_words($child_content, 20, '...'); // You can adjust the number of words as needed

            // Append the child excerpt to the string
            $child_excerpts .= $child_excerpt;
        }

        // Combine the parent excerpt and child excerpts
        $combined_excerpt = $parent_excerpt . $child_excerpts;

        // Replace the original excerpt with the combined excerpt
        $excerpt = $combined_excerpt;
    }

    return $excerpt;
}

// Hook the custom function to modify the excerpt
add_filter('get_the_excerpt', 'custom_child_excerpt');

?>
