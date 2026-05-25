<?php
/**
 * Template Name: Bedrooms
 * Template Post Type: page
 *
 * Full-page "Bedrooms" layout.
 * Each section has a "Content Source" toggle (Default / Custom).
 * Default content extracted from bedrooms.html.
 */

defined( 'ABSPATH' ) || exit;

$post_id   = get_the_ID();
$theme_uri = get_template_directory_uri();
$img_base  = $theme_uri . '/assets/images/bedrooms';

if ( ! function_exists( 'strendal_field' ) ) {
	function strendal_field( string $name, int $post_id ) {
		return function_exists( 'get_field' ) ? get_field( $name, $post_id ) : null;
	}
}

/* ════════════════════════════════════════════════════════
   DEFAULT CONTENT
   ════════════════════════════════════════════════════════ */
$BR = [

	'hero' => [
		'eyebrow'  => 'The Bedrooms · Full House',
		'title'    => 'Four bedrooms.<br>Two floors.<br><em>Every person, their own space.</em>',
		'subtitle' => 'One full bedroom on the ground floor. Three bedrooms upstairs, including the master. A Jack &amp; Jill bathroom connecting the two secondary rooms. And the laundry — right where it belongs, on the upper floor.',
	],

	'floor' => [
		'ground' => [
			[ 'text' => 'Bedroom 4 — full bedroom, garden view', 'highlight' => false ],
			[ 'text' => 'Full bathroom nearby',                   'highlight' => false ],
			[ 'text' => 'Flex room — dining / office',            'highlight' => false ],
		],
		'upper' => [
			[ 'text' => 'Open loft — entertainment hub',           'highlight' => true ],
			[ 'text' => 'Master suite — garden tub, shower, walk-in', 'highlight' => true ],
			[ 'text' => 'Bedroom 2 — Jack &amp; Jill bathroom',    'highlight' => true ],
			[ 'text' => 'Bedroom 3 — Jack &amp; Jill bathroom',    'highlight' => true ],
			[ 'text' => 'Laundry room — upper floor',              'highlight' => true ],
		],
	],

	'br2' => [
		'label'   => 'Bedroom 2 · Upper Floor',
		'title'   => 'A full room with<br><em>personality already built in.</em>',
		'paras'   => [
			'The second bedroom upstairs is a proper double room — full bed, desk alongside, window with natural light. Today it\'s a child\'s room, painted in a colour that made it hers. Tomorrow it\'s whatever you need it to be: guest room, teenager\'s retreat, study, or second home office.',
			'The room connects directly to the Jack &amp; Jill bathroom shared with Bedroom 3 — its own door, private access, no crossing the landing. The closet is on the opposite wall: double doors, full hanging depth.',
		],
		'chips'   => [ 'Full double bed', 'Desk fits alongside', 'Double closet', 'Jack &amp; Jill bathroom access', 'Carpet — quiet' ],
		'photo'   => [ 'url' => $img_base . '/br2-a.jpg', 'alt' => 'Bedroom 2 · Full bed · Desk · Natural light' ],
		'caption' => 'Bedroom 2 · Full bed · Desk · Natural light',
		'tp_a'    => [ 'url' => $img_base . '/br2-b.jpg',    'alt' => 'From entry · Full proportions' ],
		'tp_a_cap'=> 'From entry · Full proportions',
		'tp_b'    => [ 'url' => $img_base . '/br2-tp-b.jpg', 'alt' => 'Opposite angle · Closet &amp; bathroom doorway' ],
		'tp_b_cap'=> 'Opposite angle · Closet &amp; bathroom doorway',
	],

	'jj' => [
		'label'   => 'The Jack &amp; Jill Bathroom',
		'title'   => 'Shared. But never<br><em>without privacy.</em>',
		'paras'   => [
			'The Jack &amp; Jill bathroom connects Bedroom 2 and Bedroom 3 — each room has its own door. The vanity area is shared: double sinks, good mirror, bright lighting. But the toilet and shower are in a separate room behind a door, so two people can use the bathroom simultaneously without conflict.',
			'This is the arrangement that families with more than one child — or a family and guest — actually need. No queuing, no awkwardness, genuine independence for both rooms.',
		],
		'callout' => '<strong>Each bedroom has its own private door into the bathroom.</strong> The vanity is shared; the toilet and shower room has a separate door for privacy. Two people can use the space at the same time.',
		'photo'   => [ 'url' => $img_base . '/jj.jpg', 'alt' => 'Jack &amp; Jill · Double vanity · Private shower room beyond' ],
		'caption' => 'Jack &amp; Jill · Double vanity · Private shower room beyond',
	],

	'dark' => [
		'quote' => '"Three bedrooms upstairs — including the master suite — give <em>everyone their own retreat.</em>"',
		'attr'  => 'Upper floor · 4007 Strendal Dr · Cary, NC',
		'cards' => [
			[ 'icon' => '🛏️', 'title' => 'Master Suite',          'body' => 'Garden tub, glass shower, double vanity, walk-in closet with window. A private sanctuary at the end of the day.' ],
			[ 'icon' => '🔗', 'title' => 'Jack &amp; Jill Layout', 'body' => 'Bedrooms 2 and 3 share a bathroom with separate door access. Two children, or a child and a guest — no compromise.' ],
			[ 'icon' => '🏠', 'title' => 'Ground Floor Bedroom',   'body' => 'A fourth bedroom on the main level — no stairs. Parents, guests, or whoever needs to be close without being upstairs.' ],
		],
	],

	'br3' => [
		'label'   => 'Bedroom 3 · Upper Floor',
		'title'   => 'Clean. Calm.<br><em>Ready for whatever comes next.</em>',
		'paras'   => [
			'The third bedroom upstairs is the most neutral space in the house — light walls, carpet, double closet doors, and a room that hasn\'t been claimed by anyone yet. It photographs as a simple room because it is one: straightforward, properly proportioned, with good natural light from its window.',
			'It shares the Jack &amp; Jill bathroom with Bedroom 2 through its own private door. The double closet provides full hanging and shelf storage. A room that adapts easily — second child, college student home for summer, long-stay guest, hobby room.',
		],
		'chips'   => [ 'Double closet', 'Jack &amp; Jill bathroom access', 'Neutral — ready to personalise', 'Carpet', 'Natural light' ],
		'photo'   => [ 'url' => $img_base . '/br3.jpg', 'alt' => 'Bedroom 3 · Double closet · Jack &amp; Jill access' ],
		'caption' => 'Bedroom 3 · Double closet · Jack &amp; Jill access',
	],

	'laundry' => [
		'label'   => 'The Laundry Room · Upper Floor',
		'title'   => 'Laundry where the<br><em>clothes actually are.</em>',
		'paras'   => [
			'The laundry room is on the upper floor — which sounds like a small thing until you\'ve lived in a house where it isn\'t. No carrying baskets downstairs and back up. No separate trip to the basement. The washer and dryer are two doors away from the bedrooms.',
			'A full-size Whirlpool washer and dryer — recently updated as part of the ~$5k appliance refresh — sit alongside a hanging rail for air-drying, a storage shelf above, and a window that keeps the room from feeling closed in. A properly designed utility room, not a converted closet.',
		],
		'chips'   => [ 'Upper floor — near all bedrooms', 'Full-size Whirlpool washer &amp; dryer', 'Hanging rail for air-drying', 'Storage shelf above', 'Window — natural light &amp; ventilation', 'Recently updated appliances' ],
		'photo'   => [ 'url' => $img_base . '/laundry.jpg', 'alt' => 'Laundry · Upper floor · Full-size washer &amp; dryer' ],
		'caption' => 'Laundry · Upper floor · Full-size washer &amp; dryer',
	],

	'summary' => [
		'title'  => 'Every room.<br><em>Both floors.</em>',
		'ground' => [
			[ 'icon' => '🚪', 'name' => 'Entry Hall',                          'note' => 'Storm door with screen · hardwood · mirrored console' ],
			[ 'icon' => '📐', 'name' => 'Flex Room',                           'note' => 'Formal dining / home office / study / prayer room' ],
			[ 'icon' => '🍳', 'name' => 'Kitchen',                             'note' => 'Gas range · granite · stainless appliances · open plan' ],
			[ 'icon' => '🛋️', 'name' => 'Living Room · Dining Nook · Tea Corner', 'note' => 'Fireplace · open plan · surround sound wired' ],
			[ 'icon' => '🌿', 'name' => 'Screened Porch',                      'note' => 'Covered · timber frame · herb garden steps away' ],
			[ 'icon' => '🛏️', 'name' => 'Bedroom 4',                           'note' => 'Full bedroom · ground floor · no stairs · garden view' ],
		],
		'upper' => [
			[ 'icon' => '🎮', 'name' => 'Open Loft',          'note' => 'Entertainment hub · surround sound wired · triple windows' ],
			[ 'icon' => '👑', 'name' => 'Master Suite',        'note' => 'King bed · garden tub · glass shower · walk-in closet' ],
			[ 'icon' => '🛏️', 'name' => 'Bedroom 2',           'note' => 'Double bed · desk · double closet · Jack &amp; Jill bath' ],
			[ 'icon' => '🛏️', 'name' => 'Bedroom 3',           'note' => 'Double closet · Jack &amp; Jill bath · neutral · flexible' ],
			[ 'icon' => '🔗', 'name' => 'Jack &amp; Jill Bathroom', 'note' => 'Double vanity · private toilet &amp; shower room · shared access' ],
			[ 'icon' => '🧺', 'name' => 'Laundry Room',        'note' => 'Upper floor · full-size W/D · hanging rail · window' ],
		],
	],

	'cta' => [
		'title'    => 'Walk every room yourself.',
		'body'     => 'A floor plan tells you the rooms exist. A tour tells you how they feel. Schedule a private walkthrough of 4007 Strendal Drive and spend time on both floors.',
		'btn_text' => 'Visit This Home',
		'btn_url'  => '#contact',
	],

];

/* ════════════════════════════════════════════════════════
   FIELD RESOLUTION — HERO
   ════════════════════════════════════════════════════════ */
$hero_use_default = strendal_field( 'br_hero_use_default', $post_id );
if ( $hero_use_default || $hero_use_default === null ) {
	$hero_eyebrow  = $BR['hero']['eyebrow'];
	$hero_title    = $BR['hero']['title'];
	$hero_subtitle = $BR['hero']['subtitle'];
} else {
	$hero_eyebrow  = strendal_field( 'br_hero_eyebrow',  $post_id ) ?: $BR['hero']['eyebrow'];
	$hero_title    = strendal_field( 'br_hero_title',    $post_id ) ?: $BR['hero']['title'];
	$hero_subtitle = strendal_field( 'br_hero_subtitle', $post_id ) ?: $BR['hero']['subtitle'];
}

/* ── FLOOR STRIP ── */
$floor_use_default = strendal_field( 'br_floor_use_default', $post_id );
if ( $floor_use_default || $floor_use_default === null ) {
	$ground_rooms = $BR['floor']['ground'];
	$upper_rooms  = $BR['floor']['upper'];
} else {
	$raw_ground = strendal_field( 'br_ground_rooms', $post_id ) ?: [];
	$raw_upper  = strendal_field( 'br_upper_rooms',  $post_id ) ?: [];
	$ground_rooms = array_map( fn( $r ) => [ 'text' => $r['gr_text'], 'highlight' => (bool) $r['gr_highlight'] ], $raw_ground );
	$upper_rooms  = array_map( fn( $r ) => [ 'text' => $r['ur_text'], 'highlight' => (bool) $r['ur_highlight'] ], $raw_upper );
}

