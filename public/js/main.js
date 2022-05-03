$(document).ready(function () {
    //show-menu//
    $(".icon-menu").click(function () {
        $('#site').toggleClass('open-respon-menu');
        $(".icon-menu #icon").toggleClass("fa-bars fa-times")
        return false
    })
    $(window).resize(function () {
        if ($(document).width() >= 768) {
            $('#site').removeClass('open-respon-menu')
            $(".icon-menu #icon").removeClass("fa-times").addClass("fa-bars")
        }
    })
    //------------------------------------//
    var respon_menu = $('#site>#menu-respon>#menu>.menu-item>.main-menu');
    respon_menu.on('click', function () {
        if (!$(this).parent('li').hasClass('active')) {
            $('.sub-menu').slideUp();
            $(this).parent('li').find('.sub-menu').slideDown();
            $('#site > #menu-respon > #menu > .menu-item').removeClass('active');
            $(this).parent('li').addClass('active');
            return false;
        } else {
            $('.sub-menu').slideUp();
            $('#site > #menu-respon > #menu > .menu-item').removeClass('active');
            return false;
        }
    });
});