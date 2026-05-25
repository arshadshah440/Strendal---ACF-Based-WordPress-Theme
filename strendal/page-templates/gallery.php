<?php
/**
 * Template Name: Gallery
 * Template Post Type: page
 *
 * Full-page photo gallery with filter bar, masonry grid, and lightbox.
 * Default content extracted from strendal_gallery.html (34 items).
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
$GL = [

	'header' => [
		'eyebrow' => 'Photo Gallery · 4007 Strendal Dr',
		'title'   => 'Every room.<br><em>Every corner.</em>',
		'sub'     => '34 photographs across every space — exterior, living, kitchen, bedrooms, garden, and porch.',
	],

	'items' => [
		// ── EXTERIOR ──────────────────────────────────────────────────────
		[ 'cat' => 'exterior',  'section' => 'Exterior',                  'title' => 'Front Elevation · Stone Facade · Blue Sky',                       'icon' => '🏠', 'file' => 'House_Front_2.jpg',                            'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'exterior',  'section' => 'Exterior · Aerial',         'title' => 'Aerial Front · Full Property · Garden Visible',                   'icon' => '🚁', 'file' => 'Aerial_1.jpg',                                 'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'exterior',  'section' => 'Exterior · Aerial',         'title' => 'Aerial Cul-de-Sac Position · Quiet Dead-End',                     'icon' => '🚁', 'file' => 'Aerial_2.jpg',                                 'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'exterior',  'section' => 'Exterior · Aerial',         'title' => 'Aerial Rear · New Roof · Screened Porch · Herb Garden',           'icon' => '🚁', 'file' => '19-web-or-mls-DJI_20250707160204_0643_D.jpg',  'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'exterior',  'section' => 'Exterior · Aerial',         'title' => 'Aerial Close-up · Herb Bed · Stone Path · Porch Entry',           'icon' => '🌿', 'file' => '21-web-or-mls-DJI_20250707160256_0645_D.jpg',  'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'exterior',  'section' => 'Exterior · Ground Level',   'title' => 'Ground Level Rear · Screened Porch · Herb Garden · Path',         'icon' => '🏡', 'file' => '22-web-or-mls-DJI_20250707160328_0646_D.jpg',  'ratio' => 'landscape', 'image' => null ],
		// ── LIVING SPACES ─────────────────────────────────────────────────
		[ 'cat' => 'living',    'section' => 'Entry',                     'title' => 'Entry Hall · Blue Storm Door · Mirrored Console',                 'icon' => '🚪', 'file' => '23-web-or-mls-VB4A2652.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'living',    'section' => 'Dining · Tea Corner',       'title' => 'Dining Nook · Tea Corner · Fireplace · Porch Door',               'icon' => '🍽️', 'file' => '29-web-or-mls-VB4A2703.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'living',    'section' => 'Open Plan',                 'title' => 'Ground Floor Depth · Kitchen · Living · Stairs · Porch',         'icon' => '🏠', 'file' => '30-web-or-mls-VB4A2706.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'living',    'section' => 'Living Room',               'title' => 'Living Room · Fireplace · Large Windows · Staircase',            'icon' => '🛋️', 'file' => '31-web-or-mls-VB4A2709.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'living',    'section' => 'Living Room · Open Plan',   'title' => 'Living Room Connected to Kitchen & Dining · Open Plan',          'icon' => '🔗', 'file' => '32-web-or-mls-VB4A2724.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'living',    'section' => 'Open Plan',                 'title' => 'Kitchen Peninsula · Living Room Beyond · Staircase Right',       'icon' => '🔄', 'file' => '38-web-or-mls-VB4A2751.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'living',    'section' => 'Flex Room',                 'title' => 'Flex Room as Dual Home Office · Curtained Arch to Entry',        'icon' => '💼', 'file' => '24-web-or-mls-VB4A2658.jpg',                   'ratio' => 'landscape', 'image' => null ],
		// ── KITCHEN ───────────────────────────────────────────────────────
		[ 'cat' => 'kitchen',   'section' => 'Kitchen',                   'title' => 'Open Plan Kitchen · Gas Range · Granite · Living Room Beyond',   'icon' => '🍳', 'file' => '28-web-or-mls-VB4A2694.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'kitchen',   'section' => 'Kitchen',                   'title' => 'Appliance Wall · Stainless Fridge · Gas Range · Granite',        'icon' => '🧊', 'file' => '26-web-or-mls-VB4A2673.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'kitchen',   'section' => 'Kitchen',                   'title' => 'Galley View · Full Depth · Staircase & Flex Room Beyond',        'icon' => '📐', 'file' => '27-web-or-mls-VB4A2685.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'kitchen',   'section' => 'Kitchen · Peninsula',       'title' => 'Kitchen Peninsula · Granite · Opens to Living Room',             'icon' => '🔲', 'file' => '33-web-or-mls-VB4A2730.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'kitchen',   'section' => 'Flex Room',                 'title' => 'Flex Room Second Angle · Kitchen Glimpse · Natural Light',       'icon' => '🔄', 'file' => '25-web-or-mls-VB4A2664.jpg',                   'ratio' => 'landscape', 'image' => null ],
		// ── BEDROOMS ──────────────────────────────────────────────────────
		[ 'cat' => 'bedrooms',  'section' => 'Ground Floor Bedroom',      'title' => 'Ground Floor Bedroom · Queen Bed · Garden View · Desk',          'icon' => '🛏️', 'file' => '34-web-or-mls-VB4A2733.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'bedrooms',  'section' => 'Master Suite',              'title' => 'Master Bedroom · King Bed · Garden Window · En-Suite Door',      'icon' => '👑', 'file' => '41-web-or-mls-VB4A2778.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'bedrooms',  'section' => 'Master En-Suite',           'title' => 'Master En-Suite · Double Vanity · Garden Tub · Glass Shower',    'icon' => '🛁', 'file' => '44-web-or-mls-VB4A2793.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'bedrooms',  'section' => 'Master En-Suite',           'title' => 'Garden Tub Under Window · Blue Sky · Glass Shower Alongside',    'icon' => '🪟', 'file' => '45-web-or-mls-VB4A2797.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'bedrooms',  'section' => 'Master Walk-In Closet',     'title' => 'Walk-In Closet · Full Rails · Built-In Bench · Window',          'icon' => '👔', 'file' => '46-web-or-mls-VB4A2800.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'bedrooms',  'section' => 'Open Loft · Upper Floor',   'title' => 'Open Loft · Entertainment Hub · Triple Windows · Staircase',     'icon' => '🛋️', 'file' => '40-web-or-mls-VB4A2766.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'bedrooms',  'section' => 'Bedroom 2',                 'title' => 'Bedroom 2 · Full Bed · Desk · Natural Light · Jack & Jill',      'icon' => '🛏️', 'file' => '51-web-or-mls-VB4A2817.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'bedrooms',  'section' => 'Bedroom 3',                 'title' => 'Bedroom 3 · Neutral · Double Closet · Jack & Jill Access',       'icon' => '🛏️', 'file' => '49-web-or-mls-VB4A2812.jpg',                   'ratio' => 'landscape', 'image' => null ],
		// ── BATHROOMS ─────────────────────────────────────────────────────
		[ 'cat' => 'bathrooms', 'section' => 'Jack & Jill Bathroom',      'title' => 'Jack & Jill Bathroom · Double Vanity · Private Shower Room',     'icon' => '🚿', 'file' => '50-web-or-mls-VB4A2815.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'bathrooms', 'section' => 'Laundry Room',              'title' => 'Laundry Room · Whirlpool Washer & Dryer · Hanging Rail · Window', 'icon' => '🧺', 'file' => '47-web-or-mls-VB4A2803.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'bathrooms', 'section' => 'Master Suite',              'title' => 'Master Bedroom · Third Angle · Morning Light · Reading Corner',   'icon' => '🌅', 'file' => '43-web-or-mls-VB4A2790.jpg',                   'ratio' => 'landscape', 'image' => null ],
		// ── GARDEN ────────────────────────────────────────────────────────
		[ 'cat' => 'garden',    'section' => 'Garden',                    'title' => 'Garden Plot · Sunflowers · In-Ground Vegetable Garden',           'icon' => '🌻', 'file' => 'Garden_1.jpg',                                  'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'garden',    'section' => 'Garden · Harvest',          'title' => 'Harvest Basket · Tomatoes · Peppers · Cucumbers · Garlic',       'icon' => '🍅', 'file' => 'Garden_basket.png',                             'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'garden',    'section' => 'Garden · Yield',            'title' => 'Heirloom Tomatoes · Two Full Boxes · August 2024',               'icon' => '📦', 'file' => 'Garden_3.jpg',                                  'ratio' => 'landscape', 'image' => null ],
		// ── PORCH ─────────────────────────────────────────────────────────
		[ 'cat' => 'porch',     'section' => 'Screened Porch · Inside',   'title' => 'Inside Screened Porch · Three Panels Green · Timber Frame',      'icon' => '🌿', 'file' => '36-web-or-mls-VB4A2738.jpg',                   'ratio' => 'landscape', 'image' => null ],
		[ 'cat' => 'porch',     'section' => 'Screened Porch · Exterior', 'title' => 'Screened Porch Exterior · Timber Frame · Herb Garden · Stone Path','icon' => '🏡', 'file' => '22-web-or-mls-DJI_20250707160328_0646_D.jpg', 'ratio' => 'landscape', 'image' => null ],
	],

	'cta' => [
		'title'    => 'Ready to see it in person?',
		'body'     => 'Photos show you the rooms. A tour shows you the home. Schedule your private visit.',
		'btn_text' => 'Schedule a Private Tour →',
		'btn_url'  => '/contact',
	],

];

/* ════════════════════════════════════════════════════════
   FIELD RESOLUTION
   ════════════════════════════════════════════════════════ */

