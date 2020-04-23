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
      <div class="row expanded" style="padding-left: 10px; padding-right: 10px;">

        <?php //Page Heading
          get_template_part( 'template-parts/content', 'page-alert' );
        ?>

      </div>

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

<div class="row expanded" data-equalizer>

  <h2><?php _e('Zoom Backgrounds', 'gcc-wp-2018'); ?></h2>
 
  <?php
    while ( $the_query->have_posts() ) {
    $the_query->the_post();
        ?>

 <div class="columns medium-4">
    <div class="callout" data-equalizer-watch>

    <?php echo wp_get_attachment_image( get_the_ID(), array('500', '500'), "", array( "class" => "thumbnail" ) );  ?>
   
    <?php $asset_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
    <a href="<?php echo $asset_image_url; ?>" download><?php _e('Download', 'gcc-wp-2018'); ?> <?php echo get_the_title(); ?></a>

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
</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer();