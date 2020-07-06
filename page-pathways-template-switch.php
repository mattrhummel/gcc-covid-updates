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
<?php /* You can also leave 'action' blank: action="" */ ?>
<form role="search" method="get" action="<?php echo get_home_url(); ?>/search_gcse/">
    <div class="input-group">
  
      <label for="q" style="display:none;">Search</label> 
      <input type="text" name="q" id="search-field" class="input-group-field">
      
      <div class="input-group-button">
        <button id="searchsubmit-mobile" type="submit" class="button" value="" aria-label="<?php _e('fa fa-eyeglass', 'gcc-wp-2018')?>"><span class="fa fa-search"></span></button>
      </div>
    </div>
  </form>
</div>
</div>

<form action="" method="GET" id="pathways">

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

<?php // let the queries begin 
if( !isset($_GET['programdegree']) || '' == $_GET['programdegree']) {
    
    $programlist = new WP_Query( array(
    'post_type' => 'gcc_programs', 
    'posts_per_page' => -1,
    'orderby' => 'DATE'
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
    ) 
    ));

}

if ($programlist->have_posts()) : ?>

<ul>
<?php while ( $programlist->have_posts() ) : $programlist->the_post(); 
?>

<li>
<a href="<?php echo the_permalink(); ?>">
<?php 
  the_title();?>
</a>
<?php if( get_field('online_degree') == 'yes' ) { ?>
 online
<?php } ?>
</li>

<?php endwhile; ?> 
</ul>

<?php else : 
echo 'There are no news items in that category.'; 
endif; 
?>  

<?php wp_reset_query(); ?>

<?php // let the queries begin 
if( !isset($_GET['programpathway']) || '' == $_GET['programpathway']) {
    
    $programlist = new WP_Query( array(
    'post_type' => 'gcc_programs', 
    'posts_per_page' => -1,
    'orderby' => 'DATE'
    ) ); 
} 

else { //if select value exists (and isn't 'show all'), the query that compares $_GET value and taxonomy term (name)
    $programcategory = $_GET['programpathway']; //get sort value
    $pathwaylist = new WP_Query( array(
    'post_type' => 'gcc_programs', 
    'posts_per_page' => -1,
    'orderby' => 'TITLE',
    'order' => 'DESC',
    'tax_query' => array(
        array(
        'taxonomy' => 'pathway_name',
        'field' => 'name',
        'terms' => $programcategory
        ) 
    ) 
    ));

}

if ($pathwaylist->have_posts()) : ?>

<ul>
<?php while ( $pathwaylist->have_posts() ) : $pathwaylist->the_post(); 
?>

<li>
<a href="<?php echo the_permalink(); ?>">
<?php 
  the_title();?>
</a>
<?php if( get_field('online_degree') == 'yes' ) { ?>
 online
<?php } ?>
</li>

<?php endwhile; ?> 
</ul>

<?php else : 
echo 'There are no news items in that category.'; 
endif; 
?>  

<?php wp_reset_query(); ?>

</div>
</div>


</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer();