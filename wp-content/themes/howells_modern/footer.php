<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package howells_modern
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
      
      <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-footer',
					'menu_id'        => 'footer-menu',
				) );
			?>
      
		<div class="site-info">
          <p class="legal-info">© Howells LLP 2017
Howells LLP is a Limited Liability Partnership registered in England and Wales (No. OC317143) We are authorised and regulated by the Solicitors Regulation Authority (SRA No 439254) Registered office: 15-17 Bridge Street, Sheffield, S3 8NL. VAT No. GB 308722073

Any reference to a 'partner' means a member, or an employee or consultant in Howells LLP with equivalent standing and qualifications.</p>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
