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
    <?php get_sidebar();?>

    <div class="columns small-12 large-9 float-left">
       
     <header>
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <?php the_breadcrumb() ?> 
    </header>

       <?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

										/*
										 * Include the Post-Type-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
										 */

								?>

                    <div class="callout primary">
                        <div class="medium-12 columns">

                            <a href="<?php the_permalink(); ?>"><?php the_title('<h2 class="screen-reader-text">', '</h2>') ?></a>

                            <h3 class="post-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <?php if ( 'post' === get_post_type() ) : ?>
                            <div class="entry-meta">
                                <p>
                                    <strong>
							<?php
	        		gcc_wp_2018_posted_on();
						?>
						<?php if (is_tag()) {
						# code...
						_e('| Posted in:', 'gcc-wp-2018'); echo single_tag_title(); ?>
					</strong></p>
                                <?php } ?>
                                </strong>
                                </p>
                            </div>
                            <!-- .entry-meta -->
                            <?php endif; ?>
                            <p>
                                <?php the_excerpt(

				sprintf(
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
                            </p>
                        </div>
                    </div>

                    <?php endwhile;

			the_posts_navigation(); ?>

            </div>


            <?php //Template Sidebar
		 	 get_template_part( '/sidebars/archive-sidebar' ); ?>

            <?php	else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>


        </div>



        <?php
get_footer();
