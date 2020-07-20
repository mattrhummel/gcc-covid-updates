<?php
/**
* Default page template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
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
    <?php get_sidebar();?>
    
    <div class="columns small-12 large-9 float-left">
      
      <header>
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <?php the_breadcrumb() ?>
      </header>
      <?php // if the page has a featured image
      if  (has_post_thumbnail( ) )  { ?>
      <div class="page-heading-image hide-for-print visible-for-medium-up hidden-for-small-only" id="featured-image" data-toggler="hide" >
        <?php the_post_thumbnail('', array ('class' => 'lazy'));  ?>
      </div>
      <?php  }  else {  //.pagesubbanner
      // if page doesn't have a featured image
      ?>
      <?php } ?>
      
      <div class="entry-content" id="main">

        <?php //Page Heading
        get_template_part( 'template-parts/content', 'page-alert' );
        ?>
        
        <?php if (is_page('27674')) : ; ?>
        <script src="https://studyinthestates.dhs.gov/assets/widget/sits-widget.js" type="text/javascript"></script>
        <?php endif; ?>
        
        <?php
        the_content();
        ?>
        <?php if (is_page('website-statistics')) : ; ?>
        <iframe width="800" height="1000" src="https://datastudio.google.com/embed/reporting/37a0b848-8cfc-48e3-8f82-214b072e17bc/page/6zXD" frameborder="0" style="border:0" allowfullscreen></iframe>
        <?php endif; ?>
        <?php if (is_page('search_gcse')) : ; ?>
        <script async>
        (function() {
        var cx = '004235661866003871264:hsv9lloki5k';
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
        })();
        </script>
        
        <?php endif; ?>
   
        <?php if (is_page('40255')) : ; ?>
        <div class="row expanded" data-equalizer data-equalize-on="medium" id="sa-events">
          
          <?php
          $args =  array (
          'post_type' => 'bhm_events',
          'order'       => 'ASC',
          'posts_per_page'=> -1,
          );
          ?>
          <?php
          $query = new WP_Query( $args ); ?>
          <?php if ( $query->have_posts() ) : ?>
          <?php while ( $query->have_posts() ) : $query->the_post();?>
          <div class="small-12 columns">
            
            <?php the_title('<h2>', '</h2>', 'gcc-wp-2018'); ?>
            <p>
              <?php the_field( 'event_date' ); ?>, <?php if( get_field('event_start_time') ): ?>
              <?php the_field('event_start_time'); ?>  <?php endif; ?>
              <?php if( get_field('event_end_time') ): ?> <?php _e('- ', 'gcc-wp-2018'); ?><?php the_field('event_end_time'); ?>
              <?php endif; ?>
            </p>
            <p>
              <?php the_field( 'event_location' ); ?>
              <?php if( get_field('event_details') ): ?>
              <?php the_field( 'event_details' ); ?>
              <?php endif; ?>
            </p>
            <hr/>
          </div>
          
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else : ?>
          <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php if (is_page('56') ) : ; ?>
        <script src="https://studyinthestates.dhs.gov/assets/widget/sits-widget.js" type="text/javascript"></script>
        <?php endif; ?>
        
        <?php if (is_page('donate') ) : ; ?>
        
       <div id="bbox-root"></div>

<script type="text/javascript">

       window.bboxInit = function () {

           bbox.showForm('7ac5f578-b467-4690-815f-dc7eab20bca5');

       };

       (function () {

           var e = document.createElement('script'); e.async = true;

           e.src = 'https://bbox.blackbaudhosting.com/webforms/bbox-min.js';

           document.getElementsByTagName('head')[0].appendChild(e);

       } ());

</script>

</iframe>

<script>

    var url = 'https://host.nxt.blackbaud.com/donor-form?formId=76b1356d-d85d-4bd1-a890-12addb2746a2&envid=p-axTJZODzmk2V5ufsvQZN0Q';

    var iframe = document.getElementById('form-76b1356d-d85d-4bd1-a890-12addb2746a2');

    var bbemlParser = new RegExp('[?&]bbeml=([^&#]*)').exec(document.location.search);

    var bbeml = bbemlParser ? decodeURI(bbemlParser[1]) || 0 : '';

    iframe.src = url + '&referral=' + document.referrer + '&bbeml=' + bbeml;

</script>
        <?php endif; ?>
        <?php if (is_page('local-scholarship-aid')) : ; ?>
        <div class="row expanded" data-equalizer data-equalize-on="medium" id="sa-events">
          <?php // get raw date
          $date = get_field('scholarship_deadline', false, false); ?>
          <?php // make date object
          $date = new DateTime($date); ?>
          <?php
          $args =  array (
          'post_type' => 'local_scholarships',
          'posts_per_page'=> -1,
          );
          ?>
          <?php
          $query = new WP_Query( $args ); ?>
          <?php if ( $query->have_posts() ) : ?>
          <?php while ( $query->have_posts() ) : $query->the_post();?>
          
          <?php the_title('<h2>', '</h2>', 'gcc-wp-2018'); ?>
          <p><?php the_field( 'scholarship_short_description' ); ?></p>
          <p><strong>Scholarship Deadline:</strong> <?php the_field( 'scholarship_deadline' ); ?></p>
          <?php if( get_field('scholarship_information') ): ?>
          <ul class="accordion" data-accordion data-allow-all-closed="true">
            
            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">Scholarship Details</a>
              <div class="accordion-content" data-tab-content>
                
                <?php the_field( 'scholarship_information' ); ?>
              </div>
            </li>
            
          </ul>
          <?php endif; ?>
          <?php if( get_field('scholarship_application_url') ): ?>
          
          <a href="<?php the_field( 'scholarship_application_url' ); ?>"><?php the_field( 'scholarship_application_button_text' ); ?></a>
          <?php endif; ?>
          <?php if( get_field('scholarship_information_url') ): ?>
          |
          <a href="<?php the_field( 'scholarship_information_url' ); ?>"><?php the_field( 'scholarship_information_button_text' ); ?></a>
          <?php endif; ?>
          <hr>
          
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else : ?>
          <?php endif; ?>
        </div>
        
        <?php endif; ?>
        <?php //student activities events
        if (is_page('27603')) : ; ?>
        <div class="row expanded" data-equalizer data-equalize-on="medium" id="sa-events">
          
          <?php
          $args =  array (
          'post_type' => 'sa_events',
          'meta_key'      => 'event_date',
          'orderby'     => 'meta_value',
          'order'       => 'ASC',
          'posts_per_page'=> -1,
          );
          ?>
          <?php
          $query = new WP_Query( $args ); ?>
          <?php if ( $query->have_posts() ) : ?>
          <?php while ( $query->have_posts() ) : $query->the_post();?>
          
          <div class="small-12 medium-12 large-6 columns">
            <div class="callout primary small"  data-equalizer-watch>
              
              <?php the_title('<h2>', '</h2>', 'gcc-wp-2018'); ?>
              <p  style="margin-bottom: 0;"><?php the_field( 'event_date' ); ?></p>
              <p style="margin-bottom: 0;"><?php the_field( 'event_location' ); ?></p>
              <?php if( get_field('event_start_time') ): ?>
              <p><?php the_field('event_start_time'); ?>   <?php endif; ?>
                <?php if( get_field('event_end_time') ): ?> <?php _e('- ', 'gcc-wp-2018'); ?><?php the_field('event_end_time'); ?>
                <?php endif; ?>
              </p>
              <p style="margin-bottom: 0;"><?php the_field( 'event_description' ); ?></p>
              <?php if( get_field('event_details') ): ?>
              <a href="<?php echo the_permalink(); ?>" class="button primary"><?php _e('Learn more', 'gcc-wp-2018'); ?></a>
              <?php endif; ?>
            </div>
            
          </div>
          
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else : ?>
          <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php //pathways
        if (is_page('26400')) : ; ?>
        <h2><?php _e('Included Pathways', 'gcc-wp-2018'); ?></h2>
        <h3 class="text-center"><?php the_field('pathways_heading'); ?></h3>
        
        <?php
        $args =  array (
        'post_type' => 'pathways_home',
        'posts_per_page' => -1,
        'orderby'=> 'title',
        'order' => 'ASC',
        'tax_query'      => array (
        
        // Note: tax_query expects an array of arrays!
        array(
        'taxonomy' => 'pathway_categories', // my guess
        'field'    => 'id',
        'terms'    => 1823,
        ),
        ),
        );
        ?>
        <?php $query = new WP_Query( $args ); ?>
        <?php if ( $query->have_posts() ) : ?>
        
        <?php while ( $query->have_posts() ) : $query->the_post();?>
        
        <?php
        $pathway_image = get_field('pathway_image');
        if( !empty($pathway_image) ):
        // vars
        $url = $pathway_image['url'];
        $alt = $pathway_image['alt'];
        // thumbnail
        $size = 'large';
        $thumb = $pathway_image['sizes'][ $size ];
        $width = $pathway_image['sizes'][ $size . '-width' ];
        $height = $pathway_image['sizes'][ $size . '-height' ];
        ?>
        
        <div class="row expanded">
          
          <?php the_title('<h2>', '</h2>', 'gcc-wp-2018'); ?>
          <div class="small-12 medium-6 large-6 columns">
            <?php the_excerpt(); ?>
            <p><a href="<?php the_field('pathway_url');?>"><?php _e('View Programs', 'gcc-wp-2018') ?></a></p>
          </div>
          <div class="small-12 medium-6 columns">
            
            <img src="<?php echo $thumb; ?>" alt="<?php echo $alt;?>" width="<?php echo $width;?>" height="<?php echo $height;?>" style="width: 100%; background-size: cover; background-position: top center;">
            
            <?php endif; ?>
          </div>
        </div>
        <hr>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018' ); ?></p>
        
        <?php endif; ?>
        <?php endif; ?>
      </div>

<?php if( get_field('page_footer_contact', $post->post_parent) ): ?>

<div class="row expanded">
    <div class="callout hide-for-print">
          <?php the_field('page_footer_contact', $post->post_parent );?>
    </div>
</div>

<?php endif; ?>


    </div>
    </div><!--.pagecontent-->
    
  </article>
  
  <?php endwhile; // End of the loop. ?>
  <?php
  get_footer();