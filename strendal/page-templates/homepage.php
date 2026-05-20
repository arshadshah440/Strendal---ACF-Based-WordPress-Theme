<?php
/**
 * Template Name: Homepage
 * Template Post Type: page
 *
 * Full-page homepage layout. Every section has a "Content Source" toggle:
 *   Default → built-in content from the original Strendal HTML design.
 *   Custom  → content entered via SCF fields on this page.
 */

defined( 'ABSPATH' ) || exit;

get_header();

$post_id   = get_the_ID();
$theme_uri = get_template_directory_uri();

function strendal_field( string $name, int $post_id ) {
	return function_exists( 'get_field' ) ? get_field( $name, $post_id ) : null;
}

/* ════════════════════════════════════════════════════════
   DEFAULT CONTENT — mirrors the original HTML design
   Images were extracted from strendal_hero.html via
   extract-images.php and live in assets/images/.
   ════════════════════════════════════════════════════════ */
$DEFAULTS = [

	'hero' => [
		'slides' => [
			[
				'slide_image'   => [ 'url' => $theme_uri . '/assets/images/slide-0.jpg', 'alt' => 'The Property — Front & Cul-de-Sac' ],
				'slide_caption' => 'The Property — Front & Cul-de-Sac',
			],
			[
				'slide_image'   => [ 'url' => $theme_uri . '/assets/images/slide-1.jpg', 'alt' => 'Quiet Cul-de-Sac Position' ],
				'slide_caption' => 'Quiet Cul-de-Sac Position',
			],
			[
				'slide_image'   => [ 'url' => $theme_uri . '/assets/images/slide-2.jpg', 'alt' => 'Private Backyard — ⅓ Acre' ],
				'slide_caption' => 'Private Backyard — ⅓ Acre',
			],
			[
				'slide_image'   => [ 'url' => $theme_uri . '/assets/images/slide-3.jpg', 'alt' => 'The Property — Aerial Front View' ],
				'slide_caption' => 'The Property — Aerial Front View',
			],
		],
		'eyebrow'    => 'West Cary · Evans Farm · NC 27519',
		'title'      => 'Where <em>inside</em> meets<br>outside',
		'subtitle'   => '4007 Strendal Drive · A rare ⅓ acre in West Cary · 14 years of love &amp; intention',
		'badges'     => [
			'⅓ Acre Lot',
			'Zero Pesticides — Ever',
			'Panther Creek HS District',
			'New Roof 2023',
			'15 Min · RDU Airport',
		],
		'cta_p_text' => 'Discover the Story',
		'cta_p_url'  => '#story',
		'cta_s_text' => 'Schedule a Tour',
		'cta_s_url'  => '#contact',
	],

	'facts' => [
		[ 'number' => '⅓',     'label' => 'Acre Lot' ],
		[ 'number' => '14',    'label' => 'Years of Care' ],
		[ 'number' => '0',     'label' => 'Pesticides Ever' ],
		[ 'number' => '4',     'label' => 'Bedrooms' ],
		[ 'number' => '0.6',   'label' => 'Mi to School' ],
		[ 'number' => '70/30', 'label' => 'Indoor / Outdoor' ],
	],

	'intro' => [
		'eyebrow' => 'The Philosophy',
		'title'   => 'Built on <em>intention.</em><br>Lived in with joy.',
		'content' => 'Every decision made here — from the orientation of the house to the soil beneath the garden — was the result of careful thought, deep research, and a genuine love for how a home should feel. This is not a house that was simply purchased. It was found, chosen, and brought to life over fourteen years of deliberate, loving stewardship.',
	],

	'grid' => [
		'left_img'  => [ 'url' => $theme_uri . '/assets/images/grid-0.jpg', 'alt' => 'The Property · Front View' ],
		'left_cap'  => 'The Property · Front View',
		'rt_img'    => [ 'url' => $theme_uri . '/assets/images/grid-1.jpg', 'alt' => 'The Cul-de-Sac · Privacy & Quiet' ],
		'rt_cap'    => 'The Cul-de-Sac · Privacy &amp; Quiet',
		'rb_img'    => [ 'url' => $theme_uri . '/assets/images/grid-2.jpg', 'alt' => 'The Backyard · Screened Porch' ],
		'rb_cap'    => 'The Backyard · Screened Porch',
	],

	'highlights' => [
		[ 'icon' => '🌅', 'title' => 'Northeast Light',    'body' => 'Morning sun fills every room. Sunrise and sunset both visible from inside.' ],
		[ 'icon' => '🌿', 'title' => 'Chemical-Free Land', 'body' => 'Zero pesticides or weedkillers — ever. Alive, healthy soil for 14 years.' ],
		[ 'icon' => '🔇', 'title' => 'Genuine Quiet',      'body' => 'Off the RDU flight path. Buffered from I-540 and Green Level Church Rd.' ],
		[ 'icon' => '🎓', 'title' => 'Top Schools',        'body' => 'Hortons Creek Elementary just 0.6 miles away. Panther Creek HS at 0.75 miles.' ],
	],

	'cta' => [
		'title'     => 'Come and feel it for yourself',
		'content'   => 'Some things cannot be captured in photographs or described in words. Schedule a private tour and experience what fourteen years of care feel like in person.',
		'btn1_text' => 'Schedule a Private Tour',
		'btn1_url'  => 'tel:+19190000000',
		'btn2_text' => 'Explore the Neighborhood',
		'btn2_url'  => '#neighborhood',
	],
];

