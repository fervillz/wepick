<?php 

$wepick_settings_options_how = get_option( 'wepick_settings_option_how' ); // Array of All Options
$download_title = $wepick_settings_options_how['download_title'];
$download_subtitle = $wepick_settings_options_how['download_subtitle'];

?>

<section id="section-downloads" class="section-fullwdith section-downloads darker">
	<div class="row">
		<div class="column small-12">
			<div class="section-header alt">
				<h2 class="section-title"><?php echo $download_title; ?></h2><!-- .section-title -->
				<div class="subtitle"><?php echo $download_subtitle; ?></div><!-- .subtitle -->	
			</div><!-- .section-header -->

			<div class="section-content">
				
				<div class="downloads-wrapper">
					<a href="#" class="button glass primary">Download today<i class="fa fa-arrow-circle-o-right"></i></a>
					<div class="subtext">and join one of the quickest growing tipping apps on the planet! </div><!-- .subtext -->
				</div><!-- .downloads -->
			</div><!-- .section content -->
		</div><!-- .column small-12 -->
	</div><!-- .row -->	
</section><!-- .section-fullwdith section-downloads -->