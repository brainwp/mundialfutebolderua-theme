<?php /** 
* Template Name: Inicial (Home) */

get_header( 'home' ); ?>
 
<div id="slider">

	<div id="slider-content-logo">
		<img src="<?php bloginfo('template_directory'); ?>/images/logo-slider-sombranca.png" width="237" height="400" alt="Logo Slider" />
	</div>

	<?php echo do_shortcode( '[orbit-slider]' );?>

</div><!-- #slider -->
	
<!-- Sobre -->
    <div class="sub-content" id="nav-quem-somos">

    <?php
    $oque = "";
    $oque = get_page_by_path( 'o-que-e');
 ?>
	<div class="esquerda">
    
		<div class="header-sub-content">
			<div class="titulo-header-metade"><h2><?php echo qtrans_use($q_config['language'], $oque->post_title, true); ?></h2></div>
		</div>
        <?php $content_oque = apply_filters('the_content', $oque->post_content); ?>
        <div class="content-metade">
            <?php echo $content_oque; ?>
        </div><!-- .content-metade -->

    </div><!-- .esquerda -->

    <?php
    $quem_somos = "";
    $quem_somos = get_page_by_path( 'como-sera' ); ?>
        <div style="display:none;"><?php var_dump($quem_somos) ?></div>
	<div class="direita">
    
		<div class="header-sub-content">
			<div class="titulo-header-metade"><h2><?php echo qtrans_use($q_config['language'], $quem_somos->post_title, true); ?></h2></div>
		</div>
        <?php $content_quem_somos = apply_filters('the_content', $quem_somos->post_content); ?>
        <div class="content-metade">
            <?php echo $content_quem_somos; ?>
        </div><!-- .content-metade -->
    </div><!-- .direita -->

<div class="footer-sub-content">
</div>
    </div><!-- .sub-content -->
<!-- Final Sobre -->
<!-- Contagem Regressiva 
<div class="sub-content">
	<div class="center">
	    <div class="contador">
	       <?php // get_sidebar('home'); ?>
	    </div>
	</div>
	<div class="footer-sub-content">
	</div>
</div> -->
<!-- Final Contagem Regressiva -->
<!-- Metodologia -->
    <div class="sub-content" id="nav-metodologia">

    <?php
    $metodologia = "";
    $metodologia = get_page_by_path( 'programacao' ); ?>
    
	<div class="center">
    
		<div class="header-sub-content">
			<div class="titulo-header-inteiro"><h2>
			<?php echo qtrans_use($q_config['language'], $metodologia->post_title, true); ?></h2></div>
		</div>
        <?php $content_metodologia = apply_filters('the_content', $metodologia->post_content); ?>
        <div class="content-nomeio">
            <?php echo $content_metodologia; ?>
        </div><!-- .content-nomeio -->
    </div><!-- .center -->
<div class="footer-sub-content">
</div>
    </div><!-- .sub-content -->
<!-- Final Metodologia -->

<!-- Metodologia -->
    <div class="sub-content" id="nav-metodologia">

    <?php
    $jogos = "";
    $jogos = get_page_by_path( 'fique-por-dentro-do-mundial' ); ?>
    
	<div class="center">
    
		<div class="header-sub-content">
			<div class="titulo-header-inteiro"><h2>
			<?php echo qtrans_use($q_config['language'], $jogos->post_title, true); ?></h2></div>
		</div>
        <?php $content_jogos = apply_filters('the_content', $jogos->post_content); ?>
        <div class="content-nomeio">
            <?php echo $content_jogos; ?>
        </div><!-- .content-nomeio -->
    </div><!-- .center -->
<div class="footer-sub-content">
</div>
    </div><!-- .sub-content -->
<!-- Final Metodologia -->

<!-- Paises Participantes -->
<div class="sub-content" id="nav-paises">   
	<div class="center">
    
		<div class="header-sub-content">
			<div class="titulo-header"><h2><?php _e("[:pt]Pa&iacute;ses participantes[:es]Los pa&iacute;ses participantes"); ?></h2></div>
		</div>
		<div class="content-bandeiras">

	<?php
							/* $paged é a variável para paginação do Loop CPT Projetos */	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

							/* $args_loop_cpt_projetos são os argumentos para o Loop */
							$args_loop_cpt_projetos = array(
							'post_type' => 'paises',
							'orderby' => 'title',
							'order' => 'ASC',
							'posts_per_page' => '20',
							'paged' => $paged
							);
							$loop_cpt_projetos = new WP_Query( $args_loop_cpt_projetos ); if ( $loop_cpt_projetos->have_posts() ) {
							while ( $loop_cpt_projetos->have_posts() ) : $loop_cpt_projetos->the_post();
						?>
							
						<div class="cada-pais cada-pais-home">

								<div class="etiqueta-cada-pais">
								<h3 class="titulo-resumo" href=""><?php the_title(); ?><br />
								</h3>
								</div><!-- .etiqueta-cada-pais -->	
								<div class="thumb-cada-pais-home">
								<?php the_post_thumbnail('thumb-projetos'); ?>
								</div><!-- .thumb-cada-pais -->

						</div><!-- .cada-pais -->

						<?php
							// Fim do Loop
							endwhile;
						}
						?>

        </div><!-- .content-realizacao -->
    </div><!-- .center -->
	<div class="footer-sub-content">
	</div>
</div><!-- .sub-content -->
<!-- Final Pai­ses Participantes -->
    
<!-- Noticias -->

	<div class="sub-content" id="nav-noticias">

		<div class="center">
			
		<div class="header-sub-content">
    <div class="titulo-header-noticias"><h2><?php _e("[:pt]Not&iacute;cias[:es]Noticias"); ?></h2><span class="noticias"><a href="<?php echo home_url('/noticias'); ?>">Ver todas</a></span></div>
		</div>

					<div class="todas-noticias">
					<?php $custom_query = new WP_Query('posts_per_page=3');
                     while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                    
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
			            </div>
                        
                        <div class="footer-cada-noticia">
                        <div class="categorias-cada-noticia"><?php the_category(' | '); ?></div>
						<div class="mais-cada-noticia"><a href="<?php the_permalink(); ?>">+</a></div>
			            </div>
                    </div>
					<?php endwhile; ?>
                    <?php wp_reset_postdata(); // reset the query ?>  
					</div>
			</div>
					
    </div>

<!-- Final NotÃ­cias -->

   	<!-- Contatos -->
	

  <div class="sub-content" id="nav-contatos">


   			<?php
            $contatos = get_page_by_path( 'contato' );
			$content_contatos = apply_filters('the_content', $contatos->post_content);
            ?>

    
	<div class="esquerda">
    
		<div class="header-sub-content">
			<div class="titulo-header-metade"><h2><?php echo qtrans_use($q_config['language'], $contatos->post_title, true); ?></h2></div>
		</div>
        <?php $content_contatos = apply_filters('the_content', $contatos->post_content); ?>
        <div class="content-metade">
            <?php echo $content_contatos; ?>
        </div><!-- .content-metade -->
    </div><!-- .esquerda -->

    <?php
    $tipos_contatos = "";
    $tipos_contatos = get_page_by_path( 'formas-de-contato' ); ?>
    
	<div class="direita">
    
		<div class="header-sub-content">
			<div class="titulo-header-metade"><h2><?php echo qtrans_use($q_config['language'], $tipos_contatos->post_title, true); ?></h2></div>
		</div>
        <?php $content_tipos_contatos = apply_filters('the_content', $tipos_contatos->post_content); ?>
        <div class="content-metade">
            <?php echo $content_tipos_contatos; ?>
        </div><!-- .content-metade -->
    </div><!-- .direita -->
  <div id="thumbs-quem-somos">
    

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    
    	$args = array(
        	'post_type' => 'attachment',
            'numberposts' => 15,
            'post_status' => null,
            'post_parent' => $contatos->ID,
            'orderby' => 'rand'
		);

		$attachments = get_posts( $args );
		if ( $attachments ) {
			foreach ( $attachments as $attachment ) {
			$image_attributes = wp_get_attachment_image_src( $attachment->ID, 'medium' ); // returns an array
			echo '<div class="imagens-post">';
			echo '<img src="'.$image_attributes[0].'">';
			echo '</div>';
	  		}
		}
    	endwhile; endif; ?>
        </div><!-- #thumbs-quem-somos -->
    </div><!-- .sub-content -->




		<!-- Final Contatos -->

