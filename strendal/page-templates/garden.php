<?php
/**
 * Template Name: The Garden
 * Template Post Type: page
 *
 * Full-page "The Garden" layout.
 * Each section has a "Content Source" toggle (Default / Custom).
 * Default content extracted from strendal_garden.html.
 */

defined( 'ABSPATH' ) || exit;

$post_id   = get_the_ID();
$theme_uri = get_template_directory_uri();
$img_base  = $theme_uri . '/assets/images/garden';

if ( ! function_exists( 'strendal_field' ) ) {
	function strendal_field( string $name, int $post_id ) {
		return function_exists( 'get_field' ) ? get_field( $name, $post_id ) : null;
	}
}

/* ════════════════════════════════════════════════════════
   DEFAULT CONTENT
   ════════════════════════════════════════════════════════ */
$GD = [

	'hero' => [
		'eyebrow'  => 'The Garden · 4007 Strendal Dr',
		'title'    => 'Fourteen years of food.<br><em>Zero pesticides. Ever.</em>',
		'subtitle' => 'Not a raised bed hobby garden. A real, in-ground, chemical-free growing system that has fed a family for over a decade — and is ready to feed yours.',
		'stats'    => [
			[ 'num' => '14 yrs', 'lbl' => 'Chemical-free' ],
			[ 'num' => '0',      'lbl' => 'Pesticides used' ],
			[ 'num' => '8 mo',   'lbl' => 'Growing season' ],
			[ 'num' => '5+',     'lbl' => 'Varieties of pepper' ],
		],
	],

	'zero' => [
		'items' => [
			[ 'icon' => '🌱', 'text' => '100% Chemical-Free Soil' ],
			[ 'icon' => '👶', 'text' => 'Safe for children &amp; pets' ],
			[ 'icon' => '🍅', 'text' => 'March through October harvest' ],
			[ 'icon' => '🌿', 'text' => 'Living soil — 14 years nurtured' ],
		],
	],

	'philosophy' => [
		'eyebrow' => 'The Philosophy',
		'title'   => 'When your children play here,<br><em>the soil matters.</em>',
		'paras'   => [
			'Most people talk about wanting a garden. The family at 4007 Strendal Drive actually built one — and maintained it, without a single drop of pesticide, for fourteen years.',
			'This isn\'t performance gardening. It\'s a working, productive, in-ground plot that has yielded tomatoes, cucumbers, peppers, garlic, bitter gourd, squash, and beans season after season. The kind of harvest that fills baskets. That gets shared with neighbours. That gets frozen, dehydrated, and preserved for winter.',
			'North Carolina gives you nearly eight months of growing season — from March through October. The soil here is ready. Alive. Waiting.',
		],
		'caption' => 'A single day\'s harvest · Summer 2024',
	],

	'grows' => [
		'eyebrow'    => 'What Grows Here',
		'title'      => 'Five varieties of pepper.<br><em>And that\'s just the beginning.</em>',
		'cards'      => [
			[ 'emoji' => '🍅', 'name' => 'Tomatoes',            'note' => 'Multiple varieties · heirloom &amp; hybrid · heavy yield' ],
			[ 'emoji' => '🌶️', 'name' => 'Peppers',             'note' => '5+ varieties including jalapeño, banana, bell &amp; hot' ],
			[ 'emoji' => '🥒', 'name' => 'Cucumbers',           'note' => 'Trellis-grown · crisp &amp; abundant through summer' ],
			[ 'emoji' => '🧄', 'name' => 'Garlic &amp; Onions', 'note' => 'Planted in autumn · harvested early summer' ],
			[ 'emoji' => '🥬', 'name' => 'Bitter Gourd',        'note' => 'A rare find · grows vigorously on trellis' ],
			[ 'emoji' => '🫘', 'name' => 'Beans',               'note' => 'Green &amp; flat varieties · continuous harvest' ],
			[ 'emoji' => '🥒', 'name' => 'Zucchini &amp; Squash', 'note' => 'Prolific growers · feed the whole neighbourhood' ],
			[ 'emoji' => '🌻', 'name' => 'Sunflowers',          'note' => 'Natural pollinators · tall sentinels by the fence' ],
		],
		'herb_label' => 'Herb Garden · Just outside the kitchen door',
		'herbs'      => [ 'Mint', 'Basil', 'Rosemary', 'Fresh in summer · frozen &amp; dehydrated for winter' ],
	],

	'abundance' => [
		'img_caption' => 'Box harvest · Heirloom tomatoes · August 2024',
		'eyebrow'     => 'The Yield',
		'title'       => 'Not a few tomatoes.<br><em>Boxes of them.</em>',
		'paras'       => [
			'This is what a properly established, chemically untouched garden produces. Not a plant or two on a patio — a real growing system that has had fourteen seasons to mature, deepen, and become extraordinarily productive.',
			'The tomatoes fill boxes. The peppers come faster than you can use them. The herbs dry on their own. In season, this garden genuinely reduces your grocery bill — and everything you eat from it, you grew yourself.',
		],
	],

	'quote' => [
		'text'        => 'When your children play in this yard, you want soil that\'s alive — not poisoned. When you harvest, you want food that nourishes — not chemicals that harm.',
		'attribution' => '14 years of chemical-free growing · 4007 Strendal Dr · Cary, NC',
	],

	'facts' => [
		'eyebrow' => 'Why This Matters',
		'title'   => 'Fourteen years of<br><em>living soil.</em>',
		'body'    => 'Healthy soil doesn\'t happen overnight. It builds over years of composting, careful growing, and the absence of chemical intervention. The soil at 4007 Strendal is ready to produce — from the very first season.',
		'cards'   => [
			[ 'icon' => '🧪', 'title' => 'Zero Pesticides',      'body' => 'Not a single pesticide application in 14 years. The soil\'s natural ecosystem is intact and thriving.' ],
			[ 'icon' => '🌍', 'title' => 'In-Ground, Not Raised', 'body' => 'This is a true in-ground garden — deeper root systems, better water retention, more productive growing.' ],
			[ 'icon' => '❄️', 'title' => 'Year-Round Produce',   'body' => 'Fresh from the garden in summer. Frozen, dried, and preserved herbs carry the harvest through winter.' ],
			[ 'icon' => '☀️', 'title' => '8 Months of Season',   'body' => 'North Carolina\'s climate gives you March through October. One of the longest growing seasons in the US.' ],
		],
	],

	'cta' => [
		'title'    => 'Come and walk the garden yourself.',
		'body'     => 'No description does it justice. Schedule a private tour of 4007 Strendal Drive and step into the garden that\'s been building quietly for fourteen years.',
		'btn_text' => 'Schedule a Private Tour',
		'btn_url'  => '#contact',
	],

];

