$(document).ready(function () {

    $('#toggle').click(function () {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
        $('body').toggleClass('active');
    });

    $(function () {
        if ($(document).width() < '992') {
            $('.nav-search').addClass('open');
        };
        $('.header-info__search .icon-search').click(function (event) {
            event.preventDefault();
            $('.header-info__search').addClass('open');
            $('#searchform input').focus();
        });
        $('.header-info__search .icon-close').click(function (event) {
            event.preventDefault();
            $('.header-info__search').removeClass('open');
        });

    });

    // Scroll to section another page

    $('a.scroll-page').click(function (event) {
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
        event.preventDefault();
    });

});