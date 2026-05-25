<?php
/**
 * Template Name: Ground Floor Bedroom
 * Template Post Type: page
 *
 * Full-page "Ground Floor Bedroom" layout.
 * Each section has a "Content Source" toggle (Default / Custom).
 * Default content extracted from strendal_ground_bedroom.html.
 */

defined( 'ABSPATH' ) || exit;

$post_id   = get_the_ID();
$theme_uri = get_template_directory_uri();
$img_base  = $theme_uri . '/assets/images/ground-bedroom';

if ( ! function_exists( 'strendal_field' ) ) {
	function strendal_field( string $name, int $post_id ) {
		return function_exists( 'get_field' ) ? get_field( $name, $post_id ) : null;
	}
}

/* ════════════════════════════════════════════════════════
   DEFAULT CONTENT
   ════════════════════════════════════════════════════════ */
$GB = [

	'hero' => [
		'eyebrow'       => 'Ground Floor Bedroom',
		'title'         => 'A full bedroom<br>on the<br><em>ground floor.</em>',
		'sub'           => 'Rare in West Cary. More valuable than it looks. A private room on the main level that has been a guest suite, a parent\'s room, a home office, and a child\'s retreat — often more than one at a time.',
		'photo_caption' => 'Ground floor bedroom · Garden view · Full bathroom nearby',
	],

	'value' => [
		'items' => [
			[ 'num' => 'Full',   'label' => 'Bedroom — not a den' ],
			[ 'num' => 'Ground', 'label' => 'Floor — no stairs' ],
			[ 'num' => 'Queen',  'label' => 'Bed fits comfortably' ],
			[ 'num' => 'Garden', 'label' => 'View window' ],
			[ 'num' => 'Rare',   'label' => 'In this neighbourhood' ],
		],
	],

	'story' => [
		'left_label'  => 'Why It Matters',
		'left_title'  => 'Most homes don\'t have this.<br><em>Most families wish they did.</em>',
		'left_paras'  => [
			'A full bedroom on the ground floor is one of those features that sounds simple until you actually need it. Visiting parents who can\'t manage stairs. A family member recovering from surgery. A child who needs to be close. A guest who deserves their own space.',
			'At 4007 Strendal, this room has been all of those things across fourteen years. It\'s a proper bedroom — window, closet, carpet, queen bed — not a converted study or a room that\'s technically a bedroom only on the floorplan.',
		],
		'rc_label' => 'Location Advantage',
		'rc_text'  => 'The room sits at the end of the ground floor corridor — private from the living areas, close to the full bathroom, with a window looking out to the garden. Quiet, separated, and genuinely self-contained.',
		'right_label' => 'The Room',
		'right_title' => 'Comfortable.<br><em>Adaptable. Private.</em>',
		'right_paras' => [
			'The photograph shows how this family uses it today — queen bed alongside a working desk, both fitting with room to spare. The window looks toward the garden. Natural light comes in from the side.',
			'The carpet distinguishes it from the hardwood of the main living areas — quieter underfoot, warmer in winter, better for a sleeping space. Crown moulding carries through from the rest of the ground floor.',
			'It\'s a room that works. And in a two-person-working-from-home, multi-generational family, a room that works is one of the most valuable things a house can offer.',
		],
	],

	'usecases' => [
		'header_label' => 'How It\'s Been Used',
		'header_title' => 'One room. Fourteen years.<br><em>Many different lives.</em>',
		'cards' => [
			[ 'icon' => '👴', 'title' => 'Parents\' Suite',  'body' => 'Visiting parents from across the world have stayed here comfortably — no stairs, full privacy, close to the bathroom.' ],
			[ 'icon' => '💼', 'title' => 'Private Office',   'body' => 'A door that closes, a window with a view, space for a full desk setup. The quietest workspace in the house.' ],
			[ 'icon' => '🛏️', 'title' => 'Guest Room',       'body' => 'Guests have their own floor, their own space. The separation from the upstairs bedrooms gives everyone privacy.' ],
			[ 'icon' => '🧘', 'title' => 'Quiet Retreat',    'body' => 'Prayer room, meditation space, reading room. Away from the activity of the open ground floor — but still on it.' ],
		],
		'lived_icon' => '🏠',
		'lived_text' => 'This room has served as a <strong>parent\'s bedroom, a home office, and a child\'s study room</strong> — sometimes switching roles within the same year. That adaptability is what makes a ground floor bedroom genuinely rare.',
	],

	'quote' => [
		'text' => 'Two rooms on the main floor mean endless possibilities. Whatever your family needs, this space adapts.',
		'attr' => 'Ground floor flexibility · 4007 Strendal Dr · Cary, NC',
	],

	'details' => [
		'cards' => [
			[ 'icon' => '🪟', 'title' => 'Garden-View Window',      'body' => 'A full window looking toward the garden — natural light, greenery, and the same chemical-free outdoor space the rest of the home enjoys.' ],
			[ 'icon' => '🛏️', 'title' => 'Queen Bed Comfortable',   'body' => 'The room accommodates a queen bed and a full desk setup with space remaining — genuinely proportioned, not a squeeze.' ],
			[ 'icon' => '🚿', 'title' => 'Full Bathroom Nearby',    'body' => 'A full bathroom is steps away on the ground floor — making this room truly self-sufficient for any occupant.' ],
			[ 'icon' => '🔇', 'title' => 'Carpet — Quieter',        'body' => 'Carpet distinguishes this room from the hardwood of the living areas — warmer, quieter, and better suited to a sleeping space.' ],
			[ 'icon' => '🔒', 'title' => 'Private &amp; Separated', 'body' => 'At the end of the ground floor corridor, away from the open living areas. Private without being isolated — the right balance.' ],
			[ 'icon' => '🏠', 'title' => 'Ground Floor — No Stairs','body' => 'For aging parents, recovering family members, or anyone who shouldn\'t navigate stairs — this is not a small thing.' ],
		],
	],

	'cta' => [
		'title'    => 'See the whole ground floor in person.',
		'body'     => 'The ground floor bedroom is just one part of what makes this home genuinely flexible. Schedule a private tour of 4007 Strendal Drive and walk through all of it yourself.',
		'btn_text' => 'Schedule a Private Tour',
		'btn_url'  => '#contact',
	],

];

