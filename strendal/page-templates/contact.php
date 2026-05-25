<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 *
 * Full-page "Visit This Home" contact & scheduling layout.
 * Each section has a "Content Source" toggle (Default / Custom).
 * Default content extracted from contact.html.
 */

defined( 'ABSPATH' ) || exit;

$post_id = get_the_ID();

if ( ! function_exists( 'strendal_field' ) ) {
	function strendal_field( string $name, int $post_id ) {
		return function_exists( 'get_field' ) ? get_field( $name, $post_id ) : null;
	}
}

/* ════════════════════════════════════════════════════════
   DEFAULT CONTENT
   ════════════════════════════════════════════════════════ */
$CT = [

	'hero' => [
		'eyebrow' => 'Visit This Home · 4007 Strendal Dr · Cary, NC',
		'title'   => 'Two ways to<br>see this home.',
		'sub'     => 'Walk in at an open house — no appointment needed. Or ask your agent to arrange a private showing through ShowingTime. Either way, we look forward to meeting you.',
	],

	'open_house' => [
		'title'  => 'Walk in.<br><em>No appointment needed.</em>',
		'body_1' => 'Open houses are hosted by the owners. Come as you are, bring your family, take your time. The full home — including the lot, the screened porch, and the garden — will be open to explore.',
		'body_2' => 'No pressure. No agent at the door. Just the home, the people who have lived in it, and honest answers to any question you have.',
		'dates'  => [
			[ 'label' => 'Open House — Saturday', 'value' => 'June 13, 2025', 'time' => '12:00 pm – 2:00 pm' ],
			[ 'label' => 'Open House — Sunday',   'value' => 'June 14, 2025', 'time' => '1:00 pm – 3:00 pm' ],
		],
	],

	'private_showings' => [
		'title'    => 'Working with<br><em>a buyer\'s agent?</em>',
		'body'     => 'All private showings are coordinated through your agent via ShowingTime — the same process used in any traditional listing. Ask your agent to request a showing and we will confirm a time that works.',
		'st_label' => 'How It Works',
		'st_body'  => '<strong>Ask your agent to book via ShowingTime.</strong> They will have access to request a showing directly. Confirmation comes back to your agent once we approve the time. No direct contact with the sellers is required or expected.',
	],

	'expect' => [
		'label' => 'At the Open House',
		'title' => 'What you\'ll find<br>when you <em>arrive.</em>',
		'intro' => 'Every open house is personal — the owners are present, the full property is accessible, and there is no clock running. Here is what to expect when you walk through the door.',
		'items' => [
			[ 'num' => '01', 'title' => 'The full lot — all 13,068 sq ft',      'body' => 'The aerial photos give you the shape. Standing in the backyard gives you the scale. Walk the boundaries, see where the garden sits, and feel the privacy this lot provides at the back of a quiet cul-de-sac.' ],
			[ 'num' => '02', 'title' => 'Every room, at your pace',             'body' => 'All rooms will be open — ground floor flex rooms, the extended dining area, the open loft, the master suite, and all bedrooms. Take as long as you need. Come back to any room twice.' ],
			[ 'num' => '03', 'title' => 'The screened porch and herb garden',  'body' => 'The porch is best in the late afternoon — covered, screened on three sides, west-facing over the backyard. The herb garden is steps from the kitchen door. These are the spaces that make this home feel like a home.' ],
			[ 'num' => '04', 'title' => 'Honest answers from the owners',       'body' => 'We have lived here for 14 years. We know this home completely — what works brilliantly, what we would do differently, what we will miss most. Ask anything. We will answer honestly.' ],
			[ 'num' => '05', 'title' => 'The full improvements story',          'body' => '$38,500+ in documented improvements — new 2023 roof, new carpet throughout, full repaint, new appliances, LED lighting, garage epoxy floor, and more. We will walk you through every item, when it was done, and why.' ],
			[ 'num' => '06', 'title' => 'No pressure, no urgency',             'body' => 'This is an owner-led sale. There is no agent working the room. Come, look carefully, bring your family back. We want the right fit — not a rushed decision.' ],
		],
	],

	'property_info' => [
		'header' => 'The Property at a Glance',
		'rows'   => [
			[ 'key' => 'Address',       'val' => '4007 Strendal Dr, Cary NC 27519', 'green' => false ],
			[ 'key' => 'Neighbourhood', 'val' => 'Evans Farm, Cary',                'green' => false ],
			[ 'key' => 'Bedrooms',      'val' => '4',                               'green' => false ],
			[ 'key' => 'Bathrooms',     'val' => '3',                               'green' => false ],
			[ 'key' => 'Lot Size',      'val' => '13,068 sq ft',                    'green' => false ],
			[ 'key' => 'RTP',           'val' => 'Less than 10 min',                'green' => true  ],
			[ 'key' => 'RDU Airport',   'val' => 'Less than 15 min',                'green' => true  ],
			[ 'key' => 'Sale Type',     'val' => 'Owner-Led, Agent-Supported',      'green' => false ],
		],
	],

	'map' => [
		'address_1'  => '4007 Strendal Dr',
		'address_2'  => 'Cary, NC 27519',
		'embed_code' => '',
	],

	'directions' => [
		'header' => 'Getting Here',
		'items'  => [
			[ 'icon' => '✈️', 'title' => 'From RDU Airport',            'text' => 'Less than 15 min via I-540 W — take exit toward Morrisville Pkwy' ],
			[ 'icon' => '🏢', 'title' => 'From Research Triangle Park', 'text' => 'Less than 10 min — straight up NC-55 into Cary' ],
			[ 'icon' => '🚗', 'title' => 'From downtown Raleigh',       'text' => 'Approx. 25 min via I-40 W or I-440 W to Cary Pkwy' ],
			[ 'icon' => '🏠', 'title' => 'Evans Farm entrance',         'text' => 'Turn onto Strendal Dr — property is at the back of the cul-de-sac' ],
		],
	],

	'disclaimer' => [
		'title'  => 'Disclaimer',
		'text_1' => 'All information relating to 4007 Strendal Drive, Cary, NC 27519 is provided in good faith and believed to be accurate at the time of publication. Buyers are advised to conduct independent verification of all property details, measurements, school assignments, distances, and improvement costs prior to making any offer or financial commitment.',
		'text_2' => 'School assignments are subject to change and should be verified directly with Wake County Public School System. Distance and commute times are approximate and may vary based on route and traffic conditions. Lot size and home dimensions are based on available records and should be independently verified by a licensed surveyor or appraiser.',
		'text_3' => 'This listing is presented on an owner-led, agent-supported basis. The sellers make no warranties, express or implied, regarding the condition of the property beyond those required by applicable law. Prospective buyers are encouraged to engage independent legal, financial, and inspection professionals before proceeding.',
	],

];

