<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hedgeforce
 */

?>





<!-- Footer -->

<section id="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-6 established">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.svg" alt="Hedgeforce Logo" width="150px">
                <p class="established-text">Established in 1995, we have helped create many projects from design, build through to creating bespoke experiences.</p>
                <form class="footer-form">
                    <h5 class="free-brochure">Free Brochure</h5>
                    <input class="form-control form-firstname" type="text" name="firstname" placeholder="First Name*">
                    <input class="form-control form-lastname" type="text" name="lastname" placeholder="Last Name*">
                    <input class="form-control form-email" type="text" name="email" placeholder="Email*">
                    <input type="checkbox" name="subscribe" class="subscribe-input">
                    <label class="subscribe-label">I would also like to subscribe to receive advice, tips, offers, news & promotions</label>
                    <input class="btn btn-primary" type="submit" name="submit" value="Subscribe">
                </form>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2 footer-column">
                <h5 class="orange-footer-heading">Instant Hedges</h5>
                <p>Hedges<br>
                    Pleached Trees & Espalier Trees<br>
                    Semi-Mature Trees<br>
                    Topiary</p>

                <h5>Delivery Options</h5>
                <a href="#">Delivery Options</a>
                <a href="#">Planting Service</a>

                <h5>Our Work</h5>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2 footer-column">
                <h5 class="green-footer-heading">Instant Hedges</h5>
                <p>Large Hedge Planters<br>
                    Small Hedge Planters<br>
                    Topiary & Trees<br>
                    Bespoke Planters</p>

                <h5>About</h5>
                <a href="#">Why InstaHedge?</a>
                <a href="#">Testimonials</a>

                <h5>Blog</h5>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2 footer-column">
                <h5 class="orangered-footer-heading">Maze Rental</h5>
                <p>Mini Mazes<br>
                    Massive Mazes<br>
                    Maze Inspiration</p>

                <h5>Support</h5>
                <a href="#">Delivery Options</a>
                <a href="#">Planting Service</a>

                <h5>Contact us</h5>
            </div>

            <div class="col-md-8 address">
                <p>(Metalforce Ltd), Bocase Farm, Brigstock, Kettering, Northants NN14 3HZ, United Kingdom
                    Copyright Exists © Metalforce Limited | VAT Reg. No. 576 5023 32 | Registered in England No. 2616220
                </p>
            </div>

            <div class="col-md-4 social-icons-footer">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
            </div>

        </div>

    </div>
</section>



<div id="footer-nav">
    <div class="container footer-container">
        <div class="row">
            <div class="col-sm-12 border-top pt-4 pl-0 pr-0">

                    <span class="signoff-left">
                        <a>InstaHedge Terms of Trade</a>
                        <a>Website Terms of Use</a>
                        <a>Privacy Policy</a>
                    </span>
                <p class="signoff-right">Website Design &amp; Development by Brave Agency</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->





<!--printf( esc_html__( 'Theme: %1$s by %2$s.', 'hedgeforce' ), 'hedgeforce', '<a href="https://www.brave.agency/">Brave Agency</a>' );-->
<?php wp_footer(); ?>

</body>
</html>
