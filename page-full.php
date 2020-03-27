<?php
//Names the page template for each section
/*
Template Name: Full Width
*/
get_header(); ?>
<?php
while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <div class="content-area">
    
    <div class="entry-content" id="main">
      <div class="row expanded">
        <div class="columns small-12">
          
          <header>
              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
              <?php the_breadcrumb() ?> 
          </header>

        </div>
      </div>
      <?php //Page Heading
      get_template_part( 'template-parts/content', 'page-alert' );
      ?>
      <?php
      the_content();
      ?>
    </div>
  </div>
</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer();