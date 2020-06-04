<?php
/**
* The header for our theme
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package gccwp-2018
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <?php
      get_template_part( 'template-parts/content', 'analytic-scripts' );
    ?>
  </head>
  
  <body id="bmm" <?php body_class(); ?>>

    <div id="skip">
      <a href="#main" class="show-on-focus"><?php esc_html_e('skip to content', 'gcc-wp-2018') ?></a>
    </div>

    <main>

       <a href="<?php bloginfo('url'); ?>" class="logo"><img src="<?php echo get_theme_mod( 'gcc_wp_2018_mobile_logo' ); ?> " alt="white germanna logo" height="80px" width="168px;" /></a>