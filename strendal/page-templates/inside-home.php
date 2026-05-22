<?php
/**
 * Template Name: Inside the Home
 * Template Post Type: page
 *
 * Full-page "Inside the Home" layout.
 * Each section has a "Content Source" toggle (Default / Custom).
 * Default content extracted from strendal_inside_home.html.
 */

defined( 'ABSPATH' ) || exit;

$post_id   = get_the_ID();
$theme_uri = get_template_directory_uri();
$img_base  = $theme_uri . '/assets/images/inside-home';

if ( ! function_exists( 'strendal_field' ) ) {
	function strendal_field( string $name, int $post_id ) {
		return function_exists( 'get_field' ) ? get_field( $name, $post_id ) : null;
	}
}

/* ════════════════════════════════════════════════════════
   DEFAULT CONTENT
   ════════════════════════════════════════════════════════ */
$IH = [

	'hero' => [
		'eyebrow' => 'Inside the Home · Ground Floor',
		'title'   => 'The first door tells you<br><em>everything about this house.</em>',
		'sub'     => 'Warm hardwood. Crown moulding. A blue door that\'s always open in summer — because this home was designed to breathe.',
	],

	'feature_strip' => [
		[ 'icon' => '🚪', 'text' => 'Storm door with adjustable screen' ],
		[ 'icon' => '🌳', 'text' => 'Hardwood floors throughout' ],
		[ 'icon' => '👑', 'text' => 'Crown moulding & chair rail' ],
		[ 'icon' => '🔄', 'text' => 'Two flex rooms on main floor' ],
		[ 'icon' => '💡', 'text' => 'Natural light, all orientations' ],
	],

	'entry' => [
		'label'         => 'The Entry',
		'title'         => 'First impressions that<br><em>actually last.</em>',
		'body_1'        => 'The entry at 4007 Strendal is generous — wide enough for a console table, a mirror, plants — and warm, with rich hardwood floors and crown moulding that set the tone for everything that follows.',
		'body_2'        => 'The blue front door is distinctive. But what matters more is what\'s behind it: a storm door with an adjustable screen panel that turns the entry into a natural airflow corridor. Open both doors on a Carolina morning and the whole ground floor breathes.',
		'callout_label' => 'The Airflow Feature',
		'callout_text'  => 'Open the storm door screen, open the back porch door — natural cross-ventilation flows through the entire home. Nine to ten months a year, no air conditioning needed in the mornings.',
		'photo_caption' => 'Entry Hall · Storm door with adjustable screen',
	],

	'divider' => [
		'quote'   => '"A home where inside and outside become <em>one seamless lifestyle.</em>"',
		'body_1'  => 'Most homes in West Cary were built to be sealed — air conditioning from March through October, windows shut, curtains drawn. This one was built differently.',
		'body_2'  => 'The storm door\'s adjustable screen, the cross-ventilation between front and back, the covered screened porch — these aren\'t accidents. They\'re a philosophy about how a home in North Carolina should actually be lived in.',
	],

	'flex' => [
		'label'        => 'The Flex Room',
		'title'        => 'One room.<br><em>Whatever your family needs it to be.</em>',
		'intro'        => 'This is the room that sold the family on this house — and it may do the same for you. A proper room off the entry, with a chandelier, crown moulding, chair rail, and hardwood floors. Large enough for a full dining table. Private enough for a home office. Connected enough to feel part of the house.',
		'photo_1_caption' => 'As a dual home office · Two workstations',
		'photo_2_caption' => 'Open angle · Natural window light · Kitchen beyond',
		'usecases' => [
			[ 'icon' => '💼', 'title' => 'Home Office',          'body' => 'Two adults worked from here simultaneously during COVID. The room accommodated it without compromise.' ],
			[ 'icon' => '📚', 'title' => 'Study Room',           'body' => 'Children studied here while parents worked nearby. Close enough to supervise, separate enough to focus.' ],
			[ 'icon' => '🍽️', 'title' => 'Formal Dining',        'body' => 'The chandelier, crown moulding, and proportions are perfectly suited for a large dining table and entertaining.' ],
			[ 'icon' => '🧘', 'title' => 'Prayer · Meditation',  'body' => 'A quiet, separate room on the main floor — ideal for a morning prayer space or meditation room.' ],
		],
	],

	'features' => [
		'label' => 'Built-In Details',
		'title' => 'The craftsmanship you notice<br><em>the moment you walk in.</em>',
		'cards' => [
			[ 'icon' => '🌳', 'title' => 'Hardwood Throughout',   'body' => 'Rich hardwood floors across the entire ground floor — warm, durable, and easy to maintain.' ],
			[ 'icon' => '👑', 'title' => 'Crown Moulding',        'body' => 'Full crown moulding and chair rail throughout — details that define a well-finished home.' ],
			[ 'icon' => '💡', 'title' => 'Chandeliers',           'body' => 'Elegant chandelier lighting in the flex room and dining area — warm, not functional.' ],
			[ 'icon' => '🔒', 'title' => 'Security Throughout',   'body' => 'Hardwired security sensors at every entry point — built in, not bolted on.' ],
			[ 'icon' => '📶', 'title' => 'Hardwired Internet',    'body' => 'High-speed ethernet hardwired through both floors. No dead zones, no Wi-Fi dependence.' ],
			[ 'icon' => '🔊', 'title' => 'Surround Sound Wiring', 'body' => 'In-wall surround sound wiring on both floors — ready for your setup, no renovation needed.' ],
		],
	],

	'cta' => [
		'title'    => 'Come and walk through it yourself.',
		'body'     => 'Photos show you what\'s there. A tour shows you how it feels. Schedule a private walkthrough of 4007 Strendal Drive and experience the ground floor in person.',
		'btn_text' => 'Schedule a Private Tour',
		'btn_url'  => 'tel:+19190000000',
	],

];

/* ════════════════════════════════════════════════════════
   FIELD RESOLUTION
   ════════════════════════════════════════════════════════ */

/* ── Hero ── */
$hero_use_default = strendal_field( 'ih_hero_use_default', $post_id );
if ( $hero_use_default || $hero_use_default === null ) {
	$hero_bg      = [ 'url' => $img_base . '/hero-bg.jpg', 'alt' => '' ];
	$hero_eyebrow = $IH['hero']['eyebrow'];
	$hero_title   = $IH['hero']['title'];
	$hero_sub     = $IH['hero']['sub'];
} else {
	$hero_bg      = strendal_field( 'ih_hero_bg_image', $post_id ) ?: [ 'url' => $img_base . '/hero-bg.jpg', 'alt' => '' ];
	$hero_eyebrow = strendal_field( 'ih_hero_eyebrow',  $post_id ) ?: $IH['hero']['eyebrow'];
	$hero_title   = strendal_field( 'ih_hero_title',    $post_id ) ?: $IH['hero']['title'];
	$hero_sub     = strendal_field( 'ih_hero_sub',      $post_id ) ?: $IH['hero']['sub'];
}
$hero_img_style = $hero_bg ? ' style="background-image: url(\'' . esc_url( $hero_bg['url'] ) . '\')"' : '';

/* ── Feature Strip ── */
$fs_use_default = strendal_field( 'ih_feature_strip_use_default', $post_id );
if ( $fs_use_default || $fs_use_default === null ) {
	$feature_items = $IH['feature_strip'];
} else {
	$raw           = strendal_field( 'ih_feature_items', $post_id ) ?: [];
	$feature_items = $raw
		? array_map( fn( $v ) => [ 'icon' => $v['ih_fs_icon'], 'text' => $v['ih_fs_text'] ], $raw )
		: $IH['feature_strip'];
}