/* ── BEDROOM 2 ── */
$br2_use_default = strendal_field( 'br_br2_use_default', $post_id );
if ( $br2_use_default || $br2_use_default === null ) {
	$br2_label   = $BR['br2']['label'];
	$br2_title   = $BR['br2']['title'];
	$br2_paras   = $BR['br2']['paras'];
	$br2_chips   = $BR['br2']['chips'];
	$br2_photo   = $BR['br2']['photo'];
	$br2_caption = $BR['br2']['caption'];
	$br2_tp_a    = $BR['br2']['tp_a'];
	$br2_tp_a_cap= $BR['br2']['tp_a_cap'];
	$br2_tp_b    = $BR['br2']['tp_b'];
	$br2_tp_b_cap= $BR['br2']['tp_b_cap'];
} else {
	$br2_label   = strendal_field( 'br_br2_label', $post_id )  ?: $BR['br2']['label'];
	$br2_title   = strendal_field( 'br_br2_title', $post_id )  ?: $BR['br2']['title'];
	$raw_paras   = strendal_field( 'br_br2_paras', $post_id )  ?: [];
	$br2_paras   = $raw_paras ? array_column( $raw_paras, 'paragraph' ) : $BR['br2']['paras'];
	$raw_chips   = strendal_field( 'br_br2_chips', $post_id )  ?: [];
	$br2_chips   = $raw_chips ? array_column( $raw_chips, 'chip_text' ) : $BR['br2']['chips'];
	$raw_photo   = strendal_field( 'br_br2_photo', $post_id );
	$br2_photo   = $raw_photo ?: $BR['br2']['photo'];
	$br2_caption = $BR['br2']['caption'];
	$raw_tp_a    = strendal_field( 'br_br2_tp_a', $post_id );
	$br2_tp_a    = $raw_tp_a ?: $BR['br2']['tp_a'];
	$br2_tp_a_cap= strendal_field( 'br_br2_tp_a_cap', $post_id ) ?: $BR['br2']['tp_a_cap'];
	$raw_tp_b    = strendal_field( 'br_br2_tp_b', $post_id );
	$br2_tp_b    = $raw_tp_b ?: $BR['br2']['tp_b'];
	$br2_tp_b_cap= strendal_field( 'br_br2_tp_b_cap', $post_id ) ?: $BR['br2']['tp_b_cap'];
}

