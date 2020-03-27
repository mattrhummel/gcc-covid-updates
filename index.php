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

  <div class="row gutter-small expanded">

  <header class="hero-section-plain">

      <?php //if the child page doesn't have a featured images
      //gcc_featured_image_on_child(); ?>

      <div class="hero-section-text">
        <h1><?php echo $post_page_title; ?></h1>
      </div>

      <div class="crumbs-container-plain">
        <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" role="navigation">
          <?php gcc_wp_2018_post_page_breadcrumbs(); ?>
        </nav>
      </div>

  </header>

  </div>


       <?php //Display all post content
       get_template_part( 'template-parts/content', 'postpage' );
       ?>

</article>

<?php
get_footer();
