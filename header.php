<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simple_Approach_Practice
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'simple-approach-practice' ); ?></a>



	<header id="masthead" class="site-header" style="background-color:#30303b">
            <div class="container">
                <div class="inner">
                    <div class="logo">
                        <a href="https://ankragency.com/" class="custom-logo-link" rel="home" aria-current="page">
						
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
						</a></div>

                    <!-- desktop menu -->
                    


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <?php
    wp_nav_menu( array(
        'theme_location' => 'menu-1',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => '',
    'menu_class'      => 'navbar-nav',
    'walker'         => new Practice_Menu_Walker(),
) );
?>
    </div>
  </div>
</nav>
                      
                  

                    <div class="header__cta d-lg-block d-none">
                        <a href="#contactUs-section" class="header__cta--btn btn">SCHEDULE STRATEGY SESSION</a>
                    </div>

                    <button id="mobile__menu--button" class="mobile-menu-button--collapse d-lg-none" type="button">
                        <span class="mobile-menu-button-box">
                            <span class="mobile-menu-button-inner"></span>
                        </span>
                    </button>
                </div>
            </div>

            <!-- mobile menu -->
            <nav id="mobile__menu" class="mob__menu d-lg-none">
                <div class="container text-center">
                    <div class="menu-header-menu-container">
                        <ul id="primary-menu" class="menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-74"><a
                                    href="#home">Home</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-75"><a
                                    href="#about_us_section">About Us</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-76"><a
                                    href="#services-section">Services</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-77"><a
                                    href="#contactUs-section">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="header__cta">
                        <a href="#contactUs-section" class="header__cta--btn btn">SCHEDULE STRATEGY SESSION</a>
                    </div>

                </div>
            </nav>

        </header><!-- #masthead -->