<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the id=main div and all content after
 * @package mundialfutebolderua
 */
?>

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
