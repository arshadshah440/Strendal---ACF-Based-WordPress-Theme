<?php
/**
 * Template Name: The Kitchen
 * Template Post Type: page
 *
 * Full-page "The Kitchen" layout.
 * Each section has a "Content Source" toggle (Default / Custom).
 * Default content extracted from strendal_kitchen.html.
 */

defined( 'ABSPATH' ) || exit;

$post_id   = get_the_ID();
$img_base  = get_template_directory_uri() . '/assets/images/kitchen';

if ( ! function_exists( 'strendal_field' ) ) {
	function strendal_field( string $name, int $post_id ) {
		return function_exists( 'get_field' ) ? get_field( $name, $post_id ) : null;
	}
}

/* ════════════════════════════════════════════════════════
   DEFAULT CONTENT
   ════════════════════════════════════════════════════════ */
$KT = [

	'hero' => [
		'eyebrow' => 'The Kitchen · 4007 Strendal Dr',
		'title'   => 'Where the home<br><em>comes together.</em>',
		'sub'     => 'A generous, open-plan kitchen that flows straight into the living and dining space — designed for families who actually cook, gather, and live in the heart of the home.',
		'bg'      => [ 'url' => $img_base . '/hero-bg.jpg', 'alt' => '' ],
	],

	'specs' => [
		[ 'num' => 'Gas',     'label' => 'Range &amp; Cooking' ],
		[ 'num' => 'Granite', 'label' => 'Countertops throughout' ],
		[ 'num' => '3',       'label' => 'Stainless appliances' ],
		[ 'num' => 'Open',    'label' => 'Flow to living &amp; dining' ],
		[ 'num' => 'Herb',    'label' => 'Garden steps from the door' ],
	],

	'open_plan' => [
		'label'  => 'The Layout',
		'title'  => 'Open to the living room.<br><em>Connected to everything.</em>',
		'body_1' => 'The kitchen at 4007 Strendal doesn\'t end at its walls. A curved granite peninsula opens directly onto the dining and living space — so whoever is cooking is never cut off from the room, the conversation, or the view out to the backyard.',
		'body_2' => 'Light pours in from two directions: the breakfast nook windows facing the front, and the living room windows beyond. Even on an overcast Carolina afternoon, this kitchen stays bright.',
		'body_3' => 'The gas range, stainless refrigerator, dishwasher, and deep granite counters give a serious cook everything they need. The layout gives a family everything else.',
		'photo'  => [ 'url' => $img_base . '/open-plan.jpg', 'alt' => 'Open plan kitchen', 'caption' => 'Open plan · Kitchen to dining to living room' ],
	],

	'two_photos' => [
		[ 'url' => $img_base . '/appliance-wall.jpg', 'alt' => 'Appliance wall', 'caption' => 'Appliance wall · Stainless throughout' ],
		[ 'url' => $img_base . '/galley-view.jpg',    'alt' => 'Galley view',    'caption' => 'Full depth · Stairs & flex room beyond' ],
	],

	'connections' => [
		'quote' => '"A kitchen that doesn\'t just cook — it <em>connects every room on the ground floor.</em>"',
		'items' => [
			[ 'title' => 'To the Living Room',  'body' => 'The peninsula opens directly to the living space. No wall, no barrier — one continuous room for the family to share.' ],
			[ 'title' => 'To the Flex Room',    'body' => 'A doorway connects straight through to the ground floor flex room — visible in the galley shot. Easy flow for families working from home.' ],
			[ 'title' => 'To the Staircase',    'body' => 'The wooden staircase is right off the kitchen — the natural hub of the home, upstairs and downstairs always within reach.' ],
		],
	],

	'features' => [
		'title' => 'Everything a serious cook<br><em>actually needs.</em>',
		'cards' => [
			[ 'icon' => '🔥', 'title' => 'Gas Range',                'body' => 'Stainless gas range with multiple burners — precise heat control for every style of cooking.' ],
			[ 'icon' => '🧊', 'title' => 'Side-by-Side Refrigerator','body' => 'Large stainless side-by-side fridge with ice and water — recently updated as part of the ~$5k appliance refresh.' ],
			[ 'icon' => '✨', 'title' => 'Granite Counters',         'body' => 'Speckled granite throughout — durable, heat-resistant, and generous in surface area for prep and serving.' ],
			[ 'icon' => '🚿', 'title' => 'Deep Sink &amp; Dishwasher','body' => 'Stainless undermount sink in the peninsula, with a full-size stainless dishwasher alongside — recently updated.' ],
			[ 'icon' => '💡', 'title' => 'Recessed Lighting',        'body' => 'Generous recessed lighting across the full ceiling — bright and even, with a pendant over the dining area.' ],
			[ 'icon' => '🪟', 'title' => 'Natural Light',            'body' => 'Windows on multiple sides — the breakfast nook and living room windows keep the space bright all day.' ],
		],
	],

	'herb' => [
		'icon'  => '🌿',
		'title' => 'The herb garden is<br><em>steps from the kitchen door.</em>',
		'body'  => 'Mint, basil, and rosemary — fresh in summer, preserved for winter — grown just outside in the chemical-free garden that\'s been producing for fourteen years. From garden to chopping board in under a minute.',
	],

	'cta' => [
		'title'    => 'Come and cook something.',
		'body'     => 'The best way to know a kitchen is to stand in it. Schedule a private tour of 4007 Strendal Drive and see how the whole ground floor flows together.',
		'btn_text' => 'Schedule a Private Tour',
		'btn_url'  => 'tel:+19190000000',
	],

];

/* ════════════════════════════════════════════════════════
   FIELD RESOLUTION
   ════════════════════════════════════════════════════════ */

/* ── Hero ── */
$hero_use_default = strendal_field( 'kt_hero_use_default', $post_id );
if ( $hero_use_default || $hero_use_default === null ) {
	$hero_eyebrow = $KT['hero']['eyebrow'];
	$hero_title   = $KT['hero']['title'];
	$hero_sub     = $KT['hero']['sub'];
	$hero_bg      = $KT['hero']['bg'];
} else {
	$hero_eyebrow = strendal_field( 'kt_hero_eyebrow', $post_id ) ?: $KT['hero']['eyebrow'];
	$hero_title   = strendal_field( 'kt_hero_title',   $post_id ) ?: $KT['hero']['title'];
	$hero_sub     = strendal_field( 'kt_hero_sub',     $post_id ) ?: $KT['hero']['sub'];
	$raw_bg       = strendal_field( 'kt_hero_bg',      $post_id );
	$hero_bg      = $raw_bg ?: $KT['hero']['bg'];
}
$hero_img_style = $hero_bg && ! empty( $hero_bg['url'] )
	? ' style="background-image:url(\'' . esc_url( $hero_bg['url'] ) . '\')"'
	: '';

/* ── Spec Strip ── */
$spec_use_default = strendal_field( 'kt_spec_use_default', $post_id );
if ( $spec_use_default || $spec_use_default === null ) {
	$specs = $KT['specs'];
} else {
	$raw   = strendal_field( 'kt_specs', $post_id ) ?: [];
	$specs = $raw
		? array_map( fn( $v ) => [ 'num' => $v['kt_spec_num'], 'label' => $v['kt_spec_label'] ], $raw )
		: $KT['specs'];
}

/* ── Open Plan Section ── */
$open_use_default = strendal_field( 'kt_open_use_default', $post_id );
if ( $open_use_default || $open_use_default === null ) {
	$open_label  = $KT['open_plan']['label'];
	$open_title  = $KT['open_plan']['title'];
	$open_body_1 = $KT['open_plan']['body_1'];
	$open_body_2 = $KT['open_plan']['body_2'];
	$open_body_3 = $KT['open_plan']['body_3'];
	$open_photo  = $KT['open_plan']['photo'];
} else {
	$open_label  = strendal_field( 'kt_open_label',  $post_id ) ?: $KT['open_plan']['label'];
	$open_title  = strendal_field( 'kt_open_title',  $post_id ) ?: $KT['open_plan']['title'];
	$open_body_1 = strendal_field( 'kt_open_body_1', $post_id ) ?: $KT['open_plan']['body_1'];
	$open_body_2 = strendal_field( 'kt_open_body_2', $post_id ) ?: $KT['open_plan']['body_2'];
	$open_body_3 = strendal_field( 'kt_open_body_3', $post_id ) ?: $KT['open_plan']['body_3'];
	$raw_photo   = strendal_field( 'kt_open_photo',  $post_id );
	$open_photo  = $raw_photo
		? [ 'url' => $raw_photo['url'], 'alt' => $raw_photo['alt'], 'caption' => strendal_field( 'kt_open_photo_caption', $post_id ) ?: $KT['open_plan']['photo']['caption'] ]
		: $KT['open_plan']['photo'];
}

