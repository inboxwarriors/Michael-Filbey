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
    <div class="max">
      <div class="site-info">
        <?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>
        <div class="footer-module">
          <h2>07984 202 126</h2>
          <h5><a href="mailto:mf_[at]_michaelspropertymaintenance.com" class="mail-mike">Email Michael</a></h5>

          <h6>Michael is available for call-outs Mon-Sun 7:00-22:00.</h6>

          <p>He deals with estate agents, land lords and private tenants. He has 20 years experience and can provide quotes for any job no matter the size.</p>

          <a href="https://www.facebook.com/michaelspropertymaintenance"><img src="<?php bloginfo('template_url'); ?>/img/mf_facebook.svg" class="fb-icon"></a>
        </div>
      </div><!-- .site-info -->

    </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