/* ── JACK & JILL ── */
$jj_use_default = strendal_field( 'br_jj_use_default', $post_id );
if ( $jj_use_default || $jj_use_default === null ) {
	$jj_label   = $BR['jj']['label'];
	$jj_title   = $BR['jj']['title'];
	$jj_paras   = $BR['jj']['paras'];
	$jj_callout = $BR['jj']['callout'];
	$jj_photo   = $BR['jj']['photo'];
	$jj_caption = $BR['jj']['caption'];
} else {
	$jj_label   = strendal_field( 'br_jj_label',   $post_id ) ?: $BR['jj']['label'];
	$jj_title   = strendal_field( 'br_jj_title',   $post_id ) ?: $BR['jj']['title'];
	$raw_paras  = strendal_field( 'br_jj_paras',   $post_id ) ?: [];
	$jj_paras   = $raw_paras ? array_column( $raw_paras, 'paragraph' ) : $BR['jj']['paras'];
	$jj_callout = strendal_field( 'br_jj_callout', $post_id ) ?: $BR['jj']['callout'];
	$raw_photo  = strendal_field( 'br_jj_photo',   $post_id );
	$jj_photo   = $raw_photo ?: $BR['jj']['photo'];
	$jj_caption = $BR['jj']['caption'];
}

/* ── DARK DIVIDER ── */
$dark_use_default = strendal_field( 'br_dark_use_default', $post_id );
if ( $dark_use_default || $dark_use_default === null ) {
	$dark_quote = $BR['dark']['quote'];
	$dark_attr  = $BR['dark']['attr'];
	$dark_cards = $BR['dark']['cards'];
} else {
	$dark_quote  = strendal_field( 'br_dark_quote',  $post_id ) ?: $BR['dark']['quote'];
	$dark_attr   = strendal_field( 'br_dark_attr',   $post_id ) ?: $BR['dark']['attr'];
	$raw_cards   = strendal_field( 'br_dark_cards',  $post_id ) ?: [];
	$dark_cards  = $raw_cards
		? array_map( fn( $c ) => [ 'icon' => $c['dc_icon'], 'title' => $c['dc_title'], 'body' => $c['dc_body'] ], $raw_cards )
		: $BR['dark']['cards'];
}

/* ── BEDROOM 3 ── */
$br3_use_default = strendal_field( 'br_br3_use_default', $post_id );
if ( $br3_use_default || $br3_use_default === null ) {
	$br3_label   = $BR['br3']['label'];
	$br3_title   = $BR['br3']['title'];
	$br3_paras   = $BR['br3']['paras'];
	$br3_chips   = $BR['br3']['chips'];
	$br3_photo   = $BR['br3']['photo'];
	$br3_caption = $BR['br3']['caption'];
} else {
	$br3_label   = strendal_field( 'br_br3_label', $post_id ) ?: $BR['br3']['label'];
	$br3_title   = strendal_field( 'br_br3_title', $post_id ) ?: $BR['br3']['title'];
	$raw_paras   = strendal_field( 'br_br3_paras', $post_id ) ?: [];
	$br3_paras   = $raw_paras ? array_column( $raw_paras, 'paragraph' ) : $BR['br3']['paras'];
	$raw_chips   = strendal_field( 'br_br3_chips', $post_id ) ?: [];
	$br3_chips   = $raw_chips ? array_column( $raw_chips, 'chip_text' ) : $BR['br3']['chips'];
	$raw_photo   = strendal_field( 'br_br3_photo', $post_id );
	$br3_photo   = $raw_photo ?: $BR['br3']['photo'];
	$br3_caption = $BR['br3']['caption'];
}

/* ── LAUNDRY ── */
$laundry_use_default = strendal_field( 'br_laundry_use_default', $post_id );
if ( $laundry_use_default || $laundry_use_default === null ) {
	$laundry_label   = $BR['laundry']['label'];
	$laundry_title   = $BR['laundry']['title'];
	$laundry_paras   = $BR['laundry']['paras'];
	$laundry_chips   = $BR['laundry']['chips'];
	$laundry_photo   = $BR['laundry']['photo'];
	$laundry_caption = $BR['laundry']['caption'];
} else {
	$laundry_label   = strendal_field( 'br_laundry_label', $post_id ) ?: $BR['laundry']['label'];
	$laundry_title   = strendal_field( 'br_laundry_title', $post_id ) ?: $BR['laundry']['title'];
	$raw_paras       = strendal_field( 'br_laundry_paras', $post_id ) ?: [];
	$laundry_paras   = $raw_paras ? array_column( $raw_paras, 'paragraph' ) : $BR['laundry']['paras'];
	$raw_chips       = strendal_field( 'br_laundry_chips', $post_id ) ?: [];
	$laundry_chips   = $raw_chips ? array_column( $raw_chips, 'chip_text' ) : $BR['laundry']['chips'];
	$raw_photo       = strendal_field( 'br_laundry_photo', $post_id );
	$laundry_photo   = $raw_photo ?: $BR['laundry']['photo'];
	$laundry_caption = $BR['laundry']['caption'];
}

