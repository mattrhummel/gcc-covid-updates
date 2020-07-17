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