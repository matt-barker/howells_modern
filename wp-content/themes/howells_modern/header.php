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
 <!-- Modals -->
<div id="sheffieldModal" class="modal fade" role="dialog">
  <div class="modal-dialog contact-modal">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Howells in Sheffield</h4>
      </div>
      <div class="modal-body">     
        <div class="vcard">
          <div class="adr">
            <div class="street-address">15-17 Bridge Street</div>
            <div class="locality">Sheffield</div > 
            <div class="postal-code">S3 8NL</div >
            <div class="country-name">United Kingdom</div >
          </div>
          <div class="tel">
             <div class="tel">Tel: 01142 496 666</div>
             <div class="tel">Fax: <span class="fax">01142 799 746</span></div>
          </div>
        </div>
        <a role="button" class="btn contact-button btn-lg" href="tel:01142496666">Call Us</a>
        <button class="btn btn-default btn-lg">Make an Enquiry</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="rotherhamModal" class="modal fade" role="dialog">
  <div class="modal-dialog contact-modal">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Howells in Rotherham</h4>
      </div>
      <div class="modal-body">     
        <div class="vcard">
          <div class="adr">
            <div class="street-address">18-20 Ship Hill</div>
            <div class="locality">Rotherham</div > 
            <div class="postal-code">S60 2HG</div >
            <div class="country-name">United Kingdom</div >
          </div>
          <div class="tel">
             <div class="tel">Tel: 01709 364 000</div>
             <div class="tel">Fax: <span class="fax">01142 799 746</span></div>
          </div>
        </div>
        <a role="button" class="btn contact-button btn-lg" href="tel:01709364000">Call Us</a>
        <button class="btn btn-default btn-lg">Make an Enquiry</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="barnsleyModal" class="modal fade" role="dialog">
  <div class="modal-dialog contact-modal">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Howells in Barnsley</h4>
      </div>
      <div class="modal-body">     
        <div class="vcard">
          <div class="adr">
            <div class="street-address">21 Regent Street</div>
            <div class="locality">Barnsley</div > 
            <div class="postal-code">S70 2EG</div >
            <div class="country-name">United Kingdom</div >
          </div>
          <div class="tel">
             <div class="tel">Tel: 01226 805 190</div>
             <div class="tel">Fax: <span class="fax">01142 799 746</span></div>
          </div>
        </div>
        <a role="button" class="btn contact-button btn-lg" href="tel:01226805190">Call Us</a>
        <button class="btn btn-default btn-lg">Make an Enquiry</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  
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
            
            
            <a href="#" data-toggle="modal" data-target="#sheffieldModal" class="header-contact-link">
              <p class="header-contact-office">Sheffield</p>
              <i class="fa fa-phone-square fa-2x contact-icon"></i>
              <p class="header-contact-number">01142 496 666</p>
            </a>
            <a href="#" data-toggle="modal" data-target="#rotherhamModal" class="header-contact-link">
              <p class="header-contact-office">Rotherham</p>
              <i class="fa fa-phone-square fa-2x contact-icon"></i>
              <p class="header-contact-number">01709 364 000</p>
            </a>
            <a href="#" data-toggle="modal" data-target="#barnsleyModal" class="header-contact-link">
              <p class="header-contact-office">Barnsley</p>
              <i class="fa fa-phone-square fa-2x contact-icon"></i>
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
