<?php 

$wepick_settings_options_how = get_option( 'wepick_settings_option_how' ); // Array of All Options
$screenshot_title = $wepick_settings_options_how['screenshot_title'];
$screenshot_subtitle = $wepick_settings_options_how['screenshot_subtitle'];

?>

<section id="section-screenshots" class="section-fullwdith section-screenshots">
	<div class="row">
		<div class="column small-12">
			<div class="section-header">
				<h2 class="section-title"><?php echo $screenshot_title; ?></h2><!-- .section-title -->
				<div class="subtitle"><?php echo $screenshot_subtitle; ?></div><!-- .subtitle -->	
				<div class="separator">
				<div class="line"></div><!-- .line -->
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nfl-logo.png" alt="" />
				<div class="line"></div><!-- .line -->
				</div><!-- .separator -->
			</div><!-- .section-header -->

			<div class="section-content">				
				<div class="owl-carousel-screenshot owl-theme">
					<?php 

					// WP_Query arguments
					$args = array (
						'post_type'              => array( 'screenshots' ),
						'posts_per_page'         => '20',
					);

					// The Query
					$query = new WP_Query( $args );

					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							
							echo '<img src="'.get_the_post_thumbnail_url( null, 'full').'" alt="" />';							
						}
					}

					// Restore original Post Data
					wp_reset_postdata();

					?>
				</div>
			</div><!-- .section content -->
		</div><!-- .column small-12 -->
	</div><!-- .row -->
	
</section><!-- .section-fullwdith section-screenshots -->