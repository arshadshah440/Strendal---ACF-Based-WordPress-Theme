<?php
/**
 * Template Name: Light & Orientation
 * Template Post Type: page
 *
 * Full-page "Light & Orientation" layout.
 * Each section has a "Content Source" toggle (Default / Custom).
 * Default uses content extracted from strendal_light_orientation (2).html.
 */

defined( 'ABSPATH' ) || exit;

/* ── Standalone page — no site nav or footer ── */
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
$LO = [

	'hero' => [
		'image'    => [ 'url' => $theme_uri . '/assets/images/lo/lo-hero.jpg', 'alt' => 'Northeast-facing exterior at dawn' ],
		'eyebrow'  => 'Section 4 — Light &amp; Orientation',
		'title'    => 'This home<br>greets every dawn.',
		'subtitle' => 'Northeast-facing orientation means the first light of day fills your living spaces — while the afternoon sun stays gentle. A rare feature that touches how you live, every single morning.',
	],

	'intro' => [
		'label'      => 'The Science of Light',
		'title'      => 'Not all homes face<br><em>the right direction.</em>',
		'paragraphs' => [
			'Most homes in Cary face south or west — catching the harsh afternoon glare, heating up by noon, and leaving mornings dim. Orientation is rarely discussed, yet it shapes how a home feels every single day.',
			'4007 Strendal Drive faces northeast. That means sunrise comes directly through the front — flooding the living room, kitchen, and dining area in warm, natural light from the moment the day begins. By afternoon, the angle has shifted. Interiors stay comfortable. Curtains stay open.',
			'The owners have never needed to block the sun. They\'ve enjoyed it — every morning for 14 years.',
		],
		'orient_facts' => [
			[ 'icon' => '🌅', 'label' => 'Morning',    'value' => 'Sunrise fills front rooms' ],
			[ 'icon' => '🌇', 'label' => 'Evening',    'value' => 'Sunset visible from inside' ],
			[ 'icon' => '🌡️', 'label' => 'Summer',     'value' => 'Less heat buildup, lower A/C bills' ],
			[ 'icon' => '☁️', 'label' => 'Year Round', 'value' => 'Consistent, soft natural light' ],
		],
	],

	'facts' => [
		[ 'num' => '7–8', 'label' => 'Months open-air living' ],
		[ 'num' => 'NE',  'label' => 'True orientation — verified' ],
		[ 'num' => '14',  'label' => 'Years of morning light enjoyed' ],
		[ 'num' => '2×',  'label' => 'Sunrise &amp; sunset from inside' ],
	],

	'airflow' => [
		'label'    => 'Natural Ventilation',
		'title'    => 'A home that breathes<br>on its own terms.',
		'lead'     => 'Positioned at the end of a cul-de-sac — open on all sides, buffered from road noise — this home draws fresh air naturally through every level. The signature "spice door" at the back lets cross-ventilation flow through the kitchen, carrying aromas out and cool air in, without the A/C running.',
		'tabs'     => [
			[ 'label' => 'Front View',           'image' => [ 'url' => $theme_uri . '/assets/images/lo/lo-airflow-0.png', 'alt' => 'Northeast front face' ],       'caption' => 'Northeast front face — light and air from every direction, dawn through dusk' ],
			[ 'label' => 'Aerial — Open Sides',  'image' => [ 'url' => $theme_uri . '/assets/images/lo/lo-airflow-1.png', 'alt' => 'Aerial cul-de-sac view' ],     'caption' => 'Aerial view — cul-de-sac position means no blocked sides, air flows freely in all directions' ],
			[ 'label' => 'Rear — Evening Air',   'image' => [ 'url' => $theme_uri . '/assets/images/lo/lo-airflow-2.png', 'alt' => 'Rear elevation golden hour' ], 'caption' => 'Rear elevation at golden hour — screened porch, western sunset, natural cross-breeze from spice door' ],
		],
		'benefits' => [
			[ 'icon' => '🚪', 'title' => 'The Spice Door',    'body' => 'A storm door off the kitchen with an adjustable screen — open both doors and fresh air flows in from the back. Aromas out, cool air in. No exhaust fan needed.' ],
			[ 'icon' => '🌿', 'title' => 'No Blocked Sides',  'body' => 'The cul-de-sac position means only one direct neighbour. Three sides of the property open freely — a ventilation advantage most suburban homes can\'t offer.' ],
			[ 'icon' => '💧', 'title' => 'Never Flooded',     'body' => 'Elevated 10 feet above the creek. Not once in 14 years. The lot position means rainwater drains away naturally — no stagnant pooling, no flood anxiety.' ],
		],
	],

	'quiet' => [
		'label'      => 'Peace &amp; Privacy',
		'title'      => 'The sounds you want.<br>Not the ones you don\'t.',
		'paragraphs' => [
			'Most homes near major roads accept noise as a trade-off for convenience. This one doesn\'t. The lot\'s position — tucked behind other properties, backed by the cul-de-sac — creates natural distance from I-540 and Green Level Church Road.',
			'When we moved in, we checked the home\'s position against RDU\'s published flight path maps — and the quiet has matched that ever since. What you hear here are birds, the garden, and the stillness of a street that ends at your door.',
		],
		'checklist' => [
			'Historically quiet airspace — owners checked RDU maps at time of purchase, no overhead corridors experienced in 14 years',
			'Buffered from I-540 noise by lot depth and neighbouring properties',
			'Cul-de-sac — no through-traffic, no strangers passing',
			'Single direct neighbour on one side',
			'Children play in the yard safely — cars don\'t pass through',
		],
		'noise_rows' => [
			[ 'label' => 'Aircraft overhead',       'note' => 'Quiet in our experience',           'pct' => 8,  'type' => 'low' ],
			[ 'label' => 'Road traffic (I-540)',     'note' => 'Buffered by lot depth',             'pct' => 18, 'type' => 'low' ],
			[ 'label' => 'Neighbourhood activity',  'note' => 'Cul-de-sac — no through traffic',   'pct' => 12, 'type' => 'low' ],
			[ 'label' => 'Nature sounds',           'note' => 'Year-round',                        'pct' => 72, 'type' => 'med' ],
		],
		'noise_note' => 'Based on 14 years of living here — and verified against RDU flight path maps at time of purchase in 2011. The dominant sound is nature: birds, wind in the trees, and the occasional creek after rain.',
	],

	'sunset' => [
		'image'       => [ 'url' => $theme_uri . '/assets/images/lo/lo-sunset.jpg', 'alt' => 'Golden hour at 4007 Strendal Drive' ],
		'quote'       => '"The morning light arrives like a quiet promise.<br>The evening light stays like a reward."',
		'attribution' => '14 years of sunrises and sunsets — 4007 Strendal Drive',
	],

	'cta' => [
		'title'    => 'Come see it in the morning.',
		'body'     => 'Schedule a tour at sunrise — and experience the light for yourself. It\'s the best time to visit.',
		'btn_text' => 'Schedule a Tour',
		'btn_url'  => '#contact',
	],
];

