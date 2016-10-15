<?php 

$wepick_settings_options_how = get_option( 'wepick_settings_option_how' ); // Array of All Options
$newsletter_title = $wepick_settings_options_how['newsletter_title'];
$newsletter_subtitle = $wepick_settings_options_how['newsletter_subtitle'];

?>

<section id="section-newsletter" class="section-fullwdith section-newsletter dark">
	<div class="row narrow">
		<div class="column small-12">
			<div class="section-header alt">
				<h2 class="section-title"><?php echo $newsletter_title; ?></h2><!-- .section-title -->
				<div class="subtitle"><?php echo $newsletter_subtitle; ?></div><!-- .subtitle -->			
			</div><!-- .section-header -->

			<div class="section-content">				
				<div class="newsletter-wrapper">
					<?php echo do_shortcode('[contact-form-7 id="494" title="Newsletter"]'); ?>					
				</div><!-- .newsletter -->
			</div><!-- .section content -->
		</div><!-- .column small-12 -->
	</div><!-- .row -->	
</section><!-- .section-fullwdith section-newsletter -->