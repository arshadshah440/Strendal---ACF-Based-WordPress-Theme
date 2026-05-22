<?php
/**
 * Template Name: The Story
 * Template Post Type: page
 *
 * Full-page "The Story" layout.
 * Each section has a "Content Source" toggle (Default / Custom).
 * Default content extracted from strendal_home_story.html.
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
$HS = [

	'opening' => [
		'eyebrow'  => 'West Cary &nbsp;·&nbsp; Evans Farm &nbsp;·&nbsp; 4007 Strendal Dr',
		'title'    => 'A home built around<br><em>how life is actually lived</em>',
		'subtitle' => 'Not just square footage and finishes — but a philosophy. Fourteen years of intentional decisions about light, air, soil, space, and the way a family moves through a day.',
	],

	'philosophy' => [
		'eyebrow' => 'Our Philosophy',
		'title'   => 'Inside and outside are not two places.<br>They are one continuous life.',
		'paras'   => [
			'Most homes draw a hard line between indoors and outdoors. This one was designed to dissolve it. From the kitchen herbs picked at arm\'s reach, to the screened porch that extends your living room into the evening air, to the backyard garden that feeds your family — inside and outside breathe together here.',
			'This isn\'t a philosophy we invented for a listing. It\'s how this family actually lived for fourteen years. And it shows in every choice made along the way.',
		],
	],

	'pillars' => [
		'hd_title' => 'Three things you cannot compromise on',
		'hd_body'  => 'These aren\'t features. They\'re a way of living that took fourteen years to build.',
		'items'    => [
			[
				'icon_key' => 'land',
				'title'    => 'The Land',
				'body'     => 'A rare third-of-an-acre in West Cary — nearly double the neighbourhood average. Positioned at the quiet end of a cul-de-sac, elevated above the creek, with privacy on all sides. Some things you simply cannot build later.',
			],
			[
				'icon_key' => 'light',
				'title'    => 'The Light',
				'body'     => 'Northeast-facing, the home captures morning sun from the east and evening warmth from the west. You wake up to light. You end your day to colour. No accident — just thoughtful orientation.',
			],
			[
				'icon_key' => 'soil',
				'title'    => 'The Soil',
				'body'     => 'Ten years. Zero pesticides. Not once. The in-ground garden has produced five varieties of peppers, cucumbers, zucchini, bitter gourd, garlic and herbs — season after season — because the soil was treated with respect.',
			],
		],
	],

	'family' => [
		'eyebrow' => 'Fourteen Years',
		'title'   => 'A home where<br><em>families grow</em>',
		'paras'   => [
			'This isn\'t a flipped house or a staged showcase. It\'s a home where children grew up, where parents visited for months, where birthdays and holidays stretched the dining table into the living room and still felt right.',
			'The extended dining area wasn\'t a builder upgrade — it was built because the family needed it. The guest bedroom on the main floor wasn\'t a resale strategy — it was for grandparents who came to stay and needed to be close.',
			'Every decision in this home was made by people who actually lived here. That is an increasingly rare thing.',
		],
		'quote' => '"We didn\'t build this home for resale. We built it for life. The fact that it became remarkable is a side effect of living with intention."',
		'stats' => [
			[ 'num' => '14',  'lbl' => 'Years of memories made here' ],
			[ 'num' => '⅓',   'lbl' => 'Acre — rarest lot in the area' ],
			[ 'num' => '4',   'lbl' => 'Bedrooms across two floors' ],
			[ 'num' => '0',   'lbl' => 'Pesticides — ever. Not once.' ],
		],
	],

	'garden' => [
		'eyebrow'    => 'The Garden',
		'title'      => 'Fresh from soil<br><em>to table</em>',
		'paras'      => [
			'For ten consecutive years this backyard has produced food. Not decoratively — actually, meaningfully, generously. Five pepper varieties. Cucumbers, zucchini, squash, bitter gourd. Garlic and onions in the ground. Mint, basil, and rosemary just outside the kitchen door.',
			'In summer, you harvest. In winter, you open the freezer and find what you put by in September. North Carolina gives you nearly eight months of growing season. This garden has used every one of them.',
			'Zero pesticides. The children played in this soil. The family ate from it. That was never a compromise — it was always the point.',
		],
		'card_title' => 'What This Garden Grows',
		'produce'    => [
			'5 varieties of peppers',
			'Cucumbers',
			'Zucchini &amp; squash',
			'Bitter gourd',
			'Garlic &amp; onions',
			'Fresh mint',
			'Basil (summer)',
			'Rosemary',
		],
		'footer' => 'Zero pesticides &nbsp;·&nbsp; Ten consecutive years &nbsp;·&nbsp; In-ground, not raised beds',
	],

	'spice' => [
		'eyebrow' => 'The Spice Door',
		'title'   => 'Open the door.',
		'tagline' => 'Let the morning in.',
		'paras'   => [
			'There\'s a door in this home we call the spice door. Open the storm screen, open the back porch door — and the whole house breathes. Cooking aromas find their way out. Morning air finds its way in.',
			'No air conditioning needed for seven to eight months of the year. Just fresh, natural circulation through a home that was oriented to welcome it.',
		],
		'steps' => [
			[ 'title' => 'Morning', 'body' => 'Open the spice door. Eastern light pours in. The day begins.' ],
			[ 'title' => 'Midday',  'body' => 'Cook with cumin, turmeric, curry leaves. The aromas flow outward, not into closets.' ],
			[ 'title' => 'Evening', 'body' => 'Step onto the screened porch. Watch the western sun paint the backyard. The garden is right there. So is the quiet.' ],
			[ 'title' => 'Night',   'body' => 'Close the door. The house holds warmth. Tomorrow, you do it again.' ],
		],
	],

	'cal' => [
		'eyebrow'    => 'Open Air Living',
		'title'      => 'Nine months of<br><em>outdoor life</em>',
		'paras'      => [
			'North Carolina rewards those who embrace it. From March through November, the screened porch, the backyard, and the garden are as much your living space as any room inside.',
			'The covered screened porch means rain doesn\'t end the evening. The cul-de-sac position means no traffic noise ends the peace. And the third-of-an-acre means there is always room to breathe.',
		],
		'card_title' => 'Outdoor Living Calendar',
		'items'      => [
			[ 'month' => 'March',     'label' => 'first harvests' ],
			[ 'month' => 'April–June','label' => 'garden peak' ],
			[ 'month' => 'July–Sept', 'label' => 'preserve &amp; freeze' ],
			[ 'month' => 'Oct–Nov',   'label' => 'final harvest' ],
		],
	],

	'pull' => [
		'quote' => '"This isn\'t just a house. It\'s fourteen years of memories, laughter, and life well-lived on a rare third-of-an-acre lot in West Cary."',
		'cite'  => 'The owners &nbsp;·&nbsp; 4007 Strendal Dr &nbsp;·&nbsp; Cary, NC',
	],

	'cta' => [
		'title'    => 'Ready to walk through?',
		'body'     => 'Schedule a private tour and experience the home for yourself.',
		'btn_text' => 'Schedule Your Tour',
		'btn_url'  => '#contact',
	],

];

/* ════════════════════════════════════════════════════════
   FIELD RESOLUTION
   ════════════════════════════════════════════════════════ */

