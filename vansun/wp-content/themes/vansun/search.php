<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="error-page-banner-sec">
	<img src="<?php echo get_template_directory_uri(); ?>/img/default.png">
</div>

<div class="seacrh-page-content">
	<div class="container">
		<div class="seacrh-content">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h4 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h4>
			</header>

			<?php twentytwelve_content_nav( 'nav-above' ); ?>

			<?php /* Start the Loop */ ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<?php get_template_part( 'content', get_post_format() ); ?>				
			<?php endwhile; ?>

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h3 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h3>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>