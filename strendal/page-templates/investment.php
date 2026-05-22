<?php
/**
 * Template Name: The Investment
 * Template Post Type: page
 *
 * Full-page "The Investment" layout.
 * Each section has a "Content Source" toggle (Default / Custom).
 * Default content extracted from strendal_investment.html.
 */

defined( 'ABSPATH' ) || exit;

$post_id   = get_the_ID();
$theme_uri = get_template_directory_uri();

if ( ! function_exists( 'strendal_field' ) ) {
	function strendal_field( string $name, int $post_id ) {
		return function_exists( 'get_field' ) ? get_field( $name, $post_id ) : null;
	}
}

/* ════════════════════════════════════════════════════════
   DEFAULT CONTENT
   ════════════════════════════════════════════════════════ */
$INV = [

	'hero' => [
		'eyebrow'      => 'The Investment · 4007 Strendal Dr',
		'title'        => 'You\'re not buying<br>a project.<br><em>It\'s already done.</em>',
		'sub'          => 'Every surface refreshed. Every major system attended to. Fourteen years of careful ownership — and a final round of renovations completed before listing. Move in. Unpack. Live.',
		'card_eyebrow' => 'Confirmed Recent Investment',
		'card_amount'  => '$29,500+',
		'card_note'    => 'In documented improvements — completed before listing',
		'card_items'   => [
			[ 'name' => 'New roof (2023)',             'value' => '~$20,000', 'style' => 'gold' ],
			[ 'name' => 'New appliances',              'value' => '~$5,000',  'style' => 'gold' ],
			[ 'name' => 'Kitchen ceramic tile',        'value' => '~$2,000',  'style' => 'gold' ],
			[ 'name' => 'Kitchen cabinet repaint',     'value' => '~$2,500',  'style' => 'gold' ],
			[ 'name' => '+ Additional upgrades below', 'value' => 'see full list', 'style' => 'plus' ],
		],
	],

	'investments' => [
		'header_label' => 'What Was Done',
		'header_title' => 'Every room touched.<br><em>Nothing left for the next owner to fix.</em>',
		'header_body'  => 'These are not deferred improvements — they are completed works, done before listing, so that whoever buys this home inherits a house in its best condition.',
		'cards' => [
			[ 'icon' => '🏠', 'title' => 'New Roof',                   'body' => 'A full roof replacement in 2023 — one of the most significant investments a homeowner can make. Quality materials, professional installation. Peace of mind for decades.',                                                                                   'foot_label' => 'Completed',               'foot_val' => '~$20,000 · 2023',          'foot_style' => 'gold'  ],
			[ 'icon' => '🍳', 'title' => 'Kitchen — Fully Updated',     'body' => 'New ceramic tile floor throughout the kitchen. Cabinets completely repainted in a fresh, modern finish — the whole room transformed without a full remodel. New dishwasher included.',                                                                          'foot_label' => 'Tile + Repaint',          'foot_val' => '~$4,500',                  'foot_style' => 'gold'  ],
			[ 'icon' => '🧺', 'title' => 'New Appliances',              'body' => 'New washer in the upper floor laundry room. New dishwasher in the kitchen. Major appliances replaced so the next owner starts fresh — no aging machines to budget for.',                                                                                       'foot_label' => 'Appliances',              'foot_val' => '~$5,000',                  'foot_style' => 'gold'  ],
			[ 'icon' => '🪟', 'title' => 'Brand New Carpet',            'body' => 'New carpet installed throughout the entire house — both floors, every carpeted room. Fresh underfoot from day one. No worn patches, no stains, no odours. A full reset.',                                                                                       'foot_label' => 'Both floors',             'foot_val' => 'Completed pre-listing',    'foot_style' => 'muted' ],
			[ 'icon' => '🎨', 'title' => 'Full House Repaint',          'body' => 'Every wall, both floors, professionally repainted throughout. A completely fresh interior — clean, bright, and ready to move into without touching a paintbrush.',                                                                                              'foot_label' => 'Both floors — all rooms', 'foot_val' => 'Completed pre-listing',    'foot_style' => 'muted' ],
			[ 'icon' => '💡', 'title' => '100% LED Lighting',           'body' => 'Every light fixture across both floors replaced with new LED. Lower energy bills from day one, consistent warm light throughout, and no bulbs to replace for years.',                                                                                           'foot_label' => 'Both floors — every fixture', 'foot_val' => 'Completed pre-listing','foot_style' => 'muted' ],
			[ 'icon' => '🚗', 'title' => 'Garage Epoxy Floor',          'body' => 'Professional epoxy coating applied to the full garage floor — sealed, durable, and easy to clean. Protects the concrete, transforms the utility space, and adds finish quality that buyers notice.',                                                            'foot_label' => 'Full garage floor',       'foot_val' => 'Completed pre-listing',    'foot_style' => 'muted' ],
			[ 'icon' => '🧱', 'title' => 'Concrete Side Entrance',      'body' => 'A proper concrete pathway laid at the side entrance — so shoes stay outside where they belong. Works in tandem with the storm door\'s adjustable screen to keep the indoors clean year-round.',                                                                 'foot_label' => 'Side entry',              'foot_val' => 'Completed pre-listing',    'foot_style' => 'muted' ],
			[ 'icon' => '🚿', 'title' => 'Downstairs Bathroom Update',  'body' => 'The ground floor bathroom refreshed with a new mirror and new light fixture — the finishing touches that make a functional bathroom feel properly finished.',                                                                                                   'foot_label' => 'Ground floor bathroom',   'foot_val' => 'Completed pre-listing',    'foot_style' => 'muted' ],
		],
	],

	'movein' => [
		'title'  => 'The question most buyers<br>never think to ask:<br><em>"What\'s left to do?"</em>',
		'body'   => 'At 4007 Strendal Drive, the answer is nothing significant. The roof is done. The floors are done. The paint is done. The appliances are new. The kitchen is updated. The lights are replaced. The garage is finished.',
		'checks' => [
			'New roof — don\'t think about it for 20+ years',
			'New carpet — both floors, every room',
			'Fresh paint — whole house, move-in clean',
			'Updated kitchen — tile, cabinets, appliances',
			'LED lighting — both floors, new fixtures',
			'Garage and entrance — finished and sealed',
		],
	],

	'timeline' => [
		'header_label' => 'A Timeline of Care',
		'header_title' => '14 years of ownership.<br><em>Maintained, not neglected.</em>',
		'items' => [
			[ 'year' => 'From Day One', 'title' => 'Zero Pesticides — Always',        'body' => 'Not a policy introduced later. Chemical-free from the very first season. The garden and soil have never been touched by pesticide in 14 years.',                                                                                                 'amount' => '' ],
			[ 'year' => 'Built In',     'title' => 'Hardwired Technology',             'body' => 'High-speed ethernet, in-wall surround sound wiring on both floors, and security sensors at every entry point — all installed from the start.',                                                                                                   'amount' => '' ],
			[ 'year' => 'Ongoing',      'title' => 'Professional Yard Maintenance',    'body' => 'The lawn has been professionally trimmed every 10 days. The garden has been tended continuously. The property has never been left to fall behind.',                                                                                             'amount' => '' ],
			[ 'year' => '2023',         'title' => 'Brand New Roof',                   'body' => 'Full replacement — ~$20,000 invested. Quality materials, professional installation. One of the most significant protections a home can have.',                                                                                                   'amount' => '~$20,000' ],
			[ 'year' => 'Pre-Listing',  'title' => 'Kitchen Transformation',           'body' => 'New ceramic tile floor (~$2,000). Full cabinet repaint (~$2,500). New dishwasher. The kitchen refreshed for the next owner\'s first morning in the house.',                                                                                     'amount' => '~$4,500+' ],
			[ 'year' => 'Pre-Listing',  'title' => 'Whole-House Reset',                'body' => 'New carpet throughout. Full repaint both floors. 100% LED lighting. Garage epoxy. Concrete side entrance. Bathroom update. Everything done before the first showing.',                                                                           'amount' => 'Significant additional investment' ],
		],
	],

	'argument' => [
		'eyebrow' => 'The Financial Case',
		'title'   => 'Most buyers budget <em>$30–50k</em><br>for fixes after closing.<br>This house doesn\'t need that.',
		'body'    => 'New carpet, fresh paint, updated kitchen, new roof, new appliances, new lighting — these are the standard post-purchase to-do list for most homes in this price range. At 4007 Strendal, they\'re already done. That\'s real money saved, before you spend a single dollar on making the home yours.',
		'stats'   => [
			[ 'num' => '$29,500+', 'label' => 'Documented investment' ],
			[ 'num' => '14',       'label' => 'Years of careful ownership' ],
			[ 'num' => '0',        'label' => 'Major items left to fix' ],
		],
	],

	'lot' => [
		'label'  => 'The Land Premium',
		'title'  => 'The lot itself is<br><em>the rarest investment of all.</em>',
		'body_1' => 'In West Cary, you cannot build more land. The average lot in this area is around 7,500 square feet. This one is nearly 13,000 — almost twice the neighbourhood average. A premium was paid for it when this home was purchased, and that premium only grows over time.',
		'body_2' => 'Lot size in an established West Cary neighbourhood is a fixed asset. The house can be updated. The location can\'t be changed. The land cannot be created. This is not a detail — it is a fundamental part of the investment case.',
		'bars'   => [
			[ 'name' => '4007 Strendal Dr',       'value' => '~12,900 sq ft', 'width' => 100, 'style' => 'gold'  ],
			[ 'name' => 'West Cary average lot',   'value' => '~7,500 sq ft',  'width' => 58,  'style' => 'green' ],
			[ 'name' => 'Typical comparison lot',  'value' => '~5,000 sq ft',  'width' => 38,  'style' => 'green' ],
		],
		'note' => '<strong>72% larger than the West Cary average.</strong> Positioned at the back of a quiet cul-de-sac, elevated above the creek, never flooded in 14 years. You cannot find more of this land — you can only find what exists.',
	],

	'cta' => [
		'title'    => 'See what $29,500+ in improvements looks like in person.',
		'body'     => 'Photographs show surfaces. A tour shows quality. Schedule a private walkthrough of 4007 Strendal Drive and see every improvement for yourself.',
		'btn_text' => 'Schedule a Private Tour',
		'btn_url'  => 'tel:+19190000000',
	],

];

