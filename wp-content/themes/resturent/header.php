<?php global $site_data;?>
<!doctype html>
<html <?php language_attributes()?>>

<head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset')?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->  
    <title><?php bloginfo('title')?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/preloader.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/meanmenu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/spacing.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css">
    <style>
        .contact-form input[type="submit"]:hover {
            border-color: #EF3131;
            color: #EF3131;
        }
        .contact-form input:focus,.contact-form textarea:focus {
            border-color: #2FA43C;
        }
        .contact-form input[type="submit"] {
            background: none;
            color: #DBCEA1;
            border: 2px solid #DBCEA1;
            display: inline-block;
            padding: 8px 0px;
            text-transform: uppercase;
            font-size: 18px;
            font-family: 'Montserrat';
            transition: .3s;
            width: 200px;
        }
        textarea.wpcf7-form-control.wpcf7-textarea {
            height: 142px;
        }
        <?php wp_head()?>
    </style>
</head>

<body <?php body_class()?>>

    <!-- Preloader Start -->
    <div class="proloader d-none">
        <div class="loader_34">
            <!-- Preloader Elements -->
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <!-- Preloader Container Left Begin -->
                        <div class="ytp-spinner-left">
                            <!-- Preloader Body Left -->
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <!-- Preloader Container Left End -->

                        <!-- Preloader Container Right Begin -->
                        <div class="ytp-spinner-right">
                            <!-- Preloader Body Right -->
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <!-- Preloader Container Right End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header-area -->
    <div class="header-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-3">
                    <div class="logo">
                        <a href="<?php bloginfo('home')?>">
                            <img src="<?php echo $site_data['header-logo']['url']?>" alt="">
                        </a>
                    </div>
                    <div class="mobile-menu"></div>
                </div>

                <div class="col-lg-10 col-md-9">
                    <div class="mainemnu">
                        <nav id="mobile-menu">
                            <?php wp_nav_menu(array(
                                'them_location'     => 'headermenu',
                                'container'         => 'false',
                                'menu_class'        => ' ',
                                'menu_id'           => ''
                            ))?> 
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header-area END -->

