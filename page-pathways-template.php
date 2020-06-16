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
  <label for="program_degree">Find programs by degree</label>
<select name="program_degree" id="degree" class="postform" onchange="submit();">
        <option selected="selected">Degree Type</option>
        <option value="as">Associate of Applied Science</option>
        <option value="aa-and-s">Associate of Arts &amp; Sciences</option>
</select>
</form>
</div>
<div class="columns medium-6">

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <label for="program_degree">Find programs by pathway</label>
<select name="program_degree" id="degree" class="postform" onchange="submit();">
        <option selected="selected">Pathway Type</option>
        <option value="business-pathway">Business Pathway</option>
</select>
</form>
</div>
</div>
<?php /* Reset filter */ ?>
<p><a href="<?php the_permalink(); ?>">Clear filter</a></p>

<?php
if( !isset($_POST['program_degree']) || '' == $_POST['program_degree']) {

    // unfiltered product list here

}
else {

    // Get dropdown value
    // Don't forget to sanitize this!
    $program_degree = $_POST['degree'];

    // Create new query
    $query = new WP_Query( array(
        'post_type'=> 'gcc_programs', // your CPT
        'post_status' => 'publish',
        'meta_key' => 'size',
        'meta_value' => $program_degree, // Dropdown value
    ) );

    // Loop
    if($query->have_posts()):
        while( $query->have_posts() ): $query->the_post();
            // Product content

            the_title();
          
         endwhile;
    endif;

    // reset query to default
    wp_reset_postdata();

}
?>      
 
</div>

</div>
</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer();