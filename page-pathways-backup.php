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
<form action="" method="GET" id="pathway-list">
 <label for="program-pathway">Find programs by pathway</label>


</form>
</div>
<div class="columns medium-6">

<?php $program_degree = ('program_degree'); ?>

<form action="" method="GET" id="program-list">
 <label for="program-degree">Find programs by degree</label>

<select name="program-degree" id="program-degree" onchange="submit();">

<option value="allprograms" <?php echo ($_GET['program-degree'] == '0') ? ' selected="selected"' : ''; ?>>Show all</option>   

 <?php 
 $terms = get_terms('taxonomy=program_degree&post_type=gcc_programs'); // you can use any taxonomy, instead of just 'category'
 $count = count($terms); //How many are they?
 if ( $count > 0 ){  //If there are more than 0 terms
 foreach ( $terms as $term ) {  //for each term:

    echo '<option value="'.$term->name.'"';
    echo ($_GET['program_degree'] == ''.$term->name.'') ? ' selected="selected"' : '';
    echo '>'.$term->name.'</option>';
}
 } 
?>

</select>
</form>

</div>
</div>


<?php 

switch($program_degree['value'])  {

   case: 'as' : 

      echo 'Degree is Associate of Applied Sciend';

   break;
   
   case: 'aa-and-s' : 

      echo 'Degree is Associate of Applied Sciend';

   break;

    case: 'certificate' : 

      echo 'Degree is Associate of Applied Sciend';

   break;

    case: 'certificate' : 

      echo 'Degree is Associate of Applied Sciend';

    break;


}
 ?>

</div>

</div>
</div>
</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer();