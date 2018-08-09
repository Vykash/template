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

<?php

    $sottotitolo = get_field('sottotitolo');
    $frase = get_field('frase_ad_effetto');
    $date = get_field('date');
    $client = get_field('client');
    $work = get_field('work_done');
    $preview = get_field('preview');
    $colore_header = get_field('colore_header');
    
?>
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
                        <div class="rotate90 menu_items"><?php bloginfo('description') ?></div>
                    </div>
                </div>
                <div class="center-col">
                    <div class="center-col-wrapper">
                        <h1>
                            <?php the_title() ?>
                        </h1>
                        <h2 class="color_white"><?=$sottotitolo?></h2>
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






<div class="container portfolio-container">


<!-- <div class="left-col">
            <article class="portfolio-item right">
                <div class="titleWrapper">
                    <div class="rotateWrapper">
                        <div class="rotate90">
                            <span class="title">Cover</span>
                        </div>
                    </div>
                </div>
                <div class="pic-wrapper">
                    <img src="img/pillola.jpg">
                </div>
            </article>
            <article class="portfolio-item left">
                <div class="titleWrapper">
                    <div class="rotateWrapper">
                        <div class="rotate90">
                            <span class="title">Back</span>
                        </div>
                    </div>
                </div>
                <div class="pic-wrapper">
                    <img src="img/ragazza.jpg">
                </div>
            </article>
            <article class="portfolio-item right">
                <div class="titleWrapper">
                    <div class="rotateWrapper">
                        <div class="rotate90">
                            <span class="title">Front View</span>
                        </div>
                    </div>
                </div>
                <div class="pic-wrapper">
                    <img src="img/sgolf.jpg">
                </div>
            </article>
            <article class="portfolio-item left">
                <div class="titleWrapper">
                    <div class="rotateWrapper">
                        <div class="rotate90">
                            <span class="title">Space Ship</span>
                        </div>
                    </div>
                </div>
                <div class="pic-wrapper">
                    <img src="img/smallmask.png">
                </div>
            </article>

        </div> -->
        <div class="right-col">
            <div class="right-col-wrapper">
                <div class="textContainer">
                    <div class="rightTitle">
                        <?=$frase?>
                    </div>
                </div>

                <div class=textContainer>
                    
                    <?php the_content() ?>
                    
                </div>


                <div class="textContainer">
                    <p class="rightTitle">Date</p>
                    <span><?=$date?></span>
                </div>
                <div class="textContainer">
                    <p class="rightTitle">Clients</p>
                    <span><?=$client?></span>
                </div>
                <div class="textContainer">
                    <p class="rightTitle">Work Done</p>
                    <span><?=$work?></span>
                </div>
                <div class="textContainer">
                    <p class="rightTitle">Preview Link</p>
                    <span><a href="#"><?=$preview?></a></span>
                </div>
                <div class="textContainer">
                    <p class="rightTitle">Category</p>
                    <span>Illustration</span>
                </div>
            </div>
        </div>


</div>

<?php get_footer(); ?>