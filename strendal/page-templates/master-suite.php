<?php
/**
 * Template Name: The Master Suite
 * Template Post Type: page
 *
 * Full-page "The Master Suite" layout.
 * Each section has a "Content Source" toggle (Default / Custom).
 * Default content extracted from strendal_master_suite.html.
 */

defined( 'ABSPATH' ) || exit;

$post_id  = get_the_ID();
$img_base = get_template_directory_uri() . '/assets/images/master-suite';

if ( ! function_exists( 'strendal_field' ) ) {
	function strendal_field( string $name, int $post_id ) {
		return function_exists( 'get_field' ) ? get_field( $name, $post_id ) : null;
	}
}

/* ════════════════════════════════════════════════════════
   DEFAULT CONTENT
   ════════════════════════════════════════════════════════ */
$MS = [

	'hero' => [
		'eyebrow' => 'The Master Suite · Upper Floor',
		'title'   => 'Your retreat.<br><em>At the end of every day.</em>',
		'sub'     => 'A generous master bedroom, a double-vanity en-suite with garden tub and separate shower, and a proper walk-in closet with a window. Everything a primary suite should be.',
		'bg'      => [ 'url' => $img_base . '/hero-bg.jpg', 'alt' => '' ],
	],

	'suite_strip' => [
		[ 'num' => 'King',     'label' => 'Bed fits comfortably' ],
		[ 'num' => 'Double',   'label' => 'Vanity en-suite' ],
		[ 'num' => 'Garden',   'label' => 'Tub with window' ],
		[ 'num' => 'Separate', 'label' => 'Glass shower' ],
		[ 'num' => 'Walk-in',  'label' => 'Closet with window' ],
	],

	'bedroom' => [
		'label'  => 'The Bedroom',
		'title'  => 'Quiet. Generous.<br><em>Everything shut out.</em>',
		'body_1' => 'The master bedroom at 4007 Strendal is large enough to feel like a room, not just a place to sleep. A king bed fits with space remaining for a reading chair, a dresser, and a desk — as it does today. The window looks out over greenery. The room faces away from the street.',
		'body_2' => 'Two doors lead out — one to the en-suite bathroom, one to the walk-in closet. Both are right there, where they should be, without crossing the room to reach them. The proportions were thought about.',
		'chips'  => [ 'King bed proportions', 'Garden-view window', 'Reading chair fits', 'En-suite door', 'Walk-in closet door', 'Carpet — quiet underfoot' ],
		'photo'  => [ 'url' => $img_base . '/bedroom-intro.jpg', 'alt' => 'Master bedroom', 'caption' => 'Master bedroom · Garden view · En-suite beyond' ],
	],

	'bedroom_grid' => [
		'label'  => 'Three Angles · One Room',
		'title'  => 'A room that works<br><em>from every corner.</em>',
		'photos' => [
			[ 'url' => $img_base . '/bedroom-angle-1.jpg', 'alt' => 'Bedroom angle 1', 'caption' => 'From entry · Full proportions' ],
			[ 'url' => $img_base . '/bedroom-angle-2.jpg', 'alt' => 'Bedroom angle 2', 'caption' => 'Opposite angle · Both doorways visible' ],
			[ 'url' => $img_base . '/bedroom-angle-3.jpg', 'alt' => 'Bedroom angle 3', 'caption' => 'Morning light · Reading corner · Desk' ],
		],
	],

	'dark_divider' => [
		'quote' => '"Three bedrooms — including a master suite with garden tub and separate shower — give <em>everyone their own retreat.</em>"',
		'items' => [
			[ 'icon' => '🛁', 'title' => 'Garden Tub Under the Window',   'body' => 'The tub sits beneath its own window with a view of blue sky and greenery. A proper soak, not just a fixture.' ],
			[ 'icon' => '🚿', 'title' => 'Separate Glass Shower',          'body' => 'A full glass-door shower alongside — so two people can use the bathroom simultaneously without compromise.' ],
			[ 'icon' => '🪞', 'title' => 'Double Vanity · Full Mirror',    'body' => 'Two sinks, two sets of storage, one full-width mirror. Morning routines run in parallel, not in turns.' ],
		],
	],

	'bath' => [
		'label'  => 'The En-Suite',
		'title'  => 'A double vanity.<br>A garden tub.<br><em>A separate shower.</em>',
		'body_1' => 'The master en-suite was designed for two people who share a morning routine and still need to get out the door on time. Double sinks with their own storage below. A full-width mirror running the length of the vanity. Good light from the window and the overhead fixtures.',
		'body_2' => 'Beyond the vanity, the room opens into the tub and shower area — separated from the sink, which matters more than people realise. The garden tub sits beneath its own window. The walk-in glass shower is alongside, not tucked behind a wall.',
		'body_3' => 'This is a bathroom that feels like a proper part of the home, not an afterthought.',
		'chips'  => [ 'Double vanity &amp; sinks', 'Full-width mirror', 'Garden tub with window', 'Separate glass shower', 'Tile floor &amp; walls', 'Private water closet' ],
		'photos' => [
			[ 'url' => $img_base . '/bath-vanity.jpg', 'alt' => 'Double vanity',  'caption' => 'Double vanity · Full mirror · Shower &amp; tub beyond' ],
			[ 'url' => $img_base . '/bath-tub.jpg',    'alt' => 'Garden tub',     'caption' => 'Garden tub · Blue sky window · Glass shower' ],
		],
	],

	'closet' => [
		'label'  => 'The Walk-In Closet',
		'title'  => 'A real walk-in.<br><em>With a window.</em>',
		'body_1' => 'The walk-in closet at 4007 Strendal is not a large wardrobe with a door. It is a room — with full hanging rails on multiple levels, built-in shelving beneath a proper window, and carpet underfoot. The kind of closet that makes morning easier.',
		'body_2' => 'The window looks out over the neighbourhood — so even the closet has light and a view. A bench seat with shelving beneath runs the length of the window wall. Organised, calm, and properly proportioned for a couple sharing the space.',
		'chips'  => [ 'Full hanging rails — two levels', 'Built-in bench &amp; shelving', 'Window with neighbourhood view', 'Carpet — quiet underfoot', 'Direct access from bedroom' ],
		'photo'  => [ 'url' => $img_base . '/closet.jpg', 'alt' => 'Walk-in closet', 'caption' => 'Walk-in closet · Full rails · Built-in bench · Window' ],
	],

	'summary' => [
		'label' => 'Complete Suite Details',
		'title' => 'Everything the primary suite<br><em>should include.</em>',
		'cards' => [
			[ 'icon' => '🛏️', 'title' => 'King-Size Bedroom',         'body' => 'Full king bed with space for reading chair, dresser, and desk — as furnished today.' ],
			[ 'icon' => '🪞', 'title' => 'Double Vanity',              'body' => 'Two sinks, two sets of drawers, one full-width mirror — the morning routine runs in parallel.' ],
			[ 'icon' => '🛁', 'title' => 'Garden Soaking Tub',        'body' => 'Full soaking tub under its own window — natural light, sky view, genuine relaxation.' ],
			[ 'icon' => '🚿', 'title' => 'Separate Glass Shower',      'body' => 'Full glass-door walk-in shower alongside the tub — private, well-lit, properly sized.' ],
			[ 'icon' => '🚪', 'title' => 'Private Water Closet',       'body' => 'Separate door for the toilet — the detail that makes a master bath genuinely work for two people.' ],
			[ 'icon' => '👔', 'title' => 'Walk-In Closet with Window', 'body' => 'Full rails, built-in bench shelving, natural light — a closet that actually functions as a room.' ],
		],
	],

	'cta' => [
		'title'    => 'See the whole suite in person.',
		'body'     => 'The master suite reads larger in person than in photographs. Schedule a private tour of 4007 Strendal Drive and walk through the bedroom, bathroom, and closet yourself.',
		'btn_text' => 'Schedule a Private Tour',
		'btn_url'  => 'tel:+19190000000',
	],

];

