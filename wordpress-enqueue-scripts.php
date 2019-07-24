<?php
function name_of_function_here() {
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', ’name_of_function_here' );