/* ── Opening ── */
$opening_use_default = strendal_field( 'hs_opening_use_default', $post_id );
if ( $opening_use_default || $opening_use_default === null ) {
	$opening_eyebrow  = $HS['opening']['eyebrow'];
	$opening_title    = $HS['opening']['title'];
	$opening_subtitle = $HS['opening']['subtitle'];
} else {
	$opening_eyebrow  = strendal_field( 'hs_opening_eyebrow',  $post_id ) ?: $HS['opening']['eyebrow'];
	$opening_title    = strendal_field( 'hs_opening_title',    $post_id ) ?: $HS['opening']['title'];
	$opening_subtitle = strendal_field( 'hs_opening_subtitle', $post_id ) ?: $HS['opening']['subtitle'];
}

/* ── Philosophy ── */
$philosophy_use_default = strendal_field( 'hs_philosophy_use_default', $post_id );
if ( $philosophy_use_default || $philosophy_use_default === null ) {
	$philosophy_eyebrow = $HS['philosophy']['eyebrow'];
	$philosophy_title   = $HS['philosophy']['title'];
	$philosophy_paras   = $HS['philosophy']['paras'];
} else {
	$philosophy_eyebrow = strendal_field( 'hs_philosophy_eyebrow', $post_id ) ?: $HS['philosophy']['eyebrow'];
	$philosophy_title   = strendal_field( 'hs_philosophy_title',   $post_id ) ?: $HS['philosophy']['title'];
	$raw_paras          = strendal_field( 'hs_philosophy_paras',   $post_id ) ?: [];
	$philosophy_paras   = $raw_paras ? array_column( $raw_paras, 'paragraph' ) : $HS['philosophy']['paras'];
}

/* ── Pillars ── */
$pillars_use_default = strendal_field( 'hs_pillars_use_default', $post_id );
if ( $pillars_use_default || $pillars_use_default === null ) {
	$pillars_hd_title = $HS['pillars']['hd_title'];
	$pillars_hd_body  = $HS['pillars']['hd_body'];
	$pillars_items    = $HS['pillars']['items'];
} else {
	$pillars_hd_title = strendal_field( 'hs_pillars_hd_title', $post_id ) ?: $HS['pillars']['hd_title'];
	$pillars_hd_body  = strendal_field( 'hs_pillars_hd_body',  $post_id ) ?: $HS['pillars']['hd_body'];
	$raw_pillars      = strendal_field( 'hs_pillars', $post_id ) ?: [];
	$pillars_items    = $raw_pillars
		? array_map( fn( $p ) => [ 'icon_key' => $p['p_icon_key'], 'title' => $p['p_title'], 'body' => $p['p_body'] ], $raw_pillars )
		: $HS['pillars']['items'];
}

/* ── Family Story ── */
$family_use_default = strendal_field( 'hs_family_use_default', $post_id );
if ( $family_use_default || $family_use_default === null ) {
	$family_eyebrow = $HS['family']['eyebrow'];
	$family_title   = $HS['family']['title'];
	$family_paras   = $HS['family']['paras'];
	$family_quote   = $HS['family']['quote'];
	$family_stats   = $HS['family']['stats'];
} else {
	$family_eyebrow = strendal_field( 'hs_family_eyebrow', $post_id ) ?: $HS['family']['eyebrow'];
	$family_title   = strendal_field( 'hs_family_title',   $post_id ) ?: $HS['family']['title'];
	$raw_paras      = strendal_field( 'hs_family_paras',   $post_id ) ?: [];
	$family_paras   = $raw_paras ? array_column( $raw_paras, 'paragraph' ) : $HS['family']['paras'];
	$family_quote   = strendal_field( 'hs_family_quote',   $post_id ) ?: $HS['family']['quote'];
	$raw_stats      = strendal_field( 'hs_family_stats',   $post_id ) ?: [];
	$family_stats   = $raw_stats
		? array_map( fn( $s ) => [ 'num' => $s['stat_num'], 'lbl' => $s['stat_lbl'] ], $raw_stats )
		: $HS['family']['stats'];
}

/* ── Garden ── */
$garden_use_default = strendal_field( 'hs_garden_use_default', $post_id );
if ( $garden_use_default || $garden_use_default === null ) {
	$garden_eyebrow    = $HS['garden']['eyebrow'];
	$garden_title      = $HS['garden']['title'];
	$garden_paras      = $HS['garden']['paras'];
	$garden_card_title = $HS['garden']['card_title'];
	$garden_produce    = $HS['garden']['produce'];
	$garden_footer     = $HS['garden']['footer'];
} else {
	$garden_eyebrow    = strendal_field( 'hs_garden_eyebrow',    $post_id ) ?: $HS['garden']['eyebrow'];
	$garden_title      = strendal_field( 'hs_garden_title',      $post_id ) ?: $HS['garden']['title'];
	$raw_paras         = strendal_field( 'hs_garden_paras',      $post_id ) ?: [];
	$garden_paras      = $raw_paras ? array_column( $raw_paras, 'paragraph' ) : $HS['garden']['paras'];
	$garden_card_title = strendal_field( 'hs_garden_card_title', $post_id ) ?: $HS['garden']['card_title'];
	$raw_produce       = strendal_field( 'hs_garden_produce',    $post_id ) ?: [];
	$garden_produce    = $raw_produce ? array_column( $raw_produce, 'produce_item' ) : $HS['garden']['produce'];
	$garden_footer     = strendal_field( 'hs_garden_footer',     $post_id ) ?: $HS['garden']['footer'];
}

