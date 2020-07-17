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