<?php
/**
 * Template Name: Neighbourhood
 * Template Post Type: page
 *
 * Neighbourhood overview page with interactive canvas map, distance strip,
 * category cards, community quote, commute section, and CTA.
 * Default content extracted from strendal_neighborhood.html.
 */

defined( 'ABSPATH' ) || exit;

$post_id = get_the_ID();

if ( ! function_exists( 'strendal_field' ) ) {
	function strendal_field( string $name, int $post_id ) {
		return function_exists( 'get_field' ) ? get_field( $name, $post_id ) : null;
	}
}

/* ════════════════════════════════════════════════════════
   DEFAULT CONTENT
   ════════════════════════════════════════════════════════ */
$NB = [

	'hero' => [
		'eyebrow' => 'Cary, NC · Evans Farm',
		'title'   => 'Everything you need.<br><em>Closer than you think.</em>',
		'sub'     => 'Top-rated schools around the corner. Wegmans, Whole Foods, and H Mart minutes away. RDU under 15 minutes. RTP under 10 minutes. And the quiet of a cul-de-sac right outside your door.',
	],

	'dist' => [
		[ 'num' => '0.6 mi',  'label' => 'Hortons Creek Elementary' ],
		[ 'num' => '0.75 mi', 'label' => 'Panther Creek High School' ],
		[ 'num' => '~2 mi',   'label' => 'I-540 On-Ramp' ],
		[ 'num' => '<15 min', 'label' => 'RDU International Airport' ],
		[ 'num' => '<10 min', 'label' => 'Research Triangle Park' ],
	],

	'intro' => [
		'label' => 'The Location Advantage',
		'title' => 'Far enough to escape the traffic.<br><em>Close enough for everything else.</em>',
		'para1' => 'Evans Farm sits in the sweet spot of Cary — where the cul-de-sacs are quiet enough for children to ride bikes, yet the highway ramp is two miles away and three world-class grocery stores are within a ten-minute drive.',
		'para2' => 'This is the neighbourhood where RTP engineers, healthcare professionals, and families from across the world have chosen to put down roots. The schools are genuinely exceptional. The walking trails wind through. And the international grocery scene reflects the beautiful diversity of the community around you.',
		'stats' => [
			[ 'num' => '3',       'label' => 'Top-10 rated schools within 2 miles' ],
			[ 'num' => '4+',      'label' => 'Major grocery options within 10 min' ],
			[ 'num' => '⅓ acre', 'label' => 'Rare lot in a neighbourhood of smaller plots' ],
			[ 'num' => '14 yrs',  'label' => 'Community roots — known neighbours, safe streets' ],
		],
	],

	'map' => [
		'title' => 'Explore the neighbourhood',
		'sub'   => 'Click any tab to see what\'s nearby. Click a location in the list to highlight it on the map.',
	],

	'cats' => [
		'label' => 'Life in Evans Farm',
		'title' => 'Everything a family needs,<br><em>right where it should be.</em>',
		'cards' => [
			[
				'icon'  => '🎓',
				'title' => 'Outstanding Schools',
				'items' => [
					'Hortons Creek Elementary <span class="nb-star">★ 0.6 mi</span>',
					'Panther Creek High School <span class="nb-star">★ 0.75 mi</span>',
					'Alston Ridge Elementary &amp; Middle',
					'Mills Park Middle School',
					'All Wake County Public Schools',
				],
			],
			[
				'icon'  => '🛒',
				'title' => 'World-Class Grocery',
				'items' => [
					'Harris Teeter — closest, ~1.7 mi',
					'Whole Foods Market',
					'Wegmans — rated ⭐4.6',
					'Trader Joe\'s',
					'H Mart, Spices Hut, Bharath Bazar',
				],
			],
			[
				'icon'  => '🌳',
				'title' => 'Nature &amp; Trails',
				'items' => [
					'Nancy Branch Trail through Evans Farm',
					'McCrimmon Park — tennis &amp; pickleball',
					'Amberly Wellness Park — lake &amp; paths',
					'RTP Mountain Bike Trails ⭐4.7',
					'Jordan Lake — kayaking &amp; camping',
				],
			],
			[
				'icon'  => '🏥',
				'title' => 'Healthcare',
				'items' => [
					'UNC Health at Panther Creek',
					'Park Primary &amp; Urgent Care',
					'Tricity Family Medicine',
					'WakeMed Cary Hospital',
					'Multiple dentists &amp; specialists nearby',
				],
			],
			[
				'icon'  => '🏃',
				'title' => 'Fitness &amp; Wellness',
				'items' => [
					'UNC Wellness Center NW Cary ⭐4.4',
					'Life Time Fitness ⭐4.5',
					'Fenton — dining, cinema, ice skating',
					'Crossroads Plaza — Target, Lowe\'s',
					'Multiple yoga &amp; pilates studios',
				],
			],
			[
				'icon'  => '🚗',
				'title' => 'Effortless Commute',
				'items' => [
					'I-540 on-ramp ~2 miles away',
					'RDU Airport — Less than 15 minutes',
					'RTP (major tech campus) — Less than 10 minutes',
					'Downtown Raleigh — ~30 min',
					'Duke &amp; UNC — ~25 min each',
				],
			],
		],
	],

	'community' => [
		'quote' => '"Evans Farm isn\'t just a neighbourhood. It\'s a community. You\'re far enough from busy roads to escape the traffic — close enough to everything to make life effortless."',
		'cite'  => '14 years in the community · 4007 Strendal Dr · Cary',
		'facts' => [
			[
				'title' => 'Cul-de-sac Living',
				'body'  => 'The home backs onto a quiet cul-de-sac. Children ride bikes safely. Neighbours know each other by name.',
			],
			[
				'title' => 'Multicultural Community',
				'body'  => 'Cary\'s incredible diversity means extraordinary international grocery options, restaurants, and a welcoming, global community ethos.',
			],
			[
				'title' => 'Off the Flight Path',
				'body'  => 'Verified RDU flight path maps confirm this home sits outside the noise corridor. Quiet days. Quiet nights. Always.',
			],
		],
	],

	'commute' => [
		'label' => 'Getting Around',
		'title' => 'The Triangle at your doorstep.',
		'cards' => [
			[ 'icon' => '✈️', 'name' => 'RDU International Airport', 'time' => '&lt;15 min',  'detail' => 'Via I-540 North → I-40 West. One of the easiest airport commutes in the Triangle.' ],
			[ 'icon' => '💼', 'name' => 'Research Triangle Park',     'time' => '&lt;10 min',  'detail' => 'Home to Cisco, IBM, Biogen, and hundreds of tech and life-science employers.' ],
			[ 'icon' => '🏛️', 'name' => 'Downtown Raleigh',           'time' => '~25–35 min', 'detail' => 'State capital, dining, arts, sports venues. Via I-540 East → I-40 East.' ],
			[ 'icon' => '🎓', 'name' => 'Duke · UNC · NC State',      'time' => '22–30 min',  'detail' => 'All three major research universities accessible within a half-hour drive.' ],
		],
	],

	'cta' => [
		'title'    => 'Come and see the neighbourhood for yourself.',
		'body'     => 'Visit this home of 4007 Strendal Drive and discover why Cary — and this street in particular — is one of the Triangle\'s most sought-after places to call home.',
		'btn_text' => 'Visit This Home',
		'btn_url'  => '/contact',
	],

];

/* ════════════════════════════════════════════════════════
   FIELD RESOLUTION
   ════════════════════════════════════════════════════════ */

/* ── Hero ── */
$nb_hero_ud = strendal_field( 'nb_hero_use_default', $post_id );
if ( $nb_hero_ud || $nb_hero_ud === null ) {
	$hero_eyebrow = $NB['hero']['eyebrow'];
	$hero_title   = $NB['hero']['title'];
	$hero_sub     = $NB['hero']['sub'];
} else {
	$hero_eyebrow = strendal_field( 'nb_hero_eyebrow', $post_id ) ?: $NB['hero']['eyebrow'];
	$hero_title   = strendal_field( 'nb_hero_title',   $post_id ) ?: $NB['hero']['title'];
	$hero_sub     = strendal_field( 'nb_hero_sub',     $post_id ) ?: $NB['hero']['sub'];
}

/* ── Distance Strip ── */
$dist_pills = $NB['dist'];

/* ── Intro ── */
$nb_intro_ud = strendal_field( 'nb_intro_use_default', $post_id );
if ( $nb_intro_ud || $nb_intro_ud === null ) {
	$intro_label = $NB['intro']['label'];
	$intro_title = $NB['intro']['title'];
	$intro_para1 = $NB['intro']['para1'];
	$intro_para2 = $NB['intro']['para2'];
	$intro_stats = $NB['intro']['stats'];
} else {
	$intro_label = strendal_field( 'nb_intro_label', $post_id ) ?: $NB['intro']['label'];
	$intro_title = strendal_field( 'nb_intro_title', $post_id ) ?: $NB['intro']['title'];
	$intro_para1 = strendal_field( 'nb_intro_para1', $post_id ) ?: $NB['intro']['para1'];
	$intro_para2 = strendal_field( 'nb_intro_para2', $post_id ) ?: $NB['intro']['para2'];
	$intro_stats = $NB['intro']['stats'];
}

/* ── Map ── */
$nb_map_ud = strendal_field( 'nb_map_use_default', $post_id );
if ( $nb_map_ud || $nb_map_ud === null ) {
	$map_title = $NB['map']['title'];
	$map_sub   = $NB['map']['sub'];
} else {
	$map_title = strendal_field( 'nb_map_title', $post_id ) ?: $NB['map']['title'];
	$map_sub   = strendal_field( 'nb_map_sub',   $post_id ) ?: $NB['map']['sub'];
}

/* ── Categories ── */
$nb_cats_ud = strendal_field( 'nb_cats_use_default', $post_id );
if ( $nb_cats_ud || $nb_cats_ud === null ) {
	$cats_label = $NB['cats']['label'];
	$cats_title = $NB['cats']['title'];
	$cats_cards = $NB['cats']['cards'];
} else {
	$cats_label = strendal_field( 'nb_cats_label', $post_id ) ?: $NB['cats']['label'];
	$cats_title = strendal_field( 'nb_cats_title', $post_id ) ?: $NB['cats']['title'];
	$cats_cards = $NB['cats']['cards'];
}

/* ── Community ── */
$nb_community_ud = strendal_field( 'nb_community_use_default', $post_id );
if ( $nb_community_ud || $nb_community_ud === null ) {
	$community_quote = $NB['community']['quote'];
	$community_cite  = $NB['community']['cite'];
	$community_facts = $NB['community']['facts'];
} else {
	$community_quote = strendal_field( 'nb_community_quote', $post_id ) ?: $NB['community']['quote'];
	$community_cite  = strendal_field( 'nb_community_cite',  $post_id ) ?: $NB['community']['cite'];
	$community_facts = $NB['community']['facts'];
}

/* ── Commute ── */
$nb_commute_ud = strendal_field( 'nb_commute_use_default', $post_id );
if ( $nb_commute_ud || $nb_commute_ud === null ) {
	$commute_label = $NB['commute']['label'];
	$commute_title = $NB['commute']['title'];
	$commute_cards = $NB['commute']['cards'];
} else {
	$commute_label = strendal_field( 'nb_commute_label', $post_id ) ?: $NB['commute']['label'];
	$commute_title = strendal_field( 'nb_commute_title', $post_id ) ?: $NB['commute']['title'];
	$commute_cards = $NB['commute']['cards'];
}

/* ── CTA ── */
$nb_cta_ud = strendal_field( 'nb_cta_use_default', $post_id );
if ( $nb_cta_ud || $nb_cta_ud === null ) {
	$cta_title    = $NB['cta']['title'];
	$cta_body     = $NB['cta']['body'];
	$cta_btn_text = $NB['cta']['btn_text'];
	$cta_btn_url  = $NB['cta']['btn_url'];
} else {
	$cta_title    = strendal_field( 'nb_cta_title',    $post_id ) ?: $NB['cta']['title'];
	$cta_body     = strendal_field( 'nb_cta_body',     $post_id ) ?: $NB['cta']['body'];
	$cta_btn_text = strendal_field( 'nb_cta_btn_text', $post_id ) ?: $NB['cta']['btn_text'];
	$cta_btn_url  = strendal_field( 'nb_cta_btn_url',  $post_id ) ?: $NB['cta']['btn_url'];
}

get_header();
?>

<!-- ── HERO ── -->
<section class="nb-hero">
	<div class="nb-hero-bg"></div>
	<div class="nb-hero-grid"></div>
	<div class="nb-hero-rings">
		<div class="nb-ring"></div>
		<div class="nb-ring"></div>
		<div class="nb-ring"></div>
		<div class="nb-ring"></div>
		<div class="nb-ring-center"></div>
	</div>
	<div class="nb-hero-content reveal">
		<p class="nb-hero-eyebrow"><?php echo esc_html( $hero_eyebrow ); ?></p>
		<h1 class="nb-hero-title"><?php echo wp_kses_post( $hero_title ); ?></h1>
		<p class="nb-hero-sub"><?php echo esc_html( $hero_sub ); ?></p>
	</div>
</section>

<!-- ── DISTANCE STRIP ── -->
<div class="nb-distance-strip">
	<?php foreach ( $dist_pills as $pill ) : ?>
	<div class="nb-dist-pill">
		<div class="nb-dist-num"><?php echo esc_html( $pill['num'] ); ?></div>
		<div class="nb-dist-label"><?php echo esc_html( $pill['label'] ); ?></div>
	</div>
	<?php endforeach; ?>
</div>

<!-- ── INTRO ── -->
<section class="nb-intro reveal">
	<div class="nb-intro-left">
		<p class="nb-intro-label"><?php echo esc_html( $intro_label ); ?></p>
		<h2><?php echo wp_kses_post( $intro_title ); ?></h2>
		<p><?php echo esc_html( $intro_para1 ); ?></p>
		<p><?php echo esc_html( $intro_para2 ); ?></p>
	</div>
	<div class="nb-intro-right">
		<div class="nb-intro-stats">
			<?php foreach ( $intro_stats as $stat ) : ?>
			<div class="nb-intro-stat">
				<div class="nb-is-num"><?php echo esc_html( $stat['num'] ); ?></div>
				<div class="nb-is-label"><?php echo esc_html( $stat['label'] ); ?></div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ── MAP SECTION ── -->
