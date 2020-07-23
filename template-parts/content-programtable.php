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