<!-- Patrocinadores -->

	<div class="sub-content" id="nav-patrocinadores-parceiros">
		
			<div class="center">
	
				<div class="header-sub-content">
						<div class="titulo-header"><h2><?php _e("[:pt]Promo&ccedil;&atilde;o[:es]Promoc&oacute;n"); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php _e("[:pt]Realiza&ccedil;&atilde;o[:es]Realizaci&oacute;n"); ?></h2></div>
				</div>

				<div class="content-realizacao">
					<img src="<?php bloginfo('template_directory'); ?>/images/logos-realizadores.png" width="512" height="auto" alt="Titulo da imagem" />
				</div><!-- .content-realizacao -->

					<div class="header-sub-content">
						<div class="titulo-header"><h2><?php _e("[:pt]Patrocinio[:es]Patrocinio"); ?></h2></div>
				</div>

				<div class="content-realizacao">
					<img src="<?php bloginfo('template_directory'); ?>/images/logos-patrocinadores.png" width="512" height="auto" alt="Titulo da imagem" />
				</div><!-- .content-realizacao -->
	
			<div class="header-sub-content">

				<?php
					$parcerias= "";
					$parcerias = get_page_by_path( 'parcerias' );
					$attachment_parcerias = get_attachment_link($parcerias->ID);
				?>  

							<div class="titulo-header"><h2><?php echo qtrans_use($q_config['language'], $parcerias->post_title, true); ?></h2></div>
					</div>

					                   
				<div class="content-apoiadores"> 
				<?php   
					$args_parcerias = array(
					'post_type' => 'attachment',
					'numberposts' => -1,
					'post_status' => null,
					'post_parent' => $parcerias->ID,
					'orderby' => 'menu_order',
					'order' => 'ASC'
					);

					$attachments_parcerias = get_posts( $args_parcerias );
					if ( $attachments_parcerias ) {
						foreach ( $attachments_parcerias as $attachment_cliente ) {
						$image_attributes_cliente = wp_get_attachment_image_src( $attachment_cliente->ID );
						echo '<div class="imagens-cliente">';
						echo '<img src="'.$image_attributes_cliente[0].'">';
						echo '</div>';
				  		}
					}
					?>

					<?php wp_reset_postdata(); // reset the query ?>   

				</div><!-- .content-patrocinadores -->

			<?php
			$apoiadores = "";
			$apoiadores = get_page_by_path( 'apoiadores' );
			$attachment_apoiadores = get_attachment_link($apoiadores->ID);
			?>  

			<div class="header-sub-content">
					<div class="titulo-header"><h2><?php echo qtrans_use($q_config['language'], $apoiadores->post_title, true); ?></h2></div>
			</div>

					                   
				<div class="content-patrocinadores"> 
				<?php   
					$args_apoiadores = array(
					'post_type' => 'attachment',
					'numberposts' => -1,
					'post_status' => null,
					'post_parent' => $apoiadores->ID,
					'orderby' => 'menu_order',
					'order' => 'ASC'
					);

					$attachments_apoiadores = get_posts( $args_apoiadores );
					if ( $attachments_apoiadores ) {
						foreach ( $attachments_apoiadores as $attachment_cliente ) {
						$image_attributes_cliente = wp_get_attachment_image_src( $attachment_cliente->ID );
						echo '<div class="imagens-cliente">';
						echo '<img src="'.$image_attributes_cliente[0].'">';
						echo '</div>';
				  		}
					}
					?>

					<?php wp_reset_postdata(); // reset the query ?>   

				</div><!-- .content-patrocinadores -->

				<div class="header-sub-content">
						<div class="titulo-header"><h2><?php _e("[:pt]Produ&ccedil;&atilde;o[:es]Produci&oacute;n"); ?></h2></div>
				</div>

				<div class="content-producao">
					<img src="<?php bloginfo('template_directory'); ?>/images/logo-producao.jpg" width="190" height="auto" alt="" />
				</div><!-- .content-realizacao -->


				<div class="footer-sub-content">
				</div><!-- .footer-sub-content -->
			</div><!-- .center -->

</div><!-- .sub-content -->
<!-- Final patrocinadores e Parceiros -->
    
<div id="download-popup" class="white-popup mfp-hide">

	<div class="titulo-header-popup">
	<h2>	<?php $page = get_post( $id = 1696 );
		echo apply_filters( 'the_title', $page->post_title);?>
	</h2>
	</div>
	<?php $page = get_post( $id = 1696 );
		echo apply_filters( 'the_content', $page->post_content);
	?>
</div>

<?php get_footer(); ?>