/* ── Page Header ── */
$hdr_use_default = strendal_field( 'gl_hdr_use_default', $post_id );
if ( $hdr_use_default || $hdr_use_default === null ) {
	$hdr_eyebrow = $GL['header']['eyebrow'];
	$hdr_title   = $GL['header']['title'];
	$hdr_sub     = $GL['header']['sub'];
} else {
	$hdr_eyebrow = strendal_field( 'gl_hdr_eyebrow', $post_id ) ?: $GL['header']['eyebrow'];
	$hdr_title   = strendal_field( 'gl_hdr_title',   $post_id ) ?: $GL['header']['title'];
	$hdr_sub     = strendal_field( 'gl_hdr_sub',     $post_id ) ?: $GL['header']['sub'];
}

/* ── Gallery Items ── */
$items_use_default = strendal_field( 'gl_items_use_default', $post_id );
if ( $items_use_default || $items_use_default === null ) {
	$items = $GL['items'];
} else {
	$raw_items = strendal_field( 'gl_items', $post_id ) ?: [];
	$items = $raw_items
		? array_map( fn( $v ) => [
			'cat'     => $v['gl_item_cat']     ?? 'exterior',
			'section' => $v['gl_item_section'] ?? '',
			'title'   => $v['gl_item_title']   ?? '',
			'ratio'   => $v['gl_item_ratio']   ?? 'landscape',
			'image'   => $v['gl_item_image']   ?? null,
			'icon'    => null,
			'file'    => null,
		  ], $raw_items )
		: $GL['items'];
}

/* ── CTA ── */
$cta_use_default = strendal_field( 'gl_cta_use_default', $post_id );
if ( $cta_use_default || $cta_use_default === null ) {
	$cta_title    = $GL['cta']['title'];
	$cta_body     = $GL['cta']['body'];
	$cta_btn_text = $GL['cta']['btn_text'];
	$cta_btn_url  = $GL['cta']['btn_url'];
} else {
	$cta_title    = strendal_field( 'gl_cta_title',    $post_id ) ?: $GL['cta']['title'];
	$cta_body     = strendal_field( 'gl_cta_body',     $post_id ) ?: $GL['cta']['body'];
	$cta_btn_text = strendal_field( 'gl_cta_btn_text', $post_id ) ?: $GL['cta']['btn_text'];
	$cta_btn_url  = strendal_field( 'gl_cta_btn_url',  $post_id ) ?: $GL['cta']['btn_url'];
}

/* ── Compute filter counts from items ── */
$cat_counts  = [];
foreach ( $items as $item ) {
	$c                = $item['cat'];
	$cat_counts[ $c ] = ( $cat_counts[ $c ] ?? 0 ) + 1;
}
$total_count = count( $items );

$filter_cats = [
	'exterior'  => 'Exterior',
	'living'    => 'Living Spaces',
	'kitchen'   => 'Kitchen',
	'bedrooms'  => 'Bedrooms',
	'bathrooms' => 'Bathrooms',
	'garden'    => 'Garden',
	'porch'     => 'Porch',
];

/* ════════════════════════════════════════════════════════
   RENDER
   ════════════════════════════════════════════════════════ */
get_header();
?>

<!-- ── PAGE HEADER ── -->
<div class="gl-page-header">
  <div class="gl-ph-grid"></div>
  <div class="gl-ph-inner">
    <p class="gl-ph-eyebrow"><?php echo esc_html( $hdr_eyebrow ); ?></p>
    <h1 class="gl-ph-title"><?php echo wp_kses_post( $hdr_title ); ?></h1>
    <p class="gl-ph-sub"><?php echo esc_html( $hdr_sub ); ?></p>
  </div>
</div>

<!-- ── FILTER BAR ── -->
<div class="gl-filter-bar">
  <button class="gl-filter-btn gl-active" data-filter="all">
    All <span class="gl-count"><?php echo $total_count; ?></span>
  </button>
  <?php foreach ( $filter_cats as $key => $label ) :
    $cnt = $cat_counts[ $key ] ?? 0;
    if ( $cnt === 0 ) continue;
  ?>
  <button class="gl-filter-btn" data-filter="<?php echo esc_attr( $key ); ?>">
    <?php echo esc_html( $label ); ?> <span class="gl-count"><?php echo $cnt; ?></span>
  </button>
  <?php endforeach; ?>
</div>

<!-- ── GALLERY GRID ── -->
<div class="gl-gallery-wrap">
  <div class="gl-gallery-grid" id="glGrid">

    <?php foreach ( $items as $idx => $item ) :
      $has_image  = ! empty( $item['image']['url'] );
      $cat_attr   = esc_attr( $item['cat'] );
      $sec_attr   = esc_attr( $item['section'] );
      $title_attr = esc_attr( $item['title'] );
      $ratio      = esc_attr( $item['ratio'] ?? 'landscape' );
    ?>
    <div class="gl-item gl-ratio-<?php echo $ratio; ?>"
         data-cat="<?php echo $cat_attr; ?>"
         data-index="<?php echo $idx; ?>"
         data-section="<?php echo $sec_attr; ?>"
         data-title="<?php echo $title_attr; ?>">

      <?php if ( $has_image ) : ?>
      <img class="gl-img"
           src="<?php echo esc_url( $item['image']['url'] ); ?>"
           alt="<?php echo esc_attr( $item['title'] ); ?>">
      <?php else : ?>
      <div class="gl-placeholder">
        <?php if ( ! empty( $item['icon'] ) ) : ?>
        <div class="gl-gp-icon"><?php echo esc_html( $item['icon'] ); ?></div>
        <?php endif; ?>
        <span class="gl-gp-section"><?php echo esc_html( $item['section'] ); ?></span>
        <div class="gl-gp-title"><?php echo esc_html( $item['title'] ); ?></div>
        <?php if ( ! empty( $item['file'] ) ) : ?>
        <div class="gl-gp-file"><?php echo esc_html( $item['file'] ); ?></div>
        <?php endif; ?>
      </div>
      <?php endif; ?>

      <div class="gl-overlay">
        <div class="gl-go-section"><?php echo esc_html( $item['section'] ); ?></div>
        <div class="gl-go-title"><?php echo esc_html( $item['title'] ); ?></div>
        <div class="gl-go-expand">&#x2922;</div>
      </div>

    </div>
    <?php endforeach; ?>

  </div>
</div>

<!-- ── CTA STRIP ── -->
<div class="gl-cta-strip">
  <div class="gl-cta-left">
    <h3><?php echo wp_kses_post( $cta_title ); ?></h3>
    <p><?php echo esc_html( $cta_body ); ?></p>
  </div>
  <a href="<?php echo esc_url( $cta_btn_url ); ?>" class="gl-btn-gold">
    <?php echo esc_html( $cta_btn_text ); ?>
  </a>
</div>

<!-- ── LIGHTBOX ── -->
<div class="gl-lightbox" id="glLightbox">
  <button class="gl-lb-close">&#x2715;</button>
  <div class="gl-lb-content">
    <button class="gl-lb-nav gl-lb-prev">&#x2039;</button>
    <div id="glLbInner"></div>
    <button class="gl-lb-nav gl-lb-next">&#x203a;</button>
  </div>
  <div class="gl-lb-meta">
    <div class="gl-lb-meta-section" id="glLbSection"></div>
    <div class="gl-lb-meta-title" id="glLbTitle"></div>
    <div class="gl-lb-counter" id="glLbCounter"></div>
  </div>
