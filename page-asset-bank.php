<?php
//Names the page template for each section
/*
Template Name: Asset Bank
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


<ul class="tabs" id="example-tabs" data-tabs role="tablist">
  <li class="tabs-title is-active" role="presentation">
    <a href="#logos" role="tab" tabindex="0" aria-selected="false" aria-controls="logos">Logos</a>
  </li>
  <li class="tabs-title" role="presentation">
    <a data-tabs-target="templates" href="#templates" role="tab" tabindex="0" aria-selected="false" aria-controls="templates">Templates</a>
  </li>
  <li class="tabs-title" role="presentation">
    <a href="#zoom-backgrounds" aria-selected="false" role="tab" tabindex="0" aria-controls="zoom-backgrounds">Zoom Backgrounds</a>
  </li>
  <li class="tabs-title" role="presentation">
    <a data-tabs-target="coloring-pages" href="#coloring-pages" role="presentation" role="tab" tabindex="0" aria-selected="false" aria-controls="coloring-pages">Coloring Pages</a>
  </li>
</ul>

<div class="tabs-content" data-tabs-content="example-tabs">
  <div class="tabs-panel  is-active" id="logos" role="tabpanel" aria-hidden="true" >
    <?php 
$args = array(
'post_status' => 'inherit',
'posts_per_page' => -1,
'post_type' => 'attachment',
);

$args['tax_query'] = array(

array(
    'taxonomy' => 'asset_bank_categories',
    'terms' => array( 'logo' ),
    'field' => 'slug',
),

);

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) { ?>

<div class="row expanded" data-equalizer style="padding-left: 10px; padding-right: 10px;">

  <h2><?php _e('Logos', 'gcc-wp-2018'); ?></h2>
 
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
  <div class="tabs-panel" id="zoom-backgrounds" role="tabpanel" aria-hidden="true" >
    
<?php 
$args = array(
'post_status' => 'inherit',
'posts_per_page' => -1,
'post_type' => 'attachment',
);

$args['tax_query'] = array(

array(
    'taxonomy' => 'asset_bank_categories',
    'terms' => array( 'zoom-background' ),
    'field' => 'slug',
),

);

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) { ?>

<div class="row expanded" data-equalizer style="padding-left: 10px; padding-right: 10px;">

  <h2><?php _e('Zoom Backgrounds', 'gcc-wp-2018'); ?></h2>
 
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
  <div class="tabs-panel" id="coloring-pages" role="tabpanel" aria-hidden="true" >
    <?php 
$args = array(
'post_status' => 'inherit',
'posts_per_page' => -1,
'post_type' => 'attachment',
);

$args['tax_query'] = array(

array(
    'taxonomy' => 'asset_bank_categories',
    'terms' => array( 'coloring-pages' ),
    'field' => 'slug',
),

);

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) { ?>

<div class="row expanded" data-equalizer style="padding-left: 10px; padding-right: 10px;">

  <h2><?php _e('Coloring Pages', 'gcc-wp-2018'); ?></h2>
 
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
s
<?php /* Restore original Post Data */
wp_reset_postdata();

?>
  </div>
   <div class="tabs-panel" id="templates" role="tabpanel" aria-hidden="true" >

    <h2><?php _e('Templates', 'gcc-wp-2018'); ?></h2>

        <?php 
$args = array(
'post_status' => 'inherit',
'posts_per_page' => -1,
'post_type' => 'attachment',
);

$args['tax_query'] = array(

array(
    'taxonomy' => 'asset_bank_categories',
    'terms' => array( 'templates' ),
    'field' => 'slug',
),

);

$the_query = new WP_Query( $args ); ?>

<ul>

<?php if ( $the_query->have_posts() ) { ?>
 
  <?php
    while ( $the_query->have_posts() ) {
    $the_query->the_post();
        ?>
  <?php $asset_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>

    <li>
      <a href="<?php echo $asset_image_url; ?>" download><?php _e('Download', 'gcc-wp-2018'); ?> <?php echo get_the_title(); ?></a>
    </li>

<?php  }

}  ?>


</ul>

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