$(function(){
    
    
    $('.menu-toggle').on('click', function(){
        $('.navigation-bar').addClass('navigation-toggle');
    });
    
    $('.close-icon').on('click',function(){
        $('.navigation-bar').removeClass('navigation-toggle');
    })
    
    $('.top-btn').on('click', function(){
        $('body,html').animate({ scrollTop: 0 }, 800);
    });
    //svg responsive   
    function resizeSvg(genitore,tipo){
        var x = jQuery(window).width();
        var y = jQuery(genitore).height();
        if( x > 480){
            
            if(tipo == 1){
               jQuery(genitore+' svg polygon').attr('points','0,0 '+x+',0 0,'+y); 
               jQuery(genitore+' svg polyline').attr('points', x+',0 0,'+y); 
            }else if(tipo == 2){
                jQuery(genitore+' svg polygon').attr('points','0,'+y+' '+x+',0 '+x+','+y);
                jQuery(genitore+' svg polyline').attr('points', x+',0 0,'+y); 
            }
        }else{
            jQuery(genitore+' svg polygon').attr('points','0,0 0,0 0,0');
        };
        
        
    }
    resizeSvg('.header-triangle', 1);
    resizeSvg('.footer-triangle', 2);
    resizeSvg('.contact-triangle', 2);
    jQuery(window).on('resize', function(){
        resizeSvg('.header-triangle', 1);
        resizeSvg('.footer-triangle', 2);
        resizeSvg('.contact-triangle', 2);
    });
    
    
    
    /*background items*/
    function resizeGridItems(){
        jQuery('.item').each(function(ind){
            var imgH = jQuery(this).
            children('.pics-wrapper').children().height();
            var imgW = jQuery(this).children('.pics-wrapper').children().width();
            var imgsrc = jQuery(this).children('.pics-wrapper').children().attr('src');

            if(jQuery(this).find('.item-bg').lenght == undefined){
                jQuery(this).children('.pics-wrapper').append('<div class="item-bg"></div>');
            }

            jQuery(this).find('.item-bg').css('height', imgH).css('width', imgW).css('background-image', 'url('+imgsrc+')'); 
            console.log('ok');
        });
    }
    resizeGridItems();
    jQuery(window).on('resize',function(){
        resizeGridItems();
    });
    
    
});