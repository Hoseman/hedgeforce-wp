<?php
/* Template Name: Hedgeforce-CustomHomePage */
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hedgeforce
 */

get_header();
?>






    <!-- Main Carousel  -->
    <!-- add carousel fade -->
    <div id="main-carousel" class="container-fuid">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">


                <?php $loop = new WP_Query(array('post_type' => 'main_carousel', 'posts_per_page' => -1, 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                <?php while( $loop->have_posts() ) : $loop->the_post(); ?>


                    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                    <?php echo $backgroundImg[0]; ?>





                    <div class="carousel-item">
                        <img class="desktop-slide" src="<?php bloginfo('stylesheet_directory'); ?>/images/carousel-img-1.jpg" alt="InstaHedge">
                        <img class="mobile-slide" src="<?php bloginfo('stylesheet_directory'); ?>/images/carousel-img-1-mobile.jpg" alt="InstaHedge">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1><?php the_title(); ?></h1>
                                <span style="color:#efefef !important;"><p><?php the_field('carousel_description'); ?></p></span>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button"><?php the_field('carousel_button'); ?></a></p>
                            </div>
                        </div>
                    </div>



                <?php endwhile; ?>




            </div>

            <div class="carousel-navigation">

                <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"><img class="carousel-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/instahedge-carousel-logo.svg" alt="First slide"></li>
                    <li data-target="#myCarousel" data-slide-to="1"><img class="carousel-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/rentahedge-carousel-logo.svg" alt="First slide"></li>
                    <li data-target="#myCarousel" data-slide-to="2"><img class="carousel-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/rentamaze-carousel-logo.svg" alt="First slide"></li>
                </ul>

                <div class="carousel-controls-container">
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>

        </div>
    </div>

    <!-- End Main Carousel  -->

    <div style="clear:left;"></div>




    <!-- Three Columns -->
    <section id="three-columns">
        <div class="container text-center">
            <div class="row">

                <div class="col-sm-4">
                    <div class="three-column">
                        <i class="fal fa-tree-alt fa-3x"></i>
                        <h4>Why InstaHedge</h4>
                        <p>Find out what we can offer you at InstaHedge and how to make your ideas a reality.</p>
                    </div>
                </div>

                <div class="col-sm-4 border-1 border-2">
                    <div class="three-column">
                        <i class="fal fa-seedling fa-3x"></i>
                        <h4>Why InstaHedge</h4>
                        <p>Find out what we can offer you at InstaHedge and how to make your ideas a reality.</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="three-column">
                        <i class="fal fa-leaf-heart fa-3x"></i>
                        <h4>Why InstaHedge</h4>
                        <p>Find out what we can offer you at InstaHedge and how to make your ideas a reality...</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Three Columns -->



<?php
while ( have_posts() ) :
    the_post();
    ?>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>





    <!-- Flexible content example -->
    <?php if( have_rows('content') ): ?>
    <?php while ( have_rows('content') ) : the_row(); ?>

    <?php print_r( get_row_layout() ) ?>
        <br>
        <?php if( get_row_layout() == 'column_section' ): ?>

<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-sm-12">-->
<!--                        <h2 class="--><?php //if( get_sub_field('center_headline') ){ echo "text-center"; } ?><!--">--><?php //echo get_sub_field('headline'); ?><!--</h2>-->
<!--                        --><?php //echo get_sub_field('column'); ?>
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        <?php  endif; ?>

        <?php if( get_row_layout() == 'featurette_1' ): ?>

            <!--            <div class="container">-->
            <!--                <div class="row">-->
            <!--                    <div class="col-sm-12">-->
            <!--                        <h2 class="--><?php //if( get_sub_field('center_headline') ){ echo "text-center"; } ?><!--">--><?php //echo get_sub_field('headline'); ?><!--</h2>-->
            <!--                        --><?php //echo get_sub_field('column'); ?>
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
        <?php  endif; ?>

    <?php endwhile; ?>


    <?php else : ?>

    <?php endif; ?>
    <!-- Flexible content example -->





<?php
endwhile; // End of the loop.
?>



    <!-- Featurette 1 -->
    <section id="featurette-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Nulla nec nisl venenas, sollicitudin nisl non</h2>
                </div>
                <div class="row featurette-1">
                    <span class="featurette-text-panel">
                        <p>Nulla nec nisl venenatis, sollicitudin nisl non, placerat erat. Mauris gravida velit vel neque sodales efficitur. Phasellus lacinia viverra leo, eget dignissim nunc convallis ut. Fusce mi risus, volutpat ut sapien vel, ornare blandit purus. Duis cursus a quam a varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum maximus tortor quis rutrum sagittis. Nullam ac fringilla lectus, eu fringilla magna. Nulla finibus </p>
                        <a href="#" class="btn btn-primary">More</a>
                    </span>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/featurette-1.jpg">
                </div>
            </div>
        </div>
    </section>

    <section id="featurette-1-grey-panel">
        <div class="container-fluid text-center">

            <h3>"Landscaping your garden could increase your property value by 77%"</h3>
            <p>Source name</p>

        </div>
    </section>
    <!-- End Featurette 1  -->


    <!-- Counter -->
    <section id="counter">
        <div class="container text-center">
            <div class="row">
                <div class="col-6 col-md-3">
                    <h4><span class="counter">15</span>years</h4>
                    <p>In business</p>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <h4><span class="counter">1200</span>m</h4>
                    <p>Hedging for rental</p>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <h4><span class="counter">300</span>+</h4>
                    <p>Trees for rental</p>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <h4><span class="counter">1500</span>m<sup>2</sup></h4>
                    <p>Mazes created</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter -->



    <!-- Featurette 2 coloum-->
    <section id="featurette-2-column">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-sm-2">
                    <h2>Nulla nec nisl venenatis, sollicitudin nisl non</h2>
                    <p>Nulla nec nisl venenatis, sollicitudin nisl non, placerat erat. Mauris gravida velit vel neque sodales efficitur.
                        Phasellus lacinia viverra leo, eget dignissim nunc convallis ut. Fusce mi risus, volutpat ut sapien vel, ornare blandit purus.
                        Duis cursus a quam a varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum maximus tortor quis rutrum sagittis.
                        Nullam ac fringilla lectus, eu fringilla magna. Nulla finibus ornare ante, nec lacinia sapien ultrices congue.</p>
                    <a class="btn btn-primary" href="#">More</a>
                </div>
                <div class="col-lg-6 order-1 order-sm-1">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/featurette-2-col.jpg">
                </div>
            </div>
        </div>
    </section>
    <!-- Featurette 2 coloum-->

    <!-- Our Clients-->
    <section id="our-clients">
        <div class="container text-center">
            <h6>Some of our clients</h6>

            <div class="owl-carousel owl-theme">
                <div class="item"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/clients-logo-1.png" alt="Our Clients" class="our-clients"></div>
                <div class="item"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/clients-logo-2.png" alt="Our Clients" class="our-clients"></div>
                <div class="item"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/clients-logo-3.png" alt="Our Clients" class="our-clients"></div>
                <div class="item"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/clients-logo-4.png" alt="Our Clients" class="our-clients"></div>
                <div class="item"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/clients-logo-5.png" alt="Our Clients" class="our-clients"></div>
            </div>
        </div>
    </section>
    <!-- Our Clients-->


    <!-- Featurette 3 -->
    <section id="featurette-3">
        <div class="container">
            <div class="row">
                <div class="featurette-3">
                    <span class="featurette-text-panel">
                        <h2>Nulla nec nisl venenas, sollicit</h2>
                    </span>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/featurette-3.jpg">
                </div>
                <div class="featurette-3b">
                    <span class="featurette-text-panel">
                        <p>Nulla nec nisl venenatis, sollicitudin nisl non, placerat erat. Mauris gravida velit vel neque sodales efficitur. Phasellus lacinia viverra leo, eget dignissim nunc convallis ut. Fusce mi risus, volutpat ut sapien vel, ornare blandit purus. Duis cursus a quam a varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum maximus </p>
                        <a href="#" class="btn btn-primary">More</a>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featurette 3  -->




    <!-- Case Studies-->
    <section id="case-studies">
        <div class="container text-center">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/case-studies.svg" width="140px">
            <h2>Case studies</h2>
            <p>Nulla nec nisl venenatis, sollicitudin nisl non, placerat erat. Mauris gravida
                velit vel neque sodales efficitur. Phasellus lacinia viverra leo, eget dignis</p>
            <a class="btn btn-primary" href="More">More</a>
        </div>

    </section>
    <!-- Case Studies-->



<!-- Ideas & Inspirations -->
    <section id="ideas-inspiration">
        <div class="container text-center">
            <h2>Ideas and Inspiration</h2>
            <p>Gallery venenatis, sollicitudin nisl non, placerat erat. </p>
            <div class="row">

                <div class="col-sm-6">
                    <div class="ideas-container">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ideas-inspiration-1.jpg">
                        <p>Instant Hedges</p>
                    </div>
                    <div class="ideas-container">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ideas-inspiration-2.jpg">
                        <p>Hedge Rental</p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="ideas-container">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ideas-inspiration-3.jpg">
                        <p>Maze Rental</p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="ideas-container">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ideas-inspiration-3.jpg">
                        <p>Maze Rental</p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="ideas-container">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ideas-inspiration-1.jpg">
                        <p>Hedge Rental</p>
                    </div>

                    <div class="ideas-container">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ideas-inspiration-2.jpg">
                        <p>Instant Hedges</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Ideas & Inspirations -->



<!-- Reviews -->
    <section id="reviews">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="google-rating">
                        <span class="g-logo">G</span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h3>Nulla nec nisl venenatis, sollicitudin nisl non, placerat erat. Mauris gravida velit vel neque sodales efficitur. Phasellus lacinia viverra leo, eget dignisNulla nec nisl venenatis, sollicitudin nisl non, placerat erat. Mauris gravida velit vel neque sodales efficitur. Phasellus lacinia viverra leo, eget dignis</h3>
                    <p class="google-reviews">Google reviews</p>
                    <a class="btn btn-primary">Possible Button</a>
                </div>
                <div class="col-sm-4">
                    <h5 class="testimonials-heading">TESTIMONIALS</h5>
                    <p>Nulla nec nisl venenatis, sollicitudin nisl non, placerat erat. Mauris gravida velit vel neque sodales efficitur. Phasellus lacinia viverra leo, eget dignisNulla nec nisl venenatis, sollicitudin nisl non, placerat erat. Mauris gravida velit vel </p>
                    <h5>Name Surname</h5>
                    <p>Founder, Acme Company</p>
                    <br>
                    <br>
                    <p>Nulla nec nisl venenatis, sollicitudin nisl non, placerat erat. Mauris gravida velit vel neque sodales efficitur. Phasellus lacinia viverra leo, eget dignisNulla nec nisl venenatis, sollicitudin nisl non, placerat erat. Mauris gravida velit vel </p>
                    <h5>Name Surname</h5>
                    <p>Founder, Acme Company</p>
                </div>
            </div>
        </div>
    </section>
<!-- End Reviews -->



<!-- Parallax Panel -->
    <section id="parralax" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory'); ?>//images/parrallax-image.jpg">
        <div class="container-fluid text-center parralax-container">
            <h2>Parralax Break Photo</h2>
            <p>Nulla nec nisl venenatis, sollicitudin nisl non, placerat erat. Mauris gravida velit vel neque sodales efficitur. Phasellus lacinia viverra leo, eget dignis</p>
        </div>
    </section>
<!-- End Parallax Panel -->



<!-- Latest Blogs -->
<section id="latest-blogs">
    <div class="container text-center">
        <h2>Latest Blogs</h2>
        <div class="row">
            <div class="col-sm-4 text-left">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/blog-1.jpg">
                <h3>Short headline</h3>
                <p>Harmonious colour themes have built up as the collection has evolved. </p>
                <a class="read-more" href="#">Read more</a>

            </div>
            <div class="col-sm-4 text-left">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/blog-2.jpg">
                <h3>Short headline</h3>
                <p>Harmonious colour themes have built up as the collection has evolved. </p>
                <a class="read-more" href="#">Read more</a>

            </div>
            <div class="col-sm-4 text-left">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/blog-3.jpg">
                <h3>Short headline</h3>
                <p>Harmonious colour themes have built up as the collection has evolved. </p>
                <a class="read-more" href="#">Read more</a>

            </div>
        </div>
        <a class="btn btn-primary" href="#">Visit our Instagram Page</a>
    </div>
</section>
<!-- Latest Blogs -->


<!-- Instagram  -->

    <section id="instagram">
        <div class="container text-center">
            <h2>Instagram feed</h2>
            <div class="row">
                <div class="col-sm-3 text-left">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram-1.jpg">
                </div>
                <div class="col-sm-3 text-left">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram-2.jpg">
                </div>
                <div class="col-sm-3 text-left">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram-3.jpg">
                </div>
                <div class="col-sm-3 text-left">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram-4.jpg">
                </div>

            </div>
            <a class="btn btn-primary" href="#">Visit our Instagram Page</a>
        </div>
    </section>

<!-- End Instagram  -->


    <!-- CTA Area -->
    <section id="case-studies">
        <div class="container text-center">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/case-studies.svg" width="140px">
            <h2>CTA Area</h2>
            <p>Nulla nec nisl venenatis, sollicitudin nisl non, placerat erat. Mauris gravida
                velit vel neque sodales efficitur. Phasellus lacinia viverra leo, eget dignis</p>
            <a class="btn btn-primary" href="More">More</a>
        </div>

    </section>
    <!-- CTA Area -->



<?php
//get_sidebar();
get_footer();