</div>

<?php get_template_part( 'template-parts/editor-content' ); ?>

<?php get_footer(); ?>

<script>
(function () {
  var items    = document.querySelectorAll('.gl-item');
  var lightbox = document.getElementById('glLightbox');
  var lbInner  = document.getElementById('glLbInner');
  var lbSec    = document.getElementById('glLbSection');
  var lbTitle  = document.getElementById('glLbTitle');
  var lbCount  = document.getElementById('glLbCounter');
  var curIdx   = 0;
  var visible  = [];

  function getVisible() {
    return Array.prototype.filter.call(items, function (i) {
      return !i.classList.contains('gl-hidden');
    });
  }

  function renderLb() {
    var item = visible[curIdx];
    if (!item) return;
    var section = item.dataset.section || '';
    var title   = item.dataset.title   || '';
    var realImg = item.querySelector('.gl-img');
    if (realImg) {
      lbInner.innerHTML = '<img class="gl-lb-img" src="' + realImg.src + '" alt="' + title.replace(/"/g, '&quot;') + '">';
    } else {
      var ph   = item.querySelector('.gl-placeholder');
      var icon = ph && ph.querySelector('.gl-gp-icon')    ? ph.querySelector('.gl-gp-icon').textContent    : '🖼️';
      var pt   = ph && ph.querySelector('.gl-gp-title')   ? ph.querySelector('.gl-gp-title').textContent   : title;
      var pf   = ph && ph.querySelector('.gl-gp-file')    ? ph.querySelector('.gl-gp-file').textContent    : '';
      var ps   = ph && ph.querySelector('.gl-gp-section') ? ph.querySelector('.gl-gp-section').textContent : section;
      lbInner.innerHTML =
        '<div class="gl-lb-placeholder">' +
          '<div class="gl-gp-icon">' + icon + '</div>' +
          '<span class="gl-gp-section">' + ps + '</span>' +
          '<div class="gl-gp-title" style="font-size:17px;font-weight:500;color:var(--ink)">' + pt + '</div>' +
          '<div class="gl-gp-file" style="font-size:12px;color:var(--ink-light)">' + pf + '</div>' +
        '</div>';
    }
    lbSec.textContent   = section;
    lbTitle.textContent = title;
    lbCount.textContent = (curIdx + 1) + ' of ' + visible.length;
  }

  function openLb(idx) {
    visible = getVisible();
    curIdx  = idx;
    renderLb();
    lightbox.classList.add('gl-open');
    document.body.style.overflow = 'hidden';
  }

  function closeLb() {
    lightbox.classList.remove('gl-open');
    document.body.style.overflow = '';
  }

  function navLb(dir) {
    visible = getVisible();
    curIdx  = (curIdx + dir + visible.length) % visible.length;
    renderLb();
  }

  /* Filter tabs */
  var filterBtns = document.querySelectorAll('.gl-filter-btn');
  filterBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      filterBtns.forEach(function (b) { b.classList.remove('gl-active'); });
      btn.classList.add('gl-active');
      var filter = btn.dataset.filter;
      items.forEach(function (item) {
        item.classList.toggle('gl-hidden', filter !== 'all' && item.dataset.cat !== filter);
      });
    });
  });

  /* Open lightbox on item click */
  items.forEach(function (item) {
    item.addEventListener('click', function () {
      visible = getVisible();
      openLb(visible.indexOf(item));
    });
  });

  /* Lightbox controls */
  document.querySelector('.gl-lb-close').addEventListener('click', closeLb);
  document.querySelector('.gl-lb-prev').addEventListener('click', function () { navLb(-1); });
  document.querySelector('.gl-lb-next').addEventListener('click', function () { navLb(1); });

  /* Keyboard navigation */
  document.addEventListener('keydown', function (e) {
    if (!lightbox.classList.contains('gl-open')) return;
    if (e.key === 'ArrowRight') navLb(1);
    if (e.key === 'ArrowLeft')  navLb(-1);
    if (e.key === 'Escape')     closeLb();
  });

  /* Click outside content to close */
  lightbox.addEventListener('click', function (e) {
    if (e.target === lightbox) closeLb();
  });
})();
</script>
