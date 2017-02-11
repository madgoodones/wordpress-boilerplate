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
  wp_enqueue_style( 'custom-login', $uri . '/inc/wordpress/wp-login.style.css' );
}
add_action( 'login_enqueue_scripts', 'wpLoginStyle' );

// Carregar Scripts
wp_enqueue_script( 'js' , $uri . '/vendor/jquery/dist/jquery.min.js', false, null, true);
wp_enqueue_script( 'bundle' , $uri . '/assets/js/bundle.js', false, null, true);

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
show_admin_bar(false);

// Favicon WP-ADMIN e LOGIN
function adicionaFavicon() {
  $favicon_url = $uri . '/favicon.ico';
  echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
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

// Remover informações do wordpress
function remove_extra_informations()
{
    remove_action( 'wp_head', 'wp_generator' ); // Remove versão do Wordpress
}
add_action( 'after_setup_theme', 'remove_extra_informations' );

// Remover versões de Styles e Scripts
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