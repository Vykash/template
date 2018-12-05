<?php get_template_part('inc/header-category') ?>

<div class="container_small blog-container-2-col">

<div class="blog-left-col">   
   
    <?php 
    $pari = 0;
    $articoli = array();
    
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    
    $colore = get_field('colore_header');
    $categoria = get_categories();
    
    if($pari == 1){
    
    echo $pari;
    ?>

       <article class="blog-post">
           <a href="<?php the_permalink()?>">
                <div class="blog-image">
                    <?php if(!empty(get_the_post_thumbnail_url()) && get_the_post_thumbnail_url() != NULL){ ?>
                        <?php the_post_thumbnail() ?>
                    <?php }else{?>
                        <img src="https://via.placeholder.com/600x600">
                    <?php } ?>
                </div>
                <h4 class="blog-title" style="color:<?=$colore?>"><?php the_title()?></h4>
                <div class="post-info">
                    <div class="blog-small">on</div>
                    <div class="blog-date"><?php the_date()?></div>
                    <div class="blog-small">in</div>
                    <div class="blog-cat"><?php echo $categoria[0]->name?></div>
                <div class="blog-link-underline">
                    <a class="blog-read-more" href="<?php the_permalink()?>">Read More</a>
                    <span class="decorative-underline" style="background-color:<?=$colore?>"></span>
                </div>

                </div>
                <div class="post-content">
                    <?php the_excerpt()?>
                </div>
            </a>
            
        </article>
   
   
    
    <?php
        $pari--;
    }else{
        
        if(!empty(get_the_post_thumbnail_url()) && get_the_post_thumbnail_url() != NULL){
             $img = get_the_post_thumbnail();
        }else{
             $img = '<img src="https://via.placeholder.com/600x600">';
        } 
        /*$articoli[] = $pari.'<article class="blog-post">
           <a href="'.get_the_permalink().'">
                <div class="blog-image">
                '.$img.'
                </div>
                <h4 class="blog-title" style="color:<?=$colore?>">'.get_the_title().'</h4>
                <div class="post-info">
                    <div class="blog-small">on</div>
                    <div class="blog-date">'. get_the_date().'</div>
                    <div class="blog-small">in</div>
                    <div class="blog-cat">'.$categoria[0]->name.'</div>
                <div class="blog-link-underline">
                    <a class="blog-read-more" href="'. get_the_permalink().'">Read More</a>
                    <span class="decorative-underline" style="background-color:'.$colore.'"></span>
                </div>

                </div>
                <div class="post-content">
                    '.get_the_excerpt().'
                </div>
            </a>
            
        </article>';*/
        
        $articoli[] = [
            'titolo' => get_the_title(),
            'permalink' => get_the_permalink(),
            'immagine' => $img,
            'data' => get_the_date(),
            'categoria' => $categoria[0]->name,
            'colore' => $colore,
            'excerpt' => get_the_excerpt(),
        ];
        
        $pari++;
    }
    
endwhile; endif; ?>
            

    </div>

        <div class="blog-right-col">
       
           <?php
            
            foreach($articoli as $arr){?>
               
               <article class="blog-post">
                   <a href="<?=$arr['permalink']?>">
                        <div class="blog-image">
                        <?=$arr['immagine']?>
                        </div>
                        <h4 class="blog-title" style="color:<?=$arr['colore']?>"><?=$arr['titolo']?></h4>
                        <div class="post-info">
                            <div class="blog-small">on</div>
                            <div class="blog-date"><?=$arr['data']?></div>
                            <div class="blog-small">in</div>
                            <div class="blog-cat"><?=$arr['categoria']?></div>
                        <div class="blog-link-underline">
                            <a class="blog-read-more" href="<?=$arr['permalink']?>">Read More</a>
                            <span class="decorative-underline" style="background-color:<?=$arr['colore']?>"></span>
                        </div>

                        </div>
                        <div class="post-content">
                            <?=$arr['excerpt']?>
                        </div>
                    </a>

                </article>
                
            <?php } ?>
       
        </div>


    </div>
    
    


<?php get_footer(); ?>