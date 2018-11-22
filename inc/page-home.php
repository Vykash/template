<!--CONTENITORE IMMAGINI PRINCIPALI-->
    <div class="container" id="post-grid">
<?php 

$args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => 7,
);
$query = new WP_Query($args);

if ($query->have_posts()){

$x = 0;

    while($query->have_posts()){
        $query->the_post();
        
    $categoria = get_the_category();
 
    if($x == 0){
        $direzione = 'right';
    }else if($x == 1){
        $direzione = 'left';
    }
        
            ?>
        
        <article class="item item-<?=$direzione?>">
           <a href="<?php the_permalink()?>">
            <div class="titleWrapper">
                <div class="rotateWrapper">
                    <div class="rotate90">
                        <span class="title"><?php the_title()?></span>/<span class="cat"><?php echo $categoria[0]->name; ?></span>
                    </div>
                </div>
            </div>
            <div class="pics-wrapper">
                <?php if(!empty(get_the_post_thumbnail_url()) && get_the_post_thumbnail_url() != NULL){ ?>
                    <img src="<?php the_post_thumbnail_url() ?>">
                <?php }else{?>
                    <img src="https://via.placeholder.com/600x600">
                <?php } ?>
                
            </div>
            </a>
        </article>
        
        <?php 
        if($x == 1){
            $x = 0;
        }else{
            $x++;
        }
    }
}
wp_reset_postdata();
?>

        <!-- <article class="item item-left">
            <div class="titleWrapper">
                <div class="rotateWrapper">
                    <div class="rotate90">
                        <span class="title">Octopus</span>/<span class="cat">Illustration</span>
                    </div>
                </div>
            </div>
            <div class="pics-wrapper">
                <img src="<?=get_template_directory_uri()?>/img/themask.jpg">
        
            </div>
        </article>
        <article class="item item-right">
            <div class="titleWrapper">
                <div class="rotateWrapper">
                    <div class="rotate90">
                        <span class="title">Octopus</span>/<span class="cat">Illustration</span>
                    </div>
                </div>
            </div>
            <div class="pics-wrapper">
                <img src="<?=get_template_directory_uri()?>/img/redcar.jpg">
            </div>
        </article>
        <article class="item item-left">
            <div class="titleWrapper">
                <div class="rotateWrapper">
                    <div class="rotate90">
                        <span class="title">Octopus</span>/<span class="cat">Illustration</span>
                    </div>
                </div>
            </div>
            <div class="pics-wrapper">
                <img src="<?=get_template_directory_uri()?>/img/yewllocar.jpg">
            </div>
        </article>
        <article class="item item-right">
            <div class="titleWrapper">
                <div class="rotateWrapper">
                    <div class="rotate90">
                        <span class="title">Octopus</span>/<span class="cat">Illustration</span>
                    </div>
                </div>
            </div>
            <div class="pics-wrapper">
                <img src="<?=get_template_directory_uri()?>/img/blog14-768x576.jpg">
            </div>
        </article>
        <article class="item item-left">
            <div class="titleWrapper">
                <div class="rotateWrapper">
                    <div class="rotate90">
                        <span class="title">Octopus</span>/<span class="cat">Illustration</span>
                    </div>
                </div>
            </div>
            <div class="pics-wrapper">
                <img src="<?=get_template_directory_uri()?>/img/ragazza.jpg">
            </div>
        </article>
        <article class="item item-right">
            <div class="titleWrapper">
                <div class="rotateWrapper">
                    <div class="rotate90">
                        <span class="title">Octopus</span>/<span class="cat">Illustration</span>
                    </div>
                </div>
            </div>
            <div class="pics-wrapper">
                <img src="<?=get_template_directory_uri()?>/img/lettore.jpg">
            </div>
        </article> -->
    </div>