<?php
/*
* Post Types
*/
function create_post_types() {
  register_post_type( 'servicos',
    array(
      'labels'        => array(
      'name'          => __( 'Serviços' ),
      'singular_name' => __( 'Serviço' )
      ),
      'public'        => true,
      'has_archive'   => false,
      'hierarchical'  => false,
      'exclude_from_search' => true,
      'capability_type' => 'post',
      'publicly_queryable' => true,
      'rewrite'       => array('slug' => 'servicos'),
      'menu_icon'     => 'dashicons-cart',
      'supports'      => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'revisions' ),
    )
  );
  register_post_type( 'carousel',
    array(
      'labels'        => array(
      'name'          => __( 'Slider' ),
      'singular_name' => __( 'Slider' )
      ),
      'public'        => true,
      'has_archive'   => false,
      'hierarchical'  => false,
      'exclude_from_search' => true,
      'capability_type' => 'post',
      'publicly_queryable' => false,
      'rewrite'       => array('slug' => 'carousel'),
      'menu_icon'     => 'dashicons-format-image',
      'supports'      => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'revisions' ),
    )
  );
  register_post_type( 'depoimentos',
    array(
      'labels'        => array(
      'name'          => __( 'Depoimentos' ),
      'singular_name' => __( 'Depoimento' )
      ),
      'public'        => true,
      'has_archive'   => false,
      'hierarchical'  => false,
      'exclude_from_search' => true,
      'capability_type' => 'post',
      'publicly_queryable' => false,
      'rewrite'       => array('slug' => 'depoimentos'),
      'menu_icon'     => 'dashicons-smiley',
      'supports'      => array( 'title','editor', 'thumbnail', 'revisions' ),
    )
  );
  register_post_type( 'clientes',
    array(
      'labels'        => array(
      'name'          => __( 'Clientes' ),
      'singular_name' => __( 'Cliente' )
      ),
      'public'        => true,
      'has_archive'   => false,
      'hierarchical'  => false,
      'exclude_from_search' => true,
      'capability_type' => 'post',
      'publicly_queryable' => false,
      'rewrite'       => array('slug' => 'clientes'),
      'menu_icon'     => 'dashicons-groups',
      'supports'      => array( 'title', 'thumbnail', 'revisions' ),
    )
  );
  register_post_type( 'cases',
    array(
      'labels'        => array(
      'name'          => __( 'Cases' ),
      'singular_name' => __( 'Case' )
      ),
      'public'        => true,
      'has_archive'   => false,
      'hierarchical'  => false,
      'exclude_from_search' => true,
      'capability_type' => 'post',
      'publicly_queryable' => false,
      'rewrite'       => array('slug' => 'cases'),
      'menu_icon'     => 'dashicons-slides',
      'supports'      => array( 'title', 'editor', 'thumbnail', 'revisions' ),
    )
  );
  register_post_type( 'nossa-historia',
    array(
      'labels'        => array(
      'name'          => __( 'Nossas histórias' ),
      'singular_name' => __( 'Nossa história' )
      ),
      'public'        => true,
      'has_archive'   => false,
      'hierarchical'  => false,
      'exclude_from_search' => true,
      'capability_type' => 'post',
      'publicly_queryable' => false,
      'rewrite'       => array('slug' => 'nossa-historia'),
      'menu_icon'     => 'dashicons-welcome-widgets-menus',
      'supports'      => array( 'title', 'editor', 'thumbnail', 'revisions' ),
    )
  );
  register_post_type( 'escritorio',
    array(
      'labels'        => array(
      'name'          => __( 'Escritórios' ),
      'singular_name' => __( 'Escritório' )
      ),
      'public'        => true,
      'has_archive'   => false,
      'hierarchical'  => false,
      'exclude_from_search' => true,
      'capability_type' => 'post',
      'publicly_queryable' => false,
      'rewrite'       => array('slug' => 'escritorio'),
      'menu_icon'     => 'dashicons-admin-home',
      'supports'      => array( 'title' ),
    )
  );
  flush_rewrite_rules();
}
add_action( 'init', 'create_post_types' );

function create_taxonomy() {
    register_taxonomy( 'tipo-de-produto', 'produto', array(
        'label'        => __( 'Tipos de produto', 'textdomain' ),
        'rewrite'      => array( 'slug' => 'tipo-de-produto' ),
        'hierarchical' => true,
    ) );
}
//add_action( 'init', 'create_taxonomy', 0 );