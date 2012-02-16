/*
 * Template Name: Doma
 * Created date: 2010.12.10
 * Author: Olziibat
 * Mail: olziinaa@gmail.com
 */
function setStyle(style){
    if(style=="header-trans"){
        var colo=readCookie('color');
        $('.header').attr('class', 'header '+style);
        $('.bottom').attr('class', 'bottom '+style);
        $('.footer-bottom').attr('class', 'footer-bottom '+style);
        $('.header').css('backgroundColor', colo);
        $('.bottom').css('backgroundColor', colo);
        $('.footer-bottom').css('backgroundColor', colo);
    }else{
        $('.header').attr('class', 'header '+style);
        $('.bottom').attr('class', 'bottom '+style);
        $('.footer-bottom').attr('class', 'footer-bottom '+style);
    }
}
$(document).ready(function() {
    if (jQuery.browser.msie) {
        var zIndexNumber = 1000;
        $('.header div').each(function() {
            $(this).css('zIndex', zIndexNumber);
            zIndexNumber -= 10;
        });
    }
    var st=readCookie('cleanstyle');
    if(st){
        setStyle(st);
    }
    //imgIconOverlay($);
    $('.preload').preloadImages({
        showSpeed: 1000,   // length of fade-in animation, 500 is default
        easing: 'easeOutQuad'   // optional easing, if you don't have any easing scripts - delete this option
    });
    $('.jcycle').cycle({
        fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
        delay: 1000,
        random: 1,
        easing: 'easeInOutExpo',
        prev:    '.prev',
        next:    '.next'
    });
    // JCYCLE PAGER FUNCTION
    $(function() {
        $('.jcycle').after('<div id="jcycle-pager" class="jcycle-pager">').cycle({
            pager:  '#jcycle-pager',
            before: function() {
                if (window.console) console.log(this.src);
            }
        });
    });
    // ROUND ABOUT SLIDER FUNCTION
    $('ul#roundabout').roundabout(
    {
        easing: 'swing',
        duration: 500,
        startingChild: 0,
        shape: 'figure8'

    });
    // ROUND ABOUT SLIDER AUTOPLAY FUNTION
    var interval;

    $('ul#roundabout').hover(
        function() {
            // oh no, it's the cops!
            clearInterval(interval);
        },
        function() {
            // false alarm: PARTY!
            interval = startAutoPlay();
        }
        );

    // let's get this party started
    interval = startAutoPlay();

    function startAutoPlay() {
        return setInterval(function() {
            $('ul#roundabout').roundabout_animateToPreviousChild(500, 'swing');
        }, 5000);
    };
    // KWICK SLIDER FUNCTION
    $('#kwicks').kwicks({
        duration: 200,
        easing: 'linear',
        max: 850,
        autoplay: true
    });
    $('#schema-colorpicker').ColorPicker({
        color: '#fff',
        onShow: function (colpkr) {
            //alert('haha');
            $(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            $(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb,el) {
            $('.bottom').attr('class', 'bottom header-trans');
            $('.footer-bottom').attr('class', 'footer-bottom header-trans');
            createCookie('cleanstyle','header-trans' );
            createCookie('color','#' + hex );
            $('.header').css('backgroundColor', '#' + hex);
            $('.bottom').css('backgroundColor', '#' + hex);
            $('.footer-bottom').css('backgroundColor', '#' + hex);
        }
    });
    $('.styleswitch').click(function(){
        createCookie('cleanstyle',$(this).attr('rel') );
        $('.header').attr('class', 'header '+$(this).attr('rel'));
        $('.bottom').attr('class', 'bottom '+$(this).attr('rel'));
        $('.footer-bottom').attr('class', 'footer-bottom '+$(this).attr('rel'));
    });
    //nivo
    $('.nivo-slideshow').nivoSlider(
    {
        effect:'random', //Specify sets like: 'fold,fade,sliceDown'
        slices:15,
        animSpeed:500, //Slide transition speed
        pauseTime:3000,
        startSlide:0, //Set starting Slide (0 index)
        directionNav:true, //Next & Prev
        directionNavHide:true, //Only show on hover
        controlNav:true, //1,2,3...
        controlNavThumbs:false, //Use thumbnails for Control Nav
        controlNavThumbsFromRel:true, //Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', //Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
        keyboardNav:true, //Use left & right arrows
        pauseOnHover:true, //Stop animation while hovering
        manualAdvance:false, //Force manual transitions
        captionOpacity:0.6, //Universal caption opacity
        beforeChange: function(){},
        afterChange: function(){},
        slideshowEnd: function(){}, //Triggers after all slides have been shown
        lastSlide: function(){}, //Triggers when last slide is shown
        afterLoad: function(){} //Triggers when slider has loaded
    }
    );
    $('.featured-works').cycle({
        fx: 'scrollDown', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
        easing: 'easeInOutExpo',
        timeout:  0,
        prev:    '#prev',
        next:    '#next',
        speed: 200
    });

    $('.fw-imgs').each(function(index){
        $(this).before('<ul class="pi-pager nav'+index+'">').cycle({
            fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
            easing: 'easeInOutExpo',
            delay: 10,
            speed: 500,
            pager:  '.nav'+index,
            // callback fn that creates a thumbnail to use as pager anchor
            pagerAnchorBuilder: function(idx, slide) {
                return '<li><a href="#">*</a></li>';
            }
        });
    });
    
    // TESTIMONIALIS
    $('.testiominals').cycle({
        fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
        easing: 'easeInOutExpo',
        delay: 10,
        speed: 500,
        prev:    '.tprev',
        next:    '.tnext'
    });
    // PRODUCT SLIDER
    $(".featured-products").carouFredSel({
        items: {
            visible: 4,
            minimum: 4
        },
        scroll: {
            mousewheel: true
        },
        auto: {
            easing: "easeInOutExpo",
            duration: 1000
        },
        prev : {
            button	: "#foo2_prev",
            key		: "left"
        },
        next : {
            button	: "#foo2_next",
            key		: "right"
        }
    });
    // TWEET JS FUNCTION
    $(".tweet").tweet({
        username: "themeton",
        join_text: "auto",
        avatar_size: 40,
        count: 10,
        auto_join_text_default: "we said,",
        auto_join_text_ed: "we",
        auto_join_text_ing: "we were",
        auto_join_text_reply: "we replied to",
        auto_join_text_url: "we were checking out",
        loading_text: "loading tweets..."
    }).ajaxStop(function(){
        $('.tweet').vTicker({
            speed: 500,
            pause: 10000,
            showItems: 3,
            animation: 'fade',
            mousePause: true,
            height: 0,
            direction: 'up'
        });
    });
    // OVER LABEL FUNCTION
    $("label.overlabel").overlabel();
    // ADDED FORM VALIDATION STYLE
    $("input[type='text']:not(.noStyle), input[type='password']:not(.noStyle)").each(function(){
        //$(this).addClass('textInput');
        });
    // Focus and blur style changing
    $('.textInput').blur( function() {
        $(this).removeClass('inputFocus');
    }).focus( function() {
        $(this).addClass('inputFocus');
    });
    
    // SOCIAL ICONS HOVER EFFECT
    $(".social-icons-list li").hoverIntent(
        function () {
            $(this).animate({
                opacity:1
            }, 500, 'swing');
        },
        function () {
            $(this).animate({
                opacity:.5
            }, 500, 'swing');
        }
        );
    // ARTICLE IMAGE HOVER EFFECT
    $(".article-image-border").hoverIntent(
        function () {
            $(this).animate({
                borderColor: "#000000"
            }, 0, 'swing');
        },
        function () {
            $(this).animate({
                borderColor: "#FFFFFF"
            }, 0, 'swing');
        }
        );

    // Add VideoJS to all video tags on the page when the DOM is ready
    VideoJS.setupAllWhenReady();

    // TOOL TIP
    $(".tiptip").tipTip({
        maxWidth: "auto",
        edgeOffset: 5,
        defaultPosition: "top",
        fadeIn: 200,
        fadeOut: 300,
        delay: 50
    });
    // PRETTY PHOTO FUNCTIONS
    //$(".zoom").prettyPhoto();
    $(".zoom:first a[rel^='prettyPhoto']").prettyPhoto({
        animationSpeed:'slow',
        theme:'light_square',
        slideshow:2000,
        autoplay_slideshow: false
    });
    $(".zoom:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
        animationSpeed:'fast',
        slideshow:10000
    });
    // qioclstamd
    // DOMContentLoaded
//    $(function() {
//
//        // bind radiobuttons in the form
//        var $filterType = $('#filter input[name="type"]');
//        var $filterSort = $('#filter input[name="sort"]');
//
//        // get the first collection
//        var $applications = $('#applications');
//
//        // clone applications to get a second collection
//        var $data = $applications.clone(false);
//
//        // attempt to call Quicksand on every form change
//        $filterType.add($filterSort).change(function(e) {
//            if ($($filterType+':checked').val() == 'all') {
//                var $filteredData = $data.find('li');
//
//            } else {
//                var $filteredData = $data.find('li[data-type=' + $($filterType+":checked").val() + ']');
//            }
//            //  $sortedData.each(function(index){
//
//            // });
//            // if sorted by size
//            if ($('#filter input[name="sort"]:checked').val() == "size") {
//                var $sortedData = $filteredData.sorted({
//                    by: function(v) {
//                        $(v).find("img").css({
//                            "visibility": "visible",
//                            'opacity':1
//                        });
//
//                        return parseFloat($(v).find('span[data-type=size]').text());
//                    }
//                });
//            } else {
//                // if sorted by name
//                var $sortedData = $filteredData.sorted({
//                    by: function(v) {
//                        $(v).find("img").css({
//                            "visibility": "visible",
//                            'opacity':1
//                        })
//                        return $(v).find('strong').text().toLowerCase();
//                    }
//                });
//            }

            // finally, call quicksand
//            $applications.quicksand($sortedData, {
//                duration: 500,
//                easing: 'swing',
//                adjustHeight: 'dynamic',
//                useScaling: true,
//                enhancement: function(){
//                    $(".article-image-slide").each(function(index){
//                        $(this).before('<ul class="ar-pager nav-item'+index+'">').cycle({
//                            fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
//                            easing: 'easeInOutExpo',
//                            timeout: 0,
//                            speed: 1000,
//                            pager:  '.nav-item'+index,
//                            // callback fn that creates a thumbnail to use as pager anchor
//                            pagerAnchorBuilder: function(idx, slide) {
//                                return '<li><a href="#">*</a></li>';
//                            }
//                        });
//                        $('.ar-pager').animate({
//                            'opacity':'0'
//                        },0,'swing');
//                        imgIconOverlay(jQuery);
//                    });
//                }
//            },
//            function(){
//                //$(".zoom").prettyPhoto();
//                $(".zoom:first a[rel^='prettyPhoto']").prettyPhoto({
//                    animationSpeed:'slow',
//                    theme:'light_square',
//                    slideshow:2000,
//                    autoplay_slideshow: false
//                });
//                $(".zoom:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
//                    animationSpeed:'fast',
//                    slideshow:10000
//                });
//                if (jQuery.browser.msie) {
//                    $('.img-border').each(function() {
//                        PIE.attach(this);
//                    });
//                }
//                //
//                $('.ar-pager').animate({
//                    'opacity':'1'
//                },500,'swing');
//                Cufon.replace('.readmore', {
//                    fontFamily: 'TitilliumText22L-Regular',
//                    hover: true
//                });
//                Cufon.replace(' h1, .portfolio-item-desc2', {
//                    fontFamily: 'TitilliumText22L-Thin',
//                    hover: true
//                });
//
//            // IMAGE OVERLAY
//
//
//            }
//            );
//        });
        $( "#radio" ).buttonset();
        $( "#tabs, #tabs1, #tabs2, #tabs3, #tabs4, #tabs5, #tabs6, #tabs7, #tabs8" ).tabs({
            fxFade: true,
            fxSpeed: 'fast'
        });
        
        // JQUERY TOGGLE FUNTION
        $(".toggle_title").toggle(
            function(){
                jQuery(this).addClass('toggle_active');
                jQuery(this).siblings('.toggle_content').slideDown("fast");
            },
            function(){
                jQuery(this).removeClass('toggle_active');
                jQuery(this).siblings('.toggle_content').slideUp("fast");
            }
            );

    
        if (jQuery.browser.msie) {
            $('.article-image-border,.styled-table,.head-pricing-box,.rosy,.box-content,.box-header,.button ,.head-pricing-box-top ,.img-border, .big-price,.ui-corner-all, .ui-corner-left, .ui-corner-right, .ui-corner-bottom, .ui-corner-top, .ui-corner-br, .ui-corner-bl, .ui-corner-tr, .ui-corner-tl').each(function() {
                PIE.attach(this);
            });
        }
        Cufon.replace('.readmore', {
            fontFamily: 'TitilliumText22L-Regular',
            hover: true
        });
        Cufon.replace(' h1, .portfolio-item-desc2', {
            fontFamily: 'TitilliumText22L-Thin',
            hover: true
        });
        $(".article-image-slide").each(function(index){
            $(this).before('<ul class="ar-pager nav-item'+index+'">').cycle({
                fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
                easing: 'easeInOutExpo',
                timeout: 0,
                speed: 1000,
                pager:  '.nav-item'+index,
                // callback fn that creates a thumbnail to use as pager anchor
                pagerAnchorBuilder: function(idx, slide) {
                    return '<li><a href="#">*</a></li>';
                }
            });
        });
        // IMAGE OVERLAY
        imgIconOverlay(jQuery);
        $( "#accordion, #accordion1, #accordion2, #accordion3, #accordion4, #accordion5, #accordion6, #accordion7, #accordion8" ).accordion({
            autoHeight: false
        });
//    });



    // bind radiobuttons in the form
    var masonrySpeed=500;
    var $wall = jQuery('#applications');
    $wall.masonry({

        singleMode: true,
        // only apply masonry layout to visible elements
        itemSelector: '.portfolio-item:not(.invis)',
        animate: true,
        animationOptions: {
            duration: masonrySpeed,
            queue: false
        }
    });
    var $filterType = jQuery('#filter input[name="type"]');
    $filterType.change(function(e){
        var filteredType=jQuery(this).val();
        if(filteredType=='all'){
            $wall.children('.invis')
            .toggleClass('invis').fadeIn(masonrySpeed);
        }else{
            $wall.children().not('.'+filteredType+'').not('.invis')
            .toggleClass('invis').fadeOut(masonrySpeed);
            $wall.children('.'+filteredType).each(function(){

                if(jQuery(this).hasClass('invis')){
                    jQuery(this).toggleClass('invis').fadeIn(masonrySpeed);
                }
            });

        }
        $wall.masonry();
    });
    
    

});



ddsmoothmenu.init({
    mainmenuid: "smoothmenu1", //menu DIV id
    orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
    classname: 'ddsmoothmenu', //class added to menu's outer DIV
    //customtheme: ["#1c5a80", "#18374a"],
    contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

Cufon.replace('h2, h3, h4, h5, .dropcap', {
    fontFamily: 'TitilliumText22L-Thin',
    hover: true
});
Cufon.replace('.home h2, .teaser-text, .fw-pager a, a.prev, a.next, .fp-pager a, .bottom h1, .footer h1', {
    fontFamily: 'TitilliumText22L-Light',
    hover: true
});
Cufon.replace('.feature h2, a.teaser-button, .tw-data, .product-name, .main-home h2', {
    fontFamily: 'TitilliumText22L-Regular',
    hover: true
});
Cufon.replace('.btn, .ddsmoothmenu > ul > li > a, .testiominals-name, .month, .footer-bottom h1', {
    fontFamily: 'TitilliumText22L-Medium',
    hover: true
});
Cufon.replace('.product-price', {
    fontFamily: 'TitilliumText22L-Bold',
    hover: true
});
Cufon.replace('.day', {
    fontFamily: 'TitilliumText22L-XBold',
    hover: true
});



// Custom sorting plugin
(function($) {
    $.fn.sorted = function(customOptions) {
        var options = {
            reversed: false,
            by: function(a) {
                return a.text();
            }
        };
        $.extend(options, customOptions);
        $data = $(this);
        arr = $data.get();
        arr.sort(function(a, b) {
            var valA = options.by($(a));
            var valB = options.by($(b));
            if (options.reversed) {
                return (valA < valB) ? 1 : (valA > valB) ? -1 : 0;
            } else {
                return (valA < valB) ? -1 : (valA > valB) ? 1 : 0;
            }
        });
        return $(arr);
    };
})(jQuery);

// overlay
function imgIconOverlay($) {


    // This will select the items which should include the image overlays
    $("a.imgMedium:not(.noIcon)").each(function(){
        var	ctnr = $(this);
        // insert the overlay image
        if (ctnr.children('img')) {
            if (ctnr.hasClass('iconPlay')) {
                ctnr.children('img').after($('<div class="imgOverlay symbolPlay"></div>'));
            } else if  (ctnr.hasClass('iconDoc')) {
                ctnr.children('img').after($('<div class="imgOverlay symbolDoc"></div>'));
            } else {
                ctnr.children('img').after($('<div class="imgOverlay symbolZoom"></div>'));
            }
        }

        var overImg = ctnr.children('.imgOverlay');

        if (jQuery.browser.msie && parseInt(jQuery.browser.version, 10) < 6) {
            // IE sucks at fading PNG's with gradients so just use show hide
            overImg.css('visibility','hidden'); // not visible to start

            ctnr.hoverIntent(
                function(){
                    overImg.css('visibility','visible');
                },		// mouseover
                function(){
                    overImg.css('visibility','hidden');
                }		// mouseout
                );
        } else {
            // make sure it's not visible to start
            overImg.css('opacity',0);

            ctnr.hoverIntent(
                function(){
                    overImg.animate({
                        'opacity':'1'
                    },100,'swing');
                },		// mouseover
                function(){
                    overImg.animate({
                        'opacity':'0'
                    },100,'swing');
                }		// mouseout
                );
        }
    });
}
function createCookie(name,value,days)
{
    if (days)
    {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}
function readCookie(name)
{
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++)
    {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function eraseCookie(name)
{
    createCookie(name,"",-1);
}
