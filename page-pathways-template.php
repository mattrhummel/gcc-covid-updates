<?php
/**
*
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: Programs of Study List
*
*/
get_header();
while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="row expanded content-area">
    <div class="columns small-12 float-left">
      <header>
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <?php the_breadcrumb() ?>
      </header>
    </div>
  </div>
  
<div class="row expanded" data-equalizer>
<div class="columns medium-7">
<div class="callout large" data-equalizer-watch>
<h2>Your future is bright</h2>
<p class="lead">Up-skill, re-skill or skill-up at Germanna through <strong>60+ career programs</strong>. Or start working toward your bachelor&#8217;s degree through <strong>six</strong> majors designed to transfer. Take advantage of <strong>guaranteed transfer agreements</strong> with top Virginia four-year schools.</p>
</div>
</div>
<div class="columns medium-5">
<div class="hide-for-small-only callout" style="background-image: url('/wp-content/uploads/ShortpixelBackups/wp-content/uploads/revslider/diversity-slider/bhm-slide-2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;" data-equalizer-watch=""> 
</div>
</div>
</div>



<div class="row expanded">
<div class="columns">
<div class="callout secondary">

<?php do_action('show_beautiful_filters'); ?>

</div>
</div>
</div>
</div>
</div>

 <?php

$args = array(
  'post_type' => 'gcc_programs',
  'orderby'     => 'TITLE',
  'order'       => 'ASC',
  'tax_query' => array(
    array(
      'taxonomy' => 'pathway_names',
      'field'    => 'slug',
      'terms'    => $term,
    ),
  ),
);
$query = new WP_Query( $args );

  if($query->have_posts()) { 

    while($query->have_posts()) : $query->the_post();
      
?>

<div class="row expanded" data-equalizer>
<div class="columns medium-7">
<div class="callout large" data-equalizer-watch>
<h2><?php the_title();?></h2>
<h3 class="subheader"><?php the_field( 'program_degree' );?> <sup><span data-tooltip tabindex="1" title="<?php the_field( 'degree_info_text' ); ?>"><i class="h5 fa fa-info-circle" aria-hidden="true" style="color:#376d66;"></i> </span></sup></h3>
<p class="lead"><?php the_field( 'program_description' ); ?></p>


<div class="show-for-small-only">
  <ul class="accordion"  data-accordion data-allow-all-closed="true">
<li class="accordion-item" data-accordion-item>
   <a href="#" class="accordion-title">Learn more</a>
  <div class="accordion-content" data-tab-content>
<div class="row expanded">
<div class="columns medium-6">
<?php if( get_field('career_options') ): ?>
<h3 class="subheader h2">Careers</h3>
<?php the_field( 'career_options' ); ?>
<p><a href="<?php the_field( 'career_information_url' ); ?>" class="button hollow" style="margin-top: 10px;"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Explore Careers</a></p>
<?php endif; ?>
</div>
<div class="columns medium-6">
<?php if( get_field('transfer_partners') ): ?>
<h3 class="subheader h2">Transfer Partners</h3>
<?php the_field( 'transfer_partners' ); ?>
<p><a href="/transfer-services/" class="button hollow"><i class="fa fa-arrow-circle-right" aria-hidden="true"  style="margin-top: 10px;"></i> Explore college transfer</a> </p>
</p>
<?php endif; ?>
</div>
<div class="columns medium-6">
<?php if( get_field('sample_courses') ): ?>
<h3 class="subheader h2">Sample Courses</h3>
<?php the_field( 'sample_courses' ); ?>
<p><a href="<?php the_field( 'curriculum_url' ); ?>" class="button hollow"  style="margin-top: 10px;"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> View full curriculum</a></p>
<?php endif; ?>
</div>
</div>
</div>
</li>
</ul>
</div>

<div class="hide-for-small-only">
<div class="row expanded">
<div class="columns medium-6">
<?php if( get_field('career_options') ): ?>
<h3 class="subheader h4">Careers</h3>
<?php the_field( 'career_options' ); ?>
<p><a href="<?php the_field( 'career_information_url' ); ?>" class="button hollow"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Explore Careers</a></p>
<?php endif; ?>
</div>
<div class="columns medium-6">
<?php if( get_field('transfer_partners') ): ?>
<h3 class="subheader h4">Transfer Partners</h3>
<?php the_field( 'transfer_partners' ); ?>
<p><a href="/transfer-services/" class="button hollow"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Explore college transfer</a> </p>
</p>
<?php endif; ?>
</div>
<div class="columns medium-6">
<?php if( get_field('sample_courses') ): ?>
<h3 class="subheader h4">Sample Courses</h3>
<?php the_field( 'sample_courses' ); ?>
<p><a href="<?php the_field( 'curriculum_url' ); ?>" class="button hollow"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> View full curriculum</a></p>
<?php endif; ?>
</div>
</div>
</div>

</div>
</div>

<div class="columns medium-5">
  <style>
    .label {
      margin-bottom:  .2rem;
    }
  </style>
<div class="callout alert large" data-equalizer-watch>
<ul class="no-bullet">
<?php if( get_field('online_degree') == 'yes' ) { ?>
<li class="label"><i class="fa fa-laptop-code" aria-hidden="true"></i><?php _e('Complete 100% Online','gcc-wp-2018') ?></li>
<?php } ?>
<?php if( get_field('accelerated_program') == 'yes' ) { ?>
<li class="label"><i class="fa fa-fast-forward" aria-hidden="true"></i> <?php _e('Accelerated, 100% Online Option','gcc-wp-2018'); ?></li>
<?php } ?>
 <?php if( get_field('financial_aid_eligible') == 'yes' ) { ?><li class="label"><i class="fa fa-check-circle" aria-hidden="true"></i><?php _e(' Eligible for Financial Aid', 'gcc-wp-2018'); ?></li>
<?php } ?> 
</ul>

<h3 class="subheader h4">Flexible</h3>
<ul class="no-bullet">
<?php if( get_field('time_to_complete_text')) { ?>
<li><i class="fa fa-hourglass" aria-hidden="true"></i>     <?php the_field( 'time_to_complete_text' ); ?>
</li>
<?php } ?> 
<?php if( get_field('schedule_amount_text')) { ?>
<li><i class="fa fa-clock" aria-hidden="true"></i> <?php the_field( 'schedule_amount_text' ); ?>
</li>
<?php } ?> 
<?php if( get_field('semester_start_date_text')) { ?><li><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_field( 'semester_start_date_text' ); ?>
</li>
<?php } ?> 
</ul>

<h3 class="subheader h4">Affordable</h3>
<ul class="no-bullet">
<li><i class="fa fa-donate" aria-hidden="true"></i> <strong><?php the_field( 'program_cost' ); ?></strong> <?php _e(', estimated total program cost','gcc-wp-2018'); ?></li>
</ul></div>
</p></div>
</div>


  <?php endwhile; 
  wp_reset_query();

} 

?>
</div>
</div>
  
</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer();