
(function ($) {

    $.fn.divResize = function (options) {

        var element	= $(this),
            defaults = {
                bottomSpacing: 10
            };

        $(element).load(function () {
            //updatePhotoHeight();

            $(window).bind('resize', function () {
                updatePhotoHeight();
            });
        });

        options = $.extend(defaults, options);

        function updatePhotoHeight() {
            var o = options,
            divHeight = $(window).height();

            $(element).css('height', photoHeight - o.bottomSpacing);
        }
    };

}(jQuery));


jQuery(document).ready(function( $ ) {

    var windowHeight = $(window).height();
    var textBlock = $('.text-block');
    var textBlockWidth = $(textBlock).width();


    $(textBlock).css('min-height', windowHeight - 300 + 'px');
    $('.mfl-movie').attr('width', (textBlockWidth) + 'px');



    $('.gallery-icon').find('a').each(function() {
        $(this).attr('rel', 'shadowbox[GALLERY]');

    });

    Shadowbox.init({
        overlayOpacity: 0.65
    });

    $("a.email").each(function(){
        e = this.rel.replace('/','@');
        this.href = 'mailto:' + e;
        $(this).text(e);
    });


/*    $(".home-main2").photoResize({
        bottomSpacing: 250
    });*/


});