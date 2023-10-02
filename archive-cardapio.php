<?php
get_header();

$terms = get_terms(array(
    'taxonomy' => 'pratos',
    
)); ?>

<section class="container">
    <h2 class="subtitulo"><?php the_title(); ?></h2>
    <?php
    foreach ($terms as $term) { ?>
        <div class="menu-item grid-8">
            <h2><?php echo $term->name ?></h2>
            <ul>
                <?php

                $args = array(
                    'post_type' => 'cardapio',
                    'tax_query' => array(
                        'taxonomy' => 'pratos',
                        'field' => 'slug',
                        'terms' => $term->slug
                    ),
                );
                $query = new wp_query($args); ?>

                    <?php
                    if ($query->have_posts()) { 
                        while ($query->have_posts()) { 
                            $query->the_post();

                            $descricao = rwmb_meta('cardapio-descricao');
                            $preco = rwmb_meta('cardapio-preco');
                            ?>
                                    <li>
                                        <span><sup>R$</sup><?php echo $preco ?></span>
                                        <div>
                                            <h3><?php the_title()?></h3>
                                            <p><?php echo $descricao ?></p>
                                        </div>
                                    </li>
                            <?php
                        }
                    } ?>
            </ul>
        </div>
        <?php
    }
    ?>
</section>