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
								/* Start the Loop */
while ( have_posts() ) : the_post();

/*
 * Include the Post-Type-specific template for the content.
 * If you want to override this in a child theme, then include a file
 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
 */
?>

<div class="callout primary">

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
                </div>
                    <!-- .entry-meta -->
                    <?php endif; ?>

                </div>
            </div>

            <?php endwhile;

	the_posts_navigation(); ?>


    <?php	else :

endif; ?>


<?php
get_footer();
