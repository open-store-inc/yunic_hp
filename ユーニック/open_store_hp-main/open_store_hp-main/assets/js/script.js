
// wordpressでは$は使えない
// jQuery(document).ready(function($){
        $('#header-course').click(
        function () {
        $('#header-toggle').slideToggle();
        $('#header-toggle').toggleClass("active");
    });

    $(function () {
        $(window).scroll(function () {
            const wHeight = $(window).height();
            const scrollAmount = $(window).scrollTop();
            $('.scrollanime').each(function () {
                const targetPosition = $(this).offset().top;
                if(scrollAmount > targetPosition - wHeight + 60) {
                    $(this).addClass("fadeInDown");
                }
            });
        });
    });
// });
