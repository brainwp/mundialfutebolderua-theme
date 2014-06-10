<?php 

/**
 * The template for displaying Archive pages of CPT Paises.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mundialfutebolderua
 */

get_header(); ?>

		<div id="content-interno" class="site-content" role="main">

		<div class="archive-portfolio">

			<div class="titulo-archive-paises"><h2><?php _e("[:pt]Pa&iacute;ses participantes[:es]Los pa&iacute;ses participantes"); ?></h2></div>
					
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
			
						<?php
							/* $paged é a variável para paginação do Loop CPT Projetos */	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

							/* $args_loop_cpt_projetos são os argumentos para o Loop */
							$args_loop_cpt_projetos = array(
							'post_type' => 'paises',
							'orderby' => 'date',
							'order' => 'DESC',
							'posts_per_page' => '36',
							'paged' => $paged
							);
							$loop_cpt_projetos = new WP_Query( $args_loop_cpt_projetos ); if ( $loop_cpt_projetos->have_posts() ) {
							while ( $loop_cpt_projetos->have_posts() ) : $loop_cpt_projetos->the_post();
						?>
							
						<div class="cada-pais">

							<div class="thumb-cada-pais">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumb-projetos'); ?></a>
							</div><!-- .thumb-cada-pais -->
						
							<div class="rodape-cada-pais">
								<h3><a class="titulo-resumo" href="<?php the_permalink(); ?>"><?php the_title(); ?><br />
								</a></h3>
							</div><!-- .rodape-cada-pais -->
						</div><!-- .cada-pais -->

						<?php
							// Fim do Loop
							endwhile;
						}
						?>

		</div> <!-- .archive-portfolio -->

		</div><!-- #content -->
  
<?php get_footer(); ?>
