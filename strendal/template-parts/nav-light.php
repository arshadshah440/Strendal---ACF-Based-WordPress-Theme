<nav id="site-nav" class="always-light" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'strendal' ); ?>">

	<?php
	$logo_image = function_exists( 'get_field' ) ? get_field( 'site_logo', 'option' ) : null;
	$site_label = ( function_exists( 'get_field' ) && get_field( 'site_name_text', 'option' ) )
		? get_field( 'site_name_text', 'option' )
		: get_bloginfo( 'name' );
	$cta_text   = ( function_exists( 'get_field' ) && get_field( 'nav_cta_text', 'option' ) )
		? get_field( 'nav_cta_text', 'option' )
		: __( 'Schedule a Tour', 'strendal' );
	$cta_url    = ( function_exists( 'get_field' ) && get_field( 'nav_cta_url', 'option' ) )
		? get_field( 'nav_cta_url', 'option' )
		: '#contact';
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
	if ( has_nav_menu( 'primary' ) ) {
		wp_nav_menu( [
			'theme_location' => 'primary',
			'container'      => false,
			'menu_class'     => 'nav-links',
			'items_wrap'     => '<ul class="nav-links" role="menubar">%3$s</ul>',
			'depth'          => 2,
			'fallback_cb'    => false,
		] );
	}
	?>

	<button class="nav-hamburger" aria-label="<?php esc_attr_e( 'Open navigation menu', 'strendal' ); ?>" aria-expanded="false">
		<span></span>
		<span></span>
		<span></span>
	</button>

	<div class="nav-mobile-menu" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e( 'Mobile Navigation', 'strendal' ); ?>">
		<div class="nav-mobile-panel">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu( [
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'nav-mobile-links',
					'items_wrap'     => '<ul class="nav-mobile-links">%3$s</ul>',
					'depth'          => 2,
					'fallback_cb'    => false,
				] );
			}
			?>
			<a href="<?php echo esc_url( $cta_url ); ?>" class="nav-mobile-cta"><?php echo esc_html( $cta_text ); ?></a>
		</div>
	</div>

</nav>