/* ════════════════════════════════════════════════════════
   FIELD RESOLUTION
   ════════════════════════════════════════════════════════ */

/* ── Hero ── */
$hero_use_default = strendal_field( 'gd_hero_use_default', $post_id );
if ( $hero_use_default || $hero_use_default === null ) {
	$hero_bg       = [ 'url' => $img_base . '/hero_bg.jpg', 'alt' => '' ];
	$hero_eyebrow  = $GD['hero']['eyebrow'];
	$hero_title    = $GD['hero']['title'];
	$hero_subtitle = $GD['hero']['subtitle'];
	$hero_stats    = $GD['hero']['stats'];
} else {
	$hero_bg       = strendal_field( 'gd_hero_bg_image', $post_id );
	$hero_eyebrow  = strendal_field( 'gd_hero_eyebrow',  $post_id ) ?: $GD['hero']['eyebrow'];
	$hero_title    = strendal_field( 'gd_hero_title',    $post_id ) ?: $GD['hero']['title'];
	$hero_subtitle = strendal_field( 'gd_hero_subtitle', $post_id ) ?: $GD['hero']['subtitle'];
	$raw_stats     = strendal_field( 'gd_hero_stats',    $post_id ) ?: [];
	$hero_stats    = $raw_stats
		? array_map( fn( $s ) => [ 'num' => $s['stat_num'], 'lbl' => $s['stat_lbl'] ], $raw_stats )
		: $GD['hero']['stats'];
}

/* ── Zero Banner ── */
$zero_use_default = strendal_field( 'gd_zero_use_default', $post_id );
if ( $zero_use_default || $zero_use_default === null ) {
	$zero_items = $GD['zero']['items'];
} else {
	$raw_zero   = strendal_field( 'gd_zero_items', $post_id ) ?: [];
	$zero_items = $raw_zero
		? array_map( fn( $z ) => [ 'icon' => $z['zi_icon'], 'text' => $z['zi_text'] ], $raw_zero )
		: $GD['zero']['items'];
}

