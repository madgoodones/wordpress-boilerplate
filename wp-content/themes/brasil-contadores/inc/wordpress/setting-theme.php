<?php
function mytheme_customize_register( $wp_customize ) {

  // Redes sociais
  $wp_customize->add_section('social_register', array(
    'title' => __('Redes Sociais', 'social'),
    'description' => 'Controle de links das redes sociais. Os icones só apareceram quando houver um link.'
  ));
  // INSTAGRAM
  $wp_customize->add_setting('instagram_url', array(
    'default' => '#'
  ));
  $wp_customize->add_control('instagram_url', array(
    'label' => __('Instagram:', 'social'),
    'section' => 'social_register',
    'settings' => 'instagram_url'
  ));
  // FACEBOOK
  $wp_customize->add_setting('facebook_url', array(
    'default' => '#'
  ));
  $wp_customize->add_control('facebook_url', array(
    'label' => __('Facebook:', 'social'),
    'section' => 'social_register',
    'settings' => 'facebook_url'
  ));

  // Informações da empresa
  $wp_customize->add_section('infos_register', array(
    'title' => __('Informações da empresa', 'infos'),
    'description' => 'Informações da empresa.'
  ));
  // Resumo
  $wp_customize->add_setting('excerpt_about', array(
    'default' => 'Texto resumido de quem somos'
  ));
  $wp_customize->add_control('excerpt_about', array(
    'label' => __('Resumo sobre a Empresa:', 'infos'),
    'section' => 'infos_register',
    'settings' => 'excerpt_about',
    'type' => 'textarea'
  ));
    // Endereço
  $wp_customize->add_setting('address', array(
    'default' => 'Endereço da empresa.'
  ));
  $wp_customize->add_control('address', array(
    'label' => __('Endereço:', 'infos'),
    'section' => 'infos_register',
    'settings' => 'address',
    'type' => 'textarea'
  ));

  // Informações o tema
  $wp_customize->add_section('customs_theme_register', array(
    'title' => __('Personalização do tema', 'customs_theme'),
    'description' => 'Personalização do tema'
  ));
  // Blog
  $wp_customize->add_setting('blog_title', array(
    'default' => 'Título do blog'
  ));
  $wp_customize->add_control('blog_title', array(
    'label' => __('Título Blog:', 'customs_theme'),
    'section' => 'customs_theme_register',
    'settings' => 'blog_title',
    'type' => 'text'
  ));
  $wp_customize->add_setting('blog_excerpt', array(
    'default' => 'Descrição do blog'
  ));
  $wp_customize->add_control('blog_excerpt', array(
    'label' => __('Descrição Blog:', 'customs_theme'),
    'section' => 'customs_theme_register',
    'settings' => 'blog_excerpt',
    'type' => 'textarea'
  ));
  // Newsletter
  $wp_customize->add_setting('newsletter_title', array(
    'default' => 'Título para newsletter'
  ));
  $wp_customize->add_control('newsletter_title', array(
    'label' => __('Título Newsletter:', 'customs_theme'),
    'section' => 'customs_theme_register',
    'settings' => 'newsletter_title',
    'type' => 'text'
  ));
  $wp_customize->add_setting('newsletter_excerpt', array(
    'default' => 'Descrição para newsletter.'
  ));
  $wp_customize->add_control('newsletter_excerpt', array(
    'label' => __('Descrição Newsletter:', 'customs_theme'),
    'section' => 'customs_theme_register',
    'settings' => 'newsletter_excerpt',
    'type' => 'textarea'
  ));

}
//add_action( 'customize_register', 'mytheme_customize_register' );