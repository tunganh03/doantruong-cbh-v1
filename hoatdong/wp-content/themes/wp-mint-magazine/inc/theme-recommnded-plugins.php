<?php

add_action( 'tgmpa_register', 'wp_mint_magazine_register_recommnded_plugins' );

/**
 * Register the recommnded plugins for this theme.
 */
function wp_mint_magazine_register_recommnded_plugins() {

	$plugins = array(
		array(
			'name'				 => 'Page Builder by SiteOrigin',
			'slug'				 => 'siteorigin-panels',
			'required'			 => false,
			'force_activation'	 => false
		),
		array(
			'name'				 => 'SiteOrigin Widgets Bundle',
			'slug'				 => 'so-widgets-bundle',
			'required'			 => false,
			'force_activation'	 => false
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'			 => 'tgmpa', // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path'	 => '', // Default absolute path to bundled plugins.
		'menu'			 => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'	 => 'themes.php', // Parent menu slug.
		'capability'	 => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'	 => true, // Show admin notices or not.
		'dismissable'	 => true, // If false, a user cannot dismiss the nag message.
		'dismiss_msg'	 => '', // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic'	 => false, // Automatically activate plugins after installation or not.
		'message'		 => '', // Message to output right before the plugins table.

			/*
			  'strings'      => array(
			  'page_title'                      => __( 'Install Required Plugins', 'wp-mint-magazine' ),
			  'menu_title'                      => __( 'Install Plugins', 'wp-mint-magazine' ),
			  'installing'                      => __( 'Installing Plugin: %s', 'wp-mint-magazine' ), // %s = plugin name.
			  'oops'                            => __( 'Something went wrong with the plugin API.', 'wp-mint-magazine' ),
			  'notice_can_install_required'     => _n_noop(
			  'This theme requires the following plugin: %1$s.',
			  'This theme requires the following plugins: %1$s.',
			  'wp-mint-magazine'
			  ), // %1$s = plugin name(s).
			  'notice_can_install_recommended'  => _n_noop(
			  'This theme recommends the following plugin: %1$s.',
			  'This theme recommends the following plugins: %1$s.',
			  'wp-mint-magazine'
			  ), // %1$s = plugin name(s).
			  'notice_cannot_install'           => _n_noop(
			  'Sorry, but you do not have the correct permissions to install the %1$s plugin.',
			  'Sorry, but you do not have the correct permissions to install the %1$s plugins.',
			  'wp-mint-magazine'
			  ), // %1$s = plugin name(s).
			  'notice_ask_to_update'            => _n_noop(
			  'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
			  'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
			  'wp-mint-magazine'
			  ), // %1$s = plugin name(s).
			  'notice_ask_to_update_maybe'      => _n_noop(
			  'There is an update available for: %1$s.',
			  'There are updates available for the following plugins: %1$s.',
			  'wp-mint-magazine'
			  ), // %1$s = plugin name(s).
			  'notice_cannot_update'            => _n_noop(
			  'Sorry, but you do not have the correct permissions to update the %1$s plugin.',
			  'Sorry, but you do not have the correct permissions to update the %1$s plugins.',
			  'wp-mint-magazine'
			  ), // %1$s = plugin name(s).
			  'notice_can_activate_required'    => _n_noop(
			  'The following required plugin is currently inactive: %1$s.',
			  'The following required plugins are currently inactive: %1$s.',
			  'wp-mint-magazine'
			  ), // %1$s = plugin name(s).
			  'notice_can_activate_recommended' => _n_noop(
			  'The following recommended plugin is currently inactive: %1$s.',
			  'The following recommended plugins are currently inactive: %1$s.',
			  'wp-mint-magazine'
			  ), // %1$s = plugin name(s).
			  'notice_cannot_activate'          => _n_noop(
			  'Sorry, but you do not have the correct permissions to activate the %1$s plugin.',
			  'Sorry, but you do not have the correct permissions to activate the %1$s plugins.',
			  'wp-mint-magazine'
			  ), // %1$s = plugin name(s).
			  'install_link'                    => _n_noop(
			  'Begin installing plugin',
			  'Begin installing plugins',
			  'wp-mint-magazine'
			  ),
			  'update_link'                     => _n_noop(
			  'Begin updating plugin',
			  'Begin updating plugins',
			  'wp-mint-magazine'
			  ),
			  'activate_link'                   => _n_noop(
			  'Begin activating plugin',
			  'Begin activating plugins',
			  'wp-mint-magazine'
			  ),
			  'return'                          => __( 'Return to Required Plugins Installer', 'wp-mint-magazine' ),
			  'plugin_activated'                => __( 'Plugin activated successfully.', 'wp-mint-magazine' ),
			  'activated_successfully'          => __( 'The following plugin was activated successfully:', 'wp-mint-magazine' ),
			  'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'wp-mint-magazine' ),  // %1$s = plugin name(s).
			  'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'wp-mint-magazine' ),  // %1$s = plugin name(s).
			  'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'wp-mint-magazine' ), // %s = dashboard link.
			  'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'wp-mint-magazine' ),

			  'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
			  ),
			 */
	);

	tgmpa( $plugins, $config );
}
