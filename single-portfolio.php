<?php get_header() ?>

<?php

    $sottotitolo = get_field('sottotitolo');
    $frase = get_field('frase_ad_effetto');
    $date = get_field('date');
    $client = get_field('client');
    $work = get_field('work_done');
    $preview = get_field('preview');
    $colore_header = get_field('colore_header');

    //ottengo la galleria
    $immagine = get_field('immagine');    
    $str1 = str_replace('>','#', str_replace('<','#',$immagine));
    $str2 = str_replace('src="','**%%',$str1);
    $str3 = str_replace('" class','%%**',$str2);
                                        
    $stringhe_grezze = explode('**', $str3);
                        
    $srcS = array();  
    foreach($stringhe_grezze as $stringa){
        if(stripos($stringa,'%%') !== false){
            $srcS[] = str_replace('%%','',$stringa);
        }
    }
    
    
?>
<div class="container portfolio-container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="left-col">
   <?php 
    $x = 0;
    foreach($srcS as $src): 
    if($x == 0){
        $direzione = right;
    }else if($x == 1){
        $direzione = left;
    }
    ?>
    
    <article class="portfolio-item <?=$direzione?>">
        <div class="titleWrapper">
            <div class="rotateWrapper">
                <div class="rotate90">
                    <span class="title">Cover</span>
                </div>
            </div>
        </div>
        <div class="pic-wrapper">
            <img src="<?=$src?>">
        </div>
    </article>
    <?php 
    if($x == 1){
        $x = 0;
    }else{
        $x++;
    }
    endforeach; ?>
</div>
        
        
    <div class="right-col">
            <div class="right-col-wrapper">
                <div class="textContainer">
                    <div class="rightTitle">
                        <?=$frase?>
                    </div>
                </div>

                <div class="textContainer">

                    <?php the_content(); ?>
                    
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