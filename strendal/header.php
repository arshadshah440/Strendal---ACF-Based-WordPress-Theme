<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
/* ── Header / Nav ── */
$_layout_pid         = get_queried_object_id();
$_raw_show_header    = function_exists( 'get_field' ) ? get_field( 'page_show_header', $_layout_pid ) : null;
$_show_header        = ( $_raw_show_header === null || (bool) $_raw_show_header );

if ( $_show_header ) :
	$_header_style = function_exists( 'get_field' ) ? get_field( 'page_header_style', $_layout_pid ) : '';
	$_header_style = $_header_style ?: 'default';
	get_template_part( 'template-parts/nav', $_header_style );
endif;
?>
