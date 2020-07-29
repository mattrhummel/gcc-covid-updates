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

  <li style="list-style-type: none;">
    <div class="columns medium-3">
    <a data-filter=".business-pathway"><div class="filter callout alert text-center" data-equalizer-watch><h2 class="h5"><i class="fas fa-briefcase" style="margin-bottom: 10px;"></i><br/>Business</h2></div>
    </a>
  </div>
</li>

 
  <li style="list-style-type: none;">
    <div class="columns medium-3">
    <a data-filter=".public-service-pathway"><div class="filter callout alert text-center" data-equalizer-watch><h2 class="h5"><i class="fas fa-gavel" style="margin-bottom: 10px;"></i><br/>Public Service</h2></div>
    </a>
  </div>
</li>

 
  <li style="list-style-type: none;">
    <div class="columns medium-3">
    <a data-filter=".it-and-technical-studies-pathway"><div class="filter callout alert text-center" data-equalizer-watch><h2 class="h5"><i class="fas fa-server" style="margin-bottom: 10px;"></i><br/>IT &amp; Technical Studies</h2></div>
    </a>
  </div>
</li>

 
  <li style="list-style-type: none;">
    <div class="columns medium-3">
    <a data-filter=".health-science-pathway"><div class="filter callout alert text-center" data-equalizer-watch><h2 class="h5"><i class="fas fa-user-md" style="margin-bottom: 10px;"></i><br/>Health Science</h2></div>
    </a>
  </div>
</li>

 
  <li style="list-style-type: none;">
    <div class="columns medium-3">
    <a data-filter=".social-science-and-education"><div class="filter callout alert text-center" data-equalizer-watch><h2 class="h5"><i class="fas fa-user-md" style="margin-bottom: 10px;"></i><br/>Social Science &amp; Education</h2></div>
    </a>
  </div>
</li>

  <li style="list-style-type: none;">
    <div class="columns medium-3">
    <a data-filter=".science-and-engineering-pathway"><div class="filter callout alert text-center" data-equalizer-watch><h2 class="h5"><i class="fas fa-atom" style="margin-bottom: 10px;"></i><br/>Science and Engineering</h2></div>
    </a>
  </div>
</li>

 
  <li style="list-style-type: none;">
    <div class="columns medium-3">
    <a data-filter=".humanities-and-arts-pathway"><div class="filter callout alert text-center" data-equalizer-watch><h2 class="h5"><i class="fas fa-palette" style="margin-bottom: 10px;"></i><br/>Humanities &amp; Arts</h2></div>
    </a>
  </div>
</li>

</ul>


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

 <?php 

 foreach ( $program_taxs as $program_tax_slug => $program_tax_name ):   //for each term: ?>



 <?php endforeach;?>


</div>
<div class="columns medium-4">
    <?php the_content(); ?>
  </div>
</div>

   <div class="row expanded" data-equalizer>

<div class="columns medium-12">

<div id="isotope-list">
<div class="row expanded">
 <div class="columns">

  <?php
    while($programs->have_posts()) : $programs->the_post();
      $idd = get_the_ID();
      $item_classes = '';
      $item_cats = get_the_terms($post->ID, 'pathway_names');
      if($item_cats):
        
        foreach($item_cats as $item_cat) {

          $item_classes .= $item_cat->slug . ' '; ?>
        
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

</table>

   <?php     }
      endif;

  ?>


 <?php wp_reset_query(); ?>

<?php endwhile;  ?>


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