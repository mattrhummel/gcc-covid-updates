<div class="row" data-equalizer>
	<?php
	$args =  array (
	'post_type' => 'workforce_news_post',
	'paged' => get_query_var('paged'),
	'posts_per_page'=>4,
	);
	?>
	<?php
	$query = new WP_Query( $args ); ?>
	<?php if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post();?>
	<?php if ( has_post_thumbnail() ) : ?>
	
	  <div class="columns medium-6">
		<div class="card" data-equalizer-watch>
			 <div class="card-divider">
			<h4 class="h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		</div>
 <div style="height: 300px;">
	   <?php the_post_thumbnail('large', array('class' => 'class="image-background"')); ?>
	</div>	
		<div class="card-section">
			<p><?php the_excerpt(); ?></p>
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