/* ── Spice Door ── */
$spice_use_default = strendal_field( 'hs_spice_use_default', $post_id );
if ( $spice_use_default || $spice_use_default === null ) {
	$spice_eyebrow = $HS['spice']['eyebrow'];
	$spice_title   = $HS['spice']['title'];
	$spice_tagline = $HS['spice']['tagline'];
	$spice_paras   = $HS['spice']['paras'];
	$spice_steps   = $HS['spice']['steps'];
} else {
	$spice_eyebrow = strendal_field( 'hs_spice_eyebrow',  $post_id ) ?: $HS['spice']['eyebrow'];
	$spice_title   = strendal_field( 'hs_spice_title',    $post_id ) ?: $HS['spice']['title'];
	$spice_tagline = strendal_field( 'hs_spice_tagline',  $post_id ) ?: $HS['spice']['tagline'];
	$raw_paras     = strendal_field( 'hs_spice_paras',    $post_id ) ?: [];
	$spice_paras   = $raw_paras ? array_column( $raw_paras, 'paragraph' ) : $HS['spice']['paras'];
	$raw_steps     = strendal_field( 'hs_spice_steps',    $post_id ) ?: [];
	$spice_steps   = $raw_steps
		? array_map( fn( $s ) => [ 'title' => $s['step_title'], 'body' => $s['step_body'] ], $raw_steps )
		: $HS['spice']['steps'];
}

/* ── Calendar ── */
$cal_use_default = strendal_field( 'hs_cal_use_default', $post_id );
if ( $cal_use_default || $cal_use_default === null ) {
	$cal_eyebrow    = $HS['cal']['eyebrow'];
	$cal_title      = $HS['cal']['title'];
	$cal_paras      = $HS['cal']['paras'];
	$cal_card_title = $HS['cal']['card_title'];
	$cal_items      = $HS['cal']['items'];
} else {
	$cal_eyebrow    = strendal_field( 'hs_cal_eyebrow',    $post_id ) ?: $HS['cal']['eyebrow'];
	$cal_title      = strendal_field( 'hs_cal_title',      $post_id ) ?: $HS['cal']['title'];
	$raw_paras      = strendal_field( 'hs_cal_paras',      $post_id ) ?: [];
	$cal_paras      = $raw_paras ? array_column( $raw_paras, 'paragraph' ) : $HS['cal']['paras'];
	$cal_card_title = strendal_field( 'hs_cal_card_title', $post_id ) ?: $HS['cal']['card_title'];
	$raw_items      = strendal_field( 'hs_cal_items',      $post_id ) ?: [];
	$cal_items      = $raw_items
		? array_map( fn( $i ) => [ 'month' => $i['cal_month'], 'label' => $i['cal_label'] ], $raw_items )
		: $HS['cal']['items'];
}

/* ── Pull Quote ── */
$pull_use_default = strendal_field( 'hs_pull_use_default', $post_id );
if ( $pull_use_default || $pull_use_default === null ) {
	$pull_quote = $HS['pull']['quote'];
	$pull_cite  = $HS['pull']['cite'];
} else {
	$pull_quote = strendal_field( 'hs_pull_quote', $post_id ) ?: $HS['pull']['quote'];
	$pull_cite  = strendal_field( 'hs_pull_cite',  $post_id ) ?: $HS['pull']['cite'];
}

/* ── CTA ── */
$cta_use_default = strendal_field( 'hs_cta_use_default', $post_id );
if ( $cta_use_default || $cta_use_default === null ) {
	$cta_title    = $HS['cta']['title'];
	$cta_body     = $HS['cta']['body'];
	$cta_btn_text = $HS['cta']['btn_text'];
	$cta_btn_url  = $HS['cta']['btn_url'];
} else {
	$cta_title    = strendal_field( 'hs_cta_title',    $post_id ) ?: $HS['cta']['title'];
	$cta_body     = strendal_field( 'hs_cta_body',     $post_id ) ?: $HS['cta']['body'];
	$cta_btn_text = strendal_field( 'hs_cta_btn_text', $post_id ) ?: $HS['cta']['btn_text'];
	$cta_btn_url  = strendal_field( 'hs_cta_btn_url',  $post_id ) ?: $HS['cta']['btn_url'];
}

/* ════════════════════════════════════════════════════════
   PILLAR SVG HELPER
   ════════════════════════════════════════════════════════ */
