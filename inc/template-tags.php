<?php
/**
* Custom template tags for this theme
*
* Eventually, some of the functionality here could be replaced by core features.
*
* @package gccwp-2018
*/
if ( ! function_exists( 'gcc_wp_2018_posted_on' ) ) :
	/**
	* Prints HTML with meta information for the current post-date/time.
	*/
	function gcc_wp_2018_posted_on() {
$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);
		$posted_on = sprintf (
			/* translators: %s: post date. */
			esc_html_x( ' %s', 'post date', 'gcc-wp-2018' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);
		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
}
endif;
if ( ! function_exists( 'gcc_wp_2018_entry_footer' ) ) :
	/**
	* Prints HTML with meta information for the categories, tags and comments.
	*/
	function gcc_wp_2018_entry_footer() {
// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'gcc-wp-2018' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<strong><span class="cat-links">' . esc_html__( 'Posted in %1$s', 'gcc-wp-2018' ) . '</span></strong> ', $categories_list ); // WPCS: XSS OK.
}
			/* translators: used between list items, there is a space after the comma */
			//$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'gcc-wp-2018' ) );
			//if ( $tags_list ) {
				/* translators: 1: list of tags. */
//printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'gcc-wp-2018' ) . '</span>', $tags_list ); // WPCS: XSS OK.
//}
		}
edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( '| Edit Page <span class="screen-reader-text">%s</span>', 'gcc-wp-2018' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
}
endif;
if ( ! function_exists( 'gcc_wp_2018_post_thumbnail' ) ) :
/**
* Displays an optional post thumbnail.
*
* Wraps the post thumbnail in an anchor element on index views, or a div
* element when on single views.
*/
function gcc_wp_2018_post_thumbnail() {
if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
}
if ( is_singular() ) :
?>
<div class="post-thumbnail">
	<?php the_post_thumbnail(); ?>
	</div><!-- .post-thumbnail -->
	<?php else : ?>
	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
		?>
	</a>
	<?php endif; // End is_singular().
	}
	endif;
	// Replaces the excerpt "Read More" text by a link
	function new_read_more($more) {
	global $post;
	return '...';
	}
	//...<br/>
	// <a class="button primary" href="'. get_permalink($post->ID) . '">Read the full article</a>
	add_filter('excerpt_more', 'new_read_more');
	//custom previous/next links
	add_filter('next_posts_link_attributes', 'posts_link_attributes');
	add_filter('previous_posts_link_attributes', 'posts_link_attributes');
	function posts_link_attributes() {
	return 'class="button hollow rounded"';
	}
	/*=============================================
			=            BREADCRUMBS			            =
	=============================================*/
	//to include in functions.php
	function the_breadcrumb() {
	$sep = ' > ';
	if (!is_front_page()) {
	// Start the breadcrumb with a link to your homepage
	echo '<div title="breadcrumbs trail"><ul class="breadcrumbs">';
		echo '<li>
						<a href="';
				echo home_url();
				echo '">';
				_e('Home', 'gcc-wp-2018');
			echo '</a></li>';
			// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
			if (is_category() || is_single() ){
			the_category('title_li=');
			}
			elseif (is_archive() || is_single()) {
			if ( is_day() ) {
			printf( __( '%s', 'text_domain' ), get_the_date() );
			}
			elseif ( is_month() ) {
			printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'gcc-wp-2018' ) ) );
			}
			elseif ( is_year() ) {
			printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'gcc-wp-2018' ) ) );
			}
			else {
			_e( 'Blog Archives', 'gcc-wp-2018' );
			}
			}
			//If the current page is a single post, show its title with the separator
			if (is_single()) {
			//Gets the parent page title and permalink
							global $post;
							if ( $post->post_parent ) {
							echo '<li>';
								echo  '<a href="';
									echo get_permalink($post->post_parent);
									echo '">';
									echo  get_the_title( $post->post_parent );
								echo '</a>';
							echo '</li>';
			}
			echo '<li>';
									the_title();
								echo '</li>';
			}
			//If the current page is a static page, show its title.
			if (is_page()) {
			//ets the parent page title and permalink
								global $post;
									
								
							if ( $post->post_parent ) {
							echo '<li>';
								echo  '<a href="';
									echo get_permalink($post->post_parent);
									echo '">';
									echo  get_the_title( $post->post_parent );
								echo '</a>';
							echo '</li>';
			}
			echo '<li>';
								the_title();
							echo '</li>';
			}
			//if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
			if (is_home()) {
			global $post;
			$page_for_posts_id = get_option('page_for_posts');
			if ( $page_for_posts_id ) {
			$post = get_page($page_for_posts_id);
			setup_postdata($post);
			the_title();
			rewind_posts();
			}
			}
		echo '</ul></div>';
		}
		}
		/*
		* Credit: http://www.thatweblook.co.uk/blog/tutorials/tutorial-wordpress-breadcrumb-function/
		*/
		//previous post next post links
		function getPrevNext() {
		?>
		<div class="row expanded collapsed prevnext">
			<hr/>
			<?php if (strlen(get_previous_post()->post_title) > 0) { ?>
			<div class="small-12 large-4 columns">
				<span class="button hollow primary alignleft"><?php previous_post_link('%link', '<span class="fa fa-chevron-left" aria-hidden="true"></span>
			Previous post', TRUE); ?></span>
		</div>
		<?php
		} ?>
		<div class="small-12 large-4 columns">
			<a href="<?php esc_html_e('https://www.germanna.edu/blog/', 'gcc-wp-2018')?>" class="button expanded hollow secondary text-center"><?php _e('All highlights', 'gcc-wp-2018'); ?></a>
		</div>
		<?php if (strlen(get_next_post()->post_title) > 0) {
		?>
		<div class="small-12 large-4 columns">
			<span class="button hollow primary alignright"><?php next_post_link('%link', 'Next post<span class="fa fa-chevron-right" aria-hidden="true"></span>', TRUE); ?></span>
		</div>
		<?php
		} ?>
	</div>
	<?php
	}?>
	<?php
	//mobile calltos
	function gcc_wp_2018_callto_buttons_mobile() { ?>
	
	<div class="button-group stacked-for-small expanded button-group" style="margin: 0 1rem .5rem 1rem;">
	   <a href="/50-2/" class="button hollow text-center expanded" style=""><?php _e('50 years young: Support Germanna', 'gcc-wp-2018') ?></a>
	</div>

	<div class="button-group stacked-for-small expanded button-group">

	    <a href="/admissions/request-information/" class="button primary"><?php _e('future students', 'gcc-wp-2018') ?></a>
	  <!--   <a href="/pathways/online-degrees/" class="button alert"><?php //_e('online degrees', 'gcc-wp-2018') ?></a> -->
		<a href="https://www.apply.vccs.edu/applications/vccs/apply.html?application_id=4084" class="button secondary"><?php _e('apply now', 'gcc-wp-2018'); ?></a>

	</div>
	<?php }
	?>
	<?php
	//main menu calltos
	function gcc_wp_2018_callto_buttons_main_menu() { ?>
	<div class="button-group stacked show-for-large">
	
	<a href="/50-2/" class="button hollow expanded"><?php _e('Support Germanna', 'gcc-wp-2018') ?></a>

	<a href="/admissions/request-information/" class="button primary expanded"><?php _e('future students', 'gcc-wp-2018') ?></a>
		<!-- <a href="/pathways/online-degrees/" class="button alert"><?php //_e('online degrees', 'gcc-wp-2018') ?></a> -->
		<a href="https://www.apply.vccs.edu/applications/vccs/apply.html?application_id=4084" class="button secondary expanded"><?php _e('apply now', 'gcc-wp-2018'); ?></a>
	</div>
	<?php }
	?>
	<?php
	//desktop top bar search
	function gcc_wp_2018_search_desktop() { ?>
	<form class="float-right" role="search" method="get" id="searchform-desktop" action="<?php echo get_home_url(); ?>/search_gcse/">
		<div class="input-group">
			<input type="hidden" name="cx" value="015787986713984774933:no8dqwkyepy" title="hidden">
			<input type="hidden" name="ie" value="utf8" title="hidden" />
			<input type="hidden" name="oe" value="utf8" title="hidden" />
			<input type=hidden name=domains value="<?php echo get_home_url();     //get the domain base for the search submit?>" title="home" />
			<input type=hidden name=sitesearch value="<?php echo get_home_url(); //get the url base for the search submit?>" title="home"  />
			<label for="q" style="display:none;">Search</label> 
			<input type="text" name="q" id="search-field" class="input-group-field">
			
			<div class="input-group-button">
				<button id="searchsubmit-mobile" type="submit" class="button" value="" aria-label="<?php _e('fa fa-eyeglass', 'gcc-wp-2018')?>"><span class="fa fa-search"></span></button>
			</div>
		</div>
	</form>
	<?php }
	?>
	<?php
	//desktop top bar search
	function gcc_wp_2018_search_mobile() { ?>
	<form class="float-right" role="search" method="get" id="searchform-mobile" action="<?php echo get_home_url(); ?>/search_gcse/">
		<div class="input-group">
			<input type="hidden" name="cx" value="015787986713984774933:no8dqwkyepy" title="hidden">
			<input type="hidden" name="ie" value="utf8" title="hidden" />
			<input type="hidden" name="oe" value="utf8" title="hidden" />
			<input type=hidden name=domains value="<?php echo get_home_url();     //get the domain base for the search submit?>" title="home" />
			<input type=hidden name=sitesearch value="<?php echo get_home_url(); //get the url base for the search submit?>" title="home"  />
			<label for="q" style="display:none;">Search</label> 
			<input type="text" name="q" id="search-field-mobile" class="input-group-field">
			
			<div class="input-group-button">
				<button id="searchsubmit-mobile" type="submit" class="button" value="" aria-label="<?php _e('fa fa-eyeglass', 'gcc-wp-2018')?>"><span class="fa fa-search"></span></button>
			</div>
		</div>
	</form>
	<?php }
	?>
	<?php
	//mobile resources menu
	function gcc_wp_2018_resources_mobile() { ?>
	<div class="mobile-resources">
		<map title="Resources Menu Mobile" id="resources-menu-mobile">
		<ul class="vertical menu accordion-menu"  data-accordion-menu>
			<li class="red-button">
				<a href="https://gcc.my.vccs.edu/"><span class="fa fa-lock"></span>mygcc</a>
			</li>
			<li class="gray-button"><a href="/students/">online students</a></li>
			<li  class="gray-button"><a href="/faculty-staff/">faculty &amp; staff</a></li>
			<li class="black-button"><a href="#" class="primary">resources  <span class="fa fa-caret-down"></span></a>
			<ul class="menu">
				<li><a href="/alumni/">Alumni</a>
			</li>
			<li><a href="/bookstore/">Bookstore</a></li>
			<li><a href="https://calendar.activedatax.com/germanna/default.aspx?type=&view=Summary">Calendar</a></li>
			<li><a href="/library/">Libraries</a></li>
			<li><a href="/about-germanna/locations/">Locations</a></li>			
			<li><a href="/veterans/">Military & Families</a></li>
			<li><a href="/admissions/transcript-request/">Transcripts</a></li>
			<li><a href="/academic-center-for-excellence/">Tutoring</a></li>
			<!-- ... -->
		</ul>
	</li>
	<li class="green-button"><a href="/donate/">give now</a></li>
</ul>
</map>
<hr>
</div>
<?php }
?>
<?php
//desktop resources menu
function gcc_wp_2018_resources_desktop() { ?>
<map title="Resources Menu Desktop" id="resources-menu-desktop">
<ul class="dropdown menu align-center hide-for-medium-only hide-for-large-only show-for-xlarge" data-dropdown-menu>
<li class="red-button">
	<a href="https://gcc.my.vccs.edu/"><span class="fa fa-lock"></span>mygcc</a>
</li>
<li class="gray-button"><a href="/students/">online students</a></li>
<li class="gray-button"><a href="/faculty-staff/">faculty & staff</a></li>
<li class="black-button"><a href="#" class="primary">resources <span class="fa fa-caret-down"></span></a>
<ul class="menu">
	<li><a href="/alumni/">Alumni</a>
</li>
<li><a href="/bookstore/">Bookstore</a></li>
<li><a href="https://calendar.activedatax.com/germanna/default.aspx?type=&view=Summary">Calendar</a></li>
<li><a href="/library/">Libraries</a></li>
<li><a href="/about-germanna/locations/">Locations</a></li>
<li><a href="/veterans/">Military & Families</a></li>
<li><a href="/admissions/transcript-request/">Transcripts</a></li>
	<li><a href="/academic-center-for-excellence/">Tutoring</a></li>
</ul>
</li>
<li  class="green-button"><a href="/donate/">give now</a></li>
</ul>
</map>
<?php }
?>
<?php
//close button
function gcc_wp_2018_close_button() { ?>
<button class="close-button" aria-label="<?php _e('Close menu', 'gcc-wp-2018' ); ?>" type="button" data-close>
<?php esc_html_e('Close', 'gcc-wp-2018' ) ?><span class="fa fa-close" aria-hidden="true"></span>
</button>
<?php }
?>