<?php 

function calling_resources(){
	// calling styles
	wp_enqueue_style('style' , get_stylesheet_uri(), '', '1.0.0' );
}
add_action('wp_enqueue_scripts' , 'calling_resources');


 

 function our_theme_setup (){

 
 //register nav
 register_nav_menus(array(

	'primary'=>__('Primary Menu'),
    'footer'=>__('footer Menu'),
 ));

 //Thumnail Image
 add_theme_support('post-thumbnails'); /*for add featured image */

 }

 add_action( 'after_theme_setup','our_theme_setup') ;

 
 // Sidebar Register
 function ourWidgetInit(){
	register_sidebar(array(
		'name' => 'Primary Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="sidebar_single_area clear">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="wid_heading">',
		'after_title' => '</h2>',
	));
	
	register_sidebar(array(
		'name' => 'Footer Top Left',
		'id' => 'sidebar2',
		'before_widget' => '<div class="b_f_s_wrap">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="red">',
		'after_title' => '</h2>',
	));	
	register_sidebar(array(
		'name' => 'Footer Top Middle',
		'id' => 'sidebar3',
		'before_widget' => '<div class="b_f_s_wrap">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="green">',
		'after_title' => '</h2>',
	));	
	register_sidebar(array(
		'name' => 'Footer Top Right',
		'id' => 'sidebar4',
		'before_widget' => '<div class="b_f_s_wrap">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="orange">',
		'after_title' => '</h2>',
	));		
}
 
 // widget  include
  
 add_action('widgets_init', 'ourWidgetInit');
 