/* ── Entry Section ── */
$entry_use_default = strendal_field( 'ih_entry_use_default', $post_id );
if ( $entry_use_default || $entry_use_default === null ) {
	$entry_label         = $IH['entry']['label'];
	$entry_title         = $IH['entry']['title'];
	$entry_body_1        = $IH['entry']['body_1'];
	$entry_body_2        = $IH['entry']['body_2'];
	$entry_callout_label = $IH['entry']['callout_label'];
	$entry_callout_text  = $IH['entry']['callout_text'];
	$entry_photo         = [ 'url' => $img_base . '/entry-hall.jpg', 'alt' => $IH['entry']['photo_caption'] ];
	$entry_photo_caption = $IH['entry']['photo_caption'];
} else {
	$entry_label         = strendal_field( 'ih_entry_label',         $post_id ) ?: $IH['entry']['label'];
	$entry_title         = strendal_field( 'ih_entry_title',         $post_id ) ?: $IH['entry']['title'];
	$entry_body_1        = strendal_field( 'ih_entry_body_1',        $post_id ) ?: $IH['entry']['body_1'];
	$entry_body_2        = strendal_field( 'ih_entry_body_2',        $post_id ) ?: $IH['entry']['body_2'];
	$entry_callout_label = strendal_field( 'ih_entry_callout_label', $post_id ) ?: $IH['entry']['callout_label'];
	$entry_callout_text  = strendal_field( 'ih_entry_callout_text',  $post_id ) ?: $IH['entry']['callout_text'];
	$entry_photo         = strendal_field( 'ih_entry_photo',         $post_id ) ?: [ 'url' => $img_base . '/entry-hall.jpg', 'alt' => $IH['entry']['photo_caption'] ];
	$entry_photo_caption = strendal_field( 'ih_entry_photo_caption', $post_id ) ?: $IH['entry']['photo_caption'];
}

/* ── Dark Divider ── */
$divider_use_default = strendal_field( 'ih_divider_use_default', $post_id );
if ( $divider_use_default || $divider_use_default === null ) {
	$divider_quote  = $IH['divider']['quote'];
	$divider_body_1 = $IH['divider']['body_1'];
	$divider_body_2 = $IH['divider']['body_2'];
} else {
	$divider_quote  = strendal_field( 'ih_divider_quote',  $post_id ) ?: $IH['divider']['quote'];
	$divider_body_1 = strendal_field( 'ih_divider_body_1', $post_id ) ?: $IH['divider']['body_1'];
	$divider_body_2 = strendal_field( 'ih_divider_body_2', $post_id ) ?: $IH['divider']['body_2'];
}

/* ── Flex Room ── */
$flex_use_default = strendal_field( 'ih_flex_use_default', $post_id );
if ( $flex_use_default || $flex_use_default === null ) {
	$flex_label          = $IH['flex']['label'];
	$flex_title          = $IH['flex']['title'];
	$flex_intro          = $IH['flex']['intro'];
	$flex_photo_1        = [ 'url' => $img_base . '/flex-office.jpg', 'alt' => $IH['flex']['photo_1_caption'] ];
	$flex_photo_1_cap    = $IH['flex']['photo_1_caption'];
	$flex_photo_2        = [ 'url' => $img_base . '/flex-angle.jpg',  'alt' => $IH['flex']['photo_2_caption'] ];
	$flex_photo_2_cap    = $IH['flex']['photo_2_caption'];
	$flex_usecases       = $IH['flex']['usecases'];
} else {
	$flex_label          = strendal_field( 'ih_flex_label', $post_id ) ?: $IH['flex']['label'];
	$flex_title          = strendal_field( 'ih_flex_title', $post_id ) ?: $IH['flex']['title'];
	$flex_intro          = strendal_field( 'ih_flex_intro', $post_id ) ?: $IH['flex']['intro'];
	$flex_photo_1        = strendal_field( 'ih_flex_photo_1',     $post_id ) ?: [ 'url' => $img_base . '/flex-office.jpg', 'alt' => $IH['flex']['photo_1_caption'] ];
	$flex_photo_1_cap    = strendal_field( 'ih_flex_photo_1_cap', $post_id ) ?: $IH['flex']['photo_1_caption'];
	$flex_photo_2        = strendal_field( 'ih_flex_photo_2',     $post_id ) ?: [ 'url' => $img_base . '/flex-angle.jpg',  'alt' => $IH['flex']['photo_2_caption'] ];
	$flex_photo_2_cap    = strendal_field( 'ih_flex_photo_2_cap', $post_id ) ?: $IH['flex']['photo_2_caption'];
	$raw                 = strendal_field( 'ih_flex_usecases', $post_id ) ?: [];
	$flex_usecases       = $raw
		? array_map( fn( $c ) => [ 'icon' => $c['ih_uc_icon'], 'title' => $c['ih_uc_title'], 'body' => $c['ih_uc_body'] ], $raw )
		: $IH['flex']['usecases'];
}

