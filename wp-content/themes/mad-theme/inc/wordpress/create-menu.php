<?php
// Register Menu
if (function_exists( 'register_nav_menu' ) ) {
    register_nav_menu( 'Main-menu', 'Este é o menu príncipal do site.' );
}
// -------------------------------
// CRIAÇÃO AUTOMATICA DE MENU PRINCIPAL
// checa se o menu existe:
$menu_name = 'Main-menu';
$menu_exists = wp_get_nav_menu_object( $menu_name );
// Se não existe, crie:
if( !$menu_exists){
    $menu_id = wp_create_nav_menu($menu_name);
    // Set up default menu items
    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('Home'),
        'menu-item-classes' => '',
        'menu-item-url' => home_url( '/' ),
        'menu-item-status' => 'publish'));
}