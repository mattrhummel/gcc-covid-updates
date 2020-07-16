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
    $programcategory = $_GET['post_type']; //get sort value
    $programsearch = new WP_Query( array(
    
    'posts_per_page' => -1,
    'orderby' => 'TITLE',
    'order' => 'DESC' 
    ));

}
if ($programsearch->have_posts()) : 

if($type == 'gcc_programs') {
  
  $programsearch->set('post_type',array('gcc_programs'));
    
} 
?>

<h2>All <span style="text-transform: capitalize;"><?php echo $programcategory ?></span> Programs</h2>

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

<?php while ( $programsearch->have_posts() ) : $programsearch->the_post(); 
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