<div class="row expanded promotion" data-equalizer id="promotion-events">
<?php
	$args =  array (
	'post_type' => 'event_promotions',
	'posts_per_page'=>-1,
	);
	?>
	<?php
	$query = new WP_Query( $args ); ?>
	
	<?php if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post();?>

<div class="column small-12 <?php the_field( 'home_box_column_class' ); ?> promotion-container">

	<?php the_field( 'home_box_content' ); ?>

</div>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	<?php else : ?>
	
	<?php endif; ?>

</div>