/* ════════════════════════════════════════════════════════
   FIELD RESOLUTION
   ════════════════════════════════════════════════════════ */

/* ── Hero ── */
$hero_use_default = strendal_field( 'gb_hero_use_default', $post_id );
if ( $hero_use_default || $hero_use_default === null ) {
	$hero_eyebrow       = $GB['hero']['eyebrow'];
	$hero_title         = $GB['hero']['title'];
	$hero_sub           = $GB['hero']['sub'];
	$hero_photo         = [ 'url' => $img_base . '/bedroom-photo.jpg', 'alt' => $GB['hero']['photo_caption'] ];
	$hero_photo_caption = $GB['hero']['photo_caption'];
} else {
	$hero_eyebrow       = strendal_field( 'gb_hero_eyebrow',       $post_id ) ?: $GB['hero']['eyebrow'];
	$hero_title         = strendal_field( 'gb_hero_title',         $post_id ) ?: $GB['hero']['title'];
	$hero_sub           = strendal_field( 'gb_hero_sub',           $post_id ) ?: $GB['hero']['sub'];
	$hero_photo         = strendal_field( 'gb_hero_photo',         $post_id );
	$hero_photo_caption = strendal_field( 'gb_hero_photo_caption', $post_id ) ?: $GB['hero']['photo_caption'];
}

/* ── Value Strip ── */
$value_use_default = strendal_field( 'gb_value_use_default', $post_id );
if ( $value_use_default || $value_use_default === null ) {
	$value_items = $GB['value']['items'];
} else {
	$raw = strendal_field( 'gb_value_items', $post_id ) ?: [];
	$value_items = $raw
		? array_map( fn( $v ) => [ 'num' => $v['vs_num'], 'label' => $v['vs_label'] ], $raw )
		: $GB['value']['items'];
}

/* ── Story ── */
$story_use_default = strendal_field( 'gb_story_use_default', $post_id );
if ( $story_use_default || $story_use_default === null ) {
	$story_left_label  = $GB['story']['left_label'];
	$story_left_title  = $GB['story']['left_title'];
	$story_left_paras  = $GB['story']['left_paras'];
	$story_rc_label    = $GB['story']['rc_label'];
	$story_rc_text     = $GB['story']['rc_text'];
	$story_right_label = $GB['story']['right_label'];
	$story_right_title = $GB['story']['right_title'];
	$story_right_paras = $GB['story']['right_paras'];
} else {
	$story_left_label  = strendal_field( 'gb_story_left_label',  $post_id ) ?: $GB['story']['left_label'];
	$story_left_title  = strendal_field( 'gb_story_left_title',  $post_id ) ?: $GB['story']['left_title'];
	$raw               = strendal_field( 'gb_story_left_paras',  $post_id ) ?: [];
	$story_left_paras  = $raw ? array_column( $raw, 'paragraph' ) : $GB['story']['left_paras'];
	$story_rc_label    = strendal_field( 'gb_story_rc_label',    $post_id ) ?: $GB['story']['rc_label'];
	$story_rc_text     = strendal_field( 'gb_story_rc_text',     $post_id ) ?: $GB['story']['rc_text'];
	$story_right_label = strendal_field( 'gb_story_right_label', $post_id ) ?: $GB['story']['right_label'];
	$story_right_title = strendal_field( 'gb_story_right_title', $post_id ) ?: $GB['story']['right_title'];
	$raw               = strendal_field( 'gb_story_right_paras', $post_id ) ?: [];
	$story_right_paras = $raw ? array_column( $raw, 'paragraph' ) : $GB['story']['right_paras'];
}

/* ── Use Cases ── */
$uc_use_default = strendal_field( 'gb_uc_use_default', $post_id );
if ( $uc_use_default || $uc_use_default === null ) {
	$uc_header_label = $GB['usecases']['header_label'];
	$uc_header_title = $GB['usecases']['header_title'];
	$uc_cards        = $GB['usecases']['cards'];
	$uc_lived_icon   = $GB['usecases']['lived_icon'];
	$uc_lived_text   = $GB['usecases']['lived_text'];
} else {
	$uc_header_label = strendal_field( 'gb_uc_header_label', $post_id ) ?: $GB['usecases']['header_label'];
	$uc_header_title = strendal_field( 'gb_uc_header_title', $post_id ) ?: $GB['usecases']['header_title'];
	$raw             = strendal_field( 'gb_uc_cards',         $post_id ) ?: [];
	$uc_cards        = $raw
		? array_map( fn( $c ) => [ 'icon' => $c['uc_icon'], 'title' => $c['uc_title'], 'body' => $c['uc_body'] ], $raw )
		: $GB['usecases']['cards'];
	$uc_lived_icon   = strendal_field( 'gb_uc_lived_icon',   $post_id ) ?: $GB['usecases']['lived_icon'];
	$uc_lived_text   = strendal_field( 'gb_uc_lived_text',   $post_id ) ?: $GB['usecases']['lived_text'];
}

/* ── Quote ── */
$quote_use_default = strendal_field( 'gb_quote_use_default', $post_id );
if ( $quote_use_default || $quote_use_default === null ) {
	$quote_text = $GB['quote']['text'];
	$quote_attr = $GB['quote']['attr'];
} else {
	$quote_text = strendal_field( 'gb_quote_text', $post_id ) ?: $GB['quote']['text'];
	$quote_attr = strendal_field( 'gb_quote_attr', $post_id ) ?: $GB['quote']['attr'];
}

/* ── Details ── */
$details_use_default = strendal_field( 'gb_details_use_default', $post_id );
if ( $details_use_default || $details_use_default === null ) {
	$details_cards = $GB['details']['cards'];
} else {
	$raw           = strendal_field( 'gb_details_cards', $post_id ) ?: [];
	$details_cards = $raw
		? array_map( fn( $c ) => [ 'icon' => $c['dc_icon'], 'title' => $c['dc_title'], 'body' => $c['dc_body'] ], $raw )
		: $GB['details']['cards'];
}

/* ── CTA ── */
$cta_use_default = strendal_field( 'gb_cta_use_default', $post_id );
if ( $cta_use_default || $cta_use_default === null ) {
	$cta_title    = $GB['cta']['title'];
	$cta_body     = $GB['cta']['body'];
	$cta_btn_text = $GB['cta']['btn_text'];
	$cta_btn_url  = $GB['cta']['btn_url'];
} else {
	$cta_title    = strendal_field( 'gb_cta_title',    $post_id ) ?: $GB['cta']['title'];
	$cta_body     = strendal_field( 'gb_cta_body',     $post_id ) ?: $GB['cta']['body'];
	$cta_btn_text = strendal_field( 'gb_cta_btn_text', $post_id ) ?: $GB['cta']['btn_text'];
	$cta_btn_url  = strendal_field( 'gb_cta_btn_url',  $post_id ) ?: $GB['cta']['btn_url'];
}

/* ════════════════════════════════════════════════════════
   RENDER
   ════════════════════════════════════════════════════════ */
get_header();
?>

