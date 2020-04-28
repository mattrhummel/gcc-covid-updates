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

<ul class="tabs" data-tabs id="pathways-list">
  <li class="tabs-title is-active"><a href="#business" aria-selected="true">Business</a></li>
  <li class="tabs-title"><a data-tabs-target="logos" href="#health-science">Health Science</a></li>
  <li class="tabs-title"><a data-tabs-target="humanities-and-arts" href="#humanities-and-arts">Humanities & Arts</a></li>
  <li class="tabs-title"><a data-tabs-target="it-and-technical-studies" href="#it-and-technical-studies">IT & Technical Studies</a></li>
  <li class="tabs-title"><a data-tabs-target="public-service" href="#public-service">Public Service</a></li>
  <li class="tabs-title"><a data-tabs-target="science-and-engineering" href="#science-and-engineering">Science and Engineering</a></li>
</ul>

<div class="tabs-content" data-tabs-content="pathways-list">
<div class="tabs-panel is-active" id="business">
    
<?php 
$args = 
    array(
        'posts_per_page' => -1,
        'post_type' => 'gcc_programs',
        'tax_query' => array(
            array(
                'taxonomy' => 'pathway_names',
                'field' => 'slug',
                'terms' => array( 'business-pathway' ),
            )
        )
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
  <div class="tabs-panel" id="health-science">
    <?php 
$args = 
    array(
        'posts_per_page' => -1,
        'post_type' => 'gcc_programs',
        'tax_query' => array(
            array(
                'taxonomy' => 'pathway_names',
                'field' => 'slug',
                'terms' => array( 'health-science-pathway' ),
            )
        )
    );


$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) { ?>

<div class="row expanded" data-equalizer style="padding-left: 10px; padding-right: 10px;">

  <h2><?php _e('Health Science Pathways', 'gcc-wp-2018'); ?></h2>
 
  <?php
    while ( $the_query->have_posts() ) {
    $the_query->the_post();
        ?>

 <div class="columns medium-4">
  <div class="card" data-equalizer-watch>

  <div class="card-divider">
      <?php the_title(); ?>
  </div>
    <div class="card-section">
     
        <p class="h3">Department Dean</p>
        <p><?php the_field( 'department_dean' );?></p>

        <p class="h3">Program Chair</p>
        <p><?php the_field( 'program_chair' ); ?></p>

        <p class="h3">Pathway Type</p>
        <p><?php the_field( 'pathway_type' ); ?></p>

        <h3 class="h4">Financial Aid & Tuition Details</h3>
      
        <p>Financial Aid Eligible: <?php the_field( 'financial_aid_eligible' ); ?></p>
        <p>Number of Credits: <?php the_field('number_of_credits'); ?></p>
        <p>Program Cost: $<?php the_field('program_cost'); ?></p>
        <p>Options: <?php the_field( 'full_or_part_time' ); ?></p>

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
  <div class="tabs-panel" id="humanities-and-arts">
    <?php 
$args = 
    array(
        'posts_per_page' => -1,
        'post_type' => 'gcc_programs',
        'tax_query' => array(
            array(
                'taxonomy' => 'pathway_names',
                'field' => 'slug',
                'terms' => array( 'humanities-and-arts-pathway' ),
            )
        )
    );


$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) { ?>

<div class="row expanded" data-equalizer style="padding-left: 10px; padding-right: 10px;">

  <h2><?php _e('Humanities and Arts Pathways', 'gcc-wp-2018'); ?></h2>
 
  <?php
    while ( $the_query->have_posts() ) {
    $the_query->the_post();
        ?>

 <div class="columns medium-4">
   <div class="card" data-equalizer-watch>

  <div class="card-divider">
      <?php the_title(); ?>
  </div>
    <div class="card-section">
     
        <p class="h3">Department Dean</p>
        <p><?php the_field( 'department_dean' );?></p>

        <p class="h3">Program Chair</p>
        <p><?php the_field( 'program_chair' ); ?></p>

        <p class="h3">Pathway Type</p>
        <p><?php the_field( 'pathway_type' ); ?></p>

        <h3 class="h4">Financial Aid & Tuition Details</h3>
      
        <p>Financial Aid Eligible: <?php the_field( 'financial_aid_eligible' ); ?></p>
        <p>Number of Credits: <?php the_field('number_of_credits'); ?></p>
        <p>Program Cost: $<?php the_field('program_cost'); ?></p>
        <p>Options: <?php the_field( 'full_or_part_time' ); ?></p>

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
   <div class="tabs-panel" id="it-and-technical-studies">
     <?php 
$args = 
    array(
        'posts_per_page' => -1,
        'post_type' => 'gcc_programs',
        'tax_query' => array(
            array(
                'taxonomy' => 'pathway_names',
                'field' => 'slug',
                'terms' => array( 'it-and-technical-studies-pathway' ),
            )
        )
    );


$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) { ?>

<div class="row expanded" data-equalizer style="padding-left: 10px; padding-right: 10px;">

  <h2><?php _e('IT and Technical Studies Pathways', 'gcc-wp-2018'); ?></h2>
 
  <?php
    while ( $the_query->have_posts() ) {
    $the_query->the_post();
        ?>

 <div class="columns medium-4">
   <div class="card" data-equalizer-watch>

  <div class="card-divider">
      <?php the_title(); ?>
  </div>
    <div class="card-section">
     
        <p class="h3">Department Dean</p>
        <p><?php the_field( 'department_dean' );?></p>

        <p class="h3">Program Chair</p>
        <p><?php the_field( 'program_chair' ); ?></p>

        <p class="h3">Pathway Type</p>
        <p><?php the_field( 'pathway_type' ); ?></p>

        <h3 class="h4">Financial Aid & Tuition Details</h3>
      
        <p>Financial Aid Eligible: <?php the_field( 'financial_aid_eligible' ); ?></p>
        <p>Number of Credits: <?php the_field('number_of_credits'); ?></p>
        <p>Program Cost: $<?php the_field('program_cost'); ?></p>
        <p>Options: <?php the_field( 'full_or_part_time' ); ?></p>

    </div>
  </div>
 </div>

<?php  }
}  ?>

</div>

<?php /* Restore original Post Data */
wp_reset_postdata();
?>

<div class="tabs-panel" id="public-service">
 <?php 
$args = 
    array(
        'posts_per_page' => -1,
        'post_type' => 'gcc_programs',
        'tax_query' => array(
            array(
                'taxonomy' => 'pathway_names',
                'field' => 'slug',
                'terms' => array( 'public-service-pathway' ),
            )
        )
    );

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) { ?>

<div class="row expanded" data-equalizer>

  <h2><?php _e('Public Service Pathways', 'gcc-wp-2018'); ?></h2>
 
  <?php
    while ( $the_query->have_posts() ) {
    $the_query->the_post();
        ?>

 <div class="columns medium-4">
   <div class="card" data-equalizer-watch>

  <div class="card-divider">
      <?php the_title(); ?>
  </div>
    <div class="card-section">
     
        <p class="h3">Department Dean</p>
        <p><?php the_field( 'department_dean' );?></p>

        <p class="h3">Program Chair</p>
        <p><?php the_field( 'program_chair' ); ?></p>

        <p class="h3">Pathway Type</p>
        <p><?php the_field( 'pathway_type' ); ?></p>

        <h3 class="h4">Financial Aid & Tuition Details</h3>
      
        <p>Financial Aid Eligible: <?php the_field( 'financial_aid_eligible' ); ?></p>
        <p>Number of Credits: <?php the_field('number_of_credits'); ?></p>
        <p>Program Cost: $<?php the_field('program_cost'); ?></p>
        <p>Options: <?php the_field( 'full_or_part_time' ); ?></p>

    </div>
  </div>
 </div>

<?php  }
}  ?>


<?php /* Restore original Post Data */
wp_reset_postdata();

?>
<div class="tabs-panel" id="science-and-engineering-pathway">
       
<?php 
$args = 
    array(
        'posts_per_page' => -1,
        'post_type' => 'gcc_programs',
        'tax_query' => array(
            array(
                'taxonomy' => 'pathway_names',
                'field' => 'slug',
                'terms' => array( 'science-and-engineering-pathway' ),
            )
        )
    );

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) { ?>

<div class="row expanded" data-equalizer style="padding-left: 10px; padding-right: 10px;">

  <h2><?php _e('Science and Engineering Pathways', 'gcc-wp-2018'); ?></h2>
 
  <?php
    while ( $the_query->have_posts() ) {
    $the_query->the_post();
        ?>

 <div class="columns medium-4">
   <div class="card" data-equalizer-watch>

  <div class="card-divider">
      <?php the_title(); ?>
  </div>
    <div class="card-section">
     
        <p class="h3">Department Dean</p>
        <p><?php the_field( 'department_dean' );?></p>

        <p class="h3">Program Chair</p>
        <p><?php the_field( 'program_chair' ); ?></p>

        <p class="h3">Pathway Type</p>
        <p><?php the_field( 'pathway_type' ); ?></p>

        <h3 class="h4">Financial Aid & Tuition Details</h3>
      
        <p>Financial Aid Eligible: <?php the_field( 'financial_aid_eligible' ); ?></p>
        <p>Number of Credits: <?php the_field('number_of_credits'); ?></p>
        <p>Program Cost: $<?php the_field('program_cost'); ?></p>
        <p>Options: <?php the_field( 'full_or_part_time' ); ?></p>

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