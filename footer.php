<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WePick
 */

?>

	</div><!-- #content -->

	<?php echo get_template_part( 'template-parts/section', 'newsletter' ); ?>

	<footer id="colophon" class="site-footer section-fullwdith darker">
		<div class="row">
			<div class="columns small-12">
				<div class="copyright">&copy Copyright 2016 WePick, All Rights Reserved. </div><!-- .copyright -->
				<div class="social-wrapper">
					<a href="" class="social-item"><i class="fa fa-facebook"></i> </a>
					<a href="" class="social-item"><i class="fa fa-twitter"></i> </a>
					<a href="" class="social-item"><i class="fa fa-linkedin"></i> </a>
					<a href="" class="social-item"><i class="fa fa-instagram"></i> </a>
					<a href="" class="social-item"><i class="fa fa-google-plus"></i> </a>
				</div><!-- .social-wrapper -->
			</div><!-- .small-12 -->
		</div><!-- .row -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>