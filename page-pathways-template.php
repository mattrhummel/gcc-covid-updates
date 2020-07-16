<?php
/**
*
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: Programs of Study List
*
*/
get_header(); ?>
<?php
while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="row expanded content-area">

      <div class="mobile-sidebar" data-responsive-toggle="section-menu" data-hide-for="large">
      <button class="button expanded mobile-sidebar-button" type="button" data-toggle="section-menu"><?php _e('In this Section', 'gcc-wp-2018'); ?>
      </button>
      
    </div>

  <aside class="columns small-12 large-3 float-right page-nav hide-for-print" id="section-menu">
  <?php //get page widgets
 
  dynamic_sidebar( 'academic-widgets' );
  ?>
  </aside>

<div class="columns small-12 large-9 float-left">
   <header>
              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
              <?php the_breadcrumb() ?> 
  </header>
    
    <div class="entry-content" id="main">

      <div class="row expanded">
  <div class="columns medium-10">

<?php //Page Heading
  get_template_part( '/online-degrees/pathway', 'filter' );
 ?>
 
<?php if(empty ( $_GET['programpathway'] ) && empty ( $_GET['programdegree']) && empty ($_GET['post_type'])) {
?>

<?php //Page Heading
get_template_part( '/online-degrees/pathways', 'default' );
?>

<?php

}
elseif

(!empty ( $_GET['post_type'] )) {

?>

 <?php //Page Heading
  get_template_part( '/online-degrees/pathways', 'bysearch' );
 ?>

<?php
}

elseif

(!empty ( $_GET['programpathway'] )) {

?>

<?php //Page Heading
get_template_part( '/online-degrees/pathways', 'bypathway' );
?>

<?php
}

elseif

(!empty( $_GET['programdegree'] )) {

?>

<?php //Page Heading
get_template_part( '/online-degrees/pathways', 'bydegree' );
?>

<?php

}

elseif

(!empty( $_GET['programpathway'] ) && !empty($_GET['programdegree'])) {

?>

<?php //Page Heading
get_template_part( '/online-degrees/pathways', 'byboth' );
?>
<?php 

}

?>

</div>
</div>

</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer();