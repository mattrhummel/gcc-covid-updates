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

<h2>Search and Filter Programs</h2>

<form action="" method="GET" id="pathways_search">

    <?php /* You can also leave 'action' blank: action="" */ ?>
    <div class="input-group">
  
      <label for="post_type" style="display:none;">Search</label> 
      <input type="text" name="post_type" id="post_type" class="input-group-field" placeholder="<?php echo esc_attr_x( 'Search programs', 'placeholder' ) ?>">
      
      <div class="input-group-button">
        <button id="searchsubmit-desktop" type="submit" class="button" value="" aria-label="<?php _e('fa fa-eyeglass', 'gcc-wp-2018')?>"><span class="fa fa-search"></span></button>
      </div>
    </div>
</div>
</div>

<div class="row expanded">

<div class="columns medium-6">

<label for="programpathway">Find programs by pathway</label>
<select name="programpathway" id="programpathway" onchange="submit();">
<option value="" <?php echo ($_GET['programpathway'] == '') ? ' selected="selected"' : ''; ?>>Show all</option>
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

<div class="columns medium-6">

<label for="programdegree">Find programs by degree</label>
<select name="programdegree" id="programdegree" onchange="submit();">
<option value="" <?php echo ($_GET['programdegree'] == '') ? ' selected="selected"' : ''; ?>>Show all</option>
<?php 
    $categories = get_categories('taxonomy=program_degree&post_type=gcc_programs'); 
    foreach ($categories as $category) : 
    echo '<option value="'.$category->name.'"';
    echo ($_GET['programdegree'] == ''.$category->name.'') ? ' selected="selected"' : '';
    echo '>'.$category->name.'</option>';
    endforeach; 
?>
</select>

</div>
</div>

</form>
 
<?php if(empty ( $_GET['programpathway'] ) && empty ( $_GET['programdegree']) && empty ($_GET['post_type'])) {
?>

<?php if( !isset($_GET['post_type, programpathway, programdegree']) || '' == $_GET['post_type, programpathway, programdegree']) {
    
    $programlist = new WP_Query( array(
    'post_type' => 'gcc_programs', 
    'meta_key'       => 'online_degree',
    'orderby'        => 'meta_value',
    'order'          => 'ASC',
    'posts_per_page' => -1,
    'orderby' => 'TITLE',
    'order' => 'ASC'
    ) ); 
} 
else { //if select value exists (and isn't 'show all'), the query that compares $_GET value and taxonomy term (name)
    $programcategory = $_GET['post_type, programpathway, programdegree']; //get sort value
    $programlist = new WP_Query( array(
    'post_type' => 'gcc_programs', 
    'posts_per_page' => -1,
    'orderby' => 'TITLE',
    'order' => 'ASC',
    'tax_query' => array(
        array(
        'taxonomy' => 'program_degree',
        'field' => 'name',
        'terms' => $programcategory
        ) 
    ),
      array( 
        'taxonomy' => 'pathway_names',
        'field' => 'name', 
        'terms' => $programcategory
    ), 
    ));

}

if ($programlist->have_posts()) : ?>
<p>this shows all the online programs by default.</p>
<h2>Online Pathways and Degrees</h2>

<table style="width: 100%;">
  <tr>
    <thead>
    <th>Program of Study</th>
    <th class="text-center">Online Program</th>
    <th class="text-center">Credits</th>
    <th class="text-center">Financial Aid Eligible</th>
    </thead>
  </tr>
  <tbody>
<?php while ( $programlist->have_posts() ) : $programlist->the_post(); 
?>
<tr>
<td>
<a href="<?php echo the_permalink(); ?>">
<?php 
  the_title();?>
</a>
</td>
<td class="text-center">
  
<?php if( get_field('online_degree') == 'yes' ) { ?>

<i class="fa fa-check" style="color: #376d66;" aria-hidden="true"><span  class="show-for-sr">Online</span></i>

<?php }
?>

</td>
<td class="text-center"><?php the_field( 'number_of_credits' ); ?></td>
<td class="text-center">

<?php if( get_field('financial_aid_eligible') == 'yes' ) { ?>

<i class="fa fa-check" style="color: #376d66;" aria-hidden="true"><span  class="show-for-sr">financial aid eligible</span></i>

<?php }
?>

</td>
</tr>

<?php endwhile; ?> 
</tbody>
</table>

<?php else : 
echo 'There are no news items in that category.'; 
endif; 
?>  

<?php wp_reset_query(); ?>

<?php

}
elseif

(empty ( $_GET['post_type'] )) {

?>

<?php if( !isset($_GET['post_type'])) {

  $type = $_GET['post_type'];
   
    $programsearch = new WP_Query( array(
    'post_type' => $type,
    'posts_per_page' => -1,
    'orderby' => 'TITLE',
    'order' => 'ASC'
    ) ); 

} 
else { //if select value exists (and isn't 'show all'), the query that compares $_GET value and taxonomy term (name)
   $type = $_GET['post_type'];
    $programcategory = $_GET['post_type']; //get sort value
    $programsearch = new WP_Query( array(
    'post_type' => $type,
    'posts_per_page' => -1,
    'orderby'        => 'title',
    'order'          => 'ASC',
    'tax_query' => array(
    array(
        'taxonomy' => 'program_degree',
        'field' => 'name',
        'terms' => $programcategory
        ) 
    ),
    array( 
        'taxonomy' => 'pathway_names',
        'field' => 'name', 
        'terms' => $programcategory
    ), 
    ));

}
if ($programsearch->have_posts()) : 

 
?>

this shows just degrees by search field

<h2>All <?php echo $programsearch ?> Degrees</h2>

<table>
<tr>
<thead>
<th>Program of Study</th>
<th class="text-center">Online Program</th>
<th class="text-center">Financial Aid Eligible</th>
</thead>
</tr>
<tbody>
<?php while ( $programlist->have_posts() ) : $programlist->the_post(); 
?>

<?php $curriculum_url = get_field('curriculum_url'); ?>
<tr>
  <td>
<a href="<?php echo the_permalink(); ?>">
<?php 
  the_title();?>
</a>
</td>
<td class="text-center">
  
<?php if( get_field('online_degree') == 'yes' ) { ?>

<i class="fa fa-check" style="color: #376d66;" aria-hidden="true"><span  class="show-for-sr">Online</span></i>

<?php }
?>

</td>
<td class="text-center">

<?php if( get_field('financial_aid_eligible') == 'yes' ) { ?>

<i class="fa fa-check" style="color: #376d66;" aria-hidden="true"><span  class="show-for-sr">financial aid eligible</span></i>

<?php }
?>
</td>
</tr>

<?php endwhile; ?> 
</tbody>
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
    'orderby' => 'title',
    'order'   => 'ASC',
   
    ) ); 

} 
else { //if select value exists (and isn't 'show all'), the query that compares $_GET value and taxonomy term (name)
    $programcategory = $_GET['programpathway']; //get sort value
    $programlist = new WP_Query( array(
    'post_type' => 'gcc_programs', 
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order'   => 'ASC',
    'tax_query' => array(
        array(
        'taxonomy' => 'pathway_names',
        'field' => 'name',
        'terms' => $programcategory,
        ) 
    ), 
    ));

}
if ($programlist->have_posts()) : ?>

this shows just pathways selected

<h2>All <?php echo $programcategory ?> Programs</h2>

<table>
  <thead></thead>
</table>

<table style="width: 100%;">
  <tr>
    <thead>
    <th>Program of Study</th>
    <th class="text-center">Online Program</th>
    <th class="text-center">Credits</th>
    <th class="text-center">Financial Aid Eligible</th>
    </thead>
  </tr>

<?php while ( $programlist->have_posts() ) : $programlist->the_post(); 
?>
<?php $curriculum_url = get_field('curriculum_url'); ?>
<tbody>
<tr>
  <td>
<a href="<?php echo the_permalink(); ?>">
<?php 
  the_title();?>
</a>
</td>
<td class="text-center">
  
<?php if( get_field('online_degree') == 'yes' ) { ?>

<i class="fa fa-check" style="color: #376d66;" aria-hidden="true"><span  class="show-for-sr">Online</span></i>

<?php }
?>

</td>
<td class="text-center"><?php the_field( 'number_of_credits' ); ?></td>
<td class="text-center">

<?php if( get_field('financial_aid_eligible') == 'yes' ) { ?>

<i class="fa fa-check" style="color: #376d66;" aria-hidden="true"><span  class="show-for-sr">financial aid eligible</span></i>

<?php }
?>
</td>

</tbody>
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

(!empty( $_GET['programdegree'] )) {

?>


<?php if( !isset($_GET['programdegree'])) {
    
    $programlist = new WP_Query( array(
    'post_type' => 'gcc_programs', 
    'posts_per_page' => -1,
    'orderby' => 'TITLE',
    'order' => 'ASC'
    ) ); 

} 
else { //if select value exists (and isn't 'show all'), the query that compares $_GET value and taxonomy term (name)
    $programcategory = $_GET['programdegree']; //get sort value
    $programlist = new WP_Query( array(
    'post_type' => 'gcc_programs', 
    'posts_per_page' => -1,
    'orderby' => 'TITLE',
    'order' => 'DESC',
    'tax_query' => array(
        array(
        'taxonomy' => 'program_degree',
        'field' => 'name',
        'terms' => $programcategory
        ) 
    ), 
    ));

}

if ($programlist->have_posts()) : ?>

this shows just degrees selected

<h2>All <?php echo $programcategory ?> Degrees</h2>

<table>
<tr>
<thead>
<th>Program of Study</th>
<th class="text-center">Online Program</th>
<th class="text-center">Credits</th>
<th class="text-center">Financial Aid Eligible</th>
</thead>
</tr>
<tbody>
<?php while ( $programlist->have_posts() ) : $programlist->the_post(); 
?>

<?php $curriculum_url = get_field('curriculum_url'); ?>
<tr>
  <td>
<a href="<?php echo the_permalink(); ?>">
<?php 
  the_title();?>
</a>
</td>
<td class="text-center">
  
<?php if( get_field('online_degree') == 'yes' ) { ?>

<i class="fa fa-check" style="color: #376d66;" aria-hidden="true"><span  class="show-for-sr">Online</span></i>

<?php }
?>

</td>
<td class="text-center"><?php the_field( 'number_of_credits' ); ?></td>

<td class="text-center">

<?php if( get_field('financial_aid_eligible') == 'yes' ) { ?>

<i class="fa fa-check" style="color: #376d66;" aria-hidden="true"><span  class="show-for-sr">financial aid eligible</span></i>

<?php }
?>
</td>
</tr>

<?php endwhile; ?> 
</tbody>
</table>

<?php else : 
echo 'There are no news items in that category.'; 
endif; 
?>  

<?php wp_reset_query(); ?>


<?php

}

elseif

(empty( $_GET['programpathway'] ) && empty($_GET['programdegree'])) {

?>

<?php if( !isset($_GET['programpathway']) && !isset($_GET['programdegree'])) {
    
    $programlist = new WP_Query( array(
    'post_type' => 'gcc_programs', 
    'posts_per_page' => -1,
    'orderby' => 'TITLE',
    'order' => 'ASC'
    ) ); 

} 
else { //if select value exists (and isn't 'show all'), the query that compares $_GET value and taxonomy term (name)
    $programcategory = $_GET['programpathway, programdegree']; //get sort value
    $programlist = new WP_Query( array(
    'post_type' => 'gcc_programs', 
    'posts_per_page' => -1,
    'meta_key'       => 'online_degree',
    'orderby'        => 'meta_value',
    'order'          => 'ASC',
    'tax_query' => array(
    array(
        'taxonomy' => 'program_degree',
        'field' => 'name',
        'terms' => $programcategory
        ) 
    ),
    array( 
        'taxonomy' => 'pathway_names',
        'field' => 'name', 
        'terms' => $programcategory
    ), 
    ));

}
if ($programlist->have_posts()) : ?>

this shows pathways and degrees selected

<h2>All <?php echo $programcategory ?> Programs</h2>

<table>
  <thead></thead>
</table>

<table style="width: 100%;">
  <tr>
    <thead>
    <th>Program of Study</th>
    <th class="text-center">Online Program</th>
    <th class="text-center">Financial Aid Eligible</th>
    </thead>
  </tr>

<?php while ( $programlist->have_posts() ) : $programlist->the_post(); 
?>
<?php $curriculum_url = get_field('curriculum_url'); ?>
<tbody>
<tr>
  <td>
<a href="<?php echo the_permalink(); ?>">
<?php 
  the_title();?>
</a>
</td>
<td class="text-center">
  
<?php if( get_field('online_degree') == 'yes' ) { ?>

<i class="fa fa-check" style="color: #376d66;" aria-hidden="true"><span  class="show-for-sr">Online</span></i>

<?php }
?>

</td>
<td class="text-center">

<?php if( get_field('financial_aid_eligible') == 'yes' ) { ?>

<i class="fa fa-check" style="color: #376d66;" aria-hidden="true"><span  class="show-for-sr">financial aid eligible</span></i>

<?php }
?>
</td>

</tbody>
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