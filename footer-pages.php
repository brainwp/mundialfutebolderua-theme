<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the id=main div and all content after
 * @package mundialfutebolderua
 */
?>

<!-- Patrocinadores -->

	<div class="sub-content" id="nav-patrocinadores-parceiros">
		<?php
			$patrocinadores = "";
			$patrocinadores = get_page_by_path( 'apoiadores' );
			$attachment_patrocinadores = get_attachment_link($patrocinadores->ID);
		?>  

			<div class="center">
	
				<div class="header-sub-content">
						<div class="titulo-header"><h2><?php _e("[:pt]Realiza&ccedil;&atilde;o[:es]Realizaci&oacute;n"); ?></h2></div>
				</div>

				<div class="content-realizacao">
					<img src="<?php bloginfo('template_directory'); ?>/images/logos-realizadores.png" width="512" height="auto" alt="Titulo da imagem" />
				</div><!-- .content-realizacao -->


			<div class="header-sub-content">
					<div class="titulo-header"><h2><?php _e("[:pt]Apoio[:es]Apoyo"); ?></h2></div>
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
					$apoiadores = get_page_by_path( 'parcerias' );
					$attachment_apoiadores = get_attachment_link($apoiadores->ID);
				?>  

							<div class="titulo-header"><h2><?php _e("[:pt]Parcerias[:es]Asociaciones"); ?></h2></div>
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

    <div class="footer">
		<?php wp_footer(); ?>
		<div class="infos-rodape">
			<?php echo get_option( 'mo_endereco',true ); ?>,
			<?php echo get_option( 'mo_bairro',true ); ?> - 
            <?php echo get_option( 'mo_cidade_uf_pais',true ); ?><br />
            Tel. <?php echo get_option( 'mo_telefone_a',true ); ?>&nbsp;&nbsp;&nbsp; 
            <?php echo get_option( 'mo_telefone_b',true ); ?>
		</div><!-- .infos-rodape  -->
            
		<div id="redes">
        	<div id="facebook">
            	<a class="a-redes" href="<?php echo get_option( 'mo_facebook' ); ?>"></a>
            </div><!-- #facebook -->
            
            <div id="youtube">
            	<a class="a-redes" href="<?php echo get_option( 'mo_youtube' ); ?>"></a>
		    </div><!-- #youtube -->

 			<div id="instagram">
            	<a class="a-redes" href="<?php echo get_option( 'mo_instagram' ); ?>"></a>
		    </div><!-- #instagram -->
        </div><!-- #redes -->
    </div><!-- .footer -->
    
	</div><!-- #main -->
	</div><!-- #page -->
    
</body>
</html>
