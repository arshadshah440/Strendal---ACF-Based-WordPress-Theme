<?php
/**
 * Template Name: The Screened Porch & Herb Garden
 * Template Post Type: page
 *
 * Full-page "The Screened Porch & Herb Garden" layout.
 * Each section has a "Content Source" toggle (Default / Custom).
 * Default content extracted from strendal_porch_herb.html.
 */

defined( 'ABSPATH' ) || exit;

$post_id  = get_the_ID();
$img_base = get_template_directory_uri() . '/assets/images/porch-herb';

if ( ! function_exists( 'strendal_field' ) ) {
	function strendal_field( string $name, int $post_id ) {
		return function_exists( 'get_field' ) ? get_field( $name, $post_id ) : null;
	}
}

/* ════════════════════════════════════════════════════════
   DEFAULT CONTENT
   ════════════════════════════════════════════════════════ */
$PH = [

	'hero' => [
		'eyebrow' => 'The Screened Porch · Herb Garden',
		'title'   => 'Where inside ends<br>and Carolina<br><em>begins.</em>',
		'sub'     => 'A covered screened porch with warm timber framing, three panels of green, and the herb garden steps away. Nine to ten months of the year, this is where the day ends.',
		'bg'      => [ 'url' => $img_base . '/hero-bg.jpg', 'alt' => '' ],
	],

	'seasons' => [
		[ 'num' => '9–10',    'label' => 'Months of outdoor living' ],
		[ 'num' => 'Covered', 'label' => 'Rain or shine' ],
		[ 'num' => 'Screened','label' => 'No insects, full breeze' ],
		[ 'num' => 'Herbs',   'label' => 'Steps from the kitchen door' ],
		[ 'num' => 'West',    'label' => 'Evening sunset view' ],
	],

	'porch_intro' => [
		'label'   => 'The Screened Porch',
		'title'   => 'Not a deck. Not a patio.<br><em>A room that happens to be outside.</em>',
		'body_1'  => 'The covered screened porch at 4007 Strendal is built properly — warm timber framing, a solid roof, full screening on three sides. It is not a screen bolted to a back door. It is a genuine outdoor room that functions in rain, in heat, in the first cool days of autumn.',
		'body_2'  => 'Sit out here on a July evening and you\'ll understand why this family has spent so many hours on this porch. The screens keep the insects out. The roof keeps the rain out. The breeze comes straight through. And the view — over the herb garden, across the backyard, into the trees — is exactly what you imagine when you imagine a Carolina home.',
		'photo'   => [ 'url' => $img_base . '/porch-intro.jpg', 'alt' => 'Screened porch', 'caption' => 'Screened porch · Timber frame · Herb garden to the left' ],
	],

	'aerial' => [
		'photo'   => [ 'url' => $img_base . '/aerial-rear.jpg', 'alt' => 'Aerial rear view' ],
		'caption' => 'Aerial rear view · New roof · Screened porch · Herb garden · ⅓ acre',
		'tags'    => [ 'New 2023 Roof', 'Screened Porch', 'Herb Garden', '⅓ Acre Lot' ],
	],

	'lifestyle' => [
		'quote' => '"Step onto your covered screened porch and watch the western sunset paint your private backyard. This is <em>indoor-outdoor living at its finest.</em>"',
		'attr'  => '4007 Strendal Dr · Cary, NC · 14 years',
		'facts' => [
			[ 'title' => 'The Airflow Connection', 'body' => 'Open the back porch door, open the storm door screen at the front — natural cross-ventilation flows through the entire home. Nine to ten months a year, no air conditioning needed in the mornings.' ],
			[ 'title' => 'The Evening Ritual',     'body' => 'The porch faces west. Evenings here, in the shade, watching the light change over the backyard — this is the hour the family gravitates to without planning to.' ],
			[ 'title' => 'Year-Round Use',         'body' => 'The roof means you\'re out here in light rain. The screens mean summer is comfortable. North Carolina\'s climate gives you nine to ten months of real outdoor living from this porch.' ],
		],
	],

	'herb' => [
		'photo'  => [ 'url' => $img_base . '/herb-garden.jpg', 'alt' => 'Herb garden', 'caption' => 'Herb garden · Just outside the kitchen door · Steps from the porch' ],
		'label'  => 'The Herb Garden',
		'title'  => 'Steps from the kitchen.<br><em>Always within reach.</em>',
		'body_1' => 'The herb garden runs along the back wall of the house — between the kitchen door and the screened porch. Sheltered, south-facing, and established over years of careful tending without a single chemical application.',
		'body_2' => 'The stone pathway connects the back door to the porch, running right alongside it. In the mornings, on the way to the porch with a cup of tea, you pass the rosemary and mint. In the evenings, coming in from the porch, you brush past the basil. These are the small rituals that make a house feel like a home.',
		'herbs'  => [
			[ 'icon' => '🌿', 'name' => 'Rosemary',                  'note' => 'Established, perennial · thrives year-round' ],
			[ 'icon' => '🌱', 'name' => 'Mint',                      'note' => 'Fresh in summer · frozen for winter' ],
			[ 'icon' => '🌿', 'name' => 'Basil',                     'note' => 'Summer · also dehydrated for the off-season' ],
			[ 'icon' => '🌸', 'name' => 'Seasonal flowering plants', 'note' => 'Colour and pollinator habitat · mulched beds' ],
		],
	],

	'two_photos' => [
		[ 'url' => $img_base . '/porch-inside.jpg',  'alt' => 'Inside the porch',  'caption' => 'Inside the porch · Three screens of green · Beadboard ceiling' ],
		[ 'url' => $img_base . '/rear-overview.jpg', 'alt' => 'Full rear overview', 'caption' => 'Full rear · New 2023 roof · Porch · Garden · ⅓ acre' ],
	],

	'features' => [
		'title' => 'Built to last.<br><em>Designed to be lived in.</em>',
		'cards' => [
			[ 'icon' => '🪵', 'title' => 'Warm Timber Framing', 'body' => 'The porch is built with warm stained timber — not vinyl, not composite. A proper structure that ages beautifully.' ],
			[ 'icon' => '🏠', 'title' => 'Covered Roof',        'body' => 'A full roof means the porch works in light rain. No scrambling inside when the afternoon showers come.' ],
			[ 'icon' => '🦟', 'title' => 'Full Screening',      'body' => 'Three screened panels keep insects out entirely — summer evenings are genuinely comfortable, no repellent needed.' ],
			[ 'icon' => '🧱', 'title' => 'Stone Pathway',       'body' => 'A proper stone path connects the back door to the porch, running alongside the herb garden — no muddy shoes.' ],
			[ 'icon' => '🌅', 'title' => 'West-Facing View',    'body' => 'The porch faces west — afternoon light, sunset views, and the warmth of a Carolina evening settling over the backyard.' ],
			[ 'icon' => '🏡', 'title' => 'New Roof · 2023',     'body' => 'The entire roof — including the porch — was replaced in 2023 at ~$20,000. Peace of mind for decades.' ],
		],
	],

	'cta' => [
		'title'    => 'Come and sit on the porch.',
		'body'     => 'The best time to see this house is on a warm evening. Schedule a private tour of 4007 Strendal Drive and spend time on the porch that\'s been the heart of this home\'s outdoor life for fourteen years.',
		'btn_text' => 'Schedule a Private Tour',
		'btn_url'  => 'tel:+19190000000',
	],

];

