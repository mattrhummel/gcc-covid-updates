<?php
/**
* Template part for displaying single post heading section in single.php
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*/
?>
  <header>
    <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php if ( 'post' === get_post_type() ) : ?>
    <p><?php the_date();?></p>
  <?php endif; ?>
  
      <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" role="navigation">
      <div title="breadcrumbs trail">
        <ul class="breadcrumbs">
          <?php $home_page = get_the_title( get_option('page_on_front'));
          $post_title = get_the_title( get_option('page_for_posts'));
          ?>
          <li role="menuitem">
            <a href="<?php echo get_site_url(); ?>">
              <?php echo $home_page; ?>
            </a>
          </li>
          <li role="menuitem">
            <a href="<?php  echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
              <?php echo $post_title; ?>
            </a>
          </li>
          <li role="menuitem">
            <?php the_title(); ?>
          </li>
        </ul>
      </div>
    </nav>
</header>