(function($){
    $.fn.preloadImages = function(options){

        var defaults = {
            showSpeed: 'fast',
            easing: 'easeOutQuad'
        };

        var options = $.extend(defaults, options);

        return this.each(function(){
            var container = $(this);
            var image = container.find('img');

            $(image).css({
                "visibility": "hidden",
                "opacity": "0"
            });
            $(image).bind('load error', function(){
                $(this).css({
                    "visibility": "visible"
                }).animate({
                    opacity:"1"
                }, {
                    duration:options.showSpeed,
                    easing:options.easing
                }).parent(container).removeClass('preload');
            }).each(function(){
                if(this.complete || ($.browser.msie && parseInt($.browser.version) == 6)) {
                    $(this).trigger('load');
                }
            });
        });
    }
})(jQuery);