/* ════════════════════════════════════════════════════════
   FIELD RESOLUTION
   ════════════════════════════════════════════════════════ */

/* ── Hero ── */
$hero_use_default = strendal_field( 'ph_hero_use_default', $post_id );
if ( $hero_use_default || $hero_use_default === null ) {
	$hero_eyebrow = $PH['hero']['eyebrow'];
	$hero_title   = $PH['hero']['title'];
	$hero_sub     = $PH['hero']['sub'];
	$hero_bg      = $PH['hero']['bg'];
} else {
	$hero_eyebrow = strendal_field( 'ph_hero_eyebrow', $post_id ) ?: $PH['hero']['eyebrow'];
	$hero_title   = strendal_field( 'ph_hero_title',   $post_id ) ?: $PH['hero']['title'];
	$hero_sub     = strendal_field( 'ph_hero_sub',     $post_id ) ?: $PH['hero']['sub'];
	$raw_bg       = strendal_field( 'ph_hero_bg',      $post_id );
	$hero_bg      = $raw_bg ?: $PH['hero']['bg'];
}
$hero_img_style = ! empty( $hero_bg['url'] )
	? ' style="background-image:url(\'' . esc_url( $hero_bg['url'] ) . '\')"'
	: '';

/* ── Season Strip ── */
$season_use_default = strendal_field( 'ph_season_use_default', $post_id );
if ( $season_use_default || $season_use_default === null ) {
	$seasons = $PH['seasons'];
} else {
	$raw     = strendal_field( 'ph_seasons', $post_id ) ?: [];
	$seasons = $raw
		? array_map( fn( $v ) => [ 'num' => $v['ph_season_num'], 'label' => $v['ph_season_label'] ], $raw )
		: $PH['seasons'];
}

