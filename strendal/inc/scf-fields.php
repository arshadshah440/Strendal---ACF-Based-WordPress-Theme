<?php
defined( 'ABSPATH' ) || exit;

/**
 * Register all SCF / ACF field groups for the Homepage page template.
 *
 * Each section begins with a "Use Default Content" toggle (true_false).
 * When enabled the template uses the built-in default content from the
 * original HTML design; when disabled the fields below the toggle become
 * visible so the editor can supply custom content.
 */
add_action( 'acf/init', function () {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( [
		'key'      => 'group_strendal_homepage',
		'title'    => __( 'Homepage Content', 'strendal' ),
		'location' => [
			[
				[
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-templates/homepage.php',
				],
			],
		],
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'fields' => [

			/* ════════════════════════════════════════
			   TAB: HERO
			   ════════════════════════════════════════ */
			[
				'key'   => 'field_hp_tab_hero',
				'label' => __( 'Hero', 'strendal' ),
				'name'  => '',
				'type'  => 'tab',
			],
			[
				'key'           => 'field_hp_hero_use_default',
				'label'         => __( 'Content Source', 'strendal' ),
				'name'          => 'hero_use_default',
				'type'          => 'true_false',
				'default_value' => 1,
				'ui'            => 1,
				'ui_on_text'    => __( 'Default', 'strendal' ),
				'ui_off_text'   => __( 'Custom', 'strendal' ),
				'message'       => __( 'Use the built-in default content (from the original design). Switch to Custom to enter your own content below.', 'strendal' ),
			],

			/* ── Hero slides ── */
			[
				'key'              => 'field_hp_hero_slides',
				'label'            => __( 'Hero Slides', 'strendal' ),
				'name'             => 'hero_slides',
				'type'             => 'repeater',
				'min'              => 1,
				'max'              => 8,
				'layout'           => 'block',
				'button_label'     => __( 'Add Slide', 'strendal' ),
				'instructions'     => __( 'Each slide is a full-screen background image with an optional caption.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_hp_hero_use_default', 'operator' => '==', 'value' => '0' ] ] ],
				'sub_fields'       => [
					[
						'key'           => 'field_hp_slide_image',
						'label'         => __( 'Slide Image', 'strendal' ),
						'name'          => 'slide_image',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
						'required'      => 1,
					],
					[
						'key'         => 'field_hp_slide_caption',
						'label'       => __( 'Slide Caption', 'strendal' ),
						'name'        => 'slide_caption',
						'type'        => 'text',
						'placeholder' => 'The Property — Front View',
					],
				],
			],

			/* ── Hero text ── */
			[
				'key'               => 'field_hp_hero_eyebrow',
				'label'             => __( 'Hero Eyebrow', 'strendal' ),
				'name'              => 'hero_eyebrow',
				'type'              => 'text',
				'placeholder'       => 'West Cary · Evans Farm · NC 27519',
				'instructions'      => __( 'Small uppercase line above the main title.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_hp_hero_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_hp_hero_title',
				'label'             => __( 'Hero Title', 'strendal' ),
				'name'              => 'hero_title',
				'type'              => 'text',
				'placeholder'       => 'Where <em>inside</em> meets outside',
				'instructions'      => __( 'Main hero heading. Wrap a word in <em>…</em> for italic styling.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_hp_hero_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_hp_hero_subtitle',
				'label'             => __( 'Hero Subtitle', 'strendal' ),
				'name'              => 'hero_subtitle',
				'type'              => 'text',
				'placeholder'       => '4007 Strendal Drive · A rare ⅓ acre in West Cary',
				'conditional_logic' => [ [ [ 'field' => 'field_hp_hero_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],

			/* ── Hero badges ── */
			[
				'key'               => 'field_hp_hero_badges',
				'label'             => __( 'Hero Badges', 'strendal' ),
				'name'              => 'hero_badges',
				'type'              => 'repeater',
				'min'               => 0,
				'max'               => 8,
				'layout'            => 'table',
				'button_label'      => __( 'Add Badge', 'strendal' ),
				'instructions'      => __( 'Small pill-shaped labels shown below the subtitle.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_hp_hero_use_default', 'operator' => '==', 'value' => '0' ] ] ],
				'sub_fields'        => [
					[
						'key'         => 'field_hp_badge_text',
						'label'       => __( 'Badge Text', 'strendal' ),
						'name'        => 'badge_text',
						'type'        => 'text',
						'placeholder' => '⅓ Acre Lot',
					],
				],
			],

			/* ── Hero CTAs ── */
			[
				'key'               => 'field_hp_hero_cta_primary_text',
				'label'             => __( 'Primary Button Text', 'strendal' ),
				'name'              => 'hero_cta_primary_text',
				'type'              => 'text',
				'placeholder'       => 'Discover the Story',
				'conditional_logic' => [ [ [ 'field' => 'field_hp_hero_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_hp_hero_cta_primary_url',
				'label'             => __( 'Primary Button URL', 'strendal' ),
				'name'              => 'hero_cta_primary_url',
				'type'              => 'url',
				'placeholder'       => '#story',
				'conditional_logic' => [ [ [ 'field' => 'field_hp_hero_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_hp_hero_cta_secondary_text',
				'label'             => __( 'Secondary Button Text', 'strendal' ),
				'name'              => 'hero_cta_secondary_text',
				'type'              => 'text',
				'placeholder'       => 'Schedule a Tour',
				'conditional_logic' => [ [ [ 'field' => 'field_hp_hero_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_hp_hero_cta_secondary_url',
				'label'             => __( 'Secondary Button URL', 'strendal' ),
				'name'              => 'hero_cta_secondary_url',
				'type'              => 'url',
				'placeholder'       => '#contact',
				'conditional_logic' => [ [ [ 'field' => 'field_hp_hero_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],

			/* ════════════════════════════════════════
			   TAB: FACTS STRIP
			   ════════════════════════════════════════ */
			[
				'key'   => 'field_hp_tab_facts',
				'label' => __( 'Facts Strip', 'strendal' ),
				'name'  => '',
				'type'  => 'tab',
			],
			[
				'key'           => 'field_hp_facts_use_default',
				'label'         => __( 'Content Source', 'strendal' ),
				'name'          => 'facts_use_default',
				'type'          => 'true_false',
				'default_value' => 1,
				'ui'            => 1,
				'ui_on_text'    => __( 'Default', 'strendal' ),
				'ui_off_text'   => __( 'Custom', 'strendal' ),
				'message'       => __( 'Use the built-in default facts. Switch to Custom to add your own below.', 'strendal' ),
			],
			[
				'key'               => 'field_hp_facts',
				'label'             => __( 'Key Facts', 'strendal' ),
				'name'              => 'facts',
				'type'              => 'repeater',
				'min'               => 1,
				'max'               => 8,
				'layout'            => 'table',
				'button_label'      => __( 'Add Fact', 'strendal' ),
				'instructions'      => __( 'Stats/facts shown in the horizontal strip below the hero.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_hp_facts_use_default', 'operator' => '==', 'value' => '0' ] ] ],
				'sub_fields'        => [
					[
						'key'         => 'field_hp_fact_number',
						'label'       => __( 'Number / Value', 'strendal' ),
						'name'        => 'fact_number',
						'type'        => 'text',
						'placeholder' => '⅓',
					],
					[
						'key'         => 'field_hp_fact_label',
						'label'       => __( 'Label', 'strendal' ),
						'name'        => 'fact_label',
						'type'        => 'text',
						'placeholder' => 'Acre Lot',
					],
				],
			],

			/* ════════════════════════════════════════
			   TAB: INTRO / STORY
			   ════════════════════════════════════════ */
			[
				'key'   => 'field_hp_tab_intro',
				'label' => __( 'Intro / Story', 'strendal' ),
				'name'  => '',
				'type'  => 'tab',
			],
			[
				'key'           => 'field_hp_intro_use_default',
				'label'         => __( 'Content Source', 'strendal' ),
				'name'          => 'intro_use_default',
				'type'          => 'true_false',
				'default_value' => 1,
				'ui'            => 1,
				'ui_on_text'    => __( 'Default', 'strendal' ),
				'ui_off_text'   => __( 'Custom', 'strendal' ),
				'message'       => __( 'Use the built-in default intro text. Switch to Custom to write your own below.', 'strendal' ),
			],
			[
				'key'               => 'field_hp_intro_eyebrow',
				'label'             => __( 'Section Eyebrow', 'strendal' ),
				'name'              => 'intro_eyebrow',
				'type'              => 'text',
				'placeholder'       => 'The Philosophy',
				'instructions'      => __( 'Small uppercase label above the heading.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_hp_intro_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_hp_intro_title',
				'label'             => __( 'Intro Title', 'strendal' ),
				'name'              => 'intro_title',
				'type'              => 'text',
				'placeholder'       => 'Built on <em>intention.</em><br>Lived in with joy.',
				'instructions'      => __( 'Section heading. Wrap words in <em>…</em> for italic green styling.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_hp_intro_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_hp_intro_content',
				'label'             => __( 'Intro Text', 'strendal' ),
				'name'              => 'intro_content',
				'type'              => 'textarea',
				'rows'              => 5,
				'new_lines'         => 'br',
				'placeholder'       => 'Write a short description...',
				'instructions'      => __( 'The paragraph beneath the intro heading.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_hp_intro_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],

			/* ════════════════════════════════════════
			   TAB: PHOTO GRID
			   ════════════════════════════════════════ */
			[
				'key'   => 'field_hp_tab_grid',
				'label' => __( 'Photo Grid', 'strendal' ),
				'name'  => '',
				'type'  => 'tab',
			],
			[
				'key'           => 'field_hp_grid_use_default',
				'label'         => __( 'Content Source', 'strendal' ),
				'name'          => 'grid_use_default',
				'type'          => 'true_false',
				'default_value' => 1,
				'ui'            => 1,
				'ui_on_text'    => __( 'Default', 'strendal' ),
				'ui_off_text'   => __( 'Custom', 'strendal' ),
				'message'       => __( 'Use the built-in placeholder grid layout. Switch to Custom to upload your own images.', 'strendal' ),
			],
			[
				'key'               => 'field_hp_grid_left',
				'label'             => __( 'Large Left Image', 'strendal' ),
				'name'              => 'grid_left_image',
				'type'              => 'image',
				'return_format'     => 'array',
				'preview_size'      => 'medium',
				'instructions'      => __( 'Full-height image on the left side of the grid.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_hp_grid_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_hp_grid_left_caption',
				'label'             => __( 'Left Image Caption', 'strendal' ),
				'name'              => 'grid_left_caption',
				'type'              => 'text',
				'placeholder'       => 'The Property · Front View',
				'conditional_logic' => [ [ [ 'field' => 'field_hp_grid_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_hp_grid_right_top',
				'label'             => __( 'Right Top Image', 'strendal' ),
				'name'              => 'grid_right_top_image',
				'type'              => 'image',
				'return_format'     => 'array',
				'preview_size'      => 'medium',
				'instructions'      => __( 'Upper image on the right column of the grid.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_hp_grid_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_hp_grid_right_top_caption',
				'label'             => __( 'Right Top Caption', 'strendal' ),
				'name'              => 'grid_right_top_caption',
				'type'              => 'text',
				'placeholder'       => 'The Cul-de-Sac · Privacy & Quiet',
				'conditional_logic' => [ [ [ 'field' => 'field_hp_grid_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_hp_grid_right_bottom',
				'label'             => __( 'Right Bottom Image', 'strendal' ),
				'name'              => 'grid_right_bottom_image',
				'type'              => 'image',
				'return_format'     => 'array',
				'preview_size'      => 'medium',
				'instructions'      => __( 'Lower image on the right column of the grid.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_hp_grid_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_hp_grid_right_bottom_caption',
				'label'             => __( 'Right Bottom Caption', 'strendal' ),
				'name'              => 'grid_right_bottom_caption',
				'type'              => 'text',
				'placeholder'       => 'The Backyard · Screened Porch',
				'conditional_logic' => [ [ [ 'field' => 'field_hp_grid_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],

			/* ════════════════════════════════════════
			   TAB: HIGHLIGHTS BAR
			   ════════════════════════════════════════ */
			[
				'key'   => 'field_hp_tab_highlights',
				'label' => __( 'Highlights', 'strendal' ),
				'name'  => '',
				'type'  => 'tab',
			],
			[
				'key'           => 'field_hp_highlights_use_default',
				'label'         => __( 'Content Source', 'strendal' ),
				'name'          => 'highlights_use_default',
				'type'          => 'true_false',
				'default_value' => 1,
				'ui'            => 1,
				'ui_on_text'    => __( 'Default', 'strendal' ),
				'ui_off_text'   => __( 'Custom', 'strendal' ),
				'message'       => __( 'Use the built-in default highlight items. Switch to Custom to add your own below.', 'strendal' ),
			],
			[
				'key'               => 'field_hp_highlights',
				'label'             => __( 'Highlight Items', 'strendal' ),
				'name'              => 'highlights',
				'type'              => 'repeater',
				'min'               => 1,
				'max'               => 6,
				'layout'            => 'block',
				'button_label'      => __( 'Add Highlight', 'strendal' ),
				'instructions'      => __( 'Green bar with icon/title/body items shown after the photo grid.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_hp_highlights_use_default', 'operator' => '==', 'value' => '0' ] ] ],
				'sub_fields'        => [
					[
						'key'          => 'field_hp_highlight_icon',
						'label'        => __( 'Icon (emoji or text)', 'strendal' ),
						'name'         => 'highlight_icon',
						'type'         => 'text',
						'placeholder'  => '🌅',
						'instructions' => __( 'An emoji or short symbol.', 'strendal' ),
					],
					[
						'key'         => 'field_hp_highlight_title',
						'label'       => __( 'Highlight Title', 'strendal' ),
						'name'        => 'highlight_title',
						'type'        => 'text',
						'placeholder' => 'Northeast Light',
					],
					[
						'key'         => 'field_hp_highlight_body',
						'label'       => __( 'Highlight Description', 'strendal' ),
						'name'        => 'highlight_body',
						'type'        => 'textarea',
						'rows'        => 3,
						'new_lines'   => 'br',
						'placeholder' => 'Morning sun fills every room...',
					],
				],
			],

			/* ════════════════════════════════════════
			   TAB: CTA SECTION
			   ════════════════════════════════════════ */
			[
				'key'   => 'field_hp_tab_cta',
				'label' => __( 'CTA Section', 'strendal' ),
				'name'  => '',
				'type'  => 'tab',
			],
			[
				'key'           => 'field_hp_cta_use_default',
				'label'         => __( 'Content Source', 'strendal' ),
				'name'          => 'cta_use_default',
				'type'          => 'true_false',
				'default_value' => 1,
				'ui'            => 1,
				'ui_on_text'    => __( 'Default', 'strendal' ),
				'ui_off_text'   => __( 'Custom', 'strendal' ),
				'message'       => __( 'Use the built-in default CTA content. Switch to Custom to write your own below.', 'strendal' ),
			],
			[
				'key'               => 'field_hp_cta_title',
				'label'             => __( 'CTA Heading', 'strendal' ),
				'name'              => 'cta_title',
				'type'              => 'text',
				'placeholder'       => 'Come and feel it for yourself',
				'instructions'      => __( 'The heading of the call-to-action section near the bottom.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_hp_cta_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_hp_cta_content',
				'label'             => __( 'CTA Body Text', 'strendal' ),
				'name'              => 'cta_content',
				'type'              => 'textarea',
				'rows'              => 3,
				'new_lines'         => 'br',
				'placeholder'       => 'Schedule a private tour and experience what fourteen years of care feel like in person.',
				'conditional_logic' => [ [ [ 'field' => 'field_hp_cta_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_hp_cta_btn1_text',
				'label'             => __( 'Button 1 Text', 'strendal' ),
				'name'              => 'cta_btn1_text',
				'type'              => 'text',
				'placeholder'       => 'Schedule a Private Tour',
				'conditional_logic' => [ [ [ 'field' => 'field_hp_cta_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_hp_cta_btn1_url',
				'label'             => __( 'Button 1 URL', 'strendal' ),
				'name'              => 'cta_btn1_url',
				'type'              => 'url',
				'placeholder'       => 'tel:+10000000000',
				'conditional_logic' => [ [ [ 'field' => 'field_hp_cta_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_hp_cta_btn2_text',
				'label'             => __( 'Button 2 Text', 'strendal' ),
				'name'              => 'cta_btn2_text',
				'type'              => 'text',
				'placeholder'       => 'Explore the Neighborhood',
				'conditional_logic' => [ [ [ 'field' => 'field_hp_cta_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_hp_cta_btn2_url',
				'label'             => __( 'Button 2 URL', 'strendal' ),
				'name'              => 'cta_btn2_url',
				'type'              => 'url',
				'placeholder'       => '#neighborhood',
				'conditional_logic' => [ [ [ 'field' => 'field_hp_cta_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],

		], // end fields
	] ); // end acf_add_local_field_group


	/* ════════════════════════════════════════════════════════
	   LIGHT & ORIENTATION PAGE TEMPLATE FIELDS
	   ════════════════════════════════════════════════════════ */
	acf_add_local_field_group( [
		'key'      => 'group_strendal_light_orientation',
		'title'    => __( 'Light & Orientation Content', 'strendal' ),
		'location' => [
			[
				[
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-templates/light-orientation.php',
				],
			],
		],
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'fields' => [

			/* ── TAB: HERO ── */
			[ 'key' => 'field_lo_tab_hero', 'label' => __( 'Hero', 'strendal' ), 'name' => '', 'type' => 'tab' ],
			[
				'key'           => 'field_lo_hero_use_default',
				'label'         => __( 'Content Source', 'strendal' ),
				'name'          => 'lo_hero_use_default',
				'type'          => 'true_false',
				'default_value' => 1,
				'ui'            => 1,
				'ui_on_text'    => 'Default',
				'ui_off_text'   => 'Custom',
				'message'       => __( 'Use built-in default hero. Switch to Custom to upload your own image and text.', 'strendal' ),
			],
			[
				'key'               => 'field_lo_hero_image',
				'label'             => __( 'Hero Background Image', 'strendal' ),
				'name'              => 'lo_hero_image',
				'type'              => 'image',
				'return_format'     => 'array',
				'preview_size'      => 'medium',
				'instructions'      => __( 'Full-viewport background photo for the hero.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_lo_hero_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_lo_hero_eyebrow',
				'label'             => __( 'Eyebrow', 'strendal' ),
				'name'              => 'lo_hero_eyebrow',
				'type'              => 'text',
				'placeholder'       => 'Section 4 — Light & Orientation',
				'conditional_logic' => [ [ [ 'field' => 'field_lo_hero_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_lo_hero_title',
				'label'             => __( 'Hero Title', 'strendal' ),
				'name'              => 'lo_hero_title',
				'type'              => 'text',
				'placeholder'       => 'This home greets every dawn.',
				'instructions'      => __( 'Use <br> for line breaks.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_lo_hero_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_lo_hero_subtitle',
				'label'             => __( 'Hero Subtitle', 'strendal' ),
				'name'              => 'lo_hero_subtitle',
				'type'              => 'textarea',
				'rows'              => 3,
				'conditional_logic' => [ [ [ 'field' => 'field_lo_hero_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],

			/* ── TAB: INTRO / ORIENTATION ── */
			[ 'key' => 'field_lo_tab_intro', 'label' => __( 'Intro / Orientation', 'strendal' ), 'name' => '', 'type' => 'tab' ],
			[
				'key'           => 'field_lo_intro_use_default',
				'label'         => __( 'Content Source', 'strendal' ),
				'name'          => 'lo_intro_use_default',
				'type'          => 'true_false',
				'default_value' => 1,
				'ui'            => 1,
				'ui_on_text'    => 'Default',
				'ui_off_text'   => 'Custom',
				'message'       => __( 'Use built-in default intro text and orientation facts.', 'strendal' ),
			],
			[
				'key'               => 'field_lo_intro_label',
				'label'             => __( 'Section Label', 'strendal' ),
				'name'              => 'lo_intro_label',
				'type'              => 'text',
				'placeholder'       => 'The Science of Light',
				'conditional_logic' => [ [ [ 'field' => 'field_lo_intro_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_lo_intro_title',
				'label'             => __( 'Intro Title', 'strendal' ),
				'name'              => 'lo_intro_title',
				'type'              => 'text',
				'placeholder'       => 'Not all homes face <br><em>the right direction.</em>',
				'instructions'      => __( 'Use <em>…</em> for italic green text, <br> for line break.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_lo_intro_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_lo_intro_paragraphs',
				'label'             => __( 'Intro Paragraphs', 'strendal' ),
				'name'              => 'lo_intro_paragraphs',
				'type'              => 'repeater',
				'min'               => 1,
				'max'               => 5,
				'layout'            => 'block',
				'button_label'      => __( 'Add Paragraph', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_lo_intro_use_default', 'operator' => '==', 'value' => '0' ] ] ],
				'sub_fields'        => [
					[ 'key' => 'field_lo_intro_para_text', 'label' => __( 'Paragraph', 'strendal' ), 'name' => 'paragraph', 'type' => 'textarea', 'rows' => 3 ],
				],
			],
			[
				'key'               => 'field_lo_orient_facts',
				'label'             => __( 'Orientation Facts (2×2 grid in diagram)', 'strendal' ),
				'name'              => 'lo_orient_facts',
				'type'              => 'repeater',
				'min'               => 1,
				'max'               => 4,
				'layout'            => 'table',
				'button_label'      => __( 'Add Fact', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_lo_intro_use_default', 'operator' => '==', 'value' => '0' ] ] ],
				'sub_fields'        => [
					[ 'key' => 'field_lo_of_icon',  'label' => __( 'Icon (emoji)', 'strendal' ), 'name' => 'of_icon',  'type' => 'text', 'placeholder' => '🌅' ],
					[ 'key' => 'field_lo_of_label', 'label' => __( 'Label', 'strendal' ),        'name' => 'of_label', 'type' => 'text', 'placeholder' => 'Morning' ],
					[ 'key' => 'field_lo_of_value', 'label' => __( 'Value', 'strendal' ),        'name' => 'of_value', 'type' => 'text', 'placeholder' => 'Sunrise fills front rooms' ],
				],
			],

			/* ── TAB: FACTS STRIP ── */
			[ 'key' => 'field_lo_tab_facts', 'label' => __( 'Facts Strip', 'strendal' ), 'name' => '', 'type' => 'tab' ],
			[
				'key'           => 'field_lo_facts_use_default',
				'label'         => __( 'Content Source', 'strendal' ),
				'name'          => 'lo_facts_use_default',
				'type'          => 'true_false',
				'default_value' => 1,
				'ui'            => 1,
				'ui_on_text'    => 'Default',
				'ui_off_text'   => 'Custom',
				'message'       => __( 'Use built-in default fact pills.', 'strendal' ),
			],
			[
				'key'               => 'field_lo_facts',
				'label'             => __( 'Fact Pills', 'strendal' ),
				'name'              => 'lo_facts',
				'type'              => 'repeater',
				'min'               => 1,
				'max'               => 6,
				'layout'            => 'table',
				'button_label'      => __( 'Add Fact', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_lo_facts_use_default', 'operator' => '==', 'value' => '0' ] ] ],
				'sub_fields'        => [
					[ 'key' => 'field_lo_fact_num',   'label' => __( 'Number / Value', 'strendal' ), 'name' => 'fact_num',   'type' => 'text', 'placeholder' => '7–8' ],
					[ 'key' => 'field_lo_fact_label', 'label' => __( 'Label', 'strendal' ),          'name' => 'fact_label', 'type' => 'text', 'placeholder' => 'Months open-air living' ],
				],
			],

			/* ── TAB: AIRFLOW ── */
			[ 'key' => 'field_lo_tab_airflow', 'label' => __( 'Airflow', 'strendal' ), 'name' => '', 'type' => 'tab' ],
			[
				'key'           => 'field_lo_airflow_use_default',
				'label'         => __( 'Content Source', 'strendal' ),
				'name'          => 'lo_airflow_use_default',
				'type'          => 'true_false',
				'default_value' => 1,
				'ui'            => 1,
				'ui_on_text'    => 'Default',
				'ui_off_text'   => 'Custom',
				'message'       => __( 'Use built-in default airflow content and images.', 'strendal' ),
			],
			[
				'key'               => 'field_lo_airflow_label',
				'label'             => __( 'Section Label', 'strendal' ),
				'name'              => 'lo_airflow_label',
				'type'              => 'text',
				'placeholder'       => 'Natural Ventilation',
				'conditional_logic' => [ [ [ 'field' => 'field_lo_airflow_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_lo_airflow_title',
				'label'             => __( 'Section Title', 'strendal' ),
				'name'              => 'lo_airflow_title',
				'type'              => 'text',
				'placeholder'       => 'A home that breathes on its own terms.',
				'instructions'      => __( 'Use <br> for line breaks.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_lo_airflow_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_lo_airflow_lead',
				'label'             => __( 'Lead Paragraph', 'strendal' ),
				'name'              => 'lo_airflow_lead',
				'type'              => 'textarea',
				'rows'              => 3,
				'conditional_logic' => [ [ [ 'field' => 'field_lo_airflow_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_lo_airflow_tabs',
				'label'             => __( 'Image Tabs', 'strendal' ),
				'name'              => 'lo_airflow_tabs',
				'type'              => 'repeater',
				'min'               => 1,
				'max'               => 5,
				'layout'            => 'block',
				'button_label'      => __( 'Add Tab', 'strendal' ),
				'instructions'      => __( 'Each tab shows one image with a caption. Tab labels appear above the image.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_lo_airflow_use_default', 'operator' => '==', 'value' => '0' ] ] ],
				'sub_fields'        => [
					[ 'key' => 'field_lo_at_label',   'label' => __( 'Tab Label', 'strendal' ),   'name' => 'at_label',   'type' => 'text',  'placeholder' => 'Front View' ],
					[ 'key' => 'field_lo_at_image',   'label' => __( 'Tab Image', 'strendal' ),   'name' => 'at_image',   'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ],
					[ 'key' => 'field_lo_at_caption', 'label' => __( 'Tab Caption', 'strendal' ), 'name' => 'at_caption', 'type' => 'text',  'placeholder' => 'Northeast front face — light from all directions' ],
				],
			],
			[
				'key'               => 'field_lo_airflow_benefits',
				'label'             => __( 'Benefit Cards', 'strendal' ),
				'name'              => 'lo_airflow_benefits',
				'type'              => 'repeater',
				'min'               => 1,
				'max'               => 3,
				'layout'            => 'block',
				'button_label'      => __( 'Add Benefit Card', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_lo_airflow_use_default', 'operator' => '==', 'value' => '0' ] ] ],
				'sub_fields'        => [
					[ 'key' => 'field_lo_ab_icon',  'label' => __( 'Icon (emoji)', 'strendal' ), 'name' => 'ab_icon',  'type' => 'text',     'placeholder' => '🚪' ],
					[ 'key' => 'field_lo_ab_title', 'label' => __( 'Title', 'strendal' ),        'name' => 'ab_title', 'type' => 'text',     'placeholder' => 'The Spice Door' ],
					[ 'key' => 'field_lo_ab_body',  'label' => __( 'Body', 'strendal' ),         'name' => 'ab_body',  'type' => 'textarea', 'rows' => 3 ],
				],
			],

			/* ── TAB: QUIET ── */
			[ 'key' => 'field_lo_tab_quiet', 'label' => __( 'Quiet & Privacy', 'strendal' ), 'name' => '', 'type' => 'tab' ],
			[
				'key'           => 'field_lo_quiet_use_default',
				'label'         => __( 'Content Source', 'strendal' ),
				'name'          => 'lo_quiet_use_default',
				'type'          => 'true_false',
				'default_value' => 1,
				'ui'            => 1,
				'ui_on_text'    => 'Default',
				'ui_off_text'   => 'Custom',
				'message'       => __( 'Use built-in default quiet section including noise chart.', 'strendal' ),
			],
			[
				'key'               => 'field_lo_quiet_label',
				'label'             => __( 'Section Label', 'strendal' ),
				'name'              => 'lo_quiet_label',
				'type'              => 'text',
				'placeholder'       => 'Peace & Privacy',
				'conditional_logic' => [ [ [ 'field' => 'field_lo_quiet_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_lo_quiet_title',
				'label'             => __( 'Section Title', 'strendal' ),
				'name'              => 'lo_quiet_title',
				'type'              => 'text',
				'placeholder'       => "The sounds you want.\nNot the ones you don't.",
				'instructions'      => __( 'Use <br> for line break.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_lo_quiet_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_lo_quiet_paragraphs',
				'label'             => __( 'Body Paragraphs', 'strendal' ),
				'name'              => 'lo_quiet_paragraphs',
				'type'              => 'repeater',
				'min'               => 1,
				'max'               => 4,
				'layout'            => 'block',
				'button_label'      => __( 'Add Paragraph', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_lo_quiet_use_default', 'operator' => '==', 'value' => '0' ] ] ],
				'sub_fields'        => [
					[ 'key' => 'field_lo_qp_text', 'label' => __( 'Paragraph', 'strendal' ), 'name' => 'paragraph', 'type' => 'textarea', 'rows' => 3 ],
				],
			],
			[
				'key'               => 'field_lo_quiet_checklist',
				'label'             => __( 'Checklist Items', 'strendal' ),
				'name'              => 'lo_quiet_checklist',
				'type'              => 'repeater',
				'min'               => 1,
				'max'               => 8,
				'layout'            => 'table',
				'button_label'      => __( 'Add Item', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_lo_quiet_use_default', 'operator' => '==', 'value' => '0' ] ] ],
				'sub_fields'        => [
					[ 'key' => 'field_lo_qc_item', 'label' => __( 'Item', 'strendal' ), 'name' => 'item', 'type' => 'text' ],
				],
			],
			[
				'key'               => 'field_lo_noise_rows',
				'label'             => __( 'Noise Chart Rows', 'strendal' ),
				'name'              => 'lo_noise_rows',
				'type'              => 'repeater',
				'min'               => 1,
				'max'               => 6,
				'layout'            => 'table',
				'button_label'      => __( 'Add Noise Row', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_lo_quiet_use_default', 'operator' => '==', 'value' => '0' ] ] ],
				'sub_fields'        => [
					[ 'key' => 'field_lo_nr_label',   'label' => __( 'Noise Source', 'strendal' ),   'name' => 'nr_label',   'type' => 'text', 'placeholder' => 'Aircraft overhead' ],
					[ 'key' => 'field_lo_nr_note',    'label' => __( 'Note / Context', 'strendal' ), 'name' => 'nr_note',    'type' => 'text', 'placeholder' => 'Quiet in our experience' ],
					[ 'key' => 'field_lo_nr_pct',     'label' => __( 'Bar % (0–100)', 'strendal' ),  'name' => 'nr_pct',     'type' => 'number', 'min' => 0, 'max' => 100, 'placeholder' => '8' ],
					[ 'key' => 'field_lo_nr_type',    'label' => __( 'Bar Colour', 'strendal' ),     'name' => 'nr_type',    'type' => 'select',
					  'choices' => [ 'low' => 'Low (green)', 'med' => 'Medium (gold)', 'high' => 'High (red)' ], 'default_value' => 'low' ],
				],
			],
			[
				'key'               => 'field_lo_noise_note',
				'label'             => __( 'Noise Chart Footer Note', 'strendal' ),
				'name'              => 'lo_noise_note',
				'type'              => 'textarea',
				'rows'              => 3,
				'conditional_logic' => [ [ [ 'field' => 'field_lo_quiet_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],

			/* ── TAB: SUNSET ── */
			[ 'key' => 'field_lo_tab_sunset', 'label' => __( 'Sunset Section', 'strendal' ), 'name' => '', 'type' => 'tab' ],
			[
				'key'           => 'field_lo_sunset_use_default',
				'label'         => __( 'Content Source', 'strendal' ),
				'name'          => 'lo_sunset_use_default',
				'type'          => 'true_false',
				'default_value' => 1,
				'ui'            => 1,
				'ui_on_text'    => 'Default',
				'ui_off_text'   => 'Custom',
				'message'       => __( 'Use built-in default sunset quote and image.', 'strendal' ),
			],
			[
				'key'               => 'field_lo_sunset_image',
				'label'             => __( 'Sunset Background Image', 'strendal' ),
				'name'              => 'lo_sunset_image',
				'type'              => 'image',
				'return_format'     => 'array',
				'preview_size'      => 'medium',
				'conditional_logic' => [ [ [ 'field' => 'field_lo_sunset_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_lo_sunset_quote',
				'label'             => __( 'Blockquote', 'strendal' ),
				'name'              => 'lo_sunset_quote',
				'type'              => 'textarea',
				'rows'              => 3,
				'placeholder'       => 'The morning light arrives like a quiet promise. The evening light stays like a reward.',
				'instructions'      => __( 'Use <br> for line breaks within the quote.', 'strendal' ),
				'conditional_logic' => [ [ [ 'field' => 'field_lo_sunset_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_lo_sunset_attribution',
				'label'             => __( 'Attribution', 'strendal' ),
				'name'              => 'lo_sunset_attribution',
				'type'              => 'text',
				'placeholder'       => '14 years of sunrises and sunsets — 4007 Strendal Drive',
				'conditional_logic' => [ [ [ 'field' => 'field_lo_sunset_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],

			/* ── TAB: CTA STRIP ── */
			[ 'key' => 'field_lo_tab_cta', 'label' => __( 'CTA Strip', 'strendal' ), 'name' => '', 'type' => 'tab' ],
			[
				'key'           => 'field_lo_cta_use_default',
				'label'         => __( 'Content Source', 'strendal' ),
				'name'          => 'lo_cta_use_default',
				'type'          => 'true_false',
				'default_value' => 1,
				'ui'            => 1,
				'ui_on_text'    => 'Default',
				'ui_off_text'   => 'Custom',
				'message'       => __( 'Use built-in default CTA strip.', 'strendal' ),
			],
			[
				'key'               => 'field_lo_cta_title',
				'label'             => __( 'CTA Heading', 'strendal' ),
				'name'              => 'lo_cta_title',
				'type'              => 'text',
				'placeholder'       => 'Come see it in the morning.',
				'conditional_logic' => [ [ [ 'field' => 'field_lo_cta_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_lo_cta_body',
				'label'             => __( 'CTA Body', 'strendal' ),
				'name'              => 'lo_cta_body',
				'type'              => 'text',
				'placeholder'       => "Schedule a tour at sunrise — and experience the light for yourself.",
				'conditional_logic' => [ [ [ 'field' => 'field_lo_cta_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_lo_cta_btn_text',
				'label'             => __( 'Button Text', 'strendal' ),
				'name'              => 'lo_cta_btn_text',
				'type'              => 'text',
				'placeholder'       => 'Schedule a Tour',
				'conditional_logic' => [ [ [ 'field' => 'field_lo_cta_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],
			[
				'key'               => 'field_lo_cta_btn_url',
				'label'             => __( 'Button URL', 'strendal' ),
				'name'              => 'lo_cta_btn_url',
				'type'              => 'url',
				'placeholder'       => '#contact',
				'conditional_logic' => [ [ [ 'field' => 'field_lo_cta_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			],

		], // end fields
	] ); // end light-orientation group

	/* ════════════════════════════════════════════════════════
	   BEDROOMS PAGE TEMPLATE FIELDS
	   ════════════════════════════════════════════════════════ */
	acf_add_local_field_group( [
		'key'      => 'group_strendal_bedrooms',
		'title'    => 'Bedrooms Page Content',
		'location' => [ [ [ 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/bedrooms.php' ] ] ],
		'fields'   => [

			/* ── HERO ── */
			[ 'key' => 'field_br_hero_tab', 'label' => 'Hero', 'name' => '', 'type' => 'tab' ],

			[ 'key' => 'field_br_hero_use_default', 'label' => 'Content Source', 'name' => 'br_hero_use_default', 'type' => 'true_false',
			  'default_value' => 1, 'ui' => 1, 'ui_on_text' => 'Default', 'ui_off_text' => 'Custom' ],

			[ 'key' => 'field_br_hero_eyebrow', 'label' => 'Eyebrow', 'name' => 'br_hero_eyebrow', 'type' => 'text',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_hero_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_hero_title', 'label' => 'Title (HTML allowed)', 'name' => 'br_hero_title', 'type' => 'textarea', 'rows' => 3,
			  'conditional_logic' => [ [ [ 'field' => 'field_br_hero_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_hero_subtitle', 'label' => 'Subtitle', 'name' => 'br_hero_subtitle', 'type' => 'textarea', 'rows' => 3,
			  'conditional_logic' => [ [ [ 'field' => 'field_br_hero_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],

			/* ── FLOOR OVERVIEW ── */
			[ 'key' => 'field_br_floor_tab', 'label' => 'Floor Overview', 'name' => '', 'type' => 'tab' ],

			[ 'key' => 'field_br_floor_use_default', 'label' => 'Content Source', 'name' => 'br_floor_use_default', 'type' => 'true_false',
			  'default_value' => 1, 'ui' => 1, 'ui_on_text' => 'Default', 'ui_off_text' => 'Custom' ],

			[ 'key' => 'field_br_ground_rooms', 'label' => 'Ground Floor Rooms', 'name' => 'br_ground_rooms', 'type' => 'repeater', 'min' => 1,
			  'conditional_logic' => [ [ [ 'field' => 'field_br_floor_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			  'sub_fields' => [
			    [ 'key' => 'field_br_gr_text', 'label' => 'Room Text', 'name' => 'gr_text', 'type' => 'text' ],
			    [ 'key' => 'field_br_gr_highlight', 'label' => 'Highlighted', 'name' => 'gr_highlight', 'type' => 'true_false', 'ui' => 1 ],
			  ],
			],
			[ 'key' => 'field_br_upper_rooms', 'label' => 'Upper Floor Rooms', 'name' => 'br_upper_rooms', 'type' => 'repeater', 'min' => 1,
			  'conditional_logic' => [ [ [ 'field' => 'field_br_floor_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			  'sub_fields' => [
			    [ 'key' => 'field_br_ur_text', 'label' => 'Room Text', 'name' => 'ur_text', 'type' => 'text' ],
			    [ 'key' => 'field_br_ur_highlight', 'label' => 'Highlighted', 'name' => 'ur_highlight', 'type' => 'true_false', 'ui' => 1 ],
			  ],
			],

			/* ── BEDROOM 2 ── */
			[ 'key' => 'field_br_br2_tab', 'label' => 'Bedroom 2', 'name' => '', 'type' => 'tab' ],

			[ 'key' => 'field_br_br2_use_default', 'label' => 'Content Source', 'name' => 'br_br2_use_default', 'type' => 'true_false',
			  'default_value' => 1, 'ui' => 1, 'ui_on_text' => 'Default', 'ui_off_text' => 'Custom' ],

			[ 'key' => 'field_br_br2_label',  'label' => 'Section Label', 'name' => 'br_br2_label',  'type' => 'text',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_br2_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_br2_title',  'label' => 'Title (HTML)', 'name' => 'br_br2_title',   'type' => 'textarea', 'rows' => 2,
			  'conditional_logic' => [ [ [ 'field' => 'field_br_br2_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_br2_paras',  'label' => 'Paragraphs', 'name' => 'br_br2_paras', 'type' => 'repeater',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_br2_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			  'sub_fields' => [ [ 'key' => 'field_br_br2_para', 'label' => 'Paragraph', 'name' => 'paragraph', 'type' => 'textarea', 'rows' => 3 ] ] ],
			[ 'key' => 'field_br_br2_chips',  'label' => 'Feature Chips', 'name' => 'br_br2_chips', 'type' => 'repeater',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_br2_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			  'sub_fields' => [ [ 'key' => 'field_br_br2_chip', 'label' => 'Chip Text', 'name' => 'chip_text', 'type' => 'text' ] ] ],
			[ 'key' => 'field_br_br2_photo',   'label' => 'Main Photo',   'name' => 'br_br2_photo',   'type' => 'image', 'return_format' => 'array',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_br2_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_br2_tp_a',    'label' => 'Two-Photo Left',   'name' => 'br_br2_tp_a',  'type' => 'image', 'return_format' => 'array',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_br2_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_br2_tp_a_cap','label' => 'Two-Photo Left Caption',  'name' => 'br_br2_tp_a_cap', 'type' => 'text',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_br2_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_br2_tp_b',    'label' => 'Two-Photo Right',  'name' => 'br_br2_tp_b',  'type' => 'image', 'return_format' => 'array',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_br2_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_br2_tp_b_cap','label' => 'Two-Photo Right Caption', 'name' => 'br_br2_tp_b_cap', 'type' => 'text',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_br2_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],

			/* ── JACK & JILL ── */
			[ 'key' => 'field_br_jj_tab', 'label' => 'Jack & Jill', 'name' => '', 'type' => 'tab' ],

			[ 'key' => 'field_br_jj_use_default', 'label' => 'Content Source', 'name' => 'br_jj_use_default', 'type' => 'true_false',
			  'default_value' => 1, 'ui' => 1, 'ui_on_text' => 'Default', 'ui_off_text' => 'Custom' ],

			[ 'key' => 'field_br_jj_label',   'label' => 'Section Label', 'name' => 'br_jj_label',   'type' => 'text',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_jj_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_jj_title',   'label' => 'Title (HTML)',  'name' => 'br_jj_title',   'type' => 'textarea', 'rows' => 2,
			  'conditional_logic' => [ [ [ 'field' => 'field_br_jj_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_jj_paras',   'label' => 'Paragraphs',   'name' => 'br_jj_paras', 'type' => 'repeater',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_jj_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			  'sub_fields' => [ [ 'key' => 'field_br_jj_para', 'label' => 'Paragraph', 'name' => 'paragraph', 'type' => 'textarea', 'rows' => 3 ] ] ],
			[ 'key' => 'field_br_jj_callout', 'label' => 'Callout Text', 'name' => 'br_jj_callout', 'type' => 'textarea', 'rows' => 2,
			  'conditional_logic' => [ [ [ 'field' => 'field_br_jj_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_jj_photo',   'label' => 'Photo',        'name' => 'br_jj_photo',   'type' => 'image', 'return_format' => 'array',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_jj_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],

			/* ── DARK DIVIDER ── */
			[ 'key' => 'field_br_dark_tab', 'label' => 'Dark Divider', 'name' => '', 'type' => 'tab' ],

			[ 'key' => 'field_br_dark_use_default', 'label' => 'Content Source', 'name' => 'br_dark_use_default', 'type' => 'true_false',
			  'default_value' => 1, 'ui' => 1, 'ui_on_text' => 'Default', 'ui_off_text' => 'Custom' ],

			[ 'key' => 'field_br_dark_quote', 'label' => 'Quote (HTML for em)', 'name' => 'br_dark_quote', 'type' => 'textarea', 'rows' => 2,
			  'conditional_logic' => [ [ [ 'field' => 'field_br_dark_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_dark_attr',  'label' => 'Attribution',        'name' => 'br_dark_attr',  'type' => 'text',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_dark_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_dark_cards', 'label' => 'Cards', 'name' => 'br_dark_cards', 'type' => 'repeater',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_dark_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			  'sub_fields' => [
			    [ 'key' => 'field_br_dc_icon',  'label' => 'Icon (emoji)', 'name' => 'dc_icon',  'type' => 'text' ],
			    [ 'key' => 'field_br_dc_title', 'label' => 'Title',        'name' => 'dc_title', 'type' => 'text' ],
			    [ 'key' => 'field_br_dc_body',  'label' => 'Body',         'name' => 'dc_body',  'type' => 'textarea', 'rows' => 2 ],
			  ],
			],

			/* ── BEDROOM 3 ── */
			[ 'key' => 'field_br_br3_tab', 'label' => 'Bedroom 3', 'name' => '', 'type' => 'tab' ],

			[ 'key' => 'field_br_br3_use_default', 'label' => 'Content Source', 'name' => 'br_br3_use_default', 'type' => 'true_false',
			  'default_value' => 1, 'ui' => 1, 'ui_on_text' => 'Default', 'ui_off_text' => 'Custom' ],

			[ 'key' => 'field_br_br3_label', 'label' => 'Section Label', 'name' => 'br_br3_label', 'type' => 'text',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_br3_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_br3_title', 'label' => 'Title (HTML)',  'name' => 'br_br3_title', 'type' => 'textarea', 'rows' => 2,
			  'conditional_logic' => [ [ [ 'field' => 'field_br_br3_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_br3_paras', 'label' => 'Paragraphs', 'name' => 'br_br3_paras', 'type' => 'repeater',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_br3_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			  'sub_fields' => [ [ 'key' => 'field_br_br3_para', 'label' => 'Paragraph', 'name' => 'paragraph', 'type' => 'textarea', 'rows' => 3 ] ] ],
			[ 'key' => 'field_br_br3_chips', 'label' => 'Feature Chips', 'name' => 'br_br3_chips', 'type' => 'repeater',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_br3_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			  'sub_fields' => [ [ 'key' => 'field_br_br3_chip', 'label' => 'Chip Text', 'name' => 'chip_text', 'type' => 'text' ] ] ],
			[ 'key' => 'field_br_br3_photo', 'label' => 'Photo', 'name' => 'br_br3_photo', 'type' => 'image', 'return_format' => 'array',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_br3_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],

			/* ── LAUNDRY ── */
			[ 'key' => 'field_br_laundry_tab', 'label' => 'Laundry', 'name' => '', 'type' => 'tab' ],

			[ 'key' => 'field_br_laundry_use_default', 'label' => 'Content Source', 'name' => 'br_laundry_use_default', 'type' => 'true_false',
			  'default_value' => 1, 'ui' => 1, 'ui_on_text' => 'Default', 'ui_off_text' => 'Custom' ],

			[ 'key' => 'field_br_laundry_label', 'label' => 'Section Label', 'name' => 'br_laundry_label', 'type' => 'text',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_laundry_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_laundry_title', 'label' => 'Title (HTML)',  'name' => 'br_laundry_title', 'type' => 'textarea', 'rows' => 2,
			  'conditional_logic' => [ [ [ 'field' => 'field_br_laundry_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_laundry_paras', 'label' => 'Paragraphs', 'name' => 'br_laundry_paras', 'type' => 'repeater',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_laundry_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			  'sub_fields' => [ [ 'key' => 'field_br_laundry_para', 'label' => 'Paragraph', 'name' => 'paragraph', 'type' => 'textarea', 'rows' => 3 ] ] ],
			[ 'key' => 'field_br_laundry_chips', 'label' => 'Feature Chips', 'name' => 'br_laundry_chips', 'type' => 'repeater',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_laundry_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			  'sub_fields' => [ [ 'key' => 'field_br_laundry_chip', 'label' => 'Chip Text', 'name' => 'chip_text', 'type' => 'text' ] ] ],
			[ 'key' => 'field_br_laundry_photo', 'label' => 'Photo', 'name' => 'br_laundry_photo', 'type' => 'image', 'return_format' => 'array',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_laundry_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],

			/* ── FULL HOME SUMMARY ── */
			[ 'key' => 'field_br_summary_tab', 'label' => 'Home Summary', 'name' => '', 'type' => 'tab' ],

			[ 'key' => 'field_br_summary_use_default', 'label' => 'Content Source', 'name' => 'br_summary_use_default', 'type' => 'true_false',
			  'default_value' => 1, 'ui' => 1, 'ui_on_text' => 'Default', 'ui_off_text' => 'Custom' ],

			[ 'key' => 'field_br_summary_title', 'label' => 'Title (HTML)', 'name' => 'br_summary_title', 'type' => 'textarea', 'rows' => 2,
			  'conditional_logic' => [ [ [ 'field' => 'field_br_summary_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_ground_sum_rooms', 'label' => 'Ground Floor Card Rooms', 'name' => 'br_ground_sum_rooms', 'type' => 'repeater',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_summary_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			  'sub_fields' => [
			    [ 'key' => 'field_br_gsr_icon', 'label' => 'Icon',      'name' => 'gsr_icon', 'type' => 'text' ],
			    [ 'key' => 'field_br_gsr_name', 'label' => 'Room Name', 'name' => 'gsr_name', 'type' => 'text' ],
			    [ 'key' => 'field_br_gsr_note', 'label' => 'Room Note', 'name' => 'gsr_note', 'type' => 'text' ],
			  ],
			],
			[ 'key' => 'field_br_upper_sum_rooms', 'label' => 'Upper Floor Card Rooms', 'name' => 'br_upper_sum_rooms', 'type' => 'repeater',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_summary_use_default', 'operator' => '==', 'value' => '0' ] ] ],
			  'sub_fields' => [
			    [ 'key' => 'field_br_usr_icon', 'label' => 'Icon',      'name' => 'usr_icon', 'type' => 'text' ],
			    [ 'key' => 'field_br_usr_name', 'label' => 'Room Name', 'name' => 'usr_name', 'type' => 'text' ],
			    [ 'key' => 'field_br_usr_note', 'label' => 'Room Note', 'name' => 'usr_note', 'type' => 'text' ],
			  ],
			],

			/* ── CTA ── */
			[ 'key' => 'field_br_cta_tab', 'label' => 'CTA', 'name' => '', 'type' => 'tab' ],

			[ 'key' => 'field_br_cta_use_default', 'label' => 'Content Source', 'name' => 'br_cta_use_default', 'type' => 'true_false',
			  'default_value' => 1, 'ui' => 1, 'ui_on_text' => 'Default', 'ui_off_text' => 'Custom' ],

			[ 'key' => 'field_br_cta_title',    'label' => 'Title',       'name' => 'br_cta_title',    'type' => 'text',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_cta_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_cta_body',     'label' => 'Body Text',   'name' => 'br_cta_body',     'type' => 'textarea', 'rows' => 2,
			  'conditional_logic' => [ [ [ 'field' => 'field_br_cta_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_cta_btn_text', 'label' => 'Button Text', 'name' => 'br_cta_btn_text', 'type' => 'text',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_cta_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],
			[ 'key' => 'field_br_cta_btn_url',  'label' => 'Button URL',  'name' => 'br_cta_btn_url',  'type' => 'url',
			  'conditional_logic' => [ [ [ 'field' => 'field_br_cta_use_default', 'operator' => '==', 'value' => '0' ] ] ] ],

		], // end fields
	] ); // end bedrooms group

} );
