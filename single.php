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
	<div class="row expanded content-area" style="padding-bottom: 60px;">
		
	    <div class="mobile-sidebar" data-responsive-toggle="section-menu" data-hide-for="large">
      <button class="button expanded mobile-sidebar-button" type="button" data-toggle="section-menu"><?php _e('In this Section', 'gcc-wp-2018'); ?>
      </button>
      
    </div>
		<?php get_sidebar();?>
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
								<a href="<?php  echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
									<?php echo $post_title; ?>
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			
			<div class="entry-content" id="main" style="margin-top: 20px;">
				 <?php the_content(); ?>
			</div>

		</div>

	</div>
	
			<?php endwhile; // End of the loop. ?>
		</article>
		<?php
		get_footer();