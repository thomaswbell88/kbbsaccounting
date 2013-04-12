<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage kbbs
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="icon" 
      type="image/png" 
      href="<?php bloginfo( 'template_url' ); ?>/images/wordpress.png">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
			<div id="header-top">
				<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img alt="kbbs online accounting bookkeeping business in the Wyre Forest" src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" /></a></span></h1>
				
				<div id="accounting-services" >
					<div class="accounting-service kashflow-logo">
						<a alt="KashFlow logo" title="kbbs accounting service - KashFlow licencing and administration" href="<?php echo esc_url( home_url( '/' ) ); ?>kashflow">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/kashflow.png"/>
						</a>
						<!--<div class="accounting-service-desc">
							<h4>KashFlow Accounting</h4>
							<p>By far one of the best pieces of software is Kashflow Accounting online accounting software. Kashflow has been built from the ground up, which means it is built for the user. The framework on which it's built means you can get more involved with the bookkeeping for your business.</p>
							<p>kbbs can help you to get started with KashFlow. A free 60 day trial eases you into the software and our support guides you in the right direction.</p>
							<p>You have no obligation to purchase at the end of of your trial.</p>
							<p>kbbs can give you a discounted price on KashFlow if you decide to continue with your subscription.</p>
						</div> -->
					</div>
					<div class="accounting-service xero-logo">
						<a alt="Xero Accounting Software logo" title="kbbs accounting service - Xero licencing and administration" href="<?php echo esc_url( home_url( '/' ) ); ?>xero">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/xero.png"/>
						</a>
						<!--<div class="accounting-service-desc">
							<h4>Xero Accounting</h4>
							<p>By far one of the best pieces of software is Kashflow Accounting online accounting software. Kashflow has been built from the ground up, which means i is built for the user. The framework on which it's built means you can get more involved with the bookkeeping for your business.</p>
							<p>kbbs can help you to get started with KashFlow. A free 60 day trial eases you into the software and our support guides you in the right direction.</p>
							<p>You have no obligation to purchase at the end of of your trial.</p>
							<p>kbbs can give you a discounted price on KashFlow if you decide to continue with your subscription.</p>
						</div> -->
					</div>
						<div class="accounting-service-desc"></div>
					<div class="accounting-service sageone-logo">
						<a alt="Sage One logo" title="kbbs accounting service - Sage One licencing and administration" href="<?php echo esc_url( home_url( '/' ) ); ?>sage-one/">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/sageone.png"/>
						</a>
						<!--<div class="accounting-service-desc">
							<h4>Sage One</h4>
							<p>The most popular accounting software moves to the cloud.</p>
							<p>Access your Sage accounts anywhere, anytime and with complete confidence</p>
						</div> -->
					</div>
					<div class="accounting-service quickbooks-logo">
						<a alt="Quickbooks logo" title="kbbs accounting service - Quickbooks licencing and administration" href="#">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/quickbooks.png"/>
						</a>
						<!--<div class="accounting-service-desc">
							<h4>Quickbooks</h4>
							<p>Quickbooks is one of the market leading accounting products. kbbs has extensive experience in providing Quickbooks services and is happy to advise any business on matters involving Quickbooks.</p>
						</div> -->
					</div>
				</div>
			</div>
			<div id="header-bottom">
				<h2 id="site-description">accounting services<br><span style="font-size:0.8em;">for the modern business</span></h2>
				<div class="fr">
					<h3 id="contact-info" class="tel-num">+44(0)7904205149</h3>
					<?php
						// Has the text been hidden?
						if ( 'blank' == get_header_textcolor() ) :
					?>
						<div class="only-search<?php if ( ! empty( $header_image ) ) : ?> with-image<?php endif; ?>">
						<?php get_search_form(); ?>
						</div>
					<?php
						else :
					?>
						<?php get_search_form(); ?>
					<?php endif; ?>
				</div>
			</hgroup>
			</div>
			<nav id="access" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
				<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
	</header><!-- #branding -->


	<div id="main">