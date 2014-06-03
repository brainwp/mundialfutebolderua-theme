<?php
/**
* Adicionamos uma acção no inicio do carregamento do WordPress
* através da função add_action( 'init' )
*/

add_action( 'init', 'create_post_type_paises' );

/** * Esta é a função que é chamada pelo add_action() */
function create_post_type_paises() {
	/**     * Labels customizados para o tipo de post     */
	$labels = array(
		'name' => _x('Países', 'post type general name'),
		'singular_name' => _x('País', 'post type singular name'),
		'add_new' => _x('Novo País', 'pais'),
	    'add_new_item' => __('Novo País'),
	    'edit_item' => __('Editar País'),
	    'new_item' => __('Novo País'),
	    'all_items' => __('Ver Todos'),
	    'view_item' => __('Ver País'),
	    'search_items' => __('Procurar Países'),
	    'not_found' =>  __('Nenhum país encontrado'),
	    'not_found_in_trash' => __('Nenhum país encontrado no lixo'),
	    'parent_item_colon' => '',
	    'menu_name' => 'Países'
    );

/**     * Registamos o tipo de post Países através desta função     
		* passando-lhe os labels e parâmetros de controlo.
 */
    register_post_type( 'paises', array(
		'labels' => $labels,
	    'public' => true,
		'menu_icon' => 'dashicons-location',
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'has_archive' => 'paises',
	    'query_var' => true,
		'rewrite' => array(
			'slug' => 'paises',
			'with_front' => false,
	    ),
	    'capability_type' => 'post',
	    'has_archive' => true,
	    'hierarchical' => true,
	    'menu_position' => 5,
	    'supports' => array('title','editor','thumbnail')
		)    );

	flush_rewrite_rules();}