/* ── Features Grid ── */
$features_use_default = strendal_field( 'ih_features_use_default', $post_id );
if ( $features_use_default || $features_use_default === null ) {
	$features_label = $IH['features']['label'];
	$features_title = $IH['features']['title'];
	$features_cards = $IH['features']['cards'];
} else {
	$features_label = strendal_field( 'ih_features_label', $post_id ) ?: $IH['features']['label'];
	$features_title = strendal_field( 'ih_features_title', $post_id ) ?: $IH['features']['title'];
	$raw            = strendal_field( 'ih_features_cards', $post_id ) ?: [];
	$features_cards = $raw
		? array_map( fn( $c ) => [ 'icon' => $c['ih_fc_icon'], 'title' => $c['ih_fc_title'], 'body' => $c['ih_fc_body'] ], $raw )
		: $IH['features']['cards'];
}

/* ── CTA ── */
$cta_use_default = strendal_field( 'ih_cta_use_default', $post_id );
if ( $cta_use_default || $cta_use_default === null ) {
	$cta_title    = $IH['cta']['title'];
	$cta_body     = $IH['cta']['body'];
	$cta_btn_text = $IH['cta']['btn_text'];
	$cta_btn_url  = $IH['cta']['btn_url'];
} else {
	$cta_title    = strendal_field( 'ih_cta_title',    $post_id ) ?: $IH['cta']['title'];
	$cta_body     = strendal_field( 'ih_cta_body',     $post_id ) ?: $IH['cta']['body'];
	$cta_btn_text = strendal_field( 'ih_cta_btn_text', $post_id ) ?: $IH['cta']['btn_text'];
	$cta_btn_url  = strendal_field( 'ih_cta_btn_url',  $post_id ) ?: $IH['cta']['btn_url'];
}

/* ════════════════════════════════════════════════════════
   RENDER
   ════════════════════════════════════════════════════════ */
get_header();
?>

<!-- ── HERO ── -->
<section class="ih-hero">
  <div class="hero-img"<?php echo $hero_img_style; ?>></div>
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <p class="hero-eyebrow"><?php echo wp_kses_post( $hero_eyebrow ); ?></p>
    <h1 class="hero-title"><?php echo wp_kses_post( $hero_title ); ?></h1>
    <p class="hero-sub"><?php echo wp_kses_post( $hero_sub ); ?></p>
  </div>
</section>

<!-- ── FEATURE STRIP ── -->
<div class="feature-strip">
  <?php foreach ( $feature_items as $item ) : ?>
  <div class="fs-item">
    <span class="fs-icon"><?php echo esc_html( $item['icon'] ); ?></span>
    <span class="fs-text"><?php echo esc_html( $item['text'] ); ?></span>
  </div>
  <?php endforeach; ?>
</div>

<!-- ── ENTRY SECTION ── -->
<section class="entry-section">
  <div class="reveal">
    <p class="section-label"><?php echo esc_html( $entry_label ); ?></p>
    <h2><?php echo wp_kses_post( $entry_title ); ?></h2>
    <?php if ( $entry_body_1 ) : ?><p><?php echo wp_kses_post( $entry_body_1 ); ?></p><?php endif; ?>
    <?php if ( $entry_body_2 ) : ?><p><?php echo wp_kses_post( $entry_body_2 ); ?></p><?php endif; ?>
    <?php if ( $entry_callout_label || $entry_callout_text ) : ?>
    <div class="spice-door-callout">
      <div class="sdc-label"><?php echo esc_html( $entry_callout_label ); ?></div>
      <div class="sdc-text"><?php echo wp_kses_post( $entry_callout_text ); ?></div>
    </div>
    <?php endif; ?>
  </div>
  <?php if ( $entry_photo ) : ?>
  <div class="photo-frame reveal reveal-delay-2">
    <img src="<?php echo esc_url( $entry_photo['url'] ); ?>"
         alt="<?php echo esc_attr( $entry_photo['alt'] ?: $entry_photo_caption ); ?>">
    <div class="photo-caption"><?php echo esc_html( $entry_photo_caption ); ?></div>
  </div>
  <?php endif; ?>
</section>

<!-- ── DARK DIVIDER ── -->
<div class="dark-divider">
  <div class="dd-inner">
    <div class="dd-left reveal"><?php echo wp_kses_post( $divider_quote ); ?></div>
    <div class="dd-right reveal reveal-delay-2">
      <?php if ( $divider_body_1 ) : ?><p><?php echo wp_kses_post( $divider_body_1 ); ?></p><?php endif; ?>
      <?php if ( $divider_body_2 ) : ?><p><?php echo wp_kses_post( $divider_body_2 ); ?></p><?php endif; ?>
    </div>
  </div>
</div>

<!-- ── FLEX ROOM ── -->
<section class="flex-section">
  <div class="flex-inner">
    <div class="flex-header">
      <div class="reveal">
        <p class="section-label"><?php echo esc_html( $flex_label ); ?></p>
        <h2><?php echo wp_kses_post( $flex_title ); ?></h2>
      </div>
      <div class="flex-header-right reveal reveal-delay-1">
        <p><?php echo wp_kses_post( $flex_intro ); ?></p>
      </div>
    </div>
    <div class="flex-photos">
      <?php if ( $flex_photo_1 ) : ?>
      <div class="flex-photo reveal">
        <img src="<?php echo esc_url( $flex_photo_1['url'] ); ?>"
             alt="<?php echo esc_attr( $flex_photo_1['alt'] ?: $flex_photo_1_cap ); ?>">
        <div class="flex-photo-caption"><?php echo esc_html( $flex_photo_1_cap ); ?></div>
      </div>
      <?php endif; ?>
      <?php if ( $flex_photo_2 ) : ?>
      <div class="flex-photo reveal reveal-delay-2">
        <img src="<?php echo esc_url( $flex_photo_2['url'] ); ?>"
             alt="<?php echo esc_attr( $flex_photo_2['alt'] ?: $flex_photo_2_cap ); ?>">
        <div class="flex-photo-caption"><?php echo esc_html( $flex_photo_2_cap ); ?></div>
      </div>
      <?php endif; ?>
    </div>
    <div class="usecase-grid">
      <?php foreach ( $flex_usecases as $i => $uc ) :
        $delay = $i > 0 ? ' reveal-delay-' . min( $i, 4 ) : '';
      ?>
      <div class="usecase-card reveal<?php echo $delay; ?>">
        <div class="uc-icon"><?php echo esc_html( $uc['icon'] ); ?></div>
        <div class="uc-title"><?php echo esc_html( $uc['title'] ); ?></div>
        <div class="uc-body"><?php echo wp_kses_post( $uc['body'] ); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── FEATURES GRID ── -->
<section class="features-section">
  <div class="features-inner">
    <div class="features-header reveal">
      <p class="section-label" style="justify-content:center;"><?php echo esc_html( $features_label ); ?></p>
      <h2><?php echo wp_kses_post( $features_title ); ?></h2>
    </div>
    <div class="features-grid">
      <?php foreach ( $features_cards as $i => $card ) :
        $col   = $i % 3;
        $delay = $col > 0 ? ' reveal-delay-' . $col : '';
      ?>
      <div class="feature-card reveal<?php echo $delay; ?>">
        <div class="fc-icon"><?php echo esc_html( $card['icon'] ); ?></div>
        <div>
          <div class="fc-title"><?php echo esc_html( $card['title'] ); ?></div>
          <div class="fc-body"><?php echo wp_kses_post( $card['body'] ); ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<div class="cta-strip" id="contact">
  <div class="cta-left">
    <h3><?php echo esc_html( $cta_title ); ?></h3>
    <p><?php echo wp_kses_post( $cta_body ); ?></p>
  </div>
  <a href="<?php echo esc_url( $cta_btn_url ); ?>" class="btn-gold"><?php echo esc_html( $cta_btn_text ); ?></a>
</div>

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
  }, { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(function (el) { obs.observe(el); });
})();
</script>