/* ════════════════════════════════════════════════════════
   FIELD RESOLUTION
   ════════════════════════════════════════════════════════ */

/* ── Hero ── */
$hero_use_default = strendal_field( 'ms_hero_use_default', $post_id );
if ( $hero_use_default || $hero_use_default === null ) {
	$hero_eyebrow = $MS['hero']['eyebrow'];
	$hero_title   = $MS['hero']['title'];
	$hero_sub     = $MS['hero']['sub'];
	$hero_bg      = $MS['hero']['bg'];
} else {
	$hero_eyebrow = strendal_field( 'ms_hero_eyebrow', $post_id ) ?: $MS['hero']['eyebrow'];
	$hero_title   = strendal_field( 'ms_hero_title',   $post_id ) ?: $MS['hero']['title'];
	$hero_sub     = strendal_field( 'ms_hero_sub',     $post_id ) ?: $MS['hero']['sub'];
	$raw_bg       = strendal_field( 'ms_hero_bg',      $post_id );
	$hero_bg      = $raw_bg ?: $MS['hero']['bg'];
}
$hero_img_style = ! empty( $hero_bg['url'] )
	? ' style="background-image:url(\'' . esc_url( $hero_bg['url'] ) . '\')"'
	: '';

/* ── Suite Strip ── */
$strip_use_default = strendal_field( 'ms_strip_use_default', $post_id );
if ( $strip_use_default || $strip_use_default === null ) {
	$strip_items = $MS['suite_strip'];
} else {
	$raw         = strendal_field( 'ms_strip_items', $post_id ) ?: [];
	$strip_items = $raw
		? array_map( fn( $v ) => [ 'num' => $v['ms_strip_num'], 'label' => $v['ms_strip_label'] ], $raw )
		: $MS['suite_strip'];
}

