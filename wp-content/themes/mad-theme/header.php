<?php require_once('inc/protect-abspath.php') ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title><?php wp_title('-', true, 'right'); bloginfo(); ?></title>
<?php echo get_field('favicon') ? '<link rel="shortcut icon" href="' . get_field('favicon') . '">' : '' ?>
<?php echo get_field('favicon') ? '<link rel="icon" href="' . get_field('favicon') . '">' : '' ?>
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="theme-color" content="#313131">
<meta name="msapplication-navbutton-color" content="#313131">
<meta name="msapplication-TileColor" content="#313131">
<!-- Links -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>'/assets/builded/main.2609d0030e30775b0d84b59dd142fb8e.css'">
<link rel="alternate" href="<?php echo get_home_url() ?>" hreflang="pt-br">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<?php get_template_part('partials/part', 'menu') ?>