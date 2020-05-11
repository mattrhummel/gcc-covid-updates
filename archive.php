<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 */
get_header();
$post_page_title= get_field('post_page_title', 'option');
?>

  <?php
		if ( have_posts() ) : ?>

    <div class="row expanded content-area">
    <div class="mobile-sidebar" data-responsive-toggle="section-menu" data-hide-for="large">
      <button class="button expanded mobile-sidebar-button" type="button" data-toggle="section-menu"><?php _e('In this Section', 'gcc-wp-2018'); ?>
      </button>
      
    </div>

    <div class="columns small-12 large-9 float-left">
       
     <header>
       <h1><?php echo the_archive_title(); ?></h1>
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

      <?php $custom_terms = get_terms('cw_event_categories'); ?>


  <?php foreach($custom_terms as $custom_term) {
    wp_reset_query();
    $args = array('post_type' => 'cw_events',
        'tax_query' => array(
            array(
                'taxonomy' => 'cw_event_categories',
                'field' => 'slug',
                'terms' => $custom_term->slug,
            ),
        ),
     ); ?>

    <?php $loop = new WP_Query($args);
     
    if($loop->have_posts()) { 

     while($loop->have_posts()) : $loop->the_post();

      ?>

            <div class="callout primary">
              
              <?php the_title('<h3>', '</h3>', 'gcc-wp-2018'); ?>

              <p style="margin-bottom: 0;"><?php the_field( 'event_description' ); ?></p>

              <p  style="margin-bottom: 0;"><?php the_field( 'event_date' ); ?></p>

              <p style="margin-bottom: 0;"><?php the_field( 'event_location' ); ?></p>

              <?php if( get_field('event_start_time') ): ?>
              <p><?php the_field('event_start_time'); ?> - <?php the_field('event_end_time'); ?></p>
              <?php endif; ?>

              <?php if( get_field('event_details') ): ?>
              <a href="<?php echo the_permalink(); ?>" class="button primary"><?php _e('Learn more', 'gcc-wp-2018'); ?></a>
              <?php endif; ?>
            </div>
            
          
        <?php 

         endwhile; } }
        
         ?>
<?php endif; ?>
<?php
get_footer();
