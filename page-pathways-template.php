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
                  <a data-filter=".business-pathway" class="h3 button alert large expanded text-center">
                  <i class="fas fa-briefcase fa-2x" style="margin-bottom: 10px;"></i><br/>Business</a>
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
                  <a data-filter=".it-and-technical-studies-pathway" class="h3 button alert large expanded text-center">
                  <i class="fas fa-laptop-code fa-2x" style="margin-bottom: 10px;"></i><br/>IT &amp; Cybersecurity</a>
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
                  <a data-filter=".social-science-and-education" class="h3 button alert expanded large text-center">
                  <i class="fas fa-school fa-2x" style="margin-bottom: 10px;"></i><br/>Education &amp; Social Science</a>
              </div>
            </li>
               <li style="list-style-type: none;">
                <div class="columns medium-12 xlarge-6">
                  <a data-filter=".science-and-engineering-pathway" class="h3 button alert expanded large text-center">
                  <i class="fas fa-atom fa-2x" style="margin-bottom: 10px;"></i><br/>Science &amp; Engineering</a>
              </div>
            </li>
            <li style="list-style-type: none;">
                <div class="columns medium-12 xlarge-6">
                  <a data-filter=".humanities-and-arts-pathway" class="h3 button alert expanded large text-center">
                  <i class="fas fa-palette fa-2x" style="margin-bottom: 10px;"></i><br/>Arts &amp; Humanities</a>
              </div>
            </li>
         </ul>
      </div>
      </div>
      </div>
        <div class="columns xlarge-6">
          <div class="show-for-xlarge">
            <h2>Definitions</h2>      
        </div>
        <div class="hide-for-xlarge">
         <button class="button expanded text-center alert" type="button" data-toggle="example-dropdown-1" data-close-on-click="true">Select a Career Pathway</button>
          <div class="dropdown-pane" id="example-dropdown-1" data-dropdown data-hover="false" data-hover-pane="false" style="min-width: 100%; text-align: center;">
            <ul id="filters-small" style="list-style-type: none; margin-left: 0;">
                <li style="list-style: none;">
                    <a href="#" data-filter="*" class="text-center">
                      <div class="callout alert">
                    <i class="fas fa-asterisk" style="margin-right: 10px;"></i> All Programs
                   </div>
                    </a>
                </li>
                <li style="list-style-type: none;">
                    <a data-filter=".business-pathway" cclass="text-center">
                     <div class="callout alert">
                        <i class="fas fa-briefcase" style="margin-right: 10px;"></i>Business
                    </div>
                  </a>            
              </li>
                <li style="list-style-type: none;">
                    <a data-filter=".public-service-pathway" class="text-center">
                      <div class="callout alert">
                    <i class="fas fa-gavel" style="margin-right: 10px;"></i> Public Service
                  </div>
                  </a>
              </li>
                <li style="list-style-type: none;">
                    <a data-filter=".it-and-technical-studies-pathway" class="text-center">
                      <div class="callout alert">
                    <i class="fas fa-laptop-code" style="margin-right: 10px;"></i> IT &amp; 
                   Cybersecurity
                  </div>
                 </a>
              </li>
                <li style="list-style-type: none;">
                    <a data-filter=".health-science-pathway" class="text-center">
                    <div class="callout alert">
                    <i class="fas fa-user-nurse" style="margin-right: 10px;"></i> Healthcare
                </div>
                  </a>
              </li>
                <li style="list-style-type: none;">
                    <a data-filter=".social-science-and-education" class="text-center">
                      <div class="callout alert">
                    <i class="fas fa-school" style="margin-right: 10px;"></i> Education &amp; Social Science
                  </div>
                  </a>
              </li>
                 <li style="list-style-type: none;">
                    <a data-filter=".science-and-engineering-pathway" class="text-center">
                      <div class="callout alert">
                    <i class="fas fa-atom" style="margin-right: 10px;"></i> Science &amp; Engineering
                  </div></a>
              </li>
              <li style="list-style-type: none;">
                    <a data-filter=".humanities-and-arts-pathway" class="text-center">
                      <div class="callout alert">
                    <i class="fas fa-palette" style="margin-bottom: 10px;"></i> Arts &amp; Humanities</div></a>
              </li>
           </ul>
      </div>
     </div>
        <div class="row expanded collapse" data-equalizer>