/* ── Porch Intro ── */
$porch_use_default = strendal_field( 'ph_porch_use_default', $post_id );
if ( $porch_use_default || $porch_use_default === null ) {
	$porch_label  = $PH['porch_intro']['label'];
	$porch_title  = $PH['porch_intro']['title'];
	$porch_body_1 = $PH['porch_intro']['body_1'];
	$porch_body_2 = $PH['porch_intro']['body_2'];
	$porch_photo  = $PH['porch_intro']['photo'];
} else {
	$porch_label  = strendal_field( 'ph_porch_label',   $post_id ) ?: $PH['porch_intro']['label'];
	$porch_title  = strendal_field( 'ph_porch_title',   $post_id ) ?: $PH['porch_intro']['title'];
	$porch_body_1 = strendal_field( 'ph_porch_body_1',  $post_id ) ?: $PH['porch_intro']['body_1'];
	$porch_body_2 = strendal_field( 'ph_porch_body_2',  $post_id ) ?: $PH['porch_intro']['body_2'];
	$raw_photo    = strendal_field( 'ph_porch_photo',   $post_id );
	$porch_photo  = $raw_photo
		? [ 'url' => $raw_photo['url'], 'alt' => $raw_photo['alt'], 'caption' => strendal_field( 'ph_porch_photo_caption', $post_id ) ?: $PH['porch_intro']['photo']['caption'] ]
		: $PH['porch_intro']['photo'];
}

/* ── Aerial Section ── */
$aerial_use_default = strendal_field( 'ph_aerial_use_default', $post_id );
if ( $aerial_use_default || $aerial_use_default === null ) {
	$aerial_photo   = $PH['aerial']['photo'];
	$aerial_caption = $PH['aerial']['caption'];
	$aerial_tags    = $PH['aerial']['tags'];
} else {
	$raw_photo      = strendal_field( 'ph_aerial_photo',   $post_id );
	$aerial_photo   = $raw_photo ?: $PH['aerial']['photo'];
	$aerial_caption = strendal_field( 'ph_aerial_caption', $post_id ) ?: $PH['aerial']['caption'];
	$raw_tags       = strendal_field( 'ph_aerial_tags',    $post_id ) ?: [];
	$aerial_tags    = $raw_tags ? array_column( $raw_tags, 'ph_aerial_tag' ) : $PH['aerial']['tags'];
}

/* ── Lifestyle Section ── */
$lifestyle_use_default = strendal_field( 'ph_lifestyle_use_default', $post_id );
if ( $lifestyle_use_default || $lifestyle_use_default === null ) {
	$lifestyle_quote = $PH['lifestyle']['quote'];
	$lifestyle_attr  = $PH['lifestyle']['attr'];
	$lifestyle_facts = $PH['lifestyle']['facts'];
} else {
	$lifestyle_quote = strendal_field( 'ph_lifestyle_quote', $post_id ) ?: $PH['lifestyle']['quote'];
	$lifestyle_attr  = strendal_field( 'ph_lifestyle_attr',  $post_id ) ?: $PH['lifestyle']['attr'];
	$raw             = strendal_field( 'ph_lifestyle_facts', $post_id ) ?: [];
	$lifestyle_facts = $raw
		? array_map( fn( $v ) => [ 'title' => $v['ph_lf_title'], 'body' => $v['ph_lf_body'] ], $raw )
		: $PH['lifestyle']['facts'];
}

/* ── Herb Section ── */
$herb_use_default = strendal_field( 'ph_herb_use_default', $post_id );
if ( $herb_use_default || $herb_use_default === null ) {
	$herb_photo  = $PH['herb']['photo'];
	$herb_label  = $PH['herb']['label'];
	$herb_title  = $PH['herb']['title'];
	$herb_body_1 = $PH['herb']['body_1'];
	$herb_body_2 = $PH['herb']['body_2'];
	$herb_items  = $PH['herb']['herbs'];
} else {
	$raw_photo   = strendal_field( 'ph_herb_photo',   $post_id );
	$herb_photo  = $raw_photo
		? [ 'url' => $raw_photo['url'], 'alt' => $raw_photo['alt'], 'caption' => strendal_field( 'ph_herb_photo_caption', $post_id ) ?: $PH['herb']['photo']['caption'] ]
		: $PH['herb']['photo'];
	$herb_label  = strendal_field( 'ph_herb_label',  $post_id ) ?: $PH['herb']['label'];
	$herb_title  = strendal_field( 'ph_herb_title',  $post_id ) ?: $PH['herb']['title'];
	$herb_body_1 = strendal_field( 'ph_herb_body_1', $post_id ) ?: $PH['herb']['body_1'];
	$herb_body_2 = strendal_field( 'ph_herb_body_2', $post_id ) ?: $PH['herb']['body_2'];
	$raw         = strendal_field( 'ph_herb_items',  $post_id ) ?: [];
	$herb_items  = $raw
		? array_map( fn( $v ) => [ 'icon' => $v['ph_herb_icon'], 'name' => $v['ph_herb_name'], 'note' => $v['ph_herb_note'] ], $raw )
		: $PH['herb']['herbs'];
}

/* ── Two-Photo Row ── */
$twophoto_use_default = strendal_field( 'ph_twophoto_use_default', $post_id );
if ( $twophoto_use_default || $twophoto_use_default === null ) {
	$two_photos = $PH['two_photos'];
} else {
	$raw        = strendal_field( 'ph_two_photos', $post_id ) ?: [];
	$two_photos = $raw
		? array_map( fn( $v ) => [
			'url'     => $v['ph_tp_photo'] ? $v['ph_tp_photo']['url'] : '',
			'alt'     => $v['ph_tp_photo'] ? $v['ph_tp_photo']['alt'] : '',
			'caption' => $v['ph_tp_caption'],
		], $raw )
		: $PH['two_photos'];
}

/* ── Features Grid ── */
$feat_use_default = strendal_field( 'ph_feat_use_default', $post_id );
if ( $feat_use_default || $feat_use_default === null ) {
	$feat_title = $PH['features']['title'];
	$feat_cards = $PH['features']['cards'];
} else {
	$feat_title = strendal_field( 'ph_feat_title', $post_id ) ?: $PH['features']['title'];
	$raw        = strendal_field( 'ph_feat_cards', $post_id ) ?: [];
	$feat_cards = $raw
		? array_map( fn( $c ) => [ 'icon' => $c['ph_feat_icon'], 'title' => $c['ph_feat_title'], 'body' => $c['ph_feat_body'] ], $raw )
		: $PH['features']['cards'];
}

