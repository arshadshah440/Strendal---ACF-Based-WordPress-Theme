<?php
/**
 * Template Name: The Living Room
 * Template Post Type: page
 *
 * Full-page "The Living Room" layout.
 * Each section has a "Content Source" toggle (Default / Custom).
 * Default content extracted from strendal_living_room.html.
 */

defined( 'ABSPATH' ) || exit;

$post_id  = get_the_ID();
$img_base = get_template_directory_uri() . '/assets/images/living-room';

if ( ! function_exists( 'strendal_field' ) ) {
	function strendal_field( string $name, int $post_id ) {
		return function_exists( 'get_field' ) ? get_field( $name, $post_id ) : null;
	}
}

/* ════════════════════════════════════════════════════════
   DEFAULT CONTENT
   ════════════════════════════════════════════════════════ */
$LR = [

	'hero' => [
		'eyebrow' => 'The Living Room · Ground Floor',
		'title'   => 'A room that holds<br><em>the whole house together.</em>',
		'sub'     => 'Fireplace on one wall. Kitchen and dining nook beyond. Windows on three sides. The living room at 4007 Strendal is where the ground floor comes to rest.',
		'bg'      => [ 'url' => $img_base . '/hero-bg.jpg', 'alt' => '' ],
	],

	'features' => [
		[ 'icon' => '🔥', 'text' => 'Fireplace',               'sub' => 'Living room focal point' ],
		[ 'icon' => '🪟', 'text' => 'Windows on three sides',  'sub' => 'Natural light all day' ],
		[ 'icon' => '📊', 'text' => 'Surround sound wired',    'sub' => 'In-wall, both floors' ],
		[ 'icon' => '🌳', 'text' => 'Hardwood throughout',     'sub' => 'Continuous with all rooms' ],
		[ 'icon' => '🔗', 'text' => 'Open to kitchen &amp; dining', 'sub' => 'No walls, no barriers' ],
	],

	'intro' => [
		'label'  => 'The Living Room',
		'title'  => 'Large enough to breathe.<br><em>Open enough to feel the whole home.</em>',
		'body_1' => 'Stand in the living room at 4007 Strendal and you feel the scale of the ground floor. The kitchen is to your right. The dining nook extends beyond. The staircase rises behind you. And through the windows — the garden, the trees, the light.',
		'body_2' => 'This room was designed to anchor the home without closing it off. The open plan means that a family watching television here is still connected to whoever is cooking, dining, or sitting in the tea corner by the windows. Life happens together on this floor.',
		'photo'  => [ 'url' => $img_base . '/living-room-intro.jpg', 'alt' => 'Living room', 'caption' => 'Living room · Fireplace · Garden windows · Staircase' ],
	],

	'full_photo' => [
		'photo'   => [ 'url' => $img_base . '/connected-shot.jpg', 'alt' => 'Connected ground floor' ],
		'caption' => 'Living room · Kitchen · Dining · Tea corner — one unbroken floor',
		'tags'    => [ 'Kitchen', 'Dining', 'Living', 'Tea Corner', 'Fireplace' ],
	],

	'fireplace' => [
		'photo'   => [ 'url' => $img_base . '/fireplace.jpg', 'alt' => 'Fireplace', 'caption' => 'Looking toward kitchen &amp; nook · Open plan' ],
		'label'   => 'The Fireplace',
		'title'   => 'Winter evenings have<br><em>a different quality here.</em>',
		'body_1'  => 'The fireplace anchors the living room wall — and because the space is open, its warmth reaches further than just the sofa in front of it. On a January evening in Cary, the whole ground floor takes on a quality that central heating simply cannot replicate.',
		'body_2'  => 'In fourteen years, this has been the gathering point. The place the family gravitates to after dinner. Where conversations last longer than expected. Where the house feels most like a home.',
		'tags'    => [ 'Gas fireplace', 'Open to dining &amp; kitchen', 'Living room focal point' ],
	],

	'connected' => [
		'quote' => '"Every room on the ground floor is <em>one conversation.</em>"',
		'attr'  => '14 years · 4007 Strendal Dr · Cary, NC',
		'items' => [
			[ 'icon' => '🍽️', 'title' => 'To the Dining &amp; Tea Corner', 'body' => 'No wall between the living room and the extended nook. The dining table and tea sofa are part of the same space.' ],
			[ 'icon' => '🍳', 'title' => 'To the Kitchen',                  'body' => 'The kitchen peninsula opens directly into the living room. Whoever is cooking is never isolated from the family.' ],
			[ 'icon' => '🌿', 'title' => 'To the Screened Porch',           'body' => 'The sliding door from the nook leads straight to the covered screened porch — and from there, to the garden beyond.' ],
		],
	],

	'openplan' => [
		'label'          => 'Built-In Details',
		'title'          => 'The details you notice<br><em>on the second visit.</em>',
		'body_1'         => 'Recessed lighting across the full ceiling, timed and dimmable. Hardwood floors that run continuously from the entry hall through the living room, dining nook, and into the kitchen — no transitions, no interruptions, one unbroken surface.',
		'body_2'         => 'The living room also carries the surround sound wiring that runs through both floors of the home — no visible cables, no retrofitting needed. Your system goes straight in.',
		'callout_label'  => 'Hardwired Technology',
		'callout_text'   => 'Surround sound wiring in-wall on both floors. High-speed ethernet hardwired throughout. Security sensors at every entry point. All built in from day one.',
		'photo'          => [ 'url' => $img_base . '/open-plan-detail.jpg', 'alt' => 'Open plan detail', 'caption' => 'Open plan · Hardwood · Recessed lighting' ],
	],

	'cta' => [
		'title'    => 'Come and sit by the fireplace.',
		'body'     => 'A room like this has to be experienced — not just seen in photographs. Schedule a private tour of 4007 Strendal Drive and spend time in the living room at the heart of the home.',
		'btn_text' => 'Schedule a Private Tour',
		'btn_url'  => 'tel:+19190000000',
	],

];

/* ════════════════════════════════════════════════════════
   FIELD RESOLUTION
   ════════════════════════════════════════════════════════ */

/* ── Hero ── */
$hero_use_default = strendal_field( 'lr_hero_use_default', $post_id );
if ( $hero_use_default || $hero_use_default === null ) {
	$hero_eyebrow = $LR['hero']['eyebrow'];
	$hero_title   = $LR['hero']['title'];
	$hero_sub     = $LR['hero']['sub'];
	$hero_bg      = $LR['hero']['bg'];
} else {
	$hero_eyebrow = strendal_field( 'lr_hero_eyebrow', $post_id ) ?: $LR['hero']['eyebrow'];
	$hero_title   = strendal_field( 'lr_hero_title',   $post_id ) ?: $LR['hero']['title'];
	$hero_sub     = strendal_field( 'lr_hero_sub',     $post_id ) ?: $LR['hero']['sub'];
	$raw_bg       = strendal_field( 'lr_hero_bg',      $post_id );
	$hero_bg      = $raw_bg ?: $LR['hero']['bg'];
}
$hero_img_style = ! empty( $hero_bg['url'] )
	? ' style="background-image:url(\'' . esc_url( $hero_bg['url'] ) . '\')"'
	: '';

/* ── Feature Strip ── */
$feat_use_default = strendal_field( 'lr_feat_use_default', $post_id );
if ( $feat_use_default || $feat_use_default === null ) {
	$features = $LR['features'];
} else {
	$raw      = strendal_field( 'lr_features', $post_id ) ?: [];
	$features = $raw
		? array_map( fn( $v ) => [ 'icon' => $v['lr_feat_icon'], 'text' => $v['lr_feat_text'], 'sub' => $v['lr_feat_sub'] ], $raw )
		: $LR['features'];
}

/* ── Intro ── */
$intro_use_default = strendal_field( 'lr_intro_use_default', $post_id );
if ( $intro_use_default || $intro_use_default === null ) {
	$intro_label  = $LR['intro']['label'];
	$intro_title  = $LR['intro']['title'];
	$intro_body_1 = $LR['intro']['body_1'];
	$intro_body_2 = $LR['intro']['body_2'];
	$intro_photo  = $LR['intro']['photo'];
} else {
	$intro_label  = strendal_field( 'lr_intro_label',  $post_id ) ?: $LR['intro']['label'];
	$intro_title  = strendal_field( 'lr_intro_title',  $post_id ) ?: $LR['intro']['title'];
	$intro_body_1 = strendal_field( 'lr_intro_body_1', $post_id ) ?: $LR['intro']['body_1'];
	$intro_body_2 = strendal_field( 'lr_intro_body_2', $post_id ) ?: $LR['intro']['body_2'];
	$raw_photo    = strendal_field( 'lr_intro_photo',  $post_id );
	$intro_photo  = $raw_photo
		? [ 'url' => $raw_photo['url'], 'alt' => $raw_photo['alt'], 'caption' => strendal_field( 'lr_intro_photo_caption', $post_id ) ?: $LR['intro']['photo']['caption'] ]
		: $LR['intro']['photo'];
}

/* ── Full-Width Photo ── */
$full_use_default = strendal_field( 'lr_full_use_default', $post_id );
if ( $full_use_default || $full_use_default === null ) {
	$full_photo   = $LR['full_photo']['photo'];
	$full_caption = $LR['full_photo']['caption'];
	$full_tags    = $LR['full_photo']['tags'];
} else {
	$raw_photo    = strendal_field( 'lr_full_photo',   $post_id );
	$full_photo   = $raw_photo ?: $LR['full_photo']['photo'];
	$full_caption = strendal_field( 'lr_full_caption', $post_id ) ?: $LR['full_photo']['caption'];
	$raw_tags     = strendal_field( 'lr_full_tags',    $post_id ) ?: [];
	$full_tags    = $raw_tags ? array_column( $raw_tags, 'lr_full_tag' ) : $LR['full_photo']['tags'];
}

/* ── Fireplace Section ── */
$fire_use_default = strendal_field( 'lr_fire_use_default', $post_id );
if ( $fire_use_default || $fire_use_default === null ) {
	$fire_photo  = $LR['fireplace']['photo'];
	$fire_label  = $LR['fireplace']['label'];
	$fire_title  = $LR['fireplace']['title'];
	$fire_body_1 = $LR['fireplace']['body_1'];
	$fire_body_2 = $LR['fireplace']['body_2'];
	$fire_tags   = $LR['fireplace']['tags'];
} else {
	$raw_photo   = strendal_field( 'lr_fire_photo',   $post_id );
	$fire_photo  = $raw_photo
		? [ 'url' => $raw_photo['url'], 'alt' => $raw_photo['alt'], 'caption' => strendal_field( 'lr_fire_photo_caption', $post_id ) ?: $LR['fireplace']['photo']['caption'] ]
		: $LR['fireplace']['photo'];
	$fire_label  = strendal_field( 'lr_fire_label',  $post_id ) ?: $LR['fireplace']['label'];
	$fire_title  = strendal_field( 'lr_fire_title',  $post_id ) ?: $LR['fireplace']['title'];
	$fire_body_1 = strendal_field( 'lr_fire_body_1', $post_id ) ?: $LR['fireplace']['body_1'];
	$fire_body_2 = strendal_field( 'lr_fire_body_2', $post_id ) ?: $LR['fireplace']['body_2'];
	$raw_tags    = strendal_field( 'lr_fire_tags',   $post_id ) ?: [];
	$fire_tags   = $raw_tags ? array_column( $raw_tags, 'lr_fire_tag' ) : $LR['fireplace']['tags'];
}

/* ── Connected Section ── */
$conn_use_default = strendal_field( 'lr_conn_use_default', $post_id );
if ( $conn_use_default || $conn_use_default === null ) {
	$conn_quote = $LR['connected']['quote'];
	$conn_attr  = $LR['connected']['attr'];
	$conn_items = $LR['connected']['items'];
} else {
	$conn_quote = strendal_field( 'lr_conn_quote', $post_id ) ?: $LR['connected']['quote'];
	$conn_attr  = strendal_field( 'lr_conn_attr',  $post_id ) ?: $LR['connected']['attr'];
	$raw        = strendal_field( 'lr_conn_items', $post_id ) ?: [];
	$conn_items = $raw
		? array_map( fn( $v ) => [ 'icon' => $v['lr_conn_icon'], 'title' => $v['lr_conn_title'], 'body' => $v['lr_conn_body'] ], $raw )
		: $LR['connected']['items'];
}

/* ── Open Plan Detail ── */
$op_use_default = strendal_field( 'lr_op_use_default', $post_id );
if ( $op_use_default || $op_use_default === null ) {
	$op_label         = $LR['openplan']['label'];
	$op_title         = $LR['openplan']['title'];
	$op_body_1        = $LR['openplan']['body_1'];
	$op_body_2        = $LR['openplan']['body_2'];
	$op_callout_label = $LR['openplan']['callout_label'];
	$op_callout_text  = $LR['openplan']['callout_text'];
	$op_photo         = $LR['openplan']['photo'];
} else {
	$op_label         = strendal_field( 'lr_op_label',         $post_id ) ?: $LR['openplan']['label'];
	$op_title         = strendal_field( 'lr_op_title',         $post_id ) ?: $LR['openplan']['title'];
	$op_body_1        = strendal_field( 'lr_op_body_1',        $post_id ) ?: $LR['openplan']['body_1'];
	$op_body_2        = strendal_field( 'lr_op_body_2',        $post_id ) ?: $LR['openplan']['body_2'];
	$op_callout_label = strendal_field( 'lr_op_callout_label', $post_id ) ?: $LR['openplan']['callout_label'];
	$op_callout_text  = strendal_field( 'lr_op_callout_text',  $post_id ) ?: $LR['openplan']['callout_text'];
	$raw_photo        = strendal_field( 'lr_op_photo',         $post_id );
	$op_photo         = $raw_photo
		? [ 'url' => $raw_photo['url'], 'alt' => $raw_photo['alt'], 'caption' => strendal_field( 'lr_op_photo_caption', $post_id ) ?: $LR['openplan']['photo']['caption'] ]
		: $LR['openplan']['photo'];
}

/* ── CTA ── */
$cta_use_default = strendal_field( 'lr_cta_use_default', $post_id );
if ( $cta_use_default || $cta_use_default === null ) {
	$cta_title    = $LR['cta']['title'];
	$cta_body     = $LR['cta']['body'];
	$cta_btn_text = $LR['cta']['btn_text'];
	$cta_btn_url  = $LR['cta']['btn_url'];
} else {
	$cta_title    = strendal_field( 'lr_cta_title',    $post_id ) ?: $LR['cta']['title'];
	$cta_body     = strendal_field( 'lr_cta_body',     $post_id ) ?: $LR['cta']['body'];
	$cta_btn_text = strendal_field( 'lr_cta_btn_text', $post_id ) ?: $LR['cta']['btn_text'];
	$cta_btn_url  = strendal_field( 'lr_cta_btn_url',  $post_id ) ?: $LR['cta']['btn_url'];
}

/* ════════════════════════════════════════════════════════
   RENDER
   ════════════════════════════════════════════════════════ */
get_header();
?>

<!-- ── HERO ── -->
<section class="lr-hero">
  <div class="hero-img"<?php echo $hero_img_style; ?>></div>
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <p class="hero-eyebrow"><?php echo esc_html( $hero_eyebrow ); ?></p>
    <h1 class="hero-title"><?php echo wp_kses_post( $hero_title ); ?></h1>
    <p class="hero-sub"><?php echo esc_html( $hero_sub ); ?></p>
  </div>
</section>

<!-- ── FEATURE STRIP ── -->
<div class="lr-feature-strip">
  <?php foreach ( $features as $f ) : ?>
  <div class="lr-fs-item">
    <span class="lr-fs-icon"><?php echo esc_html( $f['icon'] ); ?></span>
    <div>
      <div class="lr-fs-text"><?php echo wp_kses_post( $f['text'] ); ?></div>
      <div class="lr-fs-sub"><?php echo esc_html( $f['sub'] ); ?></div>
    </div>
  </div>
  <?php endforeach; ?>
</div>

<!-- ── INTRO ── -->
<section class="lr-intro">
  <div class="reveal">
    <p class="lr-section-label"><?php echo esc_html( $intro_label ); ?></p>
    <h2><?php echo wp_kses_post( $intro_title ); ?></h2>
    <?php if ( $intro_body_1 ) : ?><p><?php echo esc_html( $intro_body_1 ); ?></p><?php endif; ?>
    <?php if ( $intro_body_2 ) : ?><p><?php echo esc_html( $intro_body_2 ); ?></p><?php endif; ?>
  </div>
  <div class="lr-photo-frame reveal reveal-delay-2">
    <?php if ( ! empty( $intro_photo['url'] ) ) : ?>
    <img src="<?php echo esc_url( $intro_photo['url'] ); ?>"
         alt="<?php echo esc_attr( $intro_photo['alt'] ); ?>">
    <?php endif; ?>
    <?php if ( ! empty( $intro_photo['caption'] ) ) : ?>
    <div class="lr-photo-caption"><?php echo wp_kses_post( $intro_photo['caption'] ); ?></div>
    <?php endif; ?>
  </div>
</section>

<!-- ── FULL-WIDTH PHOTO ── -->
<div class="lr-full-photo reveal">
  <div class="lr-full-frame">
    <?php if ( ! empty( $full_photo['url'] ) ) : ?>
    <img src="<?php echo esc_url( $full_photo['url'] ); ?>"
         alt="<?php echo esc_attr( $full_photo['alt'] ); ?>">
    <?php endif; ?>
    <div class="lr-full-caption">
      <span class="lr-full-caption-text"><?php echo esc_html( $full_caption ); ?></span>
      <?php if ( $full_tags ) : ?>
      <div class="lr-full-caption-tags">
        <?php foreach ( $full_tags as $tag ) : ?>
        <span class="lr-fct"><?php echo esc_html( $tag ); ?></span>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<!-- ── FIREPLACE SECTION ── -->
<section class="lr-fireplace-section">
  <div class="lr-fireplace-inner">
    <div class="lr-photo-frame reveal">
      <?php if ( ! empty( $fire_photo['url'] ) ) : ?>
      <img src="<?php echo esc_url( $fire_photo['url'] ); ?>"
           alt="<?php echo esc_attr( $fire_photo['alt'] ); ?>">
      <?php endif; ?>
      <?php if ( ! empty( $fire_photo['caption'] ) ) : ?>
      <div class="lr-photo-caption"><?php echo wp_kses_post( $fire_photo['caption'] ); ?></div>
      <?php endif; ?>
    </div>
    <div class="reveal reveal-delay-2">
      <p class="lr-section-label"><?php echo esc_html( $fire_label ); ?></p>
      <h2><?php echo wp_kses_post( $fire_title ); ?></h2>
      <?php if ( $fire_body_1 ) : ?><p><?php echo esc_html( $fire_body_1 ); ?></p><?php endif; ?>
      <?php if ( $fire_body_2 ) : ?><p><?php echo esc_html( $fire_body_2 ); ?></p><?php endif; ?>
      <?php if ( $fire_tags ) : ?>
      <div class="lr-season-tags">
        <?php foreach ( $fire_tags as $tag ) : ?>
        <span class="lr-season-tag"><span class="lr-st-dot"></span><?php echo wp_kses_post( $tag ); ?></span>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ── CONNECTED SECTION ── -->
<section class="lr-connected-section">
  <div class="lr-connected-inner">
    <div class="reveal">
      <p class="lr-conn-quote"><?php echo wp_kses_post( $conn_quote ); ?></p>
      <p class="lr-conn-attribution"><?php echo esc_html( $conn_attr ); ?></p>
    </div>
    <div class="lr-conn-list reveal reveal-delay-2">
      <?php foreach ( $conn_items as $item ) : ?>
      <div class="lr-conn-item">
        <div class="lr-conn-item-icon"><?php echo esc_html( $item['icon'] ); ?></div>
        <div>
          <div class="lr-conn-item-title"><?php echo wp_kses_post( $item['title'] ); ?></div>
          <div class="lr-conn-item-body"><?php echo esc_html( $item['body'] ); ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── OPEN PLAN DETAIL ── -->
<section class="lr-openplan-section">
  <div class="reveal">
    <p class="lr-section-label"><?php echo esc_html( $op_label ); ?></p>
    <h2><?php echo wp_kses_post( $op_title ); ?></h2>
    <?php if ( $op_body_1 ) : ?><p><?php echo esc_html( $op_body_1 ); ?></p><?php endif; ?>
    <?php if ( $op_body_2 ) : ?><p><?php echo esc_html( $op_body_2 ); ?></p><?php endif; ?>
    <?php if ( $op_callout_label || $op_callout_text ) : ?>
    <div class="lr-tech-callout">
      <?php if ( $op_callout_label ) : ?>
      <div class="lr-tc-label"><?php echo esc_html( $op_callout_label ); ?></div>
      <?php endif; ?>
      <?php if ( $op_callout_text ) : ?>
      <div class="lr-tc-text"><?php echo esc_html( $op_callout_text ); ?></div>
      <?php endif; ?>
    </div>
    <?php endif; ?>
  </div>
  <div class="lr-photo-frame reveal reveal-delay-2">
    <?php if ( ! empty( $op_photo['url'] ) ) : ?>
    <img src="<?php echo esc_url( $op_photo['url'] ); ?>"
         alt="<?php echo esc_attr( $op_photo['alt'] ); ?>">
    <?php endif; ?>
    <?php if ( ! empty( $op_photo['caption'] ) ) : ?>
    <div class="lr-photo-caption"><?php echo wp_kses_post( $op_photo['caption'] ); ?></div>
    <?php endif; ?>
  </div>
</section>

<!-- ── CTA ── -->
<div class="lr-cta-strip" id="contact">
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
