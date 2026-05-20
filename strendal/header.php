<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav id="site-nav" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'strendal' ); ?>">

	<?php
	/* ── Logo ── */
	$logo_image = function_exists( 'get_field' ) ? get_field( 'site_logo', 'option' ) : null;
	$site_label = ( function_exists( 'get_field' ) && get_field( 'site_name_text', 'option' ) )
		? get_field( 'site_name_text', 'option' )
		: get_bloginfo( 'name' );
	?>
	<a class="nav-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<?php if ( $logo_image ) : ?>
			<img src="<?php echo esc_url( $logo_image['url'] ); ?>"
			     alt="<?php echo esc_attr( $logo_image['alt'] ?: $site_label ); ?>">
		<?php else : ?>
			<?php echo esc_html( $site_label ); ?>
		<?php endif; ?>
	</a>

	<?php
	/* ── Primary menu ── */
	if ( has_nav_menu( 'primary' ) ) {
		wp_nav_menu( [
			'theme_location' => 'primary',
			'container'      => false,
			'menu_class'     => 'nav-links',
			'items_wrap'     => '<ul class="nav-links" role="menubar">%3$s</ul>',
			'depth'          => 1,
			'fallback_cb'    => false,
		] );
	}
	?>

	<?php
	/* ── Nav CTA button ── */
	$cta_text = ( function_exists( 'get_field' ) && get_field( 'nav_cta_text', 'option' ) )
		? get_field( 'nav_cta_text', 'option' )
		: __( 'Schedule a Tour', 'strendal' );
	$cta_url  = ( function_exists( 'get_field' ) && get_field( 'nav_cta_url', 'option' ) )
		? get_field( 'nav_cta_url', 'option' )
		: '#contact';
	?>
	<a href="<?php echo esc_url( $cta_url ); ?>" class="nav-cta">
		<?php echo esc_html( $cta_text ); ?>
	</a>

</nav>