/* ════════════════════════════════════════════════════════
   RESOLVE SECTION DATA
   ════════════════════════════════════════════════════════ */

/* ── Hero ── */
$hero_use_default = (bool) strendal_field( 'hero_use_default', $post_id );
if ( $hero_use_default ) {
	$hero_slides     = $DEFAULTS['hero']['slides'];
	$hero_eyebrow    = $DEFAULTS['hero']['eyebrow'];
	$hero_title      = $DEFAULTS['hero']['title'];
	$hero_subtitle   = $DEFAULTS['hero']['subtitle'];
	$hero_badges     = $DEFAULTS['hero']['badges'];
	$hero_cta_p_text = $DEFAULTS['hero']['cta_p_text'];
	$hero_cta_p_url  = $DEFAULTS['hero']['cta_p_url'];
	$hero_cta_s_text = $DEFAULTS['hero']['cta_s_text'];
	$hero_cta_s_url  = $DEFAULTS['hero']['cta_s_url'];
} else {
	$hero_slides     = strendal_field( 'hero_slides', $post_id )             ?: [];
	$hero_eyebrow    = strendal_field( 'hero_eyebrow', $post_id )            ?: '';
	$hero_title      = strendal_field( 'hero_title', $post_id )              ?: '';
	$hero_subtitle   = strendal_field( 'hero_subtitle', $post_id )           ?: '';
	$raw_badges      = strendal_field( 'hero_badges', $post_id )             ?: [];
	$hero_badges     = array_column( $raw_badges, 'badge_text' );
	$hero_cta_p_text = strendal_field( 'hero_cta_primary_text', $post_id )   ?: 'Discover the Story';
	$hero_cta_p_url  = strendal_field( 'hero_cta_primary_url', $post_id )    ?: '#story';
	$hero_cta_s_text = strendal_field( 'hero_cta_secondary_text', $post_id ) ?: 'Schedule a Tour';
	$hero_cta_s_url  = strendal_field( 'hero_cta_secondary_url', $post_id )  ?: '#contact';
}
$slide_count = count( $hero_slides );

/* ── Facts ── */
$facts_use_default = (bool) strendal_field( 'facts_use_default', $post_id );
if ( $facts_use_default ) {
	$facts = $DEFAULTS['facts'];
} else {
	$raw_facts = strendal_field( 'facts', $post_id ) ?: [];
	$facts     = array_map( fn( $f ) => [ 'number' => $f['fact_number'], 'label' => $f['fact_label'] ], $raw_facts );
}

/* ── Intro ── */
$intro_use_default = (bool) strendal_field( 'intro_use_default', $post_id );
if ( $intro_use_default ) {
	$intro_eyebrow = $DEFAULTS['intro']['eyebrow'];
	$intro_title   = $DEFAULTS['intro']['title'];
	$intro_content = $DEFAULTS['intro']['content'];
} else {
	$intro_eyebrow = strendal_field( 'intro_eyebrow', $post_id ) ?: '';
	$intro_title   = strendal_field( 'intro_title', $post_id )   ?: '';
	$intro_content = strendal_field( 'intro_content', $post_id ) ?: '';
}

