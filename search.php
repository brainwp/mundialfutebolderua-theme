<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package mundialfutebolderua
 */

get_header( 'interno' ); ?>

<div class="altura-header"></div>
	<div id="content-pages">
		<div id="content" class="page-content" role="main">

		<?php if ( have_posts() ) : ?>
            
            <header class="entry-header-page-search">
                <div class="titulo-page"><h1><?php printf( __( 'Search Results for: %s', 'artunlimited' ), '<span>' . get_search_query() . '</span>' ); ?></h1></div>
            </header><!-- .entry-header-page-404 -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>

		</div><!-- #content -->
		
			            <div class="clearfix">
						</div>
						
				<?php get_footer( 'noticias' ); ?>
		
	</div><!-- #content-pages -->
