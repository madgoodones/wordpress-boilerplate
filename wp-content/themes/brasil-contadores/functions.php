<?php 
require_once('inc/protect-abspath.php');
require_once('inc/navwalker/wp_bootstrap_navwalker.php');

// Vars
$uri = get_template_directory_uri();

/* * * * * * *
*   Inserção de Styles e Scripts
* * * * * * * * * * * * * * * * * * * */
// Estilo pagina de login
function wpLoginStyle() {
  wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/inc/wordpress/wp-login.style.css' );
}
add_action( 'login_enqueue_scripts', 'wpLoginStyle' );
/*Função que altera a URL, trocando pelo endereço do seu site*/
function my_login_logo_url() {
  return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
/*Função que adiciona o nome do seu site, no momento que o mouse passa por cima da logo*/
function my_login_logo_url_title() {
  return 'Voltar para Home';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
/* * * * * * *
*   Configurações do tema
* * * * * * * * * * * * * * * * * * * */
// Setar configurações do tema
@ini_set( 'upload_max_size' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'max_execution_time', '3000' );

// Modificando funções do wordpress
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 480, 480 );
add_image_size( 'low-thumbnail', 200, 200, true );
add_image_size( 'high-thumbnail', 480, 480, true );
add_image_size( 'low-medium', 768, 480, true );
add_image_size( 'high-medium', 1170, 568, true );
add_image_size( 'low-slider', 1270, 400, true );
add_image_size( 'high-slider', 1270, 768, true );
add_image_size( 'testimonials', 768, 400, true );
add_image_size( 'cases', 768, 768, true );
show_admin_bar(false);

// Favicon WP-ADMIN e LOGIN
function adicionaFavicon() {
  $favicon_url = $uri . '/favicon.ico';
  echo '<link rel="shortcut icon" href="' . $favicon_url . '">';
  echo '<link rel="icon" href="' . $favicon_url . '">';
}
add_action('login_head', 'adicionaFavicon');
add_action('admin_head', 'adicionaFavicon');

// Habilidar uploads para tipos de extensão diferentes
function  habilitarMimes ( $mimes )  {
  $mimes [ 'svg' ]  =  'image/svg+xml' ;
  return $mimes ;
}
add_filter ( 'upload_mimes' ,  'habilitarMimes' ) ;

/* * * * * * *
*   Funcões do tema
* * * * * * * * * * * * * * * * * * * */
// Criar menu
require_once('inc/wordpress/create-menu.php');
// Criar post types
require_once('inc/wordpress/create-post-types.php');
// Criar post types
require_once('inc/wordpress/setting-theme.php');

// Remover informações padrões do wordpress
function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'dns-prefetch' );
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'rest_output_link_wp_head');
remove_action( 'wp_head', 'wp_oembed_add_discovery_links');
function remove_extra_informations()
{
    remove_action( 'wp_head', 'wp_generator' ); // Remove versão do Wordpress
}
add_action( 'after_setup_theme', 'remove_extra_informations' );
function remove_src_version( $src )
{
    global $wp_version;
    $version_str = '?ver='.$wp_version;
    $version_str_offset = strlen( $src ) - strlen( $version_str );
    if( substr( $src, $version_str_offset ) == $version_str )
    {
        return substr( $src, 0, $version_str_offset );
    }
    else
    {
        return $src;
    }
}
add_filter( 'script_loader_src', 'remove_src_version' );
add_filter( 'style_loader_src', 'remove_src_version' );

// Atualizando Resumos
function new_excerpt_more($more) {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');