/* ── Philosophy ── */
$phil_use_default = strendal_field( 'gd_phil_use_default', $post_id );
if ( $phil_use_default || $phil_use_default === null ) {
	$phil_eyebrow = $GD['philosophy']['eyebrow'];
	$phil_title   = $GD['philosophy']['title'];
	$phil_paras   = $GD['philosophy']['paras'];
	$phil_image   = [ 'url' => $img_base . '/harvest-basket.jpg', 'alt' => 'A single day\'s harvest' ];
	$phil_caption = $GD['philosophy']['caption'];
} else {
	$phil_eyebrow = strendal_field( 'gd_phil_eyebrow', $post_id ) ?: $GD['philosophy']['eyebrow'];
	$phil_title   = strendal_field( 'gd_phil_title',   $post_id ) ?: $GD['philosophy']['title'];
	$raw_paras    = strendal_field( 'gd_phil_paras',   $post_id ) ?: [];
	$phil_paras   = $raw_paras ? array_column( $raw_paras, 'paragraph' ) : $GD['philosophy']['paras'];
	$phil_image   = strendal_field( 'gd_phil_image',   $post_id );
	$phil_caption = strendal_field( 'gd_phil_caption', $post_id ) ?: $GD['philosophy']['caption'];
}

/* ── Grows ── */
$grows_use_default = strendal_field( 'gd_grows_use_default', $post_id );
if ( $grows_use_default || $grows_use_default === null ) {
	$grows_eyebrow    = $GD['grows']['eyebrow'];
	$grows_title      = $GD['grows']['title'];
	$grows_cards      = $GD['grows']['cards'];
	$grows_herb_label = $GD['grows']['herb_label'];
	$grows_herbs      = $GD['grows']['herbs'];
} else {
	$grows_eyebrow    = strendal_field( 'gd_grows_eyebrow',    $post_id ) ?: $GD['grows']['eyebrow'];
	$grows_title      = strendal_field( 'gd_grows_title',      $post_id ) ?: $GD['grows']['title'];
	$raw_cards        = strendal_field( 'gd_grows_cards',       $post_id ) ?: [];
	$grows_cards      = $raw_cards
		? array_map( fn( $c ) => [ 'emoji' => $c['gc_emoji'], 'name' => $c['gc_name'], 'note' => $c['gc_note'] ], $raw_cards )
		: $GD['grows']['cards'];
	$grows_herb_label = strendal_field( 'gd_grows_herb_label', $post_id ) ?: $GD['grows']['herb_label'];
	$raw_herbs        = strendal_field( 'gd_grows_herbs',      $post_id ) ?: [];
	$grows_herbs      = $raw_herbs ? array_column( $raw_herbs, 'herb_name' ) : $GD['grows']['herbs'];
}

/* ── Abundance ── */
$abundance_use_default = strendal_field( 'gd_abundance_use_default', $post_id );
if ( $abundance_use_default || $abundance_use_default === null ) {
	$abundance_image       = [ 'url' => $img_base . '/harvest-boxes.jpg', 'alt' => 'Box harvest · Heirloom tomatoes' ];
	$abundance_img_caption = $GD['abundance']['img_caption'];
	$abundance_eyebrow     = $GD['abundance']['eyebrow'];
	$abundance_title       = $GD['abundance']['title'];
	$abundance_paras       = $GD['abundance']['paras'];
} else {
	$abundance_image       = strendal_field( 'gd_abundance_image',       $post_id );
	$abundance_img_caption = strendal_field( 'gd_abundance_img_caption', $post_id ) ?: $GD['abundance']['img_caption'];
	$abundance_eyebrow     = strendal_field( 'gd_abundance_eyebrow',     $post_id ) ?: $GD['abundance']['eyebrow'];
	$abundance_title       = strendal_field( 'gd_abundance_title',       $post_id ) ?: $GD['abundance']['title'];
	$raw_paras             = strendal_field( 'gd_abundance_paras',       $post_id ) ?: [];
	$abundance_paras       = $raw_paras ? array_column( $raw_paras, 'paragraph' ) : $GD['abundance']['paras'];
}

/* ── Quote ── */
$quote_use_default = strendal_field( 'gd_quote_use_default', $post_id );
if ( $quote_use_default || $quote_use_default === null ) {
	$quote_text        = $GD['quote']['text'];
	$quote_attribution = $GD['quote']['attribution'];
} else {
	$quote_text        = strendal_field( 'gd_quote_text',        $post_id ) ?: $GD['quote']['text'];
	$quote_attribution = strendal_field( 'gd_quote_attribution', $post_id ) ?: $GD['quote']['attribution'];
}

