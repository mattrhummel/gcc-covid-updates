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
* Template Name: Home
*/
get_header(); ?>


<?php get_template_part( 'template-parts/content', 'promotions' );  ?>


	<?php // get_template_part( 'template-parts/content', 'pathways' );  ?>
<!-- 	<?php //get_template_part( 'template-parts/content', 'getstarted' ); ?>
 -->	

	<?php // get_template_part( 'template-parts/content', 'highlights' ); ?>

<?php
//highlights section
$highlights_heading = get_field('highlights_heading');
 ?>

<div id="highlights" class="row expanded">

<div class="highlights-content">

<div class="row expanded">

<div id="4080701046" class="column large-6 collapse">

<h2 class="text-center"><?php the_field('highlights_heading'); ?></h2>


   <?php

      $args =  array (

        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'DESC',
        'posts_per_page'=>6

      );

  ?>

  <?php

  $query = new WP_Query( $args ); ?>

  <?php if ( $query->have_posts() ) : ?>

  <?php while ( $query->have_posts() ) : $query->the_post();?>


    <div class="latest-post">
      
      <h3 class="post-title"><a href="<?php the_permalink(); ?>">   

        <?php the_title(); ?></a></h3>
        <p><?php echo get_the_date(); ?></p>


    </div>


<?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

<?php else : ?>

    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018'); ?></p>

<?php endif; ?>

    <a href="<?php esc_html_e('/blog/', 'gcc-wp-2018' ); ?>" class="button expanded"><?php esc_html_e('View all Highlights', 'gcc-wp-2018' ); ?></a>


</div>

<div  class="column large-6 collapse">

	<h2>Covid Updates</h2>

<?php

  $args =  array (

    'post_type' => 'covid_19',
    'post_status' => 'publish',
    'orderby' => 'publish_date',
    'order' => 'DESC',
    'posts_per_page'=>6

  );
  ?>

  <?php

  $query = new WP_Query( $args ); ?>

  <?php if ( $query->have_posts() ) : ?>

  <?php while ( $query->have_posts() ) : $query->the_post();?>


    <div class="latest-post">
      
      <h3 class="post-title"><a href="<?php the_permalink(); ?>">   

        <?php the_title(); ?></a></h3>
        <p><?php echo get_the_date(); ?></p>


    </div>

<?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

<?php else : ?>

    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018'); ?></p>

<?php endif; ?>


    <a href="<?php esc_html_e('/covid-19/', 'gcc-wp-2018' ); ?>" class="button expanded"><?php esc_html_e('View all Covid Updates', 'gcc-wp-2018' ); ?></a>

</div>

</div>

</div>

</div>
	  
<?php get_footer();