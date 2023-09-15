<?php

add_filter('rwmb_meta_boxes', 'rest_register_meta_boxes');

/**

 * Register meta boxes

 *

 * Remember to change "alp" to actual prefix in your project

 *

 * @param array $meta_boxes List of meta boxes

 *

 * @return array

 */


function rest_register_meta_boxes($meta_boxes){

    $prefix = 'cardapio-';

    // metabox cardapio

    $meta_boxes[] = [
        'id' => 'cardapio_mb',
        'title' => 'Insira aqui os cardapio',
        'post_types' => array('cardapio'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => [
            [
                'name' => 'Prato',
                'id' => $prefix . 'prato',
                'type' => 'text',
            ],
            [
                'name' => 'Descrição',
                'id' => $prefix . 'descrição',
                'type' => 'text',
            ],
            [
                'name' => 'Preço',
                'id' => $prefix . 'preco',
                'type' => 'text',
            ],
        ],
    ];

    return $meta_boxes;
}