function hs_pillar_svg( string $key ): string {
	switch ( $key ) {
		case 'light':
			return '<svg viewBox="0 0 24 24"><path d="M12 3v1m0 16v1M4.22 4.22l.71.71m12.73 12.73.71.71M3 12h1m16 0h1M4.93 19.07l.71-.71M18.36 5.64l.71-.71"/><circle cx="12" cy="12" r="4"/></svg>';
		case 'soil':
			return '<svg viewBox="0 0 24 24"><path d="M12 22V12m0 0C12 7 8 4 4 6m8 6c0-5 4-8 8-6"/></svg>';
		default: /* land */
			return '<svg viewBox="0 0 24 24"><path d="M12 2a7 7 0 017 7c0 5-7 13-7 13S5 14 5 9a7 7 0 017-7z"/><circle cx="12" cy="9" r="2.5"/></svg>';
	}
}

/* ════════════════════════════════════════════════════════
   RENDER
   ════════════════════════════════════════════════════════ */
get_header();
?>

<!-- ── OPENING ── -->
<section class="hs-opening">
  <div class="hs-o-bg"></div>
  <div class="hs-o-content">
    <div class="hs-o-eyebrow"><?php echo wp_kses_post( $opening_eyebrow ); ?></div>
    <h1 class="hs-o-title"><?php echo wp_kses_post( $opening_title ); ?></h1>
    <div class="hs-o-rule"></div>
    <p class="hs-o-sub"><?php echo wp_kses_post( $opening_subtitle ); ?></p>
  </div>
  <div class="hs-scroll-cue">
    <div class="hs-scroll-line"></div>
    <span class="hs-scroll-word">The Story</span>
  </div>
</section>

<!-- ── PHILOSOPHY ── -->
<section class="hs-philosophy">
  <span class="hs-eyebrow hs-reveal"><?php echo esc_html( $philosophy_eyebrow ); ?></span>
  <h2 class="hs-reveal hs-d1"><?php echo wp_kses_post( $philosophy_title ); ?></h2>
  <?php foreach ( $philosophy_paras as $i => $para ) : ?>
    <p class="hs-reveal hs-d<?php echo min( $i + 2, 4 ); ?>"><?php echo wp_kses_post( $para ); ?></p>
  <?php endforeach; ?>
</section>

<!-- ── THREE PILLARS ── -->
<section class="hs-pillars">
  <div class="hs-pillars-inner">
    <div class="hs-pillars-hd">
      <span class="hs-eyebrow hs-reveal">What Makes This Home Different</span>
      <h2 class="hs-reveal hs-d1"><?php echo wp_kses_post( $pillars_hd_title ); ?></h2>
      <p class="hs-reveal hs-d2"><?php echo wp_kses_post( $pillars_hd_body ); ?></p>
    </div>
    <div class="hs-pillars-grid">
      <?php foreach ( $pillars_items as $i => $pillar ) : ?>
        <div class="hs-pillar hs-reveal<?php echo $i > 0 ? ' hs-d' . ( $i * 2 ) : ''; ?>">
          <div class="hs-p-icon"><?php echo hs_pillar_svg( $pillar['icon_key'] ); ?></div>
          <h3><?php echo esc_html( $pillar['title'] ); ?></h3>
          <p><?php echo wp_kses_post( $pillar['body'] ); ?></p>
          <div class="hs-p-bar"></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── FAMILY STORY ── -->
<div class="hs-sw">
  <div class="hs-s-row hs-reveal">
    <div class="hs-s-text">
      <span class="hs-eyebrow"><?php echo esc_html( $family_eyebrow ); ?></span>
      <h2><?php echo wp_kses_post( $family_title ); ?></h2>
      <?php foreach ( $family_paras as $para ) : ?>
        <p><?php echo wp_kses_post( $para ); ?></p>
      <?php endforeach; ?>
    </div>
    <div class="hs-stat-card">
      <div class="hs-sc-inner">
        <div class="hs-sc-quote"><?php echo wp_kses_post( $family_quote ); ?></div>
        <div class="hs-sc-grid">
          <?php foreach ( $family_stats as $stat ) : ?>
            <div>
              <div class="hs-sc-num"><?php echo esc_html( $stat['num'] ); ?></div>
              <div class="hs-sc-lbl"><?php echo wp_kses_post( $stat['lbl'] ); ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ── GARDEN STORY ── -->
