<?php 

$wepick_settings_options_how = get_option( 'wepick_settings_option_how' ); // Array of All Options
$how_title = $wepick_settings_options_how['how_title'];
$how_subtitle = $wepick_settings_options_how['how_subtitle'];

?>

<section id="section-how-it-works" class="section-fullwdith section-how-it-works">
	<div class="row">
		<div class="column small-12">
			<div class="section-header">
				<h2 class="section-title"><?php echo $how_title; ?></h2><!-- .section-title -->
				<div class="subtitle"><?php echo $how_subtitle; ?></div><!-- .subtitle -->
				<div class="separator">
				<div class="line"></div><!-- .line -->
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nfl-logo.png" alt="" />
				<div class="line"></div><!-- .line -->
				</div><!-- .separator -->
			</div><!-- .section-header -->	

		  <div id="tabs" class="tab tab-wrapper vertical">
			<ul class="tab-nav-wrapper">

					<?php 

					$counter = 1;
					// WP_Query arguments
					$args = array (
						'post_type'              => array( 'how_it_work' ),
						'posts_per_page'         => '20',
					);

					// The Query
					$query = new WP_Query( $args );

					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							// do something
							if ( $counter == 1) {
								echo '<li><a href=".how'.$counter.'" class="tab-nav how-nav active">';
							}
							else {
								echo '<li><a href=".how'.$counter.'" class="tab-nav how-nav">';
							}
							
							the_title();
							echo '</a></li>';
							$counter++;
						}
					}

					// Restore original Post Data
					wp_reset_postdata();

					?>

			</ul>

			<?php 

				$counter = 1;
				// WP_Query arguments
				$args = array (
					'post_type'              => array( 'how_it_work' ),
					'posts_per_page'         => '20',
				);

				// The Query
				$query = new WP_Query( $args );

				// The Loop
				if ( $query->have_posts() ) {

					while ( $query->have_posts() ) {

						$query->the_post();
						// do something
						if ( $counter == 1) {
							echo '<div class="how'.$counter.' tab-content hows active">';
						}
						else {
							echo '<div class="how'.$counter.' tab-content hows">';
						}
						
						the_content();

						echo '</div>';

						$counter++;
					}
				}

				// Restore original Post Data
				wp_reset_postdata();

			?>

			<div class="tab-screen">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/iphone-white.png" alt="" />
				
				<?php 
					$counter = 1;
					// WP_Query arguments
					$args = array (
						'post_type'              => array( 'how_it_work' ),
						'posts_per_page'         => '20',
					);

					// The Query
					$query = new WP_Query( $args );

					// The Loop
					if ( $query->have_posts() ) {

						while ( $query->have_posts() ) {

							$query->the_post(); 

							if ( $counter == 1) {
								echo '<div class="how'.$counter.' how-screen hows active">';
							}
							else {
								echo '<div class="how'.$counter.' how-screen hows">';
							}

							the_post_thumbnail();

							echo '</div>'; $counter++;
						}
					}

					// Restore original Post Data
					wp_reset_postdata();

				?>

				
			</div><!-- .tab-screen -->

			</div>
		</div><!-- .column small-12 -->
	</div><!-- .row -->
</section><!-- .section-fullwdith section-how-it-works -->
