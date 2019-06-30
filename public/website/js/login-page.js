/* global $, document*/

$(document).ready(function () {
    'use strict';

    if ($('body').innerWidth() < 567) {
        $('.mobile-flip-card .services-description a').text('Sign In')

    }

    if ($('.mobile-flip-card .services-description a').text() == 'Sign In') {
        $(this).click(function () {

            $('.content').addClass("flip");

        })
    }


});