/* ════════════════════════════════════════════════════════
   FIELD RESOLUTION
   ════════════════════════════════════════════════════════ */

/* ── Hero ── */
$hero_use_default = strendal_field( 'inv_hero_use_default', $post_id );
if ( $hero_use_default || $hero_use_default === null ) {
	$hero_eyebrow      = $INV['hero']['eyebrow'];
	$hero_title        = $INV['hero']['title'];
	$hero_sub          = $INV['hero']['sub'];
	$card_eyebrow      = $INV['hero']['card_eyebrow'];
	$card_amount       = $INV['hero']['card_amount'];
	$card_note         = $INV['hero']['card_note'];
	$card_items        = $INV['hero']['card_items'];
} else {
	$hero_eyebrow      = strendal_field( 'inv_hero_eyebrow',   $post_id ) ?: $INV['hero']['eyebrow'];
	$hero_title        = strendal_field( 'inv_hero_title',     $post_id ) ?: $INV['hero']['title'];
	$hero_sub          = strendal_field( 'inv_hero_sub',       $post_id ) ?: $INV['hero']['sub'];
	$card_eyebrow      = strendal_field( 'inv_card_eyebrow',   $post_id ) ?: $INV['hero']['card_eyebrow'];
	$card_amount       = strendal_field( 'inv_card_amount',    $post_id ) ?: $INV['hero']['card_amount'];
	$card_note         = strendal_field( 'inv_card_note',      $post_id ) ?: $INV['hero']['card_note'];
	$raw               = strendal_field( 'inv_card_items',     $post_id ) ?: [];
	$card_items        = $raw
		? array_map( fn( $v ) => [ 'name' => $v['inv_item_name'], 'value' => $v['inv_item_value'], 'style' => $v['inv_item_style'] ?: 'gold' ], $raw )
		: $INV['hero']['card_items'];
}

