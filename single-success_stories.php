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
    <?php get_sidebar();?>

    <div class="columns small-12 large-9 float-left">
      <div class="entry-content" id="main" tabindex="0">
			<h2><?php the_field( 'story_heading' ); ?></h2>
			
			<?php // ACF Image Object
			$image     = get_field( 'story_image' );
			$alt       = $image['alt'];
			$imageSize = $image['sizes'][ 'large' ];
			
			echo '<img src="' . $imageSize . '" alt="' . $alt . '" style="margin-bottom: 20px;" />';
			?>
	<?php if( get_field('featured_quote') ): ?>			

	<div class="callout secondary">
				
				<?php the_field( 'featured_quote' ); ?>
				
			</div>
		   <?php endif; ?>
			<?php the_field( 'success_story_content' ); ?>
			
				<?php if( get_field('video_url') ): ?>		
			<h3><?php _e('Watch Story', 'gcc-wp-2018'); ?></h3>
			<div class="flex-video widescreen"><iframe width="560" height="315" src="<?php the_field( 'video_url' ); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
		<?php endif; ?>
			<div class="row expanded" data-equalizer data-equalize-on="large">
				<hr>
				<h3><?php _e('Other Stories', 'gcc-wp-2018'); ?></h3>
				<?php
				$this_post = $post->ID;
				$args =  array (
				'post_type' => 'success_stories',
				'posts_per_page'=>4,
				'order' => 'ASC',
				'orderby'        => 'rand',
				'post__not_in' => array($this_post)
				);
				// the query
				$the_query = new WP_Query( $args ); ?>
				<?php if ( $the_query->have_posts() ) : ?>
				<!-- pagination here -->
				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="small-12 medium-12 large-6 columns">
					<a href="<?php the_permalink(); ?>" class="stories">
						<div class="card">
							<?php // ACF Image Object
							$image     = get_field( 'story_image' );
							$alt       = $image['alt'];
							$imageSize = $image['sizes'][ 'large' ];
							echo '<img src="' . $imageSize . '" alt="' . $alt . '" />';
							?>
							
							<div class="card-section" data-equalizer-watch>
								<h3><?php the_title(); ?></h3>
							</div>
						</div>
					</a>
					
				</div>
				<?php endwhile; ?>
				<!-- end of the loop -->
				<!-- pagination here -->
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
				
				</div><!--.otherstories-->
			</div>
			
		</div>
		<aside class="small-12 medium-12 large-3 columns right page-nav hide-for-print" id="section-menu"  data-toggler="hide">
			<?php dynamic_sidebar('admissions-widgets'); ?>
		</aside>
		</div><!--.pagecontent-->
		<?php endwhile; // End of the loop. ?>
	</article>
	<?php
	get_footer();