<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hedgeforce
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>





<!-- Header -->
<header id="header">


    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="images/logo.svg" alt="Hedgeforce Logo" width="150px"></a>
        <a class="navbar-brand-home-link" href="#"><img src="images/home-icon.svg" alt="Hedgeforce Logo" width="26px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">


            <ul class="nav navbar-nav mr-auto">
                <li class="active instant-hedges"><a class="font-weight-bold" href="#">Instant Hedges</a></li>
                <li class="hedge-rental"><a class="font-weight-bold" href="#">Hedge Rental</a></li>
                <li class="dropdown maze-rental">
                    <a class="font-weight-bold" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Maze Rental</span> <span class="caret"></span></a>
                    <ul style="position:absolute;" class="dropdown-menu megamenu">
                        <li><a href="#">Service A</a></li>
                        <li><a href="#">Service B</a></li>
                        <li><a href="#">Srrvice C</a></li>
                    </ul>
                </li>
                <li><a href="#">About</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Our Work</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>
      </nav> -->







    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img class="company-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.svg" alt="Hedgeforce Logo" width="150px"></a>
        <a class="navbar-brand-home-link" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home-icon.svg" alt="Hedgeforce Logo" width="26px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="hamburger hamburger--elastic">
                        <div class="hamburger-box">
                          <div class="hamburger-inner"></div>
                        </div>
                    </span>
            <!-- <span class="navbar-toggler-icon"></span> -->
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav mr-auto">

                <li class="nav-item dropdown instant-hedges">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Instant Hedges
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="container-fluid text-center">

                            <div class="col-lg-3">
                                <img class="mage-menu-pic" src="<?php bloginfo('stylesheet_directory'); ?>/images/mega-menu-pic-1.jpg" alt="mega menu pic">
                                <h5><a href="#">Hedges</a></h5>
                            </div>

                            <div class="col-lg-3">
                                <img class="mage-menu-pic" src="<?php bloginfo('stylesheet_directory'); ?>/images/mega-menu-pic-2.jpg" alt="mega menu pic">
                                <h5><a href="#">Small Hedge Planters</a></h5>
                            </div>

                            <div class="col-lg-3">
                                <img class="mage-menu-pic" src="<?php bloginfo('stylesheet_directory'); ?>/images/mega-menu-pic-3.jpg" alt="mega menu pic">
                                <h5><a href="#">Topiary & Trees</a></h5>
                            </div>

                            <div class="col-lg-3">
                                <img class="mage-menu-pic" src="<?php bloginfo('stylesheet_directory'); ?>/images/mega-menu-pic-4.jpg" alt="mega menu pic">
                                <h5><a href="#">Bespoke Planters</a></h5>
                            </div>

                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown hedge-rental">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hedge Rental
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">


                        <div class="container-fluid text-center">

                            <div class="col-lg-3">
                                <img class="mage-menu-pic" src="<?php bloginfo('stylesheet_directory'); ?>/images/mega-menu-pic-1.jpg" alt="mega menu pic">
                                <h5><a href="#">Hedges</a></h5>
                            </div>

                            <div class="col-lg-3">
                                <img class="mage-menu-pic" src="<?php bloginfo('stylesheet_directory'); ?>/images/mega-menu-pic-2.jpg" alt="mega menu pic">
                                <h5><a href="#">Small Hedge Planters</a></h5>
                            </div>

                            <div class="col-lg-3">
                                <img class="mage-menu-pic" src="<?php bloginfo('stylesheet_directory'); ?>/images/mega-menu-pic-3.jpg" alt="mega menu pic">
                                <h5><a href="#">Topiary & Trees</a></h5>
                            </div>

                            <div class="col-lg-3">
                                <img class="mage-menu-pic" src="<?php bloginfo('stylesheet_directory'); ?>/images/mega-menu-pic-4.jpg" alt="mega menu pic">
                                <h5><a href="#">Bespoke Planters</a></h5>
                            </div>

                        </div>


                    </div>
                </li>


                <li class="nav-item dropdown maze-rental">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Maze Rental
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">


                        <div class="container-fluid text-center">

                            <div class="col-lg-4">
                                <img class="mage-menu-pic" src="<?php bloginfo('stylesheet_directory'); ?>/images/mega-menu-pic-1.jpg" alt="mega menu pic">
                                <h5><a href="#">Hedges</a></h5>
                            </div>

                            <div class="col-lg-4">
                                <img class="mage-menu-pic" src="<?php bloginfo('stylesheet_directory'); ?>/images/mega-menu-pic-2.jpg" alt="mega menu pic">
                                <h5><a href="#">Small Hedge Planters</a></h5>
                            </div>

                            <div class="col-lg-4">
                                <img class="mage-menu-pic" src="<?php bloginfo('stylesheet_directory'); ?>/images/mega-menu-pic-3.jpg" alt="mega menu pic">
                                <h5><a href="#">Topiary & Trees</a></h5>
                            </div>




                        </div>


                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#" role="button">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" role="button">Support</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" role="button">Our Work</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" role="button">Blog</a>
                </li>

            </ul>



        </div>


    </nav>







    <div class="header-social-icons">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <button class="btn btn-primary my-0 my-sm-0" type="submit">Contact us</button>
    </div>
</header>

<!-- End Header -->






<?php
    //the_custom_logo();
?>

<?php
//wp_nav_menu(
//    array(
//        'theme_location' => 'menu-1',
//        'menu_id'        => 'primary-menu',
//    )
//);
?>
