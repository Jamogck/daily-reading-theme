<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Daily_Reading
 */

?>

	

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="row">
					<div class="social">
						<ul>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-vimeo-square" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="site-info">
						<p>Made by</p>
						<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/efca-icon.svg" /></a>
					</div>
				</div>
				
			</footer><!-- #colophon -->
		</div> <!-- end container -->
	</div><!-- #content -->
</div><!-- #page -->



<?php wp_footer(); ?>

</body>
</html>
