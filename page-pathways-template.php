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
    </div>
  </div>
  <div class="row expanded">
  <div class="columns medium-12" id="main">
    <div class="entry-content" id="main">


   <div class="row expanded" data-equalizer>

<div class="columns medium-8">
  <?php


    $args= array(

        'post_type' => 'gcc_programs',
         'posts_per_page'=> -1,
        'orderby' => 'title',
        'order' => 'ASC',
    );

   ?>

   <?php 

    $programs = new WP_Query($args);

    if(is_array($programs->posts) && !empty($programs->post)) {

        foreach($programs->posts as $programs->post) {

          $post_taxs = wp_get_post_terms($programs->post->ID, 'pathway_names', array("fields" => "all"));
            if(is_array($post_taxs) && !empty($post_taxs)) {
              foreach($post_taxs as $post_tax) {
                $program_taxs[$post_tax->slug] = $post_tax->name;
              }
            }

        }

    }

   ?>

<?php $program_icon = get_field('program_icon', $term); ?>

<ul id="filters" style="list-style-type: none; margin-left: 0;">

<li style="list-style: none;">
  <div class="columns medium-3">
  <a href="#" data-filter="*" class="text-center">
     <div class="callout alert" data-equalizer-watch>
       <h2 class="h5"><i class="fas fa-asterisk" style="margin-bottom: 10px;"></i><br/>All Programs</h2>
    </div>
  </a>
  </div>
</li>

 <?php 

 foreach ( $program_taxs as $program_tax_slug => $program_tax_name ):   //for each term: ?>

  <li style="list-style-type: none;">
    <div class="columns medium-3">
    <a data-filter=".<?php echo $program_tax_slug; ?>"><div class="filter callout alert text-center" data-equalizer-watch><h2 class="h5"><i class="<?php echo $program_icon->term ?>" style="margin-bottom: 10px;"></i><br/><?php echo $program_tax_name;  ?></h2></div>
    </a>
  </div>
</li>

 <?php endforeach;?>

</ul>
</div>
<div class="columns medium-4">
    <?php the_content(); ?>
  </div>
</div>

   <div class="row expanded" data-equalizer>

<div class="columns medium-12">

<?php $the_query = new WP_Query( 'posts_per_page=-1' ); //Check the WP_Query docs to see how you can limit which posts to display ?>
<?php if ( $the_query->have_posts() ) : ?>

<div id="isotope-list">

<?php while ( $the_query->have_posts() ) : $the_query->the_post();?>

<?php $termsArray = get_the_terms( $post->ID, "pathway_names" );  //Get the terms for this particular item
 $termsString = ""; //initialize the string that will contain the terms ?>

<div class="row expanded">
 <div class="columns">

        <table style="width: 100%;" class="stack <?php echo $item_classes  ?> item" style="min-width: 100%;">
          <tr>
          
          <thead>
            <th >Program of Study</th>
            <th >Program Type</th>
            <th class="text-center" >Online Option</th>
            <th class="text-center" >Accelerated Option</th>
            <th class="text-center" >Financial Aid Eligible</th>
        </thead>
        </tr>

 <?php foreach ( $termsArray as $term ) { // for each term 
 $termsString .= $term->slug.' '; //create a string that has all the slugs 
 } ?>


<div class="<?php echo $termsString; ?> item">
      
<?php $curriculum_url = get_field('curriculum_url'); ?>
<tr>
  <td>
<a href="<?php the_field( 'curriculum_url' ); ?>">
<?php 
  the_title();?>
</a>
</td>
<td >
<?php the_field( 'program_degree' );?>
</td>
<td  >
<?php if( get_field('online_degree') == 'yes' ) { ?>
<i class="fa fa-chalkboard-teacher fa-2x" aria-hidden="true"><span  class="show-for-sr">Online Option</span></i>
<?php }
?>
</td>
<td  >
<?php if( get_field('accelerated_progam') == 'yes' ) { ?>

<i class="fas fa-running fa-2x" aria-hidden="true"><span  class="show-for-sr">Accelerated Option</span></i>

<?php }
?>
</td>
<td >

<?php if( get_field('financial_aid_eligible') == 'yes' ) { ?>

<i class="fas fa-dollar-sign fa-2x" aria-hidden="true"><span  class="show-for-sr">financial aid eligible</span></i>

<?php }
?>
</td>
</tr>


</div>

</table>

<!-- end item -->
    <?php endwhile;  ?>
    </div> <!-- end isotope-list -->
<?php endif; ?>

</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer();