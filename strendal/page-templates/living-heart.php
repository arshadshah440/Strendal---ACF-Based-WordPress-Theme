<?php
/**
 * Template Name: The Living Heart
 * Template Post Type: page
 *
 * Full-page "The Living Heart" layout.
 * Each section has a "Content Source" toggle (Default / Custom).
 * Default content extracted from strendal_living_heart.html.
 */

defined( 'ABSPATH' ) || exit;

$post_id   = get_the_ID();
$theme_uri = get_template_directory_uri();
$img_base  = $theme_uri . '/assets/images/living-heart';

if ( ! function_exists( 'strendal_field' ) ) {
	function strendal_field( string $name, int $post_id ) {
		return function_exists( 'get_field' ) ? get_field( $name, $post_id ) : null;
	}
}

/* ════════════════════════════════════════════════════════
   DEFAULT CONTENT
   ════════════════════════════════════════════════════════ */
$LH = [

	'hero' => [
		'eyebrow' => 'The Living Heart · Ground Floor',
		'title'   => 'One continuous space.<br><em>Five ways to live in it.</em>',
		'sub'     => 'Dining nook, morning tea corner, living room, fireplace, screened porch door — all connected, all filled with light. This is the room the whole family gravitates to.',
	],

	'zone_strip' => [
		[ 'icon' => '🍽️', 'text' => 'Breakfast Nook',  'sub' => 'Extended dining' ],
		[ 'icon' => '☕',  'text' => 'Tea Corner',       'sub' => 'Light from three sides' ],
		[ 'icon' => '🛋️', 'text' => 'Living Room',      'sub' => 'Open plan' ],
		[ 'icon' => '🔥',  'text' => 'Fireplace',        'sub' => 'Living room focal point' ],
		[ 'icon' => '🌿',  'text' => 'Screened Porch',   'sub' => 'Steps away' ],
	],

	'intro' => [
		'label'         => 'The Ground Floor',
		'title'         => 'Not rooms separated by walls.<br><em>One space that breathes.</em>',
		'body_1'        => 'Most homes divide their ground floor into discrete boxes — a dining room, a living room, a family room. At 4007 Strendal, the decision was made differently. The breakfast nook, the tea corner, and the living room flow into each other without interruption — one continuous, light-filled space anchored by the kitchen on one side and the screened porch on the other.',
		'body_2'        => 'The result is a ground floor that genuinely works for a family at every moment of the day — morning coffee by the windows, evening on the sofa by the fire, dinner at the extended table, summer evenings through the porch door.',
		'photo_caption' => 'Ground floor · Dining · Tea corner · Living room · Porch',
	],

	'zones' => [
		'label' => 'Three Zones · One Space',
		'title' => 'Every moment of the day<br><em>has its own corner.</em>',
		'cards' => [
			[
				'icon'     => '🍽️',
				'title'    => 'The Breakfast Nook',
				'subtitle' => 'Extended dining · Family table',
				'body'     => 'The dining table sits in the extended nook — a generous, purpose-built space with a pendant light overhead and windows on two sides. Large enough for a proper family dinner. Connected enough that nobody feels separated from the room.',
				'foot'     => 'Open to living room on both sides',
			],
			[
				'icon'     => '☕',
				'title'    => 'The Tea Corner',
				'subtitle' => 'Morning ritual · Hummingbird watching',
				'body'     => 'By the windows, with light coming in from the back, the left, and the right — this is the spot that earned its name. A sofa, a cup of tea, and a view of the garden where hummingbirds visit in the mornings. The calmest corner in the house.',
				'foot'     => 'Natural light from three directions',
			],
			[
				'icon'     => '🛋️',
				'title'    => 'The Living Room',
				'subtitle' => 'Fireplace · Open plan',
				'body'     => 'The living room anchors the far end — fireplace on the wall, large windows, room to breathe. It opens without a barrier into the dining and nook space, so a family watching television, cooking, and having tea are all sharing the same generous room.',
				'foot'     => 'Fireplace · Surround sound wiring',
			],
		],
	],

	'depth' => [
		'caption_text' => 'The full depth of the ground floor — one photograph',
		'rooms'        => [ 'Porch', 'Dining', 'Living', 'Kitchen', 'Stairs' ],
	],

	'tea' => [
		'label'         => 'The Tea Corner',
		'title'         => 'Light from three sides.<br><em>Hummingbirds in the morning.</em>',
		'body_1'        => 'Just by the windows at the back of the nook — this is the corner that becomes a ritual. Light comes in from behind, from the left, and from the right. On a clear Carolina morning, it\'s the warmest, brightest spot in the house.',
		'body_2'        => 'The garden is right outside. The hummingbirds know it. The family that lives here has watched them from this exact spot for fourteen years. There is no better place in this home to start the day.',
		'photo_caption' => 'Tea corner · Morning light · Garden view',
		'badges'        => [ 'Light from behind', 'Light from the left', 'Light from the right', 'Garden view' ],
	],

	'flow' => [
		'quote'         => '"From the front door to the screened porch — the whole ground floor is <em>one unbroken journey.</em>"',
		'body'          => 'Entry hall, flex room, kitchen, nook, living room, screened porch. No dead ends. No dark corridors. Every space connects to the next, and light finds its way through all of them.',
		'photo_caption' => 'From living room · All the way to the front door',
	],

	'fireplace' => [
		'title' => 'A fireplace in the<br><em>heart of the home.</em>',
		'body'  => 'The living room fireplace isn\'t decorative — it\'s the anchor of the space. On a Carolina winter evening, the whole open-plan ground floor takes on a warmth that no central heating quite replicates. Another reason this house was designed for the way a family actually lives.',
	],

	'cta' => [
		'title'   => 'Come and sit in the tea corner.',
		'body'    => 'Photographs show the space. Being in it tells you whether this is your home. Schedule a private tour of 4007 Strendal Drive and spend time in the room that matters most.',
		'btn_text'=> 'Schedule a Private Tour',
		'btn_url' => 'tel:+19190000000',
	],

];

/* ════════════════════════════════════════════════════════
   FIELD RESOLUTION
   ════════════════════════════════════════════════════════ */

/* ── Hero ── */
$hero_use_default = strendal_field( 'lh_hero_use_default', $post_id );
if ( $hero_use_default || $hero_use_default === null ) {
	$hero_bg      = [ 'url' => $img_base . '/hero-bg.jpg', 'alt' => '' ];
	$hero_eyebrow = $LH['hero']['eyebrow'];
	$hero_title   = $LH['hero']['title'];
	$hero_sub     = $LH['hero']['sub'];
} else {
	$hero_bg      = strendal_field( 'lh_hero_bg_image', $post_id ) ?: [ 'url' => $img_base . '/hero-bg.jpg', 'alt' => '' ];
	$hero_eyebrow = strendal_field( 'lh_hero_eyebrow',  $post_id ) ?: $LH['hero']['eyebrow'];
	$hero_title   = strendal_field( 'lh_hero_title',    $post_id ) ?: $LH['hero']['title'];
	$hero_sub     = strendal_field( 'lh_hero_sub',      $post_id ) ?: $LH['hero']['sub'];
}
$hero_img_style = $hero_bg ? ' style="background-image: url(\'' . esc_url( $hero_bg['url'] ) . '\')"' : '';

/* ── Zone Strip ── */
$zone_use_default = strendal_field( 'lh_zone_strip_use_default', $post_id );
if ( $zone_use_default || $zone_use_default === null ) {
	$zone_items = $LH['zone_strip'];
} else {
	$raw        = strendal_field( 'lh_zone_items', $post_id ) ?: [];
	$zone_items = $raw
		? array_map( fn( $v ) => [ 'icon' => $v['lh_zone_icon'], 'text' => $v['lh_zone_text'], 'sub' => $v['lh_zone_sub'] ], $raw )
		: $LH['zone_strip'];
}

/* ── Intro ── */
$intro_use_default = strendal_field( 'lh_intro_use_default', $post_id );
if ( $intro_use_default || $intro_use_default === null ) {
	$intro_label         = $LH['intro']['label'];
	$intro_title         = $LH['intro']['title'];
	$intro_body_1        = $LH['intro']['body_1'];
	$intro_body_2        = $LH['intro']['body_2'];
	$intro_photo         = [ 'url' => $img_base . '/ground-floor.jpg', 'alt' => $LH['intro']['photo_caption'] ];
	$intro_photo_caption = $LH['intro']['photo_caption'];
} else {
	$intro_label         = strendal_field( 'lh_intro_label',         $post_id ) ?: $LH['intro']['label'];
	$intro_title         = strendal_field( 'lh_intro_title',         $post_id ) ?: $LH['intro']['title'];
	$intro_body_1        = strendal_field( 'lh_intro_body_1',        $post_id ) ?: $LH['intro']['body_1'];
	$intro_body_2        = strendal_field( 'lh_intro_body_2',        $post_id ) ?: $LH['intro']['body_2'];
	$intro_photo         = strendal_field( 'lh_intro_photo',         $post_id ) ?: [ 'url' => $img_base . '/ground-floor.jpg', 'alt' => $LH['intro']['photo_caption'] ];
	$intro_photo_caption = strendal_field( 'lh_intro_photo_caption', $post_id ) ?: $LH['intro']['photo_caption'];
}

