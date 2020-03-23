d<?php
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
    <!-- Google Tag Manager -->
    
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T2KLMW');</script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2KLMW"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php if (is_page('113') || $post->post_parent == '113') { ?>

       <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-11698249-10"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-11698249-10');
        </script>

    <?php } ?>

        <?php if (is_page('108') || $post->post_parent == '108') { ?>

      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-11698249-11"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-11698249-11');
      </script>

      <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TSPLS9V');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSPLS9V"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <?php } ?>
    
  </head>
  
  <body <?php body_class(); ?>>
    <div id="skip">
      <a href="#main" class="show-on-focus"><?php esc_html_e('skip to content', 'gcc-wp-2018') ?></a>
    </div>

<?php if( get_field('banner_text', 'options') ): ?>  
<div id="bannerAnnouncement" class="bottom-banner hide-for-print" data-closable>
      
      <div class="row expanded">
        <div class="row">

          <div class="small-12 medium-8 columns ">
            
            <p><?php the_field( 'banner_text', 'options' ); ?></p>
            
          </div>

          <div class="small-12 medium-4 columns">
            <div class="button-group show-for-medium">
              
              <a href="<?php echo the_field( 'banner_button_1_url', 'options' ); ?>" class="button banner-button-hollow apply-button"> 
                  <?php the_field( 'banner_button_1_text', 'options' ); ?>
              </a>

              <a href="<?php echo the_field( 'banner_button_2_url', 'options' ); ?>" class="button banner-button request-button"> 
                  <?php the_field( 'banner_button_2_text', 'options' ); ?>
              </a>

            </div>
          </div>
          
          <button id="closeButton" class="close-button" aria-label="Dismiss alert" type="button" data-close>
          <span aria-hidden="true">&times;</span>
          </button>

        </div>
      </div>
</div>

<?php endif; ?>

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
          <main>