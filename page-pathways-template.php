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

<div class="columns small-12 float-left">
   <header>
              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
              <?php the_breadcrumb() ?> 
  </header>
    
    <div class="entry-content" id="main">

      <?php the_content(); ?>

<div class="row expanded">
<div class="columns medium-12">

<form action="" method="GET" id="pathways_search">

<div class="row expanded collapse">
<div class="columns">
<p>Find programs by:</p>
</div>
</div>
<div class="row expanded" data-equalizer-watch>
<div class="columns alert medium-4">
  <div class="callout">
<label for="programpathway" class="show-for-sr">Find programs by pathway</label>
<select name="programpathway" id="programpathway" onchange="submit();">
<option value=""<?php echo ($_GET['programpathway'] == '') ? ' selected="selected"' : ''; ?>>Pathway</option>
<?php 
    $categories = get_categories('taxonomy=pathway_names&post_type=gcc_programs'); 
    foreach ($categories as $category) : 
    echo '<option value="'.$category->name.'"';
    echo ($_GET['programpathway'] == ''.$category->name.'') ? ' selected="selected"' : '';
    echo '>'.$category->name.'</option>';
    endforeach; 
?>
</select>
</div>
</div>
</div>

</form>

<?php if(empty ( $_GET['programpathway'] )) {
?>

<?php if( !isset($_GET['programpathway']) || '' == $_GET['programpathway']) {
    
    $programlist = new WP_Query( array(
    'post_type' => 'gcc_programs', 
    'posts_per_page' => -1,
    'orderby'=> 'title', 
    'order' => 'ASC' 
    ) ); 
} 
else { //if select value exists (and isn't 'show all'), the query that compares $_GET value and taxonomy term (name)
    $programcategory = $_GET['programpathway']; //get sort value
    $programlist = new WP_Query( array(
    'post_type' => 'gcc_programs', 
    'posts_per_page' => -1,
    'orderby'=> 'title', 
    'order' => 'ASC',
    'tax_query' => array(
        array(
        'taxonomy' => 'pathway_names',
        'field' => 'name',
        'terms' => $programcategory
        ),  
    ), 
    ));

}

if ($programlist->have_posts()) : ?>

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

<?php while ( $programlist->have_posts() ) : $programlist->the_post(); 
?>
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
<td  class="text-center">
<?php if( get_field('accelerated_progam') == 'yes' ) { ?>

<i class="fas fa-running fa-2x" aria-hidden="true"><span  class="show-for-sr">Accelerated Option</span></i>

<?php }
?>
</td>
<td  class="text-center">

<?php if( get_field('financial_aid_eligible') == 'yes' ) { ?>

<i class="fas fa-dollar-sign fa-2x" aria-hidden="true"><span  class="show-for-sr">financial aid eligible</span></i>

<?php }
?>
</td>
</tr>

<?php endwhile; ?> 

</table>

<?php else : 
echo 'There are no news items in that category.'; 
endif; 
?>  

<?php wp_reset_query(); ?>

<?php

}

elseif

(!empty ( $_GET['programpathway'] )) {

?>
<?php if( !isset($_GET['programpathway'])) {
    
    $programlist = new WP_Query( array(
    'post_type' => 'gcc_programs', 
    'posts_per_page' => -1,
    'orderby'=> 'title', 
    'order' => 'ASC'
    ) ); 
} 
else { //if select value exists (and isn't 'show all'), the query that compares $_GET value and taxonomy term (name)
    $programcategory = $_GET['programpathway']; //get sort value
    $programlist = new WP_Query( array(
    'post_type' => 'gcc_programs', 
    'posts_per_page' => -1,
    'orderby'=> 'title', 
    'order' => 'ASC',
    'tax_query' => array(
        array(
        'taxonomy' => 'pathway_names',
        'field' => 'name',
        'terms' => $programcategory
        ) 
    ), 
    ));

}

if ($programlist->have_posts()) : ?>

<h2><?php echo $programcategory ?> Programs</h2>

<table style="width: 100%;"  class="stack ">
  <tr>
    <thead>
    <th>Program of Study</th>
    <th>Online Program</th>
    <th>Accelerated Programs</th>
    <th>Degree Type</th>
    <th>Credits</th>
    <th>Financial Aid Eligible</th>
  </thead>
  </tr>

<?php while ( $programlist->have_posts() ) : $programlist->the_post(); 
?>
<?php $curriculum_url = get_field('curriculum_url'); ?>

<tr>
  <td>
<a href="<?php the_field( 'curriculum_url' ); ?>">
<?php 
  the_title();?>
</a>
</td>
<td>
  
<?php if( get_field('online_degree') == 'yes' ) { ?>

<i class="fa fa-check" style="color: #376d66;" aria-hidden="true"><span  class="show-for-sr">Online</span></i>

<?php }
?>
<?php if( get_field('online_degree') == 'no' ) { ?>

<i class="fas fa-times" style="color: red;" aria-hidden="true"><span  class="show-for-sr">Online</span></i>

<?php }
?>
</td>
<td>
  
<?php if( get_field('accelerated_progam') == 'yes' ) { ?>

<i class="fa fa-check" style="color: #376d66;" aria-hidden="true"><span  class="show-for-sr">Online</span></i>

<?php }
?>
<?php if( get_field('accelerated_progam') == 'no' ) { ?>

<i class="fas fa-times" style="color: red;" aria-hidden="true"><span  class="show-for-sr">Online</span></i>

<?php }
?>
</td>
<td>
<?php the_field( 'program_degree' );?>
</td>
<td><?php the_field( 'number_of_credits' ); ?></td>
<td>

<?php if( get_field('financial_aid_eligible') == 'yes' ) { ?>

<i class="fa fa-check" style="color: #376d66;" aria-hidden="true"><span  class="show-for-sr">financial aid eligible</span></i>

<?php }
?>
<?php if( get_field('financial_aid_eligible') == 'no' ) { ?>

<i class="fas fa-times" style="color: red;" aria-hidden="true"><span  class="show-for-sr">Online</span></i>

<?php }
?>
</td>

</tr>

<?php endwhile; ?> 
</table>

<?php else : 
echo 'There are no news items in that category.'; 
endif; 
?>  

<?php wp_reset_query(); ?>

<?php

}
?>

</div>
</div>

</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer();