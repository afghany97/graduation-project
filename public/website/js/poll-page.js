/* global $*/

$(document).ready(function () {

    $(window).scroll(function () {

        if ($(this).scrollTop() > 100) {
            $('#up-button').fadeIn();
        } else {
            $('#up-button').fadeOut();
        }

    });

    $('#up-button').click(function () {

        $("html, body").animate({scrollTop: 0}, 600);
        return false;

    });

});