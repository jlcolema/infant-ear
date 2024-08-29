<?php
/*add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}*/

function enqueue_child_theme_styles() {
  // Enqueue the parent theme's stylesheet (required).
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // Enqueue your custom CSS file.
  wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/custom.css', array('parent-style'), '1.0');
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');


add_action( 'woocommerce_before_add_to_cart_button', 'add_price', 50 );

function add_price() {
  echo '<div class="above-atc-buttons__total-price"><p class="total-price__text">Total</p><div class="total-price__price">';
  woocommerce_template_single_price();
  echo '</div></div>';
}

// Remove Gravity Forms Default CSS
// After version 2.8, the "Output Default CSS" setting was removed from the form settings.
// Source: https://docs.gravityforms.com/gform_disable_css/
add_filter( 'gform_disable_css', '__return_true' );

// Add `custom.js`

function enqueue_custom_js() {
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/custom.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_js');
