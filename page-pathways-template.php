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
  <div class="columns medium-9" id="main">
    <div class="entry-content" id="main">

      <?php the_content(); ?>

<div class="row expanded" data-equalizer>

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

<ul id="filters" style="list-style-type: none; marging-left: 0;">

<li style="list-style: none;">
  <div class="columns medium-3">
  <a href="#" data-filter="*">
     <div class="callout" data-equalizer-watch>
        All Programs
    </div>
  </a>
  </div>
</li>

 <?php 

 foreach ( $program_taxs as $program_tax_slug => $program_tax_name ):   //for each term: ?>

  <li style="list-style-type: none;">
    <div class="columns medium-3">
    <a data-filter=".<?php echo $program_tax_slug; ?>"><div class="filter callout" data-equalizer-watch><?php echo $program_tax_name;  ?></div>
    </a>
  </div>
</li>

 <?php endforeach;?>

</ul>
</div>
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

          $item_classes .= $item_cat->slug . ' ';

        }
      endif;

  ?>

  <div class="<?php echo $item_classes ?> item">
    
    <h1>  <?php 
      the_title();
      ?></h1>

  </div>

 <?php wp_reset_query(); ?>

<?php endwhile;  ?>


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