/* ── Photo Grid ── */
$grid_use_default = (bool) strendal_field( 'grid_use_default', $post_id );
if ( $grid_use_default ) {
	$grid_left     = $DEFAULTS['grid']['left_img'];
	$grid_left_cap = $DEFAULTS['grid']['left_cap'];
	$grid_rt       = $DEFAULTS['grid']['rt_img'];
	$grid_rt_cap   = $DEFAULTS['grid']['rt_cap'];
	$grid_rb       = $DEFAULTS['grid']['rb_img'];
	$grid_rb_cap   = $DEFAULTS['grid']['rb_cap'];
} else {
	$grid_left     = strendal_field( 'grid_left_image', $post_id );
	$grid_left_cap = strendal_field( 'grid_left_caption', $post_id )         ?: '';
	$grid_rt       = strendal_field( 'grid_right_top_image', $post_id );
	$grid_rt_cap   = strendal_field( 'grid_right_top_caption', $post_id )    ?: '';
	$grid_rb       = strendal_field( 'grid_right_bottom_image', $post_id );
	$grid_rb_cap   = strendal_field( 'grid_right_bottom_caption', $post_id ) ?: '';
}

/* ── Highlights ── */
$highlights_use_default = (bool) strendal_field( 'highlights_use_default', $post_id );
if ( $highlights_use_default ) {
	$highlights = $DEFAULTS['highlights'];
} else {
	$raw_hl     = strendal_field( 'highlights', $post_id ) ?: [];
	$highlights = array_map( fn( $h ) => [
		'icon'  => $h['highlight_icon'],
		'title' => $h['highlight_title'],
		'body'  => $h['highlight_body'],
	], $raw_hl );
}

/* ── CTA ── */
$cta_use_default = (bool) strendal_field( 'cta_use_default', $post_id );
if ( $cta_use_default ) {
	$cta_title     = $DEFAULTS['cta']['title'];
	$cta_content   = $DEFAULTS['cta']['content'];
	$cta_btn1_text = $DEFAULTS['cta']['btn1_text'];
	$cta_btn1_url  = $DEFAULTS['cta']['btn1_url'];
	$cta_btn2_text = $DEFAULTS['cta']['btn2_text'];
	$cta_btn2_url  = $DEFAULTS['cta']['btn2_url'];
} else {
	$cta_title     = strendal_field( 'cta_title', $post_id )     ?: '';
	$cta_content   = strendal_field( 'cta_content', $post_id )   ?: '';
	$cta_btn1_text = strendal_field( 'cta_btn1_text', $post_id ) ?: '';
	$cta_btn1_url  = strendal_field( 'cta_btn1_url', $post_id )  ?: '#';
	$cta_btn2_text = strendal_field( 'cta_btn2_text', $post_id ) ?: '';
	$cta_btn2_url  = strendal_field( 'cta_btn2_url', $post_id )  ?: '#';
}
?>

<!-- ════════════════════════════════════════
     HERO SECTION
     ════════════════════════════════════════ -->
