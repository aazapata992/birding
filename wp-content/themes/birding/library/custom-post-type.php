<?php
/* Bones Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the custom type



	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
/***********Post Type anexo**************/
function create_birding_anexo_post_type() { 
	// creating (registering) the custom type 
	register_post_type( 'birding_anexo', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Anexos', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'anexo', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'Todos las anexos', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Agregar nuevo', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Agregar nueva anexo', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Editar', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Editar anexo', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'Nuevo anexo', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'Ver anexo', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Buscar anexo', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nada encontrado en la base de datos.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nada encontrado en la basura', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Post type para anexos', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 9, /* this is what order you want it to appear in on the left hand side menu */
			'rewrite'	=> array( 'slug' => 'anexos', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type( 'anexo_category', 'birding_anexo' );
}
/***********End post type anexo**************/

	// adding the function to the Wordpress init
	add_action( 'init', 'create_birding_anexo_post_type');
	add_action( 'init', 'create_birding_info_anexo_post_type');

	
	/*
		looking for custom meta boxes?
		check out this fantastic tool:
		https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
	*/
	

?>
