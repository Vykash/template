<?php get_template_part('inc/header-category') ?>

<div class="container_small blog-container-2-col">
        <div class="blog-left-col">   

   
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <?php $colore = get_field('colore_header') ?>
       <?php $categoria = get_categories() ?>
        

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
            <!-- <script type="text/javascript">
            //jQuery(document).on('ready',function(){
                //setTimeout(function(){
                jQuery('.item').each(function(){
                    var item = jQuery(this).children('a');
                    var wrapper = item.children('.pics-wrapper');
            
                    var imgH = wrapper.children('img').attr('height')+'px';
                    console.log(imgH + ' imgH');
                    var imgW = '100%';
                    console.log(imgW + ' imgW');
                    var imgsrc = wrapper.children('img').attr('src');
                    console.log(imgsrc + ' imgsrc');
            
                    if(!wrapper.children('.item-bg').hasClass('fatto')){
                        wrapper.append('<div class="item-bg"></div>');
                    }
            
                    console.log(wrapper.children('.item-bg').lenght);
            
                    wrapper.children('.item-bg').css('height', imgH).css('width', imgW).css('background-image', 'url('+imgsrc+')'); 
                    wrapper.children('.item-bg').addClass('fatto');
                });
                //},3000);
            //});
            </script> -->
        </article>
   
   
    
    <?php endwhile; endif; ?>
    
    
            <article class="blog-post ">
                
                    
                
                
            </article>
            

    </div>

        <div class="blog-right-col">
        <article class="blog-post ">
                <div class="blog-image">
                    <img src="img/sgolf.jpg">
                </div>
                    <h4 class="blog-title color_red">The Secret Character S</h4>
                <div class="post-info">
                    <div class="blog-small">on</div>
                    <div class="blog-date">17 Jan,2016</div>
                    <div class="blog-small">in</div>
                    <div class="blog-cat">Work</div>
                <div class="blog-link-underline">
                    <a class="blog-read-more" href="#">Read More</a>
                    <span class="decorative-underline bg_red"></span>
                </div>

                </div>
                <div class="post-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam maiores laudantium cupiditate, perferendis rerum adipisci dolorem consequatur quam, magni facere!
                </div>
            </article>
            <article class="blog-post ">
                <div class="blog-image">
                    <img src="img/ragazza.jpg">
                </div>
                    <h4 class="blog-title color_pink">Seduction, The only one</h4>
                <div class="post-info">
                    <div class="blog-small">on</div>
                    <div class="blog-date">17 Jan,2016</div>
                    <div class="blog-small">in</div>
                    <div class="blog-cat">Work</div>
                <div class="blog-link-underline">
                    <a class="blog-read-more" href="#">Read More</a>
                    <span class="decorative-underline bg_pink"></span>
                </div>

                </div>
                <div class="post-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam maiores laudantium cupiditate, perferendis rerum adipisci dolorem consequatur quam, magni facere!
                </div>
            </article>
            <article class="blog-post ">
                <div class="blog-image">
                    <img src="img/ocotpus.jpg">
                </div>
                    <h4 class="blog-title color_cream">Green Octopus</h4>
                <div class="post-info">
                    <div class="blog-small">on</div>
                    <div class="blog-date">17 Jan,2016</div>
                    <div class="blog-small">in</div>
                    <div class="blog-cat">Work</div>
                <div class="blog-link-underline">
                    <a class="blog-read-more" href="#">Read More</a>
                    <span class="decorative-underline bg_cream"></span>
                </div>

                </div>
                <div class="post-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam maiores laudantium cupiditate, perferendis rerum adipisci dolorem consequatur quam, magni facere!
                </div>
            </article>



        </div>


    </div>
    
    


<?php get_footer(); ?>