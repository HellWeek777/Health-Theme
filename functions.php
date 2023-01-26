<?php

/**
 * Załączenie stylów i skryptów do motywu
 */
function zet_scripts() {

  wp_enqueue_style( 'stylef', get_template_directory_uri() . '/assets/css/libraries.css' );
  wp_enqueue_style( 'styleg', get_template_directory_uri() . '/assets/css/style.css' );
  wp_enqueue_script( 'scripte', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array(), '20201215', true );
  wp_enqueue_script( 'scripth', get_template_directory_uri() . '/assets/js/plugins.js', array(), '20201215', true );
  wp_enqueue_script( 'scriptb', get_template_directory_uri() . '/assets/js/main.js', array(), '20201215', true );

}
add_action( 'wp_enqueue_scripts', 'zet_scripts' );

// Custom Excerpt function for Advanced Custom Fields
function custom_field_excerpt() {
	global $post;
	$text = get_field('tekst'); 
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$excerpt_length = 20; // 20 slow
		$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}

add_action( 'init', 'change_post_object' );

function change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Badania';
        $labels->singular_name = 'Badania';
        $labels->add_new = 'Dodaj nowe';
        $labels->add_new_item = 'Dodaj nowe badanie';
        $labels->edit_item = 'Edytuj badanie';
        $labels->new_item = 'Badania';
        $labels->view_item = 'Zobacz badanie';
        $labels->search_items = 'Szukaj badań';
        $labels->not_found = 'Nie znalezniono żadnych badań';
        $labels->not_found_in_trash = 'Nie znaleziono żadnyc nowych badań w koszu';
        $labels->all_items = 'Wszystkie badania';
        $labels->menu_name = 'Badania';
        $labels->name_admin_bar = 'Badania';
}

function zet_theme_setup() {

    
    add_theme_support( 'title-tag' );  

    // Add custom-logo support
    add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme', 'zet_theme_setup');

?>