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
$args = array(
'post_status' => 'inherit',
'posts_per_page' => -1,
'post_type' => 'attachment',
);

$args['tax_query'] = array(

array(
    'taxonomy' => 'gcc_programs',
    'terms' => array( 'business' ),
    'field' => 'slug',
),

);

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) { ?>

<div class="row expanded" data-equalizer style="padding-left: 10px; padding-right: 10px;">

  <h2><?php _e('Business Pathways', 'gcc-wp-2018'); ?></h2>
 
  <?php
    while ( $the_query->have_posts() ) {
    $the_query->the_post();
        ?>

 <div class="columns medium-4">
  <div class="card" data-equalizer-watch style="text-align: center;">

    <?php echo wp_get_attachment_image( get_the_ID(), array('500', '500'), "", array( "class" => "thumbnail" ) );  ?>
   
    <?php $asset_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
    <div class="card-section" style="padding-top: 0;">
      <a href="<?php echo $asset_image_url; ?>" download><?php _e('Download', 'gcc-wp-2018'); ?> <?php echo get_the_title(); ?></a>
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
$args = array(
'post_status' => 'inherit',
'posts_per_page' => -1,
'post_type' => 'attachment',
);

$args['tax_query'] = array(

array(
    'taxonomy' => 'gcc_programs',
    'terms' => array( 'health-science' ),
    'field' => 'slug',
),

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
    <div class="card" data-equalizer-watch style="padding-top: 40px; text-align: center;">
  
    <?php echo wp_get_attachment_image( get_the_ID(), array('300', '200'), "", array( "class" => "thumbnail", "style" => "margin: 0 auto; padding:" ) );  ?>
  
  <?php $asset_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
    <div class="card-section">
      <a href="<?php echo $asset_image_url; ?>" download><?php _e('Download', 'gcc-wp-2018'); ?> <?php echo get_the_title(); ?></a>
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
$args = array(
'post_status' => 'inherit',
'posts_per_page' => -1,
'post_type' => 'attachment',
);

$args['tax_query'] = array(

array(
    'taxonomy' => 'gcc_programs',
    'terms' => array( 'humanities-and-arts' ),
    'field' => 'slug',
),

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
    <div class="card" data-equalizer-watch style="padding-top: 40px; text-align: center;">
  
    <?php echo wp_get_attachment_image( get_the_ID(), array('300', '200'), "", array( "class" => "thumbnail", "style" => "margin: 0 auto; padding:" ) );  ?>
  
  <?php $asset_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
    <div class="card-section">
      <a href="<?php echo $asset_image_url; ?>" download><?php _e('Download', 'gcc-wp-2018'); ?> <?php echo get_the_title(); ?></a>
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
$args = array(
'post_status' => 'inherit',
'posts_per_page' => -1,
'post_type' => 'attachment',
);

$args['tax_query'] = array(

array(
    'taxonomy' => 'gcc_programs',
    'terms' => array( 'it-and-technical-studies' ),
    'field' => 'slug',
),

);

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) { ?>


  <h2><?php _e('IT and Technical Studies Pathways', 'gcc-wp-2018'); ?></h2>
 
  <?php
    while ( $the_query->have_posts() ) {
    $the_query->the_post();
        ?>
  <?php $asset_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>

<ul>
    <li>
      <a href="<?php echo $asset_image_url; ?>" download><?php _e('Download', 'gcc-wp-2018'); ?> <?php echo get_the_title(); ?></a>
    </li>
</ul>

<?php  }
}  ?>


<?php /* Restore original Post Data */
wp_reset_postdata();

?>
  </div>
     <div class="tabs-panel" id="public-service">
        <?php 
$args = array(
'post_status' => 'inherit',
'posts_per_page' => -1,
'post_type' => 'attachment',
);

$args['tax_query'] = array(

array(
    'taxonomy' => 'gcc_programs',
    'terms' => array( 'public-service' ),
    'field' => 'slug',
),

);

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) { ?>


  <h2><?php _e('Public Pathways', 'gcc-wp-2018'); ?></h2>
 
  <?php
    while ( $the_query->have_posts() ) {
    $the_query->the_post();
        ?>
  <?php $asset_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>

<ul>
    <li>
      <a href="<?php echo $asset_image_url; ?>" download><?php _e('Download', 'gcc-wp-2018'); ?> <?php echo get_the_title(); ?></a>
    </li>
</ul>

<?php  }
}  ?>


<?php /* Restore original Post Data */
wp_reset_postdata();

?>
  </div>
     <div class="tabs-panel" id="science-and-engineering">
        <?php 
$args = array(
'post_status' => 'inherit',
'posts_per_page' => -1,
'post_type' => 'attachment',
);

$args['tax_query'] = array(

array(
    'taxonomy' => 'gcc_programs',
    'terms' => array( 'science-and-engineering' ),
    'field' => 'slug',
),

);

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) { ?>


  <h2><?php _e('Science and Engineering Pathways', 'gcc-wp-2018'); ?></h2>
 
  <?php
    while ( $the_query->have_posts() ) {
    $the_query->the_post();
        ?>
  <?php $asset_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>

<ul>
    <li>
      <a href="<?php echo $asset_image_url; ?>" download><?php _e('Download', 'gcc-wp-2018'); ?> <?php echo get_the_title(); ?></a>
    </li>
</ul>

<?php  }
}  ?>


<?php /* Restore original Post Data */
wp_reset_postdata();

?>
  </div>
</div>

</div>
  </div>
</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer();