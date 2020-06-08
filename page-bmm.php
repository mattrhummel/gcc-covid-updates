<?php
//Names the page template for each section
/*
Template Name: Black Minds Matter
*/
get_header( 'bmm' ); ?>
<?php
while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
      <div class="row expanded" id="main" class="content">

        <div class="columns small-12">

          <div class="row expanded" style="margin-top: 60px;" class="content">

            <div class="columns large-10">
         
              <?php
                the_content();
              ?>

          </div>

          </div>

        </div>
      
    </div>

</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer( 'bmm' );