/* ════════════════════════════════════════════════════════
   FIELD RESOLUTION
   ════════════════════════════════════════════════════════ */

/* ── Hero ── */
$hero_use_default = strendal_field( 'ct_hero_use_default', $post_id );
if ( $hero_use_default || $hero_use_default === null ) {
	$hero_eyebrow = $CT['hero']['eyebrow'];
	$hero_title   = $CT['hero']['title'];
	$hero_sub     = $CT['hero']['sub'];
} else {
	$hero_eyebrow = strendal_field( 'ct_hero_eyebrow', $post_id ) ?: $CT['hero']['eyebrow'];
	$hero_title   = strendal_field( 'ct_hero_title',   $post_id ) ?: $CT['hero']['title'];
	$hero_sub     = strendal_field( 'ct_hero_sub',     $post_id ) ?: $CT['hero']['sub'];
}

/* ── Open House ── */
$oh_use_default = strendal_field( 'ct_oh_use_default', $post_id );
if ( $oh_use_default || $oh_use_default === null ) {
	$oh_title  = $CT['open_house']['title'];
	$oh_body_1 = $CT['open_house']['body_1'];
	$oh_body_2 = $CT['open_house']['body_2'];
	$oh_dates  = $CT['open_house']['dates'];
} else {
	$oh_title  = strendal_field( 'ct_oh_title',  $post_id ) ?: $CT['open_house']['title'];
	$oh_body_1 = strendal_field( 'ct_oh_body_1', $post_id ) ?: $CT['open_house']['body_1'];
	$oh_body_2 = strendal_field( 'ct_oh_body_2', $post_id ) ?: $CT['open_house']['body_2'];
	$raw_dates = strendal_field( 'ct_oh_dates',  $post_id ) ?: [];
	$oh_dates  = $raw_dates
		? array_map( fn( $v ) => [ 'label' => $v['ct_oh_date_label'], 'value' => $v['ct_oh_date_value'], 'time' => $v['ct_oh_date_time'] ], $raw_dates )
		: $CT['open_house']['dates'];
}

