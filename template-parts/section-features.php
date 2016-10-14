<?php 

$wepick_settings_options_features = get_option( 'wepick_settings_option_features' ); // Array of All Options
$features_codes = $wepick_settings_options_features['features_codes'];

?>


<section class="section-fullwdith section-features">
	<div class="row">
		<div class="column small-12">
			<div class="section-header">
				<h2 class="section-title">features</h2><!-- .section-title -->
				<div class="subtitle">Features you of the app includes the following:

</div><!-- .subtitle -->
				<div class="separator">
				<div class="line"></div><!-- .line -->
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nfl-logo.png" alt="" />
				<div class="line"></div><!-- .line -->
				</div><!-- .separator -->
			</div><!-- .section-header -->

			<div class="section-content">
				<div class="feature-thumbnail">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/features-phone.png" alt="" />
				</div><!-- .feature-thumbnail -->
				<?php 

				$features = explode("\n", $features_codes); // or use PHP PHP_EOL constant
				if ( !empty($features) ) {
				  echo '<ul class="features-wrapper">';
				  foreach ( $features as $feature ) {
				    echo '<li class="feature-item">'. trim( $feature ) .'</li>';
				  }
				  echo '</ul>';
				} ?>
				
			</div><!-- .section content -->
		</div><!-- .column small-12 -->
	</div><!-- .row -->
	
</section><!-- .section-fullwdith section-features -->