<?php  //setup alert from parent page and pulls the field into subpages.
$page_alert = get_field('page_alert');
global $post;
if ( get_field('page_alert', $post->post_parent ) ):
?>
<div class="row expanded collapse">
	<div class="callout alert small hide-for-print" data-closable style="text-align: center; padding: 20px 20px 5px 20px ;">
		<?php the_field('page_alert', $post->post_parent );?>
		<button class="close-button" aria-label="<?php esc_html_e('Dismiss alert', 'gcc-wp-2018'); ?>" type="button" data-close>
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
</div>
<?php endif; ?>