<div class="nb-map-section">
	<div class="nb-map-section-inner">
		<div class="nb-map-header reveal">
			<div class="nb-map-header-left">
				<h2><?php echo esc_html( $map_title ); ?></h2>
				<p><?php echo esc_html( $map_sub ); ?></p>
			</div>
		</div>

		<div class="nb-tab-strip" id="nbTabStrip">
			<button class="nb-tab-btn active" data-tab="schools"><span class="nb-tab-icon">🎓</span> Schools</button>
			<button class="nb-tab-btn" data-tab="grocery"><span class="nb-tab-icon">🛒</span> Grocery</button>
			<button class="nb-tab-btn" data-tab="international"><span class="nb-tab-icon">🌏</span> International</button>
			<button class="nb-tab-btn" data-tab="fitness"><span class="nb-tab-icon">🏃</span> Fitness</button>
			<button class="nb-tab-btn" data-tab="healthcare"><span class="nb-tab-icon">🏥</span> Healthcare</button>
			<button class="nb-tab-btn" data-tab="parks"><span class="nb-tab-icon">🌳</span> Parks</button>
			<button class="nb-tab-btn" data-tab="commute"><span class="nb-tab-icon">🚗</span> Commute</button>
		</div>

		<div class="nb-map-body">
			<!-- Sidebar -->
			<div class="nb-map-sidebar" id="nbMapSidebar">

				<!-- SCHOOLS -->
				<div class="nb-tab-panel active" id="nbpanel-schools">
					<div class="nb-sidebar-intro">
						<div class="nb-sidebar-intro-label">Schools · Wake County Public Schools</div>
						<div class="nb-sidebar-intro-text">Two of the top-rated elementary and high schools in Wake County are less than a mile away.</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('schools',0)" id="nbsi-schools-0">
						<div class="nb-place-num nb-gold">★</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Hortons Creek Elementary</div>
							<div class="nb-place-detail">0.6 mi · ~1 min drive · 9:15AM–3:45PM</div>
						</div>
						<div class="nb-place-badge nb-gold-badge">0.6 mi</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('schools',1)" id="nbsi-schools-1">
						<div class="nb-place-num">2</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Alston Ridge Elementary</div>
							<div class="nb-place-detail">~1.5 mi · 9:15AM–3:45PM</div>
						</div>
						<div class="nb-place-badge">1.5 mi</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('schools',2)" id="nbsi-schools-2">
						<div class="nb-place-num">3</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Alston Ridge Middle</div>
							<div class="nb-place-detail">~1.3 mi · 7:45AM–3:30PM</div>
						</div>
						<div class="nb-place-badge">1.3 mi</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('schools',3)" id="nbsi-schools-3">
						<div class="nb-place-num">4</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Mills Park Middle</div>
							<div class="nb-place-detail">~1.8 mi · 7:45AM–3:00PM</div>
						</div>
						<div class="nb-place-badge">1.8 mi</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('schools',4)" id="nbsi-schools-4">
						<div class="nb-place-num nb-gold">★</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Panther Creek High School</div>
							<div class="nb-place-detail">~0.75 mi · 7:00AM–3:00PM</div>
						</div>
						<div class="nb-place-badge nb-gold-badge">0.75 mi</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('schools',5)" id="nbsi-schools-5">
						<div class="nb-place-num">6</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Green Hope High School</div>
							<div class="nb-place-detail">~2.9 mi · 7:25AM–2:18PM</div>
						</div>
						<div class="nb-place-badge">2.9 mi</div>
					</div>
				</div>

				<!-- GROCERY -->
				<div class="nb-tab-panel" id="nbpanel-grocery">
					<div class="nb-sidebar-intro">
						<div class="nb-sidebar-intro-label">Grocery · All within 10 minutes</div>
						<div class="nb-sidebar-intro-text">From quick daily runs to full weekly shops — every major option is nearby.</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('grocery',0)" id="nbsi-grocery-0">
						<div class="nb-place-num nb-gold">★</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Harris Teeter</div>
							<div class="nb-place-detail">Green Level Church Rd · ⭐4.3 · 6AM–11PM</div>
						</div>
						<div class="nb-place-badge nb-gold-badge">Closest</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('grocery',1)" id="nbsi-grocery-1">
						<div class="nb-place-num">2</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Whole Foods Market</div>
							<div class="nb-place-detail">Arco St, Cary · ⭐4.4 · 8AM–10PM</div>
						</div>
						<div class="nb-place-badge">~5 min</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('grocery',2)" id="nbsi-grocery-2">
						<div class="nb-place-num">3</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Wegmans</div>
							<div class="nb-place-detail">Davis Dr, Morrisville · ⭐4.6 · 6AM–12AM</div>
						</div>
						<div class="nb-place-badge">~8 min</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('grocery',3)" id="nbsi-grocery-3">
						<div class="nb-place-num">4</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Trader Joe's</div>
							<div class="nb-place-detail">Morrisville Pkwy · ⭐4.7 · 9AM–9PM</div>
						</div>
						<div class="nb-place-badge">~10 min</div>
					</div>
				</div>

				<!-- INTERNATIONAL -->
				<div class="nb-tab-panel" id="nbpanel-international">
					<div class="nb-sidebar-intro">
						<div class="nb-sidebar-intro-label">International &amp; Ethnic Grocery</div>
						<div class="nb-sidebar-intro-text">Cary's multicultural community is reflected in the extraordinary variety of international grocery options nearby.</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('international',0)" id="nbsi-international-0">
						<div class="nb-place-num nb-gold">★</div>
						<div class="nb-place-info">
							<div class="nb-place-name">H Mart Cary</div>
							<div class="nb-place-detail">High House Rd · ⭐4.6 (9,293 reviews) · 9AM–9PM</div>
						</div>
						<div class="nb-place-badge nb-gold-badge">Top-rated</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('international',1)" id="nbsi-international-1">
						<div class="nb-place-num">2</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Spices Hut Cary</div>
							<div class="nb-place-detail">Green Level Church Rd · Indian · 9AM–9PM</div>
						</div>
						<div class="nb-place-badge">Nearby</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('international',2)" id="nbsi-international-2">
						<div class="nb-place-num">3</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Bharath Bazar NC</div>
							<div class="nb-place-detail">Slash Pine Dr · Indian · ⭐4.3 · 10:30AM–9PM</div>
						</div>
						<div class="nb-place-badge">~2 mi</div>
					</div>
				</div>

				<!-- FITNESS -->
				<div class="nb-tab-panel" id="nbpanel-fitness">
					<div class="nb-sidebar-intro">
						<div class="nb-sidebar-intro-label">Fitness &amp; Wellness</div>
						<div class="nb-sidebar-intro-text">Two premium fitness centres within easy reach — one with a pool, spa, and rock climbing wall.</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('fitness',0)" id="nbsi-fitness-0">
						<div class="nb-place-num nb-gold">★</div>
						<div class="nb-place-info">
							<div class="nb-place-name">UNC Wellness Center NW Cary</div>
							<div class="nb-place-detail">Stonecroft Ln · ⭐4.4 · Mon–Fri 5AM–10PM</div>
						</div>
						<div class="nb-place-badge nb-gold-badge">5 min</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('fitness',1)" id="nbsi-fitness-1">
						<div class="nb-place-num">2</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Life Time Fitness</div>
							<div class="nb-place-detail">Healthy Way, Cary · ⭐4.5 · Mon–Fri 4AM–12AM</div>
						</div>
						<div class="nb-place-badge">2 min</div>
					</div>
				</div>

				<!-- HEALTHCARE -->
				<div class="nb-tab-panel" id="nbpanel-healthcare">
					<div class="nb-sidebar-intro">
						<div class="nb-sidebar-intro-label">Healthcare &amp; Urgent Care</div>
						<div class="nb-sidebar-intro-text">Multiple primary care and urgent care options within minutes, plus a major hospital accessible via I-540.</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('healthcare',0)" id="nbsi-healthcare-0">
						<div class="nb-place-num nb-gold">★</div>
						<div class="nb-place-info">
							<div class="nb-place-name">UNC Health at Panther Creek</div>
							<div class="nb-place-detail">McCrimmon Pkwy · ⭐3.8</div>
						</div>
						<div class="nb-place-badge nb-gold-badge">Closest</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('healthcare',1)" id="nbsi-healthcare-1">
						<div class="nb-place-num">2</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Park Primary &amp; Urgent Care</div>
							<div class="nb-place-detail">Carpenter Fire Station Rd · Mon–Sat</div>
						</div>
						<div class="nb-place-badge">~5 min</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('healthcare',2)" id="nbsi-healthcare-2">
						<div class="nb-place-num">3</div>
						<div class="nb-place-info">
							<div class="nb-place-name">WakeMed Cary Hospital</div>
							<div class="nb-place-detail">Kildaire Farm Rd · ⭐3.2 · Open 24 hrs</div>
						</div>
						<div class="nb-place-badge">~15 min</div>
					</div>
				</div>

				<!-- PARKS -->
				<div class="nb-tab-panel" id="nbpanel-parks">
					<div class="nb-sidebar-intro">
						<div class="nb-sidebar-intro-label">Parks &amp; Recreation</div>
						<div class="nb-sidebar-intro-text">The Nancy Branch trail winds through Evans Farm itself. Multiple parks, greenways, and outdoor spaces within easy reach.</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('parks',0)" id="nbsi-parks-0">
						<div class="nb-place-num nb-gold">★</div>
						<div class="nb-place-info">
							<div class="nb-place-name">McCrimmon Pkwy Neighborhood Park</div>
							<div class="nb-place-detail">Cary Glen Blvd · ⭐4.6 · Tennis &amp; Pickleball</div>
						</div>
						<div class="nb-place-badge nb-gold-badge">Nearby</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('parks',1)" id="nbsi-parks-1">
						<div class="nb-place-num">2</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Amberly Wellness Park</div>
							<div class="nb-place-detail">Residents Club Dr · ⭐4.4 · Lake &amp; greenway</div>
						</div>
						<div class="nb-place-badge">~2 mi</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('parks',2)" id="nbsi-parks-2">
						<div class="nb-place-num">3</div>
						<div class="nb-place-info">
							<div class="nb-place-name">RTP Mountain Bike Trails</div>
							<div class="nb-place-detail">Louis Stephens Dr · ⭐4.7 · Shaded 3–4mi loops</div>
						</div>
						<div class="nb-place-badge">~10 min</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('parks',3)" id="nbsi-parks-3">
						<div class="nb-place-num">4</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Jordan Lake State Rec. Area</div>
							<div class="nb-place-detail">Apex · ⭐4.7 · Kayaking, swimming, camping</div>
						</div>
						<div class="nb-place-badge">~20 min</div>
					</div>
				</div>

				<!-- COMMUTE (MAP TAB) -->
				<div class="nb-tab-panel" id="nbpanel-commute">
					<div class="nb-sidebar-intro">
						<div class="nb-sidebar-intro-label">Commute &amp; Highway Access</div>
						<div class="nb-sidebar-intro-text">The I-540 Triangle Expressway on-ramp is ~2 miles away — connecting you directly to RTP, RDU, and beyond.</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('commute',0)" id="nbsi-commute-0">
						<div class="nb-place-num nb-gold">✈</div>
						<div class="nb-place-info">
							<div class="nb-place-name">RDU International Airport</div>
							<div class="nb-place-detail">Morrisville · ⭐4.4 · &lt;15 min via I-540</div>
						</div>
						<div class="nb-place-badge nb-gold-badge">&lt;15 min</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('commute',1)" id="nbsi-commute-1">
						<div class="nb-place-num">2</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Research Triangle Park</div>
							<div class="nb-place-detail">Durham · Major tech employers · &lt;10 min</div>
						</div>
						<div class="nb-place-badge">&lt;10 min</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('commute',2)" id="nbsi-commute-2">
						<div class="nb-place-num">3</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Downtown Raleigh</div>
							<div class="nb-place-detail">State capital · ~25–35 min via I-540/I-40</div>
						</div>
						<div class="nb-place-badge">~30 min</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('commute',3)" id="nbsi-commute-3">
						<div class="nb-place-num">4</div>
						<div class="nb-place-info">
							<div class="nb-place-name">Duke University</div>
							<div class="nb-place-detail">Durham · ~22–28 min</div>
						</div>
						<div class="nb-place-badge">~25 min</div>
					</div>
					<div class="nb-place-item" onclick="nbFocusMarker('commute',4)" id="nbsi-commute-4">
						<div class="nb-place-num">5</div>
						<div class="nb-place-info">
							<div class="nb-place-name">UNC Chapel Hill</div>
							<div class="nb-place-detail">Chapel Hill · ~22–28 min</div>
						</div>
						<div class="nb-place-badge">~25 min</div>
					</div>
				</div>

			</div><!-- /nb-map-sidebar -->

			<div class="nb-map-canvas-wrap">
				<canvas id="nbMapCanvas" width="900" height="560"></canvas>
			</div>
		</div><!-- /nb-map-body -->
	</div><!-- /nb-map-section-inner -->
