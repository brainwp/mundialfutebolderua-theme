<?php /** * Template Name: Inicial (Home) */

get_header( 'home' ); ?>
 
<div id="slider">

<div id="slider-content-logo"></div>

	<?php echo do_shortcode( '[orbit-slider]' );?>

</div><!-- #slider -->
	
<!-- Sobre -->
    <div class="sub-content" id="nav-quem-somos">

    <?php
    $oque = "";
    $oque = get_page_by_title( 'O que e?' );
 ?>
	<div class="esquerda">
    
		<div class="header-sub-content">
			<div class="titulo-header-metade"><h2><?php echo $oque->post_title; ?></h2></div>
		</div>
        <?php $content_oque = apply_filters('the_content', $oque->post_content); ?>
        <div class="content-metade">
            <?php echo $content_oque; ?>
        </div><!-- .content-metade -->

    </div><!-- .esquerda -->

    <?php
    $quem_somos = "";
    $quem_somos = get_page_by_title( 'Como Sera?' ); ?>
    
	<div class="direita">
    
		<div class="header-sub-content">
			<div class="titulo-header-metade"><h2><?php echo $quem_somos->post_title; ?></h2></div>
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

<!-- Metodologia -->
    <div class="sub-content" id="nav-metodologia">

    <?php
    $metodologia = "";
    $metodologia = get_page_by_title( 'Metodologia' ); ?>
    
	<div class="center">
    
		<div class="header-sub-content">
			<div class="titulo-header-inteiro"><h2><?php echo $metodologia->post_title; ?></h2></div>
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

<!-- Contagem Regressiva -->
<div class="sub-content">

	<div class="center">
	    <div class="contador">
	       <?php get_sidebar('home'); ?>
	    </div><!-- .contador -->
	</div><!-- .center -->
	<div class="footer-sub-content">
	</div>
</div><!-- .sub-content -->
<!-- Final Contagem Regressiva -->

<!-- Países Participantes -->
<div class="sub-content" id="nav-paises">   
	<div class="center">
    
		<div class="header-sub-content">
			<div class="titulo-header"><h2>Paises Participantes</h2></div>
		</div>
		<div class="content-bandeiras">
			<img src="<?php bloginfo('template_directory'); ?>/images/bandeiras-paises.png" width="700" height="600" alt="Paises Participantes" />
        </div><!-- .content-realizacao -->
    </div><!-- .center -->
	<div class="footer-sub-content">
	</div>
</div><!-- .sub-content -->
<!-- Final Países Participantes -->
    
<!-- Notícias 

	<div class="sub-content" id="nav-noticias">

		<div class="center">
			
		<div class="header-sub-content">
	<div class="seta-header"></div>
    <div class="titulo-header-noticias"> <h2>Noticias</h2><span><a href="<?php // echo home_url('/noticias'); ?>">Ver todas</a></span></div>
		</div>

					<div class="todas-noticias">
					<?php // $custom_query = new WP_Query('posts_per_page=2');
                    // while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                    
                    <div class="cada-noticia">
						<a href="<?php // the_permalink(); ?>">						
						<div class="data-cada-noticia">
                        <?php
						// $mes = get_the_date( 'M' );
						// $dia = get_the_date( 'd' );
						?>
						<p class="p-mes"><?php // echo $mes; ?></p>
                        <p class="p-dia"><?php // echo $dia; ?></p>
            			</div>
						</a>
                        
                        <div class="thumb-cada-noticia">
                        <a href="<?php // the_permalink(); ?>"><?php the_post_thumbnail( 'thumb-projetos' ); ?></a>
            			</div>
                        
						<a class="titulo-cada-noticia" href="<?php // the_permalink(); ?>"><?php // the_title(); ?></a>
						<div class="clear"></div>                        
						<div class="content-cada-noticia">
						<?php // limit_words(get_the_excerpt(), '20'); ?>...
			            </div>
                        
                        <div class="footer-cada-noticia">
                        <div class="categorias-cada-noticia"><?php // the_category(' | '); ?></div>
						<div class="mais-cada-noticia"><a href="<?php // the_permalink(); ?>">+</a></div>
			            </div>
                    </div>
					<?php // endwhile; ?>
                    <?php // wp_reset_postdata(); // reset the query ?>  
					</div>
			</div>
					
    </div>
-->
<!-- Final Notícias -->

   	<!-- Contatos -->
	

  <div class="sub-content" id="nav-contatos">


   			<?php
            $contatos = get_page_by_title( 'Contato' );
			$content_contatos = apply_filters('the_content', $contatos->post_content);
            ?>

    
	<div class="esquerda">
    
		<div class="header-sub-content">
			<div class="titulo-header-metade"><h2><?php echo $contatos->post_title; ?></h2></div>
		</div>
        <?php $content_contatos = apply_filters('the_content', $contatos->post_content); ?>
        <div class="content-metade">
            <?php echo $content_contatos; ?>
        </div><!-- .content-metade -->
    </div><!-- .esquerda -->

    <?php
    $tipos_contatos = "";
    $tipos_contatos = get_page_by_title( 'Formas de Contato' ); ?>
    
	<div class="direita">
    
		<div class="header-sub-content">
			<div class="titulo-header-metade"><h2><?php echo $tipos_contatos->post_title; ?></h2></div>
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
			$image_attributes = wp_get_attachment_image_src( $attachment->ID ); // returns an array
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
		<?php
			$patrocinadores = "";
			$patrocinadores = get_page_by_title( 'Patrocinadores' );
			$attachment_patrocinadores = get_attachment_link($patrocinadores->ID);
		?>  

			<div class="center">
	
				<div class="header-sub-content">
						<div class="titulo-header"><h2>Realiza&ccedil;&atilde;o</h2></div>
				</div>

				<div class="content-realizacao">
					<img src="<?php bloginfo('template_directory'); ?>/images/logos-realizadores.png" width="512" height="161	" alt="Titulo da imagem" />
				</div><!-- .content-realizacao -->


			<div class="header-sub-content">
					<div class="titulo-header"><h2><?php echo $patrocinadores->post_title; ?></h2></div>
			</div>

					                   
				<div class="content-patrocinadores"> 
				<?php   
					$args_patrocinadores = array(
					'post_type' => 'attachment',
					'numberposts' => -1,
					'post_status' => null,
					'post_parent' => $patrocinadores->ID,
					'orderby' => 'menu_order',
					'order' => 'ASC'
					);

					$attachments_patrocinadores = get_posts( $args_patrocinadores );
					if ( $attachments_patrocinadores ) {
						foreach ( $attachments_patrocinadores as $attachment_cliente ) {
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

				<?php
					$apoiadores= "";
					$apoiadores = get_page_by_title( 'Apoiadores' );
					$attachment_apoiadores = get_attachment_link($apoiadores->ID);
				?>  

							<div class="titulo-header"><h2><?php echo $apoiadores->post_title; ?></h2></div>
					</div>

					                   
				<div class="content-apoiadores"> 
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


				<div class="footer-sub-content">
				</div><!-- .footer-sub-content -->
			</div><!-- .center -->

</div><!-- .sub-content -->
<!-- Final patrocinadores e Parceiros -->
    

<?php get_footer(); ?>