/* ── SUMMARY ── */
$summary_use_default = strendal_field( 'br_summary_use_default', $post_id );
if ( $summary_use_default || $summary_use_default === null ) {
	$summary_title  = $BR['summary']['title'];
	$summary_ground = $BR['summary']['ground'];
	$summary_upper  = $BR['summary']['upper'];
} else {
	$summary_title = strendal_field( 'br_summary_title', $post_id ) ?: $BR['summary']['title'];
	$raw_ground    = strendal_field( 'br_ground_sum_rooms', $post_id ) ?: [];
	$summary_ground = $raw_ground
		? array_map( fn( $r ) => [ 'icon' => $r['gsr_icon'], 'name' => $r['gsr_name'], 'note' => $r['gsr_note'] ], $raw_ground )
		: $BR['summary']['ground'];
	$raw_upper      = strendal_field( 'br_upper_sum_rooms', $post_id ) ?: [];
	$summary_upper  = $raw_upper
		? array_map( fn( $r ) => [ 'icon' => $r['usr_icon'], 'name' => $r['usr_name'], 'note' => $r['usr_note'] ], $raw_upper )
		: $BR['summary']['upper'];
}

/* ── CTA ── */
$cta_use_default = strendal_field( 'br_cta_use_default', $post_id );
if ( $cta_use_default || $cta_use_default === null ) {
	$cta_title    = $BR['cta']['title'];
	$cta_body     = $BR['cta']['body'];
	$cta_btn_text = $BR['cta']['btn_text'];
	$cta_btn_url  = $BR['cta']['btn_url'];
} else {
	$cta_title    = strendal_field( 'br_cta_title',    $post_id ) ?: $BR['cta']['title'];
	$cta_body     = strendal_field( 'br_cta_body',     $post_id ) ?: $BR['cta']['body'];
	$cta_btn_text = strendal_field( 'br_cta_btn_text', $post_id ) ?: $BR['cta']['btn_text'];
	$cta_btn_url  = strendal_field( 'br_cta_btn_url',  $post_id ) ?: $BR['cta']['btn_url'];
}

/* ════════════════════════════════════════════════════════
   RENDER
   ════════════════════════════════════════════════════════ */
get_header();
?>

<!-- ── HERO ── -->
<section class="br-hero">
  <div class="br-hero-bg"></div>
  <div class="br-hero-grid"></div>
  <div class="br-hero-content">
    <p class="br-hero-eyebrow"><?php echo esc_html( $hero_eyebrow ); ?></p>
    <h1 class="br-hero-title"><?php echo wp_kses_post( $hero_title ); ?></h1>
    <p class="br-hero-sub"><?php echo wp_kses_post( $hero_subtitle ); ?></p>
  </div>
</section>

<!-- ── FLOOR OVERVIEW STRIP ── -->
<div class="br-floor-strip">
  <div class="br-floor-col">
    <div class="br-floor-label">Ground Floor</div>
    <div class="br-floor-rooms">
      <?php foreach ( $ground_rooms as $room ) : ?>
        <div class="br-floor-room<?php echo $room['highlight'] ? ' highlight' : ''; ?>">
          <span class="br-floor-room-dot"></span><?php echo wp_kses_post( $room['text'] ); ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="br-floor-col">
    <div class="br-floor-label">Upper Floor</div>
    <div class="br-floor-rooms">
      <?php foreach ( $upper_rooms as $room ) : ?>
        <div class="br-floor-room<?php echo $room['highlight'] ? ' highlight' : ''; ?>">
          <span class="br-floor-room-dot"></span><?php echo wp_kses_post( $room['text'] ); ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- ── BEDROOM 2 ── -->
<section class="br-two-col">
  <div class="br-reveal">
    <p class="br-section-label"><?php echo esc_html( $br2_label ); ?></p>
    <h2><?php echo wp_kses_post( $br2_title ); ?></h2>
    <?php foreach ( $br2_paras as $para ) : ?>
      <p><?php echo wp_kses_post( $para ); ?></p>
    <?php endforeach; ?>
    <div class="br-chips">
      <?php foreach ( $br2_chips as $chip ) : ?>
        <span class="br-chip"><?php echo wp_kses_post( $chip ); ?></span>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="br-photo-frame br-reveal br-reveal-delay-2">
    <img src="<?php echo esc_url( $br2_photo['url'] ); ?>" alt="<?php echo esc_attr( $br2_photo['alt'] ); ?>">
    <div class="br-photo-caption"><?php echo esc_html( $br2_caption ); ?></div>
  </div>
