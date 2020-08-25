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

<?php
            $args= array(
            'post_type' => 'gcc_programs',
            'posts_per_page'=> -1,
            'orderby' => 'title',
            'order' => 'ASC',
            );
            ?>
            <?php
            $programs = new WP_Query($args);
            if(is_array($programs->posts) && !empty($programs->post)) {
            foreach($programs->posts as $programs->post) {
            $post_taxs = wp_get_post_terms($programs->post->ID, 'pathway_names', array("fields" => "all"));
            if(is_array($post_taxs) && !empty($post_taxs)) {
            foreach($post_taxs as $post_tax) {
            $program_taxs[$post_tax->slug] = $post_tax->name;
            }
            }
            }
            }
            ?>
 <div class="filters">
<div class="row expanded">
<div class="columns">
<div class="callout secondary">
<div class="row expanded">
<div class="columns medium-3">
<label class="h5">By Goal</label>
<select class="filters-select"><option value="">All</option>
  <option value=".career-preparation">Career preparation</option>
  <option value=".four-year-transfer">Four-year transfer</option>
</select>
</label>
</div>
<div class="columns medium-3">
<label class="h5">By Career Pathway</label>
<select class="filters-select">
  <option value="*">All</option>
  <option value=".humanities-and-arts-pathway">Arts &amp; Humanities</option>
  <option value=".business-pathway" selected>Business</option>
  <option value=".social-science-and-education">Education &amp; Social Science</option>
  <option value=".health-science-pathway">Healthcare</option>
  <option value=".it-and-technical-studies-pathway">IT &amp; Cybersecurity</option>
  <option value=".public-service-pathway">Public Service</option>
  <option value=".science-and-engineering-pathway">Science &amp; Engineering</option>
</select>
</div>
<div class="columns medium-3">
<label class="h5">By Degree Type</label>
<select class="filters-select">
  <option value="*">All</option>
  <option value=".associate-degree">Associate Degree</option>
  <option value=".certificate">Certificate</option>
</select>
</div>
<div class="columns medium-3">
<label class="h5">By Delivery</label>
<select class="filters-select">
<option value=".online-option">100% Online Option</option>
<option value=".any-option">Any Option</option>
</select>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="isotope-list">
<?php
      while($programs->have_posts()) : $programs->the_post();
      $idd = get_the_ID();
      $item_classes = '';
      $item_cats = get_the_terms($post->ID, 'pathway_names');
      if($item_cats):     
      foreach($item_cats as $item_cat) {
      $item_classes .= $item_cat->slug . ' '; 
?>
<div class="<?php echo $item_classes?> item" style="min-width: 100%;">
<div class="row expanded" data-equalizer>
<div class="columns medium-7">
<div class="callout large" data-equalizer-watch>
<h2><?php the_title();?></h2>
<h3 class="subheader"><?php the_field( 'program_degree' );?><sup><span data-tooltip tabindex="1" title=""><i class="h5 fa fa-info-circle" aria-hidden="true" style="color:#376d66;"></i> </span></sup></h3>
<p class="lead"><?php the_field( 'program_description' ); ?></p>
<div class="row expanded">
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
<div class="columns medium-6">
<?php if( get_field('career_options') ): ?>
<h3 class="subheader h4">Careers</h3>
<?php the_field( 'career_options' ); ?>
<p><a href="<?php the_field( 'career_information_url' ); ?>" class="button hollow"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Explore Careers</a></p>
<?php endif; ?>
</div>
</div>
</div>
</div>

<div class="columns medium-5">
<div class="callout alert large" data-equalizer-watch>
<ul class="no-bullet">
<?php if( get_field('online_degree') == 'yes' ) { ?>
<li class="label"><i class="fa fa-laptop-code" aria-hidden="true"></i><?php _e('Complete 100% Online','gcc-wp-2018') ?></li>
<?php } ?>
<?php if( get_field('accelerated_program') == 'yes' ) { ?>
<li class="label"><i class="fa fa-fast-forward" aria-hidden="true"></i><?php _e('Accelerated, 100% Online Option','gcc-wp-2018'); ?></li>
<?php } ?>
 <?php if( get_field('financial_aid_eligible') == 'yes' ) { ?><li class="label"><i class="fa fa-check-circle" aria-hidden="true"></i><?php _e(' Eligible for Financial Aid', 'gcc-wp-2018'); ?></li>
<?php } ?> 
</ul>

<h3 class="subheader h4">Flexible</h3>
<ul class="no-bullet">
<?php if( get_field('time_to_complete_text') == 'yes' ) { ?>
<li><i class="fa fa-hourglass" aria-hidden="true"></i><?php the_field( 'time_to_complete_text' ); ?>
</li>
<?php } ?> 
<?php if( get_field('schedule_amount_text') == 'yes' ) { ?>
<li><i class="fa fa-clock" aria-hidden="true"></i><?php the_field( 'schedule_amount_text' ); ?>
</li>
<?php } ?> 
<?php if( get_field('semester_start_date_text') == 'yes' ) { ?><li><i class="fa fa-calendar" aria-hidden="true"></i><?php the_field( 'semester_start_date_text' ); ?>
</li>
<?php } ?> 
</ul>

<h3 class="subheader h4">Affordable</h3>
<ul class="no-bullet">
<li><i class="fa fa-donate" aria-hidden="true"></i> <strong><?php the_field( 'program_cost' ); ?></strong> <?php _e(', estimated total program cost','gcc-wp-2018'); ?></li>
</ul></div>
</p></div>
</div>
</div>

<?php  }

endif;

?>
<?php wp_reset_query(); ?>
<?php endwhile;  
?>

</div>
  
</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer();