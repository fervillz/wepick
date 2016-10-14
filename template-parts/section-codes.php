<?php 

$wepick_settings_options_sport = get_option( 'wepick_settings_option_sport' ); // Array of All Options
$sport_codes = $wepick_settings_options_sport['sport_codes'];

  ?>

<section class="section-fullwdith section-sporting-codes">
	<div class="row">
		<div class="column small-12">
			<div class="section-header">
				<h2 class="section-title">Sporting codes</h2><!-- .section-title -->
				<div class="subtitle">Sporting codes you can tipp on include the following:
</div><!-- .subtitle -->
				<div class="separator">
				<div class="line"></div><!-- .sport -->
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nfl-logo.png" alt="" />
				<div class="line"></div><!-- .sport -->
				</div><!-- .separator -->
			</div><!-- .section-header -->

			<div class="section-content">

			<?php 

			$sports = explode("\n", $sport_codes); // or use PHP PHP_EOL constant
			if ( !empty($sports) ) {
			  echo '<ul class="sporting-codes-wrapper">';
			  foreach ( $sports as $sport ) {
			    echo '<li class="sporting-item sporting-codes button"><i class="fa fa-check"></i>'. trim( $sport ) .'</li>';
			  }
			  echo '</ul>';
			} ?>

			</div><!-- .section content -->
		</div><!-- .column small-12 -->
	</div><!-- .row -->
	
</section><!-- .section-fullwdith section-sporting-codes -->