/* ── Investments Grid ── */
$inv_use_default = strendal_field( 'inv_investments_use_default', $post_id );
if ( $inv_use_default || $inv_use_default === null ) {
	$inv_header_label = $INV['investments']['header_label'];
	$inv_header_title = $INV['investments']['header_title'];
	$inv_header_body  = $INV['investments']['header_body'];
	$inv_cards        = $INV['investments']['cards'];
} else {
	$inv_header_label = strendal_field( 'inv_header_label', $post_id ) ?: $INV['investments']['header_label'];
	$inv_header_title = strendal_field( 'inv_header_title', $post_id ) ?: $INV['investments']['header_title'];
	$inv_header_body  = strendal_field( 'inv_header_body',  $post_id ) ?: $INV['investments']['header_body'];
	$raw              = strendal_field( 'inv_cards',         $post_id ) ?: [];
	$inv_cards        = $raw
		? array_map( fn( $c ) => [
			'icon'       => $c['inv_card_icon'],
			'title'      => $c['inv_card_title'],
			'body'       => $c['inv_card_body'],
			'foot_label' => $c['inv_card_foot_label'],
			'foot_val'   => $c['inv_card_foot_val'],
			'foot_style' => $c['inv_card_foot_style'] ?: 'gold',
		], $raw )
		: $INV['investments']['cards'];
}

