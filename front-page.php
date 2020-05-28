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
      
    </div>

    <div class="row expanded">
<div class="columns">
<div class="callout warning large text-center">
<div class="row expanded" data-equalizer="">
<div class="columns medium-4">
<div class="stat"><i class="fa fa-user-graduate" aria-hidden="true"></i></div>
<h3>Explore careers</h3>
<p>Discover majors and in-demand careers based on your interests.</p>
<p><a class="button" href="https://germanna.emsicc.com/">Career Coach</a></p>
</div>
<div class="columns medium-4">
<div class="stat"><i class="fa fa-donate" aria-hidden="true"></i></div>
<h3>Calculate costs</h3>
<p>Save big by choosing Germanna. Compare our costs to other schools.</p>
<p><a class="button" href="https://www.vawizard.org/wizard/npc">Cost Calculator</a></p>
</div>
<div class="columns medium-4">
<div class="stat"><i class="fa fa-envelope-open-text" aria-hidden="true"></i></div>
<h3>Connect with us</h3>
<p>Keep in touch by signing up to receive our latest news and updates.</p>
<p><button class="button" data-toggle="newsletter-form">Sign Up</button></p>
</div>
</div>
</div>
</div>
</div>

<div id="newsletter-form" class="reveal medium" data-reveal="">
<p><button class="close-button" type="button" data-close="" aria-label="Close modal"><span aria-hidden="true">×</span></button></p>
<img style="width: 100%;" src="https://germannacc.staging.wpengine.com/wp-content/uploads/home-sign-up.jpg" width="300" height="300" />
<p class="h4">Get the latest updates from Germanna</p>

<?php echo do_shortcode( '[wpforms id="43666"]'); ?>

<p>By submitting this form, you are granting Germanna Community College permission to email you. You may unsubscribe at any time by clicking on a link included at the bottom of every email.</p>
</div>
    
    <?php get_template_part( 'template-parts/content', 'promotions' );  ?>

    
<?php get_template_part( 'template-parts/content', 'news' );  ?>

</div>
</div>

<?php get_footer();