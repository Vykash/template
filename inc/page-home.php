<!--CONTENITORE IMMAGINI PRINCIPALI-->
    <div class="container" id="post-grid">
<?php 

$offset = 0;
        
if(isset($_GET['offset'])){
    $offset = $_GET['offset'];
}
        
$args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => 2,
    'order' => 'title',
    'offset' => $offset,
);

$query = new WP_Query($args);

if ($query->have_posts()){

$x = 0;
$y = 0;

    while($query->have_posts()){
        $query->the_post();
        
    $categoria = get_the_category();
 
    if($x == 0){
        $direzione = 'right';
    }else if($x == 1){
        $direzione = 'left';
    }
        
            ?>
       
        <article class="item item-<?=$direzione?>" data-n="<?=$y?>">
           <a href="<?php the_permalink()?>">
            <div class="titleWrapper">
                <div class="rotateWrapper">
                    <div class="rotate90">
                        <span class="title"><?php the_title()?> <?php the_ID() ?></span>/<span class="cat"><?php echo $categoria[0]->name; the_date('F j, Y g:i a')?></span>
                    </div>
                </div>
            </div>
            <div class="pics-wrapper">
                <?php if(!empty(get_the_post_thumbnail_url()) && get_the_post_thumbnail_url() != NULL){ ?>
                    <?php the_post_thumbnail() ?>
                <?php }else{?>
                    <img src="https://via.placeholder.com/600x600" height="600" width="600">
                <?php } ?>
                
            </div>
            </a>
            <script type="text/javascript">
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
            </script>
        </article>
        
        <?php 
        if($x == 1){
            $x = 0;
        }else{
            $x++;
        }
        $y++;
    }
}
wp_reset_postdata();
        
?>
       
        <button id="loadMore" class="standard_btn" style="background-color:<?php the_field('colore_header') ?>;">Carica altro</button>
    </div>
        
        <script>
            jQuery(document).on('ready',function(){
                var page = 2;
                var nPost = jQuery('#post-grid .item').length;
                jQuery('#loadMore').on('click',function(){
                    jQuery('#loadMore').animate({marginTop:'1000px'},500);
                    //jQuery('#new-posts').load('<?=get_site_url()?>/page/<?=$current_page+1?> #post-grid .item');
                    //resizeGridItems();
                    
                    
                    jQuery.ajax({
                        url: "<?=get_site_url()?>",
                        type: 'GET',
                        dataType: 'html',
                        async: true,
                        cache:'false',
                        data: {
                            'offset':nPost,
                        },
                        success: function(data) {
                            var el = jQuery(data).find('.item');
                            el.css('opacity','0').addClass('nascosto');
                            if(el.length > 0){
                                el.appendTo('#post-grid');
                            }else{
                                jQuery('#loadMore').off().text('non ci sono altri post');
                            }
                            nPost = jQuery('#post-grid .item').length;
                            console.log(nPost);
                            xx = 0;
                            
                            setInterval(function(){
                                jQuery('.item.nascosto').eq(xx).animate({opacity:1},500,function(){
                                    //jQuery('.item.nascosto').removeClass('nascosto');
                                    jQuery('#loadMore').appendTo('#post-grid').animate({marginTop:'0px'},1200);
                                });
                                
                                xx++;
                            },500);
                            
                        },
                        error: function(data){
                            console.log(data.error);
                        }
                    });
                    
                    
                });
            });
        </script>