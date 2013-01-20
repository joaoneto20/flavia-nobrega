/* 
    tagDiv - 2012
    Our portofolio:  http://themeforest.net/user/tagDiv/portfolio
*/



//hide the gallery loading screen
jQuery(window).load(function () {
   jQuery("#loadingScreen").fadeOut('slow');
});




jQuery().ready(function() {
    
    
    /*
     * if it's a gallery, built the horizontal table
     */
    if (td_isGallery()){ 


        //attach the mouse wheel eventz
        jQuery(document).mousewheel(function(event, delta) {
            event.preventDefault();

            //jQuery("#ra").val(delta);

            if (jQuery("html, body").is(':animated')) { /* the animation is already running */
                jQuery("html, body").stop(true, false);

                var newXposition = jQuery(document).scrollLeft() - (delta * 250);
                jQuery("html, body").animate({scrollLeft: newXposition}, 100);

            } else {
                var newXposition = jQuery(document).scrollLeft() - (delta * 100);
                jQuery("html, body").animate({scrollLeft: newXposition}, 100);

            }

        });
       
        //build the talbe
        jQuery("#xcontent").wrapInner('<table id="xcontent-table" cellspacing="0" cellpadding="0"><tr>');
        
        
        if (jQuery.browser.msie && parseInt(jQuery.browser.version) == 9){
            //fix bug for ie9 :|
            jQuery(".gallery-image-post").wrap('<td valign="top">');
        } else {
            jQuery(".gallery-image-post").wrap('<td>');
        }
        
        

        

        //compute the floor and ceiling width
        computeHeaderAndFooter();

       
        /*
        *  Reflection
        */
       
       if (jQuery.browser.msie  && parseInt(jQuery.browser.version, 10) === 8) {
            
        } else {
            if (jQuery(window).height() < 800) {
                jQuery(".wp-post-image").reflect({
                    height:'60',
                    opacity:'0.3'

                });

            } else {
                jQuery(".wp-post-image").reflect({
                    height:'80',
                    opacity:'0.3'
                });
            }
            
        }
        
    } //end galeery check
    
    
    
    
    /*
     * IE 8 check and fix (global)
     */
    var ua = jQuery.browser;
    if ( ua.msie && ua.version.slice(0,1) == "8" ) {
        //fix for the easy table plugin :| for ie 8 
        jQuery('table').removeClass('tablesorter');
    } else {
        //load the modal only on non IE8 browsers
        jQuery(document).ready(function($){
            $("a.lightbox").colorbox({maxWidth:"95%", maxHeight:"95%", rel:"gal"});
	});
    }
    
    
    
    /*
     *  The reponsive menu
     */
    jQuery('#showHideMenu').click(function(event){
           jQuery('.categories-menu').toggleClass('responsive-menu-visible');
    });

    
    //fix for colorbox modal
    jQuery('#cboxClose').click(function(event){
         jQuery(this).delay(300).queue(function(){ 
               jQuery(window).scrollTop(0);
               jQuery(this).dequeue(); 
           });

           jQuery(this).delay(400).queue(function(){ 
               jQuery(window).scrollTop(0);
               jQuery(this).dequeue(); 
           });

    });



    //comput the viningette
    td_computeVin();
    
    nice_scrollbar();
        
    content_toggle();
    tooltip();
    footerPosition();
    
    
    
        jQuery('.nav-tabs a').click(function(event){
            jQuery(this).delay(400).queue(function(){ 
                jQuery(".content-scroll").getNiceScroll().resize();
                jQuery(this).dequeue(); 
            });
           
        });
        
        
        jQuery('.content-scroll-item').click(function(event){
            
            //stop the video
            var currentVideoID = jQuery(".nice-video-active").attr('id');
            jQuery("#" + currentVideoID + " iframe").attr("src",jQuery("#" + currentVideoID + " iframe").attr('src')); //stop all youtube videos from the old visible tab
            //alert(currentVideoID);
            
      
            
            jQuery(".nice-video-active").hide();
            jQuery(".nice-video-active").removeClass("nice-video-active");
            
            jQuery("." + jQuery(this).attr('id')).addClass('nice-video-active');
            jQuery("." + jQuery(this).attr('id')).show();
            
        });
    
}); //end on load

