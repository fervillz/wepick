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

//social
$wepick_settings_options_social = get_option( 'wepick_settings_option_social' ); // Array of All Options
$facebook = $wepick_settings_options_social['facebook_0']; // facebook
$twitter = $wepick_settings_options_social['twitter_1']; // Twitter
$linkedin = $wepick_settings_options_social['linkedin_2']; // Linkedin
$gplus = $wepick_settings_options_social['gplus_3']; // gplus
$instagram = $wepick_settings_options_social['instagram_3']; // Skype
$skype = $wepick_settings_options_social['skype_3']; // Skype
$rss_feeds = $wepick_settings_options_social['rss_feeds_4']; // RSS Feeds

//copyrgiht
$wepick_settings_options = get_option( 'wepick_settings_option_general' ); // Array of All Options
$Copyright_0 = $wepick_settings_options['Copyright_0']; // Copyright

?>

	</div><!-- #content -->

	<?php echo get_template_part( 'template-parts/section', 'newsletter' ); ?>

	<footer id="colophon" class="site-footer section-fullwdith darker">
		<div class="row">
			<div class="columns small-12">

				<div class="copyright"><?php echo $Copyright_0; ?></div><!-- .copyright -->
				<div class="social-wrapper">

					<?php if ( $facebook ): ?>
						<a href="<?php echo $facebook; ?>" class="footer-social" target="_blank" ><i class="fa fa-facebook "></i></a>
					<?php endif; ?>

					<?php if ( $twitter ): ?>
						<a href="<?php echo $twitter; ?>" class="footer-social" target="_blank" ><i class="fa fa-twitter "></i></a>
					<?php endif; ?>

					<?php if ( $linkedin ): ?>
						<a href="<?php echo $linkedin; ?>" class="footer-social" target="_blank" ><i class="fa fa-linkedin "></i></a>
					<?php endif; ?>

					<?php if ( $gplus ): ?>
						<a href="<?php echo $gplus; ?>" class="footer-social" target="_blank" ><i class="fa fa-google-plus "></i></a>
					<?php endif; ?>

					<?php if ( $skype ): ?>
						<a href="<?php echo $skype; ?>" class="footer-social" target="_blank" ><i class="fa fa-skype "></i></a>
					<?php endif; ?>

					<?php if ( $rss_feeds ): ?>
						<a href="<?php echo $rss_feeds; ?>" class="footer-social" target="_blank" ><i class="fa fa-rss "></i></a>
					<?php endif; ?>

				</div><!-- .social-wrapper -->
			</div><!-- .small-12 -->
		</div><!-- .row -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<div class="floating-nav">
	<?php wp_nav_menu( array( 'theme_location' => 'float_menu', 'menu_id' => 'floating-menu' ) ); ?>
</div><!-- .floating-nav -->

<?php wp_footer(); ?>

</body>
</html>