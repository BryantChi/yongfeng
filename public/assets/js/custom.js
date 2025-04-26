(function ($) {
    "use strict";


    $(function () {

        // 當頁面加載完成後，將 id="main" 的區域自動滾動到可視範圍內

        if ($('#main').length > 0) {
            // var mintop = 0;
            // if ($(window).width() < 768) {
            //     mintop = 30;
            // }
            $("html, body").animate(
                {
                    scrollTop: $("#main").offset().top - $('.site-navbar').height() + ($('.sub-hero').height() / 2),
                    //
                },
                1000
            ); // 1000 毫秒（1 秒）滾動到該區域
        }


        $(window).on('resize', function () {

            var adHeader = $('.ad-header');
            if ($(window).width() < 768) {
                // adHeader.css({
                //     'top': '3rem',
                //     'margin-bottom': '3rem'
                // });
                var height = adHeader.outerHeight();
                $('.sub-hero-content').css({
                    'height': (height / 2) + 'px'
                });
            } else {
                $('.sub-hero-content').css({
                    'height': 'auto'
                });
            }

            if (adHeader.length > 0) {
                var height = adHeader.outerHeight(); // 或用 height()
                adHeader.css('top', '-' + (height / 2) + 'px');
            }
        }).trigger('resize');
    })

})(jQuery);
