<?php
//Names the page template for each section
/*
Template Name: Black Minds Matter
*/
get_header( 'bmm' ); ?>
<?php
while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
      <div class="row expanded" id="main">

        <div class="columns large-10">

          <div class="row expanded" style="margin-top: 60px;">

            <div class="columns large-4">

              <?php dynamic_sidebar('black-minds-matter-widgets'); ?>

            </div>

          <div class="columns large-8">

            <style>
            h1,h2,h3,h4,h5,h6,p {

            color:  #ffffff;

            }

          </style>
                   
            <?php the_content(); ?>
        
         </div>

          </div>

        </div>
      
    </div>

</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer( 'bmm' );