/* ── CTA ── */
$cta_use_default = strendal_field( 'ph_cta_use_default', $post_id );
if ( $cta_use_default || $cta_use_default === null ) {
	$cta_title    = $PH['cta']['title'];
	$cta_body     = $PH['cta']['body'];
	$cta_btn_text = $PH['cta']['btn_text'];
	$cta_btn_url  = $PH['cta']['btn_url'];
} else {
	$cta_title    = strendal_field( 'ph_cta_title',    $post_id ) ?: $PH['cta']['title'];
	$cta_body     = strendal_field( 'ph_cta_body',     $post_id ) ?: $PH['cta']['body'];
	$cta_btn_text = strendal_field( 'ph_cta_btn_text', $post_id ) ?: $PH['cta']['btn_text'];
	$cta_btn_url  = strendal_field( 'ph_cta_btn_url',  $post_id ) ?: $PH['cta']['btn_url'];
}

/* ════════════════════════════════════════════════════════
   RENDER
   ════════════════════════════════════════════════════════ */
get_header();
?>

<!-- ── HERO ── -->
<section class="ph-hero">
  <div class="hero-img"<?php echo $hero_img_style; ?>></div>
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <p class="hero-eyebrow"><?php echo esc_html( $hero_eyebrow ); ?></p>
    <h1 class="hero-title"><?php echo wp_kses_post( $hero_title ); ?></h1>
    <p class="hero-sub"><?php echo esc_html( $hero_sub ); ?></p>
  </div>
</section>

<!-- ── SEASON STRIP ── -->
<div class="ph-season-strip">
  <?php foreach ( $seasons as $season ) : ?>
  <div class="ss-item">
    <div class="ss-num"><?php echo esc_html( $season['num'] ); ?></div>
    <div class="ss-label"><?php echo esc_html( $season['label'] ); ?></div>
  </div>
  <?php endforeach; ?>
</div>

<!-- ── PORCH INTRO ── -->
<section class="ph-porch-intro">
  <div class="reveal">
    <p class="ph-section-label"><?php echo esc_html( $porch_label ); ?></p>
    <h2><?php echo wp_kses_post( $porch_title ); ?></h2>
    <?php if ( $porch_body_1 ) : ?><p><?php echo esc_html( $porch_body_1 ); ?></p><?php endif; ?>
    <?php if ( $porch_body_2 ) : ?><p><?php echo esc_html( $porch_body_2 ); ?></p><?php endif; ?>
  </div>
  <div class="ph-photo-frame ph-photo-frame-tall reveal reveal-delay-2">
    <?php if ( ! empty( $porch_photo['url'] ) ) : ?>
    <img src="<?php echo esc_url( $porch_photo['url'] ); ?>"
         alt="<?php echo esc_attr( $porch_photo['alt'] ); ?>">
    <?php endif; ?>
    <?php if ( ! empty( $porch_photo['caption'] ) ) : ?>
    <div class="ph-photo-caption"><?php echo esc_html( $porch_photo['caption'] ); ?></div>
    <?php endif; ?>
  </div>
</section>

<!-- ── AERIAL SECTION ── -->
<div class="ph-aerial-section reveal">
  <div class="ph-aerial-frame">
    <?php if ( ! empty( $aerial_photo['url'] ) ) : ?>
    <img src="<?php echo esc_url( $aerial_photo['url'] ); ?>"
         alt="<?php echo esc_attr( $aerial_photo['alt'] ); ?>">
    <?php endif; ?>
    <div class="ph-aerial-caption">
      <span class="ph-ac-text"><?php echo esc_html( $aerial_caption ); ?></span>
      <?php if ( $aerial_tags ) : ?>
      <div class="ph-ac-tags">
        <?php foreach ( $aerial_tags as $tag ) : ?>
        <span class="ph-ac-tag"><?php echo esc_html( $tag ); ?></span>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<!-- ── LIFESTYLE SECTION ── -->
<section class="ph-lifestyle-section">
  <div class="ph-lifestyle-inner">
    <div class="reveal">
      <p class="ph-lifestyle-quote"><?php echo wp_kses_post( $lifestyle_quote ); ?></p>
      <p class="ph-lifestyle-attr"><?php echo esc_html( $lifestyle_attr ); ?></p>
    </div>
    <div class="ph-lifestyle-facts reveal reveal-delay-2">
      <?php foreach ( $lifestyle_facts as $fact ) : ?>
      <div class="ph-lf-item">
        <div class="ph-lf-title"><?php echo esc_html( $fact['title'] ); ?></div>
        <div class="ph-lf-body"><?php echo esc_html( $fact['body'] ); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── HERB GARDEN SECTION ── -->
<section class="ph-herb-section">
  <div class="ph-herb-inner">
    <div class="ph-photo-frame reveal">
      <?php if ( ! empty( $herb_photo['url'] ) ) : ?>
      <img src="<?php echo esc_url( $herb_photo['url'] ); ?>"
           alt="<?php echo esc_attr( $herb_photo['alt'] ); ?>">
      <?php endif; ?>
      <?php if ( ! empty( $herb_photo['caption'] ) ) : ?>
      <div class="ph-photo-caption"><?php echo esc_html( $herb_photo['caption'] ); ?></div>
      <?php endif; ?>
    </div>
    <div class="reveal reveal-delay-2">
      <p class="ph-section-label"><?php echo esc_html( $herb_label ); ?></p>
      <h2><?php echo wp_kses_post( $herb_title ); ?></h2>
      <?php if ( $herb_body_1 ) : ?><p><?php echo esc_html( $herb_body_1 ); ?></p><?php endif; ?>
      <?php if ( $herb_body_2 ) : ?><p><?php echo esc_html( $herb_body_2 ); ?></p><?php endif; ?>
      <?php if ( $herb_items ) : ?>
      <div class="ph-herb-list">
        <?php foreach ( $herb_items as $item ) : ?>
        <div class="ph-herb-item">
          <span class="ph-herb-icon"><?php echo esc_html( $item['icon'] ); ?></span>
          <span class="ph-herb-name"><?php echo esc_html( $item['name'] ); ?></span>
          <span class="ph-herb-note"><?php echo esc_html( $item['note'] ); ?></span>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ── TWO-PHOTO ROW ── -->
<div class="ph-two-photo">
  <div class="ph-two-photo-inner">
    <?php foreach ( $two_photos as $i => $photo ) :
      $delay = $i > 0 ? ' reveal-delay-' . $i : '';
    ?>
    <div class="ph-tp-frame reveal<?php echo $delay; ?>">
      <?php if ( ! empty( $photo['url'] ) ) : ?>
      <img src="<?php echo esc_url( $photo['url'] ); ?>"
           alt="<?php echo esc_attr( $photo['alt'] ); ?>">
      <?php endif; ?>
      <?php if ( ! empty( $photo['caption'] ) ) : ?>
      <div class="ph-tp-caption"><?php echo esc_html( $photo['caption'] ); ?></div>
      <?php endif; ?>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- ── FEATURES GRID ── -->
<section class="ph-features-section">
  <div class="ph-features-inner">
    <div class="ph-features-header reveal">
      <p class="ph-section-label" style="justify-content:center;">Porch &amp; Garden Details</p>
      <h2><?php echo wp_kses_post( $feat_title ); ?></h2>
    </div>
    <div class="ph-features-grid">
      <?php foreach ( $feat_cards as $i => $card ) :
        $col   = $i % 3;
        $delay = $col > 0 ? ' reveal-delay-' . $col : '';
      ?>
      <div class="ph-fc reveal<?php echo $delay; ?>">
        <div class="ph-fc-icon"><?php echo esc_html( $card['icon'] ); ?></div>
        <div>
          <div class="ph-fc-title"><?php echo esc_html( $card['title'] ); ?></div>
          <div class="ph-fc-body"><?php echo esc_html( $card['body'] ); ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<div class="ph-cta-strip" id="contact">
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
