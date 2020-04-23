<?php
add_theme_support('post-thumbnails');

function enregistre_mon_menu() {
    register_nav_menus( 
    	array(
    		'menu_principal', __( 'Menu principal' ),
    		'menu_pied', __( 'Menu pied' )
    	)
    );
}
add_action( 'init', 'enregistre_mon_menu' );

register_sidebars(2);

?>