/* ── Bedroom Intro ── */
$bed_use_default = strendal_field( 'ms_bed_use_default', $post_id );
if ( $bed_use_default || $bed_use_default === null ) {
	$bed_label  = $MS['bedroom']['label'];
	$bed_title  = $MS['bedroom']['title'];
	$bed_body_1 = $MS['bedroom']['body_1'];
	$bed_body_2 = $MS['bedroom']['body_2'];
	$bed_chips  = $MS['bedroom']['chips'];
	$bed_photo  = $MS['bedroom']['photo'];
} else {
	$bed_label  = strendal_field( 'ms_bed_label',  $post_id ) ?: $MS['bedroom']['label'];
	$bed_title  = strendal_field( 'ms_bed_title',  $post_id ) ?: $MS['bedroom']['title'];
	$bed_body_1 = strendal_field( 'ms_bed_body_1', $post_id ) ?: $MS['bedroom']['body_1'];
	$bed_body_2 = strendal_field( 'ms_bed_body_2', $post_id ) ?: $MS['bedroom']['body_2'];
	$raw_chips  = strendal_field( 'ms_bed_chips',  $post_id ) ?: [];
	$bed_chips  = $raw_chips ? array_column( $raw_chips, 'ms_bed_chip' ) : $MS['bedroom']['chips'];
	$raw_photo  = strendal_field( 'ms_bed_photo',  $post_id );
	$bed_photo  = $raw_photo
		? [ 'url' => $raw_photo['url'], 'alt' => $raw_photo['alt'], 'caption' => strendal_field( 'ms_bed_photo_caption', $post_id ) ?: $MS['bedroom']['photo']['caption'] ]
		: $MS['bedroom']['photo'];
}

