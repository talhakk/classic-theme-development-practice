<?php
/**
 * The template for displaying front page
 *
 * This is the template that displays front page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Simple_Approach_Practice
 */

get_header();
?>

<main id="primary" class="site-main">


<!-- Include and echo the hero module template part -->
<section class="hero"
    style="background-image: url('<?php the_post_thumbnail_url();?>')">
    
   
    <div class="container">
        <div class="inner">
            <div class="hero__text">
                <h1>          
                        <?php the_field('hero_heading'); ?>
                       
                    <!-- Output the hero text -->
                </h1>
                <div class="description">           
                    <?php the_field('hero_description'); ?>
                    <!-- Output the hero description -->
                </div>               
                <?php 

                    // don't forget to replace 'link' with your field name
                    $linkData = get_field('hero_button');

                    if ($linkData) {
                        // if the 'target' is presented, it's a bool. We've to convert it into the HTML format  
                        $target = isset($linkData['target']) && $linkData['target'] ?
                            '_blank' :
                            '_self';
                        // displays the link. Each %s in the string will be replaced with the related argument
                        printf("<a href='%s' target='%s' class='btn'>%s</a>",
                            esc_url($linkData['url']),
                            esc_html($target),
                            esc_attr($linkData['title']));
                    }
                     ?>
            </div>
        </div>
    </div>
</section>

<!-- Include and echo the about note module template part -->
<section class="about__note" id="about_us_section">
    <!-- Start a new section with a CSS class 'about__note' -->
    <div class="container">
        <!-- Create a container div -->
        <div class="inner">
            <!-- Create an inner div -->
            <div class="sec__head">
                <!-- Create a section header div -->
                <div class="sec__head--title">
                    <!-- Create a div for the section title -->
                    <h2>
                        <p>about <strong>ankr</strong></p>
                    </h2> <!-- Output the 'about_note_title' within an h2 element -->
                    <span class="sec__head--title-arc"></span> <!-- Create a decorative span element -->
                </div>
                <div class="sec__head--headline">
                    <!-- Create a div for the section headline -->
                    <?php the_field('home_about');?>
                    <!-- Output the 'about_note_headline' -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include and echo the about banner module template part -->
<section class="about__banner">
    <!-- Start a new section with a CSS class 'about__banner' -->
    <div class="about__banner--bg"
        style="background-image: url('<?php the_field('home_about_image');?>')">
        <!-- Create a div for the background image with inline CSS -->
    </div>
    <div class="container">
        <!-- Create a container div -->
        <div class="inner">
            <!-- Create an inner div -->
            <h2> <?php the_field('home_about_hero_text');?></h2>
            <!-- Output the 'about_banner_title' within an h2 element -->
        </div>
    </div>
</section>

<!-- Include and echo the Service module template part -->
<section class="services" id="services-section">
    <div class="container">
        <div class="inner">
            <div class="sec__head">
                <div class="sec__head--title">
                    <h2>
                        <p>Our <strong>Services</strong></p>
                    </h2>
                    <span class="sec__head--title-arc"></span>
                </div>
                <div class="sec__head--headline">
                <?php the_field('home_services_text');?>
                </div>
            </div>
        </div>
    </div>
    <div class="services__list">
    <?php
                        $args = array(
                            'post_type' => 'services',
                            'post_status' => 'publish',
                            'posts_per_page' =>8,
                        );
                        // The Query
                        $query = new WP_Query($args);
                        query_posts( $query );
                        if($query->have_posts()):
                        // The Loop
                            while ( $query->have_posts() ) : $query->the_post();  
                                $id=$query->get_the_id();
                                echo '<div class="service"><div class="service__image"">';
                                echo the_post_thumbnail('thumbnail');
                                echo '</div>';
                                echo '<div class="service__title"><h3>';
                                echo the_title();
                                echo '</h3>';           
                                echo '</div></div>';
                            endwhile;
                            wp_reset_query();
                        else:
                            echo '<div style="color:white;">Please Add Services To Display Here!!</div>';
                        endif;

                        // Reset Query
                        wp_reset_query();
                ?> 
     
   
</section>

<!-- Include and echo the Video gallery module template part -->
<section class="video__gallery">
    <div class="container">
        <div class="inner">
            <div class="sec__head">
                <div class="sec__head--title">
                    <h2>
                        <p>Discover Our Projects</p>
                        <!-- Display the video gallery title -->
                    </h2>
                    <span class="sec__head--title-arc"></span>
                </div>
                <div class="sec__head--headline">
                <?php the_field('home_projects_text');?>
                    <!-- Display the video gallery description -->
                </div>
            </div>
        </div>
    </div>
    <div class="swiper video__gallery--slider">
        <div class="swiper-wrapper">
        <?php
                        $args = array(
                            'post_type' => 'portfolio',
                            'post_status' => 'publish',
                            'posts_per_page' =>8,
                        );
                        // The Query
                        $query = new WP_Query($args);
                        query_posts( $query );
                        if($query->have_posts()):
                        // The Loop
                            while ( $query->have_posts() ) : $query->the_post();  
                                $id=$query->get_the_id();
                                echo '<div class="swiper-slide slide"><div class="slide__thumbnail"">';
                                $link=get_field('home_video_link_url');
                                echo "<a href='$link'>";
                                echo the_field('home_video_url');
                                echo '</a></div>';
                                       
                                echo '</div>';
                            endwhile;
                            wp_reset_query();
                        else:
                            echo '<div style="color:white;">Please Add Portfolio Videos To Display Here!!</div>';
                        endif;

                        // Reset Query
                        wp_reset_query();
                ?>
            
           
        </div>
        <div class="swiper__nav">
            <div class="nav__btn swiper-button-prev"></div>
            <div class="nav__btn swiper-button-next"></div>
        </div>
    </div>
