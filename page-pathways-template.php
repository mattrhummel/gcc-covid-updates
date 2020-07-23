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
get_header(); 

while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="row expanded content-area">

<div class="columns small-12 float-left">
   <header>
              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
              <?php the_breadcrumb() ?> 
  </header>
    
    <div class="entry-content" id="main">

      <?php the_content(); ?>

<div class="row expanded" data-equalizer>

<ul id="filters" style="list-style-type: none; marging-left: 0;">

<li style="list-style: none;">
  <div class="columns medium-3">
  <a href="#" data-filter="*" class="selected">
     <div class="callout" data-equalizer-watch>
        All Programs
    </div>
  </a>
  </div>
</li>

 <?php 
 $terms = get_terms("pathway_names"); // get all categories, but you can use any taxonomy
 $count = count($terms); //How many are they?
 if ( $count > 0 ){  //If there are more than 0 terms
 foreach ( $terms as $term ) {  //for each term: ?>

  <li style="list-style-type: none;">
    <div class="columns medium-3">
    <a href="#" data-filter="<?php echo $term->slug ?>"><div class="callout" data-equalizer-watch><?php echo $term->name  ?></div>
    </a>
  </div>
</li>

 <?php }
 } 
 ?>
</ul>
</div>
<div class="row expanded">
 <div class="columns">
<?php $the_query = new WP_Query( 'post_type=gcc_programs&posts_per_page=-1&orderby=title&order=ASC' ); //Check the WP_Query docs to see how you can limit which posts to display ?>
<?php if ( $the_query->have_posts() ) : ?>
 <div id="isotope-list">

<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
?>

<div class="<?php echo $term->slug; ?> item">
<table style="width: 100%;" class="stack">
  <tr>
    <thead>
      <th>Program of Study</th>
      <th>Program Type</th>
      <th class="text-center">Online Option</th>
      <th class="text-center">Accelerated Option</th>
      <th class="text-center">Financial Aid Eligible</th>
  </thead>
  </tr>

<?php $curriculum_url = get_field('curriculum_url'); ?>
<tr>
  <td>
<a href="<?php the_field( 'curriculum_url' ); ?>">
<?php 
  the_title();?>
</a>
</td>
<td>
<?php the_field( 'program_degree' );?>
</td>
<td  class="text-center">
<?php if( get_field('online_degree') == 'yes' ) { ?>
<i class="fa fa-chalkboard-teacher fa-2x" aria-hidden="true"><span  class="show-for-sr">Online Option</span></i>
<?php }
?>
</td>
<td class="text-center">
<?php if( get_field('accelerated_progam') == 'yes' ) { ?>

<i class="fas fa-running fa-2x" aria-hidden="true"><span  class="show-for-sr">Accelerated Option</span></i>

<?php }
?>
</td>
<td class="text-center">
<?php if( get_field('financial_aid_eligible') == 'yes' ) { ?>
<i class="fas fa-dollar-sign fa-2x" aria-hidden="true"><span  class="show-for-sr">financial aid eligible</span></i>
<?php }
?>
</td>
</tr>
</table>
</div>
<?php endwhile;  ?>
<?php endif; ?>
</div>
</div>
</div>

</article>
</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer();