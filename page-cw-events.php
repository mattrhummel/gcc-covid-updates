<?php
/**
* 
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: College Wide Events
*
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  while ( have_posts() ) : the_post(); ?>
   
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
       <?php the_title('<h1>', '</h1>') ?>
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
            </ul>
          </div>
        </nav>
    </header>  

<?php // ACF Image Object

$image = get_field('calendar_image');
// vars
$url = $image['url'];

?>
  
<?php

        $args =  array (
              'post_type' => 'cw_events',
              'order'       => 'DESC',
            );

      $terms = get_terms( 'cw_event_categories' );
      
      // Get Taxonomy Terms ?>
                 
         <?php  if (( ! empty( $terms ))  ) { ?>

            <?php foreach ( $terms as $term ) { ?>

            <div class="row expanded" data-equalizer>

              <div class="columns medium-5">

               <div class="callout" style="background-color: #ffffff; padding: 0;" data-equalizer-watch>

               <div style="background-image: url('<?php the_field( 'calendar_image', $term ); ?>'); background-size: cover; height: 300px; background-position: center center;" ></div>

              </div>

            </div>
              <div class="columns medium-7" >

              <div class="callout" data-equalizer-watch>
   
                  <h3><a href="<?php echo $term->slug; ?>">
                    
                    <?php echo $term->name;  ?> </a>

                  </h3>
                  
                  <p><?php echo $term->description; ?></p>

                </div>

             </div>

           </div>
           <?php 

             }

           } ?>

    <?php endwhile; // End of the loop. ?>

  </div>
</div>

</article>

<?php
get_footer();