/* ════════════════════════════════════════════════════════
   RESOLVE SECTION DATA
   ════════════════════════════════════════════════════════ */

/* ── Hero ── */
$lo_hero_ud = (bool) strendal_field( 'lo_hero_use_default', $post_id );
if ( $lo_hero_ud ) {
	$hero = $LO['hero'];
} else {
	$hero = [
		'image'    => strendal_field( 'lo_hero_image', $post_id ),
		'eyebrow'  => strendal_field( 'lo_hero_eyebrow', $post_id ) ?: '',
		'title'    => strendal_field( 'lo_hero_title', $post_id )   ?: '',
		'subtitle' => strendal_field( 'lo_hero_subtitle', $post_id ) ?: '',
	];
}

/* ── Intro ── */
$lo_intro_ud = (bool) strendal_field( 'lo_intro_use_default', $post_id );
if ( $lo_intro_ud ) {
	$intro = $LO['intro'];
} else {
	$raw_paras  = strendal_field( 'lo_intro_paragraphs', $post_id ) ?: [];
	$raw_ofacts = strendal_field( 'lo_orient_facts', $post_id )     ?: [];
	$intro = [
		'label'        => strendal_field( 'lo_intro_label', $post_id ) ?: '',
		'title'        => strendal_field( 'lo_intro_title', $post_id ) ?: '',
		'paragraphs'   => array_column( $raw_paras, 'paragraph' ),
		'orient_facts' => array_map( fn( $f ) => [ 'icon' => $f['of_icon'], 'label' => $f['of_label'], 'value' => $f['of_value'] ], $raw_ofacts ),
	];
}

/* ── Facts ── */
$lo_facts_ud = (bool) strendal_field( 'lo_facts_use_default', $post_id );
if ( $lo_facts_ud ) {
	$facts = $LO['facts'];
} else {
	$raw_facts = strendal_field( 'lo_facts', $post_id ) ?: [];
	$facts     = array_map( fn( $f ) => [ 'num' => $f['fact_num'], 'label' => $f['fact_label'] ], $raw_facts );
}

/* ── Airflow ── */
$lo_airflow_ud = (bool) strendal_field( 'lo_airflow_use_default', $post_id );
if ( $lo_airflow_ud ) {
	$airflow = $LO['airflow'];
} else {
	$raw_tabs = strendal_field( 'lo_airflow_tabs', $post_id )     ?: [];
	$raw_bens = strendal_field( 'lo_airflow_benefits', $post_id ) ?: [];
	$airflow  = [
		'label'    => strendal_field( 'lo_airflow_label', $post_id ) ?: '',
		'title'    => strendal_field( 'lo_airflow_title', $post_id ) ?: '',
		'lead'     => strendal_field( 'lo_airflow_lead', $post_id )  ?: '',
		'tabs'     => array_map( fn( $t ) => [ 'label' => $t['at_label'], 'image' => $t['at_image'], 'caption' => $t['at_caption'] ], $raw_tabs ),
		'benefits' => array_map( fn( $b ) => [ 'icon' => $b['ab_icon'], 'title' => $b['ab_title'], 'body' => $b['ab_body'] ], $raw_bens ),
	];
}

/* ── Quiet ── */
$lo_quiet_ud = (bool) strendal_field( 'lo_quiet_use_default', $post_id );
if ( $lo_quiet_ud ) {
	$quiet = $LO['quiet'];
} else {
	$raw_qp  = strendal_field( 'lo_quiet_paragraphs', $post_id ) ?: [];
	$raw_qcl = strendal_field( 'lo_quiet_checklist', $post_id )  ?: [];
	$raw_nr  = strendal_field( 'lo_noise_rows', $post_id )        ?: [];
	$quiet = [
		'label'      => strendal_field( 'lo_quiet_label', $post_id ) ?: '',
		'title'      => strendal_field( 'lo_quiet_title', $post_id ) ?: '',
		'paragraphs' => array_column( $raw_qp, 'paragraph' ),
		'checklist'  => array_column( $raw_qcl, 'item' ),
		'noise_rows' => array_map( fn( $r ) => [ 'label' => $r['nr_label'], 'note' => $r['nr_note'], 'pct' => (int) $r['nr_pct'], 'type' => $r['nr_type'] ], $raw_nr ),
		'noise_note' => strendal_field( 'lo_noise_note', $post_id ) ?: '',
	];
}

/* ── Sunset ── */
$lo_sunset_ud = (bool) strendal_field( 'lo_sunset_use_default', $post_id );
if ( $lo_sunset_ud ) {
	$sunset = $LO['sunset'];
} else {
	$sunset = [
		'image'       => strendal_field( 'lo_sunset_image', $post_id ),
		'quote'       => strendal_field( 'lo_sunset_quote', $post_id )       ?: '',
		'attribution' => strendal_field( 'lo_sunset_attribution', $post_id ) ?: '',
	];
}

