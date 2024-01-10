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
    style="background-image: url('https://ankragency.com/wp-content/uploads/2023/09/hero-bg.jpg')">
    <div class="container">
        <div class="inner">
            <div class="hero__text">
                <h1>
                    <p>Meet Your <i>NEW</i><br />
                        Digital Marketing Agency</p>
                    <!-- Output the hero text -->
                </h1>
                <div class="description">
                    <p>Get <strong>real-time</strong> results from your team of marketing experts.</p>
                    <!-- Output the hero description -->
                </div>
                <a href="#contactUs-section" class="btn">
                    Begin Today
                    <!-- Output the hero button title -->
                </a>
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
                    <p>At ANKR, our goal is simple: <strong>drive ROI</strong> for our clients. For years,
                        we&#8217;ve meticulously crafted strategies that translate into tangible business
                        outcomes. Every digital campaign, every web page, is designed to turn visitors into
                        <strong>loyal customers</strong>.</p>
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
        style="background-image: url('https://ankragency.com/wp-content/uploads/2023/09/about-banner.jpg')">
        <!-- Create a div for the background image with inline CSS -->
    </div>
    <div class="container">
        <!-- Create a container div -->
        <div class="inner">
            <!-- Create an inner div -->
            <h2>Focused on Results <br> Driven by Performance.</h2>
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
                    <p>Want a better return on your online investment? That&#8217;s where we come in. We
                        help you get noticed on search engines, create posts that your audience loves, and
                        build websites that make visitors want to stay. With our data tools, we make sure
                        everything is working like it should.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="services__list">
        <div class="service">
            <div class="service__image">
                <img width="150" height="71"
                    src="https://ankragency.com/wp-content/uploads/2023/09/social-media-service.jpg"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async" />
            </div>
            <div class="service__title">
                <h3>
                    Social Media </h3>
            </div>
        </div>
        <div class="service">
            <div class="service__image">
                <img width="150" height="116"
                    src="https://ankragency.com/wp-content/uploads/2023/09/google-ads-service.jpg"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async" />
            </div>
            <div class="service__title">
                <h3>
                    Google Ads </h3>
            </div>
        </div>
        <div class="service">
            <div class="service__image">
                <img width="150" height="84"
                    src="https://ankragency.com/wp-content/uploads/2023/09/seo-service.jpg"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async" />
            </div>
            <div class="service__title">
                <h3>
                    SEO </h3>
            </div>
        </div>
        <div class="service">
            <div class="service__image">
                <img width="150" height="84"
                    src="https://ankragency.com/wp-content/uploads/2023/09/marketing-service.jpg"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async"
                    loading="lazy" /> </div>
            <div class="service__title">
                <h3>
                    Marketing </h3>
            </div>
        </div>
        <div class="service">
            <div class="service__image">
                <img width="150" height="100"
                    src="https://ankragency.com/wp-content/uploads/2023/09/video-production-service.jpg"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async"
                    loading="lazy" /> </div>
            <div class="service__title">
                <h3>
                    Video Production </h3>
            </div>
        </div>
        <div class="service">
            <div class="service__image">
                <img width="150" height="100"
                    src="https://ankragency.com/wp-content/uploads/2023/09/photography-service.jpg"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async"
                    loading="lazy" /> </div>
            <div class="service__title">
                <h3>
                    Photography </h3>
            </div>
        </div>
        <div class="service">
            <div class="service__image">
                <img width="150" height="100"
                    src="https://ankragency.com/wp-content/uploads/2023/09/website-building-service.jpg"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async"
                    loading="lazy" /> </div>
            <div class="service__title">
                <h3>
                    Website Building </h3>
            </div>
        </div>
    </div>
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
                    <p>At ANKR Agency, we love what we do, and it shows in our projects. Dive into a curated
                        selection of our creative and impactful work, offering insights into the projects
                        that have brought brands to life. Whether you&#8217;re a potential client seeking
                        inspiration or a future team member eager to join our journey, this section provides
                        a window into our passion for videography, web development, social media content
                        marketing, and search advertising.</p>
                    <!-- Display the video gallery description -->
                </div>
            </div>
        </div>
    </div>
    <div class="swiper video__gallery--slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <div class="slide__thumbnail">
                    <a href="">
                        <p><iframe loading="lazy" width="560" height="315"
                                src="https://www.youtube.com/embed/1ERIfiyhZ-A?si=5C7VzZxf9cdHPD0c"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe></p>
                        <!-- Display the video gallery slide thumbnail -->
                    </a>
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="slide__thumbnail">
                    <a href="">
                        <p><iframe loading="lazy" width="560" height="315"
                                src="https://www.youtube.com/embed/TYKMINior6U?si=hRiXyiTx6lFKHBnl"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe></p>
                        <!-- Display the video gallery slide thumbnail -->
                    </a>
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="slide__thumbnail">
                    <a href="">
                        <p><iframe loading="lazy" width="560" height="315"
                                src="https://www.youtube.com/embed/SWMkJP9Y2lk?si=jZqVijmSCOwlymIL"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe></p>
                        <!-- Display the video gallery slide thumbnail -->
                    </a>
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="slide__thumbnail">
                    <a href="">
                        <p><iframe loading="lazy" width="560" height="315"
                                src="https://www.youtube.com/embed/jQZVIr_dCJ8?si=2G5vmxDSgenNA57M"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe></p>
                        <!-- Display the video gallery slide thumbnail -->
                    </a>
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="slide__thumbnail">
                    <a href="">
                        <p><iframe loading="lazy" width="560" height="315"
                                src="https://www.youtube.com/embed/0pNZk2AQRdU?si=lsOdn6F2C5B5Z2ug"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe></p>
                        <!-- Display the video gallery slide thumbnail -->
                    </a>
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="slide__thumbnail">
                    <a href="">
                        <p><iframe loading="lazy" width="560" height="315"
                                src="https://www.youtube.com/embed/qjbAZakNMRY?si=Ro4PISdqWaszP-ar"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe></p>
                        <!-- Display the video gallery slide thumbnail -->
                    </a>
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="slide__thumbnail">
                    <a href="">
                        <p><iframe loading="lazy" width="560" height="315"
                                src="https://www.youtube.com/embed/d_nDS7ci-dk?si=PSrt1tRIm8BiGDa7"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe></p>
                        <!-- Display the video gallery slide thumbnail -->
                    </a>
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="slide__thumbnail">
                    <a href="">
                        <p><iframe loading="lazy" width="560" height="315"
                                src="https://www.youtube.com/embed/T2svIraCogs?si=gjuzYMy4-DTbbMzm"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe></p>
                        <!-- Display the video gallery slide thumbnail -->
                    </a>
                </div>
            </div>
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
            <div class="swiper-slide slide">
                <div class="testimonial__card">
                    <div class="testimonial__card--image">
                        <img width="150" height="150"
                            src="https://ankragency.com/wp-content/uploads/2023/09/63b095bd-838e-4573-958d-4451868b81b1-150x150.png"
                            class="attachment-thumbnail size-thumbnail wp-post-image"
                            alt="Derek_Walker_Testimonial" decoding="async" loading="lazy"
                            srcset="https://ankragency.com/wp-content/uploads/2023/09/63b095bd-838e-4573-958d-4451868b81b1-150x150.png 150w, https://ankragency.com/wp-content/uploads/2023/09/63b095bd-838e-4573-958d-4451868b81b1.png 160w"
                            sizes="(max-width: 150px) 100vw, 150px" /> </div>
                    <div class="testimonial__card--rating">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i> </div>
                    <div class="testimonial__card--text">
                        <p>
                            <p>Your strategy was creative and innovative, and we could not have chosen a
                                better agency to work with.</p>
                        </p>
                    </div>
                    <h5 class="testimonial__card--title">
                        Derek Walker </h5>
                </div>
            </div>
            <!-- End HTML markup for a single testimonial slide -->
            <!-- Start displaying HTML markup for a single testimonial slide -->
            <div class="swiper-slide slide">
                <div class="testimonial__card">
                    <div class="testimonial__card--image">
                        <img width="150" height="150"
                            src="https://ankragency.com/wp-content/uploads/2023/09/bb4eb914-affc-4766-bff2-e8ab822f5074-150x150.png"
                            class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                            decoding="async" loading="lazy"
                            srcset="https://ankragency.com/wp-content/uploads/2023/09/bb4eb914-affc-4766-bff2-e8ab822f5074-150x150.png 150w, https://ankragency.com/wp-content/uploads/2023/09/bb4eb914-affc-4766-bff2-e8ab822f5074.png 160w"
                            sizes="(max-width: 150px) 100vw, 150px" /> </div>
                    <div class="testimonial__card--rating">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i> </div>
                    <div class="testimonial__card--text">
                        <p>
                            <p>Your work in developing and executing our social media strategy has been
                                exceptional, and your efforts in search are paying off for us.</p>
                        </p>
                    </div>
                    <h5 class="testimonial__card--title">
                        Randy Hernandez </h5>
                </div>
            </div>
            <!-- End HTML markup for a single testimonial slide -->
            <!-- Start displaying HTML markup for a single testimonial slide -->
            <div class="swiper-slide slide">
                <div class="testimonial__card">
                    <div class="testimonial__card--image">
                        <img width="150" height="150"
                            src="https://ankragency.com/wp-content/uploads/2023/09/b22a0bff-19bf-49fa-ade3-c52a34106800-150x150.png"
                            class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                            decoding="async" loading="lazy"
                            srcset="https://ankragency.com/wp-content/uploads/2023/09/b22a0bff-19bf-49fa-ade3-c52a34106800-150x150.png 150w, https://ankragency.com/wp-content/uploads/2023/09/b22a0bff-19bf-49fa-ade3-c52a34106800.png 160w"
                            sizes="(max-width: 150px) 100vw, 150px" /> </div>
                    <div class="testimonial__card--rating">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i> </div>
                    <div class="testimonial__card--text">
                        <p>
                            <p>The team at ANKR is awesome. So good at what they do, while also being
                                utterly reachable, creative and strategic. Great agency. Great people.</p>
                        </p>
                    </div>
                    <h5 class="testimonial__card--title">
                        Clare Toledo </h5>
                </div>
            </div>
            <!-- End HTML markup for a single testimonial slide -->
            <!-- Start displaying HTML markup for a single testimonial slide -->
            <div class="swiper-slide slide">
                <div class="testimonial__card">
                    <div class="testimonial__card--image">
                        <img width="150" height="150"
                            src="https://ankragency.com/wp-content/uploads/2023/09/f6ed38fa-6f59-4f75-b395-86ca84f05b96-150x150.png"
                            class="attachment-thumbnail size-thumbnail wp-post-image"
                            alt="Billy Leigh Testimonial" decoding="async" loading="lazy"
                            srcset="https://ankragency.com/wp-content/uploads/2023/09/f6ed38fa-6f59-4f75-b395-86ca84f05b96-150x150.png 150w, https://ankragency.com/wp-content/uploads/2023/09/f6ed38fa-6f59-4f75-b395-86ca84f05b96.png 160w"
                            sizes="(max-width: 150px) 100vw, 150px" /> </div>
                    <div class="testimonial__card--rating">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i> </div>
                    <div class="testimonial__card--text">
                        <p>
                            <p>We could not be happier with ANKR. They deliver fresh, relevant content to
                                our followers and clients.</p>
                        </p>
                    </div>
                    <h5 class="testimonial__card--title">
                        Billy Leigh </h5>
                </div>
            </div>
            <!-- End HTML markup for a single testimonial slide -->
            <!-- Start displaying HTML markup for a single testimonial slide -->
            <div class="swiper-slide slide">
                <div class="testimonial__card">
                    <div class="testimonial__card--image">
                        <img width="150" height="150"
                            src="https://ankragency.com/wp-content/uploads/2023/09/0718b633-bef0-40f4-afc8-c20f77d4b49f-150x150.png"
                            class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                            decoding="async" loading="lazy"
                            srcset="https://ankragency.com/wp-content/uploads/2023/09/0718b633-bef0-40f4-afc8-c20f77d4b49f-150x150.png 150w, https://ankragency.com/wp-content/uploads/2023/09/0718b633-bef0-40f4-afc8-c20f77d4b49f.png 160w"
                            sizes="(max-width: 150px) 100vw, 150px" /> </div>
                    <div class="testimonial__card--rating">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i> </div>
                    <div class="testimonial__card--text">
                        <p>
                            <p>Brandon and his professional staff listen and act to make it happen on social
                                media!</p>
                        </p>
                    </div>
                    <h5 class="testimonial__card--title">
                        Nancy Bean </h5>
                </div>
            </div>
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
                    <p>Meet the faces behind your online success. Our digital marketing team is more than
                        just experts; we&#8217;re passionate individuals dedicated to making results happen
                        for you. See the diverse range of skills we bring to the table.</p>
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
    style="background-image: url('https://ankragency.com/wp-content/uploads/2023/09/contact-bg.jpg');">
    <div class="container">
        <div class="inner">
            <h2 class="section__heading">
                <p>Want Better Online Results? <strong>Connect with Us.</strong></p>
            </h2>
            <div class="row contact__us--form--content m-0">
                <div class="col-lg-4 single">
                    <div class="contact__us--text">
                        <div class="mail__image">
                            <img src="https://ankragency.com/wp-content/uploads/2023/09/mail-icon.png"
                                alt="Form Image">
                        </div>
                        <div class="description">
                            <p>Ready to see <strong>real results</strong> from your digital efforts? Drop us
                                a line. We&#8217;ve been helping businesses succeed online for years, and we
                                can&#8217;t wait to help yours.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 single">
                    <div class="contact__us--form">
                        <h3>
                            Contact Us </h3>

                        <div class="wpcf7 no-js" id="wpcf7-f177-p5-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="/#wpcf7-f177-p5-o1" method="post" class="wpcf7-form init"
                                aria-label="Contact form" novalidate="novalidate" data-status="init">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="177" />
                                    <input type="hidden" name="_wpcf7_version" value="5.8.1" />
                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f177-p5-o1" />
                                    <input type="hidden" name="_wpcf7_container_post" value="5" />
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                    <input type="hidden" name="_wpcf7_recaptcha_response" value="" />
                                </div>
                                <p><span class="wpcf7-form-control-wrap" data-name="text-268"><input
                                            size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form__field"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Your Name" value="" type="text"
                                            name="text-268" /></span><br />
                                    <span class="wpcf7-form-control-wrap" data-name="email-976"><input
                                            size="40"
                                            class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form__field"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Your E-mail" value="" type="email"
                                            name="email-976" /></span><br />
                                    <span class="wpcf7-form-control-wrap" data-name="textarea-39"><textarea
                                            cols="40" rows="10"
                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form__field"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Your Message" name="textarea-39"></textarea></span>
                                </p>
                                <div class="text-center">
                                    <p><input class="wpcf7-form-control wpcf7-submit has-spinner btn"
                                            type="submit" value="Send" />
                                    </p>
                                </div>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
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