</section>

<!-- ── BEDROOM 2 TWO-PHOTO ROW ── -->
<div class="br-two-photo-row">
  <div class="br-tp-frame br-reveal">
    <img src="<?php echo esc_url( $br2_tp_a['url'] ); ?>" alt="<?php echo esc_attr( $br2_tp_a['alt'] ); ?>">
    <div class="br-tp-caption"><?php echo esc_html( $br2_tp_a_cap ); ?></div>
  </div>
  <div class="br-tp-frame br-reveal br-reveal-delay-2">
    <img src="<?php echo esc_url( $br2_tp_b['url'] ); ?>" alt="<?php echo esc_attr( $br2_tp_b['alt'] ); ?>">
    <div class="br-tp-caption"><?php echo esc_html( $br2_tp_b_cap ); ?></div>
  </div>
</div>

<!-- ── JACK & JILL ── -->
<section class="br-two-col br-two-col-white br-flip">
  <div class="br-reveal">
    <p class="br-section-label"><?php echo wp_kses_post( $jj_label ); ?></p>
    <h2><?php echo wp_kses_post( $jj_title ); ?></h2>
    <?php foreach ( $jj_paras as $para ) : ?>
      <p><?php echo wp_kses_post( $para ); ?></p>
    <?php endforeach; ?>
    <div class="br-jj-callout">
      <span class="br-jj-icon">🚪</span>
      <span class="br-jj-text"><?php echo wp_kses_post( $jj_callout ); ?></span>
    </div>
  </div>
  <div class="br-photo-frame br-reveal br-reveal-delay-2">
    <img src="<?php echo esc_url( $jj_photo['url'] ); ?>" alt="<?php echo esc_attr( $jj_photo['alt'] ); ?>">
    <div class="br-photo-caption"><?php echo esc_html( $jj_caption ); ?></div>
  </div>
</section>

<!-- ── DARK DIVIDER ── -->
<div class="br-dark-section">
  <div class="br-dark-inner">
    <div class="br-reveal">
      <p class="br-dark-quote"><?php echo wp_kses_post( $dark_quote ); ?></p>
      <p class="br-dark-attr"><?php echo esc_html( $dark_attr ); ?></p>
    </div>
    <div class="br-dark-cards br-reveal br-reveal-delay-2">
      <?php foreach ( $dark_cards as $card ) : ?>
        <div class="br-dark-card">
          <div class="br-dark-card-icon"><?php echo esc_html( $card['icon'] ); ?></div>
          <div>
            <div class="br-dark-card-title"><?php echo wp_kses_post( $card['title'] ); ?></div>
            <div class="br-dark-card-body"><?php echo wp_kses_post( $card['body'] ); ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- ── BEDROOM 3 ── -->
<section class="br-two-col">
  <div class="br-photo-frame br-reveal">
    <img src="<?php echo esc_url( $br3_photo['url'] ); ?>" alt="<?php echo esc_attr( $br3_photo['alt'] ); ?>">
    <div class="br-photo-caption"><?php echo esc_html( $br3_caption ); ?></div>
  </div>
  <div class="br-reveal br-reveal-delay-2">
    <p class="br-section-label"><?php echo esc_html( $br3_label ); ?></p>
    <h2><?php echo wp_kses_post( $br3_title ); ?></h2>
    <?php foreach ( $br3_paras as $para ) : ?>
      <p><?php echo wp_kses_post( $para ); ?></p>
    <?php endforeach; ?>
    <div class="br-chips">
      <?php foreach ( $br3_chips as $chip ) : ?>
        <span class="br-chip"><?php echo wp_kses_post( $chip ); ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── LAUNDRY ── -->