/* ── Move-In Ready ── */
$movein_use_default = strendal_field( 'inv_movein_use_default', $post_id );
if ( $movein_use_default || $movein_use_default === null ) {
	$movein_title  = $INV['movein']['title'];
	$movein_body   = $INV['movein']['body'];
	$movein_checks = $INV['movein']['checks'];
} else {
	$movein_title  = strendal_field( 'inv_movein_title', $post_id ) ?: $INV['movein']['title'];
	$movein_body   = strendal_field( 'inv_movein_body',  $post_id ) ?: $INV['movein']['body'];
	$raw           = strendal_field( 'inv_movein_checks', $post_id ) ?: [];
	$movein_checks = $raw ? array_column( $raw, 'inv_check_text' ) : $INV['movein']['checks'];
}

/* ── Timeline ── */
$tl_use_default = strendal_field( 'inv_timeline_use_default', $post_id );
if ( $tl_use_default || $tl_use_default === null ) {
	$tl_header_label = $INV['timeline']['header_label'];
	$tl_header_title = $INV['timeline']['header_title'];
	$tl_items        = $INV['timeline']['items'];
} else {
	$tl_header_label = strendal_field( 'inv_tl_header_label', $post_id ) ?: $INV['timeline']['header_label'];
	$tl_header_title = strendal_field( 'inv_tl_header_title', $post_id ) ?: $INV['timeline']['header_title'];
	$raw             = strendal_field( 'inv_tl_items',         $post_id ) ?: [];
	$tl_items        = $raw
		? array_map( fn( $v ) => [
			'year'   => $v['inv_tl_year'],
			'title'  => $v['inv_tl_title'],
			'body'   => $v['inv_tl_body'],
			'amount' => $v['inv_tl_amount'] ?? '',
		], $raw )
		: $INV['timeline']['items'];
}

/* ── Argument ── */
$arg_use_default = strendal_field( 'inv_argument_use_default', $post_id );
if ( $arg_use_default || $arg_use_default === null ) {
	$arg_eyebrow = $INV['argument']['eyebrow'];
	$arg_title   = $INV['argument']['title'];
	$arg_body    = $INV['argument']['body'];
	$arg_stats   = $INV['argument']['stats'];
} else {
	$arg_eyebrow = strendal_field( 'inv_arg_eyebrow', $post_id ) ?: $INV['argument']['eyebrow'];
	$arg_title   = strendal_field( 'inv_arg_title',   $post_id ) ?: $INV['argument']['title'];
	$arg_body    = strendal_field( 'inv_arg_body',    $post_id ) ?: $INV['argument']['body'];
	$raw         = strendal_field( 'inv_arg_stats',   $post_id ) ?: [];
	$arg_stats   = $raw
		? array_map( fn( $v ) => [ 'num' => $v['inv_stat_num'], 'label' => $v['inv_stat_label'] ], $raw )
		: $INV['argument']['stats'];
}

