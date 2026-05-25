<?php
/**
 * Renders any Gutenberg blocks / custom content added via the WordPress block
 * editor on pages that use a custom page template.  Outputs nothing if the
 * editor area is empty, so existing layouts are never affected.
 */
defined( 'ABSPATH' ) || exit;

$_ec_content = get_post_field( 'post_content', get_queried_object_id() );
if ( ! $_ec_content ) {
	return;
}
?>
<div class="page-editor-content">
	<?php echo apply_filters( 'the_content', $_ec_content ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</div>
