<?php
/**
 * The Template for displaying all single posts.
 *
 * @package mundialfutebolderua
 */
get_header( 'interno' ); ?>

<div class="altura-header"></div>

<div id="content-index" class="site-content" role="main">

	<div id="primary" class="content">

		<?php while ( have_posts() ) : the_post(); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header-noticias">
		
		<h1 class="titulo-noticias"><?php the_title(); ?></h1>

		<div class="entry-meta">

			<?php the_time( get_option( 'date_format' ) ); ?> 

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

					<div class="large-thumb">
							<a href="<?php the_permalink(); ?>">
								<?php
								if ( has_post_thumbnail() )
									the_post_thumbnail('large');
								else
									echo '<img src="' . get_template_directory_uri() . '/images/default-post-image.jpg' . '" alt="" />';
								?>
							</a>
					</div>

	<div class="entry-content">

		<?php the_content(); ?>

	</div><!-- .entry-content -->



	<footer class="entry-meta">

		<?php edit_post_link( __( 'Edit', 'artunlimited' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-meta -->

</article><!-- #post-## -->


			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>
		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->
    
<?php get_sidebar(); ?>

</div><!-- #content -->

<?php get_footer('pages'); ?>
