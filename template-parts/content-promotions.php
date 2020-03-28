<div class="row expanded" data-equalizer id="promotion-events">
<?php
	$args =  array (
	'post_type' => 'event_promotions',
	'post_status' => 'publish',
    'orderby' => 'publish_date',
    'order' => 'DESC',
	'posts_per_page'=>-1,
	);
	?>
	<?php
	$query = new WP_Query( $args ); ?>
	
	<?php if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post();?>

<div class="column large-4">

	<div class="callout"  data-equalizer-watch>

			<?php // ACF Image Object

			$image = get_field('promotion_event_image');
			// vars
			$url = $image['url'];

			?>

	<div class="card-image" style="background-image: url('<?php echo $url ?>');"></div>
	  
	   <a href="<?php the_field( 'promotion_event_button_url' ); ?>"><?php the_title('<h3 class="h4">', '</h3>', 'gcc-wp-2018') ?></a>

			<?php if( get_field('promotion_event_date') ): ?>
			  	<p class="promotion-date"><?php the_field( 'promotion_event_date' ); ?></p>
			<?php endif; ?>

	    <p class="promotion-description"><?php the_field( 'promotion_event_description' ); ?></p>

	</div>
	
</div>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	<?php else : ?>
	
	<?php endif; ?>

</div>