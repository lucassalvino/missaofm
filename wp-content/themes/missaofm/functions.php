<?php
add_theme_support( 'post-thumbnails' );//Adiciona possibilidade imagens destacadas nas páginas

// remove barra do wordpress do site
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
		'page_title' 	=> 'Opções',
		'menu_title'	=> 'Opções',
		'menu_slug' 	=> 'opcoes',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
    ));
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Redes sociais',
		'menu_title'	=> 'Redes sociais',
		'parent_slug'	=> 'opcoes',
    ));
    acf_add_options_sub_page(array(
		'page_title' 	=> 'SEO',
		'menu_title'	=> 'SEO',
		'parent_slug'	=> 'opcoes',
	));
}