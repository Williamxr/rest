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

    $prefix = 'pratos-';

    // metabox pratos

    $meta_boxes[] = [
        'id' => 'pratos_mb',
        'title' => 'Insira aqui os pratos',
        'post_types' => array('pratos'),
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
