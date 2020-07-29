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
          <div class="columns medium-8">
         
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
            <?php $program_icon = get_field('program_icon', $term); ?>
            <ul id="filters" style="list-style-type: none; margin-left: 0;">
              <li style="list-style: none;">
                <div class="columns medium-3">
                  <a href="#" data-filter="*" class="text-center">
                    <div class="callout alert" data-equalizer-watch>
                      <h2 class="h5"><i class="fas fa-asterisk" style="margin-bottom: 10px;"></i><br/>All Programs</h2>
                    </div>
                  </a>
                </div>
              </li>
              <?php
              foreach ( $program_taxs as $program_tax_slug => $program_tax_name ):   //for each term: ?>
              <li style="list-style-type: none;">
                <div class="columns medium-3">
                  <a data-filter=".<?php echo $program_tax_slug; ?>"><div class="filter callout alert text-center" data-equalizer-watch><h2 class="h5"><i class="<?php echo $program_icon ?>" style="margin-bottom: 10px;"></i><br/><?php echo $program_tax_name;  ?></h2></div>
                </a>
              </div>
            </li>
            <?php endforeach;?>
          </ul>
      </div>
        <div class="columns medium-4">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="row expanded" data-equalizer>
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
                          <div class="columns medium-3">
                            <?php $curriculum_url = get_field('curriculum_url'); ?>
                            <a href="<?php the_field( 'curriculum_url' ); ?>">
                              <?php
                              the_title();?>
                            </a>
                          </div>
                          <div class="columns medium-3">
                            <?php the_field( 'program_degree' );?>
                          </div>
                          <div class="columns medium-2">
                            <?php if( get_field('online_degree') == 'yes' ) { ?>
                            <i class="fa fa-chalkboard-teacher fa-2x" aria-hidden="true"><span  class="show-for-sr">Online Option</span></i>
                            <?php }
                            ?>
                          </div>
                          <div class="columns medium-2">
                            <?php if( get_field('accelerated_progam') == 'yes' ) { ?>
                            <i class="fas fa-running fa-2x" aria-hidden="true"><span  class="show-for-sr">Accelerated Option</span></i>
                            <?php }
                            ?>
                          </div>
                          <div class="columns medium-2">
                            <?php if( get_field('financial_aid_eligible') == 'yes' ) { ?>
                            <i class="fas fa-dollar-sign fa-2x" aria-hidden="true"><span  class="show-for-sr">financial aid eligible</span></i>
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