/* ── Private Showings ── */
$ps_use_default = strendal_field( 'ct_ps_use_default', $post_id );
if ( $ps_use_default || $ps_use_default === null ) {
	$ps_title    = $CT['private_showings']['title'];
	$ps_body     = $CT['private_showings']['body'];
	$ps_st_label = $CT['private_showings']['st_label'];
	$ps_st_body  = $CT['private_showings']['st_body'];
} else {
	$ps_title    = strendal_field( 'ct_ps_title',    $post_id ) ?: $CT['private_showings']['title'];
	$ps_body     = strendal_field( 'ct_ps_body',     $post_id ) ?: $CT['private_showings']['body'];
	$ps_st_label = strendal_field( 'ct_ps_st_label', $post_id ) ?: $CT['private_showings']['st_label'];
	$ps_st_body  = strendal_field( 'ct_ps_st_body',  $post_id ) ?: $CT['private_showings']['st_body'];
}

/* ── What to Expect ── */
$expect_use_default = strendal_field( 'ct_expect_use_default', $post_id );
if ( $expect_use_default || $expect_use_default === null ) {
	$expect_label = $CT['expect']['label'];
	$expect_title = $CT['expect']['title'];
	$expect_intro = $CT['expect']['intro'];
	$expect_items = $CT['expect']['items'];
} else {
	$expect_label = strendal_field( 'ct_expect_label', $post_id ) ?: $CT['expect']['label'];
	$expect_title = strendal_field( 'ct_expect_title', $post_id ) ?: $CT['expect']['title'];
	$expect_intro = strendal_field( 'ct_expect_intro', $post_id ) ?: $CT['expect']['intro'];
	$raw_items    = strendal_field( 'ct_expect_items', $post_id ) ?: [];
	$expect_items = $raw_items
		? array_map( fn( $v ) => [ 'num' => $v['ct_expect_num'], 'title' => $v['ct_expect_item_title'], 'body' => $v['ct_expect_item_body'] ], $raw_items )
		: $CT['expect']['items'];
}

/* ── Property Info ── */
$info_use_default = strendal_field( 'ct_info_use_default', $post_id );
if ( $info_use_default || $info_use_default === null ) {
	$info_header = $CT['property_info']['header'];
	$info_rows   = $CT['property_info']['rows'];
} else {
	$info_header = strendal_field( 'ct_info_header', $post_id ) ?: $CT['property_info']['header'];
	$raw_rows    = strendal_field( 'ct_info_rows',   $post_id ) ?: [];
	$info_rows   = $raw_rows
		? array_map( fn( $v ) => [ 'key' => $v['ct_info_key'], 'val' => $v['ct_info_val'], 'green' => ! empty( $v['ct_info_green'] ) ], $raw_rows )
		: $CT['property_info']['rows'];
}

/* ── Map ── */
$map_use_default = strendal_field( 'ct_map_use_default', $post_id );
if ( $map_use_default || $map_use_default === null ) {
	$map_address_1  = $CT['map']['address_1'];
	$map_address_2  = $CT['map']['address_2'];
	$map_embed_code = $CT['map']['embed_code'];
} else {
	$map_address_1  = strendal_field( 'ct_map_address_1',  $post_id ) ?: $CT['map']['address_1'];
	$map_address_2  = strendal_field( 'ct_map_address_2',  $post_id ) ?: $CT['map']['address_2'];
	$map_embed_code = strendal_field( 'ct_map_embed_code', $post_id ) ?: '';
}

