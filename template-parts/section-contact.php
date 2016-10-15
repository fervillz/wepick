<?php 

$wepick_settings_options_how = get_option( 'wepick_settings_option_how' ); // Array of All Options
$contact_title = $wepick_settings_options_how['contact_title'];
$contact_subtitle = $wepick_settings_options_how['contact_subtitle'];

?>

<section id="section-contacts" class="section-fullwdith section-contacts">
	<div class="row">
		<div class="column small-12">
			<div class="section-header">
				<h2 class="section-title"><?php echo $contact_title; ?></h2><!-- .section-title -->
				<div class="subtitle"><?php echo $contact_subtitle; ?></div><!-- .subtitle -->	
				<div class="separator">
				<div class="line"></div><!-- .line -->
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nfl-logo.png" alt="" />
				<div class="line"></div><!-- .line -->
				</div><!-- .separator -->
			</div><!-- .section-header -->			
		</div><!-- .column small-12 -->
	</div><!-- .row -->

	<?php echo do_shortcode('[contact-form-7 id="8" title="Contact - home"]'); ?>
	
</section><!-- .section-fullwdith section-contacts -->