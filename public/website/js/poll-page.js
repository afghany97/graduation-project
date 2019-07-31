/* global $ document*/

$(document).ready(function(){


    $('#up-button').click(function(){

        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;

    });

    $('#down-button').click(function(){

        $("html, body").animate({ scrollTop: 4010 }, 600);
        return false;

    });

});
