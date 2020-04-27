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
      <?php dynamic_sidebar( 'pathways-widgets' );?>
    </aside>
 
    <div class="columns small-12 large-9 float-left"> 

    <header>  
    <h1 class="entry-title"><?php the_title(); ?></h1>
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
            <a href="/programs/">
              <?php _e('Programs of Study', 'gcc-wp-2018'); ?>
            </a>
          </li>
        </ul>
      </div>
    </nav>
</header>
      
    <?php // if the page has a featured image
    if  (has_post_thumbnail( ) )  { ?>
    <div class="hero-section hide-for-print visible-for-medium-up hidden-for-small-only" id="featured-image" data-toggler="hide" style="margin-bottom: 20px;">
      <?php the_post_thumbnail('', array ('alt' => false));  ?>
    </div>
    <?php  }  else {  //.pagesubbanner
    // if page doesn't have a featured image
    ?>
    <?php } ?>

  <h2>Program Description</h2>
  <div class="callout">
  <?php the_field( 'program_description' ); ?>
  <p class="h3">Department Dean</p> 
  <p><?php the_field( 'department_dean' );?></p>
  <p class="h3">Program Chair
  <p><?php the_field( 'program_chair' ); ?></p>
  <p class="h3">Pathway Type</p>
  <p><?php the_field( 'pathway_type' ); ?></p>
  </div>

      </div>
    </div>
 
    <?php endwhile; // End of the loop. ?>
  </article>
  <?php
  get_footer();