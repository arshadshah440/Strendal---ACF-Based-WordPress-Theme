<?php
/* ── Footer ── */
$_layout_pid         = get_queried_object_id();
$_raw_show_footer    = function_exists( 'get_field' ) ? get_field( 'page_show_footer', $_layout_pid ) : null;
$_show_footer        = ( $_raw_show_footer === null || (bool) $_raw_show_footer );

if ( $_show_footer ) :
	$_footer_style = function_exists( 'get_field' ) ? get_field( 'page_footer_style', $_layout_pid ) : '';
	$_footer_style = $_footer_style ?: 'default';
	get_template_part( 'template-parts/footer', $_footer_style );
endif;
?>

<?php wp_footer(); ?>
</body>
</html>
