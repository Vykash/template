<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!--Fogli di stile-->
<link href="<?= get_template_directory_uri()?>/css/reset.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link href="<?= get_template_directory_uri()?>/css/style2.css" rel="stylesheet">
<link href=<?= get_template_directory_uri()?>/css/responsive.css rel="stylesheet">

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
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                </nav>
            </div>
        </div>
        <div class="header-box bg_red">
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
                        <h1>404 <div class="color_white">Oops!</div></h1>
                        <h2>Seems like there's <div class="color_white">no such page.</div></h2>
                        <div class="color_white small_font">We've searched more than 404 pages and none of them seems to be the one you're looking for.
                        </div>
                        <?php get_search_form()?>
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
<?php get_footer(); ?>