/* ── CTA ── */
$lo_cta_ud = (bool) strendal_field( 'lo_cta_use_default', $post_id );
if ( $lo_cta_ud ) {
	$cta = $LO['cta'];
} else {
	$cta = [
		'title'    => strendal_field( 'lo_cta_title', $post_id )    ?: '',
		'body'     => strendal_field( 'lo_cta_body', $post_id )     ?: '',
		'btn_text' => strendal_field( 'lo_cta_btn_text', $post_id ) ?: 'Schedule a Tour',
		'btn_url'  => strendal_field( 'lo_cta_btn_url', $post_id )  ?: '#contact',
	];
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class( 'lo-page' ); ?>>

<!-- ════════════════════════════════════════
     HERO
     ════════════════════════════════════════ -->
<section class="lo-hero" id="lo-hero">
	<?php if ( ! empty( $hero['image']['url'] ) ) : ?>
		<img class="lo-hero-img"
		     src="<?php echo esc_url( $hero['image']['url'] ); ?>"
		     alt="<?php echo esc_attr( $hero['image']['alt'] ?? '' ); ?>"
		     loading="eager">
	<?php endif; ?>
	<div class="lo-hero-gradient"></div>

	<div class="lo-hero-content">
		<?php if ( $hero['eyebrow'] ) : ?>
			<p class="lo-hero-eyebrow"><?php echo wp_kses_post( $hero['eyebrow'] ); ?></p>
		<?php endif; ?>
		<?php if ( $hero['title'] ) : ?>
			<h1 class="lo-hero-title"><?php echo wp_kses( $hero['title'], [ 'br' => [], 'em' => [], 'strong' => [] ] ); ?></h1>
		<?php endif; ?>
		<?php if ( $hero['subtitle'] ) : ?>
			<p class="lo-hero-sub"><?php echo wp_kses( nl2br( esc_html( $hero['subtitle'] ) ), [ 'br' => [] ] ); ?></p>
		<?php endif; ?>
	</div>

	<div class="lo-hero-scroll" aria-hidden="true">
		<div class="lo-scroll-line"></div>
		<span>Explore</span>
	</div>
</section>


<!-- ════════════════════════════════════════
     INTRO / ORIENTATION
     ════════════════════════════════════════ -->
<section class="lo-intro" id="lo-intro">

	<div class="lo-intro-left">
		<?php if ( $intro['label'] ) : ?>
			<p class="lo-section-label lo-section-label--line-after"><?php echo esc_html( $intro['label'] ); ?></p>
		<?php endif; ?>
		<?php if ( $intro['title'] ) : ?>
			<h2><?php echo wp_kses( $intro['title'], [ 'em' => [], 'strong' => [], 'br' => [] ] ); ?></h2>
		<?php endif; ?>
		<?php foreach ( $intro['paragraphs'] as $para ) : ?>
			<?php if ( $para ) : ?>
				<p><?php echo esc_html( $para ); ?></p>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>

	<div class="lo-intro-right">
		<div class="lo-orientation-diagram">
			<div class="lo-compass-wrap">
				<!-- Compass: N top, arrow points NE (northeast orientation) -->
				<svg viewBox="0 0 180 180" width="180" height="180" xmlns="http://www.w3.org/2000/svg">
					<circle cx="90" cy="90" r="84" fill="none" stroke="rgba(106,158,82,0.18)" stroke-width="1.5"/>
					<path d="M90 90 L90 10 A80 80 0 0 1 162 58 Z" fill="rgba(255,175,50,0.10)"/>
					<line x1="90" y1="8"   x2="90"  y2="18"  stroke="rgba(106,158,82,0.35)" stroke-width="1.5"/>
					<line x1="90" y1="162" x2="90"  y2="172" stroke="rgba(106,158,82,0.2)"  stroke-width="1"/>
					<line x1="8"  y1="90"  x2="18"  y2="90"  stroke="rgba(106,158,82,0.2)"  stroke-width="1"/>
					<line x1="162" y1="90" x2="172" y2="90"  stroke="rgba(106,158,82,0.2)"  stroke-width="1"/>
					<line x1="147" y1="33" x2="140" y2="40"  stroke="rgba(200,149,42,0.5)" stroke-width="1.5"/>
					<text x="90"  y="7"   text-anchor="middle" dominant-baseline="auto"   font-family="Jost,sans-serif" font-size="11" font-weight="500" fill="#6a7e64" letter-spacing="1">N</text>
					<text x="90"  y="178" text-anchor="middle" dominant-baseline="auto"   font-family="Jost,sans-serif" font-size="11" font-weight="400" fill="#aaa">S</text>
					<text x="178" y="94"  text-anchor="end"    dominant-baseline="middle" font-family="Jost,sans-serif" font-size="11" font-weight="400" fill="#aaa">E</text>
					<text x="2"   y="94"  text-anchor="start"  dominant-baseline="middle" font-family="Jost,sans-serif" font-size="11" font-weight="400" fill="#aaa">W</text>
					<text x="148" y="40"  text-anchor="middle" dominant-baseline="middle" font-family="Jost,sans-serif" font-size="10" font-weight="600" fill="#c8952a" letter-spacing="0.5">NE</text>
					<line x1="90" y1="90" x2="142" y2="38" stroke="#c8952a" stroke-width="3" stroke-linecap="round"/>
					<polygon points="142,38 130,40 140,50" fill="#c8952a"/>
					<circle cx="142" cy="38" r="7" fill="rgba(255,175,50,0.25)" stroke="#c8952a" stroke-width="1"/>
					<text x="142" y="42" text-anchor="middle" font-size="8">☀</text>
					<line x1="90" y1="90" x2="55" y2="125" stroke="rgba(106,158,82,0.2)" stroke-width="1.5" stroke-linecap="round"/>
					<circle cx="90" cy="90" r="4" fill="#6a9e52"/>
				</svg>
			</div>
			<p class="lo-compass-label">HOME FACES NORTHEAST</p>

			<?php if ( $intro['orient_facts'] ) : ?>
				<div class="lo-orient-facts">
					<?php foreach ( $intro['orient_facts'] as $fact ) : ?>
						<div class="lo-orient-fact">
							<?php if ( ! empty( $fact['icon'] ) ) : ?>
								<div class="lo-orient-fact-icon" aria-hidden="true"><?php echo esc_html( $fact['icon'] ); ?></div>
							<?php endif; ?>
							<div class="lo-orient-fact-label"><?php echo esc_html( $fact['label'] ); ?></div>
							<div class="lo-orient-fact-value"><?php echo esc_html( $fact['value'] ); ?></div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>

</section>


<!-- ════════════════════════════════════════
     FACTS STRIP
     ════════════════════════════════════════ -->
<?php if ( $facts ) : ?>
<div class="lo-facts-strip" id="lo-facts">
	<?php foreach ( $facts as $fact ) : ?>
		<div class="lo-fact-pill">
			<div class="lo-fact-pill-num"><?php echo wp_kses_post( $fact['num'] ); ?></div>
			<div class="lo-fact-pill-label"><?php echo wp_kses_post( $fact['label'] ); ?></div>
		</div>
	<?php endforeach; ?>
</div>
<?php endif; ?>


<!-- ════════════════════════════════════════
     AIRFLOW SECTION
     ════════════════════════════════════════ -->
<section class="lo-airflow-section" id="lo-airflow">
	<div class="lo-section-header">
		<?php if ( $airflow['label'] ) : ?>
			<p class="lo-section-label lo-section-label--lines"><?php echo esc_html( $airflow['label'] ); ?></p>
		<?php endif; ?>
		<?php if ( $airflow['title'] ) : ?>
			<h2><?php echo wp_kses( $airflow['title'], [ 'em' => [], 'br' => [], 'strong' => [] ] ); ?></h2>
		<?php endif; ?>
		<?php if ( $airflow['lead'] ) : ?>
			<p class="lo-lead"><?php echo wp_kses( nl2br( esc_html( $airflow['lead'] ) ), [ 'br' => [] ] ); ?></p>
		<?php endif; ?>
	</div>

	<?php if ( $airflow['tabs'] ) : ?>
		<div class="lo-airflow-tabs" id="lo-airflow-tabs">
			<?php foreach ( $airflow['tabs'] as $i => $tab ) : ?>
				<button class="lo-airflow-tab <?php echo $i === 0 ? 'active' : ''; ?>"
				        data-tab="<?php echo $i; ?>"
				        type="button">
					<?php echo esc_html( $tab['label'] ); ?>
				</button>
			<?php endforeach; ?>
		</div>

		<div class="lo-airflow-image-wrap">
			<?php foreach ( $airflow['tabs'] as $i => $tab ) :
				$tab_img = $tab['image'];
				$tab_url = is_array( $tab_img ) ? esc_url( $tab_img['url'] ) : '';
				$tab_alt = is_array( $tab_img ) ? ( $tab_img['alt'] ?: $tab['label'] ) : $tab['label'];
			?>
				<div class="lo-airflow-img-panel <?php echo $i === 0 ? 'active' : ''; ?>" id="lo-airflow-panel-<?php echo $i; ?>">
					<?php if ( $tab_url ) : ?>
						<img src="<?php echo $tab_url; ?>"
						     alt="<?php echo esc_attr( $tab_alt ); ?>"
						     loading="<?php echo $i === 0 ? 'eager' : 'lazy'; ?>">
					<?php endif; ?>
					<?php if ( ! empty( $tab['caption'] ) ) : ?>
						<div class="lo-airflow-caption"><?php echo esc_html( $tab['caption'] ); ?></div>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

	<?php if ( $airflow['benefits'] ) : ?>
		<div class="lo-airflow-benefits">
			<?php foreach ( $airflow['benefits'] as $ben ) : ?>
				<div class="lo-benefit-card">
					<?php if ( ! empty( $ben['icon'] ) ) : ?>
						<div class="lo-benefit-icon" aria-hidden="true"><?php echo esc_html( $ben['icon'] ); ?></div>
					<?php endif; ?>
					<div class="lo-benefit-title"><?php echo esc_html( $ben['title'] ); ?></div>
					<?php if ( ! empty( $ben['body'] ) ) : ?>
						<div class="lo-benefit-body"><?php echo wp_kses( nl2br( esc_html( $ben['body'] ) ), [ 'br' => [] ] ); ?></div>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</section>


<!-- ════════════════════════════════════════
     QUIET & PRIVACY
     ════════════════════════════════════════ -->
<section class="lo-quiet-section" id="lo-quiet">
	<div class="lo-quiet-inner">

		<div class="lo-quiet-text">
			<?php if ( $quiet['label'] ) : ?>
				<p class="lo-section-label lo-section-label--line-after"><?php echo wp_kses_post( $quiet['label'] ); ?></p>
			<?php endif; ?>
			<?php if ( $quiet['title'] ) : ?>
				<h2><?php echo wp_kses( $quiet['title'], [ 'em' => [], 'br' => [], 'strong' => [] ] ); ?></h2>
			<?php endif; ?>
			<?php foreach ( $quiet['paragraphs'] as $para ) : ?>
				<?php if ( $para ) : ?><p><?php echo esc_html( $para ); ?></p><?php endif; ?>
			<?php endforeach; ?>

			<?php if ( $quiet['checklist'] ) : ?>
				<ul class="lo-quiet-checklist">
					<?php foreach ( $quiet['checklist'] as $item ) : ?>
						<?php if ( $item ) : ?>
							<li>
								<span class="lo-quiet-check" aria-hidden="true">✓</span>
								<?php echo esc_html( $item ); ?>
							</li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>

		<div class="lo-quiet-visual">
			<div class="lo-quiet-map-card" id="lo-quiet-card">
				<p class="lo-noise-label"><?php esc_html_e( 'Noise Profile — Our Experience', 'strendal' ); ?></p>
				<?php if ( $quiet['noise_rows'] ) : ?>
					<div class="lo-noise-bars">
						<?php foreach ( $quiet['noise_rows'] as $row ) : ?>
							<div class="lo-noise-row">
								<div class="lo-noise-row-label">
									<span><?php echo esc_html( $row['label'] ); ?></span>
									<span><?php echo esc_html( $row['note'] ); ?></span>
								</div>
								<div class="lo-noise-bar-bg">
									<div class="lo-noise-bar-fill <?php echo esc_attr( $row['type'] ); ?>"
									     style="width:<?php echo (int) $row['pct']; ?>%">
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				<?php if ( $quiet['noise_note'] ) : ?>
					<div class="lo-noise-note">
						<?php echo wp_kses( nl2br( esc_html( $quiet['noise_note'] ) ), [ 'br' => [] ] ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>

	</div>
</section>


<!-- ════════════════════════════════════════
     SUNSET CLOSE
     ════════════════════════════════════════ -->
<section class="lo-sunset-close" id="lo-sunset">
	<?php if ( ! empty( $sunset['image']['url'] ) ) : ?>
		<img class="lo-sunset-img"
		     src="<?php echo esc_url( $sunset['image']['url'] ); ?>"
		     alt="<?php echo esc_attr( $sunset['image']['alt'] ?? '' ); ?>"
		     loading="lazy">
	<?php endif; ?>
	<div class="lo-sunset-overlay"></div>
	<div class="lo-sunset-content">
		<?php if ( $sunset['quote'] ) : ?>
			<blockquote><?php echo wp_kses( $sunset['quote'], [ 'em' => [], 'br' => [], 'strong' => [] ] ); ?></blockquote>
		<?php endif; ?>
		<?php if ( $sunset['attribution'] ) : ?>
			<p class="lo-attribution"><?php echo esc_html( $sunset['attribution'] ); ?></p>
		<?php endif; ?>
	</div>
</section>


<!-- ════════════════════════════════════════
     CTA STRIP
     ════════════════════════════════════════ -->
<?php if ( $cta['title'] || $cta['btn_text'] ) : ?>
<div class="lo-cta-strip" id="lo-contact">
	<div class="lo-cta-strip-text">
		<?php if ( $cta['title'] ) : ?>
			<h3><?php echo esc_html( $cta['title'] ); ?></h3>
		<?php endif; ?>
		<?php if ( $cta['body'] ) : ?>
			<p><?php echo esc_html( $cta['body'] ); ?></p>
		<?php endif; ?>
	</div>
	<?php if ( $cta['btn_text'] ) : ?>
		<a href="<?php echo esc_url( $cta['btn_url'] ); ?>" class="btn-gold">
			<?php echo esc_html( $cta['btn_text'] ); ?>
		</a>
	<?php endif; ?>
</div>
<?php endif; ?>


<!-- ════════════════════════════════════════
     PAGE SCRIPTS
     ════════════════════════════════════════ -->
<script>
(function () {
	'use strict';

	/* ── Airflow image tabs ── */
	var tabs   = document.querySelectorAll('.lo-airflow-tab');
	var panels = document.querySelectorAll('.lo-airflow-img-panel');

	tabs.forEach(function (btn) {
		btn.addEventListener('click', function () {
			var idx = parseInt(btn.dataset.tab, 10);
			tabs.forEach(function (t) { t.classList.remove('active'); });
			panels.forEach(function (p) { p.classList.remove('active'); });
			btn.classList.add('active');
			var panel = document.getElementById('lo-airflow-panel-' + idx);
			if (panel) panel.classList.add('active');
		});
	});

	/* ── Noise bar animate-in on scroll ── */
	var card = document.getElementById('lo-quiet-card');
	if (card && 'IntersectionObserver' in window) {
		var obs = new IntersectionObserver(function (entries) {
			entries.forEach(function (e) {
				if (!e.isIntersecting) return;
				e.target.querySelectorAll('.lo-noise-bar-fill').forEach(function (bar) {
					var w = bar.style.width;
					bar.style.width = '0%';
					requestAnimationFrame(function () {
						setTimeout(function () { bar.style.width = w; }, 100);
					});
				});
				obs.unobserve(e.target);
			});
		}, { threshold: 0.3 });
		obs.observe(card);
	} else if (card) {
		/* no IntersectionObserver — bars already have inline width, nothing to do */
	}
})();
</script>

<?php get_template_part( 'template-parts/editor-content' ); ?>

<?php wp_footer(); ?>
</body>
</html>
