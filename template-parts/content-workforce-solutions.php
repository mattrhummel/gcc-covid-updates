<div class="row expanded" data-equalizer>
<div class="columns small-12 medium-4">

		<div class="card" data-equalizer-watch>
		<div class="card-divider">
			<h3 class="h5"><?php the_field('box_1_heading'); ?></h3>
</div>
<?php // ACF Image Object

$image = get_field('box_1_image');
// vars
$url = $image['url'];

?>

<div class="image-background" style="background-image: url('<?php echo $url ?>'); "></div>

  			<div class="card-section">
			<p><?php the_field('box_1_description'); ?></p>
			<a href="<?php the_field('box_1_url');?>" class="button primary" ><?php the_field('box_1_button_text'); ?></a>
		</div>
  </div>
</div>

<div class="columns small-12 medium-4">
   <div class="card" data-equalizer-watch>
     	<div class="card-divider">
				<h3 class="h5"><?php the_field('box_2_heading');  ?></h3>
			</div>
		<?php // ACF Image Object

$image = get_field('box_2_image');
// vars
$url = $image['url'];

?>

<div class="image-background" style="background-image: url('<?php echo $url ?>'); "></div>
 
		<div class="card-section">
			<p><?php the_field('box_2_description'); ?></p>
			<a href="<?php the_field('box_2_url');?>" class="button primary" ><?php the_field('box_2_button_text'); ?></a>
		</div>

	</div>
</div>

<div class="columns small-12 medium-4">
	<div class="card" data-equalizer-watch>
		<div class="card-divider">
			<h3 class="h5"><?php the_field('box_3_heading');  ?></h3>
		</div>
<?php // ACF Image Object

$image = get_field('box_3_image');
// vars
$url = $image['url'];

?>

<div class="image-background" style="background-image: url('<?php echo $url ?>');">
	
</div>

  	     <div class="card-section">
			<p><?php the_field('box_3_description'); ?></p>
			<a href="<?php the_field('box_3_url');?>" class="button primary" ><?php the_field('box_3_button_text'); ?></a>
		</div>

</div>
</div>
</div>

<div class="row">
<div class="columns small-12 medium-6">
	<div class="card" data-equalizer-watch>
	<div class="card-divider">
		<h3 class="h4"><?php the_field('box_4_heading'); ?></h3>
	</div>
	    <div class="card-section">
		<p class="description"><?php the_field('box_4_description'); ?></p>
		<a href="<?php the_field('box_4_url');?>" class="button primary" ><?php  the_field('box_4_button_text'); ?></a>
	</div>
	</div>
</div>

<div class="columns small-12 medium-6">
	<div class="card" data-equalizer-watch>
	<div class="card-divider">
		<h3 class="h4"><?php the_field('box_5_heading');  ?></h2>
	</h3>
</div>
	  <div class="card-section">
		<p class="description"><?php the_field('box_5_description');  ?></p>
		<a href="<?php the_field('box_5_url');?>" class="button primary" ><?php  the_field('box_5_button_text'); ?></a>
	 </div>
	</div>
</div>

</div>
