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
<html class="no-js" <?php language_attributes(); ?>>
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
  
  <body <?php body_class(); ?>>

    <div id="skip">
      <a href="#main" class="show-on-focus"><?php esc_html_e('skip to content', 'gcc-wp-2018') ?></a>
    </div>

    <?php
      get_template_part( 'template-parts/content', 'weather-alert' );
    ?>

<?php if (is_page('home')) : ; ?>

<!-- <p><a data-open="exampleModal1">Click me for a modal</a></p>
 -->

<!--   <div class="bmm-banner" data-closable>
    
     <div class="logo">

        <a href="<?php bloginfo('url'); ?>"><img src="https://germannacc.staging.wpengine.com/wp-content/uploads/gcc-logo-white-small.svg" alt="white germanna logo" height="40" width="200"/></a>

      </div>

  <div class="callout secondary">
    
   <p><img src="https://www.germanna.edu/wp-content/uploads/black-minds-matter.png" alt="Black Minds Matter" height='45px' width="549px" /></p>

    <a class="button" href="/blackmindsmatter">Learn more</a>
    <p>
      <button class="continue" data-close aria-label="Close modal" type="button">
        <span class="fa fa-arrow-right" aria-hidden="true"></span>
      Continue to germanna.edu</button>
    </p>

  </div>
</div> -->

<?php endif; ?>

    <div class="off-canvas-wrapper no-js">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <?php main_menu(); //main sidebar navigation ?>
        <div class="off-canvas-content" data-off-canvas-content>
          <?php  //quicklinks
          get_template_part( 'template-parts/content', 'quicklinks' );
          ?>

          <main class=" clearfix">

