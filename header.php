<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!--Fogli di stile-->
<link href="<?= get_template_directory_uri()?>/css/reset.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="main-header">
        <div class="navigation-bar color_white">
            <div class="top-nav-container">
                <div class="skew-close">
                    <span class="close-icon">x</span>
                    <span>Close</span>
                </div>
                <div class="logo-square nav-logo">
                    <p>QU</p>
                    <p>SQ</p>
                    <span class="secondary-font font-5">Unique Portfolio</span>
                </div>
            </div>
            <div class="nav-list">
                <nav class="navbar">
                    <!-- <ul>
                        <li><a href="index.html">Home</a></li>
                    
                        <li><a href="portfolio.html">.Portfolio</a></li>
                    
                        <li><a href="#">Blog</a></li>
                    
                        <li><a href="#">.Sample Pages</a></li>
                    
                        <li><a href="#">Shop</a></li>
                    
                        <li><a href="#">Contact</a></li>
                    
                        <li><a href="#">Language</a></li>
                    
                        <li><a href="#">Buy Now</a></li>
                    
                        <li><a href="#">Free</a></li>
                    </ul> -->
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                </nav>
            </div>
        </div>
        <div class="header-box bg_pink">
            <div class="container_large">
                <div class="small-col">
                    <div class="logo">
                        QU<br>SQ
                    </div>
                    <div class="rotateWrapper">
                        <div class="rotate90 menu_items">Unique Portfolio</div>
                    </div>
                </div>
                <div class="center-col">
                    <div class="center-col-wrapper">
                        <h1>
                            When <span class="color_white">Love</span><br> &amp; <span class="color_white">Passion</span> meet
                            <p class="titolo-2">beautiful<span class="color_white"> things</span> start to<span class="color_white"> work</span>!</p>
                        </h1>
                        <h2 class="color_white">You don't believe?</h2>
                    </div>
                </div>
                <div class="small-col">
                    <div class="menu-toggle fas fa-bars"></div>
                    <div class="rotateWrapper">
                        <div class="rotate90 menu_items">Menu</div>
                    </div>
                </div>

            </div>

        </div>
        <div class="header-triangle">



            <svg height="100%" width="100%">
            <polygon points="0,0 500,0 0,210"/>
                Sorry, your browser does not support inline SVG
            </svg>

        </div>
    </header>



