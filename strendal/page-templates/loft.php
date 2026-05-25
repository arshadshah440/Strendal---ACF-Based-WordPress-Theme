<?php
/**
 * Template Name: The Open Loft
 * Template Post Type: page
 *
 * Full-page "The Open Loft" layout.
 * Each section has a "Content Source" toggle (Default / Custom).
 * Default content extracted from strendal_loft.html.
 */

defined( 'ABSPATH' ) || exit;

$post_id  = get_the_ID();
$img_base = get_template_directory_uri() . '/assets/images/loft';

if ( ! function_exists( 'strendal_field' ) ) {
	function strendal_field( string $name, int $post_id ) {
		return function_exists( 'get_field' ) ? get_field( $name, $post_id ) : null;
	}
}

/* ════════════════════════════════════════════════════════
   DEFAULT CONTENT
   ════════════════════════════════════════════════════════ */
$LO = [

	'hero' => [
		'eyebrow' => 'The Open Loft · Upper Floor',
		'title'   => 'Top of the golden staircase.<br><em>A room without limits.</em>',
		'sub'     => 'Step off the staircase and the whole upper floor opens up. A generous, light-filled loft that has been a media room, an entertainment space, a home gym, and a family hangout — sometimes all at once.',
		'bg'      => [ 'url' => $img_base . '/hero-bg.jpg', 'alt' => '' ],
	],

	'features' => [
		[ 'icon' => '🪟', 'text' => 'Triple windows',          'sub' => 'Neighbourhood views' ],
		[ 'icon' => '📺', 'text' => 'Media room ready',        'sub' => 'Surround sound wired' ],
		[ 'icon' => '🔊', 'text' => 'In-wall surround wiring', 'sub' => 'Both floors' ],
		[ 'icon' => '🔗', 'text' => 'Open to staircase',       'sub' => 'Half-wall landing' ],
		[ 'icon' => '🔄', 'text' => 'Multiple uses',           'sub' => 'Flex without walls' ],
	],

	'intro' => [
		'label'          => 'The Loft',
		'title'          => 'The upper floor begins<br><em>with a surprise.</em>',
		'body_1'         => 'Most homes have a landing at the top of the stairs — a narrow corridor leading to bedroom doors. At 4007 Strendal, the staircase opens into a full, open loft. No corridor. No narrow passage. A proper room, with triple windows looking over the neighbourhood and enough space to define entirely on your own terms.',
		'body_2'         => 'The half-wall railing creates a connection to the staircase below — open, airy, and architecturally interesting — without sacrificing the usability of the space. It feels like an arrival, not just a landing.',
		'callout_label'  => 'The Golden Staircase',
		'callout_text'   => 'The warm hardwood staircase with white balustrade rises directly into this loft — so the first thing you see as you come upstairs is light, space, and windows. It sets the tone for the entire upper floor.',
		'photo'          => [ 'url' => $img_base . '/loft-intro.jpg', 'alt' => 'Loft interior', 'caption' => 'Loft · TV &amp; surround sound setup · Staircase railing beyond' ],
	],

	'usecases' => [
		'label' => 'How This Space Can Live',
		'title' => 'One open room.<br><em>Every family uses it differently.</em>',
		'cards' => [
			[ 'icon' => '🎬', 'title' => 'Media &amp; Entertainment', 'body' => 'The surround sound wiring is already in the walls. A large screen, a proper speaker setup, comfortable seating — the loft is ready to become the best media room in the neighbourhood.',  'tag' => 'Surround sound pre-wired' ],
			[ 'icon' => '🎮', 'title' => 'Games &amp; Play Room',     'body' => 'Carpet underfoot, space to spread out, a room separated from the main living areas — an ideal dedicated play space for children or gaming setup for the whole family.',                          'tag' => 'Carpet · Away from main floor' ],
			[ 'icon' => '💼', 'title' => 'Home Office Corner',        'body' => 'The loft is large enough to carve out a dedicated work area alongside the main use. Triple windows provide excellent natural light — and the ethernet runs to this floor too.',                    'tag' => 'Hardwired internet · Natural light' ],
		],
		'sound_icon' => '🔊',
		'sound_text' => '<strong>Surround sound wiring is already in-wall on both floors.</strong> No retrofitting, no cables to hide. Your entertainment system goes straight in — on this floor and on the ground floor below.',
	],

	'photo_section' => [
		'label'  => 'The Space',
		'title'  => 'Large windows.<br><em>Genuine room to breathe.</em>',
		'body_1' => 'The triple window runs nearly the full width of the front wall — bringing in daylight and a view over the quiet cul-de-sac neighbourhood. On a clear day the sky is the backdrop to the room.',
		'body_2' => 'The full depth of the loft, visible in this shot, shows what\'s possible — the main seating area, the shelving wall for display and storage, and still room for a separate zone if you want one. The space is wider than it photographs.',
		'chips'  => [ 'Triple front windows', 'Carpet throughout', 'Built-in shelving wall', 'Half-wall staircase view', 'Recessed lighting', 'Hardwired internet' ],
		'photo'  => [ 'url' => $img_base . '/loft-wide.jpg', 'alt' => 'Full loft width', 'caption' => 'Full loft width · Triple windows · Neighbourhood views' ],
	],

	'quote' => [
		'text' => 'Upstairs, a large open loft becomes your entertainment hub — while the bedrooms give everyone their own retreat.',
		'attr' => 'Upper floor · 4007 Strendal Dr · Cary, NC',
	],

	'upstairs' => [
		'label' => 'The Upper Floor',
		'title' => 'The loft is the gateway to<br><em>everything upstairs.</em>',
		'rooms' => [
			[ 'icon' => '🛋️', 'name' => 'Open Loft',    'note' => 'You are here · Entertainment &amp; flex', 'active' => true ],
			[ 'icon' => '🛏️', 'name' => 'Master Suite', 'note' => 'Garden tub · separate shower',            'active' => false ],
			[ 'icon' => '🛏️', 'name' => 'Bedroom 2',    'note' => 'Upper floor · natural light',             'active' => false ],
			[ 'icon' => '🛏️', 'name' => 'Bedroom 3',    'note' => 'Upper floor · natural light',             'active' => false ],
		],
	],

	'cta' => [
		'title'    => 'Come and stand at the top of the stairs.',
		'body'     => 'The loft is one of those spaces that reads better in person than in photographs. Schedule a private tour of 4007 Strendal Drive and walk the whole upper floor yourself.',
		'btn_text' => 'Schedule a Private Tour',
		'btn_url'  => 'tel:+19190000000',
	],

];

/* ════════════════════════════════════════════════════════
   FIELD RESOLUTION
   ════════════════════════════════════════════════════════ */

/* ── Hero ── */
$hero_use_default = strendal_field( 'lo_hero_use_default', $post_id );
if ( $hero_use_default || $hero_use_default === null ) {
	$hero_eyebrow = $LO['hero']['eyebrow'];
	$hero_title   = $LO['hero']['title'];
	$hero_sub     = $LO['hero']['sub'];
	$hero_bg      = $LO['hero']['bg'];
} else {
	$hero_eyebrow = strendal_field( 'lo_hero_eyebrow', $post_id ) ?: $LO['hero']['eyebrow'];
	$hero_title   = strendal_field( 'lo_hero_title',   $post_id ) ?: $LO['hero']['title'];
	$hero_sub     = strendal_field( 'lo_hero_sub',     $post_id ) ?: $LO['hero']['sub'];
	$raw_bg       = strendal_field( 'lo_hero_bg',      $post_id );
	$hero_bg      = $raw_bg ?: $LO['hero']['bg'];
}
$hero_img_style = ! empty( $hero_bg['url'] )
	? ' style="background-image:url(\'' . esc_url( $hero_bg['url'] ) . '\')"'
	: '';

/* ── Feature Strip ── */
$feat_use_default = strendal_field( 'lo_feat_use_default', $post_id );
if ( $feat_use_default || $feat_use_default === null ) {
	$features = $LO['features'];
} else {
	$raw      = strendal_field( 'lo_features', $post_id ) ?: [];
	$features = $raw
		? array_map( fn( $v ) => [ 'icon' => $v['lo_feat_icon'], 'text' => $v['lo_feat_text'], 'sub' => $v['lo_feat_sub'] ], $raw )
		: $LO['features'];
}

