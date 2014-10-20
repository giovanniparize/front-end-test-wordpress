<?php
//Suporte a thumbnails
if (function_exists('add_theme_support')) { 
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size('destaques', 950, 350, true );
}


//Suporte à Custom Menus
if (function_exists('register_nav_menu')) {
	register_nav_menus( array(
		'navegacao-principal' => __('Navegacao Principal', 'footer'),
		'navegacao-category' => __('Portfolio', 'footer'),
	) );
	// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'footer');
}

//Control Excerpt Length using Filters
function new_excerpt_length($length) {
	return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');

/************************************************ 
		LIMITAR NÚMERO DE PALAVRAS NOS EXCERPTS 
*************************************************/ 
function limit_words($string, $word_limit) 
{ 
  $words = explode(' ', $string, ($word_limit + 1)); 
  if(count($words) > $word_limit) { array_pop($words); 
array_push($words, "..."); } 
  return implode(' ', $words); 
} 
    