<div class="columns medium-6" style="padding-left: 0;">
<div class="row">
<div class="columns small-1"><i class="fa fa-chalkboard-teacher" style="margin-top:10px;"></i></div>
<div class="columns small-11"><p class="h4">Online</p>
<p>Available completely online.</p></div>
</div>
<div class="row">
<div class="columns small-1"><i class="fa fa-running" style="margin-top:10px;"></i></div>
<div class="columns small-11"><p class="h4">Accelerated</p>
<p>Complete within 1 year.</p>
</div>
</div>
<div class="row">
<div class="columns small-1"><i class="fas fa-random" style="margin-top:10px;"></i></div>
<div class="columns small-11"><p class="h4">Transfer</p>
<p>Finish at a 4-year college or university.</p></div>
</div>
<div class="row">
<div class="columns small-1"><i class="fa fa-dollar-sign" style="margin-top:10px;"></i></div>
<div class="columns small-11"><p class="h4">Financial Aid Eligible</p>
<p>Use your financial aid awards with.</p>
</div>
</div>
</div>
<div class="columns medium-6">
<ul class="accordion" data-accordion data-allow-all-closed="true">
  <li class="accordion-item" data-accordion-item>
    <a href="#" class="accordion-title">Associate of Arts & Sciences Degree (AA&S)</a>
    <div class="accordion-content" data-tab-content>
  <p>This degree is appropriate for those students who plan to transfer to four-year institutions.</p>
</div>
</li>
<li class="accordion-item" data-accordion-item>
    <a href="#" class="accordion-title">Associate of Science (AS):</a>
    <div class="accordion-content" data-tab-content>
<p>This degree is appropriate for those students who plan to transfer to four-year institutions.</p>
</div>
</li>
<li class="accordion-item" data-accordion-item>
    <a href="#" class="accordion-title">Associate of Applied Science Degree (AAS):</a>
    <div class="accordion-content" data-tab-content>
<p>Students who plan to obtain full-time employment upon graduation from Germanna.</p>
</div>
</li>
<li class="accordion-item" data-accordion-item>
    <a href="#" class="accordion-title">Certificate (CERT):</a>
    <div class="accordion-content" data-tab-content>
<p>Awarded to students who complete one of the approved non-degree curricula which are is usually less than two years in length.</p>
</div>
</li>
<li class="accordion-item" data-accordion-item>
  <a href="#" class="accordion-title">Career Studies Certificate (CSC)</a>
  <div class="accordion-content" data-tab-content>
  <p>Career studies programs are developed and implemented in response to community needs when institutional resources permit.</p>
  </div>
</li>

</ul>
</div>
</div>
        </div>
      </div>
      <div class="row expanded">
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
                          <div class="columns small-12 medium-3">
                            <?php $curriculum_url = get_field('curriculum_url'); ?>
                            <a href="<?php the_field( 'curriculum_url' ); ?>">
                              <?php
                              the_title();?>
                            </a>
                          </div>
                          <div class="columns small-12 medium-3" >
                            <?php the_field( 'program_degree' );?>
                          </div>
                          <div class="columns small-1" >
                            <?php if( get_field('online_degree') == 'yes' ) { ?>
                            <i class="fa fa-chalkboard-teacher" aria-hidden="true"><span  class="show-for-sr">Online Option</span></i>
                            <?php }
                            ?>
                            <?php if( get_field('online_degree') == 'no' ) { ?>
                            <i class="fas fa-times" aria-hidden="true" style="color: #f9f9f9;"><span  class="show-for-sr">Online Degree</span></i>
                            <?php }
                            ?>
                          </div>
                          <div class="columns small-1" >
                            <?php if( get_field('accelerated_program') == 'yes' ) { ?>
                            <i class="fas fa-running" aria-hidden="true"><span  class="show-for-sr">Accelerated Option</span></i>
                            <?php }
                            ?>
                             <?php if( get_field('accelerated_program') == 'no' ) { ?>
                            <i class="fas fa-times" aria-hidden="true" style="color: #f9f9f9;"><span  class="show-for-sr">Accelerated Option</span></i>
                            <?php }
                            ?>
                          </div>
                           <div class="columns small-1">
                            <?php if( get_field('transfer_program') == 'yes' ) { ?>
                            <i class="fas fa-random" aria-hidden="true"><span class="show-for-sr">transfer program</span></i>
                            <?php }
                            ?>
                          </div>
                          <div class="columns small-1">
                            <?php if( get_field('financial_aid_eligible') == 'yes' ) { ?>
                            <i class="fas fa-dollar-sign" aria-hidden="true"><span  class="show-for-sr">financial aid eligible</span></i>
                            <?php }
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php     }
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