/* ── Intro ── */
$intro_use_default = strendal_field( 'lo_intro_use_default', $post_id );
if ( $intro_use_default || $intro_use_default === null ) {
	$intro_label         = $LO['intro']['label'];
	$intro_title         = $LO['intro']['title'];
	$intro_body_1        = $LO['intro']['body_1'];
	$intro_body_2        = $LO['intro']['body_2'];
	$intro_callout_label = $LO['intro']['callout_label'];
	$intro_callout_text  = $LO['intro']['callout_text'];
	$intro_photo         = $LO['intro']['photo'];
} else {
	$intro_label         = strendal_field( 'lo_intro_label',         $post_id ) ?: $LO['intro']['label'];
	$intro_title         = strendal_field( 'lo_intro_title',         $post_id ) ?: $LO['intro']['title'];
	$intro_body_1        = strendal_field( 'lo_intro_body_1',        $post_id ) ?: $LO['intro']['body_1'];
	$intro_body_2        = strendal_field( 'lo_intro_body_2',        $post_id ) ?: $LO['intro']['body_2'];
	$intro_callout_label = strendal_field( 'lo_intro_callout_label', $post_id ) ?: $LO['intro']['callout_label'];
	$intro_callout_text  = strendal_field( 'lo_intro_callout_text',  $post_id ) ?: $LO['intro']['callout_text'];
	$raw_photo           = strendal_field( 'lo_intro_photo',         $post_id );
	$intro_photo         = $raw_photo
		? [ 'url' => $raw_photo['url'], 'alt' => $raw_photo['alt'], 'caption' => strendal_field( 'lo_intro_photo_caption', $post_id ) ?: $LO['intro']['photo']['caption'] ]
		: $LO['intro']['photo'];
}

/* ── Use Cases ── */
$uc_use_default = strendal_field( 'lo_uc_use_default', $post_id );
if ( $uc_use_default || $uc_use_default === null ) {
	$uc_label      = $LO['usecases']['label'];
	$uc_title      = $LO['usecases']['title'];
	$uc_cards      = $LO['usecases']['cards'];
	$uc_sound_icon = $LO['usecases']['sound_icon'];
	$uc_sound_text = $LO['usecases']['sound_text'];
} else {
	$uc_label      = strendal_field( 'lo_uc_label',      $post_id ) ?: $LO['usecases']['label'];
	$uc_title      = strendal_field( 'lo_uc_title',      $post_id ) ?: $LO['usecases']['title'];
	$uc_sound_icon = strendal_field( 'lo_uc_sound_icon', $post_id ) ?: $LO['usecases']['sound_icon'];
	$uc_sound_text = strendal_field( 'lo_uc_sound_text', $post_id ) ?: $LO['usecases']['sound_text'];
	$raw_cards     = strendal_field( 'lo_uc_cards',      $post_id ) ?: [];
	$uc_cards      = $raw_cards
		? array_map( fn( $v ) => [ 'icon' => $v['lo_uc_card_icon'], 'title' => $v['lo_uc_card_title'], 'body' => $v['lo_uc_card_body'], 'tag' => $v['lo_uc_card_tag'] ], $raw_cards )
		: $LO['usecases']['cards'];
}

/* ── Photo Section ── */
$ps_use_default = strendal_field( 'lo_ps_use_default', $post_id );
if ( $ps_use_default || $ps_use_default === null ) {
	$ps_label = $LO['photo_section']['label'];
	$ps_title = $LO['photo_section']['title'];
	$ps_body_1 = $LO['photo_section']['body_1'];
	$ps_body_2 = $LO['photo_section']['body_2'];
	$ps_chips  = $LO['photo_section']['chips'];
	$ps_photo  = $LO['photo_section']['photo'];
} else {
	$ps_label  = strendal_field( 'lo_ps_label',  $post_id ) ?: $LO['photo_section']['label'];
	$ps_title  = strendal_field( 'lo_ps_title',  $post_id ) ?: $LO['photo_section']['title'];
	$ps_body_1 = strendal_field( 'lo_ps_body_1', $post_id ) ?: $LO['photo_section']['body_1'];
	$ps_body_2 = strendal_field( 'lo_ps_body_2', $post_id ) ?: $LO['photo_section']['body_2'];
	$raw_chips = strendal_field( 'lo_ps_chips',  $post_id ) ?: [];
	$ps_chips  = $raw_chips ? array_column( $raw_chips, 'lo_ps_chip' ) : $LO['photo_section']['chips'];
	$raw_photo = strendal_field( 'lo_ps_photo',  $post_id );
	$ps_photo  = $raw_photo
		? [ 'url' => $raw_photo['url'], 'alt' => $raw_photo['alt'], 'caption' => strendal_field( 'lo_ps_photo_caption', $post_id ) ?: $LO['photo_section']['photo']['caption'] ]
		: $LO['photo_section']['photo'];
}

/* ── Dark Quote ── */
$quote_use_default = strendal_field( 'lo_quote_use_default', $post_id );
if ( $quote_use_default || $quote_use_default === null ) {
	$quote_text = $LO['quote']['text'];
	$quote_attr = $LO['quote']['attr'];
} else {
	$quote_text = strendal_field( 'lo_quote_text', $post_id ) ?: $LO['quote']['text'];
	$quote_attr = strendal_field( 'lo_quote_attr', $post_id ) ?: $LO['quote']['attr'];
}

/* ── Upstairs Map ── */
$up_use_default = strendal_field( 'lo_up_use_default', $post_id );
if ( $up_use_default || $up_use_default === null ) {
	$up_label = $LO['upstairs']['label'];
	$up_title = $LO['upstairs']['title'];
	$up_rooms = $LO['upstairs']['rooms'];
} else {
	$up_label  = strendal_field( 'lo_up_label', $post_id ) ?: $LO['upstairs']['label'];
	$up_title  = strendal_field( 'lo_up_title', $post_id ) ?: $LO['upstairs']['title'];
	$raw_rooms = strendal_field( 'lo_up_rooms', $post_id ) ?: [];
	$up_rooms  = $raw_rooms
		? array_map( fn( $v ) => [ 'icon' => $v['lo_up_room_icon'], 'name' => $v['lo_up_room_name'], 'note' => $v['lo_up_room_note'], 'active' => ! empty( $v['lo_up_room_active'] ) ], $raw_rooms )
		: $LO['upstairs']['rooms'];
}

/* ── CTA ── */
$cta_use_default = strendal_field( 'lo_cta_use_default', $post_id );
if ( $cta_use_default || $cta_use_default === null ) {
	$cta_title    = $LO['cta']['title'];
	$cta_body     = $LO['cta']['body'];
	$cta_btn_text = $LO['cta']['btn_text'];
	$cta_btn_url  = $LO['cta']['btn_url'];
} else {
	$cta_title    = strendal_field( 'lo_cta_title',    $post_id ) ?: $LO['cta']['title'];
	$cta_body     = strendal_field( 'lo_cta_body',     $post_id ) ?: $LO['cta']['body'];
	$cta_btn_text = strendal_field( 'lo_cta_btn_text', $post_id ) ?: $LO['cta']['btn_text'];
	$cta_btn_url  = strendal_field( 'lo_cta_btn_url',  $post_id ) ?: $LO['cta']['btn_url'];
}

/* ════════════════════════════════════════════════════════
   RENDER
   ════════════════════════════════════════════════════════ */
get_header();
?>

<!-- ── HERO ── -->
<section class="lo-hero">
  <div class="hero-img"<?php echo $hero_img_style; ?>></div>
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <p class="hero-eyebrow"><?php echo esc_html( $hero_eyebrow ); ?></p>
    <h1 class="hero-title"><?php echo wp_kses_post( $hero_title ); ?></h1>
    <p class="hero-sub"><?php echo esc_html( $hero_sub ); ?></p>
  </div>
</section>

<!-- ── FEATURE STRIP ── -->
<div class="lo-feature-strip">
  <?php foreach ( $features as $f ) : ?>
  <div class="lo-fs-item">
    <span class="lo-fs-icon"><?php echo esc_html( $f['icon'] ); ?></span>
    <div>
      <div class="lo-fs-text"><?php echo wp_kses_post( $f['text'] ); ?></div>
      <div class="lo-fs-sub"><?php echo esc_html( $f['sub'] ); ?></div>
    </div>
  </div>
  <?php endforeach; ?>
</div>

<!-- ── INTRO ── -->
<section class="lo-intro">
  <div class="reveal">
    <p class="lo-section-label"><?php echo esc_html( $intro_label ); ?></p>
    <h2><?php echo wp_kses_post( $intro_title ); ?></h2>
    <?php if ( $intro_body_1 ) : ?><p><?php echo esc_html( $intro_body_1 ); ?></p><?php endif; ?>
    <?php if ( $intro_body_2 ) : ?><p><?php echo esc_html( $intro_body_2 ); ?></p><?php endif; ?>
    <?php if ( $intro_callout_label || $intro_callout_text ) : ?>
    <div class="lo-stair-callout">
      <?php if ( $intro_callout_label ) : ?>
      <div class="lo-sc-label"><?php echo esc_html( $intro_callout_label ); ?></div>
      <?php endif; ?>
      <?php if ( $intro_callout_text ) : ?>
      <div class="lo-sc-text"><?php echo esc_html( $intro_callout_text ); ?></div>
      <?php endif; ?>
    </div>
    <?php endif; ?>
  </div>
  <div class="lo-photo-frame reveal reveal-delay-2">
    <?php if ( ! empty( $intro_photo['url'] ) ) : ?>
    <img src="<?php echo esc_url( $intro_photo['url'] ); ?>"
         alt="<?php echo esc_attr( $intro_photo['alt'] ); ?>">
    <?php endif; ?>
    <?php if ( ! empty( $intro_photo['caption'] ) ) : ?>
    <div class="lo-photo-caption"><?php echo wp_kses_post( $intro_photo['caption'] ); ?></div>
    <?php endif; ?>
  </div>
