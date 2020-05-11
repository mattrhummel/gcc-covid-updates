<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package gccwp-2018
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
        <h1><?php the_title(); ?></h1>
        <?php if ( 'post' === get_post_type() ) : ?>
        <p><?php the_date();?></p>
        <?php endif; ?>
        
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
                  Calendar
                </a>
              </li>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      
      <div class="entry-content" id="main" style="margin-top: 20px;">
      <div class="entry-content" id="main" tabindex="0">
        <?php
        the_content( sprintf(
        wp_kses(
        /* translators: %s: Name of current post. Only visible to screen readers */
        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gcc-wp-2018' ),
        array(
          'span' => array(
            'class' => array(),
          ),
        )
        ),
        get_the_title()
        )
        ); ?>
        <div class="row">

              <?php if( get_field('event_details') ): ?>

              <?php the_field( 'event_details' ); ?>

            <?php endif; ?>

              <p><?php the_field( 'event_date' ); ?></p>

              <p><?php the_field( 'event_location' ); ?></p>

              <?php if( get_field('event_start_time') ): ?>
              <p><?php the_field('event_start_time'); ?>   <?php endif; ?> 
              <?php if( get_field('event_end_time') ): ?> <?php _e('- ', 'gcc-wp-2018'); ?><?php the_field('event_end_time'); ?>
                 <?php endif; ?> 
              </p>
            

          </div>
      
      </div>

    </div>

      </div>
    </div>

    <?php endwhile; // End of the loop. ?>
  </article>
  <?php
  get_footer();