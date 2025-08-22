
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="bracket-web">
    <meta name="description" content="Gotur is a modern travel & tour booking HTML Template. It is perfect for travel agencies, tour operators, trip holiday booking websites, adventure and booking companies looking for a unique and intuitive search function and all other travel & tourism websites and businesses.">
    <title>Home One || Gotur || Travel & Tour HTML Template</title>

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/site.webmanifest">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/logo/ramayan_logo.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">


        <div class="top-one top-one--two">
            <div class="container-fluid">
                <div class="top-one__inner">
                    <ul class="list-unstyled top-one__info">
                        <li class="top-one__info__item">
                            <i class="fas fa-phone"></i>
                            <a href="tel:+919999999999">+91 9999999999</a>
                        </li>
                        <!-- /.top-one__info__item -->
                        <li class="top-one__info__item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:ramayanclub@gmail.com">ramayanclub@gmail.com</a>
                        </li>
                        <!-- /.top-one__info__item -->
                    </ul>
                    <!-- /.list-unstyled top-one__info -->
                    <div class="top-one__right">
                        <div class="top-one__info__item">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="https://www.google.com/maps">Incugus Tower, C-84, Vibhuti Khand</a>
                        </div>
                        <!-- /.top-one__info__item -->
                        <div class="top-one__social">
                            <a href="https://facebook.com" target="_blank">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="https://twitter.com" target="_blank">
                                <i class="fa-brands fa-x-twitter" aria-hidden="true"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="https://linkedin.com" target="_blank">
                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                <span class="sr-only">Linked In</span>
                            </a>
                            <a href="https://youtube.com" target="_blank">
                                <i class="fab fa-youtube" aria-hidden="true"></i>
                                <span class="sr-only">Youtube</span>
                            </a>
                        </div>
                        <!-- /.top-one__social -->
                    </div>
                    <!-- /.top-one__right -->
                </div>
                <!-- /.top-one__inner -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.top-one -->

        <header class="main-header main-header--one sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo logo-retina">
                        <a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/ramayan_logo.png" alt="logo" width="130"
                                height="100"></a>
                    </div>
                    <!-- /.main-header__logo -->
                    <div class="main-header__right">
                        <nav class="main-header__nav main-menu">
                            <ul class="main-menu__list one-page-scroll-menu">
                                <li class="scrollToLink"><a href="#home">Home</a></li>
                                <li class="scrollToLink"><a href="#about">About</a></li>
                                <li class="scrollToLink"><a href="#destination">Travel Spots</a></li>
                                <li class="scrollToLink"><a href="#guide">Our Taxis</a></li>
                                <li class="scrollToLink"><a href="#testimonials">Testimonials</a></li>
                                <li class="scrollToLink"><a href="#blog">Our Stories</a></li>

                            </ul>
                        </nav>

                        <a href="#booking" class="gotur-btn main-header__btn">Book Now <i
                                class="fas fa-angle-right"></i></a>
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <!-- /.mobile-nav__toggler -->
                    </div>
                    <!-- /.main-header__right -->
                </div>
                <!-- /.main-header__inner -->
            </div>
            <!-- /.container-fluid -->
        </header>