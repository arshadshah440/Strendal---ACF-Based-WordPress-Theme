<?php
defined( 'ABSPATH' ) || exit;

/* ── Register ACF Options Page ── */
add_action( 'acf/init', function () {
	if ( ! function_exists( 'acf_add_options_page' ) ) {
		return;
	}

	acf_add_options_page( [
		'page_title' => __( 'Theme Options', 'strendal' ),
		'menu_title' => __( 'Theme Options', 'strendal' ),
		'menu_slug'  => 'strendal-theme-options',
		'capability' => 'manage_options',
		'redirect'   => false,
		'icon_url'   => 'dashicons-admin-appearance',
	] );
} );

/* ── Register Theme Options Field Group ── */
add_action( 'acf/init', function () {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( [
		'key'      => 'group_strendal_theme_options',
		'title'    => __( 'Theme Options', 'strendal' ),
		'location' => [
			[ [ 'param' => 'options_page', 'operator' => '==', 'value' => 'strendal-theme-options' ] ],
		],
		'menu_order' => 0,
		'fields'     => [

			/* ── Header ── */
			[
				'key'   => 'field_strendal_header_tab',
				'label' => __( 'Header', 'strendal' ),
				'name'  => '',
				'type'  => 'tab',
			],
			[
				'key'           => 'field_strendal_site_logo',
				'label'         => __( 'Site Logo', 'strendal' ),
				'name'          => 'site_logo',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'instructions'  => __( 'Upload the logo shown in the navigation. Leave empty to display the site name as text.', 'strendal' ),
			],
			[
				'key'          => 'field_strendal_site_name_text',
				'label'        => __( 'Site Name Text', 'strendal' ),
				'name'         => 'site_name_text',
				'type'         => 'text',
				'instructions' => __( 'Displayed when no logo image is set. Defaults to the WordPress site title.', 'strendal' ),
				'placeholder'  => get_bloginfo( 'name' ),
			],
			[
				'key'          => 'field_strendal_nav_cta_text',
				'label'        => __( 'Nav CTA Button Text', 'strendal' ),
				'name'         => 'nav_cta_text',
				'type'         => 'text',
				'placeholder'  => 'Schedule a Tour',
				'instructions' => __( 'Text for the pill-shaped button in the top-right of the navigation.', 'strendal' ),
			],
			[
				'key'          => 'field_strendal_nav_cta_url',
				'label'        => __( 'Nav CTA Button URL', 'strendal' ),
				'name'         => 'nav_cta_url',
				'type'         => 'url',
				'placeholder'  => '#contact',
				'instructions' => __( 'Destination URL for the nav CTA button.', 'strendal' ),
			],

			/* ── Footer ── */
			[
				'key'   => 'field_strendal_footer_tab',
				'label' => __( 'Footer', 'strendal' ),
				'name'  => '',
				'type'  => 'tab',
			],
			[
				'key'          => 'field_strendal_footer_address',
				'label'        => __( 'Footer Address / Left Text', 'strendal' ),
				'name'         => 'footer_address',
				'type'         => 'text',
				'placeholder'  => '123 Main St · City, ST 00000',
				'instructions' => __( 'Text shown on the left side of the footer.', 'strendal' ),
			],
			[
				'key'          => 'field_strendal_footer_email',
				'label'        => __( 'Footer Email', 'strendal' ),
				'name'         => 'footer_email',
				'type'         => 'email',
				'instructions' => __( 'Contact email shown in the footer.', 'strendal' ),
			],
			[
				'key'          => 'field_strendal_footer_phone',
				'label'        => __( 'Footer Phone', 'strendal' ),
				'name'         => 'footer_phone',
				'type'         => 'text',
				'placeholder'  => '+1 (000) 000-0000',
				'instructions' => __( 'Phone number shown in the footer (becomes a tel: link).', 'strendal' ),
			],
			[
				'key'          => 'field_strendal_footer_copyright',
				'label'        => __( 'Footer Copyright', 'strendal' ),
				'name'         => 'footer_copyright',
				'type'         => 'text',
				'placeholder'  => '© ' . gmdate( 'Y' ) . ' Site Name',
				'instructions' => __( 'Copyright line on the right side of the footer. Basic HTML allowed.', 'strendal' ),
			],
		],
	] );
} );