/* ── Zones Section ── */
$zones_use_default = strendal_field( 'lh_zones_use_default', $post_id );
if ( $zones_use_default || $zones_use_default === null ) {
	$zones_label = $LH['zones']['label'];
	$zones_title = $LH['zones']['title'];
	$zone_cards  = $LH['zones']['cards'];
} else {
	$zones_label = strendal_field( 'lh_zones_label', $post_id ) ?: $LH['zones']['label'];
	$zones_title = strendal_field( 'lh_zones_title', $post_id ) ?: $LH['zones']['title'];
	$raw         = strendal_field( 'lh_zone_cards',  $post_id ) ?: [];
	$zone_cards  = $raw
		? array_map( fn( $c ) => [
			'icon'     => $c['lh_zc_icon'],
			'title'    => $c['lh_zc_title'],
			'subtitle' => $c['lh_zc_subtitle'],
			'body'     => $c['lh_zc_body'],
			'foot'     => $c['lh_zc_foot'],
		], $raw )
		: $LH['zones']['cards'];
}

/* ── Depth Photo ── */
$depth_use_default = strendal_field( 'lh_depth_use_default', $post_id );
if ( $depth_use_default || $depth_use_default === null ) {
	$depth_photo        = [ 'url' => $img_base . '/depth-photo.jpg', 'alt' => $LH['depth']['caption_text'] ];
	$depth_caption_text = $LH['depth']['caption_text'];
	$depth_rooms        = $LH['depth']['rooms'];
} else {
	$depth_photo        = strendal_field( 'lh_depth_photo', $post_id ) ?: [ 'url' => $img_base . '/depth-photo.jpg', 'alt' => $LH['depth']['caption_text'] ];
	$depth_caption_text = strendal_field( 'lh_depth_caption_text', $post_id ) ?: $LH['depth']['caption_text'];
	$raw                = strendal_field( 'lh_depth_rooms', $post_id ) ?: [];
	$depth_rooms        = $raw ? array_column( $raw, 'lh_room_label' ) : $LH['depth']['rooms'];
}

/* ── Tea Corner ── */
$tea_use_default = strendal_field( 'lh_tea_use_default', $post_id );
if ( $tea_use_default || $tea_use_default === null ) {
	$tea_label         = $LH['tea']['label'];
	$tea_title         = $LH['tea']['title'];
	$tea_body_1        = $LH['tea']['body_1'];
	$tea_body_2        = $LH['tea']['body_2'];
	$tea_photo         = [ 'url' => $img_base . '/tea-corner.jpg', 'alt' => $LH['tea']['photo_caption'] ];
	$tea_photo_caption = $LH['tea']['photo_caption'];
	$tea_badges        = $LH['tea']['badges'];
} else {
	$tea_label         = strendal_field( 'lh_tea_label',         $post_id ) ?: $LH['tea']['label'];
	$tea_title         = strendal_field( 'lh_tea_title',         $post_id ) ?: $LH['tea']['title'];
	$tea_body_1        = strendal_field( 'lh_tea_body_1',        $post_id ) ?: $LH['tea']['body_1'];
	$tea_body_2        = strendal_field( 'lh_tea_body_2',        $post_id ) ?: $LH['tea']['body_2'];
	$tea_photo         = strendal_field( 'lh_tea_photo',         $post_id ) ?: [ 'url' => $img_base . '/tea-corner.jpg', 'alt' => $LH['tea']['photo_caption'] ];
	$tea_photo_caption = strendal_field( 'lh_tea_photo_caption', $post_id ) ?: $LH['tea']['photo_caption'];
	$raw               = strendal_field( 'lh_tea_badges',        $post_id ) ?: [];
	$tea_badges        = $raw ? array_column( $raw, 'lh_badge_text' ) : $LH['tea']['badges'];
}

