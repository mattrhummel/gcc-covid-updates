<?php
/**
*
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: Covid Updates
*
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
      <div class="row expanded" style="padding-left: 10px; padding-right: 10px;">

        <?php //Page Heading
          get_template_part( 'template-parts/content', 'page-alert' );
        ?>

      </div>

      <?php
      the_content();
      ?>

<div class="row expanded" data-equalizer>
<div class="column medium-4">
<div class="callout large" data-equalizer-watch>

  <style>
    .widget .textwidget {
    padding: 0;
}
    .widget:first-of-type {
    background-color: #f9f9f9;

}
.widget h3 {
    padding: 0rem 1rem 1rem 0;
}
ul.alm-paging li.active a {
    background: #b22144 !important;
    border-color: #b22144 !important;
}
  </style>

   <?php dynamic_sidebar( 'covid-widgets' ); ?>

</div>
</div>
<div class="column medium-8">
<div class="callout large" data-equalizer-watch id="covid-post-container">

<h2 class="h3">Latest College Updates</h2>

<ul class="no-bullet">

  <?php echo do_shortcode( '[ajax_load_more paging="true" paging_show_at_most="4" paging_controls="true" paging_previous_label="<i class="fas fa-angle-left"></i>" paging_next_label="<i class="fas fa-angle-right"></i>" post_type="covid_19" posts_per_page="10"]'); 
  ?>

</ul>

</div>
</div>
</div>
           
  </div>
  </div>
</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer();