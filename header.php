<?php
/**
* The header for our theme
*
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package gccwp-2018
*/
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>

<script type="text/javascript">
    window._monsido = window._monsido || {
        token: "lrvTEPRsbj3KzBDEpgbUnQ",
    };
</script>
<script type="text/javascript" async src="https://app-script.monsido.com/v2/monsido-script.js"></script>

  
  </head>
  
  <body <?php body_class(); ?>>
    <div id="skip">
      <a href="#main" class="show-on-focus"><?php esc_html_e('skip to content', 'gcc-wp-2018') ?></a>
    </div>

    <?php
      get_template_part( 'template-parts/content', 'weather-alert' );
    ?>

    <div class="off-canvas-wrapper no-js">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <?php main_menu(); //main sidebar navigation ?>
        <div class="off-canvas-content" data-off-canvas-content>
          <?php  //quicklinks
          get_template_part( 'template-parts/content', 'quicklinks' );
          ?>
          <main class=" clearfix">