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
get_header();
while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="row expanded content-area">
    <div class="columns small-12 float-left">
      <header>
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <?php the_breadcrumb() ?>
      </header>
    </div>
  </div>
  <div class="row expanded">
    <div class="columns medium-12" id="main">
      <div class="entry-content" id="main">
        <div class="row expanded" data-equalizer>
          <div class="columns xlarge-6"> 
            <div class="show-for-xlarge"> 
            <h2>Select a Career Pathway</h2>          
            <?php
            $args= array(
            'post_type' => 'gcc_programs',
            'posts_per_page'=> -1,
            'orderby' => 'title',
            'order' => 'ASC',
            );
            ?>
            <?php
            $programs = new WP_Query($args);
            if(is_array($programs->posts) && !empty($programs->post)) {
            foreach($programs->posts as $programs->post) {
            $post_taxs = wp_get_post_terms($programs->post->ID, 'pathway_names', array("fields" => "all"));
            if(is_array($post_taxs) && !empty($post_taxs)) {
            foreach($post_taxs as $post_tax) {
            $program_taxs[$post_tax->slug] = $post_tax->name;
            }
            }
            }
            }
            ?>
           <div class="row expanded">
            <div class="columns">
            <ul id="filters-large" style="list-style-type: none; margin-left: 0;">
              <li style="list-style: none;">
                <div class="columns medium-12 xlarge-6">
                  <a href="#" data-filter="*" class="h3 button alert large expanded text-center">
                  <i class="fas fa-asterisk fa-2x" style="margin-bottom: 10px;"></i><br/>All Programs
                  </a>
                </div>
              </li>
              <li style="list-style-type: none;">
              <div class="columns medium-12 xlarge-6">
                  <a data-filter=".humanities-and-arts-pathway" class="h3 button alert expanded large text-center">
                  <i class="fas fa-palette fa-2x" style="margin-bottom: 10px;"></i><br/>Arts &amp; Humanities</a>
              </div>
            </li>
            <li style="list-style-type: none;">
                <div class="columns medium-12 xlarge-6">
                  <a data-filter=".business-pathway" class="h3 button alert large expanded text-center">
                  <i class="fas fa-briefcase fa-2x" style="margin-bottom: 10px;"></i><br/>Business</a>
              </div>
            </li>
            <li style="list-style-type: none;">
                <div class="columns medium-12 xlarge-6">
                  <a data-filter=".social-science-and-education" class="h3 button alert expanded large text-center">
                  <i class="fas fa-school fa-2x" style="margin-bottom: 10px;"></i><br/>Education &amp; Social Science</a>
              </div>
            </li>
               <li style="list-style-type: none;">
                <div class="columns medium-12 xlarge-6">
                  <a data-filter=".health-science-pathway" class="h3 button alert expanded large text-center">
                  <i class="fas fa-user-nurse fa-2x" style="margin-bottom: 10px;"></i><br/>Healthcare</a>
              </div>
            </li>
              <li style="list-style-type: none;">
                <div class="columns medium-12 xlarge-6">
                  <a data-filter=".it-and-technical-studies-pathway" class="h3 button alert large expanded text-center">
                  <i class="fas fa-laptop-code fa-2x" style="margin-bottom: 10px;"></i><br/>IT &amp; Cybersecurity</a>
              </div>
            </li>
              <li style="list-style-type: none;">
                <div class="columns medium-12 xlarge-6">
                  <a data-filter=".public-service-pathway" class="h3 button alert expanded large text-center">
                  <i class="fas fa-gavel fa-2x" style="margin-bottom: 10px;"></i><br/>Public Service</a>
              </div>
            </li>
               <li style="list-style-type: none;">
                <div class="columns medium-12 xlarge-6">
                  <a data-filter=".science-and-engineering-pathway" class="h3 button alert expanded large text-center">
                  <i class="fas fa-atom fa-2x" style="margin-bottom: 10px;"></i><br/>Science &amp; Engineering</a>
              </div>
            </li>
         </ul>
      </div>
    </div>
      </div>
      </div>
        <div class="columns xlarge-6">
        <div class="hide-for-xlarge">
        <div class="row expanded" data-equalizer>
            <ul id="filters-small" style="list-style-type: none; margin-left: 0;">
                <li style="list-style: none;">
                    <div class="columns small-6">
                    <a href="#" data-filter="*" class="text-center" data-equalizer-watch>
                     <div class="callout alert" data-equalizer-watch>
                      <i class="fas fa-asterisk show-for-medium" style="margin-right: 10px;"></i> All Programs
                   </div>
                    </a>
                  </div>
                </li>
                <li style="list-style-type: none;">
                    <div class="columns small-6">
                    <a data-filter=".business-pathway" class="text-center" data-equalizer-watch>
                     <div class="callout alert" data-equalizer-watch>
                        <i class="fas fa-briefcase  show-for-medium" style="margin-right: 10px;"></i>Business
                    </div>
                  </a>        
                  </div>    
              </li>
                <li style="list-style-type: none;">
                    <div class="columns small-6">
                    <a data-filter=".public-service-pathway" class="text-center" data-equalizer-watch>
                      <div class="callout alert" data-equalizer-watch>
                    <i class="fas fa-gavel  show-for-medium" style="margin-right: 10px;"></i> Public Service
                  </div>
                  </a>
                </div>
              </li>
                <li style="list-style-type: none;">
                    <div class="columns small-6">
                    <a data-filter=".it-and-technical-studies-pathway" class="text-center" data-equalizer-watch>
                      <div class="callout alert" data-equalizer-watch>
                    <i class="fas fa-laptop-code  show-for-medium" style="margin-right: 10px;"></i> IT &amp; 
                   Cybersecurity
                  </div>
                 </a>
               </div>
              </li>
                <li style="list-style-type: none;">
                  <div class="columns small-6">
                    <a data-filter=".health-science-pathway" class="text-center" data-equalizer-watch>
                    <div class="callout alert"data-equalizer-watch>
                    <i class="fas fa-user-nurse  show-for-medium" style="margin-right: 10px;"></i> Healthcare
                </div>
                  </a>
                </div>
              </li>
                <li style="list-style-type: none;">
                    <div class="columns small-6">
                    <a data-filter=".social-science-and-education" class="text-center" data-equalizer-watch>
                      <div class="callout alert" data-equalizer-watch>
                    <i class="fas fa-school  show-for-medium" style="margin-right: 10px;"></i> Education &amp; Social Science
                  </div>
                  </a>
                </div>
              </li>
                 <li style="list-style-type: none;">
                    <div class="columns small-6">
                    <a data-filter=".science-and-engineering-pathway" class="text-center"  data-equalizer-watch>
                      <div class="callout alert">
                    <i class="fas fa-atom  show-for-medium" style="margin-right: 10px;"></i> Science &amp; Engineering
                  </div></a>
                </div>
              </li>
              <li style="list-style-type: none;">
                  <div class="columns small-6">
                    <a data-filter=".humanities-and-arts-pathway" class="text-center" data-equalizer-watch>
                      <div class="callout alert">
                    <i class="fas fa-palette  show-for-medium" style="margin-bottom: 10px;"></i> Arts &amp; Humanities</div></a>
                  </div>
              </li>
           </ul>
         </div>
                
           <ul class="accordion" data-accordion data-allow-all-closed="true">
  <li class="accordion-item" data-accordion-item>
    <a href="#" class="accordion-title">Definitions</a>

    <div class="accordion-content" data-tab-content>
 
 <p><strong><i class="fa fa-chalkboard-teacher" style="margin-top:10px;"></i> Online:</strong> Available completely online.</p>

