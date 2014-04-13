<?php /** * Template Name: Inicial (Home) */

get_header( 'home' ); ?>
 
<div id="slider">

	<?php echo do_shortcode( '[orbit-slider]' );?>

</div><!-- #slider -->
	
<!-- Sobre -->
    <div class="sub-content" id="nav-quem-somos">

    <?php
    $quem_somos = "";
    $quem_somos = get_page_by_title( 'Sobre' ); ?>
    
	<div class="center">
    
		<div class="header-sub-content">
			<div class="titulo-header"><h2><?php echo $quem_somos->post_title; ?></h2></div>
		</div>
        <?php $content_quem_somos = apply_filters('the_content', $quem_somos->post_content); ?>
        <div class="content-quem-somos">
            <?php echo $content_quem_somos; ?>
        </div><!-- .content-quem-somos -->
    </div><!-- .center -->
<div class="footer-sub-content">
</div>
    </div><!-- .sub-content -->
<!-- Final Spore -->

<!-- Metodologia -->
    <div class="sub-content" id="nav-metodologia">

    <?php
    $metodologia = "";
    $metodologia = get_page_by_title( 'Metodologia' ); ?>
    
	<div class="center">
    
		<div class="header-sub-content">
			<div class="titulo-header"><h2><?php echo $metodologia->post_title; ?></h2></div>
		</div>
        <?php $content_metodologia = apply_filters('the_content', $metodologia->post_content); ?>
        <div class="content-quem-somos">
            <?php echo $content_metodologia; ?>
        </div><!-- .content-quem-somos -->
    </div><!-- .center -->
<div class="footer-sub-content">
</div>
    </div><!-- .sub-content -->
<!-- Final Metodologia -->

<!-- Contagem Regressiva -->
    <div class="sub-content">

    
	<div class="center">
    
		<div class="header-sub-content">
			<div class="titulo-header"><h2>Contagem Regressiva</h2></div>
		</div>
        <div class="content-quem-somos">
            [plugin contagem regressiva]
        </div><!-- .content-quem-somos -->
    </div><!-- .center -->
<div class="footer-sub-content">
</div>
    </div><!-- .sub-content -->
<!-- Final Contagem Regressiva -->

<!-- Pa�ses Participantes -->
    <div class="sub-content" id="nav-paises">

    
	<div class="center">
    
		<div class="header-sub-content">
			<div class="titulo-header"><h2>Paises Participantes</h2></div>
		</div>
        <div class="content-quem-somos">
            [query de pa�ses]
        </div><!-- .content-quem-somos -->
    </div><!-- .center -->
<div class="footer-sub-content">
</div>
    </div><!-- .sub-content -->
<!-- Final Pa�ses Participantes -->


