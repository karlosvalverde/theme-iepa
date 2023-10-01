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

?>