<section class="hero" id="hero">

	<?php if ( $hero_slides ) : ?>
		<div class="slides" aria-hidden="true">
			<?php foreach ( $hero_slides as $i => $slide ) :
				$img     = $slide['slide_image'];
				$img_url = is_array( $img ) ? esc_url( $img['url'] ) : '';
			?>
				<div class="slide <?php echo $i === 0 ? 'active' : ''; ?>"
				     style="background-image:url('<?php echo $img_url; ?>');"
				     role="img"
				     aria-label="<?php echo esc_attr( $img['alt'] ?? ( 'Slide ' . ( $i + 1 ) ) ); ?>">
				</div>
			<?php endforeach; ?>
		</div>

		<?php foreach ( $hero_slides as $i => $slide ) : ?>
			<?php if ( ! empty( $slide['slide_caption'] ) ) : ?>
				<div class="slide-caption <?php echo $i === 0 ? 'active' : ''; ?>" id="cap-<?php echo $i; ?>">
					<span><?php echo esc_html( $slide['slide_caption'] ); ?></span>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>

	<div class="hero-content">
		<?php if ( $hero_eyebrow ) : ?>
			<div class="hero-eyebrow"><?php echo wp_kses_post( $hero_eyebrow ); ?></div>
		<?php endif; ?>

		<?php if ( $hero_title ) : ?>
			<h1 class="hero-title"><?php echo wp_kses( $hero_title, [ 'em' => [], 'strong' => [], 'br' => [] ] ); ?></h1>
		<?php endif; ?>

		<?php if ( $hero_subtitle ) : ?>
			<p class="hero-subtitle"><?php echo wp_kses_post( $hero_subtitle ); ?></p>
		<?php endif; ?>

		<?php if ( $hero_badges ) : ?>
			<div class="hero-badges">
				<?php foreach ( $hero_badges as $badge ) : ?>
					<?php if ( $badge ) : ?>
						<span class="hero-badge"><?php echo esc_html( $badge ); ?></span>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<div class="hero-cta-group">
			<a href="<?php echo esc_url( $hero_cta_p_url ); ?>" class="btn-primary">
				<?php echo esc_html( $hero_cta_p_text ); ?>
			</a>
			<a href="<?php echo esc_url( $hero_cta_s_url ); ?>" class="btn-secondary">
				<?php echo esc_html( $hero_cta_s_text ); ?>
			</a>
		</div>
	</div>

	<?php if ( $slide_count > 1 ) : ?>
		<div class="slide-dots" role="tablist">
			<?php for ( $i = 0; $i < $slide_count; $i++ ) : ?>
				<div class="dot <?php echo $i === 0 ? 'active' : ''; ?>"
				     role="tab"
				     tabindex="0"
				     aria-label="<?php echo esc_attr( sprintf( __( 'Slide %d', 'strendal' ), $i + 1 ) ); ?>"
				     onclick="strendalGoSlide(<?php echo $i; ?>)"
				     onkeydown="if(event.key==='Enter'||event.key===' ')strendalGoSlide(<?php echo $i; ?>)">
				</div>
			<?php endfor; ?>
		</div>
	<?php endif; ?>

	<div class="scroll-hint" aria-hidden="true">
		<div class="scroll-line"></div>
		<div class="scroll-text">Scroll</div>
	</div>

</section><!-- /hero -->


<!-- ════════════════════════════════════════
     FACTS STRIP
     ════════════════════════════════════════ -->
<?php if ( $facts ) : ?>
<div class="facts-strip" id="facts">
	<div class="facts-inner">
		<?php foreach ( $facts as $fact ) :
			if ( empty( $fact['number'] ) && empty( $fact['label'] ) ) continue; ?>
			<div class="fact-item">
				<div class="fact-number"><?php echo esc_html( $fact['number'] ); ?></div>
				<div class="fact-label"><?php echo esc_html( $fact['label'] ); ?></div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<?php endif; ?>


<!-- ════════════════════════════════════════
     INTRO / STORY SECTION
     ════════════════════════════════════════ -->
<?php if ( $intro_eyebrow || $intro_title || $intro_content ) : ?>
<section class="intro" id="story">
	<?php if ( $intro_eyebrow ) : ?>
		<div class="section-eyebrow"><?php echo esc_html( $intro_eyebrow ); ?></div>
	<?php endif; ?>
	<?php if ( $intro_title ) : ?>
		<h2><?php echo wp_kses( $intro_title, [ 'em' => [], 'strong' => [], 'br' => [] ] ); ?></h2>
	<?php endif; ?>
	<?php if ( $intro_content ) : ?>
		<p><?php echo wp_kses( nl2br( esc_html( $intro_content ) ), [ 'br' => [] ] ); ?></p>
	<?php endif; ?>
</section>
<?php endif; ?>


<!-- ════════════════════════════════════════
     PHOTO GRID
     ════════════════════════════════════════ -->
