<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package mundialfutebolderua
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 lte-ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 lte-ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 lte-ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="js no-flexbox flexbox-legacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths pointerevents"><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Tauri|Pathway+Gothic+One' rel='stylesheet' type='text/css'>
<!--[if lt IE 9 ]><script src="/lib/respond.min.js"></script><![endif]-->
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site site-home">

	<header id="masthead" class="site-header" role="banner">
		        
        <div id="logo">
        	<a class="a-logo" href="<?php echo esc_url( home_url( '/' ) ); ?><?php _e("[:pt]pt[:es]es"); ?>" rel="home"></a>
        </div><!-- #logo -->             
		
	<div class="area-3-header">

			<nav id="site-navigation" class="navigation-main" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<ul class="menu"><li class="first-menu-item"></li>%3$s</ul>' ) ); ?>		
			</nav><!-- #site-navigation -->
		
    </div><!-- .area-3-header -->

		<div id="linguas">
			<div id="es">
            	<a class="a-linguas" href="<?php echo esc_url( home_url( '/es' ) ); ?>"></a>
			</div><!-- #es -->
            <div id="pt">
				<a class="a-linguas" href="<?php echo esc_url( home_url( '/pt' ) ); ?>"></a>	
		    </div><!-- #pt -->
        </div><!-- #linguas -->


		<div id="site-description">
        	<?php bloginfo( 'description' ); ?>
        </div><!-- #site-description -->
			
        
	</header><!-- #masthead -->


	<?php do_action( 'before' ); ?>

	<div id="main">
