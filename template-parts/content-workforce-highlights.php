<div class="row" data-equalizer>
	<?php
	$args =  array (
	'post_type' => 'workforce_news_post',
	'paged' => get_query_var('paged'),
	'posts_per_page'=>2,
	);
	?>
	<?php
	$query = new WP_Query( $args ); ?>
	<?php if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post();?>
	<?php if ( has_post_thumbnail() ) : ?>
	
	  <div class="columns large-6">
		<div class="card" data-equalizer-watch>
			 <div class="card-divider">
			<h4 class="h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		</div>

		 <div class="card-section">
			<?php the_field( 'wf_post_description' ); ?>
		</div>

 	<div class="update-background">
	   <?php the_post_thumbnail('large'); ?>
	</div>	

		</div>
	</div>
	
	<?php endif; ?>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018'); ?></p>
	<?php endif; ?>
</div>