/* ── Flow Section ── */
$flow_use_default = strendal_field( 'lh_flow_use_default', $post_id );
if ( $flow_use_default || $flow_use_default === null ) {
	$flow_quote         = $LH['flow']['quote'];
	$flow_body          = $LH['flow']['body'];
	$flow_photo         = [ 'url' => $img_base . '/flow-photo.jpg', 'alt' => $LH['flow']['photo_caption'] ];
	$flow_photo_caption = $LH['flow']['photo_caption'];
} else {
	$flow_quote         = strendal_field( 'lh_flow_quote',         $post_id ) ?: $LH['flow']['quote'];
	$flow_body          = strendal_field( 'lh_flow_body',          $post_id ) ?: $LH['flow']['body'];
	$flow_photo         = strendal_field( 'lh_flow_photo',         $post_id ) ?: [ 'url' => $img_base . '/flow-photo.jpg', 'alt' => $LH['flow']['photo_caption'] ];
	$flow_photo_caption = strendal_field( 'lh_flow_photo_caption', $post_id ) ?: $LH['flow']['photo_caption'];
}

/* ── Fireplace ── */
$fp_use_default = strendal_field( 'lh_fireplace_use_default', $post_id );
if ( $fp_use_default || $fp_use_default === null ) {
	$fp_title = $LH['fireplace']['title'];
	$fp_body  = $LH['fireplace']['body'];
} else {
	$fp_title = strendal_field( 'lh_fp_title', $post_id ) ?: $LH['fireplace']['title'];
	$fp_body  = strendal_field( 'lh_fp_body',  $post_id ) ?: $LH['fireplace']['body'];
}

/* ── CTA ── */
$cta_use_default = strendal_field( 'lh_cta_use_default', $post_id );
if ( $cta_use_default || $cta_use_default === null ) {
	$cta_title    = $LH['cta']['title'];
	$cta_body     = $LH['cta']['body'];
	$cta_btn_text = $LH['cta']['btn_text'];
	$cta_btn_url  = $LH['cta']['btn_url'];
} else {
	$cta_title    = strendal_field( 'lh_cta_title',    $post_id ) ?: $LH['cta']['title'];
	$cta_body     = strendal_field( 'lh_cta_body',     $post_id ) ?: $LH['cta']['body'];
	$cta_btn_text = strendal_field( 'lh_cta_btn_text', $post_id ) ?: $LH['cta']['btn_text'];
	$cta_btn_url  = strendal_field( 'lh_cta_btn_url',  $post_id ) ?: $LH['cta']['btn_url'];
}

/* ════════════════════════════════════════════════════════
   RENDER
   ════════════════════════════════════════════════════════ */
get_header();
?>

<!-- ── HERO ── -->
<section class="lh-hero">
  <div class="hero-img"<?php echo $hero_img_style; ?>></div>
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <p class="hero-eyebrow"><?php echo wp_kses_post( $hero_eyebrow ); ?></p>
    <h1 class="hero-title"><?php echo wp_kses_post( $hero_title ); ?></h1>
    <p class="hero-sub"><?php echo wp_kses_post( $hero_sub ); ?></p>
  </div>
</section>

<!-- ── ZONE STRIP ── -->
<div class="zone-strip">
  <?php foreach ( $zone_items as $item ) : ?>
  <div class="zone-item">
    <span class="zone-icon"><?php echo esc_html( $item['icon'] ); ?></span>
    <div>
      <div class="zone-text"><?php echo esc_html( $item['text'] ); ?></div>
      <div class="zone-sub"><?php echo esc_html( $item['sub'] ); ?></div>
    </div>
  </div>
  <?php endforeach; ?>
</div>

<!-- ── INTRO ── -->
<section class="intro">
  <div class="reveal">
    <p class="section-label"><?php echo esc_html( $intro_label ); ?></p>
    <h2><?php echo wp_kses_post( $intro_title ); ?></h2>
    <?php if ( $intro_body_1 ) : ?><p><?php echo wp_kses_post( $intro_body_1 ); ?></p><?php endif; ?>
    <?php if ( $intro_body_2 ) : ?><p><?php echo wp_kses_post( $intro_body_2 ); ?></p><?php endif; ?>
  </div>
  <?php if ( $intro_photo ) : ?>
  <div class="photo-frame reveal reveal-delay-2">
    <img src="<?php echo esc_url( $intro_photo['url'] ); ?>"
         alt="<?php echo esc_attr( $intro_photo['alt'] ?: $intro_photo_caption ); ?>">
    <div class="photo-caption"><?php echo esc_html( $intro_photo_caption ); ?></div>
  </div>
  <?php endif; ?>
</section>

