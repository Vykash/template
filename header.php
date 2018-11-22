<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!--Fogli di stile-->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="<?= get_template_directory_uri()?>/css/reset.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link href="<?= get_template_directory_uri()?>/css/style2.css" rel="stylesheet">
<link href=<?= get_template_directory_uri()?>/css/responsive.css rel="stylesheet">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

<?php wp_head(); ?>
</head>

<?php
    /*Dati*/
    $titolo = get_field('titolo');
    if($titolo == '' || $titolo == NULL){
        $titolo = get_the_title();
    }
    $sottotitolo = get_field('sottotitolo');
    $colore_header = get_field('colore_header');
?>
<body <?php body_class(); ?>>

<header id="main-header">
        <div class="navigation-bar color_white">
            <div class="top-nav-container">
                <div class="skew-close">
                    <span class="close-icon">x</span>
                    <span><?php _e('Close','qusq') ?></span>
                </div>
                <div class="logo-square nav-logo">
                    <p>QU</p>
                    <p>SQ</p>
                    <span class="secondary-font font-5"><?php bloginfo('description') ?></span>
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
        <div class="header-box" style="background-color:<?=$colore_header?>">
            <div class="container_large">
                <div class="small-col">
                    <a href="<?=get_site_url() ?>" class="logo">
                        QU<br>SQ
                    </a>
                    <div class="rotateWrapper">
                        <div class="rotate90 menu_items"><?php bloginfo('description') ?></div>
                    </div>
                </div>
                <div class="center-col">
                    <div class="center-col-wrapper">
                        <h1><?=$titolo?></h1>
                        <h2 class="color_white"><?=$sottotitolo?></h2>
                        <?php if(get_post_type() == 'portfolio'){?>
                        <div class="color_white">
                            <span><a href="#"><i class="fas fa-arrow-left"></i>Previous Project</a></span>
                            <span><a href="portfolio2.html">Next Project<i class="fas fa-arrow-right"></i></a></span>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="small-col">
                    <div class="menu-toggle fas fa-bars"></div>
                    <div class="rotateWrapper">
                        <div class="rotate90 menu_items"><?php _e('Menu','qusq') ?></div>
                    </div>
                </div>

            </div>

        </div>
        <div class="header-triangle">



            <svg height="100%" width="100%">
            <polygon points="0,0 500,0 0,210" fill="<?=$colore_header?>"/>
                Sorry, your browser does not support inline SVG
            </svg>

        </div>
    </header>



