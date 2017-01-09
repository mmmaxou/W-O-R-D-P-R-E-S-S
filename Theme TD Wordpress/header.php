<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/favicon.ico">

  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/main.css" charset="utf-8">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
    wp_nav_menu( array (
        'theme_location' => 'nav-main',
        'menu_class' => 'nav nav-main'
    ));

    get_template_part('partials/banner');
?>
    