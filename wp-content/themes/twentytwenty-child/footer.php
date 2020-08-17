<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.1
 */

?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">

				<div class="section-inner">

					<div class="footer-term-policy column-one grid-item">
						<ul class="term-policy">
							<li><a href="https://sellgo-dev.com/#Modal1" data-toggle="modal" data-target="#Modal1">terms of service</a></li>
							<li><a href="https://sellgo-dev.com/#Modal2" data-toggle="modal" data-target="#Modal2">data privacy policy</a></li>
						</ul>
					</div>

					<div class="footer-credits column-two grid-item">

						<p class="footer-copyright">
							Copyright &copy; Sellgo2019
						</p><!-- .footer-copyright -->

					</div><!-- .footer-credits -->
						
					<div class="footer-partners column-three grid-item">
						<img src="<?=esc_url( home_url( '/' ) ); ?>wp-content/uploads/2020/08/partner-img.png" alt="">
					</div>

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>