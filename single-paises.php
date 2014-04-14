<?php
/**
 * The Template for displaying all single posts.
 * @package artunlimited
 */

get_header(); ?>

	<div class="content-single-portfolio">
		<div id="content-interno" class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<div id="slider-portfolio">
                
				<div id="carousel_wrap">
								<a class="prev" id="prev2" href="#"><span>anterior</span></a>
								<a class="next" id="next2" href="#"><span>seguinte</span></a>
							<ul id="carousel">
								<?php
							$args = array(
									'post_type' => 'attachment',
									'numberposts' => -1,
									'post_status' => null,
									'post_parent' => $post->ID,
									'order' => 'ASC',
									'orderby' => 'menu_order'
									);
								
								$anexos = get_posts ( $args );
								
								if ( $anexos ) {
									foreach ( $anexos as $anexo ) { ?>
									
									<?php 
										$attachment_id = $anexo->ID;
										$image_attributes = wp_get_attachment_image_src( $attachment_id, 'paises' );
										$attachment_page = get_attachment_link( $attachment_id ); 
										$description = $anexo->post_content;
										$url = wp_get_attachment_url( $attachment_id ); 
										?>
								<li class="cada-slide">                        
									<?php
									if ($description):
									echo '<div id="desc-slide">' . $description . '</div>';
									endif;
									?>
									<img src="<?php echo $image_attributes[0]; ?>" alt="<?php echo apply_filters('the_title', $anexo->post_title); ?>">
								</li>
								<?php } } ?>
							</ul>				
						
                        <div class="clearfix">
						</div>
                
				</div><!-- carousel_wrap -->
		</div><!-- #sider-projetos -->
		
		        <?php
				// Pega os dados e salva em vari�veis
                $metaportfolio_credito = get_post_meta($post->ID,'metaportfolio_credito',TRUE);
				?>
		
				<?php if (empty($metaportfolio_credito)) {
                } else { ?>
                <div class="creditos-portfolio">
				<p><span>Fotografias: </span>&copy; <?php echo $metaportfolio_credito; ?></p>
				</div><!-- #creditos-portfolio -->
				<?php }	?>

	<div class="esquerda-title-single-portfolio">

		<header class="entry-header">
			<h1 class="entry-title-interno"><?php the_title(); ?></h1>

 			  <?php
				// Pega os dados e salva em vari�veis
                $metaportfolio_2alinhatitulo = get_post_meta($post->ID,'metaportfolio_2alinhatitulo',TRUE);
				?>
		
				<?php if (empty($metaportfolio_2alinhatitulo)) {
                } else { ?>
              <h1 class="entry-title-interno"><?php echo $metaportfolio_2alinhatitulo; ?></h1>
				<?php }	?>
			
			    <?php
				// Pega os dados e salva em vari�veis
                $metaportfolio_subtitulo = get_post_meta($post->ID,'metaportfolio_subtitulo',TRUE);
				?>
				<?php if (empty($metaportfolio_subtitulo)) {
                } else { ?>
				<h3 class="entry-sub-title-interno"><?php echo $metaportfolio_subtitulo; ?></h3>
				<?php }	?>
		</header><!-- .entry-header -->

	</div><!-- .esquerda-title-single-portfolio -->

			<div class="clear"></div>
        
	<div class="esquerda-single-portfolio">

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'artunlimited' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
				
				<?php // artunlimited_content_nav( 'nav-below' ); ?>
				<?php endwhile; // end of the loop. ?>
				
				<?php wp_reset_query(); // reset query ?>
	</div>
			<!-- .esquerda-single-portfolio -->
		
	<div class="direita-single-portfolio">
			<?php get_sidebar( 'paises' ); ?>
	</div><!-- #direita-single-portfolio -->
		</div><!-- #content -->
		
			            <div class="clearfix">
						</div>

<?php get_footer(); ?>

	</div><!-- #content-single-portfolio -->


