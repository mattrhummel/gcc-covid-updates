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
<div class="row expanded">
  <div class="columns medium-6">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label for="program_degree">Find programs by Pathway</label>
<select name="program_degree" id="degree" class="postform" onchange="submit();">
        <option selected="selected">Degree Type</option>
        <option value="as">Associate of Applied Science</option>
        <option value="aa-and-s">Associate of Arts &amp; Sciences</option>
         <option value="certificate">Certificate</option>
</select>
</form>
</div>
<div class="columns medium-6">

<form action="" method="GET" id="newslist">
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
</form>
</div>
</div>

<?php // let the queries begin 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;  
if( !isset($_GET['programdegree']) || '' == $_GET['programdegree']) {
    $programlist = new WP_Query( array(
    'post_type' => 'gcc_programs', 
    'posts_per_page' => -1,
    'orderby' => 'DATE',
    'paged' => $paged
    ) ); 
} else { //if select value exists (and isn't 'show all'), the query that compares $_GET value and taxonomy term (name)
    $programcategory = $_GET['programdegree']; //get sort value
    $programlist = new WP_Query( array(
    'post_type' => 'gcc_programs', 
    'posts_per_page' => -1,
    'orderby' => 'DATE',
    'paged' => $paged,
    'tax_query' => array(
        array(
        'taxonomy' => 'program_degree',
        'field' => 'name',
        'terms' => $programcategory
        ) 
    ) 
    ));
}
if ($programlist->have_posts()) :
while ( $programlist->have_posts() ) : $programlist->the_post(); 
?>

<?php endwhile; 
else : 
echo 'There are no news items in that category.'; 
endif; 
?>  
<?php if(function_exists('wp_pagenavi')) {
    wp_pagenavi(array('query' => $programlist));
    } else {
    echo 'Please enable WP-PageNavi!';
    } ?> 
<?php wp_reset_query(); ?>
</div>

</div>
</div>
</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer();