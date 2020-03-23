<?php
//Names the page template for each section
/*
Template Name: Full Width
*/
get_header(); ?>
<?php
  while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  

  <div class="row gutter-small expanded content-area">

      <?php //Page Heading
  get_template_part( 'template-parts/content', 'page-heading' );
  ?>
    
    <div class="small-12 columns">

      <div class="entry-content" id="main" tabindex="0">
        <?php //Page Heading
        get_template_part( 'template-parts/content', 'page-alert' );
        ?>
        <?php
        the_content();
        ?>
      </div>
    </div>

    </div>


  </article>


<?php endwhile; // End of the loop. ?>

  <?php
  get_footer();