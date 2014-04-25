<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the id=main div and all content after
 * @package mundialfutebolderua
 */
?>

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
