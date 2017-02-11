<?php
/*
* Post Types
*/
function create_post_types() {
  register_post_type( 'slug-name',
    array(
      'labels'        => array(
      'name'          => __( 'Name' ),
      'singular_name' => __( 'Singular Name' )
      ),
      'taxonomies'    => array('category'),
      'public'        => true,
      'has_archive'   => true,
      'rewrite'       => array('slug' => 'slug-name'),
      'menu_icon'     => 'dashicons-nametag',
      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'revisions' ),
    )
  );
}
// add_action( 'init', 'create_post_types' );