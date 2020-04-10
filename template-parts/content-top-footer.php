<div class="row expanded collapse top-footer">
  <div class="small-12 medium-12 large-4 columns">
    
    <div class="footer-logo">
      <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_theme_mod( 'gcc_wp_2018_mobile_logo' ); ?> " alt="white germanna logo"/></a>
    </div>
    
  </div>
  <div class="small-12 medium-12 large-8 columns footer-content">
    <div class="large-7 columns footer-contacts">
      <h3><?php bloginfo( 'name' ); ?></h3>
      
      <p><?php the_field('primary_address', 'option'); ?><br/>
        
        <a href="tel:<?php _e('540-891-3000', 'gcc-wp-2019') ?>">
        <?php _e('(540) 891-3000', 'gcc-wp-2019') ?></a>
        
      </p>
      <h4><?php _e('#germanna', 'gcc-wp-2018'); ?></h4>
      <div class="social">
        <ul class="social-icons">
          <li><a href="https://www.facebook.com/<?php the_field('facebook_id', 'option'); ?>"><i class="fab fa-facebook-f" aria-hidden="true" title="Germanna on Facebook"><span class="icon-text"><?php _e('Facebook', 'gcc-wp-2018');?></span></i></a></li>
          <li><a href="https://twitter.com/<?php the_field('twitter_id', 'option'); ?>"><span class="fab fa-twitter"  aria-hidden="true"><span class="icon-text" title="Germanna on Twitter"><?php _e('Twitter', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://www.instagram.com/<?php the_field('instagram_id', 'option'); ?>"><span class="fab fa-instagram"  aria-hidden="true" title="Germanna on Instagram"><span class="icon-text"><?php _e('Instagram', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://www.youtube.com/user/<?php the_field('youtube_id', 'option'); ?>" title="Germanna on Youtube"><span class="fab fa-youtube"  aria-hidden="true"><span class="icon-text"><?php _e('Youtube', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://www.flickr.com/photos/<?php the_field('flickr_id', 'option'); ?>"><span class="fab fa-flickr"  aria-hidden="true" title="Germanna on Flickr"><span class="icon-text"><?php _e('Flickr', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://www.linkedin.com/school/<?php the_field('linkedin_id', 'option'); ?>"><span class="fab fa-linkedin"  aria-hidden="true" title="Germanna on LinkedIn"><span class="icon-text"><?php _e('LinkedIn', 'gcc-wp-2018');?></span></span></a></li>
        </ul>
      </div>
    </div>
    <div class="small-12 medium-only-12 large-5 columns button-column">
      
      <div class="button-group stacked show-for-large">
        <a href="/admissions/request-information/" class="button primary expanded"><?php _e('Future Students', 'gcc-wp-2018') ?></a>
        <a href="https://www.apply.vccs.edu/applications/vccs/apply.html?application_id=4084" class="button secondary expanded"><?php _e('apply now', 'gcc-wp-2018'); ?></a>
        <a href="/donate/" class="button primary expanded"><?php _e('give', 'gcc-wp-2018') ?></a>
      </div>
      
    </div>
  </div>
</div>