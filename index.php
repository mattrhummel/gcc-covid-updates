<?php
/**
 * The template for displaying all post.
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 */
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="row expanded content-area">
    <div class="mobile-sidebar" data-responsive-toggle="section-menu" data-hide-for="large">
      <button class="button expanded mobile-sidebar-button" type="button" data-toggle="section-menu"><?php _e('In this Section', 'gcc-wp-2018'); ?>
      </button>
      
    </div>
    <?php get_sidebar();?>
    <div class="columns small-12 large-9 large-pull-3">
       
  <header>
        <h1 class="entry-title">News</h1>
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
            </ul>
          </div>
        </nav>
      </header>

  <?php
  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

  $args =  array (

  'post_type' => 'post',
  'posts_per_page'=>-5,
  'paged'          => $paged
  );
  ?>

  <?php

  $query = new WP_Query( $args ); ?>

  <?php if ( $query->have_posts() ) : ?>

  <?php while ( $query->have_posts() ) : $query->the_post();?>


      <div class="row callout small">
        <div class="medium-12 columns">
       
         <h2 ><a href="<?php the_permalink(); ?>" style="line-height: 1.2; display: block; width: 100%;"><?php the_title(); ?></a></h2>
        
          <?php echo get_the_date(); ?>

        </div>
      </div>


<?php endwhile;  ?>


      <?php wp_reset_postdata(); ?>

      <?php else : ?>

      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018' ); ?></p>

      <?php endif; ?>


      <div class="nav-previous alignleft"><?php next_posts_link( '<span class="fa fa-chevron-left" aria-hidden="true" style="padding-right: .5rem;"></span>Older posts' ); ?></div>
      <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts <span class="fa fa-chevron-right" aria-hidden="true" style="padding-left: .5rem;"></span>' ); ?>
      </div>

     </div>
   </div>

</article>

<?php
get_footer();