/* ── Bedroom Grid ── */
$grid_use_default = strendal_field( 'ms_grid_use_default', $post_id );
if ( $grid_use_default || $grid_use_default === null ) {
	$grid_label  = $MS['bedroom_grid']['label'];
	$grid_title  = $MS['bedroom_grid']['title'];
	$grid_photos = $MS['bedroom_grid']['photos'];
} else {
	$grid_label  = strendal_field( 'ms_grid_label', $post_id ) ?: $MS['bedroom_grid']['label'];
	$grid_title  = strendal_field( 'ms_grid_title', $post_id ) ?: $MS['bedroom_grid']['title'];
	$raw_photos  = strendal_field( 'ms_grid_photos', $post_id ) ?: [];
	$grid_photos = $raw_photos
		? array_map( fn( $v ) => [ 'url' => $v['ms_grid_photo']['url'], 'alt' => $v['ms_grid_photo']['alt'], 'caption' => $v['ms_grid_caption'] ], $raw_photos )
		: $MS['bedroom_grid']['photos'];
}

/* ── Dark Divider ── */
$dd_use_default = strendal_field( 'ms_dd_use_default', $post_id );
if ( $dd_use_default || $dd_use_default === null ) {
	$dd_quote = $MS['dark_divider']['quote'];
	$dd_items = $MS['dark_divider']['items'];
} else {
	$dd_quote  = strendal_field( 'ms_dd_quote', $post_id ) ?: $MS['dark_divider']['quote'];
	$raw_items = strendal_field( 'ms_dd_items', $post_id ) ?: [];
	$dd_items  = $raw_items
		? array_map( fn( $v ) => [ 'icon' => $v['ms_dd_icon'], 'title' => $v['ms_dd_title'], 'body' => $v['ms_dd_body'] ], $raw_items )
		: $MS['dark_divider']['items'];
}

/* ── Bath Section ── */
$bath_use_default = strendal_field( 'ms_bath_use_default', $post_id );
if ( $bath_use_default || $bath_use_default === null ) {
	$bath_label  = $MS['bath']['label'];
	$bath_title  = $MS['bath']['title'];
	$bath_body_1 = $MS['bath']['body_1'];
	$bath_body_2 = $MS['bath']['body_2'];
	$bath_body_3 = $MS['bath']['body_3'];
	$bath_chips  = $MS['bath']['chips'];
	$bath_photos = $MS['bath']['photos'];
} else {
	$bath_label  = strendal_field( 'ms_bath_label',  $post_id ) ?: $MS['bath']['label'];
	$bath_title  = strendal_field( 'ms_bath_title',  $post_id ) ?: $MS['bath']['title'];
	$bath_body_1 = strendal_field( 'ms_bath_body_1', $post_id ) ?: $MS['bath']['body_1'];
	$bath_body_2 = strendal_field( 'ms_bath_body_2', $post_id ) ?: $MS['bath']['body_2'];
	$bath_body_3 = strendal_field( 'ms_bath_body_3', $post_id ) ?: $MS['bath']['body_3'];
	$raw_chips   = strendal_field( 'ms_bath_chips',  $post_id ) ?: [];
	$bath_chips  = $raw_chips ? array_column( $raw_chips, 'ms_bath_chip' ) : $MS['bath']['chips'];
	$raw_photos  = strendal_field( 'ms_bath_photos', $post_id ) ?: [];
	$bath_photos = $raw_photos
		? array_map( fn( $v ) => [ 'url' => $v['ms_bath_photo']['url'], 'alt' => $v['ms_bath_photo']['alt'], 'caption' => $v['ms_bath_caption'] ], $raw_photos )
		: $MS['bath']['photos'];
}

