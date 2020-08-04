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
          <div class="show-for-xlarge">
            <h2>Select a Career Pathway</h2>          
          </div>
          <div class="columns large-5"> 
            <div class="show-for-large">          
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
                  <a href="#" data-filter="*" class="button alert expanded text-center">
                  <i class="fas fa-asterisk" style="margin-bottom: 10px;"></i><br/>All Programs
                  </a>
                </div>
              </li>
              <?php
              foreach ( $program_taxs as $program_tax_slug => $program_tax_name ):   //for each term: ?>
              <li style="list-style-type: none;">
                <div class="columns medium-12 xlarge-6">
                  <a data-filter=".<?php echo $program_tax_slug; ?>" class="button alert expanded text-center">
                  <i class="<?php echo $program_icon->term ?>" style="margin-bottom: 10px;"></i><br/><?php echo $program_tax_name;  ?>
                </a>
              </div>
            </li>
            <?php endforeach;?>
          </ul>
      </div>
      </div>
      </div>
        <div class="columns large-7">
        <div class="hide-for-large">
         <h2>Select a Career Pathway</h2>
          <ul class="dropdown menu" id="filters-small" data-dropdown-menu>
          <li>
              <a href="#" data-filter="*">
                <i class="fas fa-asterisk" style="margin-bottom: 10px;"></i>All Programs               
              </a>
              </li>
              <?php
              foreach ( $program_taxs as $program_tax_slug => $program_tax_name):   //for each term: ?>
          <li>
              <a data-filter=".<?php echo $program_tax_slug; ?>"><i class="<?php echo $program_icon->term ?>" style="margin-bottom: 10px;"></i><?php echo $program_tax_name;  ?>
            </a>
          </li>
            <?php endforeach;?>
      </ul>
     </div>
          <div class="callout" data-equalizer-watch>
            <?php the_content(); ?>
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