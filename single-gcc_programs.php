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
      
<div class="callout">
  
 <div class="callout">
   
    <div class="row">
    <div class="columns medium-6">

      <?php 
      $degreeterm = get_field('program_degree');
      if( $degreeterm ): ?>
      <h2><?php echo esc_html( $degreeterm->name ); ?></h2>
      <p><?php echo esc_html( $degreeterm->description ); ?></p>
      <?php endif; ?>

      <?php 
      $pathwayterm = get_field('pathway_names');
      if( $pathwayterm ): ?>
      <p><strong>Area of Study</strong><?php echo  $pathwayterm->term; ?></p>
      <?php endif; ?>

  </div>
    <div class="columns medium-6" style="text-align: right;">

      <p class="h4" style="text-transform: uppercase">Financial aid eligible</p>
      
    </div>
  </div> 
 </div>

  <h2>Program Purpose</h2>

  <p><?php the_field( 'program_description' ); ?></p>
    
  </div>

  </div> 
 </div>
   
</div>
  
<?php endwhile; // End of the loop. ?>
</article>
<?php
get_footer();