/* ── Closet Section ── */
$closet_use_default = strendal_field( 'ms_closet_use_default', $post_id );
if ( $closet_use_default || $closet_use_default === null ) {
	$closet_label  = $MS['closet']['label'];
	$closet_title  = $MS['closet']['title'];
	$closet_body_1 = $MS['closet']['body_1'];
	$closet_body_2 = $MS['closet']['body_2'];
	$closet_chips  = $MS['closet']['chips'];
	$closet_photo  = $MS['closet']['photo'];
} else {
	$closet_label  = strendal_field( 'ms_closet_label',  $post_id ) ?: $MS['closet']['label'];
	$closet_title  = strendal_field( 'ms_closet_title',  $post_id ) ?: $MS['closet']['title'];
	$closet_body_1 = strendal_field( 'ms_closet_body_1', $post_id ) ?: $MS['closet']['body_1'];
	$closet_body_2 = strendal_field( 'ms_closet_body_2', $post_id ) ?: $MS['closet']['body_2'];
	$raw_chips     = strendal_field( 'ms_closet_chips',  $post_id ) ?: [];
	$closet_chips  = $raw_chips ? array_column( $raw_chips, 'ms_closet_chip' ) : $MS['closet']['chips'];
	$raw_photo     = strendal_field( 'ms_closet_photo',  $post_id );
	$closet_photo  = $raw_photo
		? [ 'url' => $raw_photo['url'], 'alt' => $raw_photo['alt'], 'caption' => strendal_field( 'ms_closet_photo_caption', $post_id ) ?: $MS['closet']['photo']['caption'] ]
		: $MS['closet']['photo'];
}

/* ── Suite Summary ── */
$sum_use_default = strendal_field( 'ms_sum_use_default', $post_id );
if ( $sum_use_default || $sum_use_default === null ) {
	$sum_label = $MS['summary']['label'];
	$sum_title = $MS['summary']['title'];
	$sum_cards = $MS['summary']['cards'];
} else {
	$sum_label  = strendal_field( 'ms_sum_label', $post_id ) ?: $MS['summary']['label'];
	$sum_title  = strendal_field( 'ms_sum_title', $post_id ) ?: $MS['summary']['title'];
	$raw_cards  = strendal_field( 'ms_sum_cards', $post_id ) ?: [];
	$sum_cards  = $raw_cards
		? array_map( fn( $v ) => [ 'icon' => $v['ms_sum_icon'], 'title' => $v['ms_sum_card_title'], 'body' => $v['ms_sum_card_body'] ], $raw_cards )
		: $MS['summary']['cards'];
}

/* ── CTA ── */
$cta_use_default = strendal_field( 'ms_cta_use_default', $post_id );
if ( $cta_use_default || $cta_use_default === null ) {
	$cta_title    = $MS['cta']['title'];
	$cta_body     = $MS['cta']['body'];
	$cta_btn_text = $MS['cta']['btn_text'];
	$cta_btn_url  = $MS['cta']['btn_url'];
} else {
	$cta_title    = strendal_field( 'ms_cta_title',    $post_id ) ?: $MS['cta']['title'];
	$cta_body     = strendal_field( 'ms_cta_body',     $post_id ) ?: $MS['cta']['body'];
	$cta_btn_text = strendal_field( 'ms_cta_btn_text', $post_id ) ?: $MS['cta']['btn_text'];
	$cta_btn_url  = strendal_field( 'ms_cta_btn_url',  $post_id ) ?: $MS['cta']['btn_url'];
}

/* ════════════════════════════════════════════════════════
   RENDER
   ════════════════════════════════════════════════════════ */
get_header();
?>

<!-- ── HERO ── -->
<section class="ms-hero">
  <div class="hero-img"<?php echo $hero_img_style; ?>></div>
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <p class="hero-eyebrow"><?php echo esc_html( $hero_eyebrow ); ?></p>
    <h1 class="hero-title"><?php echo wp_kses_post( $hero_title ); ?></h1>
    <p class="hero-sub"><?php echo esc_html( $hero_sub ); ?></p>
  </div>
</section>

<!-- ── SUITE STRIP ── -->
<div class="ms-suite-strip">
  <?php foreach ( $strip_items as $item ) : ?>
  <div class="ms-ss-item">
    <div class="ms-ss-num"><?php echo esc_html( $item['num'] ); ?></div>
    <div class="ms-ss-label"><?php echo esc_html( $item['label'] ); ?></div>
  </div>
  <?php endforeach; ?>