<!-- ── HERO ── -->
<section class="gb-hero">
  <div class="hero-bg"></div>
  <div class="hero-grid"></div>
  <?php if ( $hero_photo ) : ?>
  <div class="hero-photo-wrap">
    <img src="<?php echo esc_url( $hero_photo['url'] ); ?>"
         alt="<?php echo esc_attr( $hero_photo['alt'] ?: $hero_photo_caption ); ?>">
    <div class="hero-photo-caption"><?php echo esc_html( $hero_photo_caption ); ?></div>
  </div>
  <?php endif; ?>
  <div class="hero-content">
    <p class="hero-eyebrow"><?php echo wp_kses_post( $hero_eyebrow ); ?></p>
    <h1 class="hero-title"><?php echo wp_kses_post( $hero_title ); ?></h1>
    <p class="hero-sub"><?php echo wp_kses_post( $hero_sub ); ?></p>
  </div>
</section>

<!-- ── VALUE STRIP ── -->
<div class="value-strip">
  <?php foreach ( $value_items as $item ) : ?>
    <div class="vs-item">
      <div class="vs-num"><?php echo wp_kses_post( $item['num'] ); ?></div>
      <div class="vs-label"><?php echo wp_kses_post( $item['label'] ); ?></div>
    </div>
  <?php endforeach; ?>
</div>

<!-- ── STORY ── -->
<section class="story-section">
  <div class="reveal">
    <p class="section-label"><?php echo esc_html( $story_left_label ); ?></p>
    <h2><?php echo wp_kses_post( $story_left_title ); ?></h2>
    <?php foreach ( $story_left_paras as $para ) : ?>
      <p><?php echo wp_kses_post( $para ); ?></p>
    <?php endforeach; ?>
    <div class="rarity-callout">
      <div class="rc-label"><?php echo esc_html( $story_rc_label ); ?></div>
      <div class="rc-text"><?php echo wp_kses_post( $story_rc_text ); ?></div>
    </div>
  </div>
  <div class="reveal reveal-delay-2" style="padding-top:8px;">
    <p class="section-label"><?php echo esc_html( $story_right_label ); ?></p>
    <h2><?php echo wp_kses_post( $story_right_title ); ?></h2>
    <?php foreach ( $story_right_paras as $para ) : ?>
      <p><?php echo wp_kses_post( $para ); ?></p>
    <?php endforeach; ?>
  </div>
</section>

<!-- ── USE CASES ── -->
<section class="usecases-section">
  <div class="usecases-inner">
    <div class="uc-header reveal">
      <p class="section-label" style="justify-content:center;"><?php echo esc_html( $uc_header_label ); ?></p>
      <h2><?php echo wp_kses_post( $uc_header_title ); ?></h2>
    </div>
    <div class="uc-grid">
      <?php foreach ( $uc_cards as $i => $card ) : ?>
        <?php $delay = $i > 0 ? ' reveal-delay-' . min( $i, 4 ) : ''; ?>
        <div class="uc-card reveal<?php echo $delay; ?>">
          <div class="uc-icon"><?php echo wp_kses_post( $card['icon'] ); ?></div>
          <div class="uc-title"><?php echo esc_html( $card['title'] ); ?></div>
          <div class="uc-body"><?php echo wp_kses_post( $card['body'] ); ?></div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="lived-note reveal">
      <span class="ln-icon"><?php echo wp_kses_post( $uc_lived_icon ); ?></span>
      <span class="ln-text"><?php echo wp_kses_post( $uc_lived_text ); ?></span>
    </div>
  </div>
</section>

<!-- ── QUOTE ── -->
<section class="quote-section">
  <div class="quote-inner reveal">
    <span class="quote-mark">&ldquo;</span>
    <p class="quote-text"><?php echo wp_kses_post( $quote_text ); ?></p>
    <p class="quote-attr"><?php echo wp_kses_post( $quote_attr ); ?></p>
  </div>
</section>

<!-- ── ROOM DETAILS ── -->
<section class="details-section">
  <div class="details-inner">
    <?php foreach ( $details_cards as $i => $card ) : ?>
      <?php $delay = ( $i % 3 > 0 ) ? ' reveal-delay-' . ( $i % 3 ) : ''; ?>
      <div class="detail-card reveal<?php echo $delay; ?>">
        <div class="dc-icon"><?php echo wp_kses_post( $card['icon'] ); ?></div>
        <div>
          <div class="dc-title"><?php echo esc_html( $card['title'] ); ?></div>
          <div class="dc-body"><?php echo wp_kses_post( $card['body'] ); ?></div>
        </div>
      </div>
    <?php endforeach; ?>
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

<?php get_template_part( 'template-parts/editor-content' ); ?>

<?php get_footer(); ?>

<script>
(function () {
  var reveals = document.querySelectorAll('.gb-hero ~ * .reveal, .gb-hero ~ .reveal, .story-section .reveal, .usecases-section .reveal, .quote-section .reveal, .details-section .reveal');
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
