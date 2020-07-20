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

  <div id="request-info-form" class="reveal" data-reveal="" aria-labelledby="request-info-formHeader">
      <h2 id="request-info-formHeader"><?php _e('Request Information', 'gcc-wp-2018') ?></h2>
      <p><?php _e('Tell us more about yourself and your goals. Fill out our form below to receive more information about our programs, the cost of attendance and how to get started', 'gcc-wp-2018') ?></p>
     <?php echo do_shortcode('[wpforms id="27548"]') ?>
      <p><small><?php _e('By submitting this form, you are granting Germanna Community College permission to email you. You may unsubscribe at any time by clicking on a link included at the bottom of every email.', 'gcc-wp-2018') ?></small></p>
      <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

</main>

<?php  //setup alert from parent page and pulls the field into subpages.
$page_footer_contact = get_field('page_footer_contact');
global $post;
if ( get_field('page_footer_contact', $post->post_parent ) ):
?>

<?php endif; ?>

<?php //last modified page test
$u_time = get_the_time('U');
$u_modified_time = get_the_modified_time('U');
if ($u_modified_time >= $u_time + 86400) { ?>
<div class="row expanded entry-footer">
  <footer>
    <?php echo "<p>Last modified on ";
      the_modified_time('F j, Y');
    "</p> "; ?>
    <?php gcc_wp_2018_entry_footer(); ?>
  </footer>
</div>
<?php }; ?>

<footer class="site-footer hide-for-print">

<?php get_template_part('template-parts/content', 'top-footer'); ?>

<?php get_template_part('template-parts/content', 'bottom-footer'); ?>

</footer>

<?php
get_template_part( 'template-parts/content', 'mobile-nav' );
?>

<div class="popout-banner">

    <button type="button" class="button popout-icon show-for-small-only hide-for-medium hide-for-large" data-toggle="offCanvasNestedPush">
     <i class="fas fa-arrow-right"></i> Get Started</a>
    </button>

<div class="off-canvas position-right is-closed off-canvas-content get-started-offcanvas" id="offCanvasNestedPush" data-off-canvas style="max-height: 180px; overflow: hidden;">
<div class="callout warning">
    <h3>Don't wait get started today</h3>
    <a data-toggle="request-info-form">   
    <span class="h5 font-weight-bold"><i class="fas fa-arrow-right"></i>Request Info</span>
    </a>
    <a href="https://www.apply.vccs.edu/applications/vccs/apply.html?application_id=4084"> 
    <span class="h5 font-weight-bold"><i class="fas fa-arrow-right"></i>Apply Now</span>
    </a>
</div>
</div>

<div class="callout warning hide-for-small-only">
    <h3 class="hide-for-small-only">Don't wait get started today</h3>
    <a data-toggle="request-info-form">   
    <span class="h5 font-weight-bold"><i class="fas fa-arrow-right"></i>Request Info</span>
    </a>
    <a href="https://www.apply.vccs.edu/applications/vccs/apply.html?application_id=4084"> 
    <span class="h5 font-weight-bold"><i class="fas fa-arrow-right"></i>Apply Now</span>
    </a>
</div>

</div>

</div><!--.close-canvas-content-->
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
<?php
if ( is_page('11434') || is_page('8') || is_page('24') || is_page('40526') || is_page('20') || is_page('44712') || is_page('44700') || is_page('44715') ) {  ?>
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

<?php if ( is_page('8') ) { ?>
<script>
if (Boolean(readCookie('hide'))) {
                $('.closing').hide();
                $('.closing').fadeOut(1000);
            }
            
            $('.close-button-alert').click(function (e) {

                $('.closing').fadeOut(700);
                e.stopPropagation();

                createCookie('hide', true, 1)
                return false;
            });

            function createCookie(name, value, days) {
                if (days == 60) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    var expires = "; expires=" + date.toGMTString();
                }
                else var expires2 = "";
                document.cookie = name + "=" + value + "; expires=" + expires + "; path=/";

              //  $.cookie(name, value, { expires: days });
            }

            function readCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }

            function eraseCookie(name) {
                createCookie(name, "", -1);
            }

</script>
<?php } ?>
<script>
$(document).scroll(function() {
    if ($(this).scrollTop()>400)
     {
        $('.popout-banner').show(400);
     }
    else
     {
      $('.popout-banner').hide(300);
     }
 });
</script>
</body>
</html>