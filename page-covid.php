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

  </style>

   <?php dynamic_sidebar( 'covid-widgets' ); ?>

</div>
</div>
<div class="column medium-8">
<div class="callout large" data-equalizer-watch>

      <?php
          $args =  array (
          'post_type' => 'covid_19',
          'post_status' => 'publish',
          'orderby' => 'publish_date',
          'order' => 'DESC',
          'posts_per_page'=> 4,
        );
          ?>


<?php
          $query = new WP_Query( $args ); ?>
          <?php if ( $query->have_posts() ) : ?>

<h2 class="h3">Latest College Updates</h2>

  <ul class="no-bullet">

      <?php while ( $query->have_posts() ) : $query->the_post();?>
      
      <li>
        <a href="<?php the_permalink(); ?>"><h3 class="h4">
         <span class="subheader"><?php echo get_the_date(); ?></span><br />
           <?php the_title(); ?>
       </h3></a>
      </li>

    <?php endwhile; ?>

          <?php wp_reset_postdata(); ?>
          <?php else : ?>
          <?php endif; ?>

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