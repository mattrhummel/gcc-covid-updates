<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*/
get_header(); ?>
<div class="content-area">
  
  <div class="entry-content" id="main">
    
    <div class="row expanded">
      
      <?php //Page Heading
      the_content();
      ?>


<?php get_template_part( 'template-parts/content', 'promotions' );  ?>
  
<?php get_template_part( 'template-parts/content', 'news' );  ?>

 <div id="newsletter-form" class="reveal medium" data-reveal="">	 	 
<p><button class="close-button" type="button" data-close="" aria-label="Close modal"><span aria-hidden="true">×</span></button></p>	 	 
<img style="width: 100%;" src="https://germannacc.staging.wpengine.com/wp-content/uploads/home-sign-up.jpg" width="300" height="300" alt="germanna staffer demario speaking with a student" />	 	 
<p class="h4">Get the latest updates from Germanna</p>
<?php echo do_shortcode( '[wpforms id="43592"]' ); ?>	 	 
<p>By submitting this form, you are granting Germanna Community College permission to email you. You may unsubscribe at any time by clicking on a link included at the bottom of every email.</p>	 	 
</div>

</div>
</div>



<?php get_footer();