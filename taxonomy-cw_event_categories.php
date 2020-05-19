<?php
/**
* 
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
*
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   
   <div class="row expanded content-area">
    
      <div class="mobile-sidebar" data-responsive-toggle="section-menu" data-hide-for="large">
      <button class="button expanded mobile-sidebar-button" type="button" data-toggle="section-menu"><?php _e('In this Section', 'gcc-wp-2018'); ?>
      </button>
      
    </div>

     <aside class="columns small-12 large-3 float-right page-nav hide-for-print" id="section-menu">
      <?php dynamic_sidebar( 'calendar-widgets' ); ?>
    </aside>

    <div class="columns small-12 large-9 float-left">
      
     <header>
    
    <h1><?php echo get_the_archive_title(); ?></h1>
    <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" role="navigation">
          <div title="breadcrumbs trail">
            <ul class="breadcrumbs">
              <?php $home_page = get_the_title( get_option('page_on_front'));
              $post_title = get_the_title( get_option('page_for_posts'));
              ?>
              <li role="menuitem">
                <a href="<?php echo get_site_url(); ?>">
                  <?php echo $home_page; ?>
                </a>
              </li>
               <li role="menuitem">
                <a href="/calendar/">
                 <?php _e('Calendar', 'gcc-wp-2018'); ?>
                </a>
              </li>
            </ul>
          </div>
        </nav>
    </header>  

 <?php


$args = array(
  'post_type' => 'cw_events',
  'tax_query' => array(
    array(
      'taxonomy' => 'cw_event_categories',
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

              <div class="columns medium-4">

               <div class="callout" style="background-color: #ffffff; padding: 0;" data-equalizer-watch>

<?php     // ACF Image Object

$image = get_field('event_image');
// vars
$url = $image['url'];

?>
    <div style="background-image: url('<?php echo $url; ?>'); background-size: cover; height: 170px; background-position: center center;" ></div>

              </div>

            </div>
              <div class="columns medium-8" >

                <div class="callout" data-equalizer-watch>
                    
                    <p class="h3"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></p>
                    
                    <p><?php the_field( 'event_date' ); ?><br/>
                    <?php the_field( 'event_location' ); ?></p>
                 
                </div>

             </div>

           </div>

<?php endwhile; 
wp_reset_query();

} 

?>


             </div>
</div>

</article>

  <?php
  get_footer();