</div>

<!-- ── BEDROOM INTRO ── -->
<section class="ms-two-col">
  <div class="reveal">
    <p class="ms-section-label"><?php echo esc_html( $bed_label ); ?></p>
    <h2><?php echo wp_kses_post( $bed_title ); ?></h2>
    <?php if ( $bed_body_1 ) : ?><p><?php echo esc_html( $bed_body_1 ); ?></p><?php endif; ?>
    <?php if ( $bed_body_2 ) : ?><p><?php echo esc_html( $bed_body_2 ); ?></p><?php endif; ?>
    <?php if ( $bed_chips ) : ?>
    <div class="ms-chips">
      <?php foreach ( $bed_chips as $chip ) : ?>
      <span class="ms-chip"><?php echo wp_kses_post( $chip ); ?></span>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
  <div class="ms-photo-frame reveal reveal-delay-2">
    <?php if ( ! empty( $bed_photo['url'] ) ) : ?>
    <img src="<?php echo esc_url( $bed_photo['url'] ); ?>"
         alt="<?php echo esc_attr( $bed_photo['alt'] ); ?>">
    <?php endif; ?>
    <?php if ( ! empty( $bed_photo['caption'] ) ) : ?>
    <div class="ms-photo-caption"><?php echo wp_kses_post( $bed_photo['caption'] ); ?></div>
    <?php endif; ?>
  </div>
</section>

<!-- ── THREE-PHOTO BEDROOM GRID ── -->
<section class="ms-bedroom-grid-section">
  <div class="ms-bedroom-grid-inner">
    <div class="ms-bedroom-grid-header reveal">
      <p class="ms-section-label" style="justify-content:center;"><?php echo esc_html( $grid_label ); ?></p>
      <h2><?php echo wp_kses_post( $grid_title ); ?></h2>
    </div>
    <div class="ms-three-photo">
      <?php foreach ( $grid_photos as $i => $photo ) :
        $delay = $i > 0 ? ' reveal-delay-' . $i : '';
      ?>
      <div class="ms-tp-frame reveal<?php echo $delay; ?>">
        <?php if ( ! empty( $photo['url'] ) ) : ?>
        <img src="<?php echo esc_url( $photo['url'] ); ?>"
             alt="<?php echo esc_attr( $photo['alt'] ); ?>">
        <?php endif; ?>
        <?php if ( ! empty( $photo['caption'] ) ) : ?>
        <div class="ms-tp-caption"><?php echo wp_kses_post( $photo['caption'] ); ?></div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── DARK DIVIDER ── -->
<div class="ms-dark-divider">
  <div class="ms-dd-inner">
    <div class="ms-dd-quote reveal"><?php echo wp_kses_post( $dd_quote ); ?></div>
    <div class="ms-dd-items reveal reveal-delay-2">
      <?php foreach ( $dd_items as $item ) : ?>
      <div class="ms-dd-item">
        <div class="ms-dd-icon"><?php echo esc_html( $item['icon'] ); ?></div>
        <div>
          <div class="ms-dd-title"><?php echo wp_kses_post( $item['title'] ); ?></div>
          <div class="ms-dd-body"><?php echo esc_html( $item['body'] ); ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- ── BATH SECTION ── -->
