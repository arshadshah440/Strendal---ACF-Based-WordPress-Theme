<?php
defined( 'ABSPATH' ) || exit;

/* ── THEME SETUP ── */
add_action( 'after_setup_theme', function () {
	load_theme_textdomain( 'strendal', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
	add_theme_support( 'custom-logo', [
		'height'      => 60,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	] );

	register_nav_menus( [
		'primary' => __( 'Primary Navigation', 'strendal' ),
	] );
} );

/* ── ENQUEUE ASSETS ── */
add_action( 'wp_enqueue_scripts', function () {
	// Google Fonts
	wp_enqueue_style(
		'strendal-fonts',
		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Jost:wght@300;400;500;600&display=swap',
		[],
		null
	);

	// Main theme stylesheet
	wp_enqueue_style(
		'strendal-style',
		get_stylesheet_uri(),
		[ 'strendal-fonts' ],
		wp_get_theme()->get( 'Version' )
	);

	// Global nav script (scroll + hamburger menu)
	wp_enqueue_script(
		'strendal-nav',
		get_template_directory_uri() . '/assets/js/nav.js',
		[],
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Homepage-specific stylesheet
	if ( is_page_template( 'page-templates/homepage.php' ) ) {
		wp_enqueue_style(
			'strendal-homepage',
			get_template_directory_uri() . '/assets/css/homepage.css',
			[ 'strendal-style' ],
			wp_get_theme()->get( 'Version' )
		);
	}

	// Light & Orientation page stylesheet
	if ( is_page_template( 'page-templates/light-orientation.php' ) ) {
		wp_enqueue_style(
			'strendal-light-orientation',
			get_template_directory_uri() . '/assets/css/light-orientation.css',
			[ 'strendal-style' ],
			wp_get_theme()->get( 'Version' )
		);
	}

	// Bedrooms page stylesheet
	if ( is_page_template( 'page-templates/bedrooms.php' ) ) {
		wp_enqueue_style(
			'strendal-bedrooms',
			get_template_directory_uri() . '/assets/css/bedrooms.css',
			[ 'strendal-style' ],
			wp_get_theme()->get( 'Version' )
		);
	}

	// The Story page stylesheet
	if ( is_page_template( 'page-templates/story.php' ) ) {
		wp_enqueue_style(
			'strendal-story',
			get_template_directory_uri() . '/assets/css/story.css',
			[ 'strendal-style' ],
			wp_get_theme()->get( 'Version' )
		);
	}

	// Ground Floor Bedroom page stylesheet
	if ( is_page_template( 'page-templates/ground-bedroom.php' ) ) {
		wp_enqueue_style(
			'strendal-ground-bedroom',
			get_template_directory_uri() . '/assets/css/ground-bedroom.css',
			[ 'strendal-style' ],
			wp_get_theme()->get( 'Version' )
		);
	}

	// The Garden page stylesheet
	if ( is_page_template( 'page-templates/garden.php' ) ) {
		wp_enqueue_style(
			'strendal-garden',
			get_template_directory_uri() . '/assets/css/garden.css',
			[ 'strendal-style' ],
			wp_get_theme()->get( 'Version' )
		);
	}

	// The Living Heart page stylesheet
	if ( is_page_template( 'page-templates/living-heart.php' ) ) {
		wp_enqueue_style(
			'strendal-living-heart',
			get_template_directory_uri() . '/assets/css/living-heart.css',
			[ 'strendal-style' ],
			wp_get_theme()->get( 'Version' )
		);
	}

	// Inside the Home page stylesheet
	if ( is_page_template( 'page-templates/inside-home.php' ) ) {
		wp_enqueue_style(
			'strendal-inside-home',
			get_template_directory_uri() . '/assets/css/inside-home.css',
			[ 'strendal-style' ],
			wp_get_theme()->get( 'Version' )
		);
	}

	// The Investment page stylesheet
	if ( is_page_template( 'page-templates/investment.php' ) ) {
		wp_enqueue_style(
			'strendal-investment',
			get_template_directory_uri() . '/assets/css/investment.css',
			[ 'strendal-style' ],
			wp_get_theme()->get( 'Version' )
		);
	}

	// The Kitchen page stylesheet
	if ( is_page_template( 'page-templates/kitchen.php' ) ) {
		wp_enqueue_style(
			'strendal-kitchen',
			get_template_directory_uri() . '/assets/css/kitchen.css',
			[ 'strendal-style' ],
			wp_get_theme()->get( 'Version' )
		);
	}

	// The Screened Porch & Herb Garden page stylesheet
	if ( is_page_template( 'page-templates/porch-herb.php' ) ) {
		wp_enqueue_style(
			'strendal-porch-herb',
			get_template_directory_uri() . '/assets/css/porch-herb.css',
			[ 'strendal-style' ],
			wp_get_theme()->get( 'Version' )
		);
	}

	// The Living Room page stylesheet
	if ( is_page_template( 'page-templates/living-room.php' ) ) {
		wp_enqueue_style(
			'strendal-living-room',
			get_template_directory_uri() . '/assets/css/living-room.css',
			[ 'strendal-style' ],
			wp_get_theme()->get( 'Version' )
		);
	}

	// The Open Loft page stylesheet
	if ( is_page_template( 'page-templates/loft.php' ) ) {
		wp_enqueue_style(
			'strendal-loft',
			get_template_directory_uri() . '/assets/css/loft.css',
			[ 'strendal-style' ],
			wp_get_theme()->get( 'Version' )
		);
	}

	// The Master Suite page stylesheet
	if ( is_page_template( 'page-templates/master-suite.php' ) ) {
		wp_enqueue_style(
			'strendal-master-suite',
			get_template_directory_uri() . '/assets/css/master-suite.css',
			[ 'strendal-style' ],
			wp_get_theme()->get( 'Version' )
		);
	}

	// The Gallery page stylesheet
	if ( is_page_template( 'page-templates/gallery.php' ) ) {
		wp_enqueue_style(
			'strendal-gallery',
			get_template_directory_uri() . '/assets/css/gallery.css',
			[ 'strendal-style' ],
			wp_get_theme()->get( 'Version' )
		);
	}

	// The Visit This Home (Contact) page stylesheet
	if ( is_page_template( 'page-templates/contact.php' ) ) {
		wp_enqueue_style(
			'strendal-contact',
			get_template_directory_uri() . '/assets/css/contact.css',
			[ 'strendal-style' ],
			wp_get_theme()->get( 'Version' )
		);
	}

	// The Neighbourhood page stylesheet
	if ( is_page_template( 'page-templates/neighborhood.php' ) ) {
		wp_enqueue_style(
			'strendal-neighborhood',
			get_template_directory_uri() . '/assets/css/neighborhood.css',
			[ 'strendal-style' ],
			wp_get_theme()->get( 'Version' )
		);
	}
} );

/* ── INCLUDES ── */
require_once get_template_directory() . '/inc/theme-options.php';
require_once get_template_directory() . '/inc/scf-fields.php';

/* ── NAV SCROLL JS (inline, lightweight) ── */
add_action( 'wp_footer', function () {
	?>
	<script>
	(function () {
		var nav = document.getElementById('site-nav');
		if (!nav || nav.classList.contains('always-light')) return;
		function onScroll() {
			nav.classList.toggle('scrolled', window.scrollY > 40);
		}
		window.addEventListener('scroll', onScroll, { passive: true });
		onScroll();
	})();
	</script>
	<?php
} );
