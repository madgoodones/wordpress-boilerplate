<?php
/*
* Post Types
*/
function create_post_types() {
  register_post_type( 'produto',
    array(
      'labels'        => array(
      'name'          => __( 'Produto' ),
      'singular_name' => __( 'Produto' )
      ),
      'public'        => true,
      'has_archive'   => false,
      'hierarchical'  => false,
      'exclude_from_search' => false,
      'capability_type' => 'post',
      'publicly_queryable' => true,
      'rewrite'       => array('slug' => 'produto'),
      'menu_icon'     => 'dashicons-cart',
      'supports'      => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'revisions' ),
    )
  );
}
// add_action( 'init', 'create_post_types' );

function create_taxonomy() {
    register_taxonomy( 'tipo-de-produto', 'produto', array(
        'label'        => __( 'Tipos de produto', 'textdomain' ),
        'rewrite'      => array( 'slug' => 'tipo-de-produto' ),
        'hierarchical' => true,
    ) );
}
//add_action( 'init', 'create_taxonomy', 0 );