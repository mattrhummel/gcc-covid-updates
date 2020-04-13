<?php
/**
 * Template part for displaying single post content in single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 */

?>
<!--Page Content-->
<div class="row gutter-small expanded content-area">

<div class="columns small-12 medium-9">

	<div class="entry-content" id="main" tabindex="0">

	<?php
 the_content( sprintf(
 wp_kses(
	 /* translators: %s: Name of current post. Only visible to screen readers */
	 __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gcc-wp-2018' ),
	 array(
		 'span' => array(
			 'class' => array(),
		 ),
	 )
 ),
 get_the_title()
)

); ?>


<?php getPrevNext();

get_the_category_list();

?>


</div>
</div>

<?php //Template Sidebar
get_sidebar(); ?>


</div><!--.pagecontent-->

    <div class="row expanded entry-footer">
        <footer>
          <?php //last modified page test
          $u_time = get_the_time('U');
          $u_modified_time = get_the_modified_time('U');
          if ($u_modified_time >= $u_time + 86400) {
          echo "<p>Last modified on ";
            the_modified_time('F j, Y');
          "</p> "; }  ?>
          <?php gcc_wp_2018_entry_footer(); ?>
          <footer>
     </div>
