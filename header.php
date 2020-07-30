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

  <div id="request-info-form" class="reveal" data-reveal="" aria-labelledby="request-info-formHeader">
      <h2 id="request-info-formHeader"><?php _e('Request Information', 'gcc-wp-2018') ?></h2>
      <p><?php _e('Tell us more about yourself and your goals. Fill out our form below to receive more information about our programs, the cost of attendance and how to get started', 'gcc-wp-2018') ?></p>
     <?php echo do_shortcode('[wpforms id="27548"]') ?>
      <p><small><?php _e('By submitting this form, you are granting Germanna Community College permission to email you. You may unsubscribe at any time by clicking on a link included at the bottom of every email.', 'gcc-wp-2018') ?></small></p>
      <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

    <div class="off-canvas-wrapper no-js">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <?php main_menu(); //main sidebar navigation ?>
        <div class="off-canvas-content" data-off-canvas-content>
          <?php  //quicklinks
          get_template_part( 'template-parts/content', 'quicklinks' );
          ?>

          <main class=" clearfix">