/* ── Two-Photo Row ── */
$twophoto_use_default = strendal_field( 'kt_twophoto_use_default', $post_id );
if ( $twophoto_use_default || $twophoto_use_default === null ) {
	$two_photos = $KT['two_photos'];
} else {
	$raw        = strendal_field( 'kt_two_photos', $post_id ) ?: [];
	$two_photos = $raw
		? array_map( fn( $v ) => [
			'url'     => $v['kt_tp_photo'] ? $v['kt_tp_photo']['url'] : '',
			'alt'     => $v['kt_tp_photo'] ? $v['kt_tp_photo']['alt'] : '',
			'caption' => $v['kt_tp_caption'],
		], $raw )
		: $KT['two_photos'];
}

/* ── Connections Section ── */
$conn_use_default = strendal_field( 'kt_conn_use_default', $post_id );
if ( $conn_use_default || $conn_use_default === null ) {
	$conn_quote = $KT['connections']['quote'];
	$conn_items = $KT['connections']['items'];
} else {
	$conn_quote = strendal_field( 'kt_conn_quote', $post_id ) ?: $KT['connections']['quote'];
	$raw        = strendal_field( 'kt_conn_items', $post_id ) ?: [];
	$conn_items = $raw
		? array_map( fn( $v ) => [ 'title' => $v['kt_conn_item_title'], 'body' => $v['kt_conn_item_body'] ], $raw )
		: $KT['connections']['items'];
}

/* ── Features Grid ── */
$feat_use_default = strendal_field( 'kt_feat_use_default', $post_id );
if ( $feat_use_default || $feat_use_default === null ) {
	$feat_title = $KT['features']['title'];
	$feat_cards = $KT['features']['cards'];
} else {
	$feat_title = strendal_field( 'kt_feat_title', $post_id ) ?: $KT['features']['title'];
	$raw        = strendal_field( 'kt_feat_cards', $post_id ) ?: [];
	$feat_cards = $raw
		? array_map( fn( $c ) => [ 'icon' => $c['kt_feat_icon'], 'title' => $c['kt_feat_title'], 'body' => $c['kt_feat_body'] ], $raw )
		: $KT['features']['cards'];
}

/* ── Herb Garden Tie-In ── */
$herb_use_default = strendal_field( 'kt_herb_use_default', $post_id );
if ( $herb_use_default || $herb_use_default === null ) {
	$herb_icon  = $KT['herb']['icon'];
	$herb_title = $KT['herb']['title'];
	$herb_body  = $KT['herb']['body'];
} else {
	$herb_icon  = strendal_field( 'kt_herb_icon',  $post_id ) ?: $KT['herb']['icon'];
	$herb_title = strendal_field( 'kt_herb_title', $post_id ) ?: $KT['herb']['title'];
	$herb_body  = strendal_field( 'kt_herb_body',  $post_id ) ?: $KT['herb']['body'];
}

/* ── CTA ── */
$cta_use_default = strendal_field( 'kt_cta_use_default', $post_id );
if ( $cta_use_default || $cta_use_default === null ) {
	$cta_title    = $KT['cta']['title'];
	$cta_body     = $KT['cta']['body'];
	$cta_btn_text = $KT['cta']['btn_text'];
	$cta_btn_url  = $KT['cta']['btn_url'];
} else {
	$cta_title    = strendal_field( 'kt_cta_title',    $post_id ) ?: $KT['cta']['title'];
	$cta_body     = strendal_field( 'kt_cta_body',     $post_id ) ?: $KT['cta']['body'];
	$cta_btn_text = strendal_field( 'kt_cta_btn_text', $post_id ) ?: $KT['cta']['btn_text'];
	$cta_btn_url  = strendal_field( 'kt_cta_btn_url',  $post_id ) ?: $KT['cta']['btn_url'];
}

/* ════════════════════════════════════════════════════════
   RENDER
   ════════════════════════════════════════════════════════ */
get_header();
?>

<!-- ── HERO ── -->
<section class="kt-hero">
  <div class="hero-img"<?php echo $hero_img_style; ?>></div>
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <p class="hero-eyebrow"><?php echo esc_html( $hero_eyebrow ); ?></p>
    <h1 class="hero-title"><?php echo wp_kses_post( $hero_title ); ?></h1>
    <p class="hero-sub"><?php echo esc_html( $hero_sub ); ?></p>
  </div>
</section>