<section class="br-laundry-section">
  <div class="br-laundry-inner">
    <div class="br-reveal">
      <p class="br-section-label"><?php echo esc_html( $laundry_label ); ?></p>
      <h2><?php echo wp_kses_post( $laundry_title ); ?></h2>
      <?php foreach ( $laundry_paras as $para ) : ?>
        <p><?php echo wp_kses_post( $para ); ?></p>
      <?php endforeach; ?>
      <div class="br-chips">
        <?php foreach ( $laundry_chips as $chip ) : ?>
          <span class="br-chip"><?php echo wp_kses_post( $chip ); ?></span>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="br-photo-frame br-reveal br-reveal-delay-2">
      <img src="<?php echo esc_url( $laundry_photo['url'] ); ?>" alt="<?php echo esc_attr( $laundry_photo['alt'] ); ?>">
      <div class="br-photo-caption"><?php echo esc_html( $laundry_caption ); ?></div>
    </div>
  </div>
</section>

<!-- ── HOME SUMMARY ── -->
<section class="br-summary-section" id="contact">
  <div class="br-summary-inner">
    <div class="br-summary-header">
      <p class="br-section-label" style="justify-content:center;">Complete Room Summary</p>
      <h2><?php echo wp_kses_post( $summary_title ); ?></h2>
    </div>
    <div class="br-floor-cards">

      <!-- Ground Floor card -->
      <div class="br-floor-card br-reveal">
        <div class="br-fc-header">
          <span class="br-fc-header-icon">🏠</span>
          <div class="br-fc-header-title">
            Ground Floor
            <span>Entry · Flex · Kitchen · Living · Dining · Porch</span>
          </div>
        </div>
        <div class="br-fc-rooms">
          <?php foreach ( $summary_ground as $room ) : ?>
            <div class="br-fc-room">
              <div class="br-fc-room-icon"><?php echo esc_html( $room['icon'] ); ?></div>
              <div>
                <div class="br-fc-room-name"><?php echo wp_kses_post( $room['name'] ); ?></div>
                <div class="br-fc-room-note"><?php echo wp_kses_post( $room['note'] ); ?></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Upper Floor card -->
      <div class="br-floor-card br-reveal br-reveal-delay-2">
        <div class="br-fc-header">
          <span class="br-fc-header-icon">⬆️</span>
          <div class="br-fc-header-title">
            Upper Floor
            <span>Loft · Master · Bedrooms 2 &amp; 3 · Laundry</span>
          </div>
        </div>
        <div class="br-fc-rooms">
          <?php foreach ( $summary_upper as $room ) : ?>
            <div class="br-fc-room">
              <div class="br-fc-room-icon"><?php echo esc_html( $room['icon'] ); ?></div>
              <div>
                <div class="br-fc-room-name"><?php echo wp_kses_post( $room['name'] ); ?></div>
                <div class="br-fc-room-note"><?php echo wp_kses_post( $room['note'] ); ?></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div><!-- .br-floor-cards -->
  </div><!-- .br-summary-inner -->
</section>

<!-- ── CTA ── -->
<div class="br-cta-strip">
  <div class="br-cta-left">
    <h3><?php echo wp_kses_post( $cta_title ); ?></h3>
    <p><?php echo wp_kses_post( $cta_body ); ?></p>
  </div>
  <a href="<?php echo esc_url( $cta_btn_url ); ?>" class="br-btn-gold"><?php echo esc_html( $cta_btn_text ); ?></a>
</div>

<?php get_template_part( 'template-parts/editor-content' ); ?>

<?php get_footer(); ?>

<script>
(function () {
  var els = document.querySelectorAll('.br-reveal');
  if (!els.length || !('IntersectionObserver' in window)) {
    els.forEach(function (el) { el.classList.add('visible'); });
    return;
  }
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  els.forEach(function (el) { observer.observe(el); });
})();
</script>
