<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Left Sidebar',
        'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgetTitle">',
        'after_title' => '</h2>',
    ));
	if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Right Sidebar',
        'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgetTitle">',
        'after_title' => '</h2>',
    ));
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size('my_thumb',190,140,true);
	set_post_thumbnail_size('mini-thumbnail',946,320,true);
	add_image_size('slider',860,330,true);
	 // to call this thumbnail, put this in template:-> the_post_thumbnail('my_thumb'); 
	// This theme uses wp_nav_menu() in one location.  
	register_nav_menus( array('header_Menu' => __( 'Header Menu', 'sw theme' ),'footer_menu'=> __( 'Footer Menu', 'sw theme' ) ));
	add_filter('the_generator', 'version');
	function version() {
		return '';
	}

	function wp_mobile_menu( $args = array() ) {
		$output = '';
		@extract($args);
		if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
		$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
		$menu_items = wp_get_nav_menu_items( $menu->term_id );
		$output = "<select id='". $id. "'>";
		$output .= "<option value='' selected='selected'>" . __('Go to...', 'tie') . "</option>";
		foreach ( (array) $menu_items as $key => $menu_item ) {
		$title = $menu_item->title;
		$url = $menu_item->url;
		if ( $menu_item->menu_item_parent ) {
		$title = ' - ' . $title;
		}
		$output .= "<option value='" . $url . "'>" . $title . '</option>';
		}
		$output .= '</select>';
		}
		return $output;
	}
	function get_split_title() {
        $title = get_bloginfo('name');
        $lines = explode(' ', $title);
        $output .= '<span>'.$lines[0].'</span>'.$lines[1];
		return $output;
    }
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function wpse_wpautop_nobr( $content ) {
    return wpautop( $content, false );
}

add_filter( 'the_content', 'wpse_wpautop_nobr' );
add_filter( 'the_excerpt', 'wpse_wpautop_nobr' );
?>