<div class="hs-sw-alt">
  <div class="hs-sw-alt-inner">
    <div class="hs-s-row hs-flip hs-reveal">
      <div class="hs-s-text">
        <span class="hs-eyebrow"><?php echo esc_html( $garden_eyebrow ); ?></span>
        <h2><?php echo wp_kses_post( $garden_title ); ?></h2>
        <?php foreach ( $garden_paras as $para ) : ?>
          <p><?php echo wp_kses_post( $para ); ?></p>
        <?php endforeach; ?>
      </div>
      <div class="hs-garden-card">
        <div class="hs-gc-title"><?php echo esc_html( $garden_card_title ); ?></div>
        <div class="hs-produce-grid">
          <?php foreach ( $garden_produce as $item ) : ?>
            <div class="hs-p-item"><div class="hs-p-dot"></div><?php echo wp_kses_post( $item ); ?></div>
          <?php endforeach; ?>
        </div>
        <div class="hs-gc-footer"><?php echo wp_kses_post( $garden_footer ); ?></div>
      </div>
    </div>
  </div>
</div>

<!-- ── SPICE DOOR ── -->
<section class="hs-spice">
  <div class="hs-spice-inner">
    <div class="hs-spice-text hs-reveal">
      <span class="hs-eyebrow"><?php echo esc_html( $spice_eyebrow ); ?></span>
      <h2><?php echo esc_html( $spice_title ); ?></h2>
      <span class="hs-spice-tagline"><?php echo esc_html( $spice_tagline ); ?></span>
      <?php foreach ( $spice_paras as $para ) : ?>
        <p><?php echo wp_kses_post( $para ); ?></p>
      <?php endforeach; ?>
    </div>
    <div class="hs-steps hs-reveal hs-d2">
      <?php foreach ( $spice_steps as $i => $step ) : ?>
        <div class="hs-step">
          <div class="hs-step-badge"><?php echo $i + 1; ?></div>
          <div class="hs-step-body">
            <strong><?php echo esc_html( $step['title'] ); ?></strong>
            <?php echo wp_kses_post( $step['body'] ); ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── OUTDOOR CALENDAR ── -->
<div class="hs-sw">
  <div class="hs-s-row hs-reveal">
    <div class="hs-s-text">
      <span class="hs-eyebrow"><?php echo esc_html( $cal_eyebrow ); ?></span>
      <h2><?php echo wp_kses_post( $cal_title ); ?></h2>
      <?php foreach ( $cal_paras as $para ) : ?>
        <p><?php echo wp_kses_post( $para ); ?></p>
      <?php endforeach; ?>
    </div>
    <div class="hs-cal-card">
      <div class="hs-cal-title"><?php echo esc_html( $cal_card_title ); ?></div>
      <div class="hs-month-bar">
        <div class="hs-mb"></div><div class="hs-mb"></div><div class="hs-mb half"></div>
        <div class="hs-mb on"></div><div class="hs-mb on"></div><div class="hs-mb on"></div>
        <div class="hs-mb on"></div><div class="hs-mb on"></div><div class="hs-mb on"></div>
        <div class="hs-mb on"></div><div class="hs-mb half"></div><div class="hs-mb"></div>
      </div>
      <div class="hs-month-row">
        <span class="hs-m-lbl">Jan</span><span class="hs-m-lbl">Apr</span>
        <span class="hs-m-lbl">Jul</span><span class="hs-m-lbl">Oct</span><span class="hs-m-lbl">Dec</span>
      </div>
      <div class="hs-cal-detail-title">What the seasons give you here</div>
      <div class="hs-cal-grid">
        <?php foreach ( $cal_items as $item ) : ?>
          <div class="hs-cal-item"><?php echo esc_html( $item['month'] ); ?> — <?php echo wp_kses_post( $item['label'] ); ?></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<!-- ── PULL QUOTE ── -->
<section class="hs-pull">
  <blockquote class="hs-reveal"><?php echo wp_kses_post( $pull_quote ); ?></blockquote>
  <cite class="hs-reveal hs-d2"><?php echo wp_kses_post( $pull_cite ); ?></cite>
</section>

<!-- ── CTA ── -->
<section class="hs-cta" id="contact">
  <h3><?php echo esc_html( $cta_title ); ?></h3>
  <p><?php echo wp_kses_post( $cta_body ); ?></p>
  <a href="<?php echo esc_url( $cta_btn_url ); ?>" class="hs-cta-btn"><?php echo esc_html( $cta_btn_text ); ?></a>
</section>

<?php get_footer(); ?>

<script>
(function () {
  var els = document.querySelectorAll('.hs-reveal');
  if (!els.length || !('IntersectionObserver' in window)) {
    els.forEach(function (el) { el.classList.add('visible'); });
    return;
  }
  var obs = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        obs.unobserve(e.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -32px 0px' });
  els.forEach(function (el) { obs.observe(el); });
})();
</script>