<!-- ── SPEC STRIP ── -->
<div class="kt-spec-strip">
  <?php foreach ( $specs as $spec ) : ?>
  <div class="spec-item">
    <div class="spec-num"><?php echo esc_html( $spec['num'] ); ?></div>
    <div class="spec-label"><?php echo wp_kses_post( $spec['label'] ); ?></div>
  </div>
  <?php endforeach; ?>
</div>

<!-- ── OPEN PLAN SECTION ── -->
<section class="kt-open-plan">
  <div class="reveal">
    <p class="kt-section-label"><?php echo esc_html( $open_label ); ?></p>
    <h2><?php echo wp_kses_post( $open_title ); ?></h2>
    <?php if ( $open_body_1 ) : ?><p><?php echo esc_html( $open_body_1 ); ?></p><?php endif; ?>
    <?php if ( $open_body_2 ) : ?><p><?php echo esc_html( $open_body_2 ); ?></p><?php endif; ?>
    <?php if ( $open_body_3 ) : ?><p><?php echo esc_html( $open_body_3 ); ?></p><?php endif; ?>
  </div>
  <div class="kt-photo-frame reveal reveal-delay-2">
    <?php if ( ! empty( $open_photo['url'] ) ) : ?>
    <img src="<?php echo esc_url( $open_photo['url'] ); ?>"
         alt="<?php echo esc_attr( $open_photo['alt'] ); ?>">
    <?php endif; ?>
    <?php if ( ! empty( $open_photo['caption'] ) ) : ?>
    <div class="kt-photo-caption"><?php echo esc_html( $open_photo['caption'] ); ?></div>
    <?php endif; ?>
  </div>
</section>

<!-- ── TWO-PHOTO ROW ── -->
<div class="kt-two-photo-row">
  <?php foreach ( $two_photos as $i => $photo ) :
    $delay = $i > 0 ? ' reveal-delay-' . $i : '';
  ?>
  <div class="kt-tp-frame reveal<?php echo $delay; ?>">
    <?php if ( ! empty( $photo['url'] ) ) : ?>
    <img src="<?php echo esc_url( $photo['url'] ); ?>"
         alt="<?php echo esc_attr( $photo['alt'] ); ?>">
    <?php endif; ?>
    <?php if ( ! empty( $photo['caption'] ) ) : ?>
    <div class="kt-tp-caption"><?php echo esc_html( $photo['caption'] ); ?></div>
    <?php endif; ?>
  </div>
  <?php endforeach; ?>
</div>

<!-- ── CONNECTIONS DARK SECTION ── -->
<div class="kt-connections">
  <div class="kt-connections-inner">
    <div class="kt-conn-left reveal">
      <?php echo wp_kses_post( $conn_quote ); ?>
    </div>
    <div class="kt-conn-right reveal reveal-delay-2">
      <?php foreach ( $conn_items as $item ) : ?>
      <div class="kt-conn-item">
        <div class="kt-conn-item-title"><?php echo esc_html( $item['title'] ); ?></div>
        <div class="kt-conn-item-body"><?php echo esc_html( $item['body'] ); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- ── FEATURES GRID ── -->
<section class="kt-features-section">
  <div class="kt-features-inner">
    <div class="kt-features-header reveal">
      <p class="kt-section-label" style="justify-content:center;">Kitchen Details</p>
      <h2><?php echo wp_kses_post( $feat_title ); ?></h2>
    </div>
    <div class="kt-features-grid">
      <?php foreach ( $feat_cards as $i => $card ) :
        $col   = $i % 3;
        $delay = $col > 0 ? ' reveal-delay-' . $col : '';
      ?>
      <div class="kt-feature-card reveal<?php echo $delay; ?>">
        <div class="kt-fc-icon"><?php echo esc_html( $card['icon'] ); ?></div>
        <div>
          <div class="kt-fc-title"><?php echo esc_html( $card['title'] ); ?></div>
          <div class="kt-fc-body"><?php echo wp_kses_post( $card['body'] ); ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── HERB GARDEN TIE-IN ── -->
<div class="kt-herb-tieup">
  <div class="kt-herb-tieup-inner reveal">
    <div class="kt-herb-tieup-icon"><?php echo esc_html( $herb_icon ); ?></div>
    <div class="kt-herb-tieup-text">
      <h3><?php echo wp_kses_post( $herb_title ); ?></h3>
      <p><?php echo esc_html( $herb_body ); ?></p>
    </div>
  </div>
</div>

<!-- ── CTA ── -->
<div class="kt-cta-strip" id="contact">
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
  }, { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(function (el) { observer.observe(el); });
})();
</script>
