<?php

/* Functions file for the Code4Sac theme (parent theme = twentythirteem). 
   These functions take precedence over the functions.php file in parent theme. */
  
  
//register custom sidebars   
function code4sac_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Project Sidebar Area', 'twentythirteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the sidebar section of the project template.', 'twentythirteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
		
	register_sidebar( array(
		'name'          => __( 'Forum Sidebar Area', 'twentythirteen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Appears in the sidebar section of the forum template.', 'twentythirteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );	
		
}

add_action( 'widgets_init', 'code4sac_widgets_init' );

//enable shortcodes in widgetized areas
add_filter('widget_text', 'do_shortcode');

?>