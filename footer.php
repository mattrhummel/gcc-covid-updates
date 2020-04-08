<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package gccwp-2018
*/
?>
<?php //closing main container, do not remove ?>
</main>

<div class="row expanded">
  
  <form id="wpforms-form-43666" class="wpforms-validate wpforms-form wpforms-ajax-form" data-formid="43666" method="post" enctype="multipart/form-data" action="/form-test/"><noscript class="wpforms-error-noscript">Please enable JavaScript in your browser to complete this form.</noscript><div class="wpforms-field-container"><div id="wpforms-43666-field_1-container" class="wpforms-field wpforms-field-email" data-field-id="1"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-43666-field_1">Email <span class="wpforms-required-label">*</span></label><input type="email" id="wpforms-43666-field_1" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][1]" placeholder="Email Address..." required></div></div><div class="wpforms-field wpforms-field-hp"></div><div class="wpforms-submit-container" ><input type="hidden" name="wpforms[id]" value="43666"><input type="hidden" name="wpforms[author]" value="2"><input type="hidden" name="wpforms[post_id]" value="43668"><button type="submit" name="wpforms[submit]" class="wpforms-submit button primary" id="wpforms-submit-43666" value="wpforms-submit" aria-live="assertive" data-alt-text="Sending..." data-submit-text="Submit">Submit</button><img src="https://germannacc.staging.wpengine.com/wp-content/plugins/wpforms/assets/images/submit-spin.svg" class="wpforms-submit-spinner" style="display: none;" width="26" height="26" alt=""></div></form>

</div>

<footer class="site-footer hide-for-print">
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
          <li><a href="https://www.facebook.com/<?php the_field('facebook_id', 'option'); ?>"><span class="fa fa-facebook-f" aria-hidden="true" title="Germanna on Facebook"><span class="icon-text"><?php _e('Facebook', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://twitter.com/<?php the_field('twitter_id', 'option'); ?>"><span class="fa fa-twitter"  aria-hidden="true"><span class="icon-text" title="Germanna on Twitter"><?php _e('Twitter', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://www.instagram.com/<?php the_field('instagram_id', 'option'); ?>"><span class="fa fa-instagram"  aria-hidden="true" title="Germanna on Instagram"><span class="icon-text"><?php _e('Instagram', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://www.youtube.com/user/<?php the_field('youtube_id', 'option'); ?>" title="Germanna on Youtube"><span class="fa fa-youtube"  aria-hidden="true"><span class="icon-text"><?php _e('Youtube', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://www.flickr.com/photos/<?php the_field('flickr_id', 'option'); ?>"><span class="fa fa-flickr"  aria-hidden="true" title="Germanna on Flickr"><span class="icon-text"><?php _e('Flickr', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://www.linkedin.com/school/<?php the_field('linkedin_id', 'option'); ?>"><span class="fa fa-linkedin"  aria-hidden="true" title="Germanna on LinkedIn"><span class="icon-text"><?php _e('LinkedIn', 'gcc-wp-2018');?></span></span></a></li>
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
<div class="site-footer-bottom hide-for-print">
  <div class="bottom-footer-content">
    <div class="row expanded">
      
      <div class="small-12 medium-only-12 large-7 columns">      
          <?php 
          gcc_wp_2018_footer_links_menu(); ?>

        <div class="tips">
          
          <a href="<?php echo get_field( 'tips_url', 'options' ); ?>" class="tips-logo" aria-hidden="true">
          
          <span><?php echo get_field( 'tips_text', 'options' ); ?><span class="hide-text"><?php _e('report an incident', 'gcc-wp-2018')?></span></span></a>
        
        </div>
      </div>
      
      <div class="small-12 medium-only-12 large-5 columns">
        <?php the_field('bottom_footer_text', 'option'); ?> 
        <p class="copywrite"><?php _e('&copy;', 'gcc-wp-2018'); ?>
           <?php bloginfo( 'name' ); ?></p> 
      </div>

    </div>
  </div>
</div>
</footer>


<?php
get_template_part( 'template-parts/content', 'mobile-nav' );
?>


</div>
</div>
</div>


<?php wp_footer(); ?>

<script>
  
  $(document).foundation();
  
  $(function() {
        $('.lazy').Lazy();
  });
  
</script>

<?php
if ( is_page('107') || $post->post_parent == '107' ) {  ?>
<!-- begin SnapEngage code for testing -->
<script type="text/javascript">
(function() {
var se = document.createElement('script'); se.type = 'text/javascript'; se.async = true;
se.src = '//storage.googleapis.com/code.snapengage.com/js/3d972e28-153d-4d31-978a-36c1648909ba.js';
var done = false;
se.onload = se.onreadystatechange = function() {
if (!done&&(!this.readyState||this.readyState==='loaded'||this.readyState==='complete')) {
done = true;
/* Place your SnapEngage JS API code below */
/* SnapEngage.allowChatSound(true); Example JS API: Enable sounds for Visitors. */
}
};
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(se, s);
})();
</script>
<!-- end SnapEngage code -->
<?php
}
?>
<?php
if ( is_page('44') || $post->post_parent == '44' ) {  ?>
<!-- begin SnapEngage code for counseling -->
<script type="text/javascript">
(function() {
var se = document.createElement('script'); se.type = 'text/javascript'; se.async = true;
se.src = '//storage.googleapis.com/code.snapengage.com/js/6c8b2bc0-51a5-4181-817e-709cb15c4910.js';
var done = false;
se.onload = se.onreadystatechange = function() {
if (!done&&(!this.readyState||this.readyState==='loaded'||this.readyState==='complete')) {
done = true;
/* Place your SnapEngage JS API code below */
/* SnapEngage.allowChatSound(true); Example JS API: Enable sounds for Visitors. */
}
};
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(se, s);
})();
</script>
<!-- end SnapEngage code -->
<?php
}
?>
</body>
</html>