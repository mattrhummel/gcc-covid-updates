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

    
<?php 
$args = 
    array(
        'posts_per_page' => -1,
        'post_type' => 'gcc_programs',
        'meta_key'    => 'online_degree',
        'meta_value'  => 'yes'
    );



$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) { ?>

<div class="row expanded" data-equalizer style="padding-left: 10px; padding-right: 10px;">

  <p class="h4"><?php _e('Business Pathways', 'gcc-wp-2018'); ?></p>
 
  <?php
    while ( $the_query->have_posts() ) {
    $the_query->the_post();
        ?>

 <div class="columns medium-4">
  <div class="card" data-equalizer-watch>

  <div class="card-divider">
      <h2 class="h5"><?php the_title(); ?></h2>
  </div>
    <div class="card-section">
     
        <p class="h6">Department Dean</p>
        <p><?php the_field( 'department_dean' );?></p>

        <p class="h6">Program Chair</p>
        <p><?php the_field( 'program_chair' ); ?></p>

        <p class="h6">Pathway Type</p>
        <p><?php the_field( 'pathway_type' ); ?></p>

        <h3 class="h6">Financial Aid & Tuition Details</h3>
      
        <p>Financial Aid Eligible: <?php the_field( 'financial_aid_eligible' ); ?></p>
        <p>Number of Credits: <?php the_field('number_of_credits'); ?></p>
        <p>Program Cost: $<?php the_field('program_cost'); ?></p>
        <p>Options: <?php the_field( 'full_or_part_time' ); ?></p>
        <p><a href="<?php the_field( 'curriculum_information_url' ); ?>"><?php _e('View Curriculum', 'gcc-wp-2018'); ?></a></p>
        <p><a href="<?php the_field( 'career_information_url' ); ?>"><?php _e('View Career Information', 'gcc-wp-2018'); ?></a></p>
    </div>
  </div>
 </div>

<?php  }
}  ?>

</div>

<?php /* Restore original Post Data */
wp_reset_postdata();

?>
</div>
 
 
   
</div>
</div>

    <?php //last modified page test
    $u_time = get_the_time('U');
    $u_modified_time = get_the_modified_time('U');
    if ($u_modified_time >= $u_time + 86400) { ?>
    <div class="row expanded entry-footer">
      <footer>
        <?php echo "<p>Last modified on ";
          the_modified_time('F j, Y');
        "</p> "; ?>
        <?php gcc_wp_2018_entry_footer(); ?>
      </footer>
    </div>
    <?php }; ?>
</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer();