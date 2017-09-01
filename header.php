<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<div id="top">
			<i class="fa fa-arrow-up" aria-hidden="true"></i>
		</div>


	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="header" class="header hide-for-small-only">
		<div class="menu-social">
				<div class="top-bar-left">
					<ul class="dropdown menu" data-dropdown-menu>
						<li><a href="#">home</a></li>
						<li><a href="#">about</a></li>
						<li><a href="#">contact</a></li>
					</ul>
				</div>
				<div class="top-bar-right">
					<ul class="dropdown menu" data-dropdown-menu>
						<li><a class="social" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a class="social" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					</ul>
				</div>
		</div>
	</header>

	<div data-sticky-container>
		<div data-sticky data-options="marginTop:0;" style="width:100%" data-top-anchor="1">
	  <!-- div data-sticky data-margin-top='0' data-top-anchor="header:bottom" data-btm-anchor="content:bottom" -->
	    <div class="top-bar">
				<div class="menu-centered">
					<div class="top-bar-left">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img class="logo-header" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/logo_rosso.png">
							</a>
					</div>
					<div class="top-bar-right">
						<?php foundationpress_top_bar_r(); ?>

						<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
							<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
						<?php endif; ?>
					</div>
				</div>
	    </div>
	  </div>
	</div>

<div id="content">
	<?php if( is_page( array( 'chi-siamo', 'clienti', 'portfolio','contatti') ) || (is_singular( array( 'portfolio' ) ) ) ){ ?>
		<div class="sfondo hide-for-small-only">
			<img data-interchange="[<?php echo get_bloginfo('template_url');?>/assets/images/interchange/interne-s.jpg, small], [<?php echo get_bloginfo('template_url');?>/assets/images/interchange/interne-m.jpg, medium],[<?php echo get_bloginfo('template_url');?>/assets/images/interchange/interne-l.jpg, large], [<?php echo get_bloginfo('template_url');?>/assets/images/interchange/interne-xl.jpg, xlarge]">
		</div>
	<?php }else {?>
	<div class="sfondo">
		<img data-interchange="[<?php echo get_bloginfo('template_url');?>/assets/images/interchange/header-s.jpg, small], [<?php echo get_bloginfo('template_url');?>/assets/images/interchange/header-m.jpg, medium],[<?php echo get_bloginfo('template_url');?>/assets/images/interchange/header-l.jpg, large], [<?php echo get_bloginfo('template_url');?>/assets/images/interchange/header-xl.jpg, xlarge]">
	</div>
	<?php
		}
	?>
</div>



	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
