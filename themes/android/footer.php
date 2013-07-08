<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<br>
	<br>
	<br>
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
            <span class="site-description"><?php bloginfo( 'description' ); ?></span>
            <span style="color:rgb(0, 135, 247)">代</span><span style="color:rgb(254, 34, 50)">码</span><span style="color:rgb(255, 175, 0)">如</span><span style="color:rgb(0, 162, 86)">诗</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>
<script type="text/javascript">
    var home_url="<?php echo esc_url(home_url('/')); ?>";
    var is_mobile="<?php if(is_mobile()){echo 'true';}?>";
</script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/android.js?201302051332"></script>
</body>
</html>