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

<?php get_template_part( 'template-parts/content', 'promotions' );  ?>

<div class="row expanded">
<div class="columns">

	<?php the_field( 'feature_banner' ); ?>

</div>
</div>
  
<?php get_template_part( 'template-parts/content', 'news' );  ?>

</div>
</div>



<?php get_footer();