<p><strong><i class="fa fa-running" style="margin-top:10px;"></i> Accelerated:</strong> Complete within 1 year.</p>

<p><strong><i class="fas fa-random" style="margin-top:10px;"></i> Transfer:</strong> Finish at a 4-year college or university.</p>

<p><strong><i class="fa fa-dollar-sign" style="margin-top:10px;"></i> Financial Aid Eligible: </strong> Use your financial aid awards with.</p>

    <p><strong>Associate of Arts &amp; Science Degree:</strong> This degree is appropriate for those students who plan to transfer to four-year institutions.</p>

    <p><strong>Associate of Science:</strong> This degree is appropriate for those students who plan to transfer to four-year institutions.</p>

    <p><strong>Associate of Applied Science Degree:</strong> Students who plan to obtain full-time employment upon graduation from Germanna.</p>

    <p><strong>Certificate:</strong> Awarded to students who complete one of the approved non-degree curricula which are is usually less than two years in length.</p>

     <p><strong>Career Studies Certificate:</strong> Career studies programs are developed and implemented in response to community needs when institutional resources permit.</p>

    </div>
   </li>
 </ul>
</div>
<div class="show-for-xlarge">
<h2>Definitions</h2> 
<p><strong><i class="fa fa-chalkboard-teacher" style="margin-top:10px;"></i> Online:</strong> Available completely online.</p>

<p><strong><i class="fa fa-running" style="margin-top:10px;"></i> Accelerated:</strong> Complete within 1 year.</p>

<p><strong><i class="fas fa-random" style="margin-top:10px;"></i> Transfer:</strong> Finish at a 4-year college or university.</p>

