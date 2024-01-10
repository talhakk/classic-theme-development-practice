<?php
//default header code
?>
<header id="masthead" class="site-header">
<div class="site-branding">
    <?php


    if ( is_front_page() && is_home() ) :
        ?>
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php
    else :
        ?>
        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php
    endif;
    $simple_approach_practice_description = get_bloginfo( 'description', 'display' );
    if ( $simple_approach_practice_description || is_customize_preview() ) :
        ?>
        <p class="site-description"><?php echo $simple_approach_practice_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
    <?php endif; ?>
</div><!-- .site-branding -->

<nav id="site-navigation" class="main-navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'simple-approach-practice' ); ?></button>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
        )
    );
    ?>
</nav><!-- #site-navigation -->
</header><!-- #masthead -->



<!-- code from template -->
<ul id="primary-menu" class="menu">
                                <li id="menu-item-74"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-74"><a
                                        href="#home">Home</a></li>
                                <li id="menu-item-75"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-75"><a
                                        href="#about_us_section">About Us</a></li>
                                <li id="menu-item-76"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-76"><a
                                        href="#services-section">Services</a></li>
                                <li id="menu-item-77"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-77"><a
                                        href="#contactUs-section">Contact Us</a></li>
                            </ul>