</section>

<!-- ── USE CASES ── -->
<section class="lo-usecases-section">
  <div class="lo-usecases-inner">
    <div class="lo-uc-header reveal">
      <p class="lo-uc-label"><?php echo esc_html( $uc_label ); ?></p>
      <h2><?php echo wp_kses_post( $uc_title ); ?></h2>
    </div>
    <div class="lo-uc-grid">
      <?php foreach ( $uc_cards as $i => $card ) :
        $delay = $i > 0 ? ' reveal-delay-' . $i : '';
      ?>
      <div class="lo-uc-card reveal<?php echo $delay; ?>">
        <div class="lo-uc-icon"><?php echo esc_html( $card['icon'] ); ?></div>
        <div class="lo-uc-title"><?php echo wp_kses_post( $card['title'] ); ?></div>
        <div class="lo-uc-body"><?php echo esc_html( $card['body'] ); ?></div>
        <?php if ( ! empty( $card['tag'] ) ) : ?>
        <span class="lo-uc-tag"><?php echo esc_html( $card['tag'] ); ?></span>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
    <?php if ( $uc_sound_icon || $uc_sound_text ) : ?>
    <div class="lo-sound-callout reveal">
      <?php if ( $uc_sound_icon ) : ?>
      <span class="lo-sound-icon"><?php echo esc_html( $uc_sound_icon ); ?></span>
      <?php endif; ?>
      <?php if ( $uc_sound_text ) : ?>
      <span class="lo-sound-text"><?php echo wp_kses_post( $uc_sound_text ); ?></span>
      <?php endif; ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<!-- ── PHOTO SECTION ── -->
<section class="lo-photo-section">
  <div class="lo-photo-section-inner">
    <div class="lo-photo-frame reveal">
      <?php if ( ! empty( $ps_photo['url'] ) ) : ?>
      <img src="<?php echo esc_url( $ps_photo['url'] ); ?>"
           alt="<?php echo esc_attr( $ps_photo['alt'] ); ?>">
      <?php endif; ?>
      <?php if ( ! empty( $ps_photo['caption'] ) ) : ?>
      <div class="lo-photo-caption"><?php echo wp_kses_post( $ps_photo['caption'] ); ?></div>
      <?php endif; ?>
    </div>
    <div class="reveal reveal-delay-2">
      <p class="lo-section-label"><?php echo esc_html( $ps_label ); ?></p>
      <h2><?php echo wp_kses_post( $ps_title ); ?></h2>
      <?php if ( $ps_body_1 ) : ?><p><?php echo esc_html( $ps_body_1 ); ?></p><?php endif; ?>
      <?php if ( $ps_body_2 ) : ?><p><?php echo esc_html( $ps_body_2 ); ?></p><?php endif; ?>
      <?php if ( $ps_chips ) : ?>
      <div class="lo-detail-chips">
        <?php foreach ( $ps_chips as $chip ) : ?>
        <span class="lo-chip"><?php echo esc_html( $chip ); ?></span>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ── DARK QUOTE ── -->
<section class="lo-quote-section">
  <div class="lo-quote-inner reveal">
    <span class="lo-quote-mark">"</span>
    <p class="lo-quote-text"><?php echo esc_html( $quote_text ); ?></p>
    <p class="lo-quote-attr"><?php echo esc_html( $quote_attr ); ?></p>
  </div>
</section>

<!-- ── UPSTAIRS MAP ── -->
<section class="lo-upstairs-section">
  <div class="lo-upstairs-inner">
    <div class="lo-upstairs-header reveal">
      <p class="lo-section-label" style="justify-content:center;"><?php echo esc_html( $up_label ); ?></p>
      <h2><?php echo wp_kses_post( $up_title ); ?></h2>
    </div>
    <div class="lo-floor-grid">
      <?php foreach ( $up_rooms as $i => $room ) :
        $delay   = $i > 0 ? ' reveal-delay-' . $i : '';
        $active  = ! empty( $room['active'] ) ? ' active' : '';
      ?>
      <div class="lo-floor-item<?php echo $active; ?> reveal<?php echo $delay; ?>">
        <div class="lo-fi-icon"><?php echo esc_html( $room['icon'] ); ?></div>
        <div class="lo-fi-name"><?php echo esc_html( $room['name'] ); ?></div>
        <div class="lo-fi-note"><?php echo wp_kses_post( $room['note'] ); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<div class="lo-cta-strip" id="contact">
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
