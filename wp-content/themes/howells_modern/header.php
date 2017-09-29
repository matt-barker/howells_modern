<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package howells_modern
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'howells_modern' ); ?></a>

	<header id="masthead" class="site-header">
      <div class="header-top-wrapper">
		<div class="site-branding">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo-link">
            <div class="header-logo"></div>
          </a>
			<?php
			
          
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
        <div class="header-contact-wrapper">
          
          <div class="header-contact">
            <i class="fa fa-phone fa-2x contact-icon" aria-hidden="true"></i>
            
            <a href="tel:01142496666" class="header-contact-link">
              <p class="header-contact-office">Sheffield</p>
              <p class="header-contact-number">01142 496 666</p>
            </a>
            <a href="tel:01709364000" class="header-contact-link">
              <p class="header-contact-office">Rotherham</p>
              <p class="header-contact-number">01709 364 000</p>
            </a>
            <a href="tel:01226805190" class="header-contact-link">
              <p class="header-contact-office">Barnsley</p>
              <p class="header-contact-number">01226 805 190</p>
            </a>
            
          </div><!-- .header-contact -->
        </div><!-- .header-contact-wrapper -->
      </div><!-- .header-top-wrapper -->
      <div class="menu-wrapper">
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'howells_modern' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
      </div><!-- #menu-wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
