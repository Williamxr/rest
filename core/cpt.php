<?php

 function createLabels($nameSingular, $namePlural, $feminino = false)
{

	$adicionarNovo = _x('Adicionar Nov' . ($feminino ? 'a ' : 'o '), $nameSingular);
	$adicionarNovoItem =  __('Adicionar Nov' . ($feminino ? 'a ' : 'o ') . $nameSingular);
	$novo =  __('Nov' . ($feminino ? 'a' : 'o') . $nameSingular);
	$todosOs = __('Tod' . ($feminino ? 'as ' : 'os ') . ($feminino ? 'as ' : 'os ') . $namePlural);
	$nanhumEncontrado =  __('Nenhum' . ($feminino ? 'a ' : ' ')  . $nameSingular . ' Encontrad' . ($feminino ? 'a' : 'o'));
	$nanhumLixeira =  __('Nenhum' . ($feminino ? 'a ' : ' ') . $nameSingular . ' na Lixeira');

	$labels = array(
		'name' => _x($namePlural, 'post type general name'),
		'singular_name' => _x($nameSingular, 'post type singular name'),
		'add_new' => $adicionarNovo,
		'add_new_item' => $adicionarNovoItem,
		'edit_item' => __('Editar ' . $nameSingular),
		'new_item' => $novo,
		'all_items' => $todosOs,
		'view_item' => __('Ver ' . $nameSingular),
		'search_items' => __('Pesquisar ' . $nameSingular),
		'not_found' =>  $nanhumEncontrado,
		'not_found_in_trash' => $nanhumLixeira,
		'parent_item_colon' => '',
		'menu_name' => $nameSingular
	);

	return $labels;
}

add_action( 'init', 'create_post_type_pratos' );

function create_post_type_pratos()
{
	/**
	 * Labels customizados para o tipo de post
	 * 
	 */
	$namePlural = 'Prato';
	$nameSingular = 'Pratos';

	/**
	 * Registamos o tipo de post projetos através desta função
	 * passando-lhe os labels e parâmetros de controle.
	 */
	register_post_type(
		'pratos',
		array(
			'labels' =>  createLabels($nameSingular, $namePlural, true),
			'exclude_from_search' => true,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'has_archive' => false,
			'hierarchical' => true,
			'menu_position' => null,
			'menu_icon' => 'dashicons-food', // to get new icons access: https://developer.wordpress.org/resource/dashicons/#calendar
			'supports' => array('title'),

		)
	);
}