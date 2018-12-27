<?php  

function platillos_styles(){

	wp_enqueue_style('materialize', "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css");
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('jquery');
	wp_enqueue_script('materializejs',"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js", array('jquery'));
}

add_action('wp_enqueue_scripts','platillos_styles');
add_theme_support('post-thumbnails');//cargar imagen destacada

//NAVEGACION

register_nav_menus(array(
	'menu_principal'=> __('Menu Principal','ShUrRe')
));




?>