<p><strong><i class="fa fa-dollar-sign" style="margin-top:10px;"></i> Financial Aid Eligible: </strong> Use your financial aid awards with.</p>

    <p><strong>Associate of Arts &amp; Science Degree:</strong> This degree is appropriate for those students who plan to transfer to four-year institutions.</p>

    <p><strong>Associate of Science:</strong> This degree is appropriate for those students who plan to transfer to four-year institutions.</p>

    <p><strong>Associate of Applied Science Degree:</strong> Students who plan to obtain full-time employment upon graduation from Germanna.</p>

    <p><strong>Certificate:</strong> Awarded to students who complete one of the approved non-degree curricula which are is usually less than two years in length.</p>

     <p><strong>Career Studies Certificate:</strong> Career studies programs are developed and implemented in response to community needs when institutional resources permit.</p>
</div>
 </div>
      </div>
      <div class="row expanded collapse">
        <div class="columns medium-12">
          <div id="isotope-list">
            <div class="row expanded">
              <div class="columns">
                <?php
                while($programs->have_posts()) : $programs->the_post();
                $idd = get_the_ID();
                $item_classes = '';
                $item_cats = get_the_terms($post->ID, 'pathway_names');
                if($item_cats):
                
                foreach($item_cats as $item_cat) {
                $item_classes .= $item_cat->slug . ' '; ?>
                
                <div class="<?php echo $item_classes?> item" style="min-width: 100%;">
                  <div class="row expanded" style="width: 100%;">
                    <div class="columns small-12" style="width: 100%;">
                        <div class="callout" style="width: 100%;">
                        <div class="row expanded" style="width: 100%;">
                          <div class="columns small-12 medium-5">
                            <?php $curriculum_url = get_field('curriculum_url'); ?>
                           <p style="margin-bottom: 0;"> <a href="<?php the_field( 'curriculum_url' ); ?>">
                              <?php
                              the_title();?>
                            </a></p>
                          </div>
                          <div class="columns small-12 medium-4" >
                            <p style="margin-bottom: 0;"><?php the_field( 'program_degree' );?></p>
                          </div>
                          <div class="columns small-12 medium-3" >
                            <?php if( get_field('online_degree') == 'yes' ) { ?> <span style="min-width: 100px; width: 100px; display: inline-block; text-align: center">
                            <i class="fa fa-chalkboard-teacher" aria-hidden="true" style="margin-right: 10px;"><span  class="show-for-sr">Online Option</span></i></span>
                            <?php }
                            ?>
                            <?php if( get_field('online_degree') == 'no' ) { ?>
                              <span style="min-width: 100px; width: 100px; display: inline-block; text-align: right">
                            <i class="fas fa-times" aria-hidden="true" style="color: #f9f9f9; margin-right: 10px;"><span  class="show-for-sr">Online Degree</span></i></span>
                            <?php }
                            ?>
                            <?php if( get_field('accelerated_program') == 'yes' ) { ?> <span style="min-width: 100px; text-align:right">
                            <i class="fas fa-running" aria-hidden="true" style="margin-right: 10px;"><span  class="show-for-sr">Accelerated Option</span></i>
                          </span>
                            <?php }
                            ?>
                            <?php if( get_field('accelerated_program') == 'no' ) { ?>
                              <span style="min-width: 100px; width: 100px; display: inline-block; text-align: right">
                            <i class="fas fa-times" aria-hidden="true" style="color: #f9f9f9; margin-right: 10px;"><span  class="show-for-sr">Accelerated Option</span></i></span>
                            <?php }
                            ?>
                            <?php if( get_field('transfer_program') == 'yes' ) { ?> <span style="min-width: 100px; width: 100px; display: inline-block; text-align: right">
                            <i class="fas fa-random" aria-hidden="true" style="margin-right: 10px;"><span class="show-for-sr">transfer program</span></i></span>
                            <?php }
                            ?>
                            <?php if( get_field('transfer_program') == 'no' ) { ?> <span style="min-width: 100px; width: 100px; display: inline-block; text-align: right">
                            <i class="fas fa-times" aria-hidden="true" style="color: #f9f9f9; margin-right: 10px;"><span  class="show-for-sr">Accelerated Option</span></i></span>
                            <?php }
                            ?>
                            <?php if( get_field('financial_aid_eligible') == 'yes' ) { ?> <span style="min-width: 100px; width: 100px; display: inline-block; text-align: right">
                            <i class="fas fa-dollar-sign" aria-hidden="true"><span  class="show-for-sr">financial aid eligible</span></i></span>
                            <?php }
                            ?>    
                      </div> 
                    </div>
                  </div>
                </div>
                  </div>
                </div>
                <?php  }
                endif;
                ?>
                <?php wp_reset_query(); ?>
                <?php endwhile;  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</article>
<?php endwhile; // End of the loop. ?>
<?php
get_footer();