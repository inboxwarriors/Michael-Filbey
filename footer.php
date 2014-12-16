<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Michaelfilbey
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
    Michael is available for call-outs Mon-Sun 7:00-22:00.

He deals with estate agents, land lords and private tenants. He has 20 years experience and can provide quotes for any job no matter the size.
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'michaelfilbey' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'michaelfilbey' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'michaelfilbey' ), 'Michaelfilbey', '<a href="http://joshgreendesign.com" rel="designer">Josh Green</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
