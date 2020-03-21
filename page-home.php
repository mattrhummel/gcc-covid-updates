<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
* Template Name: Home
*/
get_header(); ?>


<?php //get_template_part( 'template-parts/content', 'promotions' );  ?>

<div class="row expanded">

      <div class="card green">

        <div class="small-12 medium-6">
          
            <h1 clsas="text-uppercase">This summer learning continues online</h1>

            <p>Amazing things happen when you connect with our expert fqaculty in our virtual classrooms.  Fully accredited and top-ranked, you can trust an online Germanna education will take you places</p>

            <a href="/online-classes/">Get Started</a>

      </div>

    </div>

</div>

<div class="row expanded"> 
  <div class="columns small-12 medium-6">

      <div class="card yellow">
        
          <h2>Online summer classes start May 26</h2>

          <a href="" class="button">classes</a>

      </div>

  </div>
  <div class="columns small-12 medium-6">

    <div class="card black">
    
      <h2>Fall class registration starts April 1</h2>
      
      <a href="" class="button">remind me</a>

    </div>

  </div>
</div>


<div class="row expanded image-row" style="background-image:('');">

  <div class="card red">
  
      <div class="columns small-12 medium-6">
        
       <h2>college transfer</h2>

       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

      </div>

      <div class="columns small-12 medium-6">
        
        <ul>
          <li>45+ transfer partners</li>
          <li>#1 in umw transfers</li>
          <li>1/3 cost of most va 4 year schools</li>
        </ul>

      </div>

  </div>

</div>

<div class="row expanded">

    <div class="columns small-12 medium-6">

      <a href="">

        <div class="card black">
          
          <h2>recognized</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

        </div>

      </a>

  </div>

  <div class="columns small-12 medium-6">

      <a href="">
        <div class="card green">
          
          <h2>our people are the difference</h2>

              <ul class="list-unstyled">
                <li>lorem ipsum</li>
                <li>lorem ipsum</li>
                <li>lorem ipsum</li>
                <li>lorem ipsum</li>
                <li>lorem ipsum</li>
              </ul>

        </div>
      </a>
    
  </div>
  
</div>


<div class="row expanded image-row" style="background-image:('');">

  <div class="card green">

    <div class="row expanded no-gutters">

    <div class="columns small-12 medium-6">

      <ul>
        <li><a href="">Arts & Humanities</a></li>
        <li><a href="">Business</a></li>
        <li><a href="">Education & Social Science</a></li>
        <li><a href="">Healthcare</a></li>
        <li><a href="">It & Cybersecurity</a></li>
        <li><a href="">Public Service</a></li>
        <li><a href="">Science & Engineering</a></li>
        <li><a href="">Technical Studies</a></li>
      </ul>
      
    </div>
    <div class="columns small-12 medium-6">

      <h2>Career training</h2>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

    </div>
  </div>
  </div>

</div>

<div class="row expanded">

  <div class="columns small-12 medium-6">

    <a href="">

      <div class="card green">
        
         <h2>germanna cares</h2>

      </div>

    </a>   

  </div>

  <div class="columns small-12 medium-6">

     <a href="">

      <div class="card green">
        
         <h2>save big</h2>

      </div>

    </a> 
    
  </div>

</div>

<div class="row expanded image-row" style="background-image:('');">
  
  <div class="card red">
    <div class="columns small-12 medium-6">

      <ul>
        <li><a href="">Arts & Humanities</a></li>
        <li><a href="">Business</a></li>
        <li><a href="">Education & Social Science</a></li>
        <li><a href="">Healthcare</a></li>
        <li><a href="">It & Cybersecurity</a></li>
        <li><a href="">Public Service</a></li>
        <li><a href="">Science & Engineering</a></li>
        <li><a href="">Technical Studies</a></li>
      </ul>
      

    </div>
    <div class="columns small-12 medium-6">

      <h2>Career training</h2>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

    </div>
  </div>


</div>

	<?php // get_template_part( 'template-parts/content', 'pathways' );  ?>
<!-- 	<?php //get_template_part( 'template-parts/content', 'getstarted' ); ?>
 -->	

	<?php // get_template_part( 'template-parts/content', 'highlights' ); ?>

<?php
//highlights section
$highlights_heading = get_field('highlights_heading');
 ?>

<div id="highlights" class="row expanded">

<div class="highlights-content">

<div class="row expanded">

<div id="4080701046" class="column large-6 collapse">

<h2 class="text-center"><?php the_field('highlights_heading'); ?></h2>


   <?php

      $args =  array (

        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order' => 'DESC',
        'posts_per_page'=>6

      );

  ?>

  <?php

  $query = new WP_Query( $args ); ?>

  <?php if ( $query->have_posts() ) : ?>

  <?php while ( $query->have_posts() ) : $query->the_post();?>


    <div class="latest-post">
      
      <h3 class="post-title"><a href="<?php the_permalink(); ?>">   

        <?php the_title(); ?></a></h3>
        <p><?php echo get_the_date(); ?></p>


    </div>


<?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

<?php else : ?>

    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018'); ?></p>

<?php endif; ?>

    <a href="<?php esc_html_e('/blog/', 'gcc-wp-2018' ); ?>" class="button expanded"><?php esc_html_e('View all Highlights', 'gcc-wp-2018' ); ?></a>


</div>

<div  class="column large-6 collapse">

	<h2>Covid Updates</h2>

<?php

  $args =  array (

    'post_type' => 'covid_19',
    'post_status' => 'publish',
    'orderby' => 'publish_date',
    'order' => 'DESC',
    'posts_per_page'=>6

  );
  ?>

  <?php

  $query = new WP_Query( $args ); ?>

  <?php if ( $query->have_posts() ) : ?>

  <?php while ( $query->have_posts() ) : $query->the_post();?>


    <div class="latest-post">
      
      <h3 class="post-title"><a href="<?php the_permalink(); ?>">   

        <?php the_title(); ?></a></h3>
        <p><?php echo get_the_date(); ?></p>


    </div>

<?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

<?php else : ?>

    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018'); ?></p>

<?php endif; ?>


    <a href="<?php esc_html_e('/covid-19/', 'gcc-wp-2018' ); ?>" class="button expanded"><?php esc_html_e('View all Covid Updates', 'gcc-wp-2018' ); ?></a>

</div>

</div>

</div>

</div>
	  
<?php get_footer();