/* ── Lot Value ── */
$lot_use_default = strendal_field( 'inv_lot_use_default', $post_id );
if ( $lot_use_default || $lot_use_default === null ) {
	$lot_label  = $INV['lot']['label'];
	$lot_title  = $INV['lot']['title'];
	$lot_body_1 = $INV['lot']['body_1'];
	$lot_body_2 = $INV['lot']['body_2'];
	$lot_bars   = $INV['lot']['bars'];
	$lot_note   = $INV['lot']['note'];
} else {
	$lot_label  = strendal_field( 'inv_lot_label',  $post_id ) ?: $INV['lot']['label'];
	$lot_title  = strendal_field( 'inv_lot_title',  $post_id ) ?: $INV['lot']['title'];
	$lot_body_1 = strendal_field( 'inv_lot_body_1', $post_id ) ?: $INV['lot']['body_1'];
	$lot_body_2 = strendal_field( 'inv_lot_body_2', $post_id ) ?: $INV['lot']['body_2'];
	$raw        = strendal_field( 'inv_lot_bars',   $post_id ) ?: [];
	$lot_bars   = $raw
		? array_map( fn( $v ) => [
			'name'  => $v['inv_bar_name'],
			'value' => $v['inv_bar_value'],
			'width' => (int) ( $v['inv_bar_width'] ?? 100 ),
			'style' => $v['inv_bar_style'] ?? 'green',
		], $raw )
		: $INV['lot']['bars'];
	$lot_note   = strendal_field( 'inv_lot_note', $post_id ) ?: $INV['lot']['note'];
}

/* ── CTA ── */
$cta_use_default = strendal_field( 'inv_cta_use_default', $post_id );
if ( $cta_use_default || $cta_use_default === null ) {
	$cta_title    = $INV['cta']['title'];
	$cta_body     = $INV['cta']['body'];
	$cta_btn_text = $INV['cta']['btn_text'];
	$cta_btn_url  = $INV['cta']['btn_url'];
} else {
	$cta_title    = strendal_field( 'inv_cta_title',    $post_id ) ?: $INV['cta']['title'];
	$cta_body     = strendal_field( 'inv_cta_body',     $post_id ) ?: $INV['cta']['body'];
	$cta_btn_text = strendal_field( 'inv_cta_btn_text', $post_id ) ?: $INV['cta']['btn_text'];
	$cta_btn_url  = strendal_field( 'inv_cta_btn_url',  $post_id ) ?: $INV['cta']['btn_url'];
}

/* ════════════════════════════════════════════════════════
   RENDER
   ════════════════════════════════════════════════════════ */
get_header();
?>

<!-- ── HERO ── -->
<section class="inv-hero">
  <div class="hero-bg"></div>
  <div class="hero-grid"></div>
  <div class="hero-inner">
    <div class="reveal">
      <p class="hero-eyebrow"><?php echo wp_kses_post( $hero_eyebrow ); ?></p>
      <h1 class="hero-title"><?php echo wp_kses_post( $hero_title ); ?></h1>
      <p class="hero-sub"><?php echo wp_kses_post( $hero_sub ); ?></p>
    </div>
    <div class="hero-total reveal reveal-delay-2">
      <div class="ht-eyebrow"><?php echo esc_html( $card_eyebrow ); ?></div>
      <div class="ht-amount"><?php echo esc_html( $card_amount ); ?></div>
      <div class="ht-note"><?php echo esc_html( $card_note ); ?></div>
      <div class="ht-divider"></div>
      <div class="ht-items">
        <?php foreach ( $card_items as $item ) : ?>
        <div class="ht-item">
          <span class="ht-item-name"><?php echo esc_html( $item['name'] ); ?></span>
          <span class="ht-item-val<?php echo $item['style'] === 'plus' ? ' plus' : ''; ?>"><?php echo esc_html( $item['value'] ); ?></span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ── KEY INVESTMENTS GRID ── -->
<section class="investments-section">
  <div class="investments-inner">
    <div class="investments-header reveal">
      <p class="section-label"><?php echo esc_html( $inv_header_label ); ?></p>
      <h2><?php echo wp_kses_post( $inv_header_title ); ?></h2>
      <?php if ( $inv_header_body ) : ?><p><?php echo wp_kses_post( $inv_header_body ); ?></p><?php endif; ?>
    </div>
    <div class="inv-grid">
      <?php foreach ( $inv_cards as $i => $card ) :
        $col   = $i % 3;
        $delay = $col > 0 ? ' reveal-delay-' . $col : '';
      ?>
      <div class="inv-card reveal<?php echo $delay; ?>">
        <div class="inv-card-top">
          <div class="inv-icon"><?php echo esc_html( $card['icon'] ); ?></div>
          <div class="inv-title"><?php echo esc_html( $card['title'] ); ?></div>
          <div class="inv-body"><?php echo wp_kses_post( $card['body'] ); ?></div>
        </div>
        <div class="inv-card-foot">
          <span class="inv-foot-label"><?php echo esc_html( $card['foot_label'] ); ?></span>
          <span class="inv-foot-val <?php echo esc_attr( $card['foot_style'] ); ?>"><?php echo esc_html( $card['foot_val'] ); ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── MOVE-IN READY BAND ── -->
<section class="movein-section">
  <div class="movein-inner">
    <div class="movein-left reveal">
      <h2><?php echo wp_kses_post( $movein_title ); ?></h2>
      <p><?php echo wp_kses_post( $movein_body ); ?></p>
    </div>
    <div class="movein-checklist reveal reveal-delay-2">
      <?php foreach ( $movein_checks as $check ) : ?>
      <div class="mc-item">
        <span class="mc-check">&#10003;</span>
        <span class="mc-text"><?php echo esc_html( $check ); ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── TIMELINE ── -->
<section class="timeline-section">
  <div class="timeline-inner">
    <div class="timeline-header reveal">
      <p class="section-label" style="justify-content:center;"><?php echo esc_html( $tl_header_label ); ?></p>
      <h2><?php echo wp_kses_post( $tl_header_title ); ?></h2>
    </div>
    <div class="inv-timeline">
      <?php foreach ( $tl_items as $i => $item ) :
        $delay = ( $i % 2 === 1 ) ? ' reveal-delay-1' : '';
      ?>
      <div class="tl-item reveal<?php echo $delay; ?>">
        <div class="tl-dot"></div>
        <div class="tl-year"><?php echo esc_html( $item['year'] ); ?></div>
        <div class="tl-title"><?php echo esc_html( $item['title'] ); ?></div>
        <div class="tl-body"><?php echo wp_kses_post( $item['body'] ); ?></div>
        <?php if ( ! empty( $item['amount'] ) ) : ?>
        <div class="tl-amount"><?php echo esc_html( $item['amount'] ); ?></div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── DARK ARGUMENT ── -->
<section class="argument-section">
  <div class="argument-inner reveal">
    <p class="arg-eyebrow"><?php echo esc_html( $arg_eyebrow ); ?></p>
    <h2 class="arg-title"><?php echo wp_kses_post( $arg_title ); ?></h2>
    <p class="arg-body"><?php echo wp_kses_post( $arg_body ); ?></p>
    <?php if ( $arg_stats ) : ?>
    <div class="arg-stats">
      <?php foreach ( $arg_stats as $stat ) : ?>
      <div>
        <div class="arg-stat-num"><?php echo esc_html( $stat['num'] ); ?></div>
        <div class="arg-stat-label"><?php echo esc_html( $stat['label'] ); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<!-- ── LOT VALUE ── -->
<section class="lot-section">
  <div class="lot-inner">
    <div class="reveal">
      <p class="section-label"><?php echo esc_html( $lot_label ); ?></p>
      <h2><?php echo wp_kses_post( $lot_title ); ?></h2>
      <?php if ( $lot_body_1 ) : ?><p><?php echo wp_kses_post( $lot_body_1 ); ?></p><?php endif; ?>
      <?php if ( $lot_body_2 ) : ?><p><?php echo wp_kses_post( $lot_body_2 ); ?></p><?php endif; ?>
    </div>
    <div class="lot-compare reveal reveal-delay-2">
      <?php foreach ( $lot_bars as $bar ) : ?>
      <div class="lot-bar-wrap">
        <div class="lot-bar-label">
          <span class="lbl-name"><?php echo esc_html( $bar['name'] ); ?></span>
          <span class="lbl-val"><?php echo esc_html( $bar['value'] ); ?></span>
        </div>
        <div class="lot-bar-track">
          <div class="lot-bar-fill<?php echo $bar['style'] === 'gold' ? ' gold' : ''; ?>"
               style="width:<?php echo (int) $bar['width']; ?>%"></div>
        </div>
      </div>
      <?php endforeach; ?>
      <?php if ( $lot_note ) : ?>
      <div class="lot-note"><?php echo wp_kses_post( $lot_note ); ?></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<div class="inv-cta-strip" id="contact">
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
  }, { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(function (el) { obs.observe(el); });
})();
</script>
