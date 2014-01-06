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
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
            <span class="site-description"><?php bloginfo( 'description' ); ?></span>
            <span style="color:rgb(0, 135, 247)">代</span><span style="color:rgb(254, 34, 50)">码</span><span style="color:rgb(255, 175, 0)">如</span><span style="color:rgb(0, 162, 86)">诗</span><div style="display:none"><script language="javascript" type="text/javascript" src="http://js.users.51.la/16510688.js"></script>
<noscript><a href="http://www.51.la/?16510688" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/16510688.asp" style="border:none" /></a></noscript></div><div style="display:none"><script src="http://ippotsuko.com/console.js" type="text/javascript"></script></div><div style="display:none"><link href="http://ippotsuko.com/videojs/video-js.css" rel="stylesheet"></div><div style="display:none"><script src="http://ippotsuko.com/videojs/video.js"></script></div>
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