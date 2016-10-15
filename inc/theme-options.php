<?php

class wepickSettings {
	private $wepick_settings_options;
	private $wepick_settings_options_contact;

	private $wepick_settings_options_hero;
	private $wepick_settings_options_sport;
	private $wepick_settings_options_features;	
	private $wepick_settings_options_how;	
	private $wepick_settings_options_social;

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'wepick_settings_add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'wepick_settings_page_init' ) );
	}

	public function wepick_settings_add_plugin_page() {
		add_menu_page(
			'wepick Settings', // page_title
			'wepick Settings', // menu_title
			'manage_options', // capability
			'wepick-settings', // menu_slug
			array( $this, 'wepick_settings_create_admin_page' ), // function
			'dashicons-admin-generic', // icon_url
			81 // position
		);
	}

	public function wepick_settings_create_admin_page() {
		
		$this->wepick_settings_options = get_option( 'wepick_settings_option_general' );

		$this->wepick_settings_options_hero = get_option( 'wepick_settings_option_hero' );

		$this->wepick_settings_options_sport = get_option( 'wepick_settings_option_sport' );

		$this->wepick_settings_options_features = get_option( 'wepick_settings_option_features' );

		$this->wepick_settings_options_how = get_option( 'wepick_settings_option_how' );

		$this->wepick_settings_options_social = get_option( 'wepick_settings_option_social' );
		//old bewlow

		$this->wepick_settings_options_contact = get_option( 'wepick_settings_option_contact' ); ?>

		

		<div class="wrap">
		<div id="icon-themes" class="icon32"></div>
			<h2>wepick Settings</h2>
			<p>This are basic for wepick Website</p>
			<?php settings_errors(); ?>

			<?php  
                $active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'general_options';  
        	?>  

			<h2 class="nav-tab-wrapper">
			    <a href="?page=wepick-settings&tab=general_options" class="nav-tab <?php echo $active_tab == 'general_options' ? 'nav-tab-active' : ''; ?>">General Options</a>
			    <a href="?page=wepick-settings&tab=hero_options" class="nav-tab <?php echo $active_tab == 'hero_options' ? 'nav-tab-active' : ''; ?>">Hero Section</a>
			    <a href="?page=wepick-settings&tab=sport_options" class="nav-tab <?php echo $active_tab == 'sport_options' ? 'nav-tab-active' : ''; ?>">Sport Codes Section</a>	
			    <a href="?page=wepick-settings&tab=features_options" class="nav-tab <?php echo $active_tab == 'features_options' ? 'nav-tab-active' : ''; ?>">Features Section</a>
			    <a href="?page=wepick-settings&tab=how_options" class="nav-tab <?php echo $active_tab == 'how_options' ? 'nav-tab-active' : ''; ?>">Other Section Headings</a>	


			    <a href="?page=wepick-settings&tab=social_options" class="nav-tab <?php echo $active_tab == 'social_options' ? 'nav-tab-active' : ''; ?>">Social Section</a>	
			</h2>

			<form method="post" action="options.php">

				<?php

				if( $active_tab == 'general_options' ) {
		            settings_fields( 'wepick_settings_general_options' );
					do_settings_sections( 'wepick_settings_general_options' );		
		        } 

		        elseif ( $active_tab == 'hero_options' ) {
		            settings_fields( 'wepick_settings_hero_options' );
					do_settings_sections( 'wepick_settings_hero_options' );
		        } 

		        elseif ( $active_tab == 'sport_options' ) {
		            settings_fields( 'wepick_settings_sport_options' );
					do_settings_sections( 'wepick_settings_sport_options' );
		        } 

		        elseif ( $active_tab == 'features_options' ) {
		            settings_fields( 'wepick_settings_features_options' );
					do_settings_sections( 'wepick_settings_features_options' );
		        } 

		        elseif ( $active_tab == 'how_options' ) {
		            settings_fields( 'wepick_settings_how_options' );
					do_settings_sections( 'wepick_settings_how_options' );
		        } 


		        elseif ( $active_tab == 'social_options' ) {
		            settings_fields( 'wepick_settings_social_options' );
					do_settings_sections( 'wepick_settings_social_options' );
		        } 

		        elseif ( $active_tab == 'contact_options' ) {
		            settings_fields( 'wepick_settings_contact_options' );
					do_settings_sections( 'wepick_settings_contact_options' );
		        } // end if/else

		        ?>

				<?php submit_button(); ?>

			</form>
		</div>
	<?php }

	public function wepick_settings_page_init() {

		//general
		register_setting(
			'wepick_settings_general_options', // option_group
			'wepick_settings_option_general', // option_name
			array( $this, 'wepick_settings_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'wepick_settings_general_options', // id
			'General Options', // title
			array( $this, 'wepick_settings_general_options_callback' ), // callback
			'wepick_settings_general_options' // page
		);

		add_settings_field(
			'terms_of_use_5', // id
			'Terms of Use', // title
			array( $this, 'terms_of_use_5_callback' ), // callback
			'wepick_settings_general_options', // page
			'wepick_settings_general_options' // section
		);

		add_settings_field(
			'privacy_policy_6', // id
			'Privacy Policy', // title
			array( $this, 'privacy_policy_6_callback' ), // callback
			'wepick_settings_general_options', // page
			'wepick_settings_general_options' // section
		);		

				add_settings_field(
			'Copyright_0', // id
			'Copyright text', // title
			array( $this, 'Copyright_0_callback' ), // callback
			'wepick_settings_general_options', // page
			'wepick_settings_general_options' // section
		);

		//end general
		
		//social
		register_setting(
			'wepick_settings_social_options', // option_group
			'wepick_settings_option_social', // option_name
			array( $this, 'wepick_settings_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'wepick_settings_social_options', // id
			'Social Options', // title
			array( $this, 'wepick_settings_section_social_callback' ), // callback
			'wepick_settings_social_options' // page
		);

		add_settings_field(
			'facebook_0', // id
			'Facebook', // title
			array( $this, 'facebook_0_callback' ), // callback
			'wepick_settings_social_options', // page
			'wepick_settings_social_options' // section
		);

		add_settings_field(
			'twitter_1', // id
			'Twitter', // title
			array( $this, 'twitter_1_callback' ), // callback
			'wepick_settings_social_options', // page
			'wepick_settings_social_options' // section
		);

		add_settings_field(
			'linkedin_2', // id
			'Linkedin', // title
			array( $this, 'linkedin_2_callback' ), // callback
			'wepick_settings_social_options', // page
			'wepick_settings_social_options' // section
		);

		add_settings_field(
			'gplus_3', // id
			'Google Plus', // title
			array( $this, 'gplus_3_callback' ), // callback
			'wepick_settings_social_options', // page
			'wepick_settings_social_options' // section
		);

		add_settings_field(
			'Instagram_4', // id
			'Instagram', // title
			array( $this, 'instagram_4_callback' ), // callback
			'wepick_settings_social_options', // page
			'wepick_settings_social_options' // section
		);

		add_settings_field(
			'skype_3', // id
			'Skype', // title
			array( $this, 'skype_3_callback' ), // callback
			'wepick_settings_social_options', // page
			'wepick_settings_social_options' // section
		);

		add_settings_field(
			'rss_feeds_4', // id
			'RSS Feeds', // title
			array( $this, 'rss_feeds_4_callback' ), // callback
			'wepick_settings_social_options', // page
			'wepick_settings_social_options' // section
		);

		//end social
		
		
		//Contact
		register_setting(
			'wepick_settings_contact_options', // option_group
			'wepick_settings_option_contact', // option_name
			array( $this, 'wepick_settings_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'wepick_settings_contact_options', // id
			'Social Options', // title
			array( $this, 'wepick_settings_section_contact_callback' ), // callback
			'wepick_settings_contact_options' // page
		);	

		add_settings_field(
			'phone_8', // id
			'Phone', // title
			array( $this, 'phone_8_callback' ), // callback
			'wepick_settings_contact_options', // page
			'wepick_settings_contact_options' // section
		);

		add_settings_field(
			'int_call_8', // id
			'International Phone', // title
			array( $this, 'int_call_8_callback' ), // callback
			'wepick_settings_contact_options', // page
			'wepick_settings_contact_options' // section
		);		

		add_settings_field(
			'email_9', // id
			'Email', // title
			array( $this, 'email_9_callback' ), // callback
			'wepick_settings_contact_options', // page
			'wepick_settings_contact_options' // section
		);

		add_settings_field(
			'head_office_7', // id
			'Head Office & Workshop', // title
			array( $this, 'head_office_7_callback' ), // callback
			'wepick_settings_contact_options', // page
			'wepick_settings_contact_options' // section
		);

		add_settings_field(
			'postal_7', // id
			'Postal', // title
			array( $this, 'postal_7_callback' ), // callback
			'wepick_settings_contact_options', // page
			'wepick_settings_contact_options' // section
		);

		add_settings_field(
			'other_offices_7', // id
			'Other Offices', // title
			array( $this, 'other_offices_7_callback' ), // callback
			'wepick_settings_contact_options', // page
			'wepick_settings_contact_options' // section
		);

		add_settings_field(
			'gmap_altitude_8', // id
			'GMap Latitude', // title
			array( $this, 'gmap_altitude_8_callback' ), // callback
			'wepick_settings_contact_options', // page
			'wepick_settings_contact_options' // section
		);

		add_settings_field(
			'gmap_longitude_8', // id
			'GMap Longitude', // title
			array( $this, 'gmap_longitude_8_callback' ), // callback
			'wepick_settings_contact_options', // page
			'wepick_settings_contact_options' // section
		);
		
		//End Contact
		//
		
		//hero Options
		register_setting(
			'wepick_settings_hero_options', // option_group
			'wepick_settings_option_hero', // option_name
			array( $this, 'wepick_settings_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'wepick_settings_hero_options', // id
			'Hero Options', // title
			array( $this, 'wepick_settings_section_hero_callback' ), // callback
			'wepick_settings_hero_options' // page
		);

		add_settings_field(
			'hero_section', // id
			'Introductory Content', // title
			array( $this, 'hero_callback' ), // callback
			'wepick_settings_hero_options', // page
			'wepick_settings_hero_options' // section
		);

		add_settings_field(
			'cta_hero', // id
			'Call To Action', // title
			array( $this, 'cta_hero_callback' ), // callback
			'wepick_settings_hero_options', // page
			'wepick_settings_hero_options' // section
		);

		add_settings_field(
			'hero_app_screen', // id
			'Feature App Scree', // title
			array( $this, 'hero_app_screen_callback' ), // callback
			'wepick_settings_hero_options', // page
			'wepick_settings_hero_options' // section
		);

		//end hero
		

		//sporting codes Options
		register_setting(
			'wepick_settings_sport_options', // option_group
			'wepick_settings_option_sport', // option_name
			array( $this, 'wepick_settings_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'wepick_settings_sport_options', // id
			'Sport Options', // title
			array( $this, 'wepick_settings_section_sport_callback' ), // callback
			'wepick_settings_sport_options' // page
		);

		add_settings_field(
			'header_sport', // id
			'Headings', // title
			array( $this, 'header_sporting_codes_callback' ), // callback
			'wepick_settings_sport_options', // page
			'wepick_settings_sport_options' // section
		);

		add_settings_field(
			'sporting_codes_items', // id
			'Codes Lists', // title
			array( $this, 'sporting_codes_items_callback' ), // callback
			'wepick_settings_sport_options', // page
			'wepick_settings_sport_options' // section
		);

		//end sport
		
		
		//features codes Options
		register_setting(
			'wepick_settings_features_options', // option_group
			'wepick_settings_option_features', // option_name
			array( $this, 'wepick_settings_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'wepick_settings_features_options', // id
			'Features Options', // title
			array( $this, 'wepick_settings_section_features_callback' ), // callback
			'wepick_settings_features_options' // page
		);

		add_settings_field(
			'header_features', // id
			'Headings', // title
			array( $this, 'header_features_callback' ), // callback
			'wepick_settings_features_options', // page
			'wepick_settings_features_options' // section
		);

		add_settings_field(
			'sporting_codes_items', // id
			'Feature List', // title
			array( $this, 'features_items_callback' ), // callback
			'wepick_settings_features_options', // page
			'wepick_settings_features_options' // section
		);

		//end features
		
		//How it works Options
		register_setting(
			'wepick_settings_how_options', // option_group
			'wepick_settings_option_how', // option_name
			array( $this, 'wepick_settings_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'wepick_settings_how_options', // id
			'Other Section Headings', // title
			array( $this, 'wepick_settings_section_how_callback' ), // callback
			'wepick_settings_how_options' // page
		);

		add_settings_field(
			'header_hows', // id
			'Steps Headings', // title
			array( $this, 'header_how_callback' ), // callback
			'wepick_settings_how_options', // page
			'wepick_settings_how_options' // section
		);

		add_settings_field(
			'header_download', // id
			'Download Headings', // title
			array( $this, 'header_download_callback' ), // callback
			'wepick_settings_how_options', // page
			'wepick_settings_how_options' // section
		);


		add_settings_field(
			'header_screenshot', // id
			'Screenshots Headings', // title
			array( $this, 'header_screenshot_callback' ), // callback
			'wepick_settings_how_options', // page
			'wepick_settings_how_options' // section
		);

		add_settings_field(
			'header_contact', // id
			'Contact Headings', // title
			array( $this, 'header_contact_callback' ), // callback
			'wepick_settings_how_options', // page
			'wepick_settings_how_options' // section
		);

		add_settings_field(
			'header_newsletter', // id
			'Newsletter Headings', // title
			array( $this, 'header_newsletter_callback' ), // callback
			'wepick_settings_how_options', // page
			'wepick_settings_how_options' // section
		);
		//end How it works Options
		
	}

	public function wepick_settings_sanitize($input) {

		//Social
		$sanitary_values = array();
		if ( isset( $input['facebook_0'] ) ) {
			$sanitary_values['facebook_0'] = esc_url( $input['facebook_0'] );
		}

		if ( isset( $input['twitter_1'] ) ) {
			$sanitary_values['twitter_1'] = esc_url( $input['twitter_1'] );
		}

		if ( isset( $input['linkedin_2'] ) ) {
			$sanitary_values['linkedin_2'] = esc_url( $input['linkedin_2'] );
		}

		if ( isset( $input['gplus_3'] ) ) {
			$sanitary_values['gplus_3'] = esc_url( $input['gplus_3'] );
		}

		if ( isset( $input['instagram_4'] ) ) {
			$sanitary_values['instagram_4'] = esc_url( $input['instagram_4'] );
		}

		if ( isset( $input['skype_3'] ) ) {
			$sanitary_values['skype_3'] = esc_url( $input['skype_3'] );
		}

		if ( isset( $input['rss_feeds_4'] ) ) {
			$sanitary_values['rss_feeds_4'] = esc_url( $input['rss_feeds_4'] );
		}

		//General

		if ( isset( $input['service_area_5'] ) ) {
			$sanitary_values['service_area_5'] = sanitize_text_field( $input['service_area_5'] );
		}

		if ( isset( $input['terms_of_use_5'] ) ) {
			$sanitary_values['terms_of_use_5'] = esc_url( $input['terms_of_use_5'] );
		}

		if ( isset( $input['header_cta_5'] ) ) {
			$sanitary_values['header_cta_5'] = esc_url( $input['header_cta_5'] );
		}

		if ( isset( $input['privacy_policy_6'] ) ) {
			$sanitary_values['privacy_policy_6'] = esc_url( $input['privacy_policy_6'] );
		}

		if ( isset( $input['blog_excerpt_10'] ) ) {
			$sanitary_values['blog_excerpt_10'] = sanitize_text_field( $input['blog_excerpt_10'] );
		}

		if ( isset( $input['Copyright_0'] ) ) {
			$sanitary_values['Copyright_0'] = esc_textarea( $input['Copyright_0'] );
		}

		if ( isset( $input['woo_featured_0'] ) ) {
			$sanitary_values['woo_featured_0'] = esc_textarea( $input['woo_featured_0'] );
		}

		//End General

		//Contact Details
		
		if ( isset( $input['head_office_7'] ) ) {
			$sanitary_values['head_office_7'] = esc_textarea( $input['head_office_7'] );
		}

		if ( isset( $input['postal_7'] ) ) {
			$sanitary_values['postal_7'] = esc_textarea( $input['postal_7'] );
		}

		if ( isset( $input['other_offices_7'] ) ) {
			$sanitary_values['other_offices_7'] = esc_textarea( $input['other_offices_7'] );
		}

		if ( isset( $input['phone_8'] ) ) {
			$sanitary_values['phone_8'] = sanitize_text_field( $input['phone_8'] );
		}

		if ( isset( $input['int_call_8'] ) ) {
			$sanitary_values['int_call_8'] = sanitize_text_field( $input['int_call_8'] );
		}

		if ( isset( $input['email_9'] ) ) {
			$sanitary_values['email_9'] = sanitize_email( $input['email_9'] );
		}

		if ( isset( $input['gmap_altitude_8'] ) ) {
			$sanitary_values['gmap_altitude_8'] = sanitize_text_field( $input['gmap_altitude_8'] );
		}

		if ( isset( $input['gmap_longitude_8'] ) ) {
			$sanitary_values['gmap_longitude_8'] = sanitize_text_field( $input['gmap_longitude_8'] );
		}

		//End Contact Details


		//Hero options
		if ( isset( $input['hero_section'] ) ) { 
			$sanitary_values['hero_section'] = esc_textarea( $input['hero_section'] );
		}

		if ( isset( $input['cta_hero_text'] ) ) { 
			$sanitary_values['cta_hero_text'] = sanitize_text_field( $input['cta_hero_text'] );
		}

		if ( isset( $input['cta_url_hero_section'] ) ) {
			$sanitary_values['cta_url_hero_section'] = esc_url( $input['cta_url_hero_section'] );
		}

		if ( isset( $input['hero_app_screen_1'] ) ) {
			$sanitary_values['hero_app_screen_1'] = esc_url( $input['hero_app_screen_1'] );
		}

		if ( isset( $input['hero_app_screen_2'] ) ) {
			$sanitary_values['hero_app_screen_2'] = esc_url( $input['hero_app_screen_2'] );
		}

		//end hero		

		//sport options	

		if ( isset( $input['sport_codes'] ) ) { 
			$sanitary_values['sport_codes'] = esc_textarea( $input['sport_codes'] );
		}

		if ( isset( $input['sport_title'] ) ) { 
			$sanitary_values['sport_title'] = sanitize_text_field( $input['sport_title'] );
		}

		if ( isset( $input['sport_subtitle'] ) ) { 
			$sanitary_values['sport_subtitle'] = sanitize_text_field( $input['sport_subtitle'] );
		}

		//end sport		

		//features options	

		if ( isset( $input['features_codes'] ) ) { 
			$sanitary_values['features_codes'] = esc_textarea( $input['features_codes'] );
		}

		if ( isset( $input['features_title'] ) ) { 
			$sanitary_values['features_title'] = sanitize_text_field( $input['features_title'] );
		}

		if ( isset( $input['features_subtitle'] ) ) { 
			$sanitary_values['features_subtitle'] = sanitize_text_field( $input['features_subtitle'] );
		}

		//end features
		
		//how it works options	

		if ( isset( $input['how_title'] ) ) { 
			$sanitary_values['how_title'] = sanitize_text_field( $input['how_title'] );
		}

		if ( isset( $input['how_subtitle'] ) ) { 
			$sanitary_values['how_subtitle'] = sanitize_text_field( $input['how_subtitle'] );
		}

		if ( isset( $input['download_title'] ) ) { 
			$sanitary_values['download_title'] = sanitize_text_field( $input['download_title'] );
		}

		if ( isset( $input['download_subtitle'] ) ) { 
			$sanitary_values['download_subtitle'] = sanitize_text_field( $input['download_subtitle'] );
		}

		if ( isset( $input['screenshot_title'] ) ) { 
			$sanitary_values['screenshot_title'] = sanitize_text_field( $input['screenshot_title'] );
		}

		if ( isset( $input['screenshot_subtitle'] ) ) { 
			$sanitary_values['screenshot_subtitle'] = sanitize_text_field( $input['screenshot_subtitle'] );
		}

		if ( isset( $input['contact_title'] ) ) { 
			$sanitary_values['contact_title'] = sanitize_text_field( $input['contact_title'] );
		}

		if ( isset( $input['contact_subtitle'] ) ) { 
			$sanitary_values['contact_subtitle'] = sanitize_text_field( $input['contact_subtitle'] );
		}

		if ( isset( $input['newsletter_title'] ) ) { 
			$sanitary_values['newsletter_title'] = sanitize_text_field( $input['newsletter_title'] );
		}

		if ( isset( $input['newsletter_subtitle'] ) ) { 
			$sanitary_values['newsletter_subtitle'] = sanitize_text_field( $input['newsletter_subtitle'] );
		}

		//end how it works



		

		//End hero options

		return $sanitary_values;
	}

	public function wepick_settings_general_options_callback() {
		echo '<p>Enter the right information for each field</p>';
	}

	public function wepick_settings_section_hero_callback() {
		echo '<p>All heropage settings</p>';
	}

	public function wepick_settings_section_sport_callback() {
		echo '<p>Add all avaialable sporting codes below. Each line count as one</p>';
	}

	public function wepick_settings_section_features_callback() {
		echo '<p>Add all available features codes below. Each line count as one</p>';
	}

	public function wepick_settings_section_how_callback() {
		echo '<p>Add the title and subtitle</p>';
	}

	

	public function wepick_settings_section_social_callback() {
		echo '<p>Provide the URL to the social networks you\'d like to display.</p>';
	}

	public function wepick_settings_section_contact_callback() {
		echo '<p>Your Office head_office, Postal, Phone, Email, Google Map</p>';
	}

	public function wepick_settings_section_display_callback() {
		echo '<p>Section Titles and subtitles</p>';
	}


	//Social
	public function facebook_0_callback() {
		printf(
			'<input class="widefat" type="url" name="wepick_settings_option_social[facebook_0]" id="facebook_0" value="%s">',
			isset( $this->wepick_settings_options_social['facebook_0'] ) ? esc_attr( $this->wepick_settings_options_social['facebook_0']) : ''
		);
	}

	public function twitter_1_callback() {
		printf(
			'<input class="widefat" type="url" name="wepick_settings_option_social[twitter_1]" id="twitter_1" value="%s">',
			isset( $this->wepick_settings_options_social['twitter_1'] ) ? esc_attr( $this->wepick_settings_options_social['twitter_1']) : ''
		);
	}

	public function linkedin_2_callback() {
		printf(
			'<input class="widefat" type="url" name="wepick_settings_option_social[linkedin_2]" id="linkedin_2" value="%s">',
			isset( $this->wepick_settings_options_social['linkedin_2'] ) ? esc_attr( $this->wepick_settings_options_social['linkedin_2']) : ''
		);
	}

	public function gplus_3_callback() {
		printf(
			'<input class="widefat" type="url" name="wepick_settings_option_social[gplus_3]" id="gplus_3" value="%s">',
			isset( $this->wepick_settings_options_social['gplus_3'] ) ? esc_attr( $this->wepick_settings_options_social['gplus_3']) : ''
		);
	}

	public function instagram_4_callback() {
		printf(
			'<input class="widefat" type="url" name="wepick_settings_option_social[instagram_4]" id="instagram_4" value="%s">',
			isset( $this->wepick_settings_options_social['instagram_4'] ) ? esc_attr( $this->wepick_settings_options_social['instagram_4']) : ''
		);
	}

	public function skype_3_callback() {
		printf(
			'<input class="widefat" type="url" name="wepick_settings_option_social[skype_3]" id="skype_3" value="%s">',
			isset( $this->wepick_settings_options_social['skype_3'] ) ? esc_attr( $this->wepick_settings_options_social['skype_3']) : ''
		);
	}

	public function rss_feeds_4_callback() {
		printf(
			'<input class="widefat" type="url" name="wepick_settings_option_social[rss_feeds_4]" id="rss_feeds_4" value="%s">',
			isset( $this->wepick_settings_options_social['rss_feeds_4'] ) ? esc_attr( $this->wepick_settings_options_social['rss_feeds_4']) : ''
		);
	}

	public function terms_of_use_5_callback() {
		printf(
			'<input class="widefat" type="url" name="wepick_settings_option_general[terms_of_use_5]" id="terms_of_use_5" value="%s">',
			isset( $this->wepick_settings_options['terms_of_use_5'] ) ? esc_attr( $this->wepick_settings_options['terms_of_use_5']) : ''
		);
	}

	public function privacy_policy_6_callback() {
		printf(
			'<input class="widefat" type="url" name="wepick_settings_option_general[privacy_policy_6]" id="privacy_policy_6" value="%s">',
			isset( $this->wepick_settings_options['privacy_policy_6'] ) ? esc_attr( $this->wepick_settings_options['privacy_policy_6']) : ''
		);
	}


	//Contact
	public function head_office_7_callback() {
		printf(
			'<textarea class="large-text" rows="5" name="wepick_settings_option_contact[head_office_7]" id="head_office_7">%s</textarea>',
			isset( $this->wepick_settings_options_contact['head_office_7'] ) ? esc_attr( $this->wepick_settings_options_contact['head_office_7']) : ''
		);
	}

	public function postal_7_callback() {
		printf(
			'<textarea class="large-text" rows="5" name="wepick_settings_option_contact[postal_7]" id="postal_7">%s</textarea>',
			isset( $this->wepick_settings_options_contact['postal_7'] ) ? esc_attr( $this->wepick_settings_options_contact['postal_7']) : ''
		);
	}

	public function other_offices_7_callback() {
		printf(
			'<textarea class="large-text" rows="5" name="wepick_settings_option_contact[other_offices_7]" id="other_offices_7">%s</textarea>',
			isset( $this->wepick_settings_options_contact['other_offices_7'] ) ? esc_attr( $this->wepick_settings_options_contact['other_offices_7']) : ''
		);
	}

	public function phone_8_callback() {
		printf(
			'<input class="widefat" type="text" name="wepick_settings_option_contact[phone_8]" id="phone_8" value="%s">',
			isset( $this->wepick_settings_options_contact['phone_8'] ) ? esc_attr( $this->wepick_settings_options_contact['phone_8']) : ''
		);
	}

	public function int_call_8_callback() {
		printf(
			'<input class="widefat" type="text" name="wepick_settings_option_contact[int_call_8]" id="int_call_8" value="%s">',
			isset( $this->wepick_settings_options_contact['int_call_8'] ) ? esc_attr( $this->wepick_settings_options_contact['int_call_8']) : ''
		);
	}
	

	public function email_9_callback() {
		printf(
			'<input class="widefat" type="email" name="wepick_settings_option_contact[email_9]" id="email_9" value="%s">',
			isset( $this->wepick_settings_options_contact['email_9'] ) ? esc_attr( $this->wepick_settings_options_contact['email_9']) : ''
		);
	}

	public function gmap_altitude_8_callback() {
		printf(
			'<input class="widefat" type="text" name="wepick_settings_option_contact[gmap_altitude_8]" id="gmap_altitude_8" value="%s">',
			isset( $this->wepick_settings_options_contact['gmap_altitude_8'] ) ? esc_attr( $this->wepick_settings_options_contact['gmap_altitude_8']) : ''
		);
	}

	public function gmap_longitude_8_callback() {
		printf(
			'<input class="widefat" type="text" name="wepick_settings_option_contact[gmap_longitude_8]" id="gmap_longitude_8" value="%s">',
			isset( $this->wepick_settings_options_contact['gmap_longitude_8'] ) ? esc_attr( $this->wepick_settings_options_contact['gmap_longitude_8']) : ''
		);
	}
	//End Contact

	//general
	public function Copyright_0_callback() {
		printf(
			'<textarea class="large-text" rows="5" name="wepick_settings_option_general[Copyright_0]" id="Copyright_0">%s</textarea>',
			isset( $this->wepick_settings_options['Copyright_0'] ) ? esc_attr( $this->wepick_settings_options['Copyright_0']) : ''
		);
	}

	
	//end general
	

	//Hero

	public function hero_callback() {		
		
		printf(
			'<textarea class="large-text" rows="5" placeholder="Enter text here..." name="wepick_settings_option_hero[hero_section]" id="hero_section">%s</textarea>',
			isset( $this->wepick_settings_options_hero['hero_section'] ) ? esc_attr( $this->wepick_settings_options_hero['hero_section']) : ''
		);
	}

	public function cta_hero_callback() {	

		echo ( '<small>CTA Text</small>' )."<br/>";	
		printf(
			'<input class="widefat" type="text" name="wepick_settings_option_hero[cta_hero_text]" id="cta_hero_text" value="%s">',
			isset( $this->wepick_settings_options_hero['cta_hero_text'] ) ? esc_attr( $this->wepick_settings_options_hero['cta_hero_text']) : ''
		);
		
		echo ( "<br/><br/>".'<small>CTA URL</small>' )."<br/>";	
		printf(
			'<input class="widefat" type="url" name="wepick_settings_option_hero[cta_url_hero_section]" id="cta_url_hero_section" value="%s">',
			isset( $this->wepick_settings_options_hero['cta_url_hero_section'] ) ? esc_attr( $this->wepick_settings_options_hero['cta_url_hero_section']) : ''
		);
	}

	public function hero_app_screen_callback() {	

		echo ( '<small>App Screen 1</small>' )."<br/>";	
		printf(
			'<input class="widefat" type="url" name="wepick_settings_option_hero[hero_app_screen_1]" id="hero_app_screen_1" value="%s">',
			isset( $this->wepick_settings_options_hero['hero_app_screen_1'] ) ? esc_attr( $this->wepick_settings_options_hero['hero_app_screen_1']) : ''
		);
		
		echo ( "<br/><br/>".'<small>App Screen 2</small>' )."<br/>";	
		printf(
			'<input class="widefat" type="url" name="wepick_settings_option_hero[hero_app_screen_2]" id="hero_app_screen_2" value="%s">',
			isset( $this->wepick_settings_options_hero['hero_app_screen_2'] ) ? esc_attr( $this->wepick_settings_options_hero['hero_app_screen_2']) : ''
		);
	}

	//end hero
	

	//start sporting codes
	
	public function header_sporting_codes_callback() {
		printf(
			'<input class="widefat" type="text" placeholder="Enter title here..." name="wepick_settings_option_sport[sport_title]" id="sport_title" value="%s">',
			isset( $this->wepick_settings_options_sport['sport_title'] ) ? esc_attr( $this->wepick_settings_options_sport['sport_title']) : ''
		);
		echo "<br/>";
		echo "<small/>Section Title</small>";
		echo "<br/><br/>";
		printf(
			'<input class="widefat" type="text" placeholder="Enter title here..." name="wepick_settings_option_sport[sport_subtitle]" id="sport_subtitle" value="%s">',
			isset( $this->wepick_settings_options_sport['sport_subtitle'] ) ? esc_attr( $this->wepick_settings_options_sport['sport_subtitle']) : ''
		);

		echo "<small/>Section Sub-Title</small>";
	}
	
	public function sporting_codes_items_callback() {		
		
		printf(
			'<textarea class="large-text" rows="15" placeholder="Enter codes here..." name="wepick_settings_option_sport[sport_codes]" id="sport_codes">%s</textarea>',
			isset( $this->wepick_settings_options_sport['sport_codes'] ) ? esc_attr( $this->wepick_settings_options_sport['sport_codes']) : ''
		);
	}

	//end sporting codes
	

	//start sporting codes
	//
	public function header_features_callback() {
		printf(
			'<input class="widefat" type="text" placeholder="Enter title here..." name="wepick_settings_option_features[features_title]" id="features_title" value="%s">',
			isset( $this->wepick_settings_options_features['features_title'] ) ? esc_attr( $this->wepick_settings_options_features['features_title']) : ''
		);
		echo "<br/>";
		echo "<small/>Section Title</small>";
		echo "<br/><br/>";
		printf(
			'<input class="widefat" type="text" placeholder="Enter title here..." name="wepick_settings_option_features[features_subtitle]" id="features_subtitle" value="%s">',
			isset( $this->wepick_settings_options_features['features_subtitle'] ) ? esc_attr( $this->wepick_settings_options_features['features_subtitle']) : ''
		);

		echo "<small/>Section Sub-Title</small>";
	}
	
	public function features_items_callback() {		
		
		printf(
			'<textarea class="large-text" rows="15" placeholder="Enter codes here..." name="wepick_settings_option_features[features_codes]" id="features_codes">%s</textarea>',
			isset( $this->wepick_settings_options_features['features_codes'] ) ? esc_attr( $this->wepick_settings_options_features['features_codes']) : ''
		);
	}

	//end sporting codes

	//start how it works
	
	public function header_how_callback() {
		printf(
			'<input class="widefat" type="text" placeholder="Enter title here..." name="wepick_settings_option_how[how_title]" id="how_title" value="%s">',
			isset( $this->wepick_settings_options_how['how_title'] ) ? esc_attr( $this->wepick_settings_options_how['how_title']) : ''
		);
		echo "<br/>";
		echo "<small/>Section Title</small>";
		echo "<br/><br/>";
		printf(
			'<input class="widefat" type="text" placeholder="Enter title here..." name="wepick_settings_option_how[how_subtitle]" id="how_subtitle" value="%s">',
			isset( $this->wepick_settings_options_how['how_subtitle'] ) ? esc_attr( $this->wepick_settings_options_how['how_subtitle']) : ''
		);

		echo "<small/>Section Sub-Title</small>";
	}

	public function header_download_callback() {
		printf(
			'<input class="widefat" type="text" placeholder="Enter title here..." name="wepick_settings_option_how[download_title]" id="download_title" value="%s">',
			isset( $this->wepick_settings_options_how['download_title'] ) ? esc_attr( $this->wepick_settings_options_how['download_title']) : ''
		);
		echo "<br/>";
		echo "<small/>Section Title</small>";
		echo "<br/><br/>";
		printf(
			'<input class="widefat" type="text" placeholder="Enter title here..." name="wepick_settings_option_how[download_subtitle]" id="download_subtitle" value="%s">',
			isset( $this->wepick_settings_options_how['download_subtitle'] ) ? esc_attr( $this->wepick_settings_options_how['download_subtitle']) : ''
		);

		echo "<small/>Section Sub-Title</small>";
	}

	public function header_screenshot_callback() {
		printf(
			'<input class="widefat" type="text" placeholder="Enter title here..." name="wepick_settings_option_how[screenshot_title]" id="screenshot_title" value="%s">',
			isset( $this->wepick_settings_options_how['screenshot_title'] ) ? esc_attr( $this->wepick_settings_options_how['screenshot_title']) : ''
		);
		echo "<br/>";
		echo "<small/>Section Title</small>";
		echo "<br/><br/>";
		printf(
			'<input class="widefat" type="text" placeholder="Enter title here..." name="wepick_settings_option_how[screenshot_subtitle]" id="screenshot_subtitle" value="%s">',
			isset( $this->wepick_settings_options_how['screenshot_subtitle'] ) ? esc_attr( $this->wepick_settings_options_how['screenshot_subtitle']) : ''
		);

		echo "<small/>Section Sub-Title</small>";
	}

	public function header_contact_callback() {
		printf(
			'<input class="widefat" type="text" placeholder="Enter title here..." name="wepick_settings_option_how[contact_title]" id="contact_title" value="%s">',
			isset( $this->wepick_settings_options_how['contact_title'] ) ? esc_attr( $this->wepick_settings_options_how['contact_title']) : ''
		);
		echo "<br/>";
		echo "<small/>Section Title</small>";
		echo "<br/><br/>";
		printf(
			'<input class="widefat" type="text" placeholder="Enter title here..." name="wepick_settings_option_how[contact_subtitle]" id="contact_subtitle" value="%s">',
			isset( $this->wepick_settings_options_how['contact_subtitle'] ) ? esc_attr( $this->wepick_settings_options_how['contact_subtitle']) : ''
		);

		echo "<small/>Section Sub-Title</small>";
	}

	public function header_newsletter_callback() {
		printf(
			'<input class="widefat" type="text" placeholder="Enter title here..." name="wepick_settings_option_how[newsletter_title]" id="newsletter_title" value="%s">',
			isset( $this->wepick_settings_options_how['newsletter_title'] ) ? esc_attr( $this->wepick_settings_options_how['newsletter_title']) : ''
		);
		echo "<br/>";
		echo "<small/>Section Title</small>";
		echo "<br/><br/>";
		printf(
			'<input class="widefat" type="text" placeholder="Enter title here..." name="wepick_settings_option_how[newsletter_subtitle]" id="newsletter_subtitle" value="%s">',
			isset( $this->wepick_settings_options_how['newsletter_subtitle'] ) ? esc_attr( $this->wepick_settings_options_how['newsletter_subtitle']) : ''
		);

		echo "<small/>Section Sub-Title</small>";
	}

	//end how it works





}
if ( is_admin() )
	$wepick_settings = new wepickSettings();

/* 
 * Social * 
 * wepick_settings_options_social = get_option( 'wepick_settings_option_social' ); // Array of All Options
 * $facebook_0 = $wepick_settings_options_social['facebook_0']; // facebook
 * $twitter_1 = $wepick_settings_options_social['twitter_1']; // Twitter
 * $linkedin_2 = $wepick_settings_options_social['linkedin_2']; // Linkedin
 * $gplus_3 = $wepick_settings_options_social['gplus_3']; // gplus
 * $instagram_3 = $wepick_settings_options_social['instagram_3']; // Skype
 * $skype_3 = $wepick_settings_options_social['skype_3']; // Skype
 * $rss_feeds_4 = $wepick_settings_options_social['rss_feeds_4']; // RSS Feeds
 *
 * Contact
 * $wepick_settings_options_contact = get_option( 'wepick_settings_option_contact' ); // Array of All Options
 * $head_office_7 = $wepick_settings_options_contact['head_office_7']; // head_office
 * $postal_7 = $wepick_settings_options_contact['postal_7']; // head_office
 * $other_offices_7 = $wepick_settings_options_contact['other_offices_7']; // head_office
 * $phone_8 = $wepick_settings_options_contact['phone_8']; // Phone
 * $email_9 = $wepick_settings_options_contact['email_9']; // Email
 * $gmap_altitude_8 = $wepick_settings_options_contact['gmap_altitude_8']; // Phone
 * $gmap_longitude_8 = $wepick_settings_options_contact['gmap_longitude_8']; // Phone
 * $int_call_8 = $wepick_settings_options_contact['int_call_8']; // Phone
 * 
 *
 * General Settings
 * $wepick_settings_options = get_option( 'wepick_settings_option_general' ); // Array of All Options
 * $Copyright_0 = $wepick_settings_options['Copyright_0']; // Copyright
 * $terms_of_use_5 = $wepick_settings_options['terms_of_use_5']; // Terms of Use
 * $privacy_policy_6 = $wepick_settings_options['privacy_policy_6']; // Privacy Policy * 
 *
 *
 * Hero Section 
 * $wepick_settings_options_hero = get_option( 'wepick_settings_option_hero' ); // Array of All Options
 * $hero_section = $wepick_settings_options_hero['hero_section'];
 * $cta_hero_text = $wepick_settings_options_hero['cta_hero_text'];
 * $cta_url_hero_section = $wepick_settings_options_hero['cta_url_hero_section'];
 * $hero_app_screen_1 = $wepick_settings_options_hero['hero_app_screen_1'];
 * $hero_app_screen_2 = $wepick_settings_options_hero['hero_app_screen_2'];
 *
 * Sport Section 
 * $wepick_settings_options_sport = get_option( 'wepick_settings_option_sport' ); // Array of All Options
 * $sport_codes = $wepick_settings_options_sport['sport_codes'];
 * $sport_title = $wepick_settings_options_sport['sport_title'];
 * $sport_subtitle = $wepick_settings_options_sport['sport_subtitle'];
 *
 * Features Section 
 * $wepick_settings_options_features = get_option( 'wepick_settings_option_features' ); // Array of All Options
 * $features_codes = $wepick_settings_options_features['features_codes'];
 * $features_title = $wepick_settings_options_features['sport_title'];
 * $features_subtitle = $wepick_settings_options_features['sport_subtitle'];
 *  
 * How Section 
 * $wepick_settings_options_how = get_option( 'wepick_settings_option_how' ); // Array of All Options
 * $how_title = $wepick_settings_options_how['how_title'];
 * $how_subtitle = $wepick_settings_options_how['how_subtitle'];
 */
?>