<div class="photo-grid" id="gallery">

	<div class="photo-grid-left">
		<div class="grid-img large">
			<?php if ( $grid_left && ! empty( $grid_left['url'] ) ) : ?>
				<img src="<?php echo esc_url( $grid_left['url'] ); ?>"
				     alt="<?php echo esc_attr( $grid_left['alt'] ?: $grid_left_cap ); ?>"
				     loading="<?php echo $grid_use_default ? 'eager' : 'lazy'; ?>">
			<?php endif; ?>
			<?php if ( $grid_left_cap ) : ?>
				<div class="img-overlay"><span><?php echo wp_kses_post( $grid_left_cap ); ?></span></div>
			<?php endif; ?>
		</div>
	</div>

	<div class="photo-grid-right">
		<div class="grid-img">
			<?php if ( $grid_rt && ! empty( $grid_rt['url'] ) ) : ?>
				<img src="<?php echo esc_url( $grid_rt['url'] ); ?>"
				     alt="<?php echo esc_attr( $grid_rt['alt'] ?: $grid_rt_cap ); ?>"
				     loading="lazy">
			<?php endif; ?>
			<?php if ( $grid_rt_cap ) : ?>
				<div class="img-overlay"><span><?php echo wp_kses_post( $grid_rt_cap ); ?></span></div>
			<?php endif; ?>
		</div>
		<div class="grid-img">
			<?php if ( $grid_rb && ! empty( $grid_rb['url'] ) ) : ?>
				<img src="<?php echo esc_url( $grid_rb['url'] ); ?>"
				     alt="<?php echo esc_attr( $grid_rb['alt'] ?: $grid_rb_cap ); ?>"
				     loading="lazy">
			<?php endif; ?>
			<?php if ( $grid_rb_cap ) : ?>
				<div class="img-overlay"><span><?php echo wp_kses_post( $grid_rb_cap ); ?></span></div>
			<?php endif; ?>
		</div>
	</div>

</div><!-- /photo-grid -->


<!-- ════════════════════════════════════════
     HIGHLIGHTS BAR
     ════════════════════════════════════════ -->
<?php if ( $highlights ) : ?>
<div class="highlights" id="highlights">
	<?php foreach ( $highlights as $item ) :
		if ( empty( $item['title'] ) ) continue; ?>
		<div class="highlight-item">
			<?php if ( ! empty( $item['icon'] ) ) : ?>
				<div class="highlight-icon" aria-hidden="true"><?php echo esc_html( $item['icon'] ); ?></div>
			<?php endif; ?>
			<div class="highlight-title"><?php echo esc_html( $item['title'] ); ?></div>
			<?php if ( ! empty( $item['body'] ) ) : ?>
				<div class="highlight-body">
					<?php echo wp_kses( nl2br( esc_html( $item['body'] ) ), [ 'br' => [] ] ); ?>
				</div>
			<?php endif; ?>
		</div>
	<?php endforeach; ?>
</div>
<?php endif; ?>


<!-- ════════════════════════════════════════
     CTA SECTION
     ════════════════════════════════════════ -->
<?php if ( $cta_title || $cta_content ) : ?>
<section class="cta-section" id="contact">
	<?php if ( $cta_title ) : ?>
		<h2><?php echo esc_html( $cta_title ); ?></h2>
	<?php endif; ?>
	<?php if ( $cta_content ) : ?>
		<p><?php echo wp_kses( nl2br( esc_html( $cta_content ) ), [ 'br' => [] ] ); ?></p>
	<?php endif; ?>
	<div class="cta-group">
		<?php if ( $cta_btn1_text ) : ?>
			<a href="<?php echo esc_url( $cta_btn1_url ); ?>" class="btn-green">
				<?php echo esc_html( $cta_btn1_text ); ?>
			</a>
		<?php endif; ?>
		<?php if ( $cta_btn2_text ) : ?>
			<a href="<?php echo esc_url( $cta_btn2_url ); ?>" class="btn-outline">
				<?php echo esc_html( $cta_btn2_text ); ?>
			</a>
		<?php endif; ?>
	</div>
</section>
<?php endif; ?>


<script>
(function () {
	'use strict';
	var slides   = document.querySelectorAll('.hero .slide');
	var captions = document.querySelectorAll('.hero .slide-caption');
	var dots     = document.querySelectorAll('.hero .dot');
	var current  = 0;
	var timer    = null;

	if ( slides.length < 2 ) return;

	window.strendalGoSlide = function ( n ) {
		slides[current].classList.remove('active');
		if ( captions[current] ) captions[current].classList.remove('active');
		if ( dots[current] )    dots[current].classList.remove('active');

		current = ( n + slides.length ) % slides.length;

		slides[current].classList.add('active');
		if ( captions[current] ) captions[current].classList.add('active');
		if ( dots[current] )    dots[current].classList.add('active');

		clearInterval(timer);
		timer = setInterval(function () { strendalGoSlide(current + 1); }, 5000);
	};

	timer = setInterval(function () { strendalGoSlide(current + 1); }, 5000);
})();
</script>

<?php get_footer(); ?>
