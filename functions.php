<?php
add_theme_support('post-thumbnails');


function enregistre_mon_menu() {
    register_nav_menus( 
    	array(
    		'menu_principal'=> __( 'Menu principal' ),
    		'menu_footer'=> __( 'Footer' ),
    	)
    );
}

add_action( 'init', 'enregistre_mon_menu' );



/**
 * Enqueue scripts and styles.
 */
function theme_assets() {
    wp_enqueue_style( 'monstyle',get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_script( 'script','https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', null, null, false );
    wp_enqueue_script( 'autrescript','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', null, null, false );

    
}



add_action( 'wp_enqueue_scripts', 'theme_assets' );


// Register Custom Post Type
function ville_post_type() {

	$labels = array(
		'name'                  => _x( 'Villes', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Ville', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Villes', 'text_domain' ),
		'name_admin_bar'        => __( 'Ville', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Toutes les villes', 'text_domain' ),
		'add_new_item'          => __( 'Informations sur la ville', 'text_domain' ),
		'add_new'               => __( 'Ajouter Ville', 'text_domain' ),
		'new_item'              => __( 'Nouvelle Ville', 'text_domain' ),
		'edit_item'             => __( 'Edit Ville', 'text_domain' ),
		'update_item'           => __( 'Update Ville', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Ville', 'text_domain' ),
		'description'           => __( 'Ville type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-site-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'ville', $args );

}
add_action( 'init', 'ville_post_type', 0 );


// Register Custom Taxonomy
function complement_logement_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Complements', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Complement', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Complement au logement', 'text_domain' ),
		'all_items'                  => __( 'Tous les complements', 'text_domain' ),
		'parent_item'                => __( 'Parent Complement', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Complement:', 'text_domain' ),
		'new_item_name'              => __( 'Nom NOuveau Complement', 'text_domain' ),
		'add_new_item'               => __( 'Ajouter Complement', 'text_domain' ),
		'edit_item'                  => __( 'Edit Complement', 'text_domain' ),
		'update_item'                => __( 'Update Complement', 'text_domain' ),
		'view_item'                  => __( 'View Complement', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate complements with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer Complement', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Complement', 'text_domain' ),
		'popular_items'              => __( 'Popular Complement', 'text_domain' ),
		'search_items'               => __( 'Rechercher Complement', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'complement', array( 'logement' ), $args );

}
add_action( 'init', 'complement_logement_taxonomy', 0 );

// Register Custom Post Type
function logement_post_type() {

	$labels = array(
		'name'                  => _x( 'Logements', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Logement', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Logements', 'text_domain' ),
		'name_admin_bar'        => __( 'Logement', 'text_domain' ),
		'archives'              => __( 'Logement Archives', 'text_domain' ),
		'attributes'            => __( 'Logement Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Logement:', 'text_domain' ),
		'all_items'             => __( 'Tous les Logements', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter Nouveau Logement', 'text_domain' ),
		'add_new'               => __( 'Ajouter Logement', 'text_domain' ),
		'new_item'              => __( 'Nouveau Logement', 'text_domain' ),
		'edit_item'             => __( 'Edit Logement', 'text_domain' ),
		'update_item'           => __( 'Update Logement', 'text_domain' ),
		'view_item'             => __( 'View Logement', 'text_domain' ),
		'view_items'            => __( 'View Logements', 'text_domain' ),
		'search_items'          => __( 'Rechercher Logement', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Logement', 'text_domain' ),
		'description'           => __( 'Logement type.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields' ),
		'taxonomies'            => array( 'complement' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-multisite',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'logement', $args );

}
add_action( 'init', 'logement_post_type', 0 );


// Add Shortcode
function recent_posts_shortcode( $datas ) {

	// Attributes
	$args = array(
	'post_type'              => 'logement',
	'posts_per_page' => $datas['count'],
	'order'                  => $datas['order'],
	'orderby'                => 'date'
);

// The Query
$query = new WP_Query( $args );
ob_start();
echo '<article class="row">';
foreach ($query->posts as $post) :
		
		
		echo '<article class="row">';
		echo '<figure class="col-sm-3">';
		echo '<h3>'.the_title().'</h3>';
		echo '<h4>Prix: '.the_field('prix').'euros</h4>';

		echo '</article>';
		
		endforeach; 

		echo '</article';
		$output = ob_get_clean();

		return output;

}
add_shortcode( 'recent-posts', 'recent_posts_shortcode' );

?>