</div><!-- /nb-map-section -->

<!-- ── CATEGORIES ── -->
<section class="nb-categories-section">
	<div class="nb-section-header reveal">
		<div class="nb-section-label"><?php echo esc_html( $cats_label ); ?></div>
		<h2><?php echo wp_kses_post( $cats_title ); ?></h2>
	</div>
	<div class="nb-cat-grid">
		<?php foreach ( $cats_cards as $card ) : ?>
		<div class="nb-cat-card reveal">
			<div class="nb-cat-icon"><?php echo esc_html( $card['icon'] ); ?></div>
			<div class="nb-cat-title"><?php echo wp_kses_post( $card['title'] ); ?></div>
			<ul class="nb-cat-items">
				<?php foreach ( $card['items'] as $item ) : ?>
				<li><?php echo wp_kses( $item, [ 'span' => [ 'class' => [] ] ] ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php endforeach; ?>
	</div>
</section>

<!-- ── COMMUNITY QUOTE ── -->
<section class="nb-community-section">
	<div class="nb-community-inner reveal">
		<div class="nb-community-quote-block">
			<blockquote><?php echo esc_html( $community_quote ); ?></blockquote>
			<cite><?php echo esc_html( $community_cite ); ?></cite>
		</div>
		<div class="nb-community-facts">
			<?php foreach ( $community_facts as $fact ) : ?>
			<div class="nb-cf-item">
				<div class="nb-cf-item-title"><?php echo esc_html( $fact['title'] ); ?></div>
				<div class="nb-cf-item-body"><?php echo esc_html( $fact['body'] ); ?></div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ── COMMUTE SECTION ── -->
<section class="nb-commute-section">
	<div class="nb-commute-inner">
		<div class="nb-commute-header reveal">
			<div class="nb-section-label"><?php echo esc_html( $commute_label ); ?></div>
			<h2><?php echo esc_html( $commute_title ); ?></h2>
		</div>
		<div class="nb-commute-grid">
			<?php foreach ( $commute_cards as $card ) : ?>
			<div class="nb-commute-card reveal">
				<div class="nb-commute-icon"><?php echo esc_html( $card['icon'] ); ?></div>
				<div>
					<div class="nb-commute-name"><?php echo esc_html( $card['name'] ); ?></div>
					<div class="nb-commute-time"><?php echo wp_kses_post( $card['time'] ); ?></div>
					<div class="nb-commute-detail"><?php echo esc_html( $card['detail'] ); ?></div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ── CTA STRIP ── -->
<div class="nb-cta-strip" id="contact">
	<div class="nb-cta-strip-text">
		<h3><?php echo esc_html( $cta_title ); ?></h3>
		<p><?php echo esc_html( $cta_body ); ?></p>
	</div>
	<a href="<?php echo esc_url( $cta_btn_url ); ?>" class="btn-gold"><?php echo esc_html( $cta_btn_text ); ?></a>
</div>

<?php get_template_part( 'template-parts/editor-content' ); ?>

<?php get_footer(); ?>

<script>
(function () {
'use strict';

/* ── SCROLL REVEAL ── */
(function () {
	const els = document.querySelectorAll('.reveal');
	if (!els.length) return;
	const io = new IntersectionObserver(function (entries) {
		entries.forEach(function (e) {
			if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); }
		});
	}, { threshold: 0.12 });
	els.forEach(function (el) { io.observe(el); });
})();

/* ── PALETTE ── */
var C = {
	bg:         '#f0f5ee',
	bgLight:    '#f7faf5',
	road:       '#ffffff',
	roadMajor:  '#e8efe4',
	roadBorder: '#ccdfc0',
	water:      '#d4e8f0',
	park:       '#daefd4',
	block:      '#e8f0e4',
	green:      '#6a9e52',
	greenDeep:  '#4a7a38',
	greenText:  '#1e3d14',
	gold:       '#c8952a',
	goldLight:  '#e8b84a',
	textMid:    '#3a4a36',
	textMuted:  '#6a7e64',
	white:      '#ffffff',
	shadow:     'rgba(30,61,20,0.18)',
};

var HOME_LAT = 35.8385209;
var HOME_LNG = -78.8967974;

var TAB_DATA = {
	schools: {
		bbox: { minLat: 35.795, maxLat: 35.875, minLng: -78.920, maxLng: -78.860 },
		places: [
			{ lat: 35.841955, lng: -78.906558, label: '★', name: 'Hortons Creek Elem.', gold: true },
			{ lat: 35.859368, lng: -78.899211, label: '2',  name: 'Alston Ridge Elem.' },
			{ lat: 35.855651, lng: -78.904922, label: '3',  name: 'Alston Ridge Middle' },
			{ lat: 35.812640, lng: -78.896112, label: '4',  name: 'Mills Park Middle' },
			{ lat: 35.829358, lng: -78.889379, label: '★',  name: 'Panther Creek High', gold: true },
			{ lat: 35.804936, lng: -78.867202, label: '6',  name: 'Green Hope High' },
		]
	},
	grocery: {
		bbox: { minLat: 35.800, maxLat: 35.850, minLng: -78.915, maxLng: -78.805 },
		places: [
			{ lat: 35.821200, lng: -78.900728, label: '★', name: 'Harris Teeter', gold: true },
			{ lat: 35.833649, lng: -78.882670, label: '2',  name: 'Whole Foods' },
			{ lat: 35.828439, lng: -78.851002, label: '3',  name: 'Wegmans' },
			{ lat: 35.809440, lng: -78.817490, label: '4',  name: "Trader Joe's" },
		]
	},
	international: {
		bbox: { minLat: 35.775, maxLat: 35.850, minLng: -78.925, maxLng: -78.830 },
		places: [
			{ lat: 35.789140, lng: -78.848782, label: '★', name: 'H Mart Cary', gold: true },
			{ lat: 35.823124, lng: -78.901594, label: '2',  name: 'Spices Hut' },
			{ lat: 35.830773, lng: -78.909017, label: '3',  name: 'Bharath Bazar' },
		]
	},
	fitness: {
		bbox: { minLat: 35.825, maxLat: 35.858, minLng: -78.915, maxLng: -78.870 },
		places: [
			{ lat: 35.841579, lng: -78.903069, label: '★', name: 'UNC Wellness Center', gold: true },
			{ lat: 35.836612, lng: -78.886643, label: '2',  name: 'Life Time Fitness' },
		]
	},
	healthcare: {
		bbox: { minLat: 35.725, maxLat: 35.855, minLng: -78.920, maxLng: -78.760 },
		places: [
			{ lat: 35.828885, lng: -78.878091, label: '★', name: 'UNC Health', gold: true },
			{ lat: 35.832000, lng: -78.880000, label: '2',  name: 'Park Primary & Urgent' },
			{ lat: 35.740703, lng: -78.781627, label: '3',  name: 'WakeMed Cary' },
		]
	},
	parks: {
		bbox: { minLat: 35.690, maxLat: 35.910, minLng: -79.040, maxLng: -78.850 },
		places: [
			{ lat: 35.835000, lng: -78.889000, label: '★', name: 'McCrimmon Park', gold: true },
			{ lat: 35.838000, lng: -78.895000, label: '2',  name: 'Amberly Wellness' },
			{ lat: 35.897576, lng: -78.871371, label: '3',  name: 'RTP Bike Trails' },
			{ lat: 35.711000, lng: -79.017000, label: '4',  name: 'Jordan Lake' },
		]
	},
	commute: {
		bbox: { minLat: 35.690, maxLat: 36.030, minLng: -79.080, maxLng: -78.600 },
		places: [
			{ lat: 35.879768, lng: -78.785551, label: '✈', name: 'RDU Airport', gold: true },
			{ lat: 35.897576, lng: -78.871371, label: '2',  name: 'RTP' },
			{ lat: 35.779590, lng: -78.638179, label: '3',  name: 'Downtown Raleigh' },
			{ lat: 35.999449, lng: -78.938743, label: '4',  name: 'Duke University' },
			{ lat: 35.904722, lng: -79.046944, label: '5',  name: 'UNC Chapel Hill' },
		]
	}
};

var canvas = document.getElementById('nbMapCanvas');
if (!canvas) return;
var ctx = canvas.getContext('2d');
var currentTab = 'schools';

function resizeCanvas() {
	var wrap = canvas.parentElement;
	var w = wrap.clientWidth;
	var h = Math.min(560, Math.max(320, w * 0.58));
	canvas.width  = w * window.devicePixelRatio;
	canvas.height = h * window.devicePixelRatio;
	canvas.style.width  = w + 'px';
	canvas.style.height = h + 'px';
	ctx.scale(window.devicePixelRatio, window.devicePixelRatio);
	drawTab(currentTab);
}

function project(lat, lng, bbox, W, H, pad) {
	var p = pad || 52;
	var x = p + (lng - bbox.minLng) / (bbox.maxLng - bbox.minLng) * (W - 2 * p);
	var y = p + (1 - (lat - bbox.minLat) / (bbox.maxLat - bbox.minLat)) * (H - 2 * p);
	return { x: x, y: y };
}

function drawBackground(bbox, W, H) {
	ctx.fillStyle = C.bg;
	ctx.fillRect(0, 0, W, H);

	ctx.save();
	ctx.strokeStyle = C.roadBorder;
	ctx.lineWidth = 0.5;
	ctx.globalAlpha = 0.4;
	var gridLat = 0.005, gridLng = 0.006;
	var startLat = Math.ceil(bbox.minLat / gridLat) * gridLat;
	var startLng = Math.ceil(bbox.minLng / gridLng) * gridLng;
	for (var la = startLat; la < bbox.maxLat; la += gridLat) {
		var p1 = project(la, bbox.minLng, bbox, W, H);
		var p2 = project(la, bbox.maxLng, bbox, W, H);
		ctx.beginPath(); ctx.moveTo(p1.x, p1.y); ctx.lineTo(p2.x, p2.y); ctx.stroke();
	}
	for (var lo = startLng; lo < bbox.maxLng; lo += gridLng) {
		var pa = project(bbox.minLat, lo, bbox, W, H);
		var pb = project(bbox.maxLat, lo, bbox, W, H);
		ctx.beginPath(); ctx.moveTo(pa.x, pa.y); ctx.lineTo(pb.x, pb.y); ctx.stroke();
	}
	ctx.restore();

	var latSpan = bbox.maxLat - bbox.minLat;
	drawRoads(bbox, W, H, latSpan);

	var grad = ctx.createRadialGradient(W/2, H/2, H*0.3, W/2, H/2, H*0.85);
	grad.addColorStop(0, 'rgba(0,0,0,0)');
	grad.addColorStop(1, 'rgba(30,61,20,0.06)');
	ctx.fillStyle = grad;
	ctx.fillRect(0, 0, W, H);
}

function drawRoads(bbox, W, H, span) {
	var roads = [
		[35.838, -78.925, 35.838, -78.600, true],
		[35.829, -78.920, 35.829, -78.750, false],
		[35.820, -78.925, 35.820, -78.850, false],
		[35.812, -78.920, 35.812, -78.800, false],
		[35.840, -78.920, 35.780, -78.920, false],
		[35.850, -78.900, 35.790, -78.900, false],
		[35.840, -78.878, 35.790, -78.878, false],
		[35.838, -78.920, 35.800, -78.860, false],
	];
	roads.forEach(function (r) {
		var lat1 = r[0], lng1 = r[1], lat2 = r[2], lng2 = r[3], major = r[4];
		if (lat1 < bbox.minLat - 0.01 && lat2 < bbox.minLat - 0.01) return;
		if (lng1 > bbox.maxLng + 0.01 && lng2 > bbox.maxLng + 0.01) return;
		var p1 = project(lat1, lng1, bbox, W, H);
		var p2 = project(lat2, lng2, bbox, W, H);
		ctx.save();
		if (major) {
			ctx.strokeStyle = C.roadBorder;
			ctx.lineWidth = span < 0.08 ? 4 : 2.5;
		} else {
			ctx.strokeStyle = 'rgba(204,223,192,0.7)';
			ctx.lineWidth = span < 0.08 ? 2 : 1.5;
		}
		ctx.lineCap = 'round';
		ctx.beginPath(); ctx.moveTo(p1.x, p1.y); ctx.lineTo(p2.x, p2.y); ctx.stroke();
		ctx.restore();
	});
}

function drawPin(x, y, label, gold) {
	var r = 16, tail = 8;
	var bg = gold ? C.gold : C.green;
	var border = gold ? C.goldLight : C.greenDeep;

	ctx.save();
	ctx.shadowColor = C.shadow;
	ctx.shadowBlur  = 10;
	ctx.shadowOffsetY = 3;
	ctx.beginPath();
	ctx.arc(x, y - r - tail, r, 0, Math.PI * 2);
	ctx.fillStyle = bg;
	ctx.fill();
	ctx.beginPath();
	ctx.moveTo(x - r * 0.45, y - r - tail + r * 0.7);
	ctx.lineTo(x + r * 0.45, y - r - tail + r * 0.7);
	ctx.lineTo(x, y);
	ctx.fillStyle = bg;
	ctx.fill();
	ctx.restore();

	ctx.beginPath();
	ctx.arc(x, y - r - tail, r, 0, Math.PI * 2);
	ctx.strokeStyle = border;
	ctx.lineWidth = 2;
	ctx.stroke();

	ctx.fillStyle = C.white;
	ctx.font = 'bold 11px Jost, sans-serif';
	ctx.textAlign = 'center';
	ctx.textBaseline = 'middle';
	ctx.fillText(label, x, y - r - tail);
}

function drawHomePin(x, y) {
	var r = 18, tail = 10;
	ctx.save();
	ctx.shadowColor = 'rgba(200,149,42,0.4)';
	ctx.shadowBlur  = 16;
	ctx.shadowOffsetY = 4;
	ctx.beginPath();
	ctx.arc(x, y - r - tail, r, 0, Math.PI * 2);
	ctx.fillStyle = C.gold;
	ctx.fill();
	ctx.beginPath();
	ctx.moveTo(x - r * 0.5, y - r - tail + r * 0.65);
	ctx.lineTo(x + r * 0.5, y - r - tail + r * 0.65);
	ctx.lineTo(x, y);
	ctx.fillStyle = C.gold;
	ctx.fill();
	ctx.restore();
	ctx.beginPath();
	ctx.arc(x, y - r - tail, r, 0, Math.PI * 2);
	ctx.strokeStyle = C.goldLight;
	ctx.lineWidth = 2.5;
	ctx.stroke();
	ctx.beginPath();
	ctx.arc(x, y - r - tail, r * 0.45, 0, Math.PI * 2);
	ctx.fillStyle = C.white;
	ctx.fill();
}

function drawLabel(x, y, text, gold) {
	var pad = 7, h = 20;
	ctx.font = '500 11px Jost, sans-serif';
	var tw = ctx.measureText(text).width;
	var bx = x - tw/2 - pad;
	var by = y + 6;
	var bw = tw + pad * 2;

	ctx.save();
	ctx.shadowColor = C.shadow;
	ctx.shadowBlur = 6;
	ctx.shadowOffsetY = 2;
	ctx.fillStyle = gold ? C.gold : C.greenDeep;
	roundRect(ctx, bx, by, bw, h, 4);
	ctx.fill();
	ctx.restore();

	ctx.fillStyle = C.white;
	ctx.font = '500 11px Jost, sans-serif';
	ctx.textAlign = 'center';
	ctx.textBaseline = 'middle';
	ctx.fillText(text, x, by + h/2);
}

function roundRect(c, x, y, w, h, r) {
	c.beginPath();
	c.moveTo(x + r, y);
	c.lineTo(x + w - r, y);
	c.quadraticCurveTo(x + w, y, x + w, y + r);
	c.lineTo(x + w, y + h - r);
	c.quadraticCurveTo(x + w, y + h, x + w - r, y + h);
	c.lineTo(x + r, y + h);
	c.quadraticCurveTo(x, y + h, x, y + h - r);
	c.lineTo(x, y + r);
	c.quadraticCurveTo(x, y, x + r, y);
	c.closePath();
}

function drawDistanceLine(x1, y1, x2, y2, gold) {
	ctx.save();
	ctx.setLineDash([4, 4]);
	ctx.strokeStyle = gold ? 'rgba(200,149,42,0.5)' : 'rgba(106,158,82,0.4)';
	ctx.lineWidth = 1.5;
	ctx.beginPath();
	ctx.moveTo(x1, y1);
	ctx.lineTo(x2, y2);
	ctx.stroke();
	ctx.restore();
}

function drawTab(tabName) {
	var data = TAB_DATA[tabName];
	if (!data) return;
	var W = canvas.width  / window.devicePixelRatio;
	var H = canvas.height / window.devicePixelRatio;
	var bbox = data.bbox;

	ctx.clearRect(0, 0, W, H);
	drawBackground(bbox, W, H);

	var home = project(HOME_LAT, HOME_LNG, bbox, W, H);

	data.places.forEach(function (p) {
		var pt = project(p.lat, p.lng, bbox, W, H);
		drawDistanceLine(home.x, home.y, pt.x, pt.y, p.gold);
	});

	data.places.slice().reverse().forEach(function (p) {
		var pt = project(p.lat, p.lng, bbox, W, H);
		drawPin(pt.x, pt.y, p.label, p.gold);
		drawLabel(pt.x, pt.y + 28, p.name, p.gold);
	});

	drawHomePin(home.x, home.y);

	var homeLabelY = home.y + 10;
	ctx.font = '600 11px Jost, sans-serif';
	var hw = ctx.measureText('4007 Strendal Dr').width;
	ctx.save();
	ctx.shadowColor = 'rgba(0,0,0,0.3)';
	ctx.shadowBlur = 6;
	ctx.fillStyle = C.gold;
	roundRect(ctx, home.x - hw/2 - 8, homeLabelY + 6, hw + 16, 20, 4);
	ctx.fill();
	ctx.restore();
	ctx.fillStyle = C.white;
	ctx.textAlign = 'center';
	ctx.textBaseline = 'middle';
	ctx.fillText('4007 Strendal Dr', home.x, homeLabelY + 16);

	ctx.font = '400 10px Jost, sans-serif';
	ctx.fillStyle = C.textMuted;
	ctx.textAlign = 'right';
	ctx.textBaseline = 'bottom';
	ctx.fillText('Approximate positions · Not to exact scale', W - 14, H - 10);
}

window.addEventListener('load', resizeCanvas);
window.addEventListener('resize', resizeCanvas);
resizeCanvas();

document.querySelectorAll('.nb-tab-btn').forEach(function (btn) {
	btn.addEventListener('click', function () {
		var tab = btn.dataset.tab;
		document.querySelectorAll('.nb-tab-btn').forEach(function (b) { b.classList.remove('active'); });
		btn.classList.add('active');
		document.querySelectorAll('.nb-tab-panel').forEach(function (p) { p.classList.remove('active'); });
		var panel = document.getElementById('nbpanel-' + tab);
		if (panel) panel.classList.add('active');
		currentTab = tab;
		drawTab(tab);
	});
});

window.nbFocusMarker = function (tabName, idx) {
	document.querySelectorAll('#nbpanel-' + tabName + ' .nb-place-item').forEach(function (el) {
		el.classList.remove('highlighted');
	});
	var item = document.getElementById('nbsi-' + tabName + '-' + idx);
	if (item) {
		item.classList.add('highlighted');
		item.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
	}
};

})();
</script>