/* ── Season Facts ── */
$facts_use_default = strendal_field( 'gd_facts_use_default', $post_id );
if ( $facts_use_default || $facts_use_default === null ) {
	$facts_eyebrow = $GD['facts']['eyebrow'];
	$facts_title   = $GD['facts']['title'];
	$facts_body    = $GD['facts']['body'];
	$facts_cards   = $GD['facts']['cards'];
} else {
	$facts_eyebrow = strendal_field( 'gd_facts_eyebrow', $post_id ) ?: $GD['facts']['eyebrow'];
	$facts_title   = strendal_field( 'gd_facts_title',   $post_id ) ?: $GD['facts']['title'];
	$facts_body    = strendal_field( 'gd_facts_body',    $post_id ) ?: $GD['facts']['body'];
	$raw_cards     = strendal_field( 'gd_facts_cards',   $post_id ) ?: [];
	$facts_cards   = $raw_cards
		? array_map( fn( $c ) => [ 'icon' => $c['fc_icon'], 'title' => $c['fc_title'], 'body' => $c['fc_body'] ], $raw_cards )
		: $GD['facts']['cards'];
}

/* ── CTA ── */
$cta_use_default = strendal_field( 'gd_cta_use_default', $post_id );
if ( $cta_use_default || $cta_use_default === null ) {
	$cta_title    = $GD['cta']['title'];
	$cta_body     = $GD['cta']['body'];
	$cta_btn_text = $GD['cta']['btn_text'];
	$cta_btn_url  = $GD['cta']['btn_url'];
} else {
	$cta_title    = strendal_field( 'gd_cta_title',    $post_id ) ?: $GD['cta']['title'];
	$cta_body     = strendal_field( 'gd_cta_body',     $post_id ) ?: $GD['cta']['body'];
	$cta_btn_text = strendal_field( 'gd_cta_btn_text', $post_id ) ?: $GD['cta']['btn_text'];
	$cta_btn_url  = strendal_field( 'gd_cta_btn_url',  $post_id ) ?: $GD['cta']['btn_url'];
}

/* ════════════════════════════════════════════════════════
   RENDER
   ════════════════════════════════════════════════════════ */
get_header();
?>

<!-- ── HERO ── -->
<section class="gd-hero">
  <?php
  $hero_img_style = $hero_bg ? ' style="background-image: url(' . esc_url( $hero_bg['url'] ) . ')"' : '';
  ?>
  <div class="hero-img"<?php echo $hero_img_style; ?>></div>
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <p class="hero-eyebrow"><?php echo wp_kses_post( $hero_eyebrow ); ?></p>
    <h1 class="hero-title"><?php echo wp_kses_post( $hero_title ); ?></h1>
    <p class="hero-sub"><?php echo wp_kses_post( $hero_subtitle ); ?></p>
    <div class="hero-stats">
      <?php foreach ( $hero_stats as $stat ) : ?>
        <div class="hero-stat">
          <div class="hs-num"><?php echo esc_html( $stat['num'] ); ?></div>
          <div class="hs-label"><?php echo wp_kses_post( $stat['lbl'] ); ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── ZERO PESTICIDE BANNER ── -->
<div class="zero-banner">
  <?php foreach ( $zero_items as $i => $item ) : ?>
    <?php if ( $i > 0 ) : ?><div class="zero-divider"></div><?php endif; ?>
    <div class="zero-item">
      <span class="zero-icon"><?php echo wp_kses_post( $item['icon'] ); ?></span>
      <span class="zero-text"><?php echo wp_kses_post( $item['text'] ); ?></span>
    </div>
  <?php endforeach; ?>
</div>

<!-- ── PHILOSOPHY ── -->
<section class="philosophy">
  <div class="phil-left reveal">
    <p class="phil-label"><?php echo esc_html( $phil_eyebrow ); ?></p>
    <h2><?php echo wp_kses_post( $phil_title ); ?></h2>
    <?php foreach ( $phil_paras as $para ) : ?>
      <p><?php echo wp_kses_post( $para ); ?></p>
    <?php endforeach; ?>
  </div>
  <div class="basket-block reveal reveal-delay-2">
    <?php if ( $phil_image ) : ?>
      <img src="<?php echo esc_url( $phil_image['url'] ); ?>"
           alt="<?php echo esc_attr( $phil_image['alt'] ?: $phil_caption ); ?>">
    <?php endif; ?>
    <div class="basket-caption"><?php echo esc_html( $phil_caption ); ?></div>
  </div>
</section>

<!-- ── WHAT GROWS HERE ── -->
<section class="grows-section">
  <div class="grows-inner">
    <div class="grows-header reveal">
      <p class="grows-label"><?php echo esc_html( $grows_eyebrow ); ?></p>
      <h2><?php echo wp_kses_post( $grows_title ); ?></h2>
    </div>
    <div class="produce-grid">
      <?php foreach ( $grows_cards as $i => $card ) : ?>
        <?php $delay = $i % 4; ?>
        <div class="produce-card reveal<?php echo $delay ? ' reveal-delay-' . $delay : ''; ?>">
          <div class="produce-emoji"><?php echo wp_kses_post( $card['emoji'] ); ?></div>
          <div class="produce-name"><?php echo wp_kses_post( $card['name'] ); ?></div>
          <div class="produce-note"><?php echo wp_kses_post( $card['note'] ); ?></div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="herb-strip reveal">
      <span class="herb-strip-label"><?php echo wp_kses_post( $grows_herb_label ); ?></span>
      <div class="herb-divider"></div>
      <?php foreach ( $grows_herbs as $herb ) : ?>
        <span class="herb-item"><span class="herb-dot"></span><?php echo wp_kses_post( $herb ); ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── ABUNDANCE ── -->
<section class="abundance">
  <div class="abundance-img reveal">
    <?php if ( $abundance_image ) : ?>
      <img src="<?php echo esc_url( $abundance_image['url'] ); ?>"
           alt="<?php echo esc_attr( $abundance_image['alt'] ?: $abundance_img_caption ); ?>">
    <?php endif; ?>
    <div class="abundance-img-caption"><?php echo esc_html( $abundance_img_caption ); ?></div>
  </div>
  <div class="abundance-right reveal reveal-delay-2">
    <p class="phil-label"><?php echo esc_html( $abundance_eyebrow ); ?></p>
    <h2><?php echo wp_kses_post( $abundance_title ); ?></h2>
    <?php foreach ( $abundance_paras as $para ) : ?>
      <p><?php echo wp_kses_post( $para ); ?></p>
    <?php endforeach; ?>
    <div class="season-bar">
      <div class="season-bar-header">Growing Season — March through October</div>
      <div class="season-months">
        <div class="month">Jan</div>
        <div class="month">Feb</div>
        <div class="month grow">Mar</div>
        <div class="month grow">Apr</div>
        <div class="month grow">May</div>
        <div class="month peak">Jun</div>
        <div class="month peak">Jul</div>
        <div class="month peak">Aug</div>
        <div class="month peak">Sep</div>
        <div class="month grow">Oct</div>
        <div class="month">Nov</div>
        <div class="month">Dec</div>
      </div>
    </div>
  </div>
</section>

<!-- ── QUOTE ── -->
<section class="quote-section">
  <div class="quote-inner reveal">
    <span class="quote-mark">&ldquo;</span>
    <p class="quote-text"><?php echo wp_kses_post( $quote_text ); ?></p>
    <p class="quote-attribution"><?php echo wp_kses_post( $quote_attribution ); ?></p>
  </div>
</section>

<!-- ── SEASON FACTS ── -->
<section class="season-facts">
  <div class="season-inner">
    <div class="season-left reveal">
      <p class="phil-label"><?php echo esc_html( $facts_eyebrow ); ?></p>
      <h2><?php echo wp_kses_post( $facts_title ); ?></h2>
      <p><?php echo wp_kses_post( $facts_body ); ?></p>
    </div>
    <div class="season-cards">
      <?php foreach ( $facts_cards as $i => $card ) : ?>
        <div class="season-card reveal<?php echo $i > 0 ? ' reveal-delay-' . min( $i, 4 ) : ''; ?>">
          <div class="sc-icon"><?php echo wp_kses_post( $card['icon'] ); ?></div>
          <div class="sc-title"><?php echo esc_html( $card['title'] ); ?></div>
          <div class="sc-body"><?php echo wp_kses_post( $card['body'] ); ?></div>
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

<?php get_template_part( 'template-parts/editor-content' ); ?>

<?php get_footer(); ?>

<script>
(function () {
  var reveals = document.querySelectorAll('.reveal');
  if (!reveals.length || !('IntersectionObserver' in window)) {
    reveals.forEach(function (el) { el.classList.add('visible'); });
    return;
  }
  var obs = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        obs.unobserve(e.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
  reveals.forEach(function (el) { obs.observe(el); });
})();
</script>
