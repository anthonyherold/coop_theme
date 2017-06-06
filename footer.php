<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>


				<section class="section-footer text-center">
					<div id="arrow"></div>
					<div class="row">
						<div class="newsletter">NEWSLETTER<br><strong>CLIQUEZ ICI / CLICK HERE</strong></div>

				<div class="menu-centered">
					<ul class="menu">
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="instagram"></a></li>
						<li><a href="#" class="youtube"></a></li>
					</ul>
				</div>
				<div class="texte">
					<p><strong>LA COOPÉRATIVE CRÉATIVE - SITE OFFICIEL 2017 - TOUS DROITS RÉSERVÉS</strong> <br>Design : Anthony HEROLD</p>
				</div>
			</div>
		</section>


			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
