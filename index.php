<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mundialfutebolderua
 */

get_header(); ?>

<div class="altura-header"></div>

	<div class="sub-content">

		<div class="center">

				<div class="titulo-index-noticias"><h2><?php _e("[:pt]Not&iacute;cias[:es]Noticias"); ?></h2></div>
					
			        <div class="header-portfolio">
                        <div id="busca-aba" class="portfolio">
                            <div id="lupa-aba"></div>
                            <form id="searchform" action="<?php bloginfo('url'); ?>/" method="get">
								<input class="inlineSearch" type="text" name="s" value="busca" onblur="if (this.value == '') {this.value = 'busca';}" onfocus="if (this.value == 'busca') {this.value = '';}" />
								<input type="hidden" name="post_type" value="portfolio" />
								<!-- <input class="inlineSubmit" id="searchsubmit" type="submit" alt="Search" value="Buscar" /> -->
                            </form>
                        </div><!-- #busca-aba -->
                    </div><!-- .header-paises -->

		<div class="todas-noticias">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>

			<?php while ( have_posts() ) : the_post(); $count++;
		
				if ( 1 == $count%3 ) {
				echo '<div class="clear"></div>';}?>

				 <div class="cada-noticia">
						<a href="<?php  the_permalink(); ?>">						
						<div class="data-cada-noticia">
                        <?php
						$mes = get_the_date( 'M' );
						$dia = get_the_date( 'd' );
						?>
						<p class="p-mes"><?php echo $mes; ?></p>
                        <p class="p-dia"><?php echo $dia; ?></p>
            			</div>
						</a>
 						
						<div class="thumb-cada-noticia">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumb-noticias' ); ?></a>
            			</div>
                        
						<a class="titulo-cada-noticia" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<div class="clear"></div>                        
						<div class="content-cada-noticia">
						<?php limit_words(get_the_excerpt(), '20'); ?>...
						<footer class="entry-meta">
							<?php edit_post_link( __( 'Edit', 'artunlimited' ), '<span class="edit-link">', '</span>' ); ?>
						</footer><!-- .entry-meta -->
			            </div>

                        <div class="footer-cada-noticia">
                        <div class="categorias-cada-noticia"><?php the_category(' | '); ?></div>
						<div class="mais-cada-noticia"><a href="<?php the_permalink(); ?>">+</a></div>
			            </div>					

		
					<?php if ( is_search() ) : // Only display Excerpts for Search ?>

						<div class="thumb-cada-noticia">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumb-noticias' ); ?></a>
            			</div>
                        
						<a class="titulo-cada-noticia" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<div class="clear"></div>                        

					<div class="entry-summary">

						<?php the_excerpt(); ?>

					</div><!-- .entry-summary -->

					<?php else : ?>

					<div class="clear"></div>          

					<?php endif; ?>

				</div><!-- #post-## -->

			<?php endwhile; //ending the loop ?>

			<div class="clear"></div>

			<?php /* Display navigation to next/previous pages when applicable */ ?>
				<?php global $wp_query;  
				$total_pages = $wp_query->max_num_pages;  
				if ($total_pages > 1){  
				  $current_page = max(1, get_query_var('paged'));  
				  echo '<div class="page_nav">';  
				  echo paginate_links(array(  
					  'base' => get_pagenum_link(1) . '%_%',  
					  'format' => '/page/%#%',  
					  'current' => $current_page,  
					  'total' => $total_pages,  
					  'prev_text' => '<< Anteriores',  
					  'next_text' => 'Pr&oacute;ximos >>'  
					));  
				  echo '</div>';  
				} 
				?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</div><!-- .todas-noticias -->

	</div><!-- .center -->

</div><!-- .sub-content -->

<?php get_footer(); ?>