<section class="ms-bath-section">
  <div class="ms-bath-inner">
    <div class="ms-bath-photos reveal">
      <?php foreach ( $bath_photos as $photo ) : ?>
      <div class="ms-photo-frame">
        <?php if ( ! empty( $photo['url'] ) ) : ?>
        <img src="<?php echo esc_url( $photo['url'] ); ?>"
             alt="<?php echo esc_attr( $photo['alt'] ); ?>">
        <?php endif; ?>
        <?php if ( ! empty( $photo['caption'] ) ) : ?>
        <div class="ms-photo-caption"><?php echo wp_kses_post( $photo['caption'] ); ?></div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="reveal reveal-delay-2">
      <p class="ms-section-label"><?php echo esc_html( $bath_label ); ?></p>
      <h2><?php echo wp_kses_post( $bath_title ); ?></h2>
      <?php if ( $bath_body_1 ) : ?><p><?php echo esc_html( $bath_body_1 ); ?></p><?php endif; ?>
      <?php if ( $bath_body_2 ) : ?><p><?php echo esc_html( $bath_body_2 ); ?></p><?php endif; ?>
      <?php if ( $bath_body_3 ) : ?><p><?php echo esc_html( $bath_body_3 ); ?></p><?php endif; ?>
      <?php if ( $bath_chips ) : ?>
      <div class="ms-chips">
        <?php foreach ( $bath_chips as $chip ) : ?>
        <span class="ms-chip"><?php echo wp_kses_post( $chip ); ?></span>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ── CLOSET SECTION ── -->
<section class="ms-closet-section">
  <div class="reveal">
    <p class="ms-section-label"><?php echo esc_html( $closet_label ); ?></p>
    <h2><?php echo wp_kses_post( $closet_title ); ?></h2>
    <?php if ( $closet_body_1 ) : ?><p><?php echo esc_html( $closet_body_1 ); ?></p><?php endif; ?>
    <?php if ( $closet_body_2 ) : ?><p><?php echo esc_html( $closet_body_2 ); ?></p><?php endif; ?>
    <?php if ( $closet_chips ) : ?>
    <div class="ms-chips">
      <?php foreach ( $closet_chips as $chip ) : ?>
      <span class="ms-chip"><?php echo wp_kses_post( $chip ); ?></span>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
  <div class="ms-photo-frame reveal reveal-delay-2">
    <?php if ( ! empty( $closet_photo['url'] ) ) : ?>
    <img src="<?php echo esc_url( $closet_photo['url'] ); ?>"
         alt="<?php echo esc_attr( $closet_photo['alt'] ); ?>">
    <?php endif; ?>
    <?php if ( ! empty( $closet_photo['caption'] ) ) : ?>
    <div class="ms-photo-caption"><?php echo wp_kses_post( $closet_photo['caption'] ); ?></div>
    <?php endif; ?>
  </div>
</section>

<!-- ── SUITE SUMMARY ── -->
<section class="ms-summary-section">
  <div class="ms-summary-inner">
    <div class="ms-summary-header reveal">
      <p class="ms-section-label" style="justify-content:center;"><?php echo esc_html( $sum_label ); ?></p>
      <h2><?php echo wp_kses_post( $sum_title ); ?></h2>
    </div>
    <div class="ms-summary-grid">
      <?php foreach ( $sum_cards as $i => $card ) :
        $delay = ( $i % 3 !== 0 ) ? ' reveal-delay-' . ( $i % 3 ) : '';
      ?>
      <div class="ms-sg-card reveal<?php echo $delay; ?>">
        <div class="ms-sg-icon"><?php echo esc_html( $card['icon'] ); ?></div>
        <div>
          <div class="ms-sg-title"><?php echo esc_html( $card['title'] ); ?></div>
          <div class="ms-sg-body"><?php echo esc_html( $card['body'] ); ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<div class="ms-cta-strip" id="contact">
  <div class="cta-left">
    <h3><?php echo esc_html( $cta_title ); ?></h3>
    <p><?php echo wp_kses_post( $cta_body ); ?></p>
  </div>
  <a href="<?php echo esc_url( $cta_btn_url ); ?>" class="btn-gold"><?php echo esc_html( $cta_btn_text ); ?></a>
</div>

<?php get_template_part( 'template-parts/editor-content' ); ?>

<?php get_footer(); ?>

<script>
(function () {
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(function (el) { observer.observe(el); });
})();
</script>
