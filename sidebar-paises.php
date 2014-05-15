<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package mundialfutebolderua
 */
?>
	
	<div class="outros-projetos">
		
			<h2 class="fonte-laranja">Outros Pa&iacute;ses:</h2>
			<div class="setas-outros">
			<a id="prev3" href="#"><div class="seta-outros-anteriores">
			</div></a>
			<!-- .seta-outros-anteriores -->
			<a id="next3" href="#"><div class="seta-outros-posteriores">
			</div></a><!-- .seta-outros-posteriores -->
			</div><!-- setas-outros -->
		
		<div class="outros-slider">
		
			<div class="list_carousel">
				<ul id="foo3">
					<?php
					$esse_id = array(get_the_ID());
					$query = new WP_Query( array( 'post_type' => 'paises', 'orderby' => 'rand', 'post__not_in' => $esse_id ) );

					if ( $query->have_posts() ) : ?>
						   <?php while ( $query->have_posts() ) : $query->the_post(); ?> 				
					<li>
                    <a class="a-outro" href="<?php the_permalink(); ?>">
					<div class="cada-outro-projeto">

						<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'medium' );
						} ?>
                        
					</div><!-- .cada-outro-projeto -->
					<div class="titulo-outros-projetos">
					 <?php the_title(); ?><br />
					</div><!-- .titulo-outros-projetos -->
                    </a><!-- .a-outro  -->		
					</li>
				   <?php endwhile; wp_reset_postdata(); ?>
				   <!-- show pagination here -->
					<?php else : ?>
						   <!-- show 404 error here -->
					<?php endif; ?>
				</ul>
				
				<?php wp_reset_query(); // reset query ?>
				<div class="clearfix"></div>
					
			</div> <!-- .list_carrousel -->
					

		</div><!-- .outros-slider -->
		
	</div><!-- .outros-projetos -->