/* ── Directions ── */
$dir_use_default = strendal_field( 'ct_dir_use_default', $post_id );
if ( $dir_use_default || $dir_use_default === null ) {
	$dir_header = $CT['directions']['header'];
	$dir_items  = $CT['directions']['items'];
} else {
	$dir_header = strendal_field( 'ct_dir_header', $post_id ) ?: $CT['directions']['header'];
	$raw_items  = strendal_field( 'ct_dir_items',  $post_id ) ?: [];
	$dir_items  = $raw_items
		? array_map( fn( $v ) => [ 'icon' => $v['ct_dir_icon'], 'title' => $v['ct_dir_title'], 'text' => $v['ct_dir_text'] ], $raw_items )
		: $CT['directions']['items'];
}

/* ── Disclaimer ── */
$disc_use_default = strendal_field( 'ct_disc_use_default', $post_id );
if ( $disc_use_default || $disc_use_default === null ) {
	$disc_title  = $CT['disclaimer']['title'];
	$disc_text_1 = $CT['disclaimer']['text_1'];
	$disc_text_2 = $CT['disclaimer']['text_2'];
	$disc_text_3 = $CT['disclaimer']['text_3'];
} else {
	$disc_title  = strendal_field( 'ct_disc_title',  $post_id ) ?: $CT['disclaimer']['title'];
	$disc_text_1 = strendal_field( 'ct_disc_text_1', $post_id ) ?: $CT['disclaimer']['text_1'];
	$disc_text_2 = strendal_field( 'ct_disc_text_2', $post_id ) ?: $CT['disclaimer']['text_2'];
	$disc_text_3 = strendal_field( 'ct_disc_text_3', $post_id ) ?: $CT['disclaimer']['text_3'];
}

/* ════════════════════════════════════════════════════════
   RENDER
   ════════════════════════════════════════════════════════ */
get_header();
?>

<!-- ── HERO ── -->
<section class="ct-hero">
  <div class="ct-hero-texture"></div>
  <div class="ct-hero-overlay"></div>
  <div class="ct-hero-content">
    <p class="ct-hero-eyebrow"><?php echo esc_html( $hero_eyebrow ); ?></p>
    <h1 class="ct-hero-title"><?php echo wp_kses_post( $hero_title ); ?></h1>
    <p class="ct-hero-sub"><?php echo esc_html( $hero_sub ); ?></p>
  </div>
</section>

<!-- ── VISIT WAYS ── -->
<div class="ct-visit-ways">
  <div class="ct-visit-ways-inner">

    <div class="ct-visit-way reveal">
      <div class="ct-visit-way-tag ct-tag-gold">Open House</div>
      <h2><?php echo wp_kses_post( $oh_title ); ?></h2>
      <?php if ( $oh_body_1 ) : ?><p><?php echo esc_html( $oh_body_1 ); ?></p><?php endif; ?>
      <?php if ( $oh_body_2 ) : ?><p><?php echo esc_html( $oh_body_2 ); ?></p><?php endif; ?>
      <?php foreach ( $oh_dates as $i => $date ) : ?>
      <div class="ct-oh-date-block"<?php echo $i > 0 ? ' style="margin-top:10px;"' : ''; ?>>
        <div class="ct-oh-date-label"><?php echo esc_html( $date['label'] ); ?></div>
        <div class="ct-oh-date-value"><?php echo esc_html( $date['value'] ); ?></div>
        <?php if ( ! empty( $date['time'] ) ) : ?>
        <div class="ct-oh-date-time"><?php echo esc_html( $date['time'] ); ?></div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="ct-visit-way reveal reveal-delay-1">
      <div class="ct-visit-way-tag ct-tag-green">Private Showings</div>
      <h2><?php echo wp_kses_post( $ps_title ); ?></h2>
      <?php if ( $ps_body ) : ?><p><?php echo esc_html( $ps_body ); ?></p><?php endif; ?>
      <?php if ( $ps_st_label || $ps_st_body ) : ?>
      <div class="ct-showingtime-block">
        <?php if ( $ps_st_label ) : ?>
        <div class="ct-st-label"><?php echo esc_html( $ps_st_label ); ?></div>
        <?php endif; ?>
        <?php if ( $ps_st_body ) : ?>
        <div class="ct-st-body"><?php echo wp_kses_post( $ps_st_body ); ?></div>
        <?php endif; ?>
      </div>
      <?php endif; ?>
    </div>

  </div>
</div>

<!-- ── CONTACT SECTION ── -->
<section class="ct-contact-section">

  <div class="ct-oh-detail-block reveal">
    <p class="ct-section-label"><?php echo esc_html( $expect_label ); ?></p>
    <h2><?php echo wp_kses_post( $expect_title ); ?></h2>
    <?php if ( $expect_intro ) : ?>
    <p class="ct-intro"><?php echo esc_html( $expect_intro ); ?></p>
    <?php endif; ?>
    <div class="ct-expect-list">
      <?php foreach ( $expect_items as $item ) : ?>
      <div class="ct-el-item">
        <div class="ct-el-num"><?php echo esc_html( $item['num'] ); ?></div>
        <div>
          <div class="ct-el-title"><?php echo esc_html( $item['title'] ); ?></div>
          <div class="ct-el-body"><?php echo esc_html( $item['body'] ); ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="ct-sidebar">

    <!-- Property Info Card -->
    <div class="ct-info-card reveal reveal-delay-1">
      <div class="ct-info-card-header"><?php echo esc_html( $info_header ); ?></div>
      <div class="ct-info-card-body">
        <?php foreach ( $info_rows as $row ) :
          $val_class = ! empty( $row['green'] ) ? ' ct-green' : '';
        ?>
        <div class="ct-info-row">
          <span class="ct-info-key"><?php echo esc_html( $row['key'] ); ?></span>
          <span class="ct-info-val<?php echo $val_class; ?>"><?php echo esc_html( $row['val'] ); ?></span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Map Card -->
    <div class="ct-map-card reveal reveal-delay-2">
      <?php if ( ! empty( $map_embed_code ) ) :
        $allowed_html = [ 'iframe' => [ 'src' => [], 'width' => [], 'height' => [], 'frameborder' => [], 'style' => [], 'allowfullscreen' => [], 'loading' => [], 'referrerpolicy' => [], 'title' => [] ] ];
        echo wp_kses( $map_embed_code, $allowed_html );
      else : ?>
      <div class="ct-map-placeholder">
        <div class="ct-map-pin">📍</div>
        <p><?php echo esc_html( $map_address_1 ); ?><br><?php echo esc_html( $map_address_2 ); ?></p>
      </div>
      <?php endif; ?>
    </div>

    <!-- Directions Card -->
    <div class="ct-info-card reveal reveal-delay-2">
      <div class="ct-info-card-header"><?php echo esc_html( $dir_header ); ?></div>
      <div class="ct-info-card-body">
        <ul class="ct-directions-list">
          <?php foreach ( $dir_items as $item ) : ?>
          <li class="ct-dir-item">
            <span class="ct-dir-icon"><?php echo esc_html( $item['icon'] ); ?></span>
            <div class="ct-dir-text">
              <strong><?php echo esc_html( $item['title'] ); ?></strong>
              <?php echo esc_html( $item['text'] ); ?>
            </div>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

  </div>

</section>

<!-- ── DISCLAIMER ── -->
<div id="disclaimer">
  <div class="ct-disclaimer-section reveal">
    <h3><?php echo esc_html( $disc_title ); ?></h3>
    <div class="ct-disclaimer-text">
      <?php if ( $disc_text_1 ) : ?><p><?php echo esc_html( $disc_text_1 ); ?></p><?php endif; ?>
      <?php if ( $disc_text_2 ) : ?><p><?php echo esc_html( $disc_text_2 ); ?></p><?php endif; ?>
      <?php if ( $disc_text_3 ) : ?><p><?php echo esc_html( $disc_text_3 ); ?></p><?php endif; ?>
    </div>
  </div>
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