<!-- J� Aconteceu-->
    <div class="sub-content" id="nav-aconteceu">

        <?php
    	$aconteceu = "";
        $aconteceu = get_page_by_title( 'Ja Aconteceu' );
        $content_aconteceu = apply_filters('the_content', $aconteceu->post_content);
		$attachment_page = get_attachment_link($aconteceu->ID); ?>

	<div class="center">

		<div class="header-sub-content">
			<div class="titulo-header"><h2><?php echo $aconteceu->post_title; ?></h2></div>
		</div>
						  
		<div class="content-premios">
                <?php echo $content_aconteceu; ?>
    
		</div><!-- .content-premios -->

	</div><!--center -->

  <div id="thumbs-quem-somos">
    

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    
    	$args = array(
        	'post_type' => 'attachment',
            'numberposts' => 15,
            'post_status' => null,
            'post_parent' => $aconteceu->ID,
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
      
<!-- slider container -->
<!-- Final J� aconteceu -->
    

    
<!-- Not�cias -->

	<div class="sub-content" id="nav-noticias">

		<div class="center">
			
		<div class="header-sub-content">
	<div class="seta-header"></div>
    <div class="titulo-header-noticias"> <h2>Noticias</h2><span><a href="<?php echo home_url('/noticias'); ?>">Ver todas</a></span></div>
		</div>

					<div class="todas-noticias">
					<?php $custom_query = new WP_Query('posts_per_page=2');
                    while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                    
                    <div class="cada-noticia">
						<a href="<?php the_permalink(); ?>">						
						<div class="data-cada-noticia">
                        <?php
						$mes = get_the_date( 'M' );
						$dia = get_the_date( 'd' );
						?>
						<p class="p-mes"><?php echo $mes; ?></p>
                        <p class="p-dia"><?php echo $dia; ?></p>
            			</div><!-- .data-cada-noticia -->
						</a>
                        
                        <div class="thumb-cada-noticia">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumb-projetos' ); ?></a>
            			</div><!-- .thumb-cada-noticia -->
                        
						<a class="titulo-cada-noticia" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<div class="clear"></div>                        
						<div class="content-cada-noticia">
						<?php limit_words(get_the_excerpt(), '20'); ?>...
			            </div><!-- .content-cada-noticia -->
                        
                        <div class="footer-cada-noticia">
                        <div class="categorias-cada-noticia"><?php the_category(' | '); ?></div>
						<div class="mais-cada-noticia"><a href="<?php the_permalink(); ?>">+</a></div>
			            </div><!-- .footer-cada-noticia -->
                    </div><!-- .cada-noticia -->
					<?php endwhile; ?>
                    <?php wp_reset_postdata(); // reset the query ?>  
					</div><!-- .todas-noticia -->
			</div><!-- .center -->
					
    </div><!-- .sub-content -->
<!-- Final Not�cias -->

   	<!-- Contatos -->
	

        <div class="sub-content" id="nav-contatos">
            <?php
            $contatos = get_page_by_title( 'Contatos' );
			$content_contatos = apply_filters('the_content', $contatos->post_content);

			$endereco = get_post_meta($contatos->ID,'meta_endereco',true);
			$bairro = get_post_meta($contatos->ID,'meta_bairro',true);
            ?>

   			<div class="thumb-sub-content-direita">
            	<?php echo do_shortcode('[google-map-sc id="22" width="280" height="760" margin="0" zoom="15"]'); ?>
            </div><!-- .thumb-sub-content-direita -->
			
			<div class="left-sub-content">
			
				<div class="header-sub-content">
					<div class="seta-header">
					</div>
					<div class="titulo-header"><h2>Onde nos Encontrar:</h2>
					</div>
				</div>
             
        <div class="content-contatos">
				
  			<div class="esquerda-contatos">
            <?php echo get_post_meta($contatos->ID,'meta_endereco',true); ?><br />
            <?php echo get_post_meta($contatos->ID,'meta_bairro',true); ?><br />
            <?php echo get_post_meta($contatos->ID,'meta_cep',true); ?><br />
            <?php echo get_post_meta($contatos->ID,'meta_cidade_uf_pais',true); ?><br />
            </div><!-- .esquerda-contatos -->
				
  			<div class="direita-contatos">
            Tel. <?php echo get_post_meta($contatos->ID,'meta_telefone_a',true); ?><br />
            <?php echo get_post_meta($contatos->ID,'meta_telefone_b',true); ?><br />
            </div><!-- .direita-contatos -->
            
			<div class="clear"></div>
			
			<?php echo $content_contatos; ?>
						
			<div class="clear"></div>

			<?php get_sidebar('contatohome'); ?>
			
        </div><!-- .content-contatos -->
		
		<div class="footer-sub-content">
		</div>
		
		</div>

        </div><!-- .sub-content -->
		<!-- Final Contatos -->

<!-- Patrocinadores -->

	<div class="sub-content" id="nav-patrocinadores-parceiros">
<?php
	$patrocinadores = "";
	$patrocinadores = get_page_by_title( 'Patrocinadores' );
	$attachment_patrocinadores = get_attachment_link($patrocinadores->ID);
	$content_patrocinadores = apply_filters('the_content', $patrocinadores->post_content);
?>  

<div class="center">

	<div class="header-sub-content">
	    	<div class="titulo-header"><h2><?php echo $patrocinadores->post_title; ?></h2></div>
	</div>

		<div class="content-intro-patrocinadores">
  			<?php echo $content_patrocinadores; ?>

        </div><!-- .content-intro-patrocinadores -->
        	                   
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

		<div class="footer-sub-content">
		</div><!-- .footer-sub-content -->
	</div><!-- .center -->

</div><!-- .sub-content -->
<!-- Final patrocinadores e Parceiros -->
    

<?php get_footer( 'portfolio' ); ?>
