<?php
//Names the page template for each section
/*
Template Name: Search
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
	while ( have_posts() ) : the_post(); ?>

  <div class="content-area">
    
    <div class="entry-content" id="main">
      <div class="row expanded">
        <div class="columns small-12">
          
          <?php //Page Heading
          get_template_part( 'template-parts/content', 'page-heading' );
          ?>

		

			<script async>
		(function() {
			var cx = '004235661866003871264:hsv9lloki5k';
			var gcse = document.createElement('script');
			gcse.type = 'text/javascript';
			gcse.async = true;
			gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(gcse, s);
		})();
	</script>

			</div>
	</div><!--.pagecontent-->

</div>

<?php endwhile; // End of the loop. ?>

</article>

<?php
get_footer();
