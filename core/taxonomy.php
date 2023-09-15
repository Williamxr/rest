<?php

add_action( 'init', 'create_custom_taxonomy_cardapio', 0 );

//create a custom taxonomy to CPT
function create_custom_taxonomy_cardapio() {
 
    $labels = array(
      'name' => _x( 'Cardapio', 'taxonomy general name' ),
      'singular_name' => _x( 'Cardapio', 'taxonomy singular name' ),
      'search_items' =>  __( 'Procurar Categoria' ),
      'all_items' => __( 'Todas Categorias' ),
      'parent_item' => __( 'Item pai da Categoria' ),
      'parent_item_colon' => __( 'Pai da Categoria:' ),
      'edit_item' => __( 'Editar Categoria' ), 
      'update_item' => __( 'Atualizar Categoria' ),
      'add_new_item' => __( 'Adicionar nova Categoria' ),
      'new_item_name' => __( 'Novo nome para Categoria' ),
      'menu_name' => __( 'Cardapio' ),
    ); 	
   
    register_taxonomy('pratos',array('cardapio'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'pratos' ),
    ));
  }