<?php
$footer_address   = ( function_exists( 'get_field' ) && get_field( 'footer_address', 'option' ) )
	? get_field( 'footer_address', 'option' )
	: get_bloginfo( 'name' );
$footer_copyright = ( function_exists( 'get_field' ) && get_field( 'footer_copyright', 'option' ) )
	? get_field( 'footer_copyright', 'option' )
	: get_bloginfo( 'name' );
?>
<footer class="footer-minimal" role="contentinfo">
	<div class="footer-left">
		<?php echo esc_html( $footer_address ); ?>
	</div>
	<div class="footer-right">
		<?php echo wp_kses_post( $footer_copyright ); ?>
	</div>
</footer>
