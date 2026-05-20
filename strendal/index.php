<?php get_header(); ?>

<main class="site-main" id="main-content">

	<?php if ( have_posts() ) : ?>

		<h1 class="page-title">
			<?php
			if ( is_home() ) {
				echo esc_html( get_bloginfo( 'name' ) );
			} elseif ( is_archive() ) {
				the_archive_title();
			} elseif ( is_search() ) {
				printf( esc_html__( 'Search results for: %s', 'strendal' ), get_search_query() );
			}
			?>
		</h1>

		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-entry' ); ?>>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="post-excerpt"><?php the_excerpt(); ?></div>
			</article>
		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>
		<p><?php esc_html_e( 'No content found.', 'strendal' ); ?></p>
	<?php endif; ?>

</main>

<?php get_footer(); ?>
