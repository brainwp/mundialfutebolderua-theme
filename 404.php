<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package mundialfutebolderua
 */

get_header( 'interno' ); ?>

<div class="altura-header"></div>
	<div id="content-pages">
		<div id="content" class="page404-content" role="main">

			<article id="post-0" class="post not-found">
            
            	<header class="entry-header-page-404">
                    <div class="seta-page-404"></div>
                    <div class="titulo-page-404"><h1><?php _e( 'Erro 404', 'artunlimited' ); ?></h1></div>
                </header><!-- .entry-header-page-404 -->

				<div class="entry-content">
					<p><?php _e( 'Parece que n&atilde;o foi poss&iacute;vel encontrar o que voc&ecirc; est&aacute; buscando. Talvez fazer uma pesquisa possa ajudar.', 'artunlimited' ); ?></p>

					<div class="form-content-interno">					
						<form method="get" id="searchform-interno" class="searchform-interno" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
						<label for="s" class="screen-reader-text"><?php _ex( 'Search', 'assistive text', 'artunlimited' ); ?></label>
						<input type="search" class="field-interno" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php echo esc_attr_x( 'pesquisar', 'placeholder', 'artunlimited' ); ?>" />
						<input type="submit" class="submit-interno" id="searchsubmit" value="<?php echo esc_attr_x( 'busca', 'submit button', 'artunlimited' ); ?>" />
					</form>
					</div><!-- .form-content-interno ->

				</div><!-- .entry-content -->
			</article><!-- #post-0 .post .not-found -->

		</div><!-- #content -->
	</div><!-- #content-pages -->

<?php get_footer( 'noticias' ); ?>