</section> <!-- End of the video gallery section -->

<!-- Include and echo the testimonial module template part -->
<section class="testimonials">
    <!-- Start displaying HTML markup for a container -->
    <div class="container">
        <div class="inner">
            <div class="sec__head">
                <div class="sec__head--title">
                    <!-- Display the 'testimonial_title' value within an <h2> element -->
                    <h2>
                        Testimonials </h2>
                    <!-- Create a decorative arc element -->
                    <span class="sec__head--title-arc"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- End HTML markup for a container -->
    <!-- Start HTML markup for a testimonial slider using Swiper library -->
    <div class="swiper testimonials__slider">
        <div class="swiper-wrapper">
            <!-- Start displaying HTML markup for a single testimonial slide -->
            <?php
                        $args = array(
                            'post_type' => 'testimonials',
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
                        );
                        // The Query
                        $query = new WP_Query($args);
                        query_posts( $query );
                        if($query->have_posts()):
                        // The Loop
                            while ( $query->have_posts() ) : $query->the_post();  
                                $id=$query->get_the_id();
                                echo '<div class="swiper-slide slide"><div class="testimonial__card"><div class="testimonial__card--image"">';
                                echo the_post_thumbnail('thumbnail');
                                echo '</div><div class="testimonial__card--rating">';
                                if(get_field('rating')!==null){
                                    $rating=get_field('rating');
                                    echo str_repeat("<i class='fa-solid fa-star'></i>",$rating);
                                }
                                
                                echo '</div><div class="testimonial__card--text">';
                                echo the_excerpt();
                                echo '</div>';
                                echo '<h5 class="testimonial__card--title">';
                                echo the_title();
                                echo '</h5>';           
                                echo '</div></div>';
                            endwhile;
                            wp_reset_query();
                        else:
                            echo '<div style="color:white;">Please Add Testimonials To Display Here!!</div>';
                        endif;

                        // Reset Query
                        wp_reset_query();
                ?> 
            
 
            <!-- End HTML markup for a single testimonial slide -->
        </div>
        <!-- HTML markup for navigation buttons within the Swiper slider -->
        <div class="swiper__nav">
            <div class="nav__btn swiper-button-prev"></div>
            <div class="nav__btn swiper-button-next"></div>
        </div>
    </div>
    <!-- End HTML markup for the testimonial slider -->
</section>

<!-- Include and echo the team module template part -->
<section class="team">
    <div class="container">
        <div class="inner">
            <div class="sec__head">
                <div class="sec__head--title">
                    <h2>
                        <p>Our Team</p>
                    </h2>
                    <span class="sec__head--title-arc"></span>
                </div>
                <div class="sec__head--headline">
                <?php the_field('home_team_text');?>
                </div>
            </div>

            <div class="row team__cards">
                
                   

                <?php
                        $args = array(
                            'post_type' => 'team',
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
                        );
                        // The Query
                        $query = new WP_Query($args);
                        query_posts( $query );
                        if($query->have_posts()):
                        // The Loop
                            while ( $query->have_posts() ) : $query->the_post();  
                                $id=$query->get_the_id();
                                echo '<div class="col-lg-6"><div class="member"><div class="member__image">';
                                echo the_post_thumbnail('thumbnail');
                                echo '</div><h4 class="member__title">';
                                echo the_title();
                                echo '</h4>';
                                echo the_taxonomies(array(
                                    'post'=>$id,
                                    'template'=>'<div style="display:none">%s</div><h5 class="member__designation">%l</h5>',
                                ));
                                echo '</div></div>';
                            endwhile;
                            wp_reset_query();
                        else:
                            echo '<div style="color:white;">Please Add Team Members To Display Here!!</div>';
                        endif;

                        // Reset Query
                        wp_reset_query();
                ?> 
            </div>
        </div>
    </div>
</section>

<!-- Include and echo the contact us module template part -->
<!-- Start of HTML section for 'contact_us_module' -->
<section class="contact__us" id="contactUs-section"
    style="background-image: url('<?php the_field('home_contact_wrapper_image');?>');">
    <div class="container">
        <div class="inner">
            <h2 class="section__heading">
            <?php the_field('home_contact_form_wrapper_text');?>
            </h2>
            <div class="row contact__us--form--content m-0">
                <div class="col-lg-4 single">
                    <div class="contact__us--text">
                        <div class="mail__image">
                            <img src="https://ankragency.com/wp-content/uploads/2023/09/mail-icon.png"
                                alt="Form Image">
                        </div>
                        <div class="description">
                        <?php the_field('home_contact_form_sidebar_text');?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 single">
                    <div class="contact__us--form">
                    
                        <h3>
                            Contact Us </h3>
                            <?php echo do_shortcode('[contact-form-7 id="06b4a71" title="Footer Contact Form"]');?>
                        
                           
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of HTML section for 'contact_us_module' -->


</main><!-- #main -->	


<?php
get_footer();
