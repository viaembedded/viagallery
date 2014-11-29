<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'It looks like nothing was found at this location.', 'viagallery' ); ?></h2>
					<p><?php _e( 'We have recently re-engineered the VIA Gallery website to improve it for the long-term, and the galleries might have moved. Maybe you can try a search?', 'viagallery' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'twentythirteen' ); ?></h1>
			</header>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>