function footerPosition() {
    
    var footerTop = jQuery("#footer").offset().top;
    var windowHeight = jQuery(window).height();
    
    var bottom  = parseInt(windowHeight) - (parseInt(footerTop) + 186);


    if (bottom > 0) {
        if (jQuery("body").hasClass('page-template-page-home-php') || jQuery("body").hasClass('gallery-body')) {
            return;
        }
        jQuery("#footer").hide();
    } else {
        jQuery("#footer").show();
    }

    jQuery(this).delay(1000).queue(function(){ 
       if (bottom > 0) {
           if (jQuery("body").hasClass('page-template-page-home-php') || jQuery("body").hasClass('gallery-body')) {
               return;
           }
           jQuery("#footer").hide();
       } else {
           jQuery("#footer").show();
       }
       jQuery(this).dequeue(); 
   });
}

//center on browser window resize
jQuery(window).resize(function() {
    computeHeaderAndFooter();
    td_computeVin();
    
    jQuery(".content-scroll").getNiceScroll().resize();
});



function computeHeaderAndFooter() {
    
    
    if (td_isGallery()){
    
    
    

        //total number of posts for each type
        var imageLPostNo = jQuery('.gallery-image-l').length;
        var imagePPostNo = jQuery('.gallery-image-p').length;
        var imageSPostNo = jQuery('.gallery-image-s').length;

        //get the mergin left
        var xcontentMargin = parseInt(jQuery('#xcontent').css('marginLeft').replace("px", "")); //the left padding

        //get the padding right for each picture


        var paddingRight = parseInt(jQuery('.gallery-image-post').css('paddingRight').replace("px", "")); //the left padding

       // alert(paddingRight);

        //var paddingRight = 150; //the space between pictures


        var imageWidthRawL = jQuery('.gallery-image-l').css('width');
        if (imageWidthRawL) {
            var imageWidthL = parseInt(imageWidthRawL.replace("px", ""));
        } else {
            var imageWidthL = 0;
        }


        var imageWidthRawP = jQuery('.gallery-image-p').css('width');
        if (imageWidthRawP) {
            var imageWidthP = parseInt(imageWidthRawP.replace("px", ""));
        } else {
            var imageWidthP = 0;
        }


        var imageWidthRawS = jQuery('.gallery-image-s').css('width');
        if (imageWidthRawS) {
            var imageWidthS = parseInt(imageWidthRawS.replace("px", ""));
        } else {
            var imageWidthS = 0;
        }


        var plusSize = 0;
        if (jQuery(window).height() < 850) {
            plusSize = 280;
        } else {
            plusSize = 150;
        }


        var totalImagesWidth = imageLPostNo * (imageWidthL + paddingRight) + imagePPostNo * (imageWidthP + paddingRight) + imageSPostNo * (imageWidthS + paddingRight) + plusSize;





        //jQuery(this).delay(4000).queue(function(){ 
        var contentWidth = (totalImagesWidth) + xcontentMargin;

        //min width    
        if (contentWidth < jQuery(window).width()) {
            contentWidth = jQuery(window).width();
        }    

            jQuery("#ceiling").css('width', contentWidth + 'px');
            jQuery("#footer").css('width', contentWidth + 'px');

        //    jQuery(this).dequeue(); 
        //});


    }
    

    
}



/*
 * compute the vinigett effect
 */
function td_computeVin() {
    jQuery("#vignette").css('height', jQuery(window).height() + 'px');
}


function td_isGallery() {
    if (jQuery("#xcontent")[0]){ 
        return true;
    } else {
        return false;
    }
}











    function tooltip() {
      
        jQuery('.content-tooltip').tooltip();
        jQuery('.content-popover').popover()
    }


    function content_toggle() {
        jQuery('.toggle-panel-hide').hide(); //hide the pannels
        
        jQuery('.content-toggle').click(function(event){
            event.preventDefault();
           
           
            var ua = jQuery.browser;
            if ( ua.msie && ua.version.slice(0,1) == "8" || ua.msie && ua.version.slice(0,1) == "7" ) {
                jQuery('.' + jQuery(this).attr('id')).toggle();
            } else {
                jQuery('.' + jQuery(this).attr('id')).toggle('fast');
            }
            


            //console.log(jQuery(this).children('span'));
            if (jQuery(this).children('span').hasClass('toggle-icon-visible')) {
                jQuery(this).children('span').removeClass('toggle-icon-visible');
                jQuery(this).children('span').addClass('toggle-icon-hidden');
            } else {
                jQuery(this).children('span').removeClass('toggle-icon-hidden');
                jQuery(this).children('span').addClass('toggle-icon-visible');
            }
        });
    }
    
    
    /**
     * Nice scroll bar from index
     */
    function nice_scrollbar() {
        
        jQuery(".content-scroll").niceScroll({cursorborder:"", cursorcolor:"#A4A4A4", boxzoom:false, cursoropacitymin:0.2, cursoropacitymax:0.8,background:"#F6F6F6"}); // First scrollable DIV
    }