<!-- ── THREE ZONES ── -->
<section class="zones-section">
  <div class="zones-inner">
    <div class="zones-header reveal">
      <p class="zones-label"><?php echo esc_html( $zones_label ); ?></p>
      <h2><?php echo wp_kses_post( $zones_title ); ?></h2>
    </div>
    <div class="zones-grid">
      <?php foreach ( $zone_cards as $i => $card ) :
        $delay = $i > 0 ? ' reveal-delay-' . min( $i, 3 ) : '';
      ?>
      <div class="zone-card reveal<?php echo $delay; ?>">
        <div class="zone-card-top">
          <div class="zc-icon"><?php echo esc_html( $card['icon'] ); ?></div>
          <div class="zc-title"><?php echo esc_html( $card['title'] ); ?></div>
          <div class="zc-subtitle"><?php echo esc_html( $card['subtitle'] ); ?></div>
          <div class="zc-body"><?php echo wp_kses_post( $card['body'] ); ?></div>
        </div>
        <div class="zone-card-foot"><?php echo esc_html( $card['foot'] ); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── DEPTH PHOTO ── -->
<?php if ( $depth_photo ) : ?>
<div class="depth-section reveal">
  <div class="depth-frame">
    <img src="<?php echo esc_url( $depth_photo['url'] ); ?>"
         alt="<?php echo esc_attr( $depth_photo['alt'] ?: $depth_caption_text ); ?>">
    <div class="depth-caption">
      <span class="depth-caption-text"><?php echo esc_html( $depth_caption_text ); ?></span>
      <?php if ( $depth_rooms ) : ?>
      <div class="depth-caption-rooms">
        <?php foreach ( $depth_rooms as $room ) : ?>
        <span class="dcr-item"><?php echo esc_html( $room ); ?></span>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php endif; ?>

<!-- ── TEA CORNER ── -->
<section class="tea-section">
  <div class="tea-inner">
    <?php if ( $tea_photo ) : ?>
    <div class="photo-frame reveal">
      <img src="<?php echo esc_url( $tea_photo['url'] ); ?>"
           alt="<?php echo esc_attr( $tea_photo['alt'] ?: $tea_photo_caption ); ?>">
      <div class="photo-caption"><?php echo esc_html( $tea_photo_caption ); ?></div>
    </div>
    <?php endif; ?>
    <div class="tea-right reveal reveal-delay-2">
      <p class="section-label"><?php echo esc_html( $tea_label ); ?></p>
      <h2><?php echo wp_kses_post( $tea_title ); ?></h2>
      <?php if ( $tea_body_1 ) : ?><p><?php echo wp_kses_post( $tea_body_1 ); ?></p><?php endif; ?>
      <?php if ( $tea_body_2 ) : ?><p><?php echo wp_kses_post( $tea_body_2 ); ?></p><?php endif; ?>
      <?php if ( $tea_badges ) : ?>
      <div class="light-directions">
        <?php foreach ( $tea_badges as $badge ) : ?>
        <span class="ld-badge"><?php echo esc_html( $badge ); ?></span>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ── FLOW SECTION ── -->
<section class="flow-section">
  <div class="flow-inner">
    <div class="flow-left reveal">
      <h2><?php echo wp_kses_post( $flow_quote ); ?></h2>
      <p><?php echo wp_kses_post( $flow_body ); ?></p>
    </div>
    <?php if ( $flow_photo ) : ?>
    <div class="flow-photo reveal reveal-delay-2">
      <img src="<?php echo esc_url( $flow_photo['url'] ); ?>"
           alt="<?php echo esc_attr( $flow_photo['alt'] ?: $flow_photo_caption ); ?>">
      <div class="flow-photo-caption"><?php echo esc_html( $flow_photo_caption ); ?></div>
    </div>
    <?php endif; ?>
  </div>
</section>

<!-- ── FIREPLACE ── -->
<div class="fireplace-section">
  <div class="fireplace-inner">
    <div class="fp-icon">🔥</div>
    <div class="fp-text">
      <h3><?php echo wp_kses_post( $fp_title ); ?></h3>
      <p><?php echo wp_kses_post( $fp_body ); ?></p>
    </div>
  </div>
</div>

<!-- ── CTA ── -->
<div class="cta-strip" id="contact">
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
  if (!('IntersectionObserver' in window)) {
    document.querySelectorAll('.reveal').forEach(function(el){ el.classList.add('visible'); });
    return;
  }
  var obs = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); }
    });
  }, { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(function (el) { obs.observe(el); });
})();
</script>
