<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simple_Approach_Practice
 */

?>


<footer class="footer" style="background-color:#30303b">
            <div class="container">
                <div class="inner">
                <div class="footer__top">
                        
                      
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-2',
                                    'menu_id'        => 'footer-menu',
                                    'menu_class'=>'footer__links',
                                    'container_class'=>'footer__links'
                                )
                            );
                        ?>

                        <div class="footer__social">
                            <a href="" class="footer__site--logo">

							<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
								$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
								if ( has_custom_logo() ) {
									echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
								} else {	
									?>
									<img width="545" height="621" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png' ?>"alt="ANKR Agency | Digital Marketing Agency in Dallas Fort Worth" decoding="async"
													fetchpriority="high" />
									<?php
								}

						?>
                           
								</a>
                            <h6>Follow us</h6>
                            <div class="footer__social--links">

                            <?php get_sidebar( 'social' ); ?>

                               
                            </div>
                        </div>
                    </div>
                    <div class="footer__bottom">
                        <div class="copyright__text">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>


