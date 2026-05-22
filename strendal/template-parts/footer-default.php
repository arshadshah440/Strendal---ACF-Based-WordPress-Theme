<?php
$footer_address   = ( function_exists( 'get_field' ) && get_field( 'footer_address', 'option' ) )
	? get_field( 'footer_address', 'option' )
	: get_bloginfo( 'name' );
$footer_email     = function_exists( 'get_field' ) ? get_field( 'footer_email', 'option' ) : '';
$footer_phone     = function_exists( 'get_field' ) ? get_field( 'footer_phone', 'option' ) : '';
$footer_copyright = ( function_exists( 'get_field' ) && get_field( 'footer_copyright', 'option' ) )
	? get_field( 'footer_copyright', 'option' )
	: '&copy; ' . gmdate( 'Y' ) . ' ' . get_bloginfo( 'name' );
?>
<footer role="contentinfo">
	<div class="footer-left">
		<?php echo esc_html( $footer_address ); ?>
	</div>
	<div class="footer-right">
		<?php if ( $footer_email ) : ?>
			<a href="mailto:<?php echo esc_attr( $footer_email ); ?>">
				<?php echo esc_html( $footer_email ); ?>
			</a>
		<?php endif; ?>
		<?php if ( $footer_phone ) : ?>
			<a href="tel:<?php echo esc_attr( preg_replace( '/[^+\d]/', '', $footer_phone ) ); ?>">
				<?php echo esc_html( $footer_phone ); ?>
			</a>
		<?php endif; ?>
		<span><?php echo wp_kses_post( $footer_copyright ); ?></span>
	</div>
</footer>
