<?php
//original footer code
?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'simple-approach-practice' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'simple-approach-practice' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'simple-approach-practice' ), 'simple-approach-practice', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->



	<?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-2',
                                    'menu_id'        => 'footer-menu',
                                    'menu_class'     => 'footer__links'
                                )
                            );
                        ?>



<a href="https://www.facebook.com/ankragency/" class="fa-brands fa-square-facebook"></a>
                                <a href="https://www.youtube.com/channel/UCWIU4WpYkcc1Sd3J-SLOi-Q"
                                    class="fa-brands fa-youtube"></a>
                                <a href="https://twitter.com/ankragency" class="fa-brands fa-twitter"></a>
                                <a href="https://www.instagram.com/ankragency/?hl=en"
                                    class="fa-brands fa-instagram"></a>