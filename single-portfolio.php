<?php get_header() ?>

<?php

    $sottotitolo = get_field('sottotitolo');
    $frase = get_field('frase_ad_effetto');
    $date = get_field('date');
    $client = get_field('client');
    $work = get_field('work_done');
    $preview = get_field('preview');
    $colore_header = get_field('colore_header');
    
    
?>
<div class="container portfolio-container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

                <div class="textContainer">

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

<